<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Repositories\CategoryPostRepository;
use App\Repositories\PostRepository;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class PostController extends Controller
{
    private $postRepository;
    private $categoryPostRepository;

    public function __construct(
        CategoryPostRepository $categoryPostRepository,
        PostRepository $postRepository
    )
    {
        $this->categoryPostRepository = $categoryPostRepository;
        $this->postRepository = $postRepository;
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $listPosts = $this->postRepository->index();
        return view('admin.post.index',compact('listPosts'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function createPost()
    {
        $listCategories = $this->categoryPostRepository->index();
        return view('admin.post.create', compact('listCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storePost(PostRequest $request)
    {
        $input = $request->except(['_token']);
        $input = $request->all();
        $input['slug'] =  Str::slug($input['title']);
        $input['author'] = Auth::user()->id;
        
        $this->postRepository->create($input);

        return redirect()->route('admin.post.index')->with('success',  __('Bài viết được thêm thành công'));
    }

    /**
     * Display the specified resource.
     */
    public function showPost( $id)
    {
        $this->postRepository->show($id);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function editPost( $id)
    {
        $listCategories = $this->categoryPostRepository->index();
        $post = $this->postRepository->show($id);
        if (empty($post)) {
            abort(404);
        }
        return view('admin.post.edit', compact('post','listCategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function updatePost(PostRequest $request,  $id)
    {
        $input = $request->except(['_token']);
        $input['slug'] =  Str::slug($input['title']);

        $input = $this->postRepository->update($input, $id);

        return redirect()->route('admin.post.index')->with('success',  __('Bài viết được thay đổi thành công'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deletePost( $id)
    {
        $this->postRepository->destroy($id);
        return back()->with('success', __('Bài viết  được xóa đổi thành công'));
    }
}
