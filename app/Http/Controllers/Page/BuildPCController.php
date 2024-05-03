<?php

namespace App\Http\Controllers\Page;

use App\Models\Coupon;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Repositories\CategoryRepository;
use App\Repositories\OrderRepository;
use App\Repositories\ProductRepository;
use App\Enums\Category;
use App\Repositories\BuildPcRepository;
use Session;
use Cart;
use Cache;

class BuildPCController extends Controller
{

    private $productRepository;
    private $orderRepository;
    private $buildPcRepository;
    private $categoryRepository;

    public function __construct(
        ProductRepository $productRepository,
        OrderRepository $orderRepository,
        BuildPcRepository $buildPcRepository,
        CategoryRepository $categoryRepository
    ) {
        $this->productRepository = $productRepository;
        $this->orderRepository = $orderRepository;
        $this->buildPcRepository = $buildPcRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function buildPC(Request $request)
    {
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);
        $getProductByKey = $request->get('key');
        $menu = $this->buildPcRepository->index();

        return view('page.build-pc.build-pc', compact('listCategory', 'menu'));
    }

    public function getProduct(Request $request)
    {
        $getProductByKey = $request->get('key');
        if (!isset($getProductByKey)) {
            abort(404);
        }

        $explode = explode('-', $getProductByKey);
        $buildId = $explode[2];
        $arrID = [];

        $getListCategory = $this->buildPcRepository->getListCategory($buildId);
        $decode = json_decode($getListCategory->category_id, true);
        foreach ($decode as $category) {
            $arrID[] = $category;
        }

        $products = $this->productRepository->getListProductForBuild($arrID);
        $data = [
            'products' => $products,
            'menu' => $getProductByKey
        ];

        return \response()->json($data);
    }

    public function addBuildPC(Request $request, $slug)
    {
        $dataProduct = $this->productRepository->productDetail($slug);
        Cart::add(
            $dataProduct->id,
            $dataProduct->name,
            $dataProduct->new_price ??  $dataProduct->price,
            1,
            ['image' => $dataProduct->image]
        );
        return redirect()->route('buildPC');
    }

    public function updateBuildPC(Request $request)
    {
        $id = $request->id;
        $quantity = $request->quantity;

        Cart::update($id, [
            'quantity' => array(
                'relative' => false,
                'value' => $quantity
            ),
        ]);
        return back();
    }

    public function deleteBuildPC($id)
    {
        if ($id) {
            Cart::remove($id);
        }
        return redirect()->back();
    }

    public function checkout(OrderRequest $request)
    {
        $cartInfor =  Cart::getContent();
        try {
            $input = $request->all();
            $order = $this->orderRepository->create($input);
            if (count($cartInfor) > 0) {
                foreach ($cartInfor as $key => $item) {

                    $orderDetail = new OrderDetail();
                    $orderDetail->order_id = $order->id;
                    $orderDetail->product_id = $item->id;
                    $orderDetail->quantity = $item->quantity;
                    $orderDetail->price = $request->total_cart;
                    $orderDetail->save();
                }
                Cart::clear();
            }
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        session()->forget('discount');
        return redirect()->route('thank');
    }
}
