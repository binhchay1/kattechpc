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
                            <img src="{{ asset('/images/test_img/slide-1.png') }}" width="850" height="403" alt="Image">
                        </div>
                        <div class="carousel-item">
                            <img src="{{ asset('/images/test_img/slide-2.png') }}" width="850" height="403" alt="Image">
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
                <div class="news-main-right-1">
                    <img src="{{ asset('/images/test_img/right-1.webp') }}" width="400">
                </div>
                <div class="news-main-right-2">
                    <img src="{{ asset('/images/test_img/right-2.webp') }}" width="400">
                </div>
            </div>

            < </div>
        </div>
</section>

<section class="section section-collection flashsale has-banner flashsale-2" id="home-flashsale-2">
    <div class="container-fluid">
        <div class="wrapper-content ">
            <div class="section-heading">
                <div class="box-left">
                    <div class="box-countdown flip-js-countdown">
                        <div class="auto-due soon" data-due="2024-03-14T23:59:00" data-face="slot" data-separator=":" data-format="d,h,m,s" data-labels-days="Dia,Ngày" data-labels-hours="Hora,Giờ" data-labels-minutes="Minuto,Phút" data-labels-seconds="Segundo,Giây" data-initialized="true" data-layout=" group" data-scale="m">
                            <div id="soon-espa-2" class="soon-espa"></div>
                            <span class="soon-group " data-value="38284"><span class="soon-group-inner"><span class="soon-group soon-group-separator" data-value="1"><span class="soon-group-inner"><span class="soon-group soon-group-sub" data-value="1"><span class="soon-group-inner"><span class="soon-repeater soon-value "><span class="soon-slot "><span class="soon-slot-inner soon-slot-animate" style="width: 0.8125em;"><span class="soon-slot-old"> </span><span class="soon-slot-new">1</span><span class="soon-slot-bounding">8</span></span></span></span><span class="soon-text soon-label">Ngày</span></span></span></span></span><span class="soon-group soon-group-separator" data-value="15"><span class="soon-group-inner"><span class="soon-text soon-separator">:</span><span class="soon-group soon-group-sub" data-value="15"><span class="soon-group-inner"><span class="soon-repeater soon-value "><span class="soon-slot "><span class="soon-slot-inner soon-slot-animate" style="width: 0.8125em;"><span class="soon-slot-old"> </span><span class="soon-slot-new">1</span><span class="soon-slot-bounding">8</span></span></span><span class="soon-slot "><span class="soon-slot-inner soon-slot-animate" style="width: 0.8125em;"><span class="soon-slot-old"> </span><span class="soon-slot-new">5</span><span class="soon-slot-bounding">8</span></span></span></span><span class="soon-text soon-label">Giờ</span></span></span></span></span><span class="soon-group soon-group-separator" data-value="14"><span class="soon-group-inner"><span class="soon-text soon-separator">:</span><span class="soon-group soon-group-sub" data-value="14"><span class="soon-group-inner"><span class="soon-repeater soon-value "><span class="soon-slot "><span class="soon-slot-inner soon-slot-animate" style="width: 0.8125em;"><span class="soon-slot-old"> </span><span class="soon-slot-new">1</span><span class="soon-slot-bounding">8</span></span></span><span class="soon-slot "><span class="soon-slot-inner soon-slot-animate" style="width: 0.8125em;"><span class="soon-slot-old">5</span><span class="soon-slot-new">4</span><span class="soon-slot-bounding">8</span></span></span></span><span class="soon-text soon-label">Phút</span></span></span></span></span><span class="soon-group soon-group-separator" data-value="33"><span class="soon-group-inner"><span class="soon-text soon-separator">:</span><span class="soon-group soon-group-sub" data-value="33"><span class="soon-group-inner"><span class="soon-repeater soon-value "><span class="soon-slot "><span class="soon-slot-inner soon-slot-animate" style="width: 0.8125em;"><span class="soon-slot-old">4</span><span class="soon-slot-new">3</span><span class="soon-slot-bounding">8</span></span></span><span class="soon-slot "><span class="soon-slot-inner soon-slot-animate" style="width: 0.8125em;"><span class="soon-slot-old">4</span><span class="soon-slot-new">3</span><span class="soon-slot-bounding">8</span></span></span></span><span class="soon-text soon-label">Giây</span></span></span></span></span></span></span>
                        </div>
                    </div>
                    <div class="box-header">
                        <h2 class="hTitle">
                            <a href="/pages/pc-gvn">
                                BUILD PC NHẬN QUÀ LÊN ĐẾN 20 TRIỆU!!!
                            </a>
                        </h2>
                    </div>
                </div>
                <div class="box-right">
                    <div class="box-link">
                        <a href="/pages/pc-gvn" class="button-more">
                            Xem chi tiết
                            <svg viewBox="0 0 8 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M0.768 9.94307C0.848883 9.98514 0.939696 10.0044 1.03069 9.99876C1.12169 9.99312 1.20943 9.96281 1.2845 9.91107L7.7845 5.41107C7.85092 5.36506 7.9052 5.30363 7.94269 5.23205C7.98017 5.16047 7.99976 5.08088 7.99976 5.00007C7.99976 4.91927 7.98017 4.83967 7.94269 4.7681C7.9052 4.69652 7.85092 4.63509 7.7845 4.58908L1.2845 0.0890755C1.20949 0.0371718 1.1217 0.00677802 1.03066 0.00118502C0.939609 -0.00440797 0.848767 0.015013 0.767965 0.0573451C0.687163 0.0996772 0.619482 0.163307 0.572248 0.241345C0.525015 0.319384 0.500031 0.408856 0.5 0.500075V9.50007C0.499985 9.59134 0.524952 9.68087 0.572194 9.75897C0.619436 9.83706 0.687151 9.90073 0.768 9.94307Z" fill="white"></path>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="section-content">
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 d-lg-block d-none">
                        <div class="box-banner fade-box" data-banner-page="Homepage" data-banner-loc="Flash sale Banner">
                            <a class="aspect-ratio" href="/pages/pc-gvn" aria-label="PC GVN" title="PC GVN" style="--height-img:380; --width-img:757;">
                                <picture>
                                    <source media="(max-width: 991px)" srcset="https://file.hstatic.net/200000722513/file/banner_pc_f9e743e0f5254401b3525636ec9e03c2.png">
                                    <source media="(min-width: 992px)" srcset="https://file.hstatic.net/200000722513/file/banner_pc_f9e743e0f5254401b3525636ec9e03c2.png">
                                    <img src="https://file.hstatic.net/200000722513/file/banner_pc_f9e743e0f5254401b3525636ec9e03c2.png" alt="PC GVN">
                                </picture>
                            </a>
                        </div>
                    </div>
                    <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                        <div class="listProduct-row slick-style style-pr slick-initialized slick-slider slick-dotted" data-list-id="PC GVN" id="slider-collection-fs-2" data-id="1003819601" data-url="/collections/pc-gvn" data-limit="8"><button type="button" class="slick-prev slick-arrow" style=""><svg width="8" height="17" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 50 50" enable-background="new 0 0 50 50" xml:space="preserve">
                                    <g display="none">
                                        <rect x="1" y="1" display="inline" fill="#000000" width="48" height="48"></rect>
                                    </g>
                                    <g>
                                        <g>
                                            <polygon points="34.675,47.178 12.497,25 34.675,2.822 37.503,5.65 18.154,25 37.503,44.35"></polygon>
                                        </g>
                                    </g>
                                </svg></button>
                            <div class="slick-list">
                                <div class="slick-track" style="opacity: 1; width: 3880px; transform: translate3d(-776px, 0px, 0px);">
                                    <div class="proloop-fs slick-slide slick-cloned" data-slick-index="-4" aria-hidden="true" style="width: 194px;" tabindex="-1">
                                        <div class="proloop-block has-rating">
                                            <div class="proloop-img"><a class="aspect-ratio fade-box" href="/products/pc-gvn-x-msi-project-zero-white" title="PC GVN x MSI PROJECT ZERO WHITE (Intel i5-14400F/ VGA RTX 4060)" aria-label="PC GVN x MSI PROJECT ZERO WHITE (Intel i5-14400F/ VGA RTX 4060)" tabindex="-1">
                                                    <picture class="">
                                                        <source srcset="//product.hstatic.net/200000722513/product/zero_msi_-_3_0c33d2205a034620a2d88a118214d327_medium.png" data-srcset="//product.hstatic.net/200000722513/product/zero_msi_-_3_0c33d2205a034620a2d88a118214d327_medium.png" media="(max-width: 767px)"><img class="img-default lazyloaded" src="//product.hstatic.net/200000722513/product/zero_msi_-_3_0c33d2205a034620a2d88a118214d327_medium.png" data-src="//product.hstatic.net/200000722513/product/zero_msi_-_3_0c33d2205a034620a2d88a118214d327_medium.png" alt="PC GVN x MSI PROJECT ZERO WHITE (Intel i5-14400F/ VGA RTX 4060)">
                                                    </picture>
                                                </a>
                                                <div class="proloop-button" data-view=""> <button aria-label="Xem nhanh" class="proloop-action quick-view  full" data-handle="" data-id="1051608380" tabindex="-1">Xem nhanh</button><button aria-label="Thêm vào giỏ" class="proloop-action add-to-cart disabled" disabled="" data-id="1051608380" data-variantid="" tabindex="-1">Thêm vào giỏ</button> </div><span class="sticker_left_bottom"><img class="" src="https://file.hstatic.net/200000722513/file/tag_5_trieu_58fe1809db854c3eaa41771986ad0377.png" alt="icon"></span>
                                            </div>
                                            <div class="proloop-detail">
                                                <h3 class="proloop-name"><a href="/products/pc-gvn-x-msi-project-zero-white" tabindex="-1">PC GVN x MSI PROJECT ZERO WHITE (Intel i5-14400F/ VGA RTX 4060)</a></h3>
                                                <div class="proloop-price">
                                                    <div class="proloop-price--default"><span class="proloop-price--highlight">26.990.000₫</span></div>
                                                </div>
                                                <div class="proloop-progress ">
                                                    <div class="progress-bar">
                                                        <div class="progress-percent progress-new 1">
                                                            <span class="icon icon-sold"><svg width="16" height="18" viewBox="0 0 16 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <path d="M5.39943 16.7753C5.49749 16.9703 5.45778 17.2063 5.30133 17.3585C5.14488 17.5106 4.90783 17.5437 4.71569 17.4402C2.9692 16.4998 1.79465 15.5487 1.13674 14.471C0.464139 13.3693 0.367829 12.1968 0.646145 10.9097L5.39943 16.7753ZM5.39943 16.7753C4.89503 15.7725 4.80178 15.0358 4.89423 14.4437C4.9882 13.8418 5.28316 13.3232 5.68383 12.7637C5.95783 12.381 6.17408 12.0003 6.34344 11.6508M5.39943 16.7753L6.34344 11.6508M6.34344 11.6508C6.36183 12.0334 6.34356 12.5009 6.25635 13.0603C6.22258 13.2769 6.33385 13.4902 6.53082 13.5865C6.72778 13.6828 6.96448 13.6395 7.11466 13.4798C7.84055 12.7078 8.26236 11.4993 8.48497 10.4409C8.59303 9.92713 8.65856 9.4274 8.68677 8.99492C10.7405 10.9421 11.4809 14.2642 10.1376 16.7633C10.033 16.9578 10.0685 17.198 10.2249 17.354C10.3813 17.51 10.6215 17.5449 10.8158 17.4398C13.0649 16.224 14.3789 14.8255 15.0184 13.3585C15.6589 11.8891 15.5946 10.4152 15.2091 9.10503C14.8254 7.80075 14.1196 6.64183 13.4459 5.76431C12.7776 4.89379 12.1105 4.2611 11.7684 4.02276C11.5821 3.89299 11.3318 3.90499 11.1588 4.05198C10.9858 4.19897 10.9336 4.44405 11.0315 4.64883C11.0637 4.716 11.091 4.7897 11.1134 4.86902C10.598 3.85925 9.86676 3.00784 9.17368 2.34659C8.58021 1.78037 7.99763 1.33723 7.56357 1.0355C7.34615 0.884368 7.16497 0.768007 7.03694 0.688754C6.97291 0.649112 6.92209 0.618704 6.88661 0.597826L6.84511 0.573674L6.83346 0.567017L6.82999 0.565054L6.82886 0.564415L6.82844 0.564181C6.82828 0.564089 6.82813 0.564005 6.58337 1L6.82813 0.564005C6.67509 0.47809 6.48821 0.478706 6.33574 0.565628C6.18327 0.652549 6.08753 0.813049 6.0835 0.988509C6.02938 3.34264 5.24321 5.60204 4.01193 7.39365C3.87056 6.87285 3.64761 6.38093 3.3177 5.80732C3.20794 5.61647 2.98625 5.51988 2.77174 5.56943C2.55722 5.61898 2.40036 5.80302 2.38543 6.02268C2.33255 6.80012 2.0296 7.52338 1.65494 8.32242C1.6136 8.41059 1.57127 8.49988 1.52841 8.59028C1.19449 9.2946 0.828337 10.0669 0.646149 10.9096L6.34344 11.6508Z" fill="#FDD835" stroke="#E30019" stroke-linejoin="round"></path>
                                                                </svg>
                                                            </span>
                                                            <span class="text text-sold normal">Đã bán: 1</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><button type="button" class="slick-next slick-arrow"><svg width="8" height="17" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
                                    <polygon points="6.379,20.908 7.546,22.075 17.621,12 7.546,1.925 6.379,3.092 15.287,12 "></polygon>
                                </svg></button>
                            <ul class="slick-dots" role="tablist">
                                <li class="slick-active" role="presentation"><button type="button" role="tab" id="slick-slide-control40" aria-controls="slick-slide40" aria-label="1 of 2" tabindex="0" aria-selected="true">1</button></li>
                                <li role="presentation" class=""><button type="button" role="tab" id="slick-slide-control41" aria-controls="slick-slide44" aria-label="2 of 2" tabindex="-1">2</button></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="box-product-category boder-radius-10" data-id="407">
    <div class="d-flex align-items-center justify-content-between">
        <div class="title">
            <h2 class="title-box font-weight-600">LAPTOP - PHỤ KIỆN</h2>
        </div>
        <div class="list-category-child d-flex align-items-center justify-content-end flex-1">
            <a href="/laptop-gaming" class="title-category">LAPTOP GAMING</a>
            <a href="/chon-theo-nhu-cau" class="title-category">CHỌN THEO NHU CẦU</a>
            <a href="/chon-theo-khoang-gia" class="title-category">CHỌN THEO KHOẢNG GIÁ</a>
            <a href="/chon-theo-cpu" class="title-category">CHỌN THEO CPU</a>
            <a href="/laptop" class="title-all-category">Xem tất cả <i class="fa-solid fa-caret-right"></i></a>
        </div>
    </div>
    <div class="swiper box-list-item-category swiper-product-category swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
        <div class="swiper-wrapper" id="js-product-407" aria-live="off" style="transition-duration: 0ms; transform: translate3d(-947.2px, 0px, 0px);">
            <div class="swiper-slide" style="width: 224.8px; margin-right: 12px;" role="group" aria-label="NaN / 10">
                <div class="product-item">
                    <a href="/laptop-gaming-gigabyte-g5-mf-f2ph333sh-i5-12450h-8gb-ram-512gb-ssd-156-fhd-ips-144hz-rtx-4050-6gb-win-11h-black-2yrs" class="product-image position-relative">
                        <img src="/media/product/250-25631-gaming-gigabyte-g5-mf-f2ph333sh.jpg" width="203" height="203" alt="Laptop Gaming Gigabyte G5 MF F2PH333SH (i5-12450H/ 8GB RAM/ 512GB SSD/ 15.6&quot; FHD IPS 144Hz/ RTX 4050 6GB/ Win 11H/ Black/ 2Yrs)">
                        <i class="sprite sprite-icon-hot-deal icon-hot-deal" style="display:none;"></i>
                        <span class="p-type-holder">
                            <i class="p-icon-type p-icon-hot"></i>
                        </span>
                        <span class="p-type-holder p-type-holder-2">
                            <i class="p-icon-type p-icon-best-sale"></i>
                        </span>
                    </a>
                    <div class="product-info">
                        <a href="/laptop-gaming-gigabyte-g5-mf-f2ph333sh-i5-12450h-8gb-ram-512gb-ssd-156-fhd-ips-144hz-rtx-4050-6gb-win-11h-black-2yrs">
                            <h3 class="product-title line-clamp-3">Laptop Gaming Gigabyte G5 MF F2PH333SH (i5-12450H/ 8GB RAM/ 512GB SSD/ 15.6" FHD IPS 144Hz/ RTX 4050 6GB/ Win 11H/ Black/ 2Yrs)</h3>
                        </a>
                        <div class="product-martket-main d-flex align-items-center">
                            <p class="product-market-price">
                                24.000.000<u>đ</u>
                            </p>
                            <div class="product-percent-price">-19%</div>
                        </div>
                        <div class="product-price-main font-weight-600">
                            19.490.000đ

                        </div>
                        <div class="product-offer line-clamp-2">
                            <p>+ Tặng Túi/Balo laptop NC trị giá: 390.000đ</p>
                            <p>+ Tặng Chuột không dây trị giá: 150.000đ<br>+ Tặng Bàn di chuột trị giá: 50.000đ<br>+ Tặng Bộ vệ sinh Laptop trị giá: 40.000đ<br>+ Vệ sinh bảo dưỡng Laptop miễn phí trọn đời trị giá: 1 triệu đồng<br>+ Giảm 10% khi mua thêm RAM, HDD laptop<br>+ Giảm 5% khi mua kèm Gear, Đế tản nhiệt Laptop</p>
                        </div>
                    </div>
                    <!-- TOOLTIP -->
                    <div class="tooltip p-tooltip tippy-box">
                        <div class="tooltip-name">
                            Laptop Gaming Gigabyte G5 MF F2PH333SH (i5-12450H/ 8GB RAM/ 512GB SSD/ 15.6" FHD IPS 144Hz/ RTX 4050 6GB/ Win 11H/ Black/ 2Yrs)
                        </div>
                        <div class="tooltip-descreption">
                            <div class="tooltip-descreption-price">
                                <p>Giá niêm yết</p>
                                <p>Giá bán</p>
                                <p>Bảo hành</p>
                                <p>Tình trạng</p>
                            </div>
                            <div class="tooltip-descreption-info">
                                <div>
                                    <div class="d-flex align-items-center">
                                        <p class="card-price-origin color-black" style="position: relative;">24.000.000₫
                                            <span class="card-price-origin-line-through"></span>
                                        </p>
                                        <span class="color-red" style="margin-left: 4px;">-19%</span>
                                    </div>
                                </div>
                                <p>
                                    19.490.000đ
                                </p>
                                <p>
                                    <span class="color-red line-clamp">24 Tháng</span>
                                </p>
                                <p class="color-secondary">
                                    Còn hàng
                                </p>
                            </div>
                        </div>
                        <div class="tooltip-input">
                            <i class="fa-solid fa-database icon-database"></i>
                            <span>Thông số sản phẩm</span>
                        </div>
                        <div class="tooltip-list">
                            <ul>
                                CPU: Intel Core i5-12450H 3.3GHz up to 4.4GHz, 8 Cores 12 Threads, 12MB Cache
                                VGA: Nvidia Geforce RTX 4050 6GB GDDR6
                                Ram: 8GB (1x8GB) DDR4-3200Mhz
                                SSD: 512GB SSD M.2 PCIE G4X4
                                Màn hình: 15.6 inch IPS 144Hz FHD
                            </ul>
                        </div>
                        <div class="box-tooltip-gift">
                            <div class="tooltip-input tooltip-gift">
                                <p class="icon-gift">
                                    <i class="fa-solid fa-gift"></i>
                                    Khuyến mãi
                                </p>
                            </div>
                            <div class="tooltip-list tooltip-list-gift">
                                <ul>
                                    <div class="item">
                                        <p>+ Tặng Túi/Balo laptop NC trị giá: 390.000đ</p>
                                    </div>
                                    <div class="item">
                                        <p>+ Tặng Chuột không dây trị giá: 150.000đ<br>+ Tặng Bàn di chuột trị giá: 50.000đ<br>+ Tặng Bộ vệ sinh Laptop trị giá: 40.000đ<br>+ Vệ sinh bảo dưỡng Laptop miễn phí trọn đời trị giá: 1 triệu đồng<br>+ Giảm 10% khi mua thêm RAM, HDD laptop<br>+ Giảm 5% khi mua kèm Gear, Đế tản nhiệt Laptop</p>
                                    </div>
                                </ul>
                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="js-product-407"></div>
        <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="js-product-407"></div>
        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
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
