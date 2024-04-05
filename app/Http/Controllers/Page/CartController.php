<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Models\OrderDetail;
use App\Repositories\OrderRepository;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Cart;
class CartController extends Controller
{
    
    private $productRepository;
    private $orderRepository;
    
    public function __construct(
        ProductRepository $productRepository,
        OrderRepository $orderRepository
    )
    {
        $this->productRepository = $productRepository;
        $this->orderRepository = $orderRepository;
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
            $dataProduct->price,
            1,
            ['image' => $dataProduct->image]
        );
        return redirect()->route('showCart');
        
    }
    
    public function showCart()
    {
        $totalCart = Cart::getTotal();
        $dataCart = Cart::getContent();
        return view('page.cart.index',[
            'dataCart'=> $dataCart,
            'totalCart'=> $totalCart
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
                    $orderDetail->price = $item->price;
                    $orderDetail->save();
                }
                Cart::clear();
            }
            // del
           
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        return redirect()->route('thank');
    }
    
    public function thank()
    {
        return view('page.cart.thank');
    }
    
}
