@extends('layouts.page')

@section('title')
<title>{{ $promotion->title }} | Kattech PC</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/page/post-detail.css') }}" />
@endsection

@section('description', __($promotion->short_description . 'với Kattech PC'))
@section('keywords', 'promotion, flash sale, sale, kattechpc, kattech')
@section('breadcrumb', $promotion->title)

<style>
    .promotion-releated {
        padding: 10px;
    }
</style>
@section('content')
<div class="row " id="content-post">
    <div class="leftcolumn" style="width: 100%;">
        <div class="card" style="flex-direction: column; justify-content: center;">
            <div class="flex-direction-column">
                <h1>{{ $promotion->title }}</h1>
                <p>{{ date_format($promotion->created_at, "F j, Y, g:i a") }}</p>
                <p>{{ $promotion->short_description }}</p>
            </div>

            <div>
                <img class="boder-radius-10" src="{{ $promotion->image ?? asset('/images/test_post/2904-viettel-dau-gia-thanh-cong-bang-tan-5g-1.jpg') }}" alt="{{ $promotion->title }}" width="300" height="300">
            </div>
        </div>

        <div class="row">
            <p class="">{!! $promotion->content !!}</p>
        </div>
    </div>
</div>
@endsection
