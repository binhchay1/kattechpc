<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    @yield('title')
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta content="Kattechpc" name="description">
    <meta content="Kattechpc" name="author">
    <link rel="shortcut icon" href="{{ asset('/images/logo/favicon.ico') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('/css/page/style.min.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/page/lib.min.css') }}">

    @yield('css')
</head>

<body>
    <div>
        @include('includes.item-banner')
        <div id="header-page">
            @include('includes.header-page')
        </div>
        <div id="content-page">
            @yield('content')
        </div>
        <div id="footer-page">
            @include('includes.footer-page')
        </div>
    </div>

    @yield('js')

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
</body>

</html>
