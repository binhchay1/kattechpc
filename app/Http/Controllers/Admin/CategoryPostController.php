<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Repositories\CategoryPostRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryPostController extends Controller
{
    private $categoryPostRepository;
    
    public function __construct(
        CategoryPostRepository $categoryPostRepository
    )
    {
        $this->categoryPostRepository = $categoryPostRepository;
    }
    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listCategory = $this->categoryPostRepository->index();
        
        return view('admin.category-post.index',compact('listCategory'));
        
    }
    
    /**
     * Show the form for creating a new resource.
     */
    public function createCategory()
    {
        return view('admin.category-post.create');
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function storeCategory(CategoryRequest $request)
    {
        $input = $request->except(['_token']);
        $input = $request->all();
        $input['slug'] =  Str::slug($input['name']);
        $this->categoryPostRepository->create($input);
        
        return redirect()->route('admin.categoryPost.index')->with('success',  __('Danh mục sản phẩm được thêm thành công'));
    }
    
    /**
     * Display the specified resource.
     */
    public function showCategory( $id)
    {
        $this->categoryPostRepository->show($id);
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function editCategory( $id)
    {
        $categoryPost = $this->categoryPostRepository->show($id);
        if (empty($categoryPost)) {
            abort(404);
        }
        return view('admin.category-post.edit', compact('categoryPost'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function updateCategory(CategoryRequest $request,  $id)
    {
        $input = $request->except(['_token']);
        $input['slug'] =  Str::slug($input['name']);
        
        $input = $this->categoryPostRepository->update($input, $id);
        
        return redirect()->route('admin.categoryPost.index')->with('success',  __('Danh mục sản phẩm được thay đổi thành công'));
    }
    
    /**
     * Remove the specified resource from storage.
     */
    public function deleteCategory( $id)
    {
        $this->categoryPostRepository->destroy($id);
        return back()->with('success', __('Danh mục sản phẩm  được xóa đổi thành công'));
    }
}
