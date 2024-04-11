@extends('layouts.page')

@section('title')
    <title>{{ __('Trang chủ') }} | Kattech PC</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('/plugins/owlcarousel/owl.theme.default.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/page/post-detail.css') }}"/>
@endsection

@section('content')
<div class="row">
    <div class="leftcolumn">
        <div class="card">
            <h1>{{$post->title}}</h1>
            <p>{{ date_format($post->created_at, "F j, Y, g:i a") }}</p>
            <div class="" >
                <img class="boder-radius-10" src="{{$post->thumbnail ?? asset('/images/test_post/2904-viettel-dau-gia-thanh-cong-bang-tan-5g-1.jpg') }}" alt="Viettel trúng đấu giá băng tần để chính thức triển khai 5G tại Việt Nam">
            </div>
            <p>{{$post->short_description}}</p>
            <div class="row">
                <p class="">{!!$post->content!!}</p>

            </div>
        </div>
    </div>
    <div class="rightcolumn">
        <div class="card">


        <h2>{{__("Bài viết liên quan")}}</h2>
        @foreach($listPost as $post)
        <div>
            <div>
                <img class="image-post" src="{{asset($post->thumbnail)}}">
            </div>
            <a href="{{route('post.detail', $post['slug'])}}">  <p>{{$post->title}}</p></a>

        </div>
        <br>
            @endforeach
        </div>
    </div>
</div>

@endsection

@section('js')
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/plugins/owlcarousel/owl.carousel.min.js') }}"></script>
    <script>
        $('.vendor-carousel').owlCarousel({
            loop: true,
            nav: false,
            autoplay: true,
            smartSpeed: 1000,
        });
    </script>
@endsection
