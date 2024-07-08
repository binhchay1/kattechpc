<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Http\Requests\WarrantyPackageRequest;
use App\Repositories\WarrantyPackageRepository;
use Illuminate\Support\Str;

class WarrantyPackageController extends Controller
{
    private $warrantyPackageRepository;

    public function __construct(
        WarrantyPackageRepository $warrantyPackageRepository
    ) {
        $this->warrantyPackageRepository = $warrantyPackageRepository;
    }

    public function index()
    {
        $listCategory = $this->warrantyPackageRepository->getListWithSortParent();

        return view('admin.warranty-package.index', compact('listCategory'));
    }

    public function createCategory()
    {
        $listCategory = $this->warrantyPackageRepository->index();

        return view('admin.warranty-package.create', compact('listCategory'));
    }

    public function storeCategory(CategoryRequest $request)
    {
        $input = $request->except(['_token']);
        $input = $request->all();
        $input['slug'] =  Str::slug($input['name']);
        if (isset($input['image'])) {
            $input['image']->move(public_path('images/upload/warranty-package/'), $input['image']->getClientOriginalName());
            $path = '/images/upload/warranty-package/' . $input['image']->getClientOriginalName();
            $input['image'] = $path;
        }
        $this->warrantyPackageRepository->create($input);

        return redirect()->route('admin.warrantyPackage.index')->with('success',  __('Danh mục sản phẩm được thêm thành công'));
    }

    public function editCategory($id)
    {
        $warrantyPackage = $this->warrantyPackageRepository->show($id);
        $listCategory = $this->warrantyPackageRepository->getListCategoryExcludeId($id);
        if (empty($warrantyPackage)) {
            return redirect('/404');
        }
        return view('admin.warranty-package.edit', compact('warrantyPackage', 'listCategory'));
    }

    public function updateCategory(WarrantyPackageRequest $request,  $id)
    {
        $input = $request->except(['_token']);
        $input['slug'] =  Str::slug($input['name']);
        if (isset($input['image'])) {
            $input['image']->move(public_path('images/upload/warranty-package/'), $input['image']->getClientOriginalName());
            $path = '/images/upload/warranty-package/' . $input['image']->getClientOriginalName();
            $input['image'] = $path;
        }

        $input = $this->warrantyPackageRepository->update($input, $id);

        return redirect()->route('admin.warrantyPackage.index')->with('success',  __('Danh mục sản phẩm được thay đổi thành công'));
    }

    public function deleteCategory($id)
    {
        $this->warrantyPackageRepository->destroy($id);
        return back()->with('success', __('Danh mục sản phẩm  được xóa  thành công'));
    }
}
