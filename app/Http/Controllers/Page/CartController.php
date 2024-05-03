<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Coupon;
use App\Repositories\OrderDetailRepository;
use App\Repositories\OrderRepository;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Session;
use Cart;
use Cache;

class CartController extends Controller
{

    private $productRepository;
    private $orderRepository;
    private $orderDetailRepository;

    public function __construct(
        ProductRepository $productRepository,
        OrderRepository $orderRepository,
        OrderDetailRepository $orderDetailRepository
    ) {
        $this->productRepository = $productRepository;
        $this->orderRepository = $orderRepository;
        $this->orderDetailRepository = $orderDetailRepository;
    }

    public function addCart($slug)
    {
        $dataProduct = $this->productRepository->productDetail($slug);
        Cart::add(
            $dataProduct->id,
            $dataProduct->name,
            (int) str_replace('.', '', $dataProduct->new_price) ?? (int) str_replace('.', '', $dataProduct->price),
            1,
            ['image' => $dataProduct->image]
        );
        Session::put('getProduct', $dataProduct);

        return redirect()->route('showCart');
    }

    public function showCart()
    {
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);
        $totalCart = 0;
        $totalCart = Cart::getTotal();
        $dataCart = Cart::getContent();
        $arrayID = [];
        foreach ($dataCart as $item) {
            array_push($arrayID, $item->id);
        }

        $getListProduct = $this->productRepository->getListProductForCart($arrayID);
        foreach ($getListProduct as $product) {
            foreach ($dataCart as $cart) {
                if ($product->id == $cart->id) {
                    $cart->price = (int) str_replace('.', '', $product->price);
                }
            }
        }

        return view('page.cart.index', [
            'dataCart' => $dataCart,
            'totalCart' => $totalCart,
            'listCategory' => $listCategory,
        ]);
    }

    public function deleteCart($id)
    {
        if ($id) {
            Cart::remove($id);
        }

        return success("Delete success");
    }

    public function updateCart(Request $request)
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

    public function checkout(OrderRequest $request)
    {
        $cartInfor =  Cart::getContent();
        try {
            $input = $request->all();
            $today = date("YmdHis");
            $rand = strtoupper(substr(uniqid(sha1(time())), 0, 4));
            $unique = $today . $rand;
            $input['order_code'] = $unique;
            $order = $this->orderRepository->create($input);

            if (count($cartInfor) > 0) {
                foreach ($cartInfor as $item) {
                    $data = [
                        'order_id' => $order->id,
                        'product_id' => $item->id,
                        'quantity' => $item->quantity,
                        'price' => $request->total_cart,
                    ];

                    $this->orderDetailRepository->create($data);
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
            (int) str_replace('.', '', $dataProduct->new_price) ?? (int) str_replace('.', '', $dataProduct->price),
            $total,
            ['image' => $dataProduct->image]
        );

        return redirect()->back()->with('success', __('Sản phẩm được thêm vào giỏ hàng!'));
    }

    public function addCoupon(Request $request)
    {
        $coupon = Coupon::where('code', $request->discount_amount)->first();
        if (!$coupon) {
            return response()->json(['errors' => __('Không tìm thấy mã giảm giá, làm ơn nhập lại!.')]);
        }
        Session::put('discount', $coupon);

        return response()->json(['success' => __('Mã giảm giá được thêm thành công')]);
    }
}
