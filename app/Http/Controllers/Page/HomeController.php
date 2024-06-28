<?php

namespace App\Http\Controllers\Page;

use App\Enums\Role;
use App\Enums\Utility;
use App\Http\Requests\LoginRequest;
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
use App\Repositories\BrandRepository;
use App\Repositories\CustomerReviewRepository;
use App\Repositories\YoutubeChannelRepository;
use Illuminate\Support\Facades\Config;
use Detection\MobileDetect;
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
    protected $brandRepository;
    protected $youtubeChannelRepository;
    protected $customerReviewRepository;
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
        CategoryPostRepository $categoryPostRepository,
        BrandRepository $brandRepository,
        YoutubeChannelRepository $youtubeChannelRepository,
        CustomerReviewRepository $customerReviewRepository
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
        $this->brandRepository = $brandRepository;
        $this->youtubeChannelRepository = $youtubeChannelRepository;
        $this->customerReviewRepository = $customerReviewRepository;
    }

    public function changeLocate($locale)
    {
        if ($locale) {
            if (in_array($locale, Config::get('app.locale'))) {
                App::setLocale($locale);
                Session::put('lang', $locale);
                Session::save();

                return redirect()->back()->with('locale', $locale);
            }
        }

        return redirect()->back();
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

    public function introduction()
    {
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);

        return view('page.other.introduction', compact('listCategory'));
    }

    public function contactBusiness()
    {
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);

        return view('page.other.contact-business', compact('listCategory'));
    }

    public function viewPromotion()
    {
        $listPromotion = $this->promotionRepository->promotionHome();
        $listPromotionRandom = $this->promotionRepository->promotionRandom();
        $promotionRandom = $this->promotionRepository->promotionRandom();
        $listPromotionDESC = $this->promotionRepository->promotionDESC();
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);
        $listCategoryPost = $this->categoryPostRepository->getListCategoryPost();

        return view('page.promotion.index', compact(
            'listPromotion',
            'listPromotionRandom',
            'promotionRandom',
            'listPromotionDESC',
            'listCategory',
            'listCategoryPost'
        ));
    }

    public function promotionDetail($slug)
    {
        if (!isset($slug)) {
            return redirect('/404');
        }

        $listPromotion = $this->promotionRepository->promotionHome();
        $promotion = $this->promotionRepository->detail($slug);
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);

        return view('page.promotion.promotion-detail', compact('promotion', 'listPromotion', 'listCategory'));
    }

    public function viewPost()
    {
        $listPost = $this->postRepository->postHome();
        $firstPosts1 = $this->postRepository->firstPost();
        if (empty($firstPosts1)) {
            return redirect('/404');
        }
        $secondPost = $this->postRepository->secondPost();
        $postRandom3 = $listPost->splice(1, 3);
        $postRandom4 = $listPost->splice(1, 8);
        $postRandom5 = $this->postRepository->postRandom5();
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);
        $listCategoryPost = $this->categoryPostRepository->getListCategoryPost();

        return view('page.post.posts', compact(
            'listPost',
            'firstPosts1',
            'secondPost',
            'postRandom3',
            'postRandom4',
            'postRandom5',
            'listCategory',
            'listCategoryPost'
        ));
    }

    public function viewHome()
    {
        $getHotSale = $this->layoutRepository->listHotSale();

        if (empty($getHotSale->hot_sale_list_product_id)) {
            $listHotSale = [];
        } else {
            $listProductHotSale = json_decode($getHotSale->hot_sale_list_product_id, true);
            $getListProductHotSale = $this->productRepository->getListProductHotSale($listProductHotSale);
            $listHotSale = $getListProductHotSale;
        }

        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);
        $listCategoryProduct = $listCategory['default'];
        $listNews = $this->postRepository->getListNewsInHomepage();
        $listPromotion = $this->promotionRepository->getListPromotionHomePage();
        $layout = $this->layoutRepository->getListLayout();
        $getSlide = $this->layoutRepository->getSlide();
        $getSlideFooter = $this->layoutRepository->getSlideFooter();
        $getFlashSale = $this->layoutRepository->getFlashSale();
        $listYoutube = $this->youtubeChannelRepository->getListYoutube();
        $listCustomerReview = $this->customerReviewRepository->getListCustomerReview();
        $listFlashSale = [];
        $listSlide = [];
        $listSlideFooter = [];

        if (isset($getSlide->slide_thumbnail)) {
            $listSlide = json_decode($getSlide->slide_thumbnail, true);
        }
        if (isset($getSlideFooter->footer_slide_thumbnail)) {
            $listSlideFooter = json_decode($getSlideFooter->footer_slide_thumbnail, true);
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
                    $product->stock = $listProductFlashSale[$product->code]['stock'];
                }

                if (count($getProductFlashSale) > 0) {
                    $listFlashSale = [
                        'flash_sale_timer' => $getFlashSale->flash_sale_timer,
                        'flash_sale_list_product_id' => $getProductFlashSale
                    ];
                }
            }
        }

        $detect = new MobileDetect();
        $isMobile = $detect->isMobile();

        return view('page.homepage', compact(
            'listCategory',
            'listNews',
            'listHotSale',
            'layout',
            'listSlide',
            'listFlashSale',
            'listPromotion',
            'listCategoryProduct',
            'getFlashSale',
            'listYoutube',
            'listCustomerReview',
            'listSlideFooter',
            'isMobile'
        ));
    }

    public function viewSearch(Request $request)
    {
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);
        $search = $request->get('q');
        $isList = false;
        $listProducts = [];
        $dataBrand = [];
        if ($search) {
            $listProducts = $this->productRepository->getProductBySearch($search);
            if (count($listProducts) > 0) {
                $isList = true;
            }
        }

        return view('page.search', compact('listProducts', 'search', 'isList', 'listCategory', 'dataBrand'));
    }

    public function viewLandingPage($slug)
    {
        $getLandingPage = $this->landingPageRepository->getBySlug($slug);
        if (!$getLandingPage) {
            return redirect('/404');
        }
        $content = $getLandingPage->content;

        return view('page.landing-page', compact('content'));
    }

    public function storeCustomContact(Request $request)
    {
        if (is_numeric($request) || !filter_var($request, FILTER_VALIDATE_EMAIL)) {
            return redirect('/404');
        }

        $this->customContactRepository->store($request);
    }

    public function staffLogin()
    {
        return view('auth.login-staff');
    }

    public function postStaffLogin(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (\Auth::attempt($credentials)) {
            $request->session()->put('email', $credentials['email']);

            if (\Auth::user()->role == Role::STAFF || \Auth::user()->role == Role::ADMIN) {
                return redirect()->route('admin.dashboard');
            } else {
                if ($request->get('return_url')) {
                    $return_url = $request->get('return_url');
                    return redirect($return_url);
                }

                return redirect()->route('staff.login')->withErrors([
                    'custom' => __('Bạn không có quyền truy cập!')
                ]);
            }
        } else {
            return back()->withErrors([
                'custom' => __('Email hoặc mật khẩu không chính xác')
            ]);
        }
    }

    public function registerSuccess()
    {
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);
        return view('auth.register-success', compact('listCategory'));
    }
}
