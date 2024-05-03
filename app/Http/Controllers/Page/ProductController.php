<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Repositories\CategoryRepository;
use App\Repositories\RatingRepository;
use App\Repositories\CommentRepository;
use App\Repositories\ProductRepository;
use Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Cache;

class ProductController extends Controller
{
    protected $productRepository;
    protected $commentRepository;
    protected $categoryRepository;
    protected $ratingRepository;

    public function __construct(
        ProductRepository $productRepository,
        RatingRepository $ratingRepository,
        CommentRepository $commentRepository,
        CategoryRepository $categoryRepository
    ) {
        $this->productRepository = $productRepository;
        $this->ratingRepository = $ratingRepository;
        $this->commentRepository = $commentRepository;
        $this->categoryRepository = $categoryRepository;
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
        $productRelated = $this->productRepository->getProductRelated($dataProduct->category_id, $dataProduct->id);

        return view('page.product.product-detail', compact('dataProduct', 'productRelated', 'listComment', 'listCategory'));
    }

    public function storeComment(Request $request)
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
    
    public function rating(Request $request)
    {
        if (!Auth::check()) {
            return redirect()->back()->with('message', __('Bạn cần đăng nhập để đánh giá sản phẩm!'));
        }
    
        $input = $request->except(['_token']);
        $input = $request->all();
        $this->ratingRepository->store($input);
    
        return back();
    }

}
