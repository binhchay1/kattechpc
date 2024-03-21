<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Cart;
class CartController extends Controller
{
    
    private $productRepository;
    
    public function __construct(
        ProductRepository $productRepository
    )
    {
        $this->productRepository = $productRepository;
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
        return back();
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
}
