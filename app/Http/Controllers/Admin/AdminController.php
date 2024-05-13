<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\CustomContactRepository;
use App\Repositories\OrderRepository;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
    private $customContactRepository;
    private $orderRepository;

    public function __construct(
        CustomContactRepository $customContactRepository,
        OrderRepository $orderRepository
    ) {
        $this->customContactRepository = $customContactRepository;
        $this->orderRepository = $orderRepository;
    }

    public function viewDashBoard()
    {
        $orderProduct = $this->orderRepository->getOrderForStatic();

        foreach($orderProduct as $order) {
            $total = 0;
            foreach($order->orderDetails as $detail) {
                $total += $detail->quantity * $detail->price;
            }

            $order->total = $total;
        }

        return view('admin.dashboard', compact('orderProduct'));
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
