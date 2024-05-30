@extends('layouts.page')

@section('title')
<title>{{ $promotion->title }} | Kattech PC</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/page/post-detail.css') }}" />
@endsection

@section('content')
<div class="row d-flex" id="content-post">
    <div class="leftcolumn">
        <div class="card d-flex" style="flex-direction: column;">
            <div class="d-flex flex-direction-column">
                <h1>{{ $promotion->title }}</h1>
                <p>{{ date_format($promotion->created_at, "F j, Y, g:i a") }}</p>
                <p>{{ $promotion->short_description }}</p>
            </div>

            <div>
                <img class="boder-radius-10" src="{{ $promotion->thumbnail ?? asset('/images/test_post/2904-viettel-dau-gia-thanh-cong-bang-tan-5g-1.jpg') }}" alt="{{ $promotion->title }}" width="300" height="300">
            </div>
        </div>

        <div class="row">
            <p class="">{!! $promotion->content !!}</p>
        </div>
    </div>
    <div class="rightcolumn">
        <div class="card">
            <h2>{{ __("Bài viết liên quan") }}</h2>
            @foreach($listPromotion as $promotion)
            <div>
                <div>
                    <img class="image-post" src="{{ asset($promotion->thumbnail) }}">
                </div>
                <a href="{{ route('post.detail', $promotion['slug']) }}">
                    <p>{{ $promotion->title }}</p>
                </a>
            </div>
            <br>
            @endforeach
        </div>
    </div>
</div>
@endsection
