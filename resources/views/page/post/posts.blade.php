@extends('layouts.page')

@section('title')
<title>{{ __('Bài viết') }} | Kattech PC</title>
@endsection

@section('description', __('Nghiên cứu, theo dõi các tin tức về công nghệ với Kattech PC'))
@section('keywords', 'tech, tech pc, post, news, kattech')
@section('breadcrumb', __('Tin công nghệ'))

@section('css')
<link rel="stylesheet" href="{{ asset('css/page/post.css') }}" />
@endsection

@section('content')
<div class="container">
    <div class="row d-flex post-data">
        <div class="column1">
            <div class="top5 flex">
                <div style="float: left; width: 60%;">
                    <div class="">
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" alt="{{ $firstPosts1->title }}" src="{{ $firstPosts1->thumbnail ?? asset('images/page/no-image.png') }}">
                            <div class="content-top">
                                <?php $text = strlen($firstPosts1->title);
                                if ($text < 80) {
                                    $post = $firstPosts1->title;
                                } else {
                                    $post = \Illuminate\Support\Str::limit($firstPosts1->title, 80);
                                }
                                ?>
                                <h2><a href="{{ route('post.detail', $firstPosts1['slug']) }}" class="h4">{{ $post }}</a></h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="float: right; width: 35%; margin-left: 10px">
                    <div class="position-relative mb-3">
                        <img class="img-fluid w-100" alt="{{ $secondPost->title }}" src="{{ $secondPost->thumbnail ?? asset('images/page/no-image.png') }}">
                        <div class="content-top">
                            <?php $text = strlen($secondPost->title);
                            if ($text < 80) {
                                $post = $secondPost->title;
                            } else {
                                $post = \Illuminate\Support\Str::limit($secondPost->title, 80);
                            }
                            ?>
                            <h2><a href="{{ route('post.detail', $secondPost['slug']) }}" class="h4" href="">{{ $post}}</a></h2>
                            <?php $text = \Illuminate\Support\Str::limit($secondPost->short_description, 550) ?>
                            <p class="m-0">{{ $secondPost->short_description ."..." }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="top1">
                <div class="parent">
                    @foreach($postRandom3 as $random)
                    <div class="child">
                        <img class="img-fluid w-100" src="{{ $random->thumbnail ?? asset('images/page/no-image.png') }}" style="object-fit: cover;">
                        <div class="">
                            <?php $text = strlen($random->title);
                            if ($text < 60) {
                                $post = $random->title;
                            } else {
                                $post = \Illuminate\Support\Str::limit($random->title, 60) . "...";
                            }
                            ?>
                            <h2><a class="text-tech" href="{{ route('post.detail', $random['slug']) }}">{{ $random->title }}</a></h2>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <hr>
            <div class="top1">
                <div>
                    @foreach($postRandom4 as $postDESC)
                    <div class="child d-flex">
                        <div style="width: 30%;">
                            <img class="img-fluid w-100" src="{{ $postDESC->thumbnail ?? asset('images/page/no-image.png') }}" style="object-fit: cover;">
                        </div>
                        <div class="" style="margin-left: 20px; width: 70%;">
                            <?php $text = strlen($postDESC->title);
                            if ($text < 60) {
                                $post = $postDESC->title;
                            } else {
                                $post = \Illuminate\Support\Str::limit($postDESC->title, 60);
                            }
                            ?>
                            <h2><a class="text-tech" href="{{ route('post.detail', $postDESC->slug) }}">{{ $postDESC->title }}</a></h2>
                            <div class="post_info">
                                <span class="post_info_item-date">
                                    <?php $date =  $postDESC->created_at->format('M d, Y') ?? "" ?>
                                    {{__("Thời gian: ")}} {{ $date }}
                                </span>
                                <span class="post_info_item-author">{{ $postDESC->user->name ?? "" }}</span>
                            </div>
                        </div>
                    </div>
                    <hr>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="column2" id="post-column2">
            <div class="row top1">
                <h2 class="text-title"> {{ __('Chủ đề nóng') }}
                    <span class="icon" style="position: absolute;">
                        <img id="img-icon-hot" src="{{ asset('/images/icon-hot.png') }}">
                    </span>
                </h2>
                <div class="parent1">
                    @foreach($listCategoryPost as $categoryPost)
                    <div class="child1">
                        <a href="{{ route('post.category', $categoryPost->slug) }}">
                            <img src="{{ $categoryPost->image }}" class="item-hot">
                            <span class="policy-title">{{ $categoryPost->name }}</span>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="row top2">
                <h2 class="text-title" style="background-color: #03304b;"> {{__('TIN TỨC GẦN NHẤT')}}
                    <span class="icon" style="position: absolute;">
                        <img id="img-icon-hot" src="{{ asset('/images/icon-blog.png') }}">
                    </span>
                </h2>
                @foreach($postRandom5 as $post)
                <div id="content">
                    <div id="left">
                        <img src="{{ $post->thumbnail ?? asset( 'images/page/no-image.png') }}" alt="Image Alt" class="img-fluid2" />
                    </div>
                    <div id="content-right">
                        <?php $text = \Illuminate\Support\Str::limit($post->short_description, 80) ?>
                        <h4><a href="{{ route('post.detail', $postDESC->slug) }}"> {{ $text }} </a></h4>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
@endsection
