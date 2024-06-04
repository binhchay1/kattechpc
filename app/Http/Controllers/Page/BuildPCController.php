<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;
use App\Enums\Product;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use App\Repositories\BuildPcRepository;
use Cart;
use Cache;

class BuildPCController extends Controller
{

    private $productRepository;
    private $buildPcRepository;

    public function __construct(
        ProductRepository $productRepository,
        BuildPcRepository $buildPcRepository
    ) {
        $this->productRepository = $productRepository;
        $this->buildPcRepository = $buildPcRepository;
    }

    public function buildPC(Request $request)
    {
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);
        $getProductByKey = $request->get('key');
        $menu = $this->buildPcRepository->index();

        return view('page.build-pc.build-pc', compact('listCategory', 'menu'));
    }

    public function getProduct(Request $request)
    {
        $getProductByKey = $request->get('key');
        if (!isset($getProductByKey)) {
            return redirect('/404');
        }

        $explode = explode('-', $getProductByKey);
        $buildId = $explode[2];
        $arrID = [];
        $filter = [];

        $getListCategory = $this->buildPcRepository->getListCategory($buildId);
        $decode = json_decode($getListCategory->category_id, true);
        foreach ($decode as $category) {
            $arrID[] = $category;
        }

        $sort = $request->get('sort');
        $price = $request->get('price');
        $brand = $request->get('brand');

        if (isset($sort)) {
            $filter['sort'] = $sort;
        }

        $products = $this->productRepository->getListProductForBuild($arrID, $filter);

        if (isset($price)) {
            $listRangePrice = Product::RANGE_PRICE_BUILD_PC;
            if (array_key_exists($price, $listRangePrice)) {
                $rangePrice = $listRangePrice[$price];
                $fromPrice = $rangePrice['from'];
                $toPrice = $rangePrice['to'];

                foreach ($products as $key => $productPrice) {
                    if (isset($productPrice->new_price)) {
                        $priceForCheck = str_replace('.', '', $productPrice->new_price);
                    } else {
                        $priceForCheck = str_replace('.', '', $productPrice->price);
                    }
                    $priceForCheck = str_replace('.', '', $productPrice->price);
                    $convertPrice = intval($priceForCheck);
                    if ($convertPrice < $fromPrice or $convertPrice > $toPrice) {
                        $products->forget($key);
                    }
                }
            }
        }

        if (isset($brand)) {
            foreach ($products as $index => $productBrand) {
                if ($productBrand->brands->name != $brand) {
                    $products->forget($index);
                }
            }
        }

        $data = [
            'products' => $products,
            'menu' => $getProductByKey
        ];

        return \response()->json($data);
    }

    public function addBuildPC($slug)
    {
        $dataProduct = $this->productRepository->productDetail($slug);
        Cart::add(
            $dataProduct->id,
            $dataProduct->name,
            $dataProduct->new_price ??  $dataProduct->price,
            1,
            ['image' => $dataProduct->image]
        );
        return redirect()->route('buildPC');
    }

    public function getListMenu()
    {
        $menu = $this->buildPcRepository->index();

        return response()->json($menu);
    }

    public function addToCartBuildPC(Request $request)
    {
        $data = $request->get('data');
        $dataProduct = $this->productRepository->getProductByArrayID($data);

        foreach ($dataProduct as $product) {
            Cart::add(
                $product->id,
                $product->name,
                $product->price,
                1,
                ['image' => $product->image]
            );
        }

        return 'success';
    }
}
