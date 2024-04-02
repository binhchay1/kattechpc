<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Utility;
use App\Enums\Product;
use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Repositories\ProductRepository;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    private $productRepository;
    private $categoryRepository;
    private $utility;

    public function __construct(
        ProductRepository $productRepository,
        CategoryRepository $categoryRepository,
        Utility $utility

    ) {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
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
        return view('admin.product.create', compact('listCategories', 'statusProduct'));
    }

    public function storeProduct(ProductRequest $request)
    {
        $input = $request->except(['_token']);
        $detail = [];

        if (in_array('detail_key', $input)) {
            for ($i = 0; $i < count($input['detail_key']); $i++) {
                $detail[$input['detail_key'][$i]] = $input['detail_value'][$i];
            }
            $input['detail'] = json_encode($detail);
        }

        $input['slug'] =  Str::slug($input['name']);

        if ($request->hasfile('image')) {
            foreach ($request->file('image') as $file) {
                $file->move(public_path('images/upload/product/'), $file->getClientOriginalName());
                $imgData[] = $file->getClientOriginalName();
            }
            $input['image'] = json_encode($imgData);
        }
        $this->productRepository->store($input);

        return redirect()->route('admin.product.index')->with('success',  __('Sản phẩm được thêm thành công'));
    }

    public function editProduct($id)
    {
        $statusProduct = Product::STATUS;
        $listCategories = $this->categoryRepository->index();
        $product = $this->productRepository->show($id);
        $product->detail = json_decode($product->detail, true);
        $product->image = json_decode($product->image, true);

        if (empty($product)) {
            abort(404);
        }

        return view('admin.product.edit', compact('product', 'listCategories', 'statusProduct'));
    }

    public function updateProduct(ProductUpdateRequest $request, $id)
    {
        $input = $request->except(['_token']);
        $detail = [];


        if (in_array('detail_key', $input)) {
            for ($i = 0; $i < count($input['detail_key']); $i++) {
                $detail[$input['detail_key'][$i]] = $input['detail_value'][$i];
            }

            unset($input['detail_key']);
            unset($input['detail_value']);

            $input['detail'] = json_encode($detail);
        }

        if ($request->hasfile('image')) {
            foreach ($request->file('image') as $file) {
                $file->move(public_path('images'), $file->getClientOriginalName());
                $imgData[] = $file->getClientOriginalName();
            }
            $input['image'] = json_encode($imgData);
        }
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
