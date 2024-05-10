<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Http\Requests\RatingRequest;
use App\Repositories\CategoryRepository;
use App\Repositories\RatingRepository;
use App\Repositories\CommentRepository;
use App\Repositories\LayoutRepository;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cache;

class ProductController extends Controller
{
    protected $productRepository;
    protected $commentRepository;
    protected $categoryRepository;
    protected $ratingRepository;
    protected $layoutRepository;

    public function __construct(
        ProductRepository $productRepository,
        RatingRepository $ratingRepository,
        CommentRepository $commentRepository,
        CategoryRepository $categoryRepository,
        LayoutRepository $layoutRepository
    ) {
        $this->productRepository = $productRepository;
        $this->ratingRepository = $ratingRepository;
        $this->commentRepository = $commentRepository;
        $this->categoryRepository = $categoryRepository;
        $this->layoutRepository = $layoutRepository;
    }

    public function productDetail($slug)
    {
        $dataProduct = $this->productRepository->productDetail($slug);
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
        $listProductSale = json_decode($getFlashSale->flash_sale_list_product_id, true);
        foreach ($listProductSale as $productSaleCode => $value) {
            if ($productSaleCode == $dataProduct->code) {
                $dataProduct->is_flash_sale = 1;
                $dataProduct->flash_sale_time = $getFlashSale->flash_sale_timer;
            }
        }

        $productRelated = $this->productRepository->getProductRelated($dataProduct->category_id, $dataProduct->id);

        return view('page.product.product-detail', compact('dataProduct', 'productRelated', 'listComment', 'listCategory', 'listRatings', 'ratingValue'));
    }

    public function storeComment(RatingRequest $request)
    {
        if (!Auth::check()) {
            return redirect()->back()->with('message', __('Bạn cần đăng nhập để bình luận!'));
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
