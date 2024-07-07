<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Http\Requests\RatingRequest;
use App\Repositories\CategoryRepository;
use App\Repositories\PostRepository;
use App\Repositories\RatingRepository;
use App\Repositories\CommentRepository;
use App\Repositories\LayoutRepository;
use App\Repositories\ProductRepository;
use App\Repositories\SessionProductViewedRepository;
use App\Repositories\YoutubeChannelRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Enums\Utility;
use Cache;
use Illuminate\Support\Facades\DB;
use App\Enums\Product;

class ProductController extends Controller
{
    protected $productRepository;
    protected $commentRepository;
    protected $categoryRepository;
    protected $ratingRepository;
    protected $layoutRepository;
    protected $sessionProductViewedRepository;
    protected $postRepository;
    protected $youtubeChannelRepository;
    protected $utility;

    public function __construct(
        ProductRepository $productRepository,
        PostRepository $postRepository,
        RatingRepository $ratingRepository,
        CommentRepository $commentRepository,
        CategoryRepository $categoryRepository,
        LayoutRepository $layoutRepository,
        SessionProductViewedRepository $sessionProductViewedRepository,
        YoutubeChannelRepository $youtubeChannelRepository,
        Utility $utility
    ) {
        $this->postRepository = $postRepository;
        $this->productRepository = $productRepository;
        $this->ratingRepository = $ratingRepository;
        $this->commentRepository = $commentRepository;
        $this->categoryRepository = $categoryRepository;
        $this->layoutRepository = $layoutRepository;
        $this->sessionProductViewedRepository = $sessionProductViewedRepository;
        $this->youtubeChannelRepository = $youtubeChannelRepository;
        $this->utility = $utility;
    }

    public function productDetail(Request $request, $slug)
    {
        if (!isset($slug)) {
            return redirect('/404');
        }

        $postRandom5 = $this->postRepository->postRandom6();
        $youtubeRandom = $this->youtubeChannelRepository->index();
        $dataProduct = $this->productRepository->productDetail($slug);

        if (empty($dataProduct)) {
            return redirect('/404');
        }

        $getProduct = $dataProduct['id'];

        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);
        if (isset($dataProduct->detail)) {
            $dataProduct->detail = json_decode($dataProduct->detail, true);
        }

        if (isset($dataProduct->image)) {
            $dataProduct->image = json_decode($dataProduct->image, true);
        }
        $listComment = $this->commentRepository->index();
        $listRatings = $dataProduct->ratings;
        $ratingSum = $dataProduct->ratings->sum('rating_product');
        if ($listRatings->count() > 0) {
            $ratingValue = $ratingSum / $listRatings->count();
        } else {
            $ratingValue = 0;
        }

        $dataProduct->is_flash_sale = 0;
        $getFlashSale = $this->layoutRepository->getFlashSale();
        if ($getFlashSale) {
            if (strtotime($getFlashSale->flash_sale_timer) > strtotime(date('Y-m-d H:i:s'))) {
                $listProductSale = json_decode($getFlashSale->flash_sale_list_product_id, true);
                foreach ($listProductSale as $productSaleCode => $value) {
                    if ($productSaleCode == $dataProduct->code) {
                        $dataProduct->is_flash_sale = 1;
                        $dataProduct->flash_sale_time = $getFlashSale->flash_sale_timer;
                        $dataProduct->new_price = $value['new_price'];
                        $dataProduct->sale_quantity = $value['quantity'];
                        $dataProduct->sale_stock = $value['stock'];
                    }
                }
            }
        }

        $countRate = DB::table('ratings')
            ->where('product_id', $getProduct)->count();

        $countRate1 = DB::table('ratings')
            ->where("rating_product", "=", 1)
            ->where('product_id', $getProduct)->count();

        $countRate2 = DB::table('ratings')
            ->where("rating_product", "=", 2)
            ->where('product_id', $getProduct)->count();

        $countRate3 = DB::table('ratings')
            ->where("rating_product", "=", 3)
            ->where('product_id', $getProduct)->count();

        $countRate4 = DB::table('ratings')
            ->where("rating_product", "=", 4)
            ->where('product_id', $getProduct)->count();

        $countRate5 = DB::table('ratings')
            ->where("rating_product", "=", 5)
            ->where('product_id', $getProduct)->count();

        $productRelated = $this->productRepository->getProductRelated($dataProduct->category_id, $dataProduct->id);
        $view = $dataProduct->views + 1;
        $this->productRepository->update(['views' => $view], $dataProduct->id);

        $getSessionProductViewed = $request->session()->get('pvID');

