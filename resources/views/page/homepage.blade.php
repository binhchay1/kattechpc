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
                <h2 class="flash-sale-title">{{ __('Flash sale') }}</h2>
                <span class="text-time-deal-home">{{ __('Kết thúc sau') }}</span>
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
            <div class="swiper-wrapper d-flex swiper-flash-sale" style="margin-left: 10px;">
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
            </div>
            <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" aria-controls="js-deal-box"></div>
            <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" aria-controls="js-deal-box"></div>
            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
        </div>
    </div>
</section>

<section class="top-sale">
    <div class="flash-sale-area">
        <div class="d-flex align-items-center justify-content-between">
            <div class="flash-sale-title-area d-flex align-items-center justify-content-center">
                <h2 class="flash-sale-title">{{ __('Sản phẩm bán chạy') }}</h2>
            </div>
        </div>

        <div class="swiper d-flex">
            <div class="box-banner-collection">
                <a href="/ad.php?id=317" class="banner-collection boder-radius-10">
                    <img src="{{asset('images/top-sale.jpg')}}" width="365" class="boder-radius-10 lazy-image entered loaded" alt="" data-was-processed="true" data-ll-status="loaded">
                </a>
            </div>
            <div class="swiper-wrapper swiper-top-sale" style="left: 48%;">
                <div class="swiper-slide1" role="group">
                    <div class="product-item">
                        <a href="/laptop-gaming-msi-thin-gf63-i5-12450h-8g-rtx-2050-1tb-ssd-156-144hz-fhd-nk-bh-tai-nc" class="product-image position-relative">
                            <img src="{{ asset('/images/test_flash_sale/250-26232-b----pc-gaming.jpg') }}" width="210" height="164" class="lazy entered loaded">
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

<section class="category">
    <div class="">
        <div class="d-flex align-items-center justify-content-between">
            <div class="flash-sale-title-area d-flex align-items-center justify-content-center">
                <h2 class="flash-sale-title">{{__('Danh mục nổi bật')}}</h2>
            </div>
        </div>
        <div class="flex-container">
            <div>
                <img src="https://file.hstatic.net/200000722513/file/laptop_1f3300ec0cf1455ca3b5199859d9cfd7.jpg" class="item-hot">
                <span class="policy-title">{{ __('Laptop') }}</span>
            </div>
            <div class="child1">
                <img src="https://file.hstatic.net/200000722513/file/pc_db4c030d7ae1452987001ec502eae18d.jpg" class="item-hot">
                <span class="policy-title">{{ __('PC') }}</span>
            </div>
            <div class="child1">
                <img src="https://file.hstatic.net/200000722513/file/man-hinh_2c8cde62363045ed8c46944b1a732458.jpg" class="item-hot">
                <span class="policy-title">{{ __('Màn hình') }}</span>
            </div>
            <div class="child1">
                <img src="https://file.hstatic.net/200000722513/file/chuot_c2b601fad5b640898d1666b20bc50b34.jpg" class="item-hot">
                <span class="policy-title">{{ __('Chuột') }}</span>
            </div>
            <div class="child1">
                <img src="https://file.hstatic.net/200000722513/file/ban_phim_7442ed8375924db8816fcbd97a5180ce.jpg" class="item-hot">
                <span class="policy-title">{{ __('Bàn phím') }}</span>
            </div>
            <div class="child1">
                <img src="https://file.hstatic.net/200000722513/file/linh_kien_pc_23daa86cd21c44b6bc25bb4bab722cf0.jpg" class="item-hot">
                <span class="policy-title">{{ __('Linh kiện') }}</span>
            </div>
        </div>

        <!-- end fake data -->
    </div>

</section>

