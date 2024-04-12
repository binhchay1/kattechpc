<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Utility;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Repositories\CategoryRepository;
use Illuminate\Support\Str;

class CategoryProductController extends Controller
{
    private $categoryRepository;
    private $utility;

    public function __construct(
        CategoryRepository $categoryRepository,
        Utility $utility
    ) {
        $this->categoryRepository = $categoryRepository;
        $this->utility = $utility;
    }

    public function index()
    {
        $listCategory = $this->categoryRepository->index();

        return view('admin.category-product.index', compact('listCategory'));
    }

    public function createCategory()
    {
        $listCategory = $this->categoryRepository->index();

        return view('admin.category-product.create', compact('listCategory'));
    }

    public function storeCategory(CategoryRequest $request)
    {
        $input = $request->except(['_token']);
        $input['slug'] = Str::slug($input['name']);
        if (isset($input['image'])) {
        
            $this->utility->saveImageCategory($input);
            $path = '/images/upload/category/' . $input['image']->getClientOriginalName();
            $input['image'] = $path;
        }
        $this->categoryRepository->create($input);

        return redirect()->route('admin.categoryProduct.index')->with('success',  __('Danh mục sản phẩm được thêm thành công'));
    }

    public function editCategory($id)
    {
        $categoryProduct = $this->categoryRepository->show($id);
        $listCategory = $this->categoryRepository->getListCategoryExcludeId($id);
        if (empty($categoryProduct)) {
            abort(404);
        }

        return view('admin.category-product.edit', compact('categoryProduct', 'listCategory'));
    }

    public function updateCategory(CategoryUpdateRequest $request,  $id)
    {
        $input = $request->except(['_token']);
        $input['slug'] =  Str::slug($input['name']);
        if (isset($input['image'])) {
        
            $this->utility->saveImageCategory($input);
            $path = '/images/upload/category/' . $input['image']->getClientOriginalName();
            $input['image'] = $path;
        }
        $input = $this->categoryRepository->update($input, $id);
        

        return redirect()->route('admin.categoryProduct.index')->with('success',  __('Danh mục sản phẩm được thay đổi thành công'));
    }

    public function deleteCategory($id)
    {
        $this->categoryRepository->destroy($id);

        return back()->with('success', __('Danh mục sản phẩm  được xóa đổi thành công'));
    }
}
