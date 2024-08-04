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
use App\Repositories\BuildPCThemeRepository;
use App\Repositories\CategoryRepository;
use App\Repositories\LayoutRepository;
use Cart;
use Cache;

class BuildPCController extends Controller
{

    private $productRepository;
    private $buildPcRepository;
    private $sessionBuildPcRepository;
    private $buildPcThemeRepository;
    private $categoryRepository;
    private $layoutRepository;

    public function __construct(
        ProductRepository $productRepository,
        BuildPcRepository $buildPcRepository,
        SessionBuildPCRepository $sessionBuildPcRepository,
        BuildPCThemeRepository $buildPcThemeRepository,
        CategoryRepository $categoryRepository,
        LayoutRepository $layoutRepository,
    ) {
        $this->productRepository = $productRepository;
        $this->buildPcRepository = $buildPcRepository;
        $this->sessionBuildPcRepository = $sessionBuildPcRepository;
        $this->buildPcThemeRepository = $buildPcThemeRepository;
        $this->categoryRepository = $categoryRepository;
        $this->layoutRepository = $layoutRepository;
    }

    public function buildPC(Request $request)
    {
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);
        $getProductByKey = $request->get('key');
        $menu = $this->buildPcRepository->index();
        $getSessionBuildPC = $request->session()->get('buildID');
        $theme = $this->buildPcThemeRepository->index();
        $layout = $this->layoutRepository->getListLayout();
        $dataBuild = [];

        if (isset($theme[0]->youtube)) {
            $arrLinkYoutube = json_decode($theme[0]->youtube, true);
        } else {
            $arrLinkYoutube = [
                'link_youtube_1' => '',
                'link_youtube_2' => '',
                'link_youtube_3' => ''
            ];
        }

        if ($getSessionBuildPC != null) {
            $getDataBySessionBuildPC = $this->sessionBuildPcRepository->getDataByBuildID($getSessionBuildPC);
            if (isset($getDataBySessionBuildPC)) {
                $dataBuild = json_decode($getDataBySessionBuildPC->data_build, true);
            }

            if ($dataBuild == null) {
                $dataBuild = [];
            }
        }

        $dataPreSession = [
            'listArea1' => [],
            'listArea2' => [],
        ];

        $dataPricePreSession = [
            'listArea1' => 0,
            'listArea2' => 0
        ];

        $dataListMenu = [
            'listArea1' => [],
            'listArea2' => []
        ];

        if (isset($getDataBySessionBuildPC->data_menu)) {
            $dataListMenu = json_decode($getDataBySessionBuildPC->data_menu, true);
        }

        if (!empty($dataBuild)) {
            foreach ($dataBuild as $key => $area) {
                $getPrBySession = $this->productRepository->getProductByArrayID($area);
                $dataPreSession[$key] = $getPrBySession;
            }
        }

        foreach ($dataPreSession as $keyArea => $listProduct) {
            foreach ($listProduct as $product) {
                if ($product->new_price != null) {
                    $priceProduct = str_replace('.', '', $product->new_price);
                    $dataPricePreSession[$keyArea] += intval($priceProduct);
                }
            }
        }

        $cloneDataListMenu = $dataListMenu;

        foreach ($dataPreSession['listArea1'] as $keyValue1 => $value1) {
            foreach ($dataListMenu['listArea1'] as $keyClone1 => $clone1) {
                if ($clone1 == $value1->id) {
                    $cloneDataListMenu['listArea1'][$keyClone1] = $value1;
                }
            }
        }


        foreach ($dataPreSession['listArea2'] as $keyValue2 => $value2) {
            foreach ($dataListMenu['listArea2'] as $keyClone2 => $clone2) {
                if ($clone == $value2->id) {
                    $cloneDataListMenu['listArea2'][$keyClone2] = $value2;
                }
            }
        }

        $prepareMenu = $cloneDataListMenu;

        $countMenuBuildPC = $this->buildPcRepository->countTotalListBuildPC();

        $currentPrice1 = $dataPricePreSession['listArea1'];
        $currentPrice2 = $dataPricePreSession['listArea2'];
        $dataPricePreSession['listArea1'] = number_format($dataPricePreSession['listArea1'], 0, ',', '.');
        $dataPricePreSession['listArea2'] = number_format($dataPricePreSession['listArea2'], 0, ',', '.');

        // dd($dataPreSession);

