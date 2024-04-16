<?php

namespace App\Http\Controllers\Page;

use App\Enums\Utility;
use App\Repositories\ProductRepository;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use App\Repositories\CustomContactRepository;
use App\Repositories\LandingPageRepository;
use App\Repositories\LayoutRepository;
use App\Repositories\PostRepository;
use App\Repositories\PromotionRepository;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $productRepository;
    protected $categoryRepository;
    protected $landingPageRepository;
    protected $customContactRepository;
    protected $postRepository;
    protected $layoutRepository;
    protected $promotionRepository;
    protected $utility;

    public function __construct(
        Utility $utility,
        ProductRepository $productRepository,
        CategoryRepository $categoryRepository,
        LandingPageRepository $landingPageRepository,
        CustomContactRepository $customContactRepository,
        PostRepository $postRepository,
        LayoutRepository $layoutRepository,
        PromotionRepository $promotionRepository
    ) {
        $this->utility = $utility;
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->landingPageRepository = $landingPageRepository;
        $this->customContactRepository = $customContactRepository;
        $this->postRepository = $postRepository;
        $this->layoutRepository = $layoutRepository;
        $this->promotionRepository = $promotionRepository;
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

    public function viewSearch(Request $request)
    {
        $search = $request->get('q');
        $isList = false;
        $listProducts = [];
        $listCategory = $this->categoryRepository->getListCategory();
        if ($search) {
            $listProducts = $this->productRepository->getProductBySearch($search);
            if (count($listProducts) > 0) {
                $isList = true;
            }
        }
        return view('page.search', compact('listProducts', 'search', 'isList', 'listCategory'));
    }


    public function viewPolicy()
    {
        $listCategory = $this->categoryRepository->getListCategory();

        return view('page.other.policy', compact('listCategory'));
    }

    public function paymentOnline()
    {
        $listCategory = $this->categoryRepository->getListCategory();

        return view('page.other.payment-online', compact('listCategory'));
    }

    public function payment()
    {
        $listCategory = $this->categoryRepository->getListCategory();

        return view('page.other.payment', compact('listCategory'));
    }

    public function viewPromotion()
    {
        $listCategory = $this->categoryRepository->getListCategory();

        return view('page.promotion.index', compact('listCategory'));
    }

    public function promotionDetail()
    {
        $listCategory = $this->categoryRepository->getListCategory();

        return view('page.promotion.promotion-detail', compact('listCategory'));
    }

    public function rules()
    {
        $listCategory = $this->categoryRepository->getListCategory();

        return view('page.other.rule', compact('listCategory'));
    }

    public function complaint()
    {
        $listCategory = $this->categoryRepository->getListCategory();

        return view('page.other.complaint', compact('listCategory'));
    }

    public function productPolicy()
    {
        $listCategory = $this->categoryRepository->getListCategory();

        return view('page.other.product-policy', compact('listCategory'));
    }

    public function businessPolicy()
    {
        $listCategory = $this->categoryRepository->getListCategory();

        return view('page.other.business-policy', compact('listCategory'));
    }

    public function electronicBill()
    {
        $listCategory = $this->categoryRepository->getListCategory();

        return view('page.other.electronic-bill', compact('listCategory'));
    }

    public function securityCustomer()
    {
        $listCategory = $this->categoryRepository->getListCategory();

        return view('page.other.security-customer', compact('listCategory'));
    }

    public function viewHome()
    {
        $listProductSale = $this->productRepository->listProductSale();
        foreach ($listProductSale as $product) {
            $product->detail = json_decode($product->detail, true);
            $product->image = json_decode($product->image, true);
        }
        $listCategory = $this->categoryRepository->getListCategory();
        $listNews = $this->postRepository->getListNewsInHomepage();
        $listPromotion = $this->promotionRepository->getListPromotionHomePage();
        $layout = $this->layoutRepository->getListLayout();
        $getSlide = $this->layoutRepository->getSlide();
        $getFlashSale = $this->layoutRepository->getFlashSale();
        $listFlashSale = [];
        $listSlide = [];

        if (isset($getSlide->slide_thumbnail)) {
            $listSlide = json_decode($getSlide->slide_thumbnail, true);
        }

        if (!empty($getFlashSale)) {
            if (isset($getFlashSale->flash_sale_list_product_id)) {
                $listProductFlashSale = json_decode($getFlashSale->flash_sale_list_product_id, true);
                foreach ($listProductFlashSale as $key => $value) {
                    $arrCodeProduct[] = $key;
                }

                $getProductFlashSale = $this->productRepository->getProductFlashSaleByCode($arrCodeProduct);
                foreach ($getProductFlashSale as $product) {
                    $product->new_price = $listProductFlashSale[$product->code]['new_price'];
                    $product->sale_quantity = $listProductFlashSale[$product->code]['quantity'];
                }

                if (count($getProductFlashSale) > 0) {
                    $listFlashSale = [
                        'flash_sale_timer' => $getFlashSale->flash_sale_timer,
                        'flash_sale_list_product_id' => $getProductFlashSale
                    ];
                }
            }
        }

        return view('page.homepage', compact('listCategory', 'listNews', 'listProductSale', 'layout', 'listSlide', 'listFlashSale', 'listPromotion'));
    }

    public function viewPost()
    {
        $listPost = $this->postRepository->index();
        $listPostRandom = $this->postRepository->listPostRandom();
        $listPostDESC = $this->postRepository->listPostDESC();
        $listPostASC = $this->postRepository->listPostASC();
        $listCategory = $this->categoryRepository->getListCategory();

        return view('page.blog.posts', compact('listPost', 'listPostRandom', 'listPostDESC', 'listPostASC', 'listCategory'));
    }

    public function postDetail($slug)
    {
        $listPost = $this->postRepository->index();
        $post = $this->postRepository->detail($slug);
        $listCategory = $this->categoryRepository->getListCategory();

        return view('page.blog.post-detail', compact('post', 'listPost', 'listCategory'));
    }

    public function viewLandingPage($slug)
    {
        $getLandingPage = $this->landingPageRepository->getBySlug($slug);
        if (!$getLandingPage) {
            abort(404);
        }
        $content = $getLandingPage->content;

        return view('page.landing-page', compact('content'));
    }

    public function storeCustomContact(Request $request)
    {
        if (is_numeric($request) || !filter_var($request, FILTER_VALIDATE_EMAIL)) {
            abort(404);
        }

        $this->customContactRepository->store($request);
    }

    public function showDataCategory(Request $request, $slug)
    {
        $getPrice = $request->get('price');
        $getSortBy = $request->get('sort');

        $dataCategory = $this->categoryRepository->productByCategory($slug, $getPrice, $getSortBy);
        $dataProducts = $this->categoryRepository->productSale($slug);
        $dataCategories = $this->utility->paginate($dataCategory->products, 5);
        $listCategory = $this->categoryRepository->getListCategory();

        return view('page.product.product-category', compact('dataCategories', 'dataProducts', 'listCategory'));
    }
}
