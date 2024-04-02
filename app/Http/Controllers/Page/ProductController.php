<?php

namespace App\Http\Controllers\Page;

use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;

class ProductController extends Controller
{
    protected $productRepository;

    public function __construct(
        ProductRepository $productRepository,
    ) {
        $this->productRepository = $productRepository;
    }

    public function productDetail($slug)
    {
        $product = $this->productRepository->productDetail($slug);
        if (isset($product->detail)) {
            $product->detail = json_decode($product->detail, true);
        }

        $productRelated = $this->productRepository->getProductRelated($product->category_id, $product->id);

        return view('page.product.product-detail', compact('product', 'productRelated'));
    }
}