@foreach($getCategory as $category)
<section class="product-slide">
    <div class="product-slide-main boder-radius-10">
        <div class="d-flex align-items-center justify-content-between">
            <div class="title">
                <h2 class="title-box font-weight-600">{{ $category->name }}</h2>
                <i class="fa fa-truck"></i>
                <p>{{ __('Miễn phí giao hàng') }}</p>
            </div>
            <div class="list-category-child d-flex align-items-center justify-content-end flex-1">
                <a href="/edit-render-video-4k-8k" class="title-category">Laptop - Editor</a>
                <a href="/edit-render-video-4k-8k" class="title-category">Laptop - Gaming</a>
                <a href="/edit-render-video-4k-8k" class="title-category">Laptop - Phổ thông</a>
                <a href="/edit-render-video-4k-8k" class="title-category">Laptop - Asus</a>
                <a href="/laptop" class="title-all-category">{{ __('Xem tất cả') }} <i class="fa fa-caret-right"></i></a>
            </div>
        </div>
        <div class="swiper box-list-item-category swiper-product-category swiper-initialized swiper-horizontal swiper-pointer-events swiper-backface-hidden">
            <div class="swiper-wrapper swiper-product">
                @foreach($category->products as $product)
                <div class="swiper-slide" role="group">
                    <div class="product-item">
                        <a href="{{ route('productDetail', $product['slug']) }}" class="product-image position-relative">
                            <img src="{{ $product->image }}" width="203" height="203" class="hover-for-tooltips">
                            <span class="p-type-holder">
                                <i class="p-icon-type p-icon-hot"></i>
                            </span>
                            <span class="p-type-holder p-type-holder-2">
                                <i class="p-icon-type p-icon-best-sale"></i>
                            </span>
                        </a>
                        <div class="product-info">
                            <a href="{{ route('productDetail', $product['slug']) }}">
                                <h3 class="product-title line-clamp-3">{{ $product->name }}</h3>
                            </a>
                            <div class="product-price-main font-weight-600">
                                {{ $product->price }} đ
                            </div>
                            <div class="product-offer line-clamp-2">
                                <p>{{ $product->sale_detail }}</p>
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
@endforeach

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

<section class="content-sale">
    <div class="box-article-group boder-radius-10">
        <div class="d-flex justify-content-between align-items-center">
            <div class="title-box">
                <h2 class="title-box font-weight-600">{{ __('Khuyến mại') }}</h2>
            </div>
            <a href="/tin-cong-nghe" class="btn-article-group">{{ __('Xem tất cả') }} <i class="fa fa-caret-right"></i></a>
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
                <h2 class="title-box font-weight-600">{{ __('Tin tức công nghệ') }}</h2>
            </div>
            <a href="/tin-cong-nghe" class="btn-article-group">{{ __('Xem tất cả') }} <i class="fa fa-caret-right"></i></a>
        </div>
        <div class="list-article-group d-flex align-items-center gap-10">
            @foreach($listNews as $news)
            <div class="item-article d-flex gap-12">
                <a href="/viettel-trung-dau-gia-bang-tan-de-chinh-thuc-trien-khai-5g-tai-viet-nam" class="img-article boder-radius-10 position-relative">
                    <img class="boder-radius-10" src="{{ asset('/images/test_post/2904-viettel-dau-gia-thanh-cong-bang-tan-5g-1.jpg') }}" alt="Viettel trúng đấu giá băng tần để chính thức triển khai 5G tại Việt Nam">
                </a>
                <div class="content-article content-article-item d-flex flex-column flex-1">
                    <a href="/viettel-trung-dau-gia-bang-tan-de-chinh-thuc-trien-khai-5g-tai-viet-nam" class="title-article">
                        <h3 class="font-weight-400 line-clamp-2">{{ $post->content }}</h3>
                    </a>
                    <p class="time-article d-flex align-items-center gap-4">
                        <i class="sprite sprite-clock-item-article"></i>
                        <span>{{ date_format($post->created_at, "F j, Y, g:i a") }}</span>
                    </p>
                    <p class="descreption-article line-clamp-2">{{ $post->short_description }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<section class="review">
    <div class="box-review-from-customer boder-radius-10">
        <div class="title-box">
            <h2 class="title-box font-weight-600">{{ __('Đánh giá từ khách hàng') }}</h2>
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

@include('includes.tooltips')
@endsection

@section('js')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/plugins/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('/js/page/main.js') }}"></script>
@endsection
