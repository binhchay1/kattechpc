@extends('layouts.page')

@section('title')
    <title>{{ __('Trang chủ') }} | Kattech PC</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('/plugins/owlcarousel/owl.theme.default.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/page/promotion.css') }}"/>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="column1 ">
                <div class="row top1">
                    <h1 class="text"> {{__('Chương trình khuyến mãi')}}</h1>
                    <div class="parent">
                        <div class="child">
                            <img class="img-fluid w-100" src="//file.hstatic.net/200000722513/file/asus_your_voice_matter_a4653e90979c4c50bb3eee5539e96d42_grande.jpg" style="object-fit: cover;">
                            <div class="">
                                <h2><a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a></h2>
                                <p><a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a></p>
                            </div>
                        </div>
                        <div class="child">
                            <img class="img-fluid w-100" src="//file.hstatic.net/200000722513/file/gearvn-cach-download-game-dragon-city-cuc-de-cho-pc-laptop-2_6947843f0b8740efa12fa22c7e010778.jpg" style="object-fit: cover;">
                            <div class="">
                                <h2><a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a></h2>
                            </div>
                        </div>
                        <div class="child">
                            <img class="img-fluid w-100" src="//file.hstatic.net/200000722513/file/monica-ung-dung-ai-mien-phi-d112940-7_187087bd2ddb46c1acdd81b5c1defc89.jpg" style="object-fit: cover;">
                            <div class="">
                                <h2><a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a></h2>
                            </div>
                        </div>
                        <div class="child">
                            <img class="img-fluid w-100" src="//file.hstatic.net/200000722513/file/gearvn-cach-download-game-dragon-city-cuc-de-cho-pc-laptop-2_6947843f0b8740efa12fa22c7e010778.jpg" style="object-fit: cover;">
                            <div class="">
                                <h2><a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a></h2>
                            </div>
                        </div>
                        <div class="child">
                            <img class="img-fluid w-100" src="//file.hstatic.net/200000722513/file/gearvn-cach-download-game-dragon-city-cuc-de-cho-pc-laptop-2_6947843f0b8740efa12fa22c7e010778.jpg" style="object-fit: cover;">
                            <div class="">
                                <h2><a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a></h2>
                            </div>
                        </div>
                        <div class="child">
                            <img class="img-fluid w-100" src="//file.hstatic.net/200000722513/file/gearvn-cach-download-game-dragon-city-cuc-de-cho-pc-laptop-2_6947843f0b8740efa12fa22c7e010778.jpg" style="object-fit: cover;">
                            <div class="">
                                <h2><a class="h4" href="">Est stet amet ipsum stet clita rebum duo</a></h2>
                            </div>
                        </div>
                    </div>
                </div>

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
