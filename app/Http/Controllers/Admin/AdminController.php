<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\CustomContactRepository;
use App\Repositories\ProductRepository;
use App\Repositories\OrderRepository;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    private $customContactRepository;
    private $orderRepository;
    private $productRepository;

    public function __construct(
        CustomContactRepository $customContactRepository,
        OrderRepository $orderRepository,
        ProductRepository $productRepository,
    ) {
        $this->customContactRepository = $customContactRepository;
        $this->orderRepository = $orderRepository;
        $this->productRepository = $productRepository;
    }

    public function viewDashBoard()
    {
        $orderStatic = $this->orderRepository->getOrderForStatic();
        $productStatic = $this->productRepository->getProductForStatic();

        foreach ($orderStatic as $order) {
            $total = 0;
            foreach ($order->orderDetails as $detail) {
                $total += $detail->quantity * $detail->price;
            }

            $order->total = $total;
        }

        foreach ($productStatic as $product) {
            $income = 0;
            $totalQuantity = 0;

            foreach($product->orderDetails as $orderDetails) {
                $income += $orderDetails->quantity * $orderDetails->price;
                $totalQuantity += $orderDetails->quantity;
            }

            $product->income = $income;
            $product->total_quantity = $totalQuantity;
        }

        return view('admin.dashboard', compact('orderStatic', 'productStatic'));
    }

    public function lang($locale)
    {
        if ($locale) {
            App::setLocale($locale);
            Session::put('lang', $locale);
            Session::save();
            return redirect()->back()->with('locale', $locale);
        } else {
            return redirect()->back();
        }
    }

    public function listCustomContact()
    {
        $listCustomContact = $this->customContactRepository->paginate();

        return view('admin.custom-contact.index', compact('listCustomContact'));
    }
}
