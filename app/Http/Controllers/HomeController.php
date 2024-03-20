<?php

namespace App\Http\Controllers;

use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $productRepository;

    public function __construct(
        ProductRepository $productRepository
    ) {
        $this->productRepository = $productRepository;
    }

    public function viewHome()
    {
        $listKeyboard = $this->productRepository->getListKeyboard();
        $listLaptop = $this->productRepository->getListLaptop();
        $listCase = $this->productRepository->getListCase();

        return view('page.homepage', compact('listKeyboard', 'listLaptop', 'listCase'));
    }

    public function productDetail($slug)
    {
        $product = $this->productRepository->productDetail($slug);
        $productRelated = $this->productRepository->getProductRelated($product->category, $product->id);

        return view('page.product.product-detail', compact('product', 'productRelated'));
    }

    public function viewPolicy()
    {
        return view('page.policy');
    }

    public function viewAccount()
    {
        return view('page.account');
    }

    public function viewPost()
    {
        return view('page.blog.posts');
    }
    
    public function postDetail()
    {
        return view('page.blog.post-detail');
    }
    
    public function viewPromotion ()
    {
        return view('page.promotion.index');
    }
    
    public function promotionDetail()
    {
    
    }
    
    
}
