@extends('layouts.page')

@section('title')
<title>{{ __('Trang chủ') }} | Kattech PC</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('/plugins/owlcarousel/owl.theme.default.min.css') }}" />
@endsection

@section('content')

@include('includes.tooltips')

<section class="slider-banner">
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
        </div>
    </div>
    <div class="news-main-under">
        <div class="news-main-right-1">
            <img src="{{ asset('/images/test_img/right-1.webp') }}" width="350">
        </div>
        <div class="news-main-right-2" style="margin-left: 10px;">
            <img src="{{ asset('/images/test_img/right-2.webp') }}" width="350">
        </div>
        <div class="news-main-right-2" style="margin-left: 10px;">
            <img src="{{ asset('/images/test_img/right-1.webp') }}" width="350">
        </div>
        <div class="news-main-right-2" style="margin-left: 10px;">
            <img src="{{ asset('/images/test_img/right-2.webp') }}" width="350">
        </div>
    </div>
</section>

<section class="flash-sale-banner">
    <div class="flash-sale-area">
        <div class="d-flex align-items-center justify-content-between">
            <div class="flash-sale-title-area d-flex align-items-center justify-content-center">
                <i class="fa fa-bolt"></i>
                <h2 class="flash-sale-title">Flash sale</h2>
                <span class="text-time-deal-home">Kết thúc sau</span>
                <div class="global-time-dea d-flex align-items-center">
                    <p>01</p>
                    <span>:</span>
                    <p>10</p>
                    <span>:</span>
                    <p>10</p>
                    <span>:</span>
                    <p>03</p>
                </div>
            </div>
        </div>

        <div class="swiper box-list-item-deal swiper-box-deal swiper-initialized swiper-horizontal swiper-pointer-events">
            <div class="swiper-wrapper loaded" style="display: flex;">
                <div class="swiper-slide" role="group">
                    <div class="product-item">
                        <a href="/laptop-gaming-msi-thin-gf63-i5-12450h-8g-rtx-2050-1tb-ssd-156-144hz-fhd-nk-bh-tai-nc" class="product-image position-relative">
                            <img data-src="/media/product/250-25869-gaming-msi-thin-gf63.jpg" width="164" height="164" alt="Laptop Gaming MSI Thin GF63 (i5-12450H | 8G | RTX 2050 | 1TB SSD | 15.6&quot; 144Hz FHD ) NK BH tại NC " class="lazy entered loaded" src="{{ asset('images/test_img/black-sale.jpg') }}">
                        </a>
                        <div class="product-info">
                            <a href="/laptop-gaming-msi-thin-gf63-i5-12450h-8g-rtx-2050-1tb-ssd-156-144hz-fhd-nk-bh-tai-nc">
                                <h3 class="product-title line-clamp-3">Laptop Gaming MSI Thin GF63 (i5-12450H | 8G | RTX 2050 | 1TB SSD | 15.6" 144Hz FHD ) NK BH tại NC </h3>
                            </a>

                            <div class="product-martket-main d-flex align-items-center">
                                <p class="product-market-price">18.990.000 ₫</p>
                                <div class="product-percent-price">-22%</div>
                            </div>

                            <div class="product-price-main font-weight-600">
                                14.800.000đ
                            </div>
                            <div class="p-quantity-sale" data-quantity-left="5" data-quantity-sale-total="7">
                                <i class="sprite sprite-fire-deal"></i>
                                <div class="bg-gradient"></div>
                                <p class="js-line-deal-left" style="width: 28.5714%;"></p>
                                <span>Còn 5/ 7 sản phẩm</span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- fake data -->
                <div class="swiper-slide" role="group">
                    <div class="product-item">
                        <a href="/laptop-gaming-msi-thin-gf63-i5-12450h-8g-rtx-2050-1tb-ssd-156-144hz-fhd-nk-bh-tai-nc" class="product-image position-relative">
                            <img src="{{ asset('/images/test_flash_sale/250-26232-b----pc-gaming.jpg') }}" width="164" height="164" alt="Laptop Gaming MSI Thin GF63 (i5-12450H | 8G | RTX 2050 | 1TB SSD | 15.6&quot; 144Hz FHD ) NK BH tại NC " class="lazy entered loaded">
                        </a>
                        <div class="product-info">
                            <a href="/laptop-gaming-msi-thin-gf63-i5-12450h-8g-rtx-2050-1tb-ssd-156-144hz-fhd-nk-bh-tai-nc">
                                <h3 class="product-title line-clamp-3">Bộ PC GAMING 2024 : CORE I5 12400F/ RAM 8G RGB/ VGA 4G </h3>
                            </a>

                            <div class="product-martket-main d-flex align-items-center">
                                <p class="product-market-price">18.990.000 ₫</p>
                                <div class="product-percent-price">-22%</div>
                            </div>

                            <div class="product-price-main font-weight-600">
                                14.800.000đ
                            </div>
                            <div class="p-quantity-sale" data-quantity-left="5" data-quantity-sale-total="7">
                                <i class="sprite sprite-fire-deal"></i>
                                <div class="bg-gradient"></div>
                                <p class="js-line-deal-left" style="width: 28.5714%;"></p>
                                <span>Còn 5/ 7 sản phẩm</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" role="group">
                    <div class="product-item">
                        <a href="/laptop-gaming-msi-thin-gf63-i5-12450h-8g-rtx-2050-1tb-ssd-156-144hz-fhd-nk-bh-tai-nc" class="product-image position-relative">
                            <img src="{{ asset('/images/test_flash_sale/250-25562-e-dra-yummy-egc232-black.jpg') }}" width="164" height="164" alt="Laptop Gaming MSI Thin GF63 (i5-12450H | 8G | RTX 2050 | 1TB SSD | 15.6&quot; 144Hz FHD ) NK BH tại NC " class="lazy entered loaded">
                        </a>
                        <div class="product-info">
                            <a href="/laptop-gaming-msi-thin-gf63-i5-12450h-8g-rtx-2050-1tb-ssd-156-144hz-fhd-nk-bh-tai-nc">
                                <h3 class="product-title line-clamp-3">Ghế gaming E-Dra Yummy EGC232 Black </h3>
                            </a>

                            <div class="product-martket-main d-flex align-items-center">
                                <p class="product-market-price">18.990.000 ₫</p>
                                <div class="product-percent-price">-22%</div>
                            </div>

                            <div class="product-price-main font-weight-600">
                                14.800.000đ
                            </div>
                            <div class="p-quantity-sale" data-quantity-left="5" data-quantity-sale-total="7">
                                <i class="sprite sprite-fire-deal"></i>
                                <div class="bg-gradient"></div>
                                <p class="js-line-deal-left" style="width: 28.5714%;"></p>
                                <span>Còn 5/ 7 sản phẩm</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" role="group">
                    <div class="product-item">
                        <a href="/laptop-gaming-msi-thin-gf63-i5-12450h-8g-rtx-2050-1tb-ssd-156-144hz-fhd-nk-bh-tai-nc" class="product-image position-relative">
                            <img src="{{ asset('/images/test_flash_sale/250-25972-kv-2419h.jpg') }}" width="164" height="164" alt="Laptop Gaming MSI Thin GF63 (i5-12450H | 8G | RTX 2050 | 1TB SSD | 15.6&quot; 144Hz FHD ) NK BH tại NC " class="lazy entered loaded">
                        </a>
                        <div class="product-info">
                            <a href="/laptop-gaming-msi-thin-gf63-i5-12450h-8g-rtx-2050-1tb-ssd-156-144hz-fhd-nk-bh-tai-nc">
                                <h3 class="product-title line-clamp-3">Màn hình Kingview KV-2419H (24 Inch/ IPS/ Màu Đen/ 75Hz) </h3>
                            </a>

                            <div class="product-martket-main d-flex align-items-center">
                                <p class="product-market-price">18.990.000 ₫</p>
                                <div class="product-percent-price">-22%</div>
                            </div>

                            <div class="product-price-main font-weight-600">
                                14.800.000đ
                            </div>
                            <div class="p-quantity-sale" data-quantity-left="5" data-quantity-sale-total="7">
                                <i class="sprite sprite-fire-deal"></i>
                                <div class="bg-gradient"></div>
                                <p class="js-line-deal-left" style="width: 28.5714%;"></p>
                                <span>Còn 5/ 7 sản phẩm</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" role="group">
                    <div class="product-item">
                        <a href="/laptop-gaming-msi-thin-gf63-i5-12450h-8g-rtx-2050-1tb-ssd-156-144hz-fhd-nk-bh-tai-nc" class="product-image position-relative">
                            <img src="{{ asset('/images/test_flash_sale/250-25617-tai-nghe-dareu-eh469-7-1-rgb-black.jpg') }}" width="164" height="164" alt="Laptop Gaming MSI Thin GF63 (i5-12450H | 8G | RTX 2050 | 1TB SSD | 15.6&quot; 144Hz FHD ) NK BH tại NC " class="lazy entered loaded">
                        </a>
                        <div class="product-info">
                            <a href="/laptop-gaming-msi-thin-gf63-i5-12450h-8g-rtx-2050-1tb-ssd-156-144hz-fhd-nk-bh-tai-nc">
                                <h3 class="product-title line-clamp-3">Tai nghe DARE-U EH469 RGB Black </h3>
                            </a>

                            <div class="product-martket-main d-flex align-items-center">
                                <p class="product-market-price">18.990.000 ₫</p>
                                <div class="product-percent-price">-22%</div>
                            </div>

                            <div class="product-price-main font-weight-600">
                                14.800.000đ
                            </div>
                            <div class="p-quantity-sale" data-quantity-left="5" data-quantity-sale-total="7">
                                <i class="sprite sprite-fire-deal"></i>
                                <div class="bg-gradient"></div>
                                <p class="js-line-deal-left" style="width: 28.5714%;"></p>
                                <span>Còn 5/ 7 sản phẩm</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" role="group">
                    <div class="product-item">
                        <a href="/laptop-gaming-msi-thin-gf63-i5-12450h-8g-rtx-2050-1tb-ssd-156-144hz-fhd-nk-bh-tai-nc" class="product-image position-relative">
                            <img src="{{ asset('/images/test_flash_sale/250-25750-motospeed-v400.jpg') }}" width="164" height="164" alt="Laptop Gaming MSI Thin GF63 (i5-12450H | 8G | RTX 2050 | 1TB SSD | 15.6&quot; 144Hz FHD ) NK BH tại NC " class="lazy entered loaded">
                        </a>
                        <div class="product-info">
                            <a href="/laptop-gaming-msi-thin-gf63-i5-12450h-8g-rtx-2050-1tb-ssd-156-144hz-fhd-nk-bh-tai-nc">
                                <h3 class="product-title line-clamp-3">Chuột Motospeed V400 RGB Backlight</h3>
                            </a>

                            <div class="product-martket-main d-flex align-items-center">
                                <p class="product-market-price">18.990.000 ₫</p>
                                <div class="product-percent-price">-22%</div>
                            </div>

                            <div class="product-price-main font-weight-600">
                                14.800.000đ
                            </div>
                            <div class="p-quantity-sale" data-quantity-left="5" data-quantity-sale-total="7">
                                <i class="sprite sprite-fire-deal"></i>
                                <div class="bg-gradient"></div>
                                <p class="js-line-deal-left" style="width: 28.5714%;"></p>
                                <span>Còn 5/ 7 sản phẩm</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide" role="group">
                    <div class="product-item">
                        <a href="/laptop-gaming-msi-thin-gf63-i5-12450h-8g-rtx-2050-1tb-ssd-156-144hz-fhd-nk-bh-tai-nc" class="product-image position-relative">
                            <img src="{{ asset('/images/test_flash_sale/250-26134-47192_e_dra_ek375_beta__2.png') }}" width="164" height="164" alt="Laptop Gaming MSI Thin GF63 (i5-12450H | 8G | RTX 2050 | 1TB SSD | 15.6&quot; 144Hz FHD ) NK BH tại NC " class="lazy entered loaded">
                        </a>
                        <div class="product-info">
                            <a href="/laptop-gaming-msi-thin-gf63-i5-12450h-8g-rtx-2050-1tb-ssd-156-144hz-fhd-nk-bh-tai-nc">
                                <h3 class="product-title line-clamp-3">Chuột Motospeed V400 RGB Backlight</h3>
                            </a>

                            <div class="product-martket-main d-flex align-items-center">
                                <p class="product-market-price">18.990.000 ₫</p>
                                <div class="product-percent-price">-22%</div>
                            </div>

                            <div class="product-price-main font-weight-600">
                                14.800.000đ
                            </div>
                            <div class="p-quantity-sale" data-quantity-left="5" data-quantity-sale-total="7">
                                <i class="sprite sprite-fire-deal"></i>
                                <div class="bg-gradient"></div>
                                <p class="js-line-deal-left" style="width: 70%;"></p>
                                <span>Còn 5/ 7 sản phẩm</span>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end fake data -->
            </div>
            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="js-deal-box"></div>
            <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="js-deal-box"></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </div>
</section>

<section class="product-slide">
    <div class="product-slide-main boder-radius-10">
        <div class="d-flex align-items-center justify-content-between">
            <div class="title">
                <h2 class="title-box font-weight-600">LAPTOP - PHỤ KIỆN</h2>
                <i class="fa fa-truck"></i>
                <p>Miễn phí giao hàng</p>
            </div>
            <div class="list-category-child d-flex align-items-center justify-content-end flex-1">
                <a href="/edit-render-video-4k-8k" class="title-category">Laptop - Editor</a>
                <a href="/edit-render-video-4k-8k" class="title-category">Laptop - Gaming</a>
                <a href="/edit-render-video-4k-8k" class="title-category">Laptop - Phổ thông</a>
                <a href="/edit-render-video-4k-8k" class="title-category">Laptop - Asus</a>
                <a href="/laptop" class="title-all-category">Xem tất cả <i class="fa fa-caret-right"></i></a>
            </div>
        </div>
        <div class="swiper box-list-item-category swiper-product-category swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
            <div class="swiper-wrapper">
                @foreach($listLaptop as $product)
                <div class="swiper-slide " style="width: 224.8px; margin-right: 12px;" role="group">
                    <div class="product-item">
                        <a href="{{ route('productDetail', $product['name']) }}" class="product-image position-relative">
                            <img src="{{ $product->image }}" width="203" height="203" class="hover-for-tooltips">
                            <span class="p-type-holder">
                                <i class="p-icon-type p-icon-hot"></i>
                            </span>
                            <span class="p-type-holder p-type-holder-2">
                                <i class="p-icon-type p-icon-best-sale"></i>
                            </span>
                        </a>
                        <div class="product-info">
                            <a href="{{ route('productDetail', $product['name']) }}">
                                <h3 class="product-title line-clamp-3">{{ $product->name }}</h3>
                            </a>
                            <div class="product-price-main font-weight-600">
                                {{ $product->price }} đ
                            </div>
                            <div class="product-offer line-clamp-2">
                                <p>+ Tặng Túi/Balo laptop NC trị giá: 390.000đ</p>
                                <p>+ Tặng Chuột không dây trị giá: 150.000đ<br>+ Tặng Bàn di chuột trị giá: 50.000đ<br>+ Tặng Bộ vệ sinh Laptop trị giá: 40.000đ<br>+ Vệ sinh bảo dưỡng Laptop miễn phí trọn đời trị giá: 1 triệu đồng<br>+ Giảm 10% khi mua thêm RAM, HDD laptop<br>+ Giảm 5% khi mua kèm Gear, Đế tản nhiệt Laptop</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"></div>
            <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </div>
</section>

<section class="product-slide">
    <div class="product-slide-main boder-radius-10">
        <div class="d-flex align-items-center justify-content-between">
            <div class="title">
                <h2 class="title-box font-weight-600">Bàn phím</h2>
                <i class="fa fa-truck"></i>
                <p>Miễn phí giao hàng</p>
            </div>
            <div class="list-category-child d-flex align-items-center justify-content-end flex-1">
                <a href="/edit-render-video-4k-8k" class="title-category">Bàn phím cơ</a>
                <a href="/edit-render-video-4k-8k" class="title-category">Bàn phím thường</a>
                <a href="/edit-render-video-4k-8k" class="title-category">Bàn phím giả cơ</a>
                <a href="/laptop" class="title-all-category">Xem tất cả <i class="fa fa-caret-right"></i></a>
            </div>
        </div>
        <div class="swiper box-list-item-category swiper-product-category swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
            <div class="swiper-wrapper">
                @foreach($listKeyboard as $product)
                <div class="swiper-slide " style="width: 224.8px; margin-right: 12px;" role="group">
                    <div class="product-item">
                        <a href="{{ route('productDetail', $product['name']) }}" class="product-image position-relative">
                            <img src="{{ $product->image }}" width="203" height="203" alt=>
                            <i class="sprite sprite-icon-hot-deal icon-hot-deal" style="display:none;"></i>
                            <span class="p-type-holder">
                                <i class="p-icon-type p-icon-hot"></i>
                            </span>
                            <span class="p-type-holder p-type-holder-2">
                                <i class="p-icon-type p-icon-best-sale"></i>
                            </span>
                        </a>
                        <div class="product-info">
                            <a href="{{ route('productDetail', $product['name']) }}">
                                <h3 class="product-title line-clamp-3">{{ $product->name }}</h3>
                            </a>
                            <div class="product-price-main font-weight-600">
                                {{ $product->price }} đ
                            </div>

                            <div class="product-offer line-clamp-2">
                                <p>• Tặng Fan Vitra Rainbow RGB LED 12CM 100K</p>
                                <p>• Tặng Màn Hình Philips 24M1N3200Z/74 (24 Inch/ FHD/ IPS/ 165Hz/ 1ms) Trị giá 3.450.000đ </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"></div>
            <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </div>
</section>

<section class="sale-body">
    <div class="d-flex">
        <div class="sale-body-left">
            <div class="banner-box fade-box" data-banner-page="Homepage" data-banner-loc="Bot_Promotion Banner_Big">
                <a class="aspect-ratio" href="/pages/man-hinh" aria-label="Màn hình khuyến mãi tháng 03" title="Màn hình khuyến mãi tháng 03" style="--height-img:504; --width-img:900;">
                    <picture>
                        <source media="(max-width: 991px)" data-srcset="https://file.hstatic.net/200000722513/file/1580x510_man_hinh_thang_03_435810e7223043ec866bd0ed8dc1cf09.png" srcset="https://file.hstatic.net/200000722513/file/1580x510_man_hinh_thang_03_435810e7223043ec866bd0ed8dc1cf09.png">
                        <source media="(min-width: 992px)" data-srcset="https://file.hstatic.net/200000722513/file/1580x510_man_hinh_thang_03_435810e7223043ec866bd0ed8dc1cf09.png" srcset="https://file.hstatic.net/200000722513/file/1580x510_man_hinh_thang_03_435810e7223043ec866bd0ed8dc1cf09.png">
                        <img style="width: 955px;" ata-sizes="auto" class=" ls-is-cached lazyloaded" data-src="https://file.hstatic.net/200000722513/file/1580x510_man_hinh_thang_03_435810e7223043ec866bd0ed8dc1cf09.png" src="https://file.hstatic.net/200000722513/file/1580x510_man_hinh_thang_03_435810e7223043ec866bd0ed8dc1cf09.png" alt="Màn hình khuyến mãi tháng 03">
                    </picture>
                </a>
            </div>
        </div>
        <div class="sale-body-right">
            <div class="banner-box fade-box" data-banner-page="Homepage" data-banner-loc="Bot_Promotion Banner_Small_2">
                <a class="aspect-ratio" href="/collections/tai-nghe-may-tinh" aria-label="Tai nghe" title="Tai nghe" style="--height-img:246; --width-img:796;">
                    <picture>
                        <source media="(max-width: 991px)" srcset="https://file.hstatic.net/200000722513/file/banner_790x250_tai_nghe_6f6dcb17d3a54fcc88b3de96762d2d41.jpg" data-srcset="https://file.hstatic.net/200000722513/file/banner_790x250_tai_nghe_6f6dcb17d3a54fcc88b3de96762d2d41.jpg" sizes="389px">
                        <source media="(min-width: 992px)" srcset="https://file.hstatic.net/200000722513/file/banner_790x250_tai_nghe_6f6dcb17d3a54fcc88b3de96762d2d41.jpg" data-srcset="https://file.hstatic.net/200000722513/file/banner_790x250_tai_nghe_6f6dcb17d3a54fcc88b3de96762d2d41.jpg" sizes="389px">
                        <img style="width: 480px;" data-sizes="auto" class="lazyautosizes ls-is-cached lazyloaded" src="https://file.hstatic.net/200000722513/file/banner_790x250_tai_nghe_6f6dcb17d3a54fcc88b3de96762d2d41.jpg" data-src="https://file.hstatic.net/200000722513/file/banner_790x250_tai_nghe_6f6dcb17d3a54fcc88b3de96762d2d41.jpg" alt="Tai nghe" sizes="389px">
                    </picture>
                </a>
            </div>
            <div class="banner-box fade-box" data-banner-page="Homepage" data-banner-loc="Bot_Promotion Banner_Small_3">
                <a class="aspect-ratio" href="/pages/pc-custom-nuoc" aria-label="Banner" title="Banner" style="--height-img:246; --width-img:796;">
                    <picture>
                        <source media="(max-width: 991px)" srcset="https://file.hstatic.net/200000722513/file/bot_promotion_banner_small_2_2ad55c2345c64fbfb87dab4957b33914.png" data-srcset="https://file.hstatic.net/200000722513/file/bot_promotion_banner_small_2_2ad55c2345c64fbfb87dab4957b33914.png" sizes="389px">
                        <source media="(min-width: 992px)" srcset="https://file.hstatic.net/200000722513/file/bot_promotion_banner_small_2_2ad55c2345c64fbfb87dab4957b33914.png" data-srcset="https://file.hstatic.net/200000722513/file/bot_promotion_banner_small_2_2ad55c2345c64fbfb87dab4957b33914.png" sizes="389px">
                        <img style="width: 480px;" data-sizes="auto" class="lazyautosizes ls-is-cached lazyloaded" src="https://file.hstatic.net/200000722513/file/bot_promotion_banner_small_2_2ad55c2345c64fbfb87dab4957b33914.png" data-src="https://file.hstatic.net/200000722513/file/bot_promotion_banner_small_2_2ad55c2345c64fbfb87dab4957b33914.png" alt="Banner" sizes="389px">
                    </picture>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="product-slide">
    <div class="product-slide-main boder-radius-10">
        <div class="d-flex align-items-center justify-content-between">
            <div class="title">
                <h2 class="title-box font-weight-600">Case</h2>
                <i class="fa fa-truck"></i>
                <p>Miễn phí giao hàng</p>
            </div>
            <div class="list-category-child d-flex align-items-center justify-content-end flex-1">
                <a href="/edit-render-video-4k-8k" class="title-category">Case full town</a>
                <a href="/edit-render-video-4k-8k" class="title-category">Case mid town</a>
                <a href="/edit-render-video-4k-8k" class="title-category">Case low town</a>
                <a href="/laptop" class="title-all-category">Xem tất cả <i class="fa fa-caret-right"></i></a>
            </div>
        </div>
        <div class="swiper box-list-item-category swiper-product-category swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
            <div class="swiper-wrapper">
                @foreach($listCase as $product)
                <div class="swiper-slide " style="width: 224.8px; margin-right: 12px;" role="group">
                    <div class="product-item">
                        <a href="{{ route('productDetail', $product['name']) }}" class="product-image position-relative">
                            <img src="{{ $product->image }}" width="203" height="203" alt=>
                            <i class="sprite sprite-icon-hot-deal icon-hot-deal" style="display:none;"></i>
                            <span class="p-type-holder">
                                <i class="p-icon-type p-icon-hot"></i>
                            </span>
                            <span class="p-type-holder p-type-holder-2">
                                <i class="p-icon-type p-icon-best-sale"></i>
                            </span>
                        </a>
                        <div class="product-info">
                            <a href="{{ route('productDetail', $product['name']) }}">
                                <h3 class="product-title line-clamp-3">{{ $product->name }}</h3>
                            </a>
                            <div class="proloop-technical">
                                <div class="proloop-technical--line" data-tag="vga"><svg viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.6875 8.37201H9.375V9.21545C9.375 9.29159 9.34408 9.35748 9.28223 9.41312C9.22038 9.46877 9.14714 9.49659 9.0625 9.49659C8.97786 9.49659 8.90462 9.46877 8.84277 9.41312C8.78092 9.35748 8.75 9.29159 8.75 9.21545V8.37201H8.125V9.21545C8.125 9.29159 8.09408 9.35748 8.03223 9.41312C7.97038 9.46877 7.89714 9.49659 7.8125 9.49659C7.72786 9.49659 7.65462 9.46877 7.59277 9.41312C7.53092 9.35748 7.5 9.29159 7.5 9.21545V8.37201H6.875V9.21545C6.875 9.29159 6.84408 9.35748 6.78223 9.41312C6.72038 9.46877 6.64714 9.49659 6.5625 9.49659C6.47786 9.49659 6.40462 9.46877 6.34277 9.41312C6.28092 9.35748 6.25 9.29159 6.25 9.21545V8.37201H5.625V9.21545C5.625 9.29159 5.59408 9.35748 5.53223 9.41312C5.47038 9.46877 5.39714 9.49659 5.3125 9.49659C5.22786 9.49659 5.15462 9.46877 5.09277 9.41312C5.03092 9.35748 5 9.29159 5 9.21545V8.37201H4.375V9.21545C4.375 9.29159 4.34408 9.35748 4.28223 9.41312C4.22038 9.46877 4.14714 9.49659 4.0625 9.49659C3.97786 9.49659 3.90462 9.46877 3.84277 9.41312C3.78092 9.35748 3.75 9.29159 3.75 9.21545V8.37201H3.125V9.21545C3.125 9.29159 3.09408 9.35748 3.03223 9.41312C2.97038 9.46877 2.89714 9.49659 2.8125 9.49659C2.72786 9.49659 2.65462 9.46877 2.59277 9.41312C2.53092 9.35748 2.5 9.29159 2.5 9.21545V8.37201H1.25L1.04492 1.70176H9.6875C9.77214 1.70176 9.84538 1.72958 9.90723 1.78523C9.96908 1.84087 10 1.90676 10 1.98291V8.09087C10 8.16701 9.96908 8.23291 9.90723 8.28855C9.84538 8.34419 9.77214 8.37201 9.6875 8.37201ZM9.375 3.31143C9.375 3.15915 9.31478 3.02736 9.19434 2.91608C9.07389 2.80479 8.92578 2.74915 8.75 2.74915H4.375C4.20573 2.74915 4.05924 2.80479 3.93555 2.91608C3.81185 3.02736 3.75 3.15915 3.75 3.31143V6.68515C3.75 6.8433 3.81185 6.97655 3.93555 7.08491C4.05924 7.19326 4.20573 7.24744 4.375 7.24744H8.75C8.92578 7.24744 9.07389 7.19326 9.19434 7.08491C9.31478 6.97655 9.375 6.8433 9.375 6.68515V3.31143ZM8.4375 6.68515H4.6875C4.60286 6.68515 4.52962 6.65733 4.46777 6.60169C4.40592 6.54605 4.375 6.48015 4.375 6.40401V3.59258C4.375 3.51644 4.40592 3.45054 4.46777 3.3949C4.52962 3.33926 4.60286 3.31143 4.6875 3.31143H8.4375C8.52214 3.31143 8.59538 3.33926 8.65723 3.3949C8.71908 3.45054 8.75 3.51644 8.75 3.59258V6.40401C8.75 6.48015 8.71908 6.54605 8.65723 6.60169C8.59538 6.65733 8.52214 6.68515 8.4375 6.68515ZM6.875 3.87372C6.52995 3.87372 6.23535 3.98354 5.99121 4.20319C5.74707 4.42283 5.625 4.68787 5.625 4.99829C5.625 5.30872 5.74707 5.57376 5.99121 5.7934C6.23535 6.01305 6.52995 6.12287 6.875 6.12287C7.22005 6.12287 7.51465 6.01305 7.75879 5.7934C8.00293 5.57376 8.125 5.30872 8.125 4.99829C8.125 4.68787 8.00293 4.42283 7.75879 4.20319C7.51465 3.98354 7.22005 3.87372 6.875 3.87372ZM6.87988 5.56058C6.70736 5.56058 6.55924 5.5064 6.43555 5.39805C6.31185 5.28969 6.25 5.1579 6.25 5.00269C6.25 4.84747 6.31185 4.71422 6.43555 4.60294C6.55924 4.49165 6.70736 4.43601 6.87988 4.43601C7.05241 4.43601 7.19889 4.49019 7.31934 4.59854C7.43978 4.7069 7.5 4.84015 7.5 4.99829C7.5 5.15644 7.43978 5.28969 7.31934 5.39805C7.19889 5.5064 7.05241 5.56058 6.87988 5.56058ZM1.65527 7.52356V9.21545C1.65527 9.29159 1.62435 9.35748 1.5625 9.41312C1.43723 9.52582 1.02214 9.49659 0.9375 9.49659C0.852865 9.49659 0.779622 9.46877 0.717773 9.41312C0.655924 9.35748 0.625 9.29159 0.625 9.21545V1.14261H0.3125C0.227865 1.14261 0.154622 1.11479 0.0927734 1.05915C0.0309245 1.00351 0 0.89745 0 0.821307C0 0.668184 0.0309245 0.639108 0.0927734 0.583465C0.154622 0.527822 0.227865 0.5 0.3125 0.5H0.9375C0.963542 0.5 0.983073 0.502929 0.996094 0.508786C1.25 0.5 1.25 0.5 1.5625 0.5C1.875 0.5 1.875 0.751021 1.875 0.821307L1.65527 7.52356Z" fill="#6D6E72"></path>
                                    </svg><span>RTX 4080</span></div>
                                <div class="proloop-technical--line" data-tag="main"><svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M5.33333 9.06248C5.51743 9.06248 5.66667 8.91324 5.66667 8.72915C5.66667 8.54505 5.51743 8.39581 5.33333 8.39581C5.14924 8.39581 5 8.54505 5 8.72915C5 8.91324 5.14924 9.06248 5.33333 9.06248Z" fill="#6D6E72"></path>
                                        <path d="M4.66675 1.0625H5.00008V1.39583H4.66675V1.0625Z" fill="#6D6E72"></path>
                                        <path d="M3.33325 1.0625H3.66659V1.39583H3.33325V1.0625Z" fill="#6D6E72"></path>
                                        <path d="M4 3.0625H5.66667V4.72917H4V3.0625Z" fill="#6D6E72"></path>
                                        <path d="M6.33325 2.39581H3.33325V5.39581H6.33325V2.39581ZM5.99992 4.89581C5.99992 4.94002 5.98236 4.98241 5.9511 5.01366C5.91985 5.04492 5.87745 5.06248 5.83325 5.06248H3.83325C3.78905 5.06248 3.74666 5.04492 3.7154 5.01366C3.68414 4.98241 3.66659 4.94002 3.66659 4.89581V2.89581C3.66659 2.85161 3.68414 2.80922 3.7154 2.77796C3.74666 2.74671 3.78905 2.72915 3.83325 2.72915H5.83325C5.87745 2.72915 5.91985 2.74671 5.9511 2.77796C5.98236 2.80922 5.99992 2.85161 5.99992 2.89581V4.89581Z" fill="#6D6E72"></path>
                                        <path d="M6 1.0625H6.33333V1.39583H6V1.0625Z" fill="#6D6E72"></path>
                                        <path d="M7.33325 4.22919H7.66659V5.72919H7.33325V4.22919Z" fill="#6D6E72"></path>
                                        <path d="M4.33325 7.0625H8.66659V7.39583H4.33325V7.0625Z" fill="#6D6E72"></path>
                                        <path d="M3.33325 7.0625H3.99992V7.39583H3.33325V7.0625Z" fill="#6D6E72"></path>
                                        <path d="M8.66675 4.22919H9.00008V5.72919H8.66675V4.22919Z" fill="#6D6E72"></path>
                                        <path d="M7.33325 1.39581H7.66659V3.89581H7.33325V1.39581Z" fill="#6D6E72"></path>
                                        <path d="M8.66675 1.39581H9.00008V3.89581H8.66675V1.39581Z" fill="#6D6E72"></path>
                                        <path d="M9.83333 0.0625H0.666667C0.622464 0.0625 0.580072 0.0800595 0.548816 0.111316C0.51756 0.142572 0.5 0.184964 0.5 0.229167V2.0625H0V2.39583H0.5V2.72917H0.166667C0.122464 2.72917 0.0800716 2.74673 0.0488155 2.77798C0.0175595 2.80924 0 2.85163 0 2.89583V4.22917C0 4.27337 0.0175595 4.31576 0.0488155 4.34702C0.0800716 4.37827 0.122464 4.39583 0.166667 4.39583H0.5V4.72917H0V5.0625H0.5V9.89583C0.5 9.94004 0.51756 9.98243 0.548816 10.0137C0.580072 10.0449 0.622464 10.0625 0.666667 10.0625H9.83333C9.87754 10.0625 9.91993 10.0449 9.95118 10.0137C9.98244 9.98243 10 9.94004 10 9.89583V0.229167C10 0.184964 9.98244 0.142572 9.95118 0.111316C9.91993 0.0800595 9.87754 0.0625 9.83333 0.0625ZM7 1.22917C7 1.18496 7.01756 1.14257 7.04882 1.11132C7.08007 1.08006 7.12246 1.0625 7.16667 1.0625H7.33333V0.729167H7.66667V1.0625H7.83333C7.87754 1.0625 7.91993 1.08006 7.95118 1.11132C7.98244 1.14257 8 1.18496 8 1.22917V5.89583C8 5.94004 7.98244 5.98243 7.95118 6.01368C7.91993 6.04494 7.87754 6.0625 7.83333 6.0625H7.66667V6.39583H7.33333V6.0625H7.16667C7.12246 6.0625 7.08007 6.04494 7.04882 6.01368C7.01756 5.98243 7 5.94004 7 5.89583V1.22917ZM5.66667 0.895833C5.66667 0.851631 5.68423 0.809238 5.71548 0.777982C5.74674 0.746726 5.78913 0.729167 5.83333 0.729167H6.5C6.5442 0.729167 6.5866 0.746726 6.61785 0.777982C6.64911 0.809238 6.66667 0.851631 6.66667 0.895833V1.5625C6.66667 1.6067 6.64911 1.6491 6.61785 1.68035C6.5866 1.71161 6.5442 1.72917 6.5 1.72917H5.83333C5.78913 1.72917 5.74674 1.71161 5.71548 1.68035C5.68423 1.6491 5.66667 1.6067 5.66667 1.5625V0.895833ZM4.33333 0.895833C4.33333 0.851631 4.35089 0.809238 4.38215 0.777982C4.4134 0.746726 4.4558 0.729167 4.5 0.729167H5.16667C5.21087 0.729167 5.25326 0.746726 5.28452 0.777982C5.31577 0.809238 5.33333 0.851631 5.33333 0.895833V1.5625C5.33333 1.6067 5.31577 1.6491 5.28452 1.68035C5.25326 1.71161 5.21087 1.72917 5.16667 1.72917H4.5C4.4558 1.72917 4.4134 1.71161 4.38215 1.68035C4.35089 1.6491 4.33333 1.6067 4.33333 1.5625V0.895833ZM3 0.895833C3 0.851631 3.01756 0.809238 3.04882 0.777982C3.08007 0.746726 3.12246 0.729167 3.16667 0.729167H3.83333C3.87754 0.729167 3.91993 0.746726 3.95118 0.777982C3.98244 0.809238 4 0.851631 4 0.895833V1.5625C4 1.6067 3.98244 1.6491 3.95118 1.68035C3.91993 1.71161 3.87754 1.72917 3.83333 1.72917H3.16667C3.12246 1.72917 3.08007 1.71161 3.04882 1.68035C3.01756 1.6491 3 1.6067 3 1.5625V0.895833ZM3 2.22917C3 2.18496 3.01756 2.14257 3.04882 2.11132C3.08007 2.08006 3.12246 2.0625 3.16667 2.0625H6.5C6.5442 2.0625 6.5866 2.08006 6.61785 2.11132C6.64911 2.14257 6.66667 2.18496 6.66667 2.22917V5.5625C6.66667 5.6067 6.64911 5.6491 6.61785 5.68035C6.5866 5.71161 6.5442 5.72917 6.5 5.72917H3.16667C3.12246 5.72917 3.08007 5.71161 3.04882 5.68035C3.01756 5.6491 3 5.6067 3 5.5625V2.22917ZM6.33333 6.0625V6.39583H6V6.0625H6.33333ZM5.66667 6.0625V6.39583H5.33333V6.0625H5.66667ZM5 6.0625V6.39583H4.66667V6.0625H5ZM4.33333 6.0625V6.39583H4V6.0625H4.33333ZM3.66667 6.0625V6.39583H3.33333V6.0625H3.66667ZM0.833333 1.0625H1.5V1.39583H0.833333V1.0625ZM0.833333 2.39583H1.5V4.72917H0.833333V4.39583H1C1.0442 4.39583 1.0866 4.37827 1.11785 4.34702C1.14911 4.31576 1.16667 4.27337 1.16667 4.22917V2.89583C1.16667 2.85163 1.14911 2.80924 1.11785 2.77798C1.0866 2.74673 1.0442 2.72917 1 2.72917H0.833333V2.39583ZM1.5 5.72917V6.0625H0.833333V5.72917H1.5ZM0.333333 4.0625V3.0625H0.833333V4.0625H0.333333ZM1.5 9.22917H1.16667V8.89583H1.5V9.22917ZM1.5 8.5625H1.16667V8.22917H1.5V8.5625ZM2.16667 9.22917H1.83333V8.89583H2.16667V9.22917ZM2.16667 8.5625H1.83333V8.22917H2.16667V8.5625ZM2.16667 7.39583H0.833333V7.0625H2.16667V7.39583ZM2.66667 4.39583H2.16667V4.0625H2.66667V4.39583ZM2.66667 3.72917H2.16667V3.39583H2.66667V3.72917ZM2.66667 3.0625H2.16667V2.72917H2.66667V3.0625ZM2.66667 2.39583H2.16667V2.0625H2.66667V2.39583ZM2.66667 1.72917H2.16667V1.39583H2.66667V1.72917ZM2.66667 1.0625H2.16667V0.729167H2.66667V1.0625ZM4.33333 9.22917H2.83333V8.89583H4.33333V9.22917ZM4.33333 8.5625H2.83333V8.22917H4.33333V8.5625ZM5.33333 9.39583C5.20148 9.39583 5.07259 9.35673 4.96295 9.28348C4.85332 9.21023 4.76787 9.10611 4.71741 8.98429C4.66696 8.86247 4.65375 8.72843 4.67948 8.59911C4.7052 8.46979 4.76869 8.351 4.86193 8.25776C4.95516 8.16453 5.07395 8.10103 5.20327 8.07531C5.33259 8.04959 5.46664 8.06279 5.58846 8.11325C5.71027 8.16371 5.81439 8.24915 5.88765 8.35879C5.9609 8.46842 6 8.59731 6 8.72917C5.9998 8.90592 5.9295 9.07537 5.80452 9.20035C5.67954 9.32533 5.51008 9.39564 5.33333 9.39583ZM6.66667 9.22917H6.33333V8.89583H6.66667V9.22917ZM6.66667 8.5625H6.33333V8.22917H6.66667V8.5625ZM7.33333 9.22917H7V8.89583H7.33333V9.22917ZM7.33333 8.5625H7V8.22917H7.33333V8.5625ZM9.33333 8.5625H9V8.89583H9.33333V9.22917H9C9 9.27337 8.98244 9.31576 8.95118 9.34702C8.91993 9.37827 8.87754 9.39583 8.83333 9.39583H8.16667C8.12246 9.39583 8.08007 9.37827 8.04882 9.34702C8.01756 9.31576 8 9.27337 8 9.22917H7.66667V8.89583H8V8.5625H7.66667V8.22917H8C8 8.18496 8.01756 8.14257 8.04882 8.11132C8.08007 8.08006 8.12246 8.0625 8.16667 8.0625H8.83333C8.87754 8.0625 8.91993 8.08006 8.95118 8.11132C8.98244 8.14257 9 8.18496 9 8.22917H9.33333V8.5625ZM9.33333 7.39583H9V7.5625C9 7.6067 8.98244 7.6491 8.95118 7.68035C8.91993 7.71161 8.87754 7.72917 8.83333 7.72917H3.16667C3.12246 7.72917 3.08007 7.71161 3.04882 7.68035C3.01756 7.6491 3 7.6067 3 7.5625V6.89583C3 6.85163 3.01756 6.80924 3.04882 6.77798C3.08007 6.74673 3.12246 6.72917 3.16667 6.72917H8.83333C8.87754 6.72917 8.91993 6.74673 8.95118 6.77798C8.98244 6.80924 9 6.85163 9 6.89583V7.0625H9.33333V7.39583ZM9.33333 5.89583C9.33333 5.94004 9.31577 5.98243 9.28452 6.01368C9.25326 6.04494 9.21087 6.0625 9.16667 6.0625H9V6.39583H8.66667V6.0625H8.5C8.4558 6.0625 8.41341 6.04494 8.38215 6.01368C8.35089 5.98243 8.33333 5.94004 8.33333 5.89583V1.22917C8.33333 1.18496 8.35089 1.14257 8.38215 1.11132C8.41341 1.08006 8.4558 1.0625 8.5 1.0625H8.66667V0.729167H9V1.0625H9.16667C9.21087 1.0625 9.25326 1.08006 9.28452 1.11132C9.31577 1.14257 9.33333 1.18496 9.33333 1.22917V5.89583Z" fill="#6D6E72"></path>
                                        <path d="M8.33325 8.39581H8.66659V9.06248H8.33325V8.39581Z" fill="#6D6E72"></path>
                                    </svg><span>Z790</span></div>
                                <div class="proloop-technical--line" data-tag="ram"><svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_5706_2977)">
                                            <path d="M0.807138 6.03778C0.483498 5.988 0.211453 5.78889 0.0754307 5.35956C0.0285264 5.204 0.00507422 5.01733 0.00507422 4.84311C0.000383788 3.79778 0.000383788 2.74622 0.00507422 1.69467C0.00507422 0.954222 0.347476 0.5 0.900947 0.5C3.63078 0.5 6.36061 0.5 9.09044 0.5C9.6486 0.5 9.991 0.948 9.991 1.68844C9.99569 2.72756 9.991 3.76667 9.991 4.812C9.991 5.484 9.75648 5.86978 9.2593 6.01911C9.23115 6.02533 9.20301 6.044 9.1608 6.05644C9.1608 6.36133 9.1608 6.66622 9.1608 6.96489C9.1608 7.37556 9.07637 7.49378 8.7668 7.49378C7.41127 7.5 6.06042 7.49378 4.70489 7.49378C3.56511 7.49378 2.42534 7.49378 1.28556 7.49378C0.891566 7.49378 0.8259 7.40044 0.821209 6.87778C0.821209 6.62267 0.821209 6.36756 0.821209 6.11244C0.83059 6.1 0.821209 6.08133 0.807138 6.03778ZM1.12609 4.68756C1.12609 4.79956 1.19175 4.89289 1.28087 4.89289C1.78744 4.90533 3.3259 4.91778 4.18894 4.924C4.34372 4.924 4.44691 4.82444 4.44691 4.66889C4.44691 3.93467 4.4516 2.57822 4.4516 1.956C4.4516 1.77556 4.33903 1.63244 4.20301 1.63244H1.28556C1.20113 1.63244 1.13078 1.72578 1.13078 1.83778L1.12609 4.68756ZM8.86999 4.60044V1.94356C8.86999 1.77556 8.7668 1.63867 8.64016 1.63867H5.80245C5.67581 1.63867 5.57262 1.77556 5.57262 1.94356V4.60044C5.57262 4.76844 5.67581 4.90533 5.80245 4.90533H8.64016C8.7668 4.90533 8.86999 4.76844 8.86999 4.60044ZM1.93284 6.05022C1.74522 6.05022 1.58106 6.05022 1.40751 6.05022C1.40751 6.29289 1.40751 6.51067 1.40751 6.74089C1.58575 6.74089 1.75461 6.74089 1.93284 6.74089C1.93284 6.51067 1.93284 6.28667 1.93284 6.05022ZM3.03978 6.05022C2.85686 6.05022 2.688 6.05022 2.51446 6.05022C2.51446 6.29289 2.51446 6.51067 2.51446 6.74711C2.69269 6.74711 2.85686 6.74711 3.03978 6.74711C3.03978 6.51067 3.03978 6.29289 3.03978 6.05022ZM3.6214 6.74089C3.8137 6.74089 3.97787 6.74089 4.15142 6.74089C4.15142 6.49822 4.15142 6.28044 4.15142 6.05644C3.96849 6.05644 3.79963 6.05644 3.6214 6.05644C3.6214 6.29911 3.6214 6.51067 3.6214 6.74089ZM5.26305 6.05022C5.07543 6.05022 4.91127 6.05022 4.73772 6.05022C4.73772 6.29289 4.73772 6.51067 4.73772 6.74711C4.91596 6.74711 5.08481 6.74711 5.26305 6.74711C5.26305 6.51067 5.26305 6.29289 5.26305 6.05022ZM6.37468 6.05022C6.18706 6.05022 6.01821 6.05022 5.84466 6.05022C5.84466 6.29289 5.84466 6.51067 5.84466 6.74089C6.02759 6.74089 6.20114 6.74089 6.37468 6.74089C6.37468 6.50444 6.37468 6.29289 6.37468 6.05022ZM6.96568 6.044C6.96568 6.29289 6.96568 6.52311 6.96568 6.74089C7.15329 6.74089 7.31746 6.74089 7.48162 6.74089C7.48162 6.49822 7.48162 6.28044 7.48162 6.044C7.30339 6.044 7.14391 6.044 6.96568 6.044ZM8.06324 6.73467C8.24147 6.73467 8.41033 6.73467 8.58856 6.73467C8.58856 6.49822 8.58856 6.27422 8.58856 6.05022C8.40564 6.05022 8.23678 6.05022 8.06324 6.05022C8.06324 6.28667 8.06324 6.49822 8.06324 6.73467Z" fill="#6D6E72"></path>
                                            <path d="M2.27955 4.17114H1.89025C1.77768 4.17114 1.68387 4.0467 1.68387 3.89737V2.64048C1.68387 2.48492 1.77768 2.3667 1.89025 2.3667H2.27955C2.39212 2.3667 2.48593 2.48492 2.48593 2.64048V3.89737C2.48593 4.0467 2.39212 4.17114 2.27955 4.17114Z" fill="#6D6E72"></path>
                                            <path d="M3.66792 4.17114H3.27861C3.16604 4.17114 3.07224 4.0467 3.07224 3.89737V2.63425C3.07224 2.48492 3.16135 2.3667 3.27861 2.3667H3.66792C3.78049 2.3667 3.8743 2.49114 3.8743 2.64048V3.90359C3.8743 4.0467 3.78049 4.17114 3.66792 4.17114Z" fill="#6D6E72"></path>
                                            <path d="M6.3274 2.35425H6.72139C6.83396 2.35425 6.92777 2.47869 6.92777 2.62803V3.89114C6.92777 4.04047 6.83396 4.16491 6.72139 4.16491H6.3274C6.21483 4.16491 6.12102 4.04047 6.12102 3.89114V2.62803C6.12571 2.47869 6.21483 2.35425 6.3274 2.35425Z" fill="#6D6E72"></path>
                                            <path d="M8.11445 4.16491H7.71576C7.60319 4.16491 7.50938 4.04047 7.50938 3.89114V2.62803C7.50938 2.47869 7.60319 2.35425 7.71576 2.35425H8.11445C8.22702 2.35425 8.32083 2.47869 8.32083 2.62803V3.89114C8.32083 4.04669 8.22702 4.16491 8.11445 4.16491Z" fill="#6D6E72"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_5706_2977">
                                                <rect width="10" height="7" fill="white" transform="translate(0 0.5)"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg><span>32GB</span></div>
                                <div class="proloop-technical--line" data-tag="ssd"><svg width="10" height="8" viewBox="0 0 10 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M9.375 0H0.625C0.45924 0 0.300268 0.0702379 0.183058 0.195262C0.065848 0.320286 0 0.489856 0 0.666667V7.33333C0 7.51014 0.065848 7.67971 0.183058 7.80474C0.300268 7.92976 0.45924 8 0.625 8H9.375C9.54076 8 9.69973 7.92976 9.81694 7.80474C9.93415 7.67971 10 7.51014 10 7.33333V0.666667C10 0.489856 9.93415 0.320286 9.81694 0.195262C9.69973 0.0702379 9.54076 0 9.375 0ZM1.00312 0.666667C1.08087 0.664012 1.15758 0.686174 1.22344 0.730314C1.2893 0.774454 1.34131 0.838562 1.3728 0.914426C1.40429 0.99029 1.41384 1.07445 1.40021 1.15614C1.38657 1.23782 1.35039 1.31331 1.29629 1.37292C1.24219 1.43253 1.17264 1.47356 1.09655 1.49075C1.02045 1.50794 0.941279 1.5005 0.869171 1.46939C0.797062 1.43829 0.735302 1.38493 0.691801 1.31615C0.6483 1.24737 0.62504 1.1663 0.625 1.08333C0.624948 0.975098 0.664383 0.871089 0.734957 0.793321C0.805532 0.715553 0.901707 0.67013 1.00312 0.666667ZM1.00312 7.33333C0.925867 7.33333 0.850343 7.3089 0.786105 7.26311C0.721867 7.21733 0.6718 7.15225 0.642235 7.07612C0.612669 6.99998 0.604933 6.9162 0.620006 6.83538C0.635078 6.75455 0.672282 6.68031 0.726911 6.62204C0.781541 6.56377 0.851144 6.52408 0.926918 6.50801C1.00269 6.49193 1.08123 6.50018 1.15261 6.53172C1.22399 6.56325 1.285 6.61666 1.32792 6.68518C1.37084 6.7537 1.39375 6.83426 1.39375 6.91667C1.39375 7.02717 1.35259 7.13315 1.27934 7.2113C1.20608 7.28944 1.10673 7.33333 1.00312 7.33333ZM2.58438 5.40667C2.17714 5.41641 1.78244 5.25614 1.48438 4.96L1.75313 4.60667C1.98142 4.83976 2.28401 4.97196 2.6 4.97667C2.9125 4.97667 3.08437 4.81 3.08437 4.61333C3.08437 4.41667 2.9 4.31 2.4875 4.20667C1.95625 4.07333 1.58438 3.91 1.58438 3.39333C1.58438 2.87667 1.96562 2.56333 2.52187 2.56333C2.88042 2.55631 3.22837 2.69311 3.49687 2.94667L3.24375 3.31333C3.03896 3.11735 2.77507 3.00618 2.5 3C2.39772 2.98678 2.29469 3.01719 2.21333 3.08462C2.13198 3.15204 2.07889 3.25102 2.06562 3.36C2.06562 3.58333 2.25625 3.66333 2.66562 3.76333C3.20312 3.89333 3.5625 4.07667 3.5625 4.57667C3.5625 5.07667 3.2 5.40667 2.58438 5.40667ZM4.93125 5.40667C4.52402 5.41641 4.12932 5.25614 3.83125 4.96L4.1 4.60667C4.32829 4.83976 4.63088 4.97196 4.94688 4.97667C5.25938 4.97667 5.43125 4.81 5.43125 4.61333C5.43125 4.41667 5.24687 4.31 4.83437 4.20667C4.30312 4.07333 3.93125 3.91 3.93125 3.39333C3.93125 2.87667 4.31563 2.56333 4.86875 2.56333C5.2274 2.55565 5.57557 2.69254 5.84375 2.94667L5.59062 3.31333C5.38938 3.11081 5.12643 2.99246 4.85 2.98C4.74772 2.96678 4.64469 2.99719 4.56333 3.06462C4.48198 3.13204 4.42889 3.23102 4.41562 3.34C4.41562 3.56333 4.60625 3.64333 5.01562 3.74333C5.55312 3.87333 5.9125 4.05667 5.9125 4.55667C5.9125 5.05667 5.54688 5.40667 4.93125 5.40667ZM6.3625 5.36V2.61333H7.26875C8.11875 2.61333 8.71875 3.18333 8.71875 3.98667C8.71875 4.79 8.125 5.36 7.26875 5.36H6.3625ZM8.96562 7.33333C8.88837 7.33333 8.81284 7.3089 8.74861 7.26311C8.68437 7.21733 8.6343 7.15225 8.60473 7.07612C8.57517 6.99998 8.56743 6.9162 8.58251 6.83538C8.59758 6.75455 8.63478 6.68031 8.68941 6.62204C8.74404 6.56377 8.81364 6.52408 8.88942 6.50801C8.96519 6.49193 9.04373 6.50018 9.11511 6.53172C9.18649 6.56325 9.2475 6.61666 9.29042 6.68518C9.33334 6.7537 9.35625 6.83426 9.35625 6.91667C9.35625 7.02717 9.31509 7.13315 9.24184 7.2113C9.16858 7.28944 9.06923 7.33333 8.96562 7.33333ZM8.96562 1.5C8.88837 1.5 8.81284 1.47556 8.74861 1.42978C8.68437 1.384 8.6343 1.31892 8.60473 1.24278C8.57517 1.16665 8.56743 1.08287 8.58251 1.00205C8.59758 0.92122 8.63478 0.846977 8.68941 0.788706C8.74404 0.730434 8.81364 0.69075 8.88942 0.674673C8.96519 0.658596 9.04373 0.666847 9.11511 0.698384C9.18649 0.72992 9.2475 0.783325 9.29042 0.851846C9.33334 0.920366 9.35625 1.00092 9.35625 1.08333C9.35625 1.19384 9.31509 1.29982 9.24184 1.37796C9.16858 1.4561 9.06923 1.5 8.96562 1.5Z" fill="#6D6E72"></path>
                                        <path d="M6.875 3.00181H7.30868C7.41352 2.99361 7.51853 3.01336 7.61727 3.05982C7.71601 3.10628 7.80639 3.17848 7.88285 3.27197C7.95931 3.36546 8.02023 3.47828 8.06187 3.60348C8.10352 3.72868 8.125 3.86362 8.125 4C8.125 4.13638 8.10352 4.27132 8.06187 4.39652C8.02023 4.52172 7.95931 4.63454 7.88285 4.72803C7.80639 4.82153 7.71601 4.89372 7.61727 4.94018C7.51853 4.98664 7.41352 5.00639 7.30868 4.99819H6.875V3.00181Z" fill="#6D6E72"></path>
                                    </svg><span>1TB</span></div>
                                <div class="proloop-technical--line" data-tag="cpu"><svg viewBox="0 0 10 10" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M8.75 5.01732C8.75 5.86605 8.75 6.71478 8.75 7.57217C8.75 8.28233 8.29099 8.75 7.58083 8.75C5.85739 8.75 4.14261 8.75 2.41917 8.75C1.71767 8.75 1.25 8.29099 1.25 7.58949C1.25 5.86605 1.25 4.15127 1.25 2.42783C1.25 1.71767 1.73499 1.25 2.44515 1.25C4.15127 1.25 5.85739 1.25 7.56351 1.25C8.27367 1.25 8.75 1.71767 8.75 2.42783C8.75 3.28522 8.75 4.15127 8.75 5.01732ZM5.01732 2.48845C4.48037 2.48845 3.95208 2.50577 3.42379 2.47979C2.95612 2.46247 2.47979 2.84353 2.48845 3.42379C2.49711 4.47171 2.48845 5.51963 2.48845 6.56755C2.48845 7.13914 2.83487 7.50288 3.40647 7.51155C4.47171 7.52021 5.52829 7.52021 6.59353 7.51155C7.15646 7.50288 7.51154 7.16512 7.52021 6.60219C7.53753 5.53695 7.52887 4.46305 7.52021 3.3978C7.52021 2.79157 7.02656 2.46247 6.56755 2.47979C6.04792 2.50577 5.52829 2.48845 5.01732 2.48845Z" fill="#6D6E72"></path>
                                        <path d="M9.55476 4.47915H8.125V3.26831H9.55476C9.79933 3.26831 10 3.53927 10 3.8695C10 4.20819 9.79933 4.47915 9.55476 4.47915Z" fill="#6D6E72"></path>
                                        <path d="M9.55476 6.73142H8.125V5.52905H9.55476C9.79933 5.52905 10 5.80001 10 6.13024C10 6.46047 9.79933 6.73142 9.55476 6.73142Z" fill="#6D6E72"></path>
                                        <path d="M0.44375 5.52905H1.875V6.73989H0.44375C0.2 6.73142 0 6.46047 0 6.13024C0 5.80001 0.2 5.52905 0.44375 5.52905Z" fill="#6D6E72"></path>
                                        <path d="M0.44375 3.26831H1.875V4.47915H0.44375C0.2 4.47915 0 4.20819 0 3.8695C0 3.53927 0.2 3.26831 0.44375 3.26831Z" fill="#6D6E72"></path>
                                        <path d="M4.47927 0.44375V1.875H3.26843V0.44375C3.26843 0.2 3.53939 0 3.86962 0C4.20831 0 4.47927 0.2 4.47927 0.44375Z" fill="#6D6E72"></path>
                                        <path d="M6.73167 0.44375V1.875H5.5293V0.44375C5.5293 0.2 5.80025 0 6.13048 0C6.46071 0 6.73167 0.2 6.73167 0.44375Z" fill="#6D6E72"></path>
                                        <path d="M5.5293 9.55477V8.125H6.74013V9.55477C6.74013 9.79934 6.46918 10 6.13895 10C5.80025 10 5.5293 9.79934 5.5293 9.55477Z" fill="#6D6E72"></path>
                                        <path d="M3.26843 9.55477V8.125H4.47927V9.55477C4.47927 9.79934 4.20831 10 3.87809 10C3.53939 10 3.26843 9.79934 3.26843 9.55477Z" fill="#6D6E72"></path>
                                        <path d="M6.875 4.99588C6.875 5.42445 6.875 5.86126 6.875 6.28983C6.875 6.64423 6.65247 6.875 6.28983 6.875C5.42445 6.875 4.55906 6.875 3.70192 6.875C3.35577 6.875 3.125 6.64423 3.125 6.29808C3.125 5.43269 3.125 4.56731 3.125 3.71016C3.125 3.35577 3.35577 3.125 3.71016 3.125C4.57555 3.125 5.44093 3.125 6.29808 3.125C6.64423 3.125 6.875 3.35577 6.875 3.70192C6.875 4.13874 6.875 4.56731 6.875 4.99588Z" fill="#6D6E72"></path>
                                    </svg><span>i9 14900KF</span></div>
                            </div>
                            <div class="product-martket-main d-flex align-items-center">
                                <p class="product-market-price">
                                    20.990.000<u>đ</u>
                                </p>
                                <div class="product-percent-price">-12%</div>
                            </div>
                            <div class="product-price-main font-weight-600">
                                {{ $product->price }} đ
                            </div>
                            <div class="product-offer line-clamp-2">
                                <p>• Tặng Fan Vitra Rainbow RGB LED 12CM 100K</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide"></div>
            <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide"></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </div>
