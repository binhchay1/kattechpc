@extends('layouts.page')

@section('title')
<title>{{ $post->title }} | Kattech PC</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/page/post-detail.css') }}" />
@endsection

@section('content')
<div class="row d-flex" id="content-post">
    <div class="leftcolumn">
        <div class="card d-flex" style="flex-direction: column;">
            <div class="d-flex flex-direction-column">
                <h1>{{ $post->title }}</h1>
                <p>{{ date_format($post->created_at, "F j, Y, g:i a") }}</p>
                <p>{{ $post->short_description }}</p>
            </div>

            <div>
                <img class="boder-radius-10" src="{{ $post->thumbnail ?? asset('/images/test_post/2904-viettel-dau-gia-thanh-cong-bang-tan-5g-1.jpg') }}" alt="{{ $post->title }}" width="300" height="300">
            </div>
        </div>

        <div class="row">
            <p class="">{!! $post->content !!}</p>
        </div>
    </div>
    <div class="rightcolumn">
        <div class="card">
            <h2>{{ __("Bài viết liên quan") }}</h2>
            @foreach($listPost as $post)
            <div>
                <div>
                    <img class="image-post" src="{{ asset($post->thumbnail) }}">
                </div>
                <a href="{{ route('post.detail', $post['slug']) }}">
                    <p>{{ $post->title }}</p>
                </a>
            </div>
            <br>
            @endforeach
        </div>
    </div>
</div>
@endsection
