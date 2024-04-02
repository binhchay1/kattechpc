<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Repositories\CategoryPostRepository;
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

    public function index()
    {
        $listCategory = $this->categoryPostRepository->index();

        return view('admin.category-post.index', compact('listCategory'));

    }

    public function createCategory()
    {
        $listCategory = $this->categoryPostRepository->index();

        return view('admin.category-post.create', compact('listCategory'));
    }

    public function storeCategory(CategoryRequest $request)
    {
        $input = $request->except(['_token']);
        $input = $request->all();
        $input['slug'] =  Str::slug($input['name']);
        $this->categoryPostRepository->create($input);

        return redirect()->route('admin.categoryPost.index')->with('success',  __('Danh mục sản phẩm được thêm thành công'));
    }

    public function editCategory( $id)
    {
        $categoryPost = $this->categoryPostRepository->show($id);
        $listCategory = $this->categoryPostRepository->getListCategoryExcludeId($id);
        if (empty($categoryPost)) {
            abort(404);
        }
        return view('admin.category-post.edit', compact('categoryProduct', 'listCategory'));
    }

    public function updateCategory(CategoryRequest $request,  $id)
    {
        $input = $request->except(['_token']);
        $input['slug'] =  Str::slug($input['name']);

        $input = $this->categoryPostRepository->update($input, $id);

        return redirect()->route('admin.categoryPost.index')->with('success',  __('Danh mục sản phẩm được thay đổi thành công'));
    }

    public function deleteCategory( $id)
    {
        $this->categoryPostRepository->destroy($id);
        return back()->with('success', __('Danh mục sản phẩm  được xóa đổi thành công'));
    }
}
