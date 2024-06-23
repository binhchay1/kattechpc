<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    @yield('title')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="author" content="Kattechpc">
    <meta name="rating" content="General">
    <meta name="robots" content="index,follow" />
    <meta name="revisit-after" content="7 days">
    <meta name="coverage" content="Worldwide">
    <meta name="distribution" content="Global">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('/images/logo/favicon.ico') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('/css/page/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/page/lib.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/page/mobile.css') }}">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="HandheldFriendly" content="true">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    @yield('css')
</head>

<body>
    <div id="page-banner">
        @include('includes.item-banner')
    </div>

    <div id="header-page">
        @include('includes.header-page')
    </div>

    <div id="content-page">

        @if(!Route::is('home'))
        @if(Route::is('showDataCategory') or Route::is('showPromotionDetail') or Route::is('productDetail') or Route::is('post.detail') or Route::is('post.category'))
        <div class="box-breadcrumb-global">
            <div class="container d-flex align-items-center box-breadcrumb">
                <div class="global-breadcrumb d-flex justify-content-between align-items-center">

                    <ol itemscope="" itemtype="http://schema.org/BreadcrumbList" class="list-breadcrumb clearfix d-flex align-items-center flex-wrap">
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <i class="fa fa-home"></i>
                            <a href="{{ route('home') }}" itemprop="item" class="breadcrumb-home">
                                <span itemprop="name">{{ __('Trang chủ') }} </span> <i class="fa fa-angle-right" style="margin: 0 10px;"></i>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>

                        @if(Route::is('showDataCategory') or Route::is('post.category'))
                        @if(isset($isParent) and !$isParent)
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <a href="@yield('breadcrumb-parent-url')" class="breadcrumb-parent-url">
                                <span itemprop="name" style="font-weight: bold;"> @yield('breadcrumb-parent') </span><i class="fa fa-angle-right" style="margin: 0 10px;"></i>
                            </a>

                            <meta itemprop="position" content="2">
                        </li>
                        @endif
                        @endif

                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <span itemprop="name"> @yield('breadcrumb') </span>
                            <meta itemprop="position" content="3">
                        </li>
                    </ol>

                </div>
            </div>
        </div>
        @else
        <div class="box-breadcrumb-global">
            <div class="container d-flex align-items-center box-breadcrumb">
                <div class="global-breadcrumb d-flex justify-content-between align-items-center">
                    <ol itemscope="" itemtype="http://schema.org/BreadcrumbList" class="list-breadcrumb clearfix d-flex align-items-center flex-wrap">
                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <i class="fa fa-home"></i>
                            <a href="{{ route('home') }}" itemprop="item" class="breadcrumb-home">
                                <span itemprop="name">{{ __('Trang chủ') }} </span> <i class="fa fa-angle-right" style="margin: 0 10px;"></i>
                            </a>
                            <meta itemprop="position" content="1">
                        </li>

                        <li itemprop="itemListElement" itemscope="" itemtype="http://schema.org/ListItem">
                            <span itemprop="name"> @yield('breadcrumb') </span>
                            <meta itemprop="position" content="2">
                        </li>
                    </ol>

                </div>
            </div>
        </div>
        @endif
        @endif

        @yield('content')
    </div>
    <div id="footer-page">
        @include('includes.footer-page')
    </div>

    <div class="global-fixed-right">
        <a href="https://www.facebook.com/kattechpc" aria-label="Face Book" target="_blank" class="fix-face d-flex align-items-center justify-content-center">
            <img width="25" height="25" alt="mes" src="{{ asset('images/logo/icon-facebook.png') }}">
        </a>

        <a href="https://www.youtube.com/c/kattechpc" aria-label="Youtube" target="_blank" class="fix-youtube d-flex align-items-center justify-content-center">
            <img width="40" height="40" alt="mes" src="{{ asset('images/logo/icon-youtube.png') }}">
        </a>

        <a href="https://m.me/kattechpc.vn" target="_blank" class="messenger d-flex align-items-center">
            <img width="40" height="40" alt="mes" src="{{ asset('images/logo/facebook_messenger.png') }}">
            <div class="contact-info">
                <b class="d-block">Chat Facebook</b><br><span>(8h-22h30)</span>
            </div>
        </a>
        <a href="https://zalo.me/2360590838383636184" target="_blank" class="zalo d-flex align-items-center">
            <img width="40" height="40" alt="zalo" src="{{ asset('images/logo/zalo.png') }}">
            <div class="contact-info">
                <b class="d-block">Chat Zalo</b><br><span>(8h-22h30)</span>
            </div>
        </a>
    </div>

    <div class="global-fixed-left">
        <div class="sale">
            <a href="{{ route('promotion') }}">
                <img width="56" height="64" alt="khuyen-mai" src="{{ asset('images/sale.png') }}" data-was-processed="true">
            </a>
        </div>
    </div>

    <script src="{{ asset('/plugins/jquery/jquery-3.4.1.min.js') }}"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
    <script src="{{ asset('/js/page/main.js') }}"></script>

    @yield('js')
</body>

</html>
