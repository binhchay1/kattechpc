<?php

namespace App\Http\Controllers\Page;

use App\Repositories\ProductRepository;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $productRepository;
    protected $categoryRepository;

    public function __construct(
        ProductRepository $productRepository,
        CategoryRepository $categoryRepository
    ) {
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
    }

    public function lang($locale)
    {
        if ($locale) {
            App::setLocale($locale);
            Session::put('lang', $locale);
            Session::save();
            return redirect()->back()->with('locale', $locale);
        } else {
            return redirect()->back();
        }
    }

    public function viewHome()
    {
        $getCategory = $this->categoryRepository->getListCategory();

        return view('page.homepage', compact('getCategory'));
    }

    public function productDetail($slug)
    {
        $product = $this->productRepository->productDetail($slug);
     
        $productRelated = $this->productRepository->getProductRelated($product->category_id, $product->id);

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

    public function viewPromotion()
    {
        return view('page.promotion.index');
    }

    public function promotionDetail()
    {
        return view('page.promotion.promotion-detail');
    }

    public function rules()
    {
        return view('page.rule');
    }

    public function complaint()
    {
        return view('page.complaint');
    }

    public function productPolicy()
    {
        return view('page.product-policy');
    }
}