        if ($getSessionProductViewed != null) {
            $getDataBySessionProductViewed = $this->sessionProductViewedRepository->getDataBySessionID($getSessionProductViewed);
            if (isset($getDataBySessionProductViewed)) {
                $dataProductViewed = json_decode($getDataBySessionProductViewed->list_products, true);
                if (!in_array($dataProduct->id, $dataProductViewed)) {
                    $dataProductViewed[] = $dataProduct->id;
                    $dataUpdateSessionProductViewed = [
                        'list_products' => json_encode($dataProductViewed)
                    ];
                    $this->sessionProductViewedRepository->updateBySessionID($getSessionProductViewed, $dataUpdateSessionProductViewed);
                }

                $productViewed = $this->productRepository->getProductByArrayID($dataProductViewed);
            } else {
                $productViewed = [];
            }
        } else {
            $session_id = bin2hex(date('Y-m-d H:i:s') . 'product-viewed');
            $productViewed = [];
            $dataCreateForProductViewed = [];
            $dataCreateForProductViewed[] = $dataProduct->id;
            $dataCreateProductViewed = [
                'session_id' => $session_id,
                'list_products' => json_encode($dataCreateForProductViewed)
            ];
            $this->sessionProductViewedRepository->create($dataCreateProductViewed);
            $request->session()->put('pvID', $session_id);
        }

        $dataBreadcrumb = [];
        $getCategoryProduct = $this->categoryRepository->show($dataProduct->category_id);
        $currentCateID = $getCategoryProduct->id;

        if ($currentCateID != 0) {
            $endWhile = false;
            while (!$endWhile) {
                $getParent = $this->categoryRepository->show($currentCateID);
                if ($getParent->parent == 0) {
                    $endWhile = true;
                }

                $currentCateID = $getParent->parent;
                $dataBreadcrumb[$getParent->name] = route('showDataCategory', $getParent->slug);
            }
        }

        $dataBreadcrumb = array_reverse($dataBreadcrumb);
        $parts = parse_url($dataProduct->link_youtube);
        parse_str($parts['query'], $query);
        $dataProduct->id_youtube = $query['v'];

