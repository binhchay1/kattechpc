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
use Session;
use Cart;
use Cache;

class BuildPCController extends Controller
{

    private $productRepository;
    private $orderRepository;
    private $categoryRepository;

    public function __construct(
        ProductRepository $productRepository,
        CategoryRepository $categoryRepository,
        OrderRepository $orderRepository
    ) {
        $this->productRepository = $productRepository;
        $this->orderRepository = $orderRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function buildPC(Request $request)
    {
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);
        $getProductByKey = $request->get('key');

        return view('page.build-pc.build-pc', compact('listCategory'));
    }

    public function getProduct(Request $request)
    {
        $getProductByKey = $request->get('key');
        $products = $this->productRepository->listProduct($getProductByKey);

        return $products;
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

    public function thank()
    {
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);
        return view('page.cart.thank', compact('listCategory'));
    }

    public function addToCart($id, Request $request)
    {
        $total = $request->get('total');
        $dataProduct = $this->productRepository->productDetail($id);
        Cart::add(
            $dataProduct->id,
            $dataProduct->name,
            $dataProduct->price,
            $total,
            ['image' => $dataProduct->image]
        );

        return redirect()->back()->with('success', __('Sản phẩm được thêm vào giỏ hàng!'));
    }

    public function addCoupon(Request $request)
    {
        $coupon = Coupon::where('code', $request->discount_amount)->first();
        if (!$coupon) {
            return response()->json(['errors' => '   Không tìm thấy mã giảm giá, làm ơn nhập lại!.']);
        }
        Session::put('discount', $coupon);
        return response()->json(['success' => 'Mã giảm giá được thêm thành công']);
    }
}