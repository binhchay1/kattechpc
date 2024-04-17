<?php

namespace App\Http\Controllers\Admin;

use App\Exports\ExportOrder;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Repositories\OrderDetailRepository;
use App\Repositories\OrderRepository;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class OrderController extends Controller
{
    private $orderRepository;
    private $orderDetailRepository;

    public function __construct(
        OrderRepository $orderRepository,
        OrderDetailRepository $orderDetailRepository
    
    )
    {
        $this->orderRepository = $orderRepository;
        $this->orderDetailRepository = $orderDetailRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listOrders = $this->orderDetailRepository->index();
        return view('admin.order.index', compact('listOrders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function createOrder()
    {
        return view('admin.order.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storeOrder(OrderRequest $request)
    {
        $input = $request->except(['_token']);
        $input = $request->all();
        $this->orderRepository->create($input);

        return redirect()->route('admin.order.index')->with('success',  __('Đơn hàng được thay đổi thành công'));
    }

    /**
     * Display the specified resource.
     */
    public function showOrder($id)
    {
        $this->orderRepository->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editOrder($id)
    {
        $order = $this->orderRepository->show($id);
        return view('admin.order.edit', compact('order'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateOrder(OrderRequest $request,  $id)
    {

        $input = $request->except(['_token']);

        $input = $this->orderRepository->update($input, $id);

        return redirect()->route('admin.order.index')->with('success', 'Order successfully updated.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteOrder($id)
    {
        $order = $this->orderRepository->destroy($id);
        if (empty($order)) {
            abort(404);
        }
        return back()->with('success', 'Order successfully updated.');
    }

    public function export(Request $request)
    {
        return Excel::download(new ExportOrder(), 'order.xlsx');
    }
}
