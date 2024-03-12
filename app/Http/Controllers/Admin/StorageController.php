<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ExportStorage;
use App\Exports\ImportStorage;
use App\Http\Controllers\Controller;
use App\Http\Requests\StorageRequest;
use App\Repositories\StorageRepository;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class StorageController extends Controller
{
    private $storageRepository;

    public function __construct(
        StorageRepository $storageRepository
    )
    {
        $this->storageRepository = $storageRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listStorages = $this->storageRepository->index();

        return view('admin.storage.index',compact('listStorages'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function createStorage()
    {
        return view('admin.storage.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeStorage(StorageRequest $request)
    {
        $input = $request->except(['_token']);
        $input = $request->all();
        $this->storageRepository->create($input);

        return redirect()->route('admin.storage.index')->with('success', 'storage successfully updated.');
    }

    /**
     * Display the specified resource.
     */
    public function showStorage( $id)
    {
        $this->storageRepository->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editStorage( $id)
    {
        $storage = $this->storageRepository->show($id);
        return view('admin.storage.edit', compact('storage'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateStorage(StorageRequest $request,  $id)
    {
        $input = $request->except(['_token']);
        $input = $this->storageRepository->update($input, $id);

        return redirect()->route('admin.storage.index')->with('success', 'storage successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteStorage( $id)
    {
        $this->storageRepository->destroy($id);
        return back()->with('success', 'storage successfully updated.');
    }
    
    public function import(Request $request){
        Excel::import(new ImportStorage(), $request->file('file')->store('files'));
        return redirect()->back();
    }
    
    public function export(Request $request){
        return Excel::download(new ExportStorage(), 'storage.xlsx');
    }
}
