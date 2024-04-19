@extends('layouts.page')

@section('title')
<title>{{ __('Sản phẩm') }} | Kattech PC</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('/css/page/productCate.css') }}" />
@endsection

@section('content')
<div class="container">
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
                                <img src="{{ asset($product->image[0]) }}" width="210" height="164" class="lazy product-image">
                                @endif
                            </a>
                            <div class="product-info">
                                <a href="">
                                    <h3 class="product-title line-clamp-3">{{ $product->name }} </h3>
                                </a>

                                <div class="product-martket-main d-flex align-items-center">
                                    <p class="product-market-price">{{ $product->price }} ₫</p>
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
            <div data-id="duoi-10trieu" class="section">
                <button>{{ __('Dưới 10 triệu') }}</button>
            </div>
            <div data-id="tu-10trieu-15trieu" class="section">
                <button>{{ __('10 triệu - 15 triệu') }}</button>
            </div>
            <div data-id="tu-15trieu-20trieu" class="section">
                <button>{{ __('15 triệu - 20 triệu') }}</button>
            </div>
            <div data-id="tu-20trieu-30trieu" class="section">
                <button>{{ __('20 triệu - 30 triệu') }}</button>
            </div>
            <div data-id="tu-30trieu-50trieu" class="section">
                <button>{{ __('30 triệu - 50 triệu') }}</button>
            </div>
            <div data-id="tu-50trieu-100trieu" class="section">
                <button>{{ __('50 triệu - 100 triệu') }}</button>
            </div>
            <div data-id="tren-100trieu" class="section">
                <button>{{ __('Trên 100 triệu') }}</button>
            </div>
        </div>
    </div>
    <div class="row1">
        <div class="flex sort" id="sort">
            <h2>{{ __('Lọc theo tiêu chí:') }}</h2>
            <div>
                <select name="cars" id="cars">
                    <option value="volvo">{{ __('Thương hiệu') }}</option>
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
    <div class="row2">
        <div class="flex " id="select-price">
            <div data-id="new" class="select">
                <button>{{ __('Hàng mới về') }}</button>
            </div>
            <div data-id="price-asc" class="select">
                <button>{{ __('Giá tăng dần') }}</button>
            </div>
            <div data-id="price-desc" class="select">
                <button>{{ __('Giá giảm dần') }}</button>
            </div>
            <div data-id="name" class="select">
                <button>{{ __('Tên từ A->Z') }}</button>
            </div>
        </div>
        @foreach($dataCategories as $product)
        <div class="column">
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
                            <div class="product-percent-price">-{{ number_format($new_price) }} %</div>
                        </div>

                        <div class="product-price-main font-weight-600">
                            {{ $product->new_price }} đ
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="center">
        <div class="pagination">
            {{$dataCategories->links('page.paginate.default')}}

        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script>
    $(document).ready(function() {
        $('#select-price div').click(function(event) {
            event.preventDefault();
            let url = '?price=' +
                $(this).data('id');
            window.location.href = url;
        });

        $('#sort div').click(function(event) {
            event.preventDefault();
            let url = '?sort=' +
                $(this).data('id');
        });
    });
</script>
@endsection
