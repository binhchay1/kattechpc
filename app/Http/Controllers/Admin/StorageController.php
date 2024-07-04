<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ExportStorage;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorageProductRequest;
use App\Http\Requests\StorageRequest;
use App\Repositories\ProductRepository;
use App\Repositories\StorageProductRepository;
use App\Repositories\StorageRepository;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class StorageController extends Controller
{
    private $storageRepository;
    private $productRepository;
    private $productStorageRepository;

    public function __construct(
        StorageRepository $storageRepository,
        ProductRepository $productRepository,
        StorageProductRepository $productStorageRepository
    ) {
        $this->storageRepository = $storageRepository;
        $this->productRepository = $productRepository;
        $this->productStorageRepository = $productStorageRepository;
    }

    public function index()
    {
        $listStorages = $this->storageRepository->index();

        return view('admin.storage.index', compact('listStorages'));
    }

    public function createStorage()
    {
        return view('admin.storage.create');
    }

    public function storeStorage(StorageRequest $request)
    {
        $input = $request->except(['_token']);
        $input = $request->all();
        $this->storageRepository->create($input);

        return redirect()->route('admin.storage.index')->with('success', __('Kho hàng được thêm thành công'));
    }

    public function editStorage($id)
    {
        $storage = $this->storageRepository->show($id);
        if (empty($storage)) {
            return redirect('/404');
        }

        return view('admin.storage.edit', compact('storage'));
    }

    public function updateStorage(StorageRequest $request,  $id)
    {
        $input = $request->except(['_token']);
        $input = $this->storageRepository->update($input, $id);

        return redirect()->route('admin.storage.index')->with('success', __('Kho hàng được thay đổi thành công'));
    }

    public function deleteStorage($id)
    {
        $this->storageRepository->destroy($id);

        return back()->with('success', __('Kho hàng được xóa thành công'));
    }

    public function import($id)
    {
        $storage = $this->storageRepository->show($id);
        $listProducts = $this->productRepository->index();
        return view('admin.storage.import', compact('storage', 'listProducts'));
    }

    public function storeImportProduct(StorageProductRequest $request)
    {
        $input = $request->except(['_token']);
        $this->productStorageRepository->create($input);

        return redirect()->route('admin.storage.index')->with('success', __('Kho hàng được thay đổi thành công'));
    }

    public function listProduct()
    {
        $listProducts = $this->productRepository->index();
        return view('admin.storage.listProduct', compact('listProducts'));
    }

    public function export($id)
    {
        $storage = $this->storageRepository->show($id);
        $listProducts = $this->productRepository->index();

        return view('admin.storage.import', compact('storage', 'listProducts'));
    }

    public function exportExcel(Request $request)
    {
        return Excel::download(new ExportStorage(), 'storage.xlsx');
    }
}
