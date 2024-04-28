<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\BuildPcRepository;
use App\Enums\Utility;
use App\Http\Requests\BuildPcRequest;
use App\Http\Requests\UpdateBuildPcRequest;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

class BuildPCController extends Controller
{
    private $buildPcRepository;
    private $categoryRepository;

    public function __construct(
        BuildPcRepository $buildPcRepository,
        CategoryRepository $categoryRepository
    ) {
        $this->buildPcRepository = $buildPcRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function index()
    {
        $listBuildPcs = $this->buildPcRepository->index();

        return view('admin.buildPc.index', compact('listBuildPcs'));
    }

    public function create()
    {
        $listCategories = $this->categoryRepository->indexOnlyChild();
        return view('admin.buildPc.create', compact('listCategories'));
    }

    public function store(BuildPcRequest $request)
    {
        $input = $request->except(['_token']);

        $input['category_id'] = json_encode($input['category_id'], true);

        $this->buildPcRepository->create($input);

        return redirect()->route('admin.buildPC.index')->with('success',  __('Cấu hình được thêm thành công'));
    }

    public function edit($id)
    {
        $buildPc = $this->buildPcRepository->show($id);
        if (empty($buildPc)) {
            abort(404);
        }
        $listCategories = $this->categoryRepository->indexOnlyChild();

        return view('admin.buildPC.edit', compact('buildPc', 'listCategories'));
    }

    public function update(BuildPcRequest $request,  $id)
    {
        $input = $request->except(['_token']);
        $input['category_id'] = json_encode($input['category_id'], true);
        $input = $this->buildPcRepository->update($input, $id);

        return redirect()->route('admin.buildPC.index')->with('success',  __('Cấu hình được thay đổi thành công'));
    }


    public function delete($id)
    {
        $this->buildPcRepository->destroy($id);

        return back()->with('success', __('Cấu hình  được xóa đổi thành công'));
    }
}
