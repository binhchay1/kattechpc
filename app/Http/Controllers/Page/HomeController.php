<?php

namespace App\Http\Controllers\Page;

use App\Enums\Utility;
use App\Repositories\ProductRepository;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\Controller;
use App\Repositories\CategoryPostRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\CustomContactRepository;
use App\Repositories\LandingPageRepository;
use App\Repositories\LayoutRepository;
use App\Repositories\PostRepository;
use App\Repositories\PromotionRepository;
use Illuminate\Http\Request;
use Cache;

class HomeController extends Controller
{
    protected $productRepository;
    protected $categoryRepository;
    protected $landingPageRepository;
    protected $customContactRepository;
    protected $postRepository;
    protected $layoutRepository;
    protected $promotionRepository;
    protected $categoryPostRepository;
    protected $utility;

    public function __construct(
        Utility $utility,
        ProductRepository $productRepository,
        CategoryRepository $categoryRepository,
        LandingPageRepository $landingPageRepository,
        CustomContactRepository $customContactRepository,
        PostRepository $postRepository,
        LayoutRepository $layoutRepository,
        PromotionRepository $promotionRepository,
        CategoryPostRepository $categoryPostRepository
    ) {
        $this->utility = $utility;
        $this->productRepository = $productRepository;
        $this->categoryRepository = $categoryRepository;
        $this->landingPageRepository = $landingPageRepository;
        $this->customContactRepository = $customContactRepository;
        $this->postRepository = $postRepository;
        $this->layoutRepository = $layoutRepository;
        $this->promotionRepository = $promotionRepository;
        $this->categoryPostRepository = $categoryPostRepository;
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
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);

        return view('page.other.policy', compact('listCategory'));
    }

    public function paymentOnline()
    {
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);

        return view('page.other.payment-online', compact('listCategory'));
    }

    public function payment()
    {
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);

        return view('page.other.payment', compact('listCategory'));
    }

    public function viewPromotion()
    {
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);

        return view('page.promotion.index', compact('listCategory'));
    }

    public function promotionDetail()
    {
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);

        return view('page.promotion.promotion-detail', compact('listCategory'));
    }

    public function rules()
    {
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);

        return view('page.other.rule', compact('listCategory'));
    }

    public function complaint()
    {
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);

        return view('page.other.complaint', compact('listCategory'));
    }

    public function productPolicy()
    {
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);

        return view('page.other.product-policy', compact('listCategory'));
    }

    public function businessPolicy()
    {
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);

        return view('page.other.business-policy', compact('listCategory'));
    }

    public function electronicBill()
    {
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);

        return view('page.other.electronic-bill', compact('listCategory'));
    }

    public function securityCustomer()
    {
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);

        return view('page.other.security-customer', compact('listCategory'));
    }

    public function viewHome()
    {
        $listHotSale = $this->layoutRepository->listHotSale();
        foreach ($listHotSale as $product) {
            $product->detail = json_decode($product->detail, true);
            $product->image = json_decode($product->image, true);
        }
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);
        $listCategoryProduct = $listCategory['default'];
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

        return view('page.homepage', compact('listCategory', 'listNews', 'listHotSale', 'layout', 'listSlide', 'listFlashSale', 'listPromotion', 'listCategoryProduct'));
    }

    public function viewPost()
    {
        $listPost = $this->postRepository->index();
        $listPostRandom = $this->postRepository->listPostRandom();
        $listPostDESC = $this->postRepository->listPostDESC();
        $listPostASC = $this->postRepository->listPostASC();
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);
        $listCategoryPost = $this->categoryPostRepository->getListCategoryPost();

        return view('page.blog.posts', compact('listPost', 'listPostRandom', 'listPostDESC', 'listPostASC', 'listCategory', 'listCategoryPost'));
    }

    public function postDetail($slug)
    {
        if (!isset($slug)) {
            abort(404);
        }

        $listPost = $this->postRepository->index();
        $post = $this->postRepository->detail($slug);
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);

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
        if (!isset($slug)) {
            abort(404);
        }

        $filters = [];

        if (isset($request->price)) {
            $filters['price'] = $request->price;
        }

        $dataCategory = $this->categoryRepository->productByCategory($slug, $filters);
        $dataBrand = [];
        $dataDetail = [];
        foreach ($dataCategory->products as $product) {
            if (isset($product->brands->name)) {
                if (!in_array($product->brands->name, $dataBrand)) {
                    $dataBrand[] = $product->brands->name;
                }
            }

            if (isset($product->detail)) {
                $decode = json_decode($product->detail, true);
                foreach ($decode as $key => $value) {
                    if (!array_key_exists($key, $dataDetail)) {
                        $dataDetail[$key][] = $value;
                    } else {
                        if (!in_array($value, $dataDetail[$key])) {
                            $dataDetail[$key][] = $value;
                        }
                    }
                }
            }
        }

        $dataProducts = $this->categoryRepository->productSale($slug);
        $dataCategories = $this->utility->paginate($dataCategory->products, 5);
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);

        return view('page.product.product-category', compact('dataCategories', 'dataProducts', 'listCategory', 'dataCategory', 'dataBrand'));
    }
}
