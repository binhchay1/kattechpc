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
use Cache;
use Illuminate\Support\Facades\DB;

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

    public function __construct(
        ProductRepository $productRepository,
        PostRepository $postRepository,
        RatingRepository $ratingRepository,
        CommentRepository $commentRepository,
        CategoryRepository $categoryRepository,
        LayoutRepository $layoutRepository,
        SessionProductViewedRepository $sessionProductViewedRepository,
        YoutubeChannelRepository $youtubeChannelRepository
    ) {
        $this->postRepository = $postRepository;
        $this->productRepository = $productRepository;
        $this->ratingRepository = $ratingRepository;
        $this->commentRepository = $commentRepository;
        $this->categoryRepository = $categoryRepository;
        $this->layoutRepository = $layoutRepository;
        $this->sessionProductViewedRepository = $sessionProductViewedRepository;
        $this->youtubeChannelRepository = $youtubeChannelRepository;
    }

    public function productDetail(Request $request, $slug)
    {
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

        return view(
            'page.product.product-detail',
            compact('youtubeRandom','postRandom5','countRate', 'countRate1', 'countRate2', 'countRate3', 'countRate4', 'countRate5', 'dataProduct', 'productRelated', 'listComment', 'listCategory', 'listRatings', 'ratingValue', 'productViewed')
        );
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
}
