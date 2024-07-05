@extends('layouts.page')

@section('title')
<title>{{ __('Danh mục') }} | Kattech PC</title>
@endsection

@section('description', __('Nghiên cứu, theo dõi các tin tức về công nghệ' . $postCategory->name . ' với Kattech PC'))
@section('keywords', $postCategory->name. ', post, news, kattech')
@section('breadcrumb', $postCategory->name)

@section('css')
<link rel="stylesheet" href="{{ asset('css/page/post.css') }}" />
@endsection

@section('content')
<div class="container">
    <div class="row d-flex post-data">
        <div class="column1">
            <div class="top5 flex">
                @if(count($firstPosts1) > 0)
                @foreach($firstPosts1 as $random)
                <div style="float: left; width: 60%;">
                    <div class="position-relative mb-3">
                        <img class="img-fluid w-100" alt="{{ $random->title }}" src="{{ $random->thumbnail ?? asset('images/page/no-image.png') }}">
                        <div class="content-top">
                            <?php $text = strlen($random->title);
                            if ($text < 80) {
                                $post = $random->title;
                            } else {
                                $post = \Illuminate\Support\Str::limit($random->title, 80);
                            }
                            ?>
                            <h2><a href="{{ route('post.detail', $random['slug']) }}" class="h4">{{ $post }}</a></h2>
                        </div>
                    </div>
                </div>
                    @endforeach
                @endif
                @if(count($firstPosts2) > 0)
                    @foreach($firstPosts2 as $random)
                    <div style="float: right; width: 35%; margin-left: 10px">
                        <div class="position-relative mb-3">
                            <img class="img-fluid w-100" alt="{{ $random->title }}" src="{{ $random->thumbnail ?? asset('images/page/no-image.png') }}">
                            <div class="content-top">
                                <?php $text = strlen($random->title);
                                if ($text < 80) {
                                    $post = $random->title;
                                } else {
                                    $post = \Illuminate\Support\Str::limit($random->title, 80);
                                }
                                ?>
                                <h2><a href="{{ route('post.detail', $random['slug']) }}" class="h4" href="">{{ $post}}</a></h2>
                                <?php $text = \Illuminate\Support\Str::limit($random->short_description, 550) ?>
                                <p class="m-0">{{ $random->short_description ."..." }}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                @endif
            </div>
            @if(count($postRandom3) >0)
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
            @endif
            @if(count($postRandom4) >0)
                <div class="top1">
                    @foreach($postRandom4 as $random)
                        <div class="child d-flex">
                            <div style="width: 30%;">
                                <img class="img-fluid w-100" src="{{ $random->thumbnail ?? asset('images/page/no-image.png') }}" style="object-fit: cover;">
                            </div>
                            <div class="" style="margin-left: 20px; width: 70%;">
                                <?php $text = strlen($random->title);
                                if ($text < 60) {
                                    $post = $random->title;
                                } else {
                                    $post = \Illuminate\Support\Str::limit($random->title, 60) . "...";
                                }
                                ?>
                                <h2><a class="text-tech" href="{{ route('post.detail', $random->slug) }}">{{$post}}</a></h2>
                                <div class="post_info">
                            <span class="post_info_item-date">
                                <?php $date =  $random->created_at->format('M d, Y') ?? "" ?>
                                {{__("Thời gian: ")}} {{ $date }}
                            </span>
                                    <span class="post_info_item-author">{{ $random->user->name ?? "" }}</span>
                                </div>
                            </div>
                        </div>
                        <hr>
                    @endforeach
                </div>
            @endif
        </div>


        <div class="column2" id="post-column2">
        <div class="row top1">
            <h2 class="text-title"> {{ __('CHỦ ĐỀ NÓNG') }}</h2>
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
            <h2 class="text-title"> {{__('TIN TỨC GẦN NHẤT')}}</h2>
            @foreach($dataPostCategory->posts as $post)
            <div id="content">
                <div id="left">
                    <img src="{{ asset($post->thumbnail ??  'images/page/no-image.png') }}" alt="Image Alt" class="img-fluid2" />
                </div>
                <div id="content-right">
                    <?php $text = \Illuminate\Support\Str::limit($post->short_description, 80) ?>
                    <h4> {{$text}}</h4>
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
