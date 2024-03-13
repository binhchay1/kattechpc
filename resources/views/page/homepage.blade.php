@extends('layouts.page')

@section('title')
<title>{{ __('Trang chủ') }} | Kattech PC</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('/plugins/owlcarousel/owl.theme.default.min.css') }}" />
@endsection

@section('content')
<section class=" slider-banner">
    <div class="slider-banner-main">
        <div class="menu-main">
            <nav class="menu-nav">
                <ul class="menu-nav-main">
                    <li class="menu-nav-item">
                        <a class="menu-nav-link" href="/pages/laptop-van-phong">
                            <span class="menu-nav-icon" data-hover="laptop"><svg width="20" height="13" viewBox="0 0 20 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <mask id="path-1-inside-1_5068_8551" fill="currentcolor">
                                        <path d="M4.00002 1C3.44774 1 3.00002 1.44772 3.00002 2V8.5C3.00002 9.05229 3.44774 9.5 4.00002 9.5H16C16.5523 9.5 17 9.05229 17 8.5V2C17 1.44772 16.5523 1 16 1H4.00002ZM3.70002 0H10H16.3C16.7774 0 17.2353 0.184374 17.5728 0.512563C17.9104 0.840752 18.1 1.28587 18.1 1.75V8.75C18.1 9.21413 17.9104 9.65925 17.5728 9.98744C17.2353 10.3156 16.7774 10.5 16.3 10.5H3.70002C3.22263 10.5 2.7648 10.3156 2.42723 9.98744C2.08967 9.65925 1.90002 9.21413 1.90002 8.75V1.75C1.90002 1.28587 2.08967 0.840752 2.42723 0.512563C2.7648 0.184374 3.22263 0 3.70002 0Z"></path>
                                    </mask>
                                    <path d="M4.00002 1C3.44774 1 3.00002 1.44772 3.00002 2V8.5C3.00002 9.05229 3.44774 9.5 4.00002 9.5H16C16.5523 9.5 17 9.05229 17 8.5V2C17 1.44772 16.5523 1 16 1H4.00002ZM3.70002 0H10H16.3C16.7774 0 17.2353 0.184374 17.5728 0.512563C17.9104 0.840752 18.1 1.28587 18.1 1.75V8.75C18.1 9.21413 17.9104 9.65925 17.5728 9.98744C17.2353 10.3156 16.7774 10.5 16.3 10.5H3.70002C3.22263 10.5 2.7648 10.3156 2.42723 9.98744C2.08967 9.65925 1.90002 9.21413 1.90002 8.75V1.75C1.90002 1.28587 2.08967 0.840752 2.42723 0.512563C2.7648 0.184374 3.22263 0 3.70002 0Z" fill="currentcolor"></path>
                                    <path d="M1 12L19 12" stroke="currentcolor" stroke-linecap="round"></path>
                                </svg></span>
                            <span class="menu-nav-name">Laptop</span>
                            <span class="menu-nav-arrow">
                                <svg viewBox="0 0 6 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.5 1.5L4.5 4L1.5 6.5" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </span>
                        </a>
                        <div class="menu-nav-content" style="display: none;">
                            <div class="column xlab_column_5_5">
                                <div class="sub-menu-nav-item smg-1">
                                    <a class="sub-menu-nav-item-name" href="/pages/laptop-van-phong">Thương hiệu</a>
                                    <a class="sub-menu-nav-item-filter" href="/collections/laptop-asus-hoc-tap-va-lam-viec">ASUS</a>
                                    <a class="sub-menu-nav-item-filter" href="/collections/laptop-acer-hoc-tap-va-lam-viec">ACER</a>
                                    <a class="sub-menu-nav-item-filter" href="/collections/laptop-msi-hoc-tap-va-lam-viec">MSI</a>
                                    <a class="sub-menu-nav-item-filter" href="/collections/laptop-lenovo-hoc-tap-va-lam-viec">LENOVO</a>
                                    <a class="sub-menu-nav-item-filter" href="/collections/laptop-dell-hoc-tap-va-lam-viec">DELL</a>
                                    <a class="sub-menu-nav-item-filter" href="/collections/laptop-hp">HP</a>
                                    <a class="sub-menu-nav-item-filter" href="/collections/laptop-lg-gram">LG Gram</a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </nav>
        </div>

        <div class="news-main">
            <div class="news-main-left">
                <div id="header-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img class="img-fluid" src="{{ asset('/images/test_img/bottom-1.webp') }}" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img class="img-fluid" src="{{ asset('/images/test_img/right-1.webp') }}" alt="Image">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#header-carousel" data-slide="prev">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-prev-icon mb-n2"></span>
                        </div>
                    </a>
                    <a class="carousel-control-next" href="#header-carousel" data-slide="next">
                        <div class="btn btn-dark" style="width: 45px; height: 45px;">
                            <span class="carousel-control-next-icon mb-n2"></span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="news-main-right">
                <div>
                    <img src="{{ asset('/images/test_img/right-1.webp') }}">
                </div>
                <div>
                    <img src="{{ asset('/images/test_img/right-2.webp') }}">
                </div>
                <div>
                    <img src="{{ asset('/images/test_img/right-3.webp') }}">
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/plugins/owlcarousel/owl.carousel.min.js') }}"></script>
<script>
    // Vendor carousel
    $('.vendor-carousel').owlCarousel({
        loop: true,
        nav: false,
        autoplay: true,
        smartSpeed: 1000,
        responsive: {
            0: {
                items: 2
            },
            576: {
                items: 3
            },
            768: {
                items: 4
            },
            992: {
                items: 5
            },
            1200: {
                items: 6
            }
        }
    });

</script>
@endsection
