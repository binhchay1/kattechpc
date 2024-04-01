<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Repositories\CategoryRepository;
use Illuminate\Support\Str;

class CategoryProductController extends Controller
{
    private $categoryRepository;

    public function __construct(
        CategoryRepository $categoryRepository
    ) {
        $this->categoryRepository = $categoryRepository;
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
        $input = $request->all();
        $input['slug'] = Str::slug($input['name']);
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

    public function updateCategory(CategoryRequest $request,  $id)
    {
        $input = $request->except(['_token']);
        $input['slug'] =  Str::slug($input['name']);
        $input = $this->categoryRepository->update($input, $id);

        return redirect()->route('admin.categoryProduct.index')->with('success',  __('Danh mục sản phẩm được thay đổi thành công'));
    }

    public function deleteCategory($id)
    {
        $this->categoryRepository->destroy($id);

        return back()->with('success', __('Danh mục sản phẩm  được xóa đổi thành công'));
    }
}
