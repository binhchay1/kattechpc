<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Repositories\CustomContactRepository;
use App\Repositories\MaintenanceModeRepository;
use App\Repositories\ProductRepository;
use App\Repositories\OrderRepository;
use App\Repositories\VisitorRepository;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Config;

class AdminController extends Controller
{
    private $customContactRepository;
    private $orderRepository;
    private $productRepository;
    private $visitorRepository;
    private $maintenanceModeRepository;

    public function __construct(
        CustomContactRepository $customContactRepository,
        OrderRepository $orderRepository,
        ProductRepository $productRepository,
        VisitorRepository $visitorRepository,
        MaintenanceModeRepository $maintenanceModeRepository
    ) {
        $this->customContactRepository = $customContactRepository;
        $this->orderRepository = $orderRepository;
        $this->productRepository = $productRepository;
        $this->visitorRepository = $visitorRepository;
        $this->maintenanceModeRepository = $maintenanceModeRepository;
    }

    public function changeLocate($locale)
    {
        if ($locale) {
            if (in_array($locale, Config::get('app.locales'))) {
                App::setLocale($locale);
                Session::put('lang', $locale);
                Session::save();

                return redirect()->back()->with('locale', $locale);
            }
        }

        return redirect()->back();
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

            foreach ($product->orderDetails as $orderDetails) {
                $income += $orderDetails->quantity * $orderDetails->price;
                $totalQuantity += $orderDetails->quantity;
            }

            $product->income = $income;
            $product->total_quantity = $totalQuantity;
        }

        return view('admin.dashboard', compact('orderStatic', 'productStatic'));
    }

    public function detailDetail($id)
    {
        $orderDetail = $this->orderRepository->show($id);
        $total = 0;
        foreach ($orderDetail->orderDetails as $detail) {
            $total += $detail->quantity * $detail->price;
        }

        $orderDetail->total = $total;

        return view('admin.order.order-detail', compact('orderDetail'));
    }

    public function listCustomContact()
    {
        $listCustomContact = $this->customContactRepository->paginate();

        return view('admin.custom-contact.index', compact('listCustomContact'));
    }

    public function getDataForIncomeChart()
    {
        $getOrder = $this->orderRepository->getOrderForStaticIncome();
        $data = [
            '01' => 0,
            '02' => 0,
            '03' => 0,
            '04' => 0,
            '05' => 0,
            '06' => 0,
            '07' => 0,
            '08' => 0,
            '09' => 0,
            '10' => 0,
            '11' => 0,
            '12' => 0,
        ];

        foreach ($getOrder as $order) {
            $explodeDate = explode(' ', $order->order_date);
            $explodeMonth = explode('-', $explodeDate[0]);
            $month = $explodeMonth[1];
            $total = 0;
            $arrMonth[] = $month;
            foreach ($order->orderDetails as $detail) {
                $total += ($detail->price * $detail->quantity);
            }

            $data[$month] += $total;
        }

        return response()->json($data);
    }

    public function getDataForVisitorChart()
    {
        $getVisitor = $this->visitorRepository->getVisitorForStatic();
        $data = [
            '01' => 0,
            '02' => 0,
            '03' => 0,
            '04' => 0,
            '05' => 0,
            '06' => 0,
            '07' => 0,
            '08' => 0,
            '09' => 0,
            '10' => 0,
            '11' => 0,
            '12' => 0,
        ];

        foreach ($getVisitor as $visitor) {
            foreach ($data as $key => $val) {
                if ($visitor->month == $key) {
                    $data[$key] += 1;
                }
            }
        }

        return response()->json($data);
    }

    public function changeMaintenance()
    {
        $statusMode = $this->maintenanceModeRepository->index();
        if (empty($statusMode)) {
            $dataCreate = [
                'status' => 'on'
            ];
            $this->maintenanceModeRepository->create($dataCreate);

            return redirect()->back();
        }

        if ($statusMode->status == 'off') {
            $dataUpdate = [
                'status' => 'on'
            ];
        } else {
            $dataUpdate = [
                'status' => 'off'
            ];
        }

        $this->maintenanceModeRepository->update($dataUpdate);

        return redirect()->back();
    }
}
