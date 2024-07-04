<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Repositories\BrandRepository;
use App\Repositories\ProductRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\OrderRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Cache;

class ProductController extends Controller
{
    private $productRepository;
    private $categoryRepository;
    private $brandRepository;
    private $orderRepository;

    public function __construct(
        ProductRepository $productRepository,
        CategoryRepository $categoryRepository,
        BrandRepository $brandRepository,
        OrderRepository $orderRepository
    ) {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->brandRepository = $brandRepository;
        $this->orderRepository = $orderRepository;
    }

    public function index()
    {
        $listProducts = $this->productRepository->index();

        foreach ($listProducts as $product) {
            $product->detail = json_decode($product->detail, true);
            $product->detail_tech  = json_decode($product->detail_tech, true);
            $product->image = json_decode($product->image, true);
        }

        return view('admin.product.index', compact('listProducts'));
    }

    public function createProduct()
    {
        $statusProduct = Product::STATUS;
        $listCategories = $this->categoryRepository->indexOnlyChild();
        $listBrands = $this->brandRepository->index();

        return view('admin.product.create', compact('listCategories', 'statusProduct', 'listBrands'));
    }

    public function storeProduct(ProductRequest $request)
    {
        $input = $request->except(['_token']);
        $detail = [];
        $detail_tech = [];

        if (isset($input['detail_key'])) {
            for ($i = 0; $i < count($input['detail_key']); $i++) {
                $detail[$input['detail_key'][$i]] = $input['detail_value'][$i];
            }
            $input['detail'] = json_encode($detail);
        }

        if (isset($input['detail_tech_key'])) {
            for ($i = 0; $i < count($input['detail_tech_key']); $i++) {
                $detail_tech[$input['detail_tech_key'][$i]] = $input['detail_tech_value'][$i];
            }
            $input['detail_tech'] = json_encode($detail_tech);
        }

        if (isset($input['hot_status'])) {
            $input['hot_status'] = 1;
        }

        if (isset($input['hot_sale_status'])) {
            $input['hot_sale_status'] = 1;
        }

        if (empty($input['title'])) {
            $input['title'] = $input['name'];
        }

        if (empty($input['short_description'])) {
            $strip_tags = strip_tags($input['description']);
            $explode = explode(' ', $strip_tags);
            $count = 0;
            $preText = '';
            foreach ($explode as $text) {
                if ($count == 160) {
                    break;
                }

                if ($count == 0) {
                    $preText .= $text;
                } else {
                    $preText .= ' ' . $text;
                }

                $count++;
            }
            $input['short_description'] = $preText;
        }

        $input['slug'] =  Str::slug($input['name']);

        if ($request->hasfile('image')) {
            if (isset($input['image_preview'])) {
                $explode = explode(',', $input['image_preview']);
                foreach ($explode as $preview)
                    foreach ($request->file('image') as $file) {
                        if ($file->getClientOriginalName() == $preview) {
                            $file->move(public_path('images/upload/product/'), $file->getClientOriginalName());
                            $imgData[] = 'images/upload/product/' . $file->getClientOriginalName();
                        }
                    }
                $input['image'] = json_encode($imgData);
            }
        }

        $this->productRepository->store($input);
        Cache::store('redis')->forget('menu_homepage');

        return redirect()->route('admin.product.index')->with('success',  __('Sản phẩm được thêm thành công'));
    }

    public function editProduct($id)
    {
        $statusProduct = Product::STATUS;
        $listCategories = $this->categoryRepository->indexOnlyChild();
        $listBrands = $this->brandRepository->index();
        $product = $this->productRepository->show($id);
        $product->detail = json_decode($product->detail, true);
        $product->detail_tech = json_decode($product->detail_tech, true);
        $product->image = json_decode($product->image, true);
        if (empty($product)) {
            return redirect('/404');
        }

        return view('admin.product.edit', compact('product', 'listCategories', 'statusProduct', 'listBrands'));
    }

    public function updateProduct(ProductUpdateRequest $request, $id)
    {
        $input = $request->except(['_token']);
        $detail = [];
        $detail_tech = [];

        if (empty($input['image_preview']) or $input['image_preview'] == null) {
            return redirect()->back()->with(['error' => 'Image null']);
        }

        if (isset($input['hot_status'])) {
            $input['hot_status'] = 1;
        } else {
            $input['hot_status'] = 0;
        }

        if (isset($input['hot_sale_status'])) {
            $input['hot_sale_status'] = 1;
        } else {
            $input['hot_sale_status'] = 0;
        }

        if (empty($input['title'])) {
            $input['title'] = $input['name'];
        }

        if (empty($input['short_description'])) {
            $strip_tags = strip_tags($input['description']);
            $explode = explode(' ', $strip_tags);
            $count = 0;
            $preText = '';
            foreach ($explode as $text) {
                if ($count == 160) {
                    break;
                }

                if ($count == 0) {
                    $preText .= $text;
                } else {
                    $preText .= ' ' . $text;
                }

                $count++;
            }
            $input['short_description'] = $preText;
        }

        if (isset($input['detail_key'])) {
            for ($i = 0; $i < count($input['detail_key']); $i++) {
                $detail[$input['detail_key'][$i]] = $input['detail_value'][$i];
            }

            $input['detail'] = json_encode($detail);
        }

        if (isset($input['detail_tech_key'])) {
            for ($i = 0; $i < count($input['detail_tech_key']); $i++) {
                $detail_tech[$input['detail_tech_key'][$i]] = $input['detail_tech_value'][$i];
            }

            $input['detail_tech'] = json_encode($detail_tech);
        }

        if ($request->hasfile('image')) {
            foreach ($request->file('image') as $file) {
                $file->move(public_path('images/upload/product/'), $file->getClientOriginalName());
            }
        }

        $explodeImagePreview = explode(',', $input['image_preview']);
        foreach ($explodeImagePreview as $preview) {
            $imgData[] = 'images/upload/product/' . $preview;
        }

        $input['image'] = json_encode($imgData);

        unset($input['detail_key']);
        unset($input['detail_tech_key']);
        unset($input['detail_value']);
        unset($input['detail_tech_value']);
        unset($input['image_preview']);

        $this->productRepository->update($input, $id);
        Cache::store('redis')->forget('menu_homepage');

        return redirect()->route('admin.product.index')->with('success', __('Sản phẩm được thay đổi thành công'));
    }

    public function deleteProduct($id)
    {
        $this->productRepository->destroy($id);
        Cache::store('redis')->forget('menu_homepage');

        return back()->with('success', __('Sản phẩm được xóa thành công'));
    }

    public function managerSold()
    {
        $getOrder = $this->orderRepository->getAllOrder();
        dd($getOrder);
        $managerSold = [];

        foreach ($getOrder as $order) {
            $detail = [];
            // $detail[]

            $managerSold[] = $detail;
        }

        return view('admin.product.manager-sold', compact('managerSold'));
    }
}
