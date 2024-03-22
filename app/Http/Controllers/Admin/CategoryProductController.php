<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    private $categoryRepository;
    
    public function __construct(
        CategoryRepository $categoryRepository
    )
    {
        $this->categoryRepository = $categoryRepository;
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listCategory = $this->categoryRepository->index();
        
        return view('admin.category-product.index',compact('listCategory'));
        
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function createCategory()
    {
        return view('admin.category-product.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function storeCategory(CategoryRequest $request)
    {
        $input = $request->except(['_token']);
        $input = $request->all();
        $input['slug'] =  Str::slug($input['name']);
        $this->categoryRepository->create($input);
        
        return redirect()->route('admin.categoryProduct.index')->with('success',  __('Danh mục sản phẩm được thêm thành công'));
    }
    
    /**
     * Display the specified resource.
     */
    public function showCategory( $id)
    {
        $this->categoryRepository->show($id);
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function editCategory( $id)
    {
        $categoryProduct = $this->categoryRepository->show($id);
        if (empty($categoryProduct)) {
            abort(404);
        }
        return view('admin.category-product.edit', compact('categoryProduct'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function updateCategory(CategoryRequest $request,  $id)
    {
        $input = $request->except(['_token']);
        $input['slug'] =  Str::slug($input['name']);
        
        $input = $this->categoryRepository->update($input, $id);
        
        return redirect()->route('admin.categoryProduct.index')->with('success',  __('Danh mục sản phẩm được thay đổi thành công'));
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function deleteCategory( $id)
    {
        $this->categoryRepository->destroy($id);
        return back()->with('success', __('Danh mục sản phẩm  được xóa đổi thành công'));
    }
}
