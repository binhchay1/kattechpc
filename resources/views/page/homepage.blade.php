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
            <div class="swiper-wrapper loaded">
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

<section class="product-slide">
    <div class="product-slide-main boder-radius-10">
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
            <div class="swiper-wrapper">
                @foreach($dataProducts as $product)
                <div class="swiper-slide " style="width: 224.8px; margin-right: 12px;" role="group">
                    <div class="product-item">
                        <a href="#" class="product-image position-relative">
                            <img src="{{$product->images}}" width="203" height="203" alt=>
                            <i class="sprite sprite-icon-hot-deal icon-hot-deal" style="display:none;"></i>
                            <span class="p-type-holder">
                                <i class="p-icon-type p-icon-hot"></i>
                            </span>
                            <span class="p-type-holder p-type-holder-2">
                                <i class="p-icon-type p-icon-best-sale"></i>
                            </span>
                        </a>
                        <div class="product-info">
                            <a href="{{route('productDetail', $product['name'])}}">
                                <h3 class="product-title line-clamp-3">{{$product->name}}</h3>
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

<section class="content-news">
    <div class="box-article-group boder-radius-10">
        <div class="d-flex justify-content-between align-items-center">
            <div class="title-box">
                <h2 class="title-box font-weight-600">Tin tức công nghệ</h2>
            </div>
            <a href="/tin-cong-nghe" class="btn-article-group">Xem tất cả <i class="fa-solid fa-caret-right"></i></a>
        </div>
        <div class="list-article-group d-flex align-items-center gap-10" id="js-article-tech-homeapge">
            <div class="item-article d-flex gap-12">
                <a href="/canh-bao-tinh-trang-gia-mao-may-tinh-nguyen-cong-de-lua-dao-khach-hang" class="img-article boder-radius-10 position-relative">
                    <img class="boder-radius-10" src="/media/news/2911-c---nh-b--o-1920x1080-1.jpg" alt="Cảnh báo tình trạng giả mạo Máy tính Nguyễn Công để lừa đảo khách hàng">
                    <i class="sprite sprite-icon-play-video-detail icon-video-feature incon-play-youtube"></i>
                    <i class="sprite sprite-play-youtube incon-play-youtube"></i>
                </a>
                <div class="content-article content-article-item d-flex flex-column flex-1">
                    <a href="/canh-bao-tinh-trang-gia-mao-may-tinh-nguyen-cong-de-lua-dao-khach-hang" class="title-article">
                        <h3 class="font-weight-400 line-clamp-2">Cảnh báo tình trạng giả mạo Máy tính Nguyễn Công để lừa đảo khách hàng</h3>
                    </a>
                    <p class="time-article d-flex align-items-center gap-4">
                        <i class="sprite sprite-clock-item-article"></i>
                        <span>11-03-2024, 2:23 pm</span>
                    </p>
                    <p class="descreption-article line-clamp-2"></p>
                </div>
            </div>

            <div class="item-article d-flex gap-12">
                <a href="/viettel-trung-dau-gia-bang-tan-de-chinh-thuc-trien-khai-5g-tai-viet-nam" class="img-article boder-radius-10 position-relative">

                    <img class="boder-radius-10" src="/media/news/2904-viettel-dau-gia-thanh-cong-bang-tan-5g-1.jpg" alt="Viettel trúng đấu giá băng tần để chính thức triển khai 5G tại Việt Nam">

                    <i class="sprite sprite-icon-play-video-detail icon-video-feature incon-play-youtube"></i>
                    <i class="sprite sprite-play-youtube incon-play-youtube"></i>
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

                    <img class="boder-radius-10" src="/media/news/2887-vong-tron-loading-win-11-1.jpg" alt="Vòng tròn loading trên Windows 11 không hề vô tri như chúng ta vẫn nghĩ">

                    <i class="sprite sprite-icon-play-video-detail icon-video-feature incon-play-youtube"></i>
                    <i class="sprite sprite-play-youtube incon-play-youtube"></i>
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

                    <img class="boder-radius-10" src="/media/news/2886-facebook-sap-1.jpg" alt="Facebook và Instagram sập diện rộng gây thiệt hại lớn cho nền kinh tế thế giới">

                    <i class="sprite sprite-icon-play-video-detail icon-video-feature incon-play-youtube"></i>
                    <i class="sprite sprite-play-youtube incon-play-youtube"></i>
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