</section>

<section class="content-sale">
    <div class="box-article-group boder-radius-10">
        <div class="d-flex justify-content-between align-items-center">
            <div class="title-box">
                <h2 class="title-box font-weight-600">Khuyến mại</h2>
            </div>
            <a href="/tin-cong-nghe" class="btn-article-group">Xem tất cả <i class="fa fa-caret-right"></i></a>
        </div>
        <div class="list-article-group d-flex align-items-center gap-10">
            <div class="item-article d-flex gap-12">
                <a href="/viettel-trung-dau-gia-bang-tan-de-chinh-thuc-trien-khai-5g-tai-viet-nam" class="img-article boder-radius-10 position-relative">
                    <picture>
                        <source media="(max-width: 991px)" srcset="https://file.hstatic.net/200000722513/file/mua_kem_pc_1_30c838c753424ea3a9e1abb9d54c4ac2.png" data-srcset="https://file.hstatic.net/200000722513/file/mua_kem_pc_1_30c838c753424ea3a9e1abb9d54c4ac2.png" sizes="276px">
                        <source media="(min-width: 992px)" srcset="https://file.hstatic.net/200000722513/file/mua_kem_pc_1_30c838c753424ea3a9e1abb9d54c4ac2.png" data-srcset="https://file.hstatic.net/200000722513/file/mua_kem_pc_1_30c838c753424ea3a9e1abb9d54c4ac2.png" sizes="276px">
                        <img data-sizes="auto" class="lazyautosizes ls-is-cached lazyloaded" src="https://file.hstatic.net/200000722513/file/mua_kem_pc_1_30c838c753424ea3a9e1abb9d54c4ac2.png" data-src="https://file.hstatic.net/200000722513/file/mua_kem_pc_1_30c838c753424ea3a9e1abb9d54c4ac2.png" alt="Banner" sizes="276px">
                    </picture>
                </a>
            </div>

            <div class="item-article d-flex gap-12">
                <a href="/vong-tron-loading-tren-windows-11-khong-he-vo-tri-nhu-chung-ta-van-nghi" class="img-article boder-radius-10 position-relative">
                    <picture>
                        <source media="(max-width: 991px)" srcset="https://file.hstatic.net/200000722513/file/banner_slide_4_b4d3c996f3e64796b83e224fd13f0479.png" data-srcset="https://file.hstatic.net/200000722513/file/banner_slide_4_b4d3c996f3e64796b83e224fd13f0479.png" sizes="276px">
                        <source media="(min-width: 992px)" srcset="https://file.hstatic.net/200000722513/file/banner_slide_4_b4d3c996f3e64796b83e224fd13f0479.png" data-srcset="https://file.hstatic.net/200000722513/file/banner_slide_4_b4d3c996f3e64796b83e224fd13f0479.png" sizes="276px">
                        <img data-sizes="auto" class="lazyautosizes ls-is-cached lazyloaded" src="https://file.hstatic.net/200000722513/file/banner_slide_4_b4d3c996f3e64796b83e224fd13f0479.png" data-src="https://file.hstatic.net/200000722513/file/banner_slide_4_b4d3c996f3e64796b83e224fd13f0479.png" alt="Màn hình" sizes="276px">
                    </picture>
                </a>
            </div>

            <div class="item-article d-flex gap-12">
                <a href="/facebook-va-instagram-sap-dien-rong-gay-thiet-hai-lon-cho-nen-kinh-te-the-gioi" class="img-article boder-radius-10 position-relative">
                    <picture>
                        <source media="(max-width: 991px)" srcset="https://file.hstatic.net/200000722513/file/b14_4b8b256e809146f2b10d7ab3f4e679c9.png" data-srcset="https://file.hstatic.net/200000722513/file/b14_4b8b256e809146f2b10d7ab3f4e679c9.png" sizes="276px">
                        <source media="(min-width: 992px)" srcset="https://file.hstatic.net/200000722513/file/b14_4b8b256e809146f2b10d7ab3f4e679c9.png" data-srcset="https://file.hstatic.net/200000722513/file/b14_4b8b256e809146f2b10d7ab3f4e679c9.png" sizes="276px">
                        <img data-sizes="auto" class="lazyautosizes ls-is-cached lazyloaded" src="https://file.hstatic.net/200000722513/file/b14_4b8b256e809146f2b10d7ab3f4e679c9.png" data-src="https://file.hstatic.net/200000722513/file/b14_4b8b256e809146f2b10d7ab3f4e679c9.png" alt="Laptop B14" sizes="276px">
                    </picture>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="content-news">
    <div class="box-article-group boder-radius-10">
        <div class="d-flex justify-content-between align-items-center">
            <div class="title-box">
                <h2 class="title-box font-weight-600">Tin tức công nghệ</h2>
            </div>
            <a href="/tin-cong-nghe" class="btn-article-group">Xem tất cả <i class="fa fa-caret-right"></i></a>
        </div>
        <div class="list-article-group d-flex align-items-center gap-10">
            <div class="item-article d-flex gap-12">
                <a href="/viettel-trung-dau-gia-bang-tan-de-chinh-thuc-trien-khai-5g-tai-viet-nam" class="img-article boder-radius-10 position-relative">

                    <img class="boder-radius-10" src="{{ asset('/images/test_post/2904-viettel-dau-gia-thanh-cong-bang-tan-5g-1.jpg') }}" alt="Viettel trúng đấu giá băng tần để chính thức triển khai 5G tại Việt Nam">

                    <i class="sprite sprite-icon-play-video-detail icon-video-feature "></i>
                    <i class="sprite sprite-play-youtube "></i>
                </a>
                <div class="content-article content-article-item d-flex flex-column flex-1">
                    <a href="/viettel-trung-dau-gia-bang-tan-de-chinh-thuc-trien-khai-5g-tai-viet-nam" class="title-article">
                        <h3 class="font-weight-400 line-clamp-2">Viettel trúng đấu giá băng tần để chính thức triển khai 5G tại Việt Nam</h3>
                    </a>
                    <p class="time-article d-flex align-items-center gap-4">
                        <i class="sprite sprite-clock-item-article"></i>
                        <span>10-03-2024, 10:37 am</span>
                    </p>
                    <p class="descreption-article line-clamp-2">Vượt qua 2 nhà mạng khác là Vinaphone và Mobifone, Tập đoàn Công nghiệp - Viễn thông quân đội Viettel mới đây đã đấu giá thành công để triển khai 5G tại Việt Nam với băng tần 2.500 - 2.600 MHz.</p>
                </div>
            </div>

            <div class="item-article d-flex gap-12">
                <a href="/vong-tron-loading-tren-windows-11-khong-he-vo-tri-nhu-chung-ta-van-nghi" class="img-article boder-radius-10 position-relative">

                    <img class="boder-radius-10" src="{{ asset('/images/test_post/2887-vong-tron-loading-win-11-1.jpg') }}" alt="Vòng tròn loading trên Windows 11 không hề vô tri như chúng ta vẫn nghĩ">

                    <i class="sprite sprite-icon-play-video-detail icon-video-feature "></i>
                    <i class="sprite sprite-play-youtube "></i>
                </a>
                <div class="content-article content-article-item d-flex flex-column flex-1">
                    <a href="/vong-tron-loading-tren-windows-11-khong-he-vo-tri-nhu-chung-ta-van-nghi" class="title-article">
                        <h3 class="font-weight-400 line-clamp-2">Vòng tròn loading trên Windows 11 không hề vô tri như chúng ta vẫn nghĩ</h3>
                    </a>
                    <p class="time-article d-flex align-items-center gap-4">
                        <i class="sprite sprite-clock-item-article"></i>
                        <span>06-03-2024, 11:23 am</span>
                    </p>
                    <p class="descreption-article line-clamp-2">Hóa ra vòng tròn loading trên màn hình khởi động của Windows sử dụng một bộ font chữ riêng chứ không đơn thuần chỉ là những hình ảnh động vô tri như bấy lâu nay chúng ta vẫn nghĩ.</p>
                </div>
            </div>

            <div class="item-article d-flex gap-12">
                <a href="/facebook-va-instagram-sap-dien-rong-gay-thiet-hai-lon-cho-nen-kinh-te-the-gioi" class="img-article boder-radius-10 position-relative">

                    <img class="boder-radius-10" src="{{ asset('/images/test_post/2886-facebook-sap-1.jpg') }}" alt="Facebook và Instagram sập diện rộng gây thiệt hại lớn cho nền kinh tế thế giới">

                    <i class="sprite sprite-icon-play-video-detail icon-video-feature "></i>
                    <i class="sprite sprite-play-youtube "></i>
                </a>
                <div class="content-article content-article-item d-flex flex-column flex-1">
                    <a href="/facebook-va-instagram-sap-dien-rong-gay-thiet-hai-lon-cho-nen-kinh-te-the-gioi" class="title-article">
                        <h3 class="font-weight-400 line-clamp-2">Facebook và Instagram sập diện rộng gây thiệt hại lớn cho nền kinh tế thế giới</h3>
                    </a>
                    <p class="time-article d-flex align-items-center gap-4">
                        <i class="sprite sprite-clock-item-article"></i>
                        <span>06-03-2024, 9:08 am</span>
                    </p>
                    <p class="descreption-article line-clamp-2">Đêm ngày 5 tháng 3 vừa qua theo giờ Việt Nam, các nền tảng của Meta bao gồm Facebook và Instagram đã tạm ngừng hoạt động trong một khoảng thời gian, gây ra sự hỗn loạn trên toàn thế giới.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="review">
    <div class="box-review-from-customer boder-radius-10">
        <div class="title-box">
            <h2 class="title-box font-weight-600">Đánh giá từ khách hàng</h2>
        </div>
        <div class="list-review-customer-homepage">
            <div class="swiper swiper-review-customer swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden" style="min-height: inherit;">
                <div class="swiper-wrapper" style="display: flex; justify-content: center;">
                    <div class="swiper-slide" style="width: 384px; margin-right: 12px;" role="group">
                        <div class="item-review-customer-hompage d-flex align-items-center">
                            <div class="left-review position-relative">
                                <img src="{{ asset('/images/review/team-1.jpg') }}" width="88" height="93" class="lazy" alt="avatar">
                            </div>
                            <div class="right-review">
                                <p class="text-review line-clamp-2">
                                    Đến Kattech build PC là 1 lựa chọn cực kì hoàn hảo
                                </p>
                                <b class="author-review font-weight-500">- Nguyễn An -</b>
                                <img src="{{ asset('/images/page/5star-customer.png') }}" width="80" height="15" class="lazy" alt="avatar">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="width: 384px; margin-right: 12px;" role="group">
                        <div class="item-review-customer-hompage d-flex align-items-center">
                            <div class="left-review position-relative">
                                <img src="{{ asset('/images/review/testimonial-1.jpg') }}" width="88" height="93" class="lazy" alt="avatar">
                            </div>
                            <div class="right-review">
                                <p class="text-review line-clamp-2">
                                    Không cần lo về giá vì đã có Kattech PC
                                </p>
                                <b class="author-review font-weight-500">- Trần Ngọc -</b>
                                <img src="{{ asset('/images/page/5star-customer.png') }}" width="80" height="15" class="lazy" alt="avatar">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide" style="width: 384px; margin-right: 12px;" role="group">
                        <div class="item-review-customer-hompage d-flex align-items-center">
                            <div class="left-review position-relative">
                                <img src="{{ asset('/images/review/testimonial-2.jpg') }}" width="88" height="93" class="lazy" alt="avatar">
                            </div>
                            <div class="right-review">
                                <p class="text-review line-clamp-2">
                                    Tôi được bạn bè giới thiệu và tôi hoàn toàn hài lòng về Kattech PC
                                </p>
                                <b class="author-review font-weight-500">- Nhà thiết kế Hoàng Anh -</b>
                                <img src="{{ asset('/images/page/5star-customer.png') }}" width="80" height="15" class="lazy" alt="avatar">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets swiper-pagination-horizontal"><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 1"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 2"></span><span class="swiper-pagination-bullet swiper-pagination-bullet-active" tabindex="0" role="button" aria-label="Go to slide 3" aria-current="true"></span><span class="swiper-pagination-bullet" tabindex="0" role="button" aria-label="Go to slide 4"></span></div>
                <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
            </div>
        </div>
    </div>
</section>
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

    $('.hover-for-tooltips').hover(function(e) {
        $('.global-tooltip').css('display', 'block');
        $('.global-tooltip').css('left', e.clientX + 100);
        $('.global-tooltip').css('top', e.clientY + 1200);
    }, function() {
        $('.global-tooltip').css('display', 'none');
    })
</script>
@endsection
