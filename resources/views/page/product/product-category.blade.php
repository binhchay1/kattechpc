@extends('layouts.page')

@section('title')
<title>{{ __('Sản phẩm') }} | Kattech PC</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('/css/page/productCate.css') }}" />
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
        <div class="flex sort" id="sort">
            <div>
                <h2>{{ __('Lọc theo tiêu chí:') }}</h2>
            </div>

            <div class="flex sort" id="sort" style="flex-wrap: wrap;">
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
                    <select class="mt-1">
                        <option value="all">{{ __('Tất cả') }}</option>
                        @foreach($dataBrand as $brand)
                        <option value="{{ $brand }}">{{ $brand }}</option>
                        @endforeach
                    </select>
                </div>

                @foreach($dataDetail as $detail => $arrValue)
                <div class="d-flex flex-direction-column">
                    <label class="font-bold">{{ __($detail) }}</label>
                    <select class="mt-1">
                        <option value="all">{{ __('Tất cả') }}</option>
                        @foreach($arrValue as $value)
                        <option value="{{ $value }}">{{ $value }}</option>
                        @endforeach
                    </select>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <div class="row2">
        <div class="flex " id="select-price">
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
                    <img width="200" height="200" alt="{{ $product->name }}" class="lazy" src="{{ asset(json_decode($product->image, true)[0]) }}">
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

    $(document).ready(function() {
        $('#select-price div').click(function(event) {
            event.preventDefault();
            let type = $(this).data('type');
            let id = $(this).data('id');
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
    });
</script>
@endsection
