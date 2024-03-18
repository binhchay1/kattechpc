<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Cart;
class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $totalCart = Cart::getTotal();
        $dataCart = Cart::getContent();
       
        return view('page.cart.index', compact('dataCart'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function addToCart(Request $request)
    {
        \Cart::add([
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->image,
            )
        ]);
        session()->flash('success', 'Product is Added to Cart Successfully !');
        
        return redirect()->route('cart.list');
    }
    
    public function updateCart(Request $request)
    {
        \Cart::update(
            $request->id,
            [
                'quantity' => [
                    'relative' => false,
                    'value' => $request->quantity
                ],
            ]
        );
        
        session()->flash('success', 'Item Cart is Updated Successfully !');
        
        return redirect()->route('cart.list');
    }
    
    public function removeCart(Request $request)
    {
        \Cart::remove($request->id);
        session()->flash('success', 'Item Cart Remove Successfully !');
        
        return redirect()->route('cart.list');
    }
    
    public function clearAllCart()
    {
        \Cart::clear();
        
        session()->flash('success', 'All Item Cart Clear Successfully !');
        
        return redirect()->route('cart.list');
    }
}
