<!DOCTYPE html>
<html lang="en" class="light scroll-smooth group" data-layout="vertical" data-sidebar="light" data-sidebar-size="lg" data-mode="light" data-topbar="light" data-skin="default" data-navbar="sticky" data-content="fluid" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>@yield('title') | Kattech PC</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
    <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">
    <meta content="Minimal Admin & Dashboard Template" name="description">
    <meta content="Themesdesign" name="author">
    <link rel="shortcut icon" href="{{ URL::asset('/images/logo/favicon.ico') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="//cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>

    @include('layouts.head-css')
    @yield('css')
    @livewireStyles
</head>

@include('layouts.body')

<div class="group-data-[sidebar-size=sm]:min-h-sm group-data-[sidebar-size=sm]:relative">
    @include('layouts.sidebar')
    @include('layouts.topbar')
    <div class="relative min-h-screen group-data-[sidebar-size=sm]:min-h-sm">
        @include('layouts.page-wrapper')

        <div class="container-fluid group-data-[content=boxed]:max-w-boxed mx-auto">
            <div id="message">
                @include('layouts.flash-message')
            </div>
            @yield('content')
        </div>
    </div>
    @include('layouts.footer')
</div>
@stack('modals')
@include('layouts.customizer')
@include('layouts.vendor-scripts')

<script src="{{ URL::asset('build/js/app.js') }}"></script>
</body>

</html>
