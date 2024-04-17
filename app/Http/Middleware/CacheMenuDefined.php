<?php

namespace App\Http\Middleware;

use App\Repositories\CategoryRepository;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
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
        $getInfor = \Cache::store('redis')->get($key);
        if (empty($getInfor)) {
            \Cache::store('redis')->rememberForever($key, function () use ($data) {
                return $data;
            });
        }

        return $next($request);
    }
}
