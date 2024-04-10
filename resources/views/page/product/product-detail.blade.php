@extends('layouts.page')

@section('title')
<title>{{ __('Sản phẩm') }} | Kattech PC</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('/css/page/product-detail.css') }}" />
@endsection

@section('content')
<hr class="container">
    <section class="product-container">
        <div class="img-card">
            <img src="{{ asset($product->image[0]) }}" id="featured-image">
            <div class="small-Card">
                <div class="swiper d-flex align-items-center" style="min-height: auto;">
                    <div class="swiper-wrapper swiper-image">
                        @foreach ($product->image as $key => $image)
                        <div class="swiper-slide-image" role="group">
                            <img src="{{ asset($image) }}" data-index="{{ $key }}" class="small-Img" onclick="getImageCenter(this)">
                        </div>
                        @endforeach
                    </div>
                    <div class="swiper-button-next" tabindex="0" role="button" aria-label="Next slide" onclick="handleSlideImage('next')"></div>
                    <div class="swiper-button-prev" tabindex="0" role="button" aria-label="Previous slide" onclick="handleSlideImage('prev')"></div>
                    <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                </div>
            </div>
        </div>

        <div class="product-info">
            <h3>{{ $product->name }}</h3>
            @if($product->new_price != null)
            <h5>{{ __('Giá ') }}: {{ number_format($product->new_price); }} đ <del>{{ number_format($product->price) }} đ</del></h5>
            @else
            <h5>{{ __('Giá ') }}: {{ number_format($product->price) }} đ</h5>
            @endif
            <div>
                {!! html_entity_decode($product->description) !!}
            </div>

            <div class="quantity mt-4 d-flex">
                <a href="{{ route('addCart', $product['slug']) }}">
                    <button class="btn-buy">{{ __('Mua ngay') }}</button>
                </a>

                <a href="{{ route('addCart', $product['slug']) }}">
                    <button class="btn-add-to-cart">{{ __('Thêm vào giỏ hàng') }}</button>
                </a>
            </div>

            <div class="gift-product">
                <div class="gift" style="background: #ddd;">
                    <h2 style="margin-left: 10px;">{{ __('Quà tặng và ưu đãi') }}</h2>
                </div>
                <div class="gift-promotion">
                    <hr>
                    <div>
                        {!! $product->sale_detail !!}
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
        <form action="{{route('storeComment')}}" method="post"  enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="gift-product">
                <div class="gift-promotion">
                    <div class="">
                        <textarea id="comment" name="content" placeholder="{{ __('Mời bạn để lại bình luận...') }}" onfocus="$('.js-actions-comment-2020').show();" name="user_post[content]"></textarea>
                        <input type="hidden" value="{{$product->id}}" name="product_id">
                        <div class="actions-comment-2020 js-actions-comment-2020 ">
                            <div class="actions-comment-wrap">
                                <div class="cmt_right float-right">
                                    <button type="submit" class="btn btn-primary btn-comment">{{ __('Viết bình luận') }}</button>
                                </div>
                                <div class="js-preview-upload" id="js-preview-file-upload-comment"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(Session::has('message'))
                <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
            @endif
        </form>
    </section>
    <hr class="hr-row">
@include('page.product.comment-display', ['comments' => $product->comments, 'product_id' => $product->id]);
</div>
@endsection

@section('js')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/plugins/owlcarousel/owl.carousel.min.js') }}"></script>
<script>
    var indexImage = 0;
    $('.vendor-carousel').owlCarousel({
        loop: true,
        nav: false,
        autoplay: true,
        smartSpeed: 1000,
    });

    function getImageCenter(image) {
        let src = image.src;
        indexImage = image.getAttribute('data-index');
        $('#featured-image').attr('src', src);
    }

    function handleSlideImage(status) {
        if (status == 'next') {
            let maxIndex = $('.swiper-slide-image').length;
            if (indexImage < maxIndex) {
                let nextIndex = parseInt(indexImage) + 1;
                $("[data-index=" + nextIndex + "]").click();
            }

        } else {
            if (parseInt(indexImage) > 0) {
                let prevIndex = parseInt(indexImage) - 1;
                $("[data-index=" + prevIndex + "]").click();
            }
        }
    }
</script>
@endsection
