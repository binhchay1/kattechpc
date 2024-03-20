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
    private $productRepository ;
    private $categoryRepository ;
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
        return view('admin.product.index', compact('listProducts'));
    }

    public function show($id)
    {
        $product = $this->productRepository->show($id);
    }

    public function createProduct()
    {
        $statusProduct = Product::STATUS;
        $listCategories = $this->categoryRepository->index();
        return view('admin.product.create', compact('listCategories','statusProduct'));
    }

    public function storeProduct(ProductRequest $request)
    {

        $input = $request->except(['_token']);

        $input= $request->all();
        $input['slug'] =  Str::slug($input['name']);
        if (isset($input['image'])) {

            $img = $this->utility->saveImageProduct($input);
            if ($img) {
                $path = '/images/upload/product/' . $input['image']->getClientOriginalName();
                $input['image'] = $path;
            }
        }

        $this->productRepository->store($input);

        return redirect()->route('admin.product.index')->with('success', 'Product successfully added.');
    }


    public function editProduct($id)
    {
        $statusProduct = Product::STATUS;
        $listCategories = $this->categoryRepository->index();
        $product = $this->productRepository->show($id);
        if (empty($product)) {
            abort(404);
        }
        return view('admin.product.edit', compact('product', 'listCategories','statusProduct'));
    }

    public function updateProduct(ProductUpdateRequest $request, $id)
    {
        $input = $request->except(['_token']);
        if (isset($input['image'])) {
            $img = $this->utility->saveImageProduct($input);
            if ($img) {
                $path = '/images/upload/product/' . $input['image']->getClientOriginalName();
                $input['image'] = $path;
            }
        }

        $product = $this->productRepository->update($input, $id);

        return redirect()->route('admin.product.index')->with('success', 'Product successfully updated.');
    }


    public function deleteProduct($id)
    {
        $this->productRepository->destroy($id);

        return back()->with('success', 'Product successfully deleted.');
    }

    public function productSearch(Request $request)
    {
        $filter['name'] = $request->name;
        $products = $this->productRepository->getListProduct($filter);
        $categories = $this->productRepository->getCategoriesAndCount();

        return view('pages.products', compact('products', 'categories'));
    }

}
