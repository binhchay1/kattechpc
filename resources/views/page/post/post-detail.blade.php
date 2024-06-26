@extends('layouts.page')

@section('title')
<title>{{ $post->title }} | Kattech PC</title>
@endsection

@section('description', $post->short_description)
@section('keywords', 'tech, tech pc, post, news, kattech')
@section('breadcrumb', $post->title)

@section('css')
<link rel="stylesheet" href="{{ asset('css/page/post-detail.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/page/ckeditor.css') }}" type="text/css">
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
</div>
@endsection
