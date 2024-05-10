<?php

namespace App\Http\Controllers\Admin;

use App\Enums\Utility;
use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Models\Category;
use App\Repositories\CategoryRepository;
use Illuminate\Support\Str;
use Cache;
use Illuminate\Http\Request;
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

            // $this->utility->saveImageCategory($input);
            $input['image']->move(public_path('images/upload/category-product/'), $input['image']->getClientOriginalName());
            $path = '/images/upload/category-product/' . $input['image']->getClientOriginalName();
            $input['image'] = $path;
        }
        $this->categoryRepository->create($input);
        Cache::store('redis')->forget('menu_homepage');

        return redirect()->route('admin.categoryProduct.index')->with('success',  __('Danh mục sản phẩm được thêm thành công'));
    }

    public function editCategory($id)
    {
        $categoryProduct = $this->categoryRepository->show($id);
        $listCategory = $this->categoryRepository->getListCategoryExcludeId($id);
        if (empty($categoryProduct)) {
            return redirect('/404');
        }

        return view('admin.category-product.edit', compact('categoryProduct', 'listCategory'));
    }

    public function updateCategory(CategoryUpdateRequest $request,  $id)
    {
        $input = $request->except(['_token']);
        $input['slug'] =  Str::slug($input['name']);
        if (isset($input['image'])) {

            // $this->utility->saveImageCategory($input);
            $input['image']->move(public_path('images/upload/category-product/'), $input['image']->getClientOriginalName());
            $path = '/images/upload/category-product/' . $input['image']->getClientOriginalName();
            $input['image'] = $path;
        }
        $input = $this->categoryRepository->update($input, $id);
        Cache::store('redis')->forget('menu_homepage');

        return redirect()->route('admin.categoryProduct.index')->with('success',  __('Danh mục sản phẩm được thay đổi thành công'));
    }

    public function deleteCategory($id)
    {
        $this->categoryRepository->destroy($id);
        Cache::store('redis')->forget('menu_homepage');

        return back()->with('success', __('Danh mục sản phẩm  được xóa đổi thành công'));
    }

    public function activeCate(Request $request, $id)
    {
        $categoryProduct = Category::find($id);
        if ($categoryProduct->status) {
            $categoryProduct->status = 0;
        } else {
            $categoryProduct->status = 1;
        }
        $categoryProduct->save();

        return back();
    }
}
