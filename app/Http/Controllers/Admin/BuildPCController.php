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
    private $utility;

    public function __construct(
        BuildPcRepository $buildPcRepository,
        CategoryRepository $categoryRepository,
        Utility $utility
    ) {
        $this->buildPcRepository = $buildPcRepository;
        $this->categoryRepository = $categoryRepository;
        $this->utility = $utility;
    }

    public function index()
    {
        $listBuildPcs = $this->buildPcRepository->index();
        $listBuildPcs = $this->utility->paginate($listBuildPcs, 5);

        return view('admin.build-pc.index', compact('listBuildPcs'));
    }

    public function create()
    {
        $listCategories = $this->categoryRepository->indexOnlyChild();
        return view('admin.build-pc.create', compact('listCategories'));
    }

    public function store(BuildPCRequest $request)
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
            return redirect('/404');
        }
        $listCategories = $this->categoryRepository->indexOnlyChild();

        return view('admin.build-pc.edit', compact('buildPc', 'listCategories'));
    }

    public function update(BuildPCRequest $request,  $id)
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
