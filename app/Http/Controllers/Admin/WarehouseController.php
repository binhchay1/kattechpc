<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\WarehouseReuqest;
use App\Repositories\WarehouseRepository;
use Illuminate\Http\Request;

class WarehouseController extends Controller
{
    private $warehouseRepository;

    public function __construct(
        WarehouseRepository $warehouseRepository
    )
    {
        $this->warehouseRepository = $warehouseRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listWareHouses = $this->warehouseRepository->index();

        return view('admin.warehouse.index',compact('listWareHouses'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function createWarehouse()
    {
        return view('admin.warehouse.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeWarehouse(WarehouseReuqest $request)
    {
        $input = $request->except(['_token']);
        $input = $request->all();
        $this->warehouseRepository->create($input);

        return redirect()->route('admin.warehouse.index')->with('success', 'Warehouse successfully updated.');
    }

    /**
     * Display the specified resource.
     */
    public function showWarehouse( $id)
    {
        $this->warehouseRepository->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editWarehouse( $id)
    {
        $warehouse = $this->warehouseRepository->show($id);
        return view('admin.warehouse.edit', compact('warehouse'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateWarehouse(WarehouseReuqest $request,  $id)
    {
        $input = $request->except(['_token']);
        $input = $this->warehouseRepository->update($input, $id);

        return redirect()->route('admin.warehouse.index')->with('success', 'Warehouse successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteWarehouse( $id)
    {
        $this->warehouseRepository->destroy($id);
        return back()->with('success', 'Warehouse successfully updated.');
    }
}
