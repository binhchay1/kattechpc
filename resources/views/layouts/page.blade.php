<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    @yield('title')
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="Kattechpc" name="description">
    <meta content="Kattechpc" name="author">
    <link rel="shortcut icon" href="{{ asset('/images/logo/favicon.ico') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/page/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/page/lib.min.css') }}">
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
        @yield('content')
    </div>
    <div id="footer-page">
        @include('includes.footer-page')
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js"></script>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js"></script>
    <script src="{{ asset('/js/page/main.js') }}"></script>

    @yield('js')
</body>

</html>
