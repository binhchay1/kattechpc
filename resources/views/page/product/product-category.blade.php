@extends('layouts.page')

@section('title')
<title>{{ __('Danh mục sản phẩm') }} | Kattech PC</title>
@endsection

@section('description', __('Xây dựng cấu hình với Kattech PC'))
@section('keywords', 'build pc, build, kattechpc, kattech')
@section('breadcrumb', __('Xây dựng cấu hình'))

@section('css')
<link rel="stylesheet" href="{{ asset('/css/page/product-cate.css') }}" />
@endsection

@section('content')
<div class="container" id="product-category-area">
    <section class="top-sale">
        <div class="flash-sale-area">
            <div class="d-flex align-items-center justify-content-between">
                <div class="flash-sale-title-area d-flex align-items-center justify-content-center">
                    <h1 class="flash-sale-title">{{ __('Sản phẩm bán chạy') }}</h1>
                </div>
            </div>

            <div class="swiper d-flex">
                <div class="swiper-wrapper swiper-top-sale">
                    @if(isset($dataProducts->products))
                    @foreach($dataProducts->products as $product)
                    <div class="swiper-slide1" role="group">
                        <div class="product-item">
                            <a href="{{ route('productDetail', $product->slug) }}" class="product-image position-relative">
                                @if(isset($product->image))
                                <img src="{{ asset(json_decode($product->image, true)[0]) }}" width="210" height="164" class="lazy product-image">
                                @endif
                            </a>
                            <div class="product-info">
                                <a>
                                    <h3 class="product-title line-clamp-3">{{ $product->name }} </h3>
                                </a>
                                @if($product->new_price != null)
                                <div class="product-martket-main d-flex align-items-center">
                                    <p class="product-market-price">{{ $product->price }} ₫</p>
                                    <?php $new_price = floor(100 - (((int) $product->new_price / (int) $product->price) * 100)) ?>
                                    <div class="product-percent-price">-{{ $new_price }}%</div>
                                </div>

                                <div class="product-price-main font-weight-600">
                                    {{ $product->new_price }} đ
                                </div>
                                @else
                                <div class="product-price-main font-weight-600">
                                    {{ $product->price }} đ
                                </div>
                                @endif

                                <div class="product-description">
                                    {{ Str::limit($product->short_description, 100) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif

                    @if(isset($dataProducts->productChildren))
                    @foreach($dataProducts->productChildren as $product)
                    <div class="swiper-slide1" role="group">
                        <div class="product-item">
                            <a href="" class="product-image position-relative">
                                @if(isset($product->image))
                                <img src="{{ asset($product->image[0]) }}" width="210" height="164" class="lazy product-image">
                                @endif
                            </a>
                            <div class="product-info">
                                <a>
                                    <h3 class="product-title line-clamp-3">{{ $product->name }} </h3>
                                </a>
                                @if($product->new_price != null)
                                <div class="product-martket-main d-flex align-items-center">
                                    <p class="product-market-price">{{ $product->price }} ₫</p>
                                    <?php $new_price = floor(100 - (((int) $product->new_price / (int) $product->price) * 100)) ?>
                                    <div class="product-percent-price">-{{ $new_price }}%</div>
                                </div>

                                <div class="product-price-main font-weight-600">
                                    {{ $product->new_price }} đ
                                </div>
                                @else
                                <div class="product-price-main font-weight-600">
                                    {{ $product->price }} đ
                                </div>
                                @endif

                                <div class="product-description">
                                    {{ Str::limit($product->short_description, 100) }}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
        </div>
    </section>
    <h1>Chọn theo nhu cầu</h1>
    <div class="row">
        <div class="flex" id="select-price">
            <h2>Lọc theo giá:</h2>
            <div data-id="duoi-10trieu" data-type="price" class="section">
                <button>{{ __('Dưới 10 triệu') }}</button>
            </div>
            <div data-id="tu-10trieu-15trieu" data-type="price" class="section">
                <button>{{ __('10 triệu - 15 triệu') }}</button>
            </div>
            <div data-id="tu-15trieu-20trieu" data-type="price" class="section">
                <button>{{ __('15 triệu - 20 triệu') }}</button>
            </div>
            <div data-id="tu-20trieu-30trieu" data-type="price" class="section">
                <button>{{ __('20 triệu - 30 triệu') }}</button>
            </div>
            <div data-id="tu-30trieu-50trieu" data-type="price" class="section">
                <button>{{ __('30 triệu - 50 triệu') }}</button>
            </div>
            <div data-id="tu-50trieu-100trieu" data-type="price" class="section">
                <button>{{ __('50 triệu - 100 triệu') }}</button>
            </div>
            <div data-id="tren-100trieu" data-type="price" class="section">
                <button>{{ __('Trên 100 triệu') }}</button>
            </div>
        </div>
    </div>
    <div class="row1 mt-1">
        <div class="flex sort">
            <div>
                <h2>{{ __('Lọc theo tiêu chí:') }}</h2>
            </div>

            <div class="flex sort" id="sort">
                @if(isset($dataCategory->children))
                <div class="d-flex flex-direction-column">
                    <label class="font-bold">{{ __('Nhu cầu') }}</label>
                    <select class="mt-1">
                        <option value="all">{{ __('Tất cả') }}</option>
                        @foreach($dataCategory->children as $children)
                        <option value="{{ $children->name }}">{{ $children->name }}</option>
                        @endforeach
                    </select>
                </div>
                @endif
                <div class="d-flex flex-direction-column">
                    <label class="font-bold">{{ __('Thương hiệu') }}</label>
                    <select class="mt-1" id="brand-in-product-category">
                        <option value="all">{{ __('Tất cả') }}</option>
                        @foreach($dataBrand as $brand)
                        <option value="{{ $brand }}">{{ $brand }}</option>
                        @endforeach
                    </select>
                </div>

                @if(isset($listKeyWord))
                @foreach($listKeyWord as $item)
                <div class="d-flex flex-direction-column">
                    <label class="font-bold">{{ $item->title }}</label>
                    <select class="mt-1 select-keyword" data-id="{{ $item->id }}" onchange="sortByKeyWord()">
                        <option value="all">{{ __('Tất cả') }}</option>

                        @php
                        $item->keyword = explode(PHP_EOL, $item->keyword);
                        @endphp

                        @foreach($item->keyword as $keyword)
                        <option value="{{ $keyword }}">{{ $keyword }}</option>
                        @endforeach
                    </select>
                </div>
                @endforeach
                @endif
            </div>
        </div>
    </div>
    <div class="row2">
        <div class="flex" id="select-sort">
            <div data-id="new" data-type="sort" class="select button-filter">
                <button>{{ __('Hàng mới về') }}</button>
            </div>
            <div data-id="price-asc" data-type="sort" class="select button-filter">
                <button>{{ __('Giá tăng dần') }}</button>
            </div>
            <div data-id="price-desc" data-type="sort" class="select button-filter">
                <button>{{ __('Giá giảm dần') }}</button>
            </div>
            <div data-id="name" data-type="sort" class="select button-filter">
                <button>{{ __('Tên từ A -> Z') }}</button>
            </div>
        </div>
        <div class="list-product-category list-product-flex d-flex flex-wrap gap-12">
            @foreach($dataCategories as $product)
            <div class="product-item">
                <a href="{{ route('productDetail', $product['slug']) }}" class="product-image">
                    <img width="200" height="150" alt="{{ $product->name }}" class="lazy" src="{{ asset(json_decode($product->image, true)[0]) }}">
                    <span class="p-type-holder">
                        @if($product->hot_status)
                        <i class="p-icon-type p-icon-hot"></i>
                        @endif
                    </span>
                    <span class="p-type-holder p-type-holder-2">
                        @if($product->hot_sale_status)
                        <i class="p-icon-type p-icon-best-sale"></i>
                        @endif
                    </span>
                </a>

                <div class="product-info flex-1">
                    <a href="{{ route('productDetail', $product['slug']) }}">
                        <h3 class="product-title line-clamp-3">{{ $product->name }}</h3>
                    </a>
                    @if($product->new_price != null)
                    <div class="product-martket-main d-flex align-items-center">
                        <p class="product-market-price">{{ $product->price }} đ</p>
                        <?php $new_price = floor(100 - (((int) $product->new_price / (int) $product->price) * 100)) ?>
                        <div class="product-percent-price">
                            -{{ ($new_price) }} %
                        </div>
                    </div>

                    <div class="product-price-main font-weight-600">
                        {{ $product->new_price }} đ
                    </div>
                    @else
                    <div class="product-price-main font-weight-600">
                        {{ $product->price }} đ
                    </div>
                    @endif

                    <div class="product-description">
                        {{ Str::limit($product->short_description, 50) }}
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="center">
        <div class="pagination">
            {{ $dataCategories->links('page.paginate.default') }}
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script>
    var url = location.href;
    var arrayParam = [];

    if (url.indexOf('?') != -1) {
        var ary = url.split('?')[1].split('&');
        for (i = 0; i <= ary.length - 1; i++) {
            var val = ary[i].split('=')[1];
            var param = ary[i].split('=')[0];
            arrayParam[param] = val;
        }
    }

    if (arrayParam['brand'] != undefined) {
        $('#brand-in-product-category').val(arrayParam['brand']);
    }

    $(document).ready(function() {
        var keyPrice = 'price';
        var keySort = 'sort';

        if (keyPrice in arrayParam) {
            let priceCurrent = $("div").find("[data-id='" + arrayParam[keyPrice] + "']");
            priceCurrent.append('<span class="btn-xmark-by-url">x</span>');
            let btnPriceCurrent = priceCurrent.find("button");
            btnPriceCurrent.addClass('border-btn-red');
            btnPriceCurrent.prop("disabled", true);
        }

        if (keySort in arrayParam) {
            let sortCurrent = $("div").find("[data-id='" + arrayParam[keySort] + "']");
            sortCurrent.removeClass("button-filter");
            sortCurrent.append('<span class="btn-xmark-by-url">x</span>');
            let btnSortCurrent = sortCurrent.find("button");
            btnSortCurrent.addClass('border-btn-red');
            btnSortCurrent.prop("disabled", true);
        }

        $('#select-price div button').click(function(event) {
            event.preventDefault();
            let type = $(this).parent().data('type');
            let id = $(this).parent().data('id');
            let url = location.protocol + '//' + location.host + location.pathname;

            if (type == 'price') {
                arrayParam['price'] = id;
            }

            if (type == 'sort') {
                arrayParam['sort'] = id;
            }

            for (var k in arrayParam) {
                if (arrayParam.hasOwnProperty(k)) {
                    if (k == Object.keys(arrayParam)[0]) {
                        url += '?' + k + '=' + arrayParam[k];
                    } else {
                        url += '&' + k + '=' + arrayParam[k];
                    }
                }
            }

            window.location.href = url;
        });

        $('#select-sort div button').click(function(event) {
            event.preventDefault();
            let type = $(this).parent().data('type');
            let id = $(this).parent().data('id');
            let url = location.protocol + '//' + location.host + location.pathname;

            if (type == 'price') {
                arrayParam['price'] = id;
            }

            if (type == 'sort') {
                arrayParam['sort'] = id;
            }

            for (var k in arrayParam) {
                if (arrayParam.hasOwnProperty(k)) {
                    if (k == Object.keys(arrayParam)[0]) {
                        url += '?' + k + '=' + arrayParam[k];
                    } else {
                        url += '&' + k + '=' + arrayParam[k];
                    }
                }
            }

            window.location.href = url;
        });

        $('#select-price').on('click', '.btn-xmark-by-url', function(e) {
            e.preventDefault();

            let url = location.protocol + '//' + location.host + location.pathname;
            let count = 0;
            for (var k in arrayParam) {
                if (k != 'price') {
                    if (arrayParam.hasOwnProperty(k)) {
                        if (count == 0) {
                            url += '?' + k + '=' + arrayParam[k];
                            count++;
                        } else {
                            url += '&' + k + '=' + arrayParam[k];
                        }
                    }
                }
            }

            window.location.href = url;
        });

        $('#select-sort').on('click', '.btn-xmark-by-url', function(e) {
            e.preventDefault();

            let url = location.protocol + '//' + location.host + location.pathname;
            let count = 0;
            for (var k in arrayParam) {
                if (k != 'sort') {
                    if (arrayParam.hasOwnProperty(k)) {
                        if (count == 0) {
                            url += '?' + k + '=' + arrayParam[k];
                            count++;
                        } else {
                            url += '&' + k + '=' + arrayParam[k];
                        }
                    }
                }
            }

            window.location.href = url;
        });
    });

    function sortByKeyWord() {
        let listKeyWord = $('.select-keyword');
        let listValKeyWord = {};
        for (let i = 0; i < listKeyWord.length; i++) {
            let valKeyWord = listKeyWord[i].value;
            let idKeyWord = listKeyWord[i].getAttribute('data-id');
            listValKeyWord[idKeyWord] = valKeyWord;
        }

        let url = location.protocol + '//' + location.host + location.pathname;
        let count = 0;
        for (var k in arrayParam) {
            if (k != 'price') {
                if (arrayParam.hasOwnProperty(k)) {
                    if (count == 0) {
                        url += '?' + k + '=' + arrayParam[k];
                        count++;
                    } else {
                        url += '&' + k + '=' + arrayParam[k];
                    }
                }
            }
        }

        window.location.href = url;
    }
</script>
@endsection
