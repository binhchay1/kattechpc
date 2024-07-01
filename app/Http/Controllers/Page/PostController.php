<?php

namespace App\Http\Controllers\Page;

use App\Repositories\PostRepository;
use App\Http\Controllers\Controller;
use App\Repositories\CategoryPostRepository;
use Cache;

class PostController extends Controller
{
    protected $postRepository;
    protected $categoryPostRepository;

    public function __construct(
        PostRepository $postRepository,
        CategoryPostRepository $categoryPostRepository
    ) {
        $this->postRepository = $postRepository;
        $this->categoryPostRepository = $categoryPostRepository;
    }

    public function postDetail($slug)
    {
        if (!isset($slug)) {
            return redirect('/404');
        }
        $firstPosts1 = $this->postRepository->firstPost();
        if (empty($firstPosts1)) {
            return redirect('/404');
        }
        $listPost = $this->postRepository->postHome();
        $postRandom = $listPost->splice(3, 8);
        $postNews = $listPost->splice(1, 3);
        $post = $this->postRepository->detail($slug);
        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);

        $post = $this->postRepository->detail($slug);

        $getCategory = $this->categoryPostRepository->show($post->category_id);
        $currentCateID = $getCategory->parent;
        $dataBreadcrumb = [];

        if ($currentCateID != 0) {
            $dataBreadcrumb[$getCategory->name] = route('post.category', $getCategory->slug);
            $endWhile = false;
            while (!$endWhile) {
                $getParent = $this->categoryPostRepository->show($currentCateID);
                if ($getParent->parent == 0) {
                    $endWhile = true;
                }

                $currentCateID = $getParent->parent;
                $dataBreadcrumb[$getParent->name] = route('post.category', $getParent->slug);
            }
        }

        return view('page.post.post-detail', compact('firstPosts1','postNews','post', 'postRandom', 'listCategory', 'dataBreadcrumb'));
    }

    public function postCategory($slug)
    {
        if (!isset($slug)) {
            return redirect('/404');
        }

        $key = 'menu_homepage';
        $listCategory = Cache::store('redis')->get($key);
        $listCategoryPost = $this->categoryPostRepository->getListCategoryPost();

        $postCategory = $this->categoryPostRepository->getCatePost($slug);
        $dataPostCategory = $this->categoryPostRepository->getCate($slug);
        $getPosts = $postCategory->posts;
        $firstPosts1 = $getPosts->splice(0, 1);
        $firstPosts2 = $getPosts->splice(1, 1);
        $postRandom3 = $getPosts->splice(1, 3);
        $postRandom4 = $getPosts->splice(1, 8);

        $currentCateID = $postCategory->parent;
        $dataBreadcrumb = [];

        if ($currentCateID != 0) {
            $dataBreadcrumb[$postCategory->name] = route('post.category', $postCategory->slug);
            $endWhile = false;
            while (!$endWhile) {
                $getParent = $this->categoryPostRepository->show($currentCateID);
                if ($getParent->parent == 0) {
                    $endWhile = true;
                }

                $currentCateID = $getParent->parent;
                $dataBreadcrumb[$getParent->name] = route('post.category', $getParent->slug);
            }
        }

        return view('page.post.category-post', compact(
            'listCategoryPost',
            'firstPosts1',
            'firstPosts2',
            'postRandom3',
            'postRandom4',
            'postCategory',
            'listCategory',
            'dataPostCategory',
            'dataBreadcrumb'
        ));
    }
}
