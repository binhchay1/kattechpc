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
        <div class="news-main">
            <div class="news-main-left">
                <div id="header-carousel" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        @foreach($listSlide as $slide)
                        <div class="carousel-item active">
                            <a href="{{ $slide['url'] }}">
                                <img src="{{ asset($slide['image']) }}" width="850" height="403" alt="Image">
                            </a>
                        </div>
                        @endforeach
                    </div>
                    @if(!empty($listSlide))
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
                    @endif
                </div>
            </div>
            <div class="news-main-right">
                <div class="news-main-right-1">
                    @if(isset($layout->small_thumbnail_1))
                    <a href="{{ isset($layout->permarklink_small_thumbnail_1) ? $layout->permarklink_small_thumbnail_1 : '#' }}">
                        <img src="{{ asset($layout->small_thumbnail_1) }}" width="400">
                    </a>
                    @endif
                </div>
                <div class="news-main-right-2">
                    @if(isset($layout->small_thumbnail_2))
                    <a href="{{ isset($layout->permarklink_small_thumbnail_2) ? $layout->permarklink_small_thumbnail_2 : '#' }}">
                        <img src="{{ asset($layout->small_thumbnail_2) }}" width="400">
                    </a>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="news-main-under">
        <div class="news-main-right-1">
            @if(isset($layout->small_thumbnail_3))
            <a href="{{ isset($layout->permarklink_small_thumbnail_3) ? $layout->permarklink_small_thumbnail_3 : '#' }}">
                <img src="{{ asset($layout->small_thumbnail_3) }}" width="350">
            </a>
            @endif
        </div>
        <div class="news-main-right-2" style="margin-left: 10px;">
            @if(isset($layout->small_thumbnail_4))
            <a href="{{ isset($layout->permarklink_small_thumbnail_4) ? $layout->permarklink_small_thumbnail_4 : '#' }}">
                <img src="{{ asset($layout->small_thumbnail_4) }}" width="350">
            </a>
            @endif
        </div>
        <div class="news-main-right-2" style="margin-left: 10px;">
            @if(isset($layout->small_thumbnail_5))
            <a href="{{ isset($layout->permarklink_small_thumbnail_5) ? $layout->permarklink_small_thumbnail_5 : '#' }}">
                <img src="{{ asset($layout->small_thumbnail_5) }}" width="350">
            </a>
            @endif
        </div>
        <div class="news-main-right-2" style="margin-left: 10px;">
            @if(isset($layout->small_thumbnail_6))
            <a href="{{ isset($layout->permarklink_small_thumbnail_6) ? $layout->permarklink_small_thumbnail_6 : '#' }}">
                <img src="{{ asset($layout->small_thumbnail_6) }}" width="350">
            </a>
            @endif
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
                <div class="global-time-dea d-flex align-items-center" id="timer-flashsale">

                </div>
            </div>
        </div>

        <div class="swiper box-list-item-deal swiper-box-deal swiper-initialized swiper-horizontal swiper-pointer-events">
            <div class="swiper-wrapper d-flex swiper-flash-sale" style="margin-left: 10px;">
                @if(isset($listFlashSale['flash_sale_list_product_id']))
                @foreach($listFlashSale['flash_sale_list_product_id'] as $product)
                <div class="swiper-slide" role="group">
                    <div class="product-item">
                        <a href="{{ route('productDetail', $product['slug']) }}" class="product-image position-relative">
                            <img width="164" height="164" alt="{{ $product->name }}" class="lazy entered loaded" src="{{ asset($product->image) }}">
                        </a>
                        <div class="product-info">
                            <a href="{{ route('productDetail', $product['slug']) }}">
                                <h3 class="product-title line-clamp-3">{{ $product->name }} </h3>
                            </a>

                            <div class="product-martket-main d-flex align-items-center">
                                <p class="product-market-price">{{ number_format($product->price) }} ₫</p>
                                <div class="product-percent-price">-{{ 100 - (((int) $product->new_price / (int) $product->price) * 100) }}%</div>
                            </div>

                            @if(is_float($product->new_price))
                            <div class="product-price-main font-weight-600">
                                {{ number_format($product->new_price) }} đ
                            </div>
                            @endif
                            <div class="p-quantity-sale">
                                <i class="sprite sprite-fire-deal"></i>
                                <div class="bg-gradient"></div>
                                <p class="js-line-deal-left" style="width: 28.5714%;"></p>
                                <span>{{ __('Còn') }} 5 / {{ $product->sale_quantity }} {{ __('sản phẩm') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                @endif
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
                    <img src="{{ asset('images/top-sale.jpg') }}" width="365" class="boder-radius-10 lazy-image entered loaded" alt="" data-was-processed="true" data-ll-status="loaded">
                </a>
            </div>
            <div class="swiper-wrapper swiper-top-sale" style="left: 48%;">
                @foreach($listProductSale as $product)
                <div class="swiper-slide1" role="group">
                    <div class="product-item">
                        <a href="{{ route('productDetail', $product['slug']) }}" class="product-image position-relative">
                            @if(isset($product->image))
                            <img src="{{ asset($product->image[0]) }}" width="210" height="164" class="lazy entered loaded">
                            @endif
                        </a>
                        <div class="product-info">
                            <a href="{{ route('productDetail', $product['slug']) }}">
                                <h3 class="product-title line-clamp-3">{{ $product->name }} </h3>
                            </a>

                            <div class="product-martket-main d-flex align-items-center">
                                <p class="product-market-price">{{ number_format($product->price) }} ₫</p>
                                <?php $new_price = floor(100 - (((int) $product->new_price / (int) $product->price) * 100)) ?>
                                <div class="product-percent-price">-{{ $new_price }} %</div>
                            </div>

                            <div class="product-price-main font-weight-600">
                                {{ number_format($product->new_price) }} đ
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
</section>

<section class="category">
    <div class="">
        <div class="d-flex align-items-center justify-content-between">
            <div class="flash-sale-title-area d-flex align-items-center justify-content-center">
                <h2 class="flash-sale-title">{{ __('Danh mục nổi bật') }}</h2>
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
    </div>

</section>

@foreach($listCategory as $category)
<section class="product-slide">
    <div class="product-slide-main boder-radius-10">
        <div class="d-flex align-items-center justify-content-between">
            <div class="title">
                <a href="{{ route('showDataCategory', $category['slug']) }}">
                    <h2 class="title-box font-weight-600">{{ $category->name }}</h2>
                </a>
                <i class="fa fa-truck"></i>
                <p>{{ __('Miễn phí giao hàng') }}</p>
            </div>

            <div class="list-category-child d-flex align-items-center justify-content-end flex-1">
                @foreach($category->children as $children)
                <a href="{{ route('showDataCategory', $category['slug']) }}" class="title-category">{{ $children->name }}</a>
                @endforeach
                <a href="" class="title-all-category">{{ __('Xem tất cả') }} <i class="fa fa-caret-right"></i></a>
            </div>
        </div>
        <div class="swiper">
            <div class="swiper-wrapper swiper-product-{{ $category->slug }}">
                @foreach($category->products as $product)
                <div class="swiper-slide" role="group">
                    <div class="product-item">
                        <a href="{{ route('productDetail', $product['slug']) }}" class="product-image position-relative">
                            <img src="{{  asset(json_decode($product->image, true)[0]) }}" width="210" height="164" class="hover-for-tooltips">
                            @if($product->hot_status == 1)
                            <span class="p-type-holder">
                                <i class="p-icon-type p-icon-hot"></i>
                            </span>
                            @endif
                            @if($product->hot_sale_status == 1)
                            <span class="p-type-holder p-type-holder-2">
                                <i class="p-icon-type p-icon-best-sale"></i>
                            </span>
                            @endif
                        </a>
                        <div class="product-info">
                            <a href="{{ route('productDetail', $product['slug']) }}">
                                <h3 class="product-title line-clamp-3">{{ $product->name }}</h3>
                            </a>
                            <div class="product-martket-main d-flex align-items-center">
                                <p class="product-market-price">{{ number_format($product->price) }} ₫</p>
                                <?php $new_price = floor(100 - (((int) $product->new_price / (int) $product->price) * 100)) ?>
                                <div class="product-percent-price">-{{ $new_price }} %</div>
                            </div>

                            <div class="product-price-main font-weight-600">
                                {{ number_format($product->new_price) }} đ
                            </div>
                            <div class="product-offer line-clamp-2">
                                <p>{{ $product->short_description }}</p>
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
            <a href="{{route('promotion')}}" class="btn-article-group">{{ __('Xem tất cả') }} <i class="fa fa-caret-right"></i></a>
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
            <a href="{{route('post')}}" class="btn-article-group">{{ __('Xem tất cả') }} <i class="fa fa-caret-right"></i></a>
        </div>
        <div class="list-article-group d-flex align-items-center gap-10">
            @foreach($listNews as $news)
            <div class="item-article d-flex gap-12">
                <a href="{{route('post.detail', $news['slug'])}}" class="img-article boder-radius-10 position-relative">
                    <img class="boder-radius-10" src="{{$news->thumbnail ?? asset('/images/test_post/2904-viettel-dau-gia-thanh-cong-bang-tan-5g-1.jpg') }}" alt="Viettel trúng đấu giá băng tần để chính thức triển khai 5G tại Việt Nam">
                </a>
                <div class="content-article content-article-item d-flex flex-column flex-1">
                    <a href="{{route('post.detail', $news['slug'])}}" class="title-article">
                        <h3 class="font-weight-400 line-clamp-2">{{ Str::limit($news->short_description, 30) }}</h3>
                    </a>
                    <p class="time-article d-flex align-items-center gap-4">
                        <i class="sprite sprite-clock-item-article"></i>
                        <span>{{ date_format($news->created_at, "F j, Y, g:i a") }}</span>
                    </p>
                    <p class="descreption-article line-clamp-2">{!! Str::limit(strip_tags(html_entity_decode($news->content)), 50)!!}</p>
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
<script>
    <?php if (isset($listFlashSale['flash_sale_timer'])) { ?>
        let countTimeSale = `<?php echo $listFlashSale['flash_sale_timer'] ?>`;

        var countDownDate = new Date(countTimeSale).getTime();
        var x = setInterval(function() {
            var now = new Date().getTime();
            var distance = countDownDate - now;
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            $('#timer-flashsale').empty();
            $('#timer-flashsale').append('<p>' + days + '</p><span>:</span><p>' + hours + '</p><span>:</span><p>' + minutes + '</p><span>:</span><p>' + seconds + '</p>');

            if (distance < 0) {
                clearInterval(x);
                $('#timer-flashsale').empty();
                $('#timer-flashsale').append('<p>EXPIRED</p>');
            }
        }, 1000);
    <?php } ?>

    const listCategory = <?php echo json_encode($listCategory) ?>;
</script>
@endsection