        return view(
            'page.product.product-detail',
            compact('youtubeRandom', 'postRandom5', 'countRate', 'countRate1', 'countRate2', 'countRate3', 'countRate4', 'countRate5', 'dataProduct', 'productRelated', 'listComment', 'listCategory', 'listRatings', 'ratingValue', 'productViewed', 'dataBreadcrumb')
        );
    }

    private function getYoutubeVideoId($url)
    {
        $queryString = parse_url($url, PHP_URL_QUERY);
        parse_str($queryString, $params);
        return isset($params['v']) ? $params['v'] : null;
    }

    public function storeComment(RatingRequest $request)
    {
        if (!Auth::check()) {
            return back()->withErrors([
                'custom' => __('Bạn cần đăng nhập để bình luận!')
            ]);
        }

        $input = $request->except(['_token']);
        $input = $request->all();

        $input['user_id'] = Auth::user()->id;
        $this->commentRepository->store($input);

        return back();
    }

    public function rating(RatingRequest $request)
    {
        if (!Auth::check()) {
            return redirect()->back()->with('message', __('Bạn cần đăng nhập để đánh giá sản phẩm!'));
        }
        $input = $request->except(['_token']);

        $exit_rate = $this->ratingRepository->show();

        if ($exit_rate) {
            $exit_rate->rating_product = $input['rating_product'];
            $exit_rate->content = $input['content'];
            $exit_rate->update();
        } else {

            $input = $request->all();
            $this->ratingRepository->store($input);
        }

        return back();
    }

    public function suggestionsProduct(Request $request)
    {
        $search = $request->get('search');
        $products = $this->productRepository->getProductBySearchSuggestion($search);

        return response()->json($products);
    }

    public function showDataCategory(Request $request, $slug)
    {
        if (!isset($slug)) {
            return redirect('/404');
        }

        $filters = [];
        $input = $request->except(['price', 'sort']);

        foreach ($input as $key => $value) {
            $filters[$key] = $value;
        }

        if (isset($request->price)) {
            $filters['price'] = $request->price;
        }

        if (isset($request->sort)) {
            $filters['sort'] = $request->sort;
        }

        $isParent = $this->categoryRepository->checkIsParent($slug);
        if ($isParent == 0) {
            return redirect('/404');
        }

        $dataCategory = $this->categoryRepository->productByCategory($slug, $isParent, $filters);
        $dataBrand = [];
        $dataCategories = [];

        if ($isParent == 1) {
            $dataComplete = $dataCategory->products;
        } elseif ($isParent == 2) {
            $dataComplete = $dataCategory->productChildren;
        } else {
            $dataComplete = [];
        }

        if (isset($filters['price'])) {
            $listRangePrice = Product::RANGE_PRICE;
            if (array_key_exists($filters['price'], $listRangePrice)) {
                $rangePrice = $listRangePrice[$filters['price']];
                $fromPrice = $rangePrice['from'];
                $toPrice = $rangePrice['to'];
                $count = 0;

                foreach ($dataComplete as $key => $productRange) {
                    if (isset($productRange->new_price)) {
                        $priceForCheck = str_replace('.', '', $productRange->new_price);
                        $convertPrice = intval($priceForCheck);
                    } else {
                        $priceForCheck = str_replace('.', '', $productRange->price);
                        $convertPrice = intval($priceForCheck);
                    }

                    if ($convertPrice < $fromPrice or $convertPrice > $toPrice) {
                        $dataComplete->forget($key);
                        $count++;
                    }
                }
            }
        }

        if (isset($filters['brand'])) {
            if ($filters['brand'] != 'all') {
                foreach ($dataComplete as $keyBrand => $productBrand) {
                    if ($productBrand->brands->name != $filters['brand']) {
                        $dataComplete->forget($keyBrand);
                    }
                }
            }
        }

        if (isset($filters['category'])) {
            if ($filters['category'] != 'all') {
                foreach ($dataComplete as $keyCategory => $productCategory) {
                    if ($productCategory->category_id != $filters['category']) {
                        $dataComplete->forget($keyCategory);
                    }
                }
            }
        }

        if (isset($filters['sort'])) {
            if ($filters['sort'] == 'new') {
                $dataComplete = $dataComplete->sortByDesc('created_at');
            }

            if ($filters['sort'] == 'name') {
                $dataComplete = $dataComplete->sortBy('name');
            }

            if ($filters['sort'] == 'price-asc' or $filters['sort'] == 'price-desc') {
                foreach ($dataComplete as $dataForSort) {
                    if ($dataForSort->new_price != null) {
                        $currentPrice = (int) str_replace('.', '', $dataForSort->new_price);
                    } else {
                        $currentPrice = (int) str_replace('.', '', $dataForSort->price);
                    }

                    $dataForSort->current_price = $currentPrice;
                }

                if ($filters['sort'] == 'price-asc') {
                    $dataComplete = $dataComplete->sortBy('current_price');
                }

                if ($filters['sort'] == 'price-desc') {
                    $dataComplete = $dataComplete->sortByDesc('current_price');
                }
            }
        }

        foreach ($filters as $keyLast => $filterLast) {
            if ($keyLast == 'sort' or $keyLast == 'brand' or $keyLast == 'price' or $keyLast == 'category' or $keyLast == 'page') {
                continue;
            }

            if ($filterLast == 'all') {
                continue;
            }

            foreach ($dataComplete as $key => $dataLast) {
                if (strpos($dataLast->key_word, $filterLast) === false) {
                    $dataComplete->forget($key);
                }
            }
        }

        if (isset($dataComplete)) {
            foreach ($dataComplete as $product) {
                if (isset($product->brands->name)) {
                    if (!in_array($product->brands->name, $dataBrand)) {
                        $dataBrand[] = $product->brands->name;
                    }
                }
            }

            $dataCategories = $this->utility->paginate($dataComplete, 15);
        } else {
            $dataCategories = $this->utility->paginate([], 15);
        }

        $dataProducts = $this->categoryRepository->productSale($slug, $isParent);
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);

        if (count($dataCategories) > 0 and $isParent == 2) {
            $getParent = $this->getTopParent($this->categoryRepository->getParentWithKeyword($dataCategory->id));
            $listKeyWord = $getParent->categoryFilter;
        } else {
            $listKeyWord = $dataCategory->categoryFilter;
        }

        $currentCateID = $dataCategory->parent;
        $dataBreadcrumb = [];

        if ($currentCateID != 0) {
            $endWhile = false;
            while (!$endWhile) {
                $getParent = $this->categoryRepository->show($currentCateID);
                if ($getParent->parent == 0) {
                    $endWhile = true;
                }

                $currentCateID = $getParent->parent;
                $dataBreadcrumb[$getParent->name] = route('showDataCategory', $getParent->slug);
            }
        }

        return view('page.product.product-category', compact('dataCategories', 'dataProducts', 'listCategory', 'dataCategory', 'dataBrand', 'listKeyWord', 'dataBreadcrumb'));
    }

    function getTopParent($category)
    {
        if ($category->parent === 0) {
            return $category;
        }

        return $this->getTopParent($this->categoryRepository->getParentWithKeyword($category->parent));
    }
}
