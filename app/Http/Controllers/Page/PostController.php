<?php

namespace App\Http\Controllers\Page;

use App\Repositories\PostRepository;
use App\Http\Controllers\Controller;
use Cache;

class PostController extends Controller
{
    protected $postRepository;

    public function __construct(
        PostRepository $postRepository
    ) {
        $this->postRepository = $postRepository;
    }

    public function postDetail($slug)
    {
        if (!isset($slug)) {
            return redirect('/404');
        }

        $listPost = $this->postRepository->index();
        $post = $this->postRepository->detail($slug);
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);

        return view('page.post.post-detail', compact('post', 'listPost', 'listCategory'));
    }

}
