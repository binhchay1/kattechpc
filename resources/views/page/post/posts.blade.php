@extends('layouts.page')

@section('title')
<title>{{ __('Chi tiết bài viết') }} | Kattech PC</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/page/post.css') }}" />
@endsection

@section('content')
<div class="container">
    <div class="row d-flex">
        <div class="column1">
            <div class="top5 ">
                @foreach($listPostRandom as $key => $random)
                @if($key == 0)
                <div class="col">
                    <div class="position-relative mb-3">
                        <img class="img-fluid w-100" alt="{{ $random->title }}" src="{{ $random->thumbnail ?? asset('images/page/no-image.png') }}">
                        <div class="content-top">
                            <h2><a href="{{ route('post.detail', $random['slug']) }}" class="h4" href="">{{ $random->title }}</a></h2>
                            <?php $text = \Illuminate\Support\Str::limit($random->short_description, 120) ?>
                            <p class="m-0">{{ $text }}</p>
                        </div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            <div class=" top1">
                <hr class="hr">
                <div class="parent">
                    @foreach($listPostDESC as $postDESC)
                    <div class="child">
                        <img class="img-fluid w-100" src="{{ $random->thumbnail ?? asset('images/page/no-image.png') }}" style="object-fit: cover;">
                        <div class="">
                            <h2><a class="text-tech" href="">{{ $postDESC->title }}</a></h2>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        <div class="column2">
            <div class="row top1">
                <h2 class="text-title"> {{ __('Chủ đề nóng') }}</h2>
                <div class="parent1">
                    @foreach($listCategoryPost as $categoryPost)
                    <div class="child1">
                        <a href="{{ route('post.detail', $categoryPost->slug) }}">
                            <img src="{{ $categoryPost->image }}" class="item-hot">
                            <span class="policy-title">{{ $categoryPost->name }}</span>
                        </a>
                    </div>
                    @endforeach
                </div>
            </div>

            <div class="row top2">
                <h2 class="text-title"> {{__('Xem nhanh')}}</h2>
                @foreach($listPost as $post)
                <div id="content">
                    <div id="left">
                        <img src="{{ $post->thumbnail ?? asset( 'images/page/no-image.png') }}" alt="Image Alt" class="img-fluid2" />
                    </div>
                    <div id="content-right">
                        <h4>{{ $post->title }}</h4>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>

</div>

@endsection

@section('js')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
@endsection
