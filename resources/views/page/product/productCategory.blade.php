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
        <div class="row">
            @foreach($dataCategory->products as $product)
            <div class="column"  >
                <div class="" role="group">
                    <div class="product-item">
                        <a href="" class="product-image position-relative">
                            @if(isset($product->image))
                                <img src="{{ asset($product->image[0]) }}" width="210" height="164" class="lazy entered loaded">
                            @endif
                        </a>
                        <div class="product-info">
                            <a href="{{ route('productDetail', $product['slug']) }}">
                                <h3 class="product-title line-clamp-3"> {{ $product->name }}</h3>
                            </a>

                            <div class="product-martket-main d-flex align-items-center">
                                <p class="product-market-price">{{ $product->price }} ₫</p>
                                <div class="product-percent-price">-22%</div>
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
