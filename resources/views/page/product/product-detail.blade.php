@extends('layouts.page')

@section('title')
<title>{{ __('Trang chủ') }} | Kattech PC</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('/plugins/owlcarousel/owl.theme.default.min.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/page/product-detail.css') }}" />
@endsection

@section('content')
<div class="container">
    <section class="product-container">
        <div class="img-card">
            <img src="{{ $product->image }}" alt="" id="featured-image">
            <div class="small-Card">
                @foreach ($product->productImages as $prodImg)
                <img src="{{ asset($prodImg->image) }}" alt="" class="small-Img">
                @endforeach
            </div>
        </div>

        <div class="product-info">
            <h3>{{ $product->name }}</h3>
            @if($product->new_price != null)
            <h5>{{ __('Giá ') }}: {{ $product->new_price }} <del>{{ $product->price }} đ</del></h5>
            @else
            <h5>{{ __('Giá ') }}: {{ $product->price }} đ</h5>
            @endif
            <div>
                {{ html_entity_decode($product->description) }}
            </div>

            <div class="quantity mt-4">
                <a href="{{route('addCart', $product['slug'])}}">
                    <button class="btn-buy">{{ __('Mua ngay') }}</button>
                    <button class="btn-add-cart">{{ __('Thêm vào giỏ hàng') }}</button>
                </a>
            </div>

            <div class="gift-product">
                <div class="gift" style="background: #ddd;">
                    <h2 style="margin-left: 10px;">{{ __('Quà tặng và ưu đãi') }}</h2>
                </div>
                <div class="gift-promotion">
                    <hr>
                    <div>
                        {{ $product->sale_detail }}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-container">
        <div class="product-info">
            <h3>{{ __('Thông tin sản phẩm') }}</h3>
            <table>
                <tr>
                    <th col="300"></th>
                    <th></th>
                </tr>
                @if(isset($product->detail))
                @foreach($product->detail as $key => $value)
                <tr>
                    <td>{{ $key }}</td>
                    <td>{{ $value }}</td>
                </tr>
                @endforeach
                @endif
            </table>
        </div>

        <div class="product-related">
            <h3> {{ __('Sản phẩm liên quan') }}</h3>
            @foreach($productRelated as $related)
            <div id="content">
                <div id="left">
                    <a href="{{ route('productDetail', $related->name) }}">
                        <img src="{{ $related->image }}" alt="Image Alt" class="img-fluid" />

                    </a>
                </div>
                <div id="content-right">
                    <h4>{{ $related->name }}</h4>
                    <div>{{ $related->price }}</div>
                </div>
            </div>

            @endforeach
        </div>
    </section>

    <section class="comment">
        <div class="gift-product">
            <div class="gift-promotion">
                <div class="">
                    <textarea id="comment" placeholder="Mời bạn để lại bình luận..." onfocus="$('.js-actions-comment-2020').show();" name="user_post[content]"></textarea>
                    <div class="actions-comment-2020 js-actions-comment-2020 ">
                        <div class="actions-comment-wrap">
                            <div class="cmt_right float-right">
                                <button class="btn btn-primary btn-comment">{{ __('Bình luận') }}</button>
                            </div>
                            <div class="js-preview-upload" id="js-preview-file-upload-comment"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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
