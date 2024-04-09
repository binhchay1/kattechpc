@extends('layouts.page')

@section('title')
    <title>{{ __('Trang chủ') }} | Kattech PC</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('/plugins/owlcarousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/page/productCate.css') }}" />
@endsection

@section('content')
    <div class="container">
        <section class="sale-body">
            <div class="d-flex">
                <div class="sale-body-left">
                    <div class="banner-box fade-box" data-banner-page="Homepage" data-banner-loc="Bot_Promotion Banner_Big">
                        <a class="aspect-ratio" href="" aria-label="Màn hình khuyến mãi tháng 03" title="Màn hình khuyến mãi tháng 03" style="--height-img:504; --width-img:900;">
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
                        <a class="aspect-ratio" href="" aria-label="Tai nghe" title="Tai nghe" style="--height-img:246; --width-img:796;">
                            <picture>
                                <source media="(max-width: 991px)" srcset="https://file.hstatic.net/200000722513/file/banner_790x250_tai_nghe_6f6dcb17d3a54fcc88b3de96762d2d41.jpg" data-srcset="https://file.hstatic.net/200000722513/file/banner_790x250_tai_nghe_6f6dcb17d3a54fcc88b3de96762d2d41.jpg" sizes="389px">
                                <source media="(min-width: 992px)" srcset="https://file.hstatic.net/200000722513/file/banner_790x250_tai_nghe_6f6dcb17d3a54fcc88b3de96762d2d41.jpg" data-srcset="https://file.hstatic.net/200000722513/file/banner_790x250_tai_nghe_6f6dcb17d3a54fcc88b3de96762d2d41.jpg" sizes="389px">
                                <img style="width: 480px;" data-sizes="auto" class="lazyautosizes ls-is-cached lazyloaded" src="https://file.hstatic.net/200000722513/file/banner_790x250_tai_nghe_6f6dcb17d3a54fcc88b3de96762d2d41.jpg" data-src="https://file.hstatic.net/200000722513/file/banner_790x250_tai_nghe_6f6dcb17d3a54fcc88b3de96762d2d41.jpg" alt="Tai nghe" sizes="389px">
                            </picture>
                        </a>
                    </div>
                    <div class="banner-box fade-box" data-banner-page="Homepage" data-banner-loc="Bot_Promotion Banner_Small_3">
                        <a class="aspect-ratio" href="" aria-label="Banner" title="Banner" style="--height-img:246; --width-img:796;">
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
        <section class="top-sale">
            <div class="flash-sale-area">
                <div class="d-flex align-items-center justify-content-between">
                    <div class="flash-sale-title-area d-flex align-items-center justify-content-center">
                        <h1 class="flash-sale-title">{{ __('Sản phẩm bán chạy') }}</h1>
                    </div>
                </div>

                <div class="swiper d-flex">
                    <div class="swiper-wrapper swiper-top-sale">
                        @foreach($dataProducts->products as $product)
                            <div class="swiper-slide1" role="group">
                                <div class="product-item">
                                    <a href="" class="product-image position-relative">
                                        @if(isset($product->image))
                                            <img src="{{ asset($product->image[0]) }}" width="210" height="164" class="lazy entered loaded product-image">
                                        @endif
                                    </a>
                                    <div class="product-info">
                                        <a href="">
                                            <h3 class="product-title line-clamp-3">{{ $product->name }} </h3>
                                        </a>

                                        <div class="product-martket-main d-flex align-items-center">
                                            <?php $price = number_format($product->price) ?>
                                                <p class="product-market-price">{{ $price }} ₫</p>
                                            <?php $new_price = floor(100 - (((int) $product->new_price / (int) $product->price) * 100)) ?>
                                            <div class="product-percent-price">-{{ $new_price }}%</div>
                                        </div>

                                        <div class="product-price-main font-weight-600">
                                            {{ $product->new_price }} đ
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
        <h1>Chọn theo nhu cầu</h1>
        <div class="row">
            <div class="flex" id="select-price">
                <h2>Lọc theo giá:</h2>

                <div data-id="duoi-10trieu">
                    <button>Dưới 10 triệu</button>
                </div>
                <div data-id="tu-10trieu-15trieu">
                    <button>10 triệu - 15 triệu</button>
                </div>
                <div data-id="tu-15trieu-20trieu">
                    <button>15 triệu - 20 triệu</button>
                </div>
                <div data-id="tu-20trieu-30trieu">
                    <button>20 triệu - 30 triệu</button>
                </div>
                <div data-id="tu-30trieu-50trieu">
                    <button>30 triệu - 50 triệu</button>
                </div>
                <div data-id="tu-50trieu-100trieu">
                    <button>50 triệu - 100 triệu</button>
                </div>
                <div data-id="tren-100trieu">
                    <button>Trên 100 triệu</button>
                </div>
            </div>
        </div>
          <div class="row1">
            <div class="flex sort" id="sort">
                <h2>Lọc theo tiêu chí:</h2>

                <div data-id="new">
                    <button>Hàng mới về</button>
                </div>
                <div data-id="price-asc">
                    <button>Giá tăng dần</button>
                </div>
                <div data-id ="price-desc">
                    <button>Giá giảm dần</button>
                </div>
                <div data-id ="name">
                    <button>Tên từ A->Z</button>
                </div>
                <div>
                    <select name="cars" id="cars">
                        <option value="volvo">Thương hiệu</option>
                        <option value="saab"></option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <div>
                    <select name="cars" id="cars">
                        <option value="volvo">Bộ vi xử lý(CPU)</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <div>
                    <select name="cars" id="cars">
                        <option value="volvo">Card đồ họa</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>
                <div>
                    <select name="cars" id="cars">
                        <option value="volvo">Dung lượng RAM</option>
                        <option value="saab">Saab</option>
                        <option value="opel">Opel</option>
                        <option value="audi">Audi</option>
                    </select>
                </div>

            </div>
        </div>
        <div class="row">
            @foreach($dataCategories as $product)
            <div class="column"  >
                <div class="" role="group">
                    <div class="product-item">
                        <a href="" class="product-image position-relative">
                            @if(isset($product->image))
                                <img src="{{ asset($product->image[0]) }}" width="210" height="164" class="lazy entered loaded hover-for-tooltips">
                            @endif
                        </a>
                        <div class="product-info">
                            <a href="{{ route('productDetail', $product['slug']) }}">
                                <h3 class="product-title line-clamp-3"> {{ $product->name }}</h3>
                            </a>

                            <div class="product-martket-main d-flex align-items-center">
                                <p class="product-market-price">{{ $product->price }} ₫</p>
                                <?php $new_price = floor(100 - (((int) $product->new_price / (int) $product->price) * 100)) ?>
                                <div class="product-percent-price">-{{ $new_price }}%</div>
                            </div>

                            <div class="product-price-main font-weight-600">
                                {{ $product->new_price }}   đ
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="center">
            <div class="pagination">
                <a href="{{ $dataCategories->previousPageUrl() }}">&laquo;</a>

                <a href="{{ $dataCategories->nextPageUrl() }}">&raquo;</a>
            </div>
        </div>

    </div>
@endsection

@section('js')
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('/plugins/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('/js/page/main.js') }}"></script>
    <script>
        $('.vendor-carousel').owlCarousel({
            loop: true,
            nav: false,
            autoplay: true,
            smartSpeed: 1000,
        });
    </script>
    <script>
        $(document).ready(function(){
            $('#select-price div').click(function() {
                let url  = '?price='
                    + $(this).data('id');
                window.location.href = url;
            });

            $('#sort div').click(function() {
                let url  = '?sort='
                    + $(this).data('id');
                window.location.href = url;
            });
        });
    </script>
@endsection
