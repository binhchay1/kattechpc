<?php

namespace App\Http\Middleware;

use App\Repositories\CategoryRepository;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Closure;
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
        $keyCache = 'menu_homepage';
        $getInfor = Cache::store('redis')->get($keyCache);

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
                                $listBrand[$category->name][] = ['name' => $product->brands->name, 'slug' => $product->brands->slug];
                            } else {
                                if (!in_array($product->brands->name, $listBrand[$category->name])) {
                                    $listBrand[$category->name][] = ['name' => $product->brands->name, 'slug' => $product->brands->slug];
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

            Cache::store('redis')->rememberForever($keyCache, function () use ($data) {
                return $data;
            });
        }

        return $next($request);
    }
}
