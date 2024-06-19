<?php

namespace App\Http\Controllers\Page;

use Illuminate\Http\Request;
use App\Enums\Product;
use App\Http\Controllers\Controller;
use App\Repositories\ProductRepository;
use App\Repositories\BuildPcRepository;
use App\Repositories\SessionBuildPCRepository;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\ExportBuildPC;
use Cart;
use Cache;

class BuildPCController extends Controller
{

    private $productRepository;
    private $buildPcRepository;
    private $sessionBuildPcRepository;

    public function __construct(
        ProductRepository $productRepository,
        BuildPcRepository $buildPcRepository,
        SessionBuildPCRepository $sessionBuildPcRepository
    ) {
        $this->productRepository = $productRepository;
        $this->buildPcRepository = $buildPcRepository;
        $this->sessionBuildPcRepository = $sessionBuildPcRepository;
    }

    public function buildPC(Request $request)
    {
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);
        $getProductByKey = $request->get('key');
        $menu = $this->buildPcRepository->index();
        $getSessionBuildPC = $request->session()->get('buildID');
        if ($getSessionBuildPC != null) {
            $getDataBySessionBuildPC = $this->sessionBuildPcRepository->getDataByBuildID($getSessionBuildPC);
            $dataBuild = json_decode($getDataBySessionBuildPC->data_build, true);
        } else {
            $dataBuild = [];
        }

        return view('page.build-pc.build-pc', compact('listCategory', 'menu', 'dataBuild'));
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

        $products = $this->productRepository->getListProductForBuild($arrID);

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

        if (isset($sort)) {
            if ($sort == 'newest') {
                $products = $products->sortByDesc('created_at');
            }

            if ($sort == 'price-asc' or $sort == 'price-desc') {
                foreach ($products as $productSort) {
                    if ($productSort->new_price != null) {
                        $currentPrice = (int) str_replace('.', '', $productSort->new_price);
                    } else {
                        $currentPrice = (int) str_replace('.', '', $productSort->price);
                    }

                    $productSort->current_price = $currentPrice;
                }

                if ($sort == 'price-asc') {
                    $products = $products->sortBy('current_price');
                }

                if ($sort == 'price-desc') {
                    $products = $products->sortByDesc('current_price');
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

    public function handleSessionBuildPC(Request $request)
    {
        $data = $request->get('data');

        $getSession = $request->session()->get('buildID');
        if (empty($getSession)) {
            $buildID = bin2hex(date('Y-m-d H:i:s'));
            $request->session()->put('buildID', $buildID);
            $dataSessionBuild = [
                'build_id' => $buildID,
                'data_build' => json_encode($data)
            ];

            $this->sessionBuildPcRepository->create($dataSessionBuild);
        } else {
            $dataSessionBuild = [
                'data_build' => json_encode($data)
            ];

            $this->sessionBuildPcRepository->updateByBuildID($buildID, $dataSessionBuild);
        }

        return 'success';
    }

    public function exportExcelBuildPC(Request $request)
    {
        $getSession = $request->session()->get('buildID');
        $nameFile = 'buildpc_' . date('d-m-Y') . '_' . $getSession;
        return Excel::download(new ExportBuildPC(), $nameFile);
    }
}