        return view('page.build-pc.build-pc', compact(
            'listCategory',
            'menu',
            'dataBuild',
            'dataPreSession',
            'arrLinkYoutube',
            'theme',
            'dataPricePreSession',
            'currentPrice1',
            'currentPrice2',
            'layout',
            'countMenuBuildPC',
            'dataListMenu',
            'prepareMenu'
        ));
    }

    public function handleSessionBuildPC(Request $request)
    {
        $menu = $request->get('menu');
        $data = $request->get('data');

        $getSession = $request->session()->get('buildID');

        if (empty($getSession)) {
            $buildID = bin2hex(date('Y-m-d H:i:s'));
            $request->session()->put('buildID', $buildID);
            $dataSessionBuild = [
                'build_id' => $buildID,
                'data_build' => json_encode($data),
                'data_menu' => json_encode($menu)
            ];

            $this->sessionBuildPcRepository->create($dataSessionBuild);
        } else {
            $dataSessionBuild = [
                'data_build' => json_encode($data),
                'data_menu' => json_encode($menu),
            ];

            $this->sessionBuildPcRepository->updateByBuildID($getSession, $dataSessionBuild);
        }

        return 'success';
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

        $getParent = $this->getTopParent($this->categoryRepository->getParentWithKeyword($arrID[0]));
        $listFilter = $getParent->categoryFilter;
        $listKeyWord = [];
        foreach ($listFilter as $filter) {
            $explodeKeyWord = explode(PHP_EOL, $filter->keyword);
            $listKeyWord[$filter->title] = $explodeKeyWord;
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
                    $products = $products->sortBy('current_price')->values();
                }

                if ($sort == 'price-desc') {
                    $products = $products->sortByDesc('current_price')->values();
                }
            }
        }

        $data = [
            'products' => $products,
            'menu' => $getProductByKey,
            'keyword' => $listKeyWord
        ];

        return \response()->json($data);
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
            if ($product->new_price != null) {
                $priceCart = str_replace('.', '', $product->new_price);
            } else {
                $priceCart = str_replace('.', '', $product->price);
            }

            Cart::add(
                $product->id,
                $product->name,
                $priceCart,
                1,
                ['image' => $product->image]
            );
        }

        return 'success';
    }

    public function exportExcelBuildPC(Request $request)
    {
        $area = $request->get('a');

        if (empty($area)) {
            abort(404);
        }

        if ($area != '1' and $area != '2') {
            abort(404);
        }

        $getSessionBuildPC = $request->session()->get('buildID');
        $getDataBySessionBuildPC = $this->sessionBuildPcRepository->getDataByBuildID($getSessionBuildPC);
        $dataBuild = json_decode($getDataBySessionBuildPC->data_build, true);
        if ($area == 1) {
            $arrProductID = $dataBuild['listArea1'];
        } else {
            $arrProductID = $dataBuild['listArea2'];
        }

        $getProduct = $this->productRepository->getProductByArrayID($arrProductID);
        $nameFile = 'buildpc_' . date('d-m-Y') . '_' . $getSessionBuildPC . '.xlsx';
        $total = 0;
        foreach ($getProduct as $product) {
            if ($product->new_price != null) {
                $total += (int) str_replace('.', '', $product->new_price);
            } else {
                $total += (int) str_replace('.', '', $product->price);
            }
        }

        return Excel::download(new ExportBuildPC($getProduct, $total), $nameFile);
    }

    public function exportImageBuildPC(Request $request)
    {
        $area = $request->get('a');

        if (empty($area)) {
            abort(404);
        }

        if ($area != '1' and $area != '2') {
            abort(404);
        }

        $getSessionBuildPC = $request->session()->get('buildID');
        $getDataBySessionBuildPC = $this->sessionBuildPcRepository->getDataByBuildID($getSessionBuildPC);
        $dataBuild = json_decode($getDataBySessionBuildPC->data_build, true);

        if ($area == 1) {
            $arrProductID = $dataBuild['listArea1'];
        } else {
            $arrProductID = $dataBuild['listArea2'];
        }

        $getProduct = $this->productRepository->getProductByArrayID($arrProductID);

        return view('page.exports.build-pc-image', compact('getProduct'))->render();
    }

    public function printBuildPC(Request $request)
    {
        $area = $request->get('a');

        if (empty($area)) {
            abort(404);
        }

        if ($area != '1' and $area != '2') {
            abort(404);
        }

        $getSessionBuildPC = $request->session()->get('buildID');
        $getDataBySessionBuildPC = $this->sessionBuildPcRepository->getDataByBuildID($getSessionBuildPC);
        $dataBuild = json_decode($getDataBySessionBuildPC->data_build, true);

        if ($area == 1) {
            $arrProductID = $dataBuild['listArea1'];
        } else {
            $arrProductID = $dataBuild['listArea2'];
        }

        $getProduct = $this->productRepository->getProductByArrayID($arrProductID);
        $total = 0;
        foreach ($getProduct as $product) {
            if ($product->new_price != null) {
                $total += (int) str_replace('.', '', $product->new_price);
            } else {
                $total += (int) str_replace('.', '', $product->price);
            }
        }

        return view('page.build-pc.print', compact('getProduct', 'total'));
    }

    function getTopParent($category)
    {
        if ($category->parent === 0) {
            return $category;
        }

        return $this->getTopParent($this->categoryRepository->getParentWithKeyword($category->parent));
    }
}
