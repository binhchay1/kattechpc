<?php

namespace App\Http\Controllers\Page;

use App\Models\OrderDetail;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\OrderRequest;
use App\Repositories\OrderRepository;
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

        $getListCategory = $this->buildPcRepository->getListCategory($buildId);
        $decode = json_decode($getListCategory->category_id, true);
        foreach ($decode as $category) {
            $arrID[] = $category;
        }

        $products = $this->productRepository->getListProductForBuild($arrID);
        $data = [
            'products' => $products,
            'menu' => $getProductByKey
        ];

        return \response()->json($data);
    }

    public function addBuildPC(Request $request, $slug)
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

    public function addToCartBuildPC() {

    }
}
