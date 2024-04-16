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
        if (!Cache::has($key)) {
            if ($key == 'listCategory') {
                $value = $this->categoryRepository->listCategoryWithCount();
            }

            Cache::store('redis')->put($key, $value, 6000);
        }

        return $next($request);
    }
}
