<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFilterRequest;
use App\Repositories\CategoryFilterRepository;
use App\Repositories\CategoryRepository;
use Cache;

class CategoryFilterController extends Controller
{
    private $categoryFilterRepository;
    private $categoryRepository;

    public function __construct(
        CategoryFilterRepository $categoryFilterRepository,
        CategoryRepository $categoryRepository
    ) {
        $this->categoryFilterRepository = $categoryFilterRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $listCategoryFilters = $this->categoryFilterRepository->index();

        return view('admin.category-filter.index', compact('listCategoryFilters'));
    }

    public function create()
    {
        $listCategories = $this->categoryRepository->indexOnlyParent();
        return view('admin.category-filter.create', compact('listCategories'));
    }

    public function store(CategoryFilterRequest $request)
    {
        $input = $request->except(['_token']);

        $this->categoryFilterRepository->create($input);
        Cache::store('redis')->forget('menu_homepage');

        return redirect()->route('admin.category-filter.index')->with('success',  __('Từ khóa danh mục sản phẩm được thêm thành công'));
    }

    public function edit($id)
    {
        $categoryFilter = $this->categoryFilterRepository->show($id);
        if (empty($categoryFilter)) {
            return redirect('/404');
        }
        $listCategories = $this->categoryRepository->indexOnlyParent();
        Cache::store('redis')->forget('menu_homepage');

        return view('admin.category-filter.edit', compact('categoryFilter', 'listCategories'));
    }

    public function update(CategoryFilterRequest $request,  $id)
    {
        $input = $request->except(['_token']);
        $input = $this->categoryFilterRepository->update($input, $id);

        return redirect()->route('admin.category-filter.index')->with('success',  __('Từ khóa danh mục sản phẩm được thay đổi thành công'));
    }

    public function delete($id)
    {
        $this->categoryFilterRepository->destroy($id);

        return back()->with('success', __('Từ khóa danh mục sản phẩm được xóa đổi thành công'));
    }
}
