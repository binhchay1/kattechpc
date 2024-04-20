@extends('layouts.page')

@section('title')
<title>{{ __('Chi tiết sản phẩm') }} | Kattech PC</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('/css/page/product-detail.css') }}" />
@endsection

@section('content')
@if(Session::has('success'))
<p class="alert-add {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('success') }}</p>
@endif
<div class="container">
    <section class="product-container set-background">
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
            <div class="d-flex price-product">
                @if($product->new_price != null)
                    <h5>{{ number_format($product->new_price) }}đ  </h5>
                    <del class="old-price">{{ number_format($product->price) }} đ</del>
                    <div class="save-price-detail">{{__('Tiết kiệm:')}} {{number_format($product->price - $product->new_price )}}đ</div>
                @else
                    <h5>{{ __('Giá ') }}: {{ number_format($product->price) }} đ</h5>
                @endif
            </div>
            <div>
                <p>{{ __('Bảo hành') }}: <span style="font-weight: bold; color: blue">{{ $product->status_guarantee }}</span></p>
                @if($product->status == 'available')
                <p>{{ __('Tình trạng') }}: <span style="font-weight: bold; color: green">{{ __('Còn hàng') }}</span></p>
                @elseif($product->status == 'out of stock')
                <p>{{ __('Tình trạng') }}: <span style="font-weight: bold; color: red">{{ __('Hết hàng') }}</span></p>
                @else
                <p>{{ __('Tình trạng') }}: <span style="font-weight: bold; color: blue">{{ __('Đang về hàng') }}</span></p>
                @endif
                <p></p>
            </div>
            <div class="product-buy-quantity d-flex align-items-center">
                <span class="title-quantity">Số lượng:</span>
                <div class="cart-quantity-select justify-content-center align-items-center d-flex">
                    <p class="js-quantity-change" data-value="-1"> − </p>
                    <input type="text" class="js-buy-quantity js-quantity-change bk-product-qty font-weight-800" value="1">
                    <p class="js-quantity-change" data-value="1"> + </p>
                </div>
                <a href="javascript:addProductToCart(25527, 0, '')" class="addCart gap-8 d-flex flex-wrap align-items-center justify-content-center">
                    <i class="fa fa-shopping-cart"></i>
                    <p class="title-cart">Thêm vào giỏ hàng</p>
                </a>
                <input type="hidden" class="js-buy-quantity-temp" value="1">
            </div>
            <div class="quantity mt-4 d-flex btn-buy-product" >
                <a class="btn-1" href="{{ route('addCart', $product['slug']) }}">
                    <button class="btn-buy">{{ __('Mua ngay') }}</button>
                </a>

                <a class="btn-2" href="{{ route('add_to_cart', $product['slug']) }}">
                    <button class="btn-add-to-cart">{{ __('Thêm vào giỏ hàng') }}</button>
                </a>

                <a class="btn-3" href="{{ route('add_to_cart', $product['slug']) }}">
                    <button class="btn-add-to-cart">{{ __('Thêm vào giỏ hàng') }}</button>
                </a>
            </div>

            <div class="box-product-policy-detal boder-radius-10 mt-12">
                <p class="title font-weight-600">Yên tâm mua hàng</p>
                <div class="list-showroom-detail d-flex flex-wrap justify-content-between" id="js-box-showrom-has-pro-list">
                    <div class="item d-flex align-items-center gap-6">
                        <i class="fas fa-comments-dollar"></i>
                        <p class="gap-6-item">Cam kết giá tốt nhất thị trường.</p>
                    </div>
                    <div class="item d-flex align-items-center gap-6">
                        <i class="fas fa-handshake"></i>
                        <p class="gap-6-item">Sản phẩm mới 100%.</p>
                    </div>
                    <div class="item d-flex align-items-center gap-6">
                        <i class="	fas fa-paper-plane"></i>
                        <p class="gap-6-item">Lỗi 1 đổi 1 ngay lập tức.</p>
                    </div>
                    <div class="item d-flex align-items-center gap-6">
                        <i class="fas fa-address-card"></i>
                        <p class="gap-6-item">Hỗ trợ trả góp - Thủ tục nhanh gọn.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="product-container set-background1">
        <div class="product-info" id="product-info">
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
                        <img src="{{ $product->image[0] }}" alt="Image Alt" class="img-fluid" />
                    </a>
                </div>
                <div id="content-right">
                    <h4>{{ $related->name }}</h4>
                    <div class="product-martket-main d-flex align-items-center">
                        <del class="product-market-price">{{ $product->price }} ₫</del>
                        <?php $new_price = floor(100 - (((int) $product->new_price / (int) $product->price) * 100)) ?>
                        <div class="product-percent-price">-{{ $new_price }} %</div>
                    </div>

                    <div class="product-price-main font-weight-600">
                        {{ $product->new_price }} đ
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <section class="comment">
        <form action="{{ route('storeComment') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            <div class="gift-product">
                <div class="gift-promotion">
                    <div class="">
                        <textarea id="comment" name="content" placeholder="{{ __('Mời bạn để lại bình luận...') }}" onfocus="$('.js-actions-comment-2020').show();" name="user_post[content]"></textarea>
                        <input type="hidden" value="{{ $product->id }}" name="product_id">
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
<script>
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

    setTimeout(function() {
        $('.alert-add').remove();
    }, 5000);
</script>
@endsection
