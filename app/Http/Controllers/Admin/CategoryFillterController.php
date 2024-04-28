<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryFilterRequest;
use App\Repositories\categoryFillterRepository;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

class CategoryFillterController extends Controller
{
    private $categoryFillterRepository;
    private $categoryRepository;

    public function __construct(
        categoryFillterRepository $categoryFillterRepository,
        CategoryRepository $categoryRepository
    ) {
        $this->categoryFillterRepository = $categoryFillterRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $listCategoryFilters = $this->categoryFillterRepository->index();

        return view('admin.category-filter.index', compact('listCategoryFilters'));
    }

    public function create()
    {
        $listCategories = $this->categoryRepository->indexOnlyChild();
        return view('admin.category-filter.create', compact('listCategories'));
    }

    public function store(CategoryFilterRequest $request)
    {
        $input = $request->except(['_token']);

        $input['category_id'] = json_encode($input['category_id'], true);

        $this->categoryFillterRepository->create($input);

        return redirect()->route('admin.category-filter.index')->with('success',  __('Thể loại danh mục sản phẩm được thêm thành công'));
    }

    public function edit($id)
    {
        $categoryFilter = $this->categoryFillterRepository->show($id);
        if (empty($categoryFilter)) {
            abort(404);
        }
        $listCategories = $this->categoryRepository->indexOnlyChild();

        return view('admin.category-filter.edit', compact('categoryFilter', 'listCategories'));
    }

    public function update(CategoryFilterRequest $request,  $id)
    {
        $input = $request->except(['_token']);
        $input['category_id'] = json_encode($input['category_id'], true);
        $input = $this->categoryFillterRepository->update($input, $id);

        return redirect()->route('admin.category-filter.index')->with('success',  __('Thể loại danh mục sản phẩm được thay đổi thành công'));
    }


    public function delete($id)
    {
        $this->categoryFillterRepository->destroy($id);

        return back()->with('success', __('Thể loại danh mục sản phẩm được xóa đổi thành công'));
    }
}
