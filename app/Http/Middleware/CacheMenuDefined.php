<?php

namespace App\Http\Middleware;

use App\Repositories\CategoryRepository;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Redis;
use Cache;

class CacheMenuDefined
{
    private $categoryRepository;

    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function handle(Request $request, Closure $next): Response
    {
        $key = 'menu_homepage';
        $getInfor = Cache::store('redis')->get($key);

        if (empty($getInfor)) {
            $data = [];
            $listBrand = [];
            $listDetail = [];
            $listCategory = $this->categoryRepository->getListCategory();
            foreach ($listCategory as $category) {
                if (isset($category->products)) {
                    foreach ($category->products as $product) {
                        if (isset($product->brands)) {
                            if (!array_key_exists($category->name, $listBrand)) {
                                $listBrand[$category->name][] = $product->brands->name;
                            } else {
                                if (!in_array($product->brands->name, $listBrand[$category->name])) {
                                    $listBrand[$category->name][] = $product->brands->name;
                                }
                            }
                        }

                        if (isset($product->detail)) {
                            $decode = json_decode($product->detail, true);
                            foreach ($decode as $key => $value) {
                                if (!array_key_exists($category->name, $listDetail)) {
                                    $listDetail[$category->name][$key][] = $value;
                                } else {
                                    if (!array_key_exists($key, $listDetail[$category->name])) {
                                        $listDetail[$category->name][$key][] = $value;
                                    } else {
                                        if (!in_array($value, $listDetail[$category->name][$key])) {
                                            $listDetail[$category->name][$key][] = $value;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }

            $data['default'] = $listCategory;
            $data['brand'] = $listBrand;
            $data['detail'] = $listDetail;

            Cache::store('redis')->rememberForever($key, function () use ($data) {
                return $data;
            });
        }

        return $next($request);
    }
}
