@extends('layouts.page')

@section('title')
<title>{{ __('Trang chủ') }} | Kattech PC</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('/plugins/owlcarousel/owl.theme.default.min.css') }}" />
@endsection

@section('content')
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

            < </div>
        </div>
</section>

<section class="flash-sale-banner">
    <div class="flash-sale-area">
        <div class="d-flex align-items-center justify-content-between">
            <div class="flash-sale-title-area d-flex align-items-center justify-content-center">
                <i class="sprite sprite-icon-deal-home"></i>
                <h2 class="flash-sale-title font-weight-800 ">Giá tốt mỗi ngày</h2>
                <span class="text-time-deal-home color-white fz-16 font-weight-700">Kết thúc sau</span>
                <div class="global-time-deal gap-6 d-flex align-items-center">
                    <p>01</p>
                    <span>:</span>
                    <p>10</p>
                    <span>:</span>
                    <p>10</p>
                    <span>:</span>
                    <p>03</p>
                </div>
            </div>
            <a href="/deal" class="button-deal color-white mb-10">Xem thêm khuyến mãi <i class="fa-solid fa-caret-right"></i></a>
        </div>

        <div class="swiper box-list-item-deal swiper-box-deal swiper-initialized swiper-horizontal swiper-pointer-events">
            <div class="swiper-wrapper loaded">
                <div class="swiper-slide" role="group">
                    <div class="product-item">
                        <a href="/laptop-gaming-msi-thin-gf63-i5-12450h-8g-rtx-2050-1tb-ssd-156-144hz-fhd-nk-bh-tai-nc" class="product-image position-relative">
                            <img data-src="/media/product/250-25869-gaming-msi-thin-gf63.jpg" width="164" height="164" alt="Laptop Gaming MSI Thin GF63 (i5-12450H | 8G | RTX 2050 | 1TB SSD | 15.6&quot; 144Hz FHD ) NK BH tại NC " class="lazy entered loaded" src="/media/product/250-25869-gaming-msi-thin-gf63.jpg">
                            <span class="p-type-holder">
                            </span>
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

                            <div class="product-offer line-clamp-2">
                                <p>+ Tặng&nbsp;<a href="https://nguyencongpc.vn/chuot-motospeed-v400-rgb-backlight">Chuột Motospeed V400 RGB Backlight</a>&nbsp;: Trị giá 590.000đ&nbsp;</p>
                                <p>+ Tặng Túi/Balo laptop NC trị giá: 390.000đ</p>
                                <p>+ Tặng Bàn di chuột trị giá: 50.000đ</p>
                                <p>+ Tặng Bộ vệ sinh Laptop trị giá: 40.000đ<br>+ Vệ sinh bảo dưỡng Laptop miễn phí trọn đời trị giá: 1 triệu đồng<br>+ Giảm 10% khi mua thêm RAM, HDD laptop<br>+ Giảm 5% khi mua kèm Gear, Đế tản nhiệt Laptop</p>
                            </div>

                        </div>

                        <!-- TOOLTIP -->
                        <div class="tooltip p-tooltip tippy-box">
                            <div class="tooltip-name">
                                Laptop Gaming MSI Thin GF63 (i5-12450H | 8G | RTX 2050 | 1TB SSD | 15.6" 144Hz FHD ) NK BH tại NC
                            </div>
                            <div class="tooltip-descreption">
                                <div class="tooltip-descreption-price">
                                    <p>Giá niêm yết</p>
                                    <p>Giá bán</p>
                                    <p>Bảo hành</p>
                                    <p>Tình trạng</p>
                                </div>
                                <div class="tooltip-descreption-info">
                                    <div class="d-flex align-items-center">
                                        <p class="card-price-origin color-black" style="position: relative;">
                                            18.990.000₫
                                            <span class="card-price-origin-line-through"></span>
                                        </p>
                                        <span class="color-red" style="margin-left: 4px;">-22%</span>
                                    </div>
                                    <p>
                                        14.800.000đ
                                    </p>
                                    <p class="color-primary">
                                        12 tháng
                                    </p>
                                    <p class="color-secondary">
                                        Còn DEAL
                                    </p>
                                </div>
                            </div>

                            <div class="tooltip-input">
                                <i class="fa-solid fa-database icon-database"></i>
                                <span>Thông số sản phẩm</span>
                            </div>
                            <div class="tooltip-list">
                                <ul>
                                    CPU: Intel 12th Generation Core i5 -12450H
                                    RAM: 8GB DDR4
                                    SSD: 1TB SSD
                                    VGA: NVIDIA GeForce RTX 2050
                                    Màn hình: 15,6 inch 1920 x 1080 (HD đầy đủ)
                                    Màn hình cảm ứng: Không
                                    Trọng lượng: 1.85Kg
                                    Hệ điều hành: Windows 11
                                    Tuổi thọ pin (tối đa): 51 giờ
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
                                            <p>+ Tặng&nbsp;<a href="https://nguyencongpc.vn/chuot-motospeed-v400-rgb-backlight">Chuột Motospeed V400 RGB Backlight</a>&nbsp;: Trị giá 590.000đ&nbsp;</p>
                                        </div>
                                        <div class="item">
                                            <p>+ Tặng Túi/Balo laptop NC trị giá: 390.000đ</p>
                                        </div>
                                        <div class="item">
                                            <p>+ Tặng Bàn di chuột trị giá: 50.000đ</p>
                                        </div>
                                        <div class="item">
                                            <p>+ Tặng Bộ vệ sinh Laptop trị giá: 40.000đ<br>+ Vệ sinh bảo dưỡng Laptop miễn phí trọn đời trị giá: 1 triệu đồng<br>+ Giảm 10% khi mua thêm RAM, HDD laptop<br>+ Giảm 5% khi mua kèm Gear, Đế tản nhiệt Laptop</p>
                                        </div>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="js-deal-box"></div>
            <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="js-deal-box"></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </div>
</section>

<div class="box-product-category boder-radius-10">
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
