<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProductRepository;
use App\Http\Requests\ProductRequest;
use App\Enums\Utility;

class ProductController extends Controller
{
    private $productRepository ;
    private $utility;

    public function __construct(
        ProductRepository $productRepository,
        Utility $utility

    ) {
        $this->productRepository = $productRepository;
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
        return view('admin.product.create');
    }

    public function storeProduct(ProductRequest $request)
    {

        $input = $request->except(['_token']);

        $input= $request->all();
        if (isset($input['image'])) {

            $img = $this->utility->saveImageProduct($input);
            if ($img) {
                $path = '/images/upload/product/' . $input['image']->getClientOriginalName();
                $input['image'] = $path;
            }
        }

        $product = $this->productRepository->store($input);

        return redirect()->route('admin.product.index');
    }


    public function editProduct($id)
    {
        $product = $this->productRepository->show($id);
        return view('admin.product.edit', compact('product'));
    }

    public function updateProduct(UpdateProductRequest $request, $id)
    {
        $input= $request->all();
        if (isset($input['image'])) {
            $img = $this->utility->saveImageProduct($input);
            if ($img) {
                $path = '/images/upload/product/' . $input['image']->getClientOriginalName();
                $input['image'] = $path;
            }
        }

        $product = $this->productRepository->update($input, $id);

        return redirect()->route('admin.product.index');
    }


    public function deleteProduct()
    {

        alert()->success('Thành công!', 'Xóa sản phẩm thành công!');
        return redirect()->route('admin.products.index');
    }

    public function productSearch(Request $request)
    {
        $filter['name'] = $request->name;
        $products = $this->productRepository->getListProduct($filter);
        $categories = $this->productRepository->getCategoriesAndCount();

        return view('pages.products', compact('products', 'categories'));
    }

    public function productDetail(Request $request)
    {
        $id = $request->id;
        $product = $this->productRepository->with('storage')->getById($id);

        return view('pages.detail', compact('product'));
    }
}
