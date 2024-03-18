<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    
    private  $product;
    
    public function __construct(
        ProductRepository $productRepository
    )
    {
        $this->productRepository = $productRepository;
    }
    
    public function viewHome()
    {
        $dataProducts = $this->productRepository->index();
        return view('page.homepage', compact('dataProducts'));
    }
    
    public function productDetail($name)
    {
        $product = $this->productRepository->productDetail($name);
        return view('page.product.product-detail', compact('product'));
    }

    public function viewPolicy()
    {
        return view('page.policy');
    }

    public function viewPromotion()
    {
        return view('page.homepage');
    }

    public function viewAccount()
    {
        return view('page.account');
    }

    public function viewPost()
    {
        return view('page.post');
    }
}
