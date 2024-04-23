<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\Coupon;
use App\Models\OrderDetail;
use App\Repositories\CategoryRepository;
use App\Repositories\OrderRepository;
use App\Repositories\ProductRepository;
use Session;
use Illuminate\Http\Request;
use Cart;
use function Livewire\Features\SupportTesting\commit;
use Cache;
class CartController extends Controller
{
    
    private $productRepository;
    private $orderRepository;
    private $categoryRepository;
    
    public function __construct(
        ProductRepository $productRepository,
        CategoryRepository $categoryRepository,
        OrderRepository $orderRepository
    )
    {
        $this->productRepository = $productRepository;
        $this->orderRepository = $orderRepository;
        $this->categoryRepository = $categoryRepository;
    }
    
    /**
     * Display a listing of the resource.
     */
    public function addCart(Request $request, $slug)
    {
        $dataProduct = $this->productRepository->productDetail($slug);
        Cart::add(
            $dataProduct->id,
            $dataProduct->name,
            $dataProduct->new_price ??  $dataProduct->price,
            1,
            ['image' => $dataProduct->image]
        );
        Session::put('getProduct', $dataProduct);
        return redirect()->route('showCart');
    }
    
    public function showCart(Request $request)
    {
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);
        $totalCart = Cart::getTotal();
        $dataCart = Cart::getContent();
        return view('page.cart.index',[
            'dataCart'=> $dataCart,
            'totalCart'=> $totalCart,
            'listCategory'=> $listCategory,
        ]);
    }
    
    public function deleteCart($id)
    {
        if($id){
            Cart::remove($id);
        }
        return success("Delete success");
    }
    
    public function updateCart(Request $request)
    {
        $id = $request->id;
        $quantity = $request->quantity;
        
        Cart::update($id,[
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
            // save
            $input = $request->all();
            $order = $this->orderRepository->create($input);
            if (count($cartInfor) >0) {
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
            // del
           
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
    
    public function addToCart($id)
    {
        $listCategory = $this->categoryRepository->getListCategory();
        $dataProduct = $this->productRepository->productDetail($id);
        Cart::add(
            $dataProduct->id,
            $dataProduct->name,
            $dataProduct->price,
            1,
            ['image' => $dataProduct->image]
        );
    
        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }
    
    public function addCoupon(Request $request)
    {
        $coupon = Coupon::where('code', $request->discount_amount)->first();
        if(!$coupon) {
            return response()->json(['errors'=>'   Không tìm thấy mã giảm giá, làm ơn nhập lại!.']);
        }
        Session::put('discount', $coupon);
        return response()->json(['success'=>'Mã giảm giá được thêm thành công']);
       
    }
    
}
