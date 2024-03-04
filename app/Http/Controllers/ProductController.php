<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\ProductRepository;
use App\Http\Requests\ProductRequest;

class ProductController extends Controller
{
    private $productRepository ;

    public function __construct(
        ProductRepository $productRepository
      
    ) {
        $this->productRepository = $productRepository;
    }

    public function index()
    {
        $listProducts = $this->productRepository->index();
        
        return view('admin.product.index', compact('listProducts'));
    }


    public function createProduct()
    {
        return view('admin.product.create');
    }
    
    public function storeProduct(Request $request)
    {
        $input= $request->all();
        dd($input);
        if (isset($input['image'])) {
            $img = $this->utility->saveImageLeague($input);
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
        return view('admin.product.update', compact('product'));
    }

    public function updateProduct(UpdateProductRequest $request, Product $product)
    {
        $data = [
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'type' => $request->type,
        ];

        if ($request->file()) {

            $path = '/uploads/product';
            $image = $request->file('img');
            //Lấy Tên files
            $image_name = $image->getClientOriginalName();
            $image_add = $image_name . "_" . time();
            $image->move(public_path($path), $image_add);

            $data['image'] = "$path/$image_add";
        }

        $isUpdated = $this->productRepository->updateById($product->id, $data);
        if ($isUpdated) {
            alert()->success('Thành công!', 'Cập nhật ' . $request->name . ' thành công!');
        } else {
            alert()->warning('Cảnh báo!', 'Cập nhật sản phẩm lỗi!');
        }

        return redirect()->route('admin.products.index');
    }


    public function deleteProduct(int $productId = 0)
    {
        if (request()->get('id')) {
            $productId = (int) request()->get('id');
        }

        $product = $this->productRepository->deleteById($productId);
        $storage = $this->storageRepository->deleteByProductId($productId);
        $history = $this->storageHistoryRepository->updateStatusByProductId($productId, \App\Enums\StatusStorage::DELETED);

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
