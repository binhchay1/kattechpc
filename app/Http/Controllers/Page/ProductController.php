<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Repositories\CommentRepository;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    protected $productRepository;
    protected $commentRepository;

    public function __construct(
        ProductRepository $productRepository,
        CommentRepository $commentRepository
    ) {
        $this->productRepository = $productRepository;
        $this->commentRepository = $commentRepository;
    }

    public function productDetail($slug)
    {
        $product = $this->productRepository->productDetail($slug);
        if (isset($product->detail)) {
            $product->detail = json_decode($product->detail, true);
        }

        if (isset($product->image)) {
            $product->image = json_decode($product->image, true);
        }
        $listComment = $this->commentRepository->index();
        $productRelated = $this->productRepository->getProductRelated($product->category_id, $product->id);

        return view('page.product.product-detail', compact('product', 'productRelated', 'listComment'));
    }
    
    public function storeComment(Request $request)
    {
        if (!Auth::check()) {
          return redirect()->back()->with('message', 'You must be logged in to post a comment!');;
        }
        $input = $request->except(['_token']);
        $input = $request->all();
        $input['user_id'] = Auth::user()->id;
        $this->commentRepository->store($input);
        
        return back();
    }
    
    
    
}
