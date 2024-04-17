<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Utility;
use App\Enums\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Repositories\BrandRepository;
use App\Repositories\ProductRepository;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    private $productRepository;
    private $categoryRepository;
    private $brandRepository;
    private $utility;

    public function __construct(
        ProductRepository $productRepository,
        CategoryRepository $categoryRepository,
        BrandRepository $brandRepository,
        Utility $utility
    ) {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->brandRepository = $brandRepository;
        $this->utility = $utility;
    }

    public function index()
    {
        $listProducts = $this->productRepository->index();

        foreach ($listProducts as $product) {
            $product->detail = json_decode($product->detail, true);
            $product->image = json_decode($product->image, true);
        }

        return view('admin.product.index', compact('listProducts'));
    }

    public function createProduct()
    {
        $statusProduct = Product::STATUS;
        $listCategories = $this->categoryRepository->index();
        $listBrands = $this->brandRepository->index();

        return view('admin.product.create', compact('listCategories', 'statusProduct', 'listBrands'));
    }

    public function storeProduct(ProductRequest $request)
    {
        $input = $request->except(['_token']);
        $detail = [];

        if (isset($input['detail_key'])) {
            for ($i = 0; $i < count($input['detail_key']); $i++) {
                $detail[$input['detail_key'][$i]] = $input['detail_value'][$i];
            }
            $input['detail'] = json_encode($detail);
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

        return redirect()->route('admin.product.index')->with('success',  __('Sản phẩm được thêm thành công'));
    }

    public function editProduct($id)
    {
        $statusProduct = Product::STATUS;
        $listCategories = $this->categoryRepository->index();
        $listBrands = $this->brandRepository->index();
        $product = $this->productRepository->show($id);
        $product->detail = json_decode($product->detail, true);
        $product->image = json_decode($product->image, true);

        if (empty($product)) {
            abort(404);
        }

        return view('admin.product.edit', compact('product', 'listCategories', 'statusProduct', 'listBrands'));
    }

    public function updateProduct(ProductUpdateRequest $request, $id)
    {
        $input = $request->except(['_token']);
        $detail = [];

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
        unset($input['detail_value']);
        unset($input['image_preview']);

        $this->productRepository->update($input, $id);

        return redirect()->route('admin.product.index')->with('success', __('Sản phẩm được thay đổi thành công'));
    }

    public function deleteProduct($id)
    {
        $this->productRepository->destroy($id);

        return back()->with('success', __('Sản phẩm được xóa thành công'));
    }

    public function productSearch(Request $request)
    {
        $filter['name'] = $request->name;
        $products = $this->productRepository->getListProduct($filter);
        $categories = $this->productRepository->getCategoriesAndCount();

        return view('pages.products', compact('products', 'categories'));
    }
}
