@extends('layouts.page')

@section('title')
<title>{{ __('Flash sale') }} | Kattech PC</title>
@endsection

@section('description', __('Săn linh kiện có giá cực tốt mỗi ngày với Kattech PC'))
@section('keywords', 'sale, flash sale, kattechpc, kattech')
@section('breadcrumb', __('Flash sale'))

@section('css')
<link rel="stylesheet" href="{{ asset('css/page/flash-sale.css') }}" />
@endsection

@section('content')
<section class="page-deal container page-hompage container">
    <div class="box-product-deal">
        <div class="banner-deal-page">
            <a href="/ad.php?id=299" class="item-banner" style="display:block;margin-bottom:16px">
                <img class="image-flash-sale" src="https://nguyencongpc.vn/media/banner/16_Jan0020c1620255554792b53307703d1377.jpg" alt="banner-deal">
            </a>
        </div>

        <div class="flash-sale-content">
            @if(isset($listFlashSale['flash_sale_list_product_id']))
            @foreach($listFlashSale['flash_sale_list_product_id'] as $product)
            <div class="column">
                <div class="card">
                    <a href="{{route('productDetail', $product['slug']) }}" class="product-image position-relative">
                        <img class="image-sale" src="{{ asset(json_decode($product->image, true)[0]) }}" alt="BỘ PC MEOW (I5 13500 / RAM 16G DDR5 / VGA RTX 4060 8G)">
                    </a>
                    <div class="product-info">
                        <a href="{{ route('productDetail', $product['slug']) }}">
                            <h3 class="product-title line-clamp-3">{{ $product->name }} </h3>
                        </a>
                        <div class="product-martket-main d-flex align-items-center">
                            <p class="product-market-price">{{ $product->price }} ₫</p>
                            <?php $new_price = floor(100 - (((int) $product->new_price / (int) str_replace('.', '', $product->price)) * 100)) ?>
                            <div class="product-percent-price">-{{ ($new_price) }} %</div>
                        </div>

                        @if(isset($product->new_price))
                        <div class="product-price-main font-weight-600">
                            {{ number_format($product->new_price, 0, ',', '.') }} đ
                        </div>
                        @endif
                        <div class="p-quantity-sale">
                            <i class="sprite sprite-fire-deal"></i>
                            <div class="bg-gradient"></div>
                            <?php $total_line = ($product->stock / $product->sale_quantity) * 100 ?>
                            <p class="js-line-deal-left" style="<?php echo 'width: ' . $total_line . '%' ?>"></p>
                            <span style="font-size: 14px; font-weight: bold;">{{ __('Còn') }} {{ $product->stock }} / {{ $product->sale_quantity }} {{ __('sản phẩm') }}</span>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            @endif
        </div>
    </div>
</section>
@endsection
