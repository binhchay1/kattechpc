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
            <img src="{{ asset($dataProduct->image[0]) }}" id="featured-image">
            <div class="small-Card">
                <div class="swiper d-flex align-items-center" style="min-height: auto;">
                    <div class="swiper-wrapper swiper-image">
                        @foreach ($dataProduct->image as $key => $image)
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
            <div class="product-related" style="margin-top: 40px; width: 97%">
                <h3> {{ __('Thông số sản phẩm') }}</h3>
                <table>
                    <tr>
                        <th col="300"></th>
                        <th></th>
                    </tr>
                    @if(isset($dataProduct->detail))
                    @if(is_array($dataProduct->detail))
                    @foreach($dataProduct->detail as $key => $value)
                    <tr>
                        <td>{{ $key }}</td>
                        <td>{{ $value }}</td>
                    </tr>
                    @endforeach
                    @endif
                    @endif
                </table>
            </div>
        </div>

        <div class="product-info" style="padding: 0">
            <h3>{{ $dataProduct->name }}</h3>
            <div class="d-flex price-product">
                @if($dataProduct->new_price != null)
                <h5>{{ ($dataProduct->new_price )}}đ </h5>
                <del class="old-price">{{ ($dataProduct->price) }} đ</del>
                <div class="save-price-detail">{{ __('Tiết kiệm:') }} {{ number_format((int) str_replace('.', '', $dataProduct->price) - (int) str_replace('.', '', $dataProduct->new_price) )}} đ</div>
                @else
                <h5>{{ __('Giá ') }}: {{ ($dataProduct->price) }} đ</h5>
                @endif
            </div>
            <div>
                <p>{{ __('Bảo hành') }}: <span style="font-weight: bold; color: blue">{{ $dataProduct->status_guarantee }}</span></p>
                @if($dataProduct->status == 'available')
                <p>{{ __('Tình trạng') }}: <span style="font-weight: bold; color: green">{{ __('Còn hàng') }}</span></p>
                @elseif($dataProduct->status == 'out of stock')
                <p>{{ __('Tình trạng') }}: <span style="font-weight: bold; color: red">{{ __('Hết hàng') }}</span></p>
                @else
                <p>{{ __('Tình trạng') }}: <span style="font-weight: bold; color: blue">{{ __('Đang về hàng') }}</span></p>
                @endif
                <p></p>
            </div>

            @if(isset($dataProduct->sale_detail))
            <div class="box-offer-detail border-radius-10">
                <div class="title-offer-detail d-flex align-items-center">
                    <i class="sprite sprite-gift-detail"></i>
                    <p class="font-weight-600 " id="product-gift">{{ __('Khuyến mãi') }}</p>
                </div>

                <div class="list-info-offter">
                    <div class="item-offer">
                        {!! $dataProduct->sale_detail !!}
                    </div>
                </div>
            </div>
            @endif
            <div class="product-buy-quantity d-flex align-items-center">
                <span class="title-quantity">{{ __('Số lượng') }}:</span>
                <div class="cart-quantity-select justify-content-center align-items-center d-flex">
                    <p class="js-quantity-change" data-value="-1"> − </p>
                    <input type="text" class="js-buy-quantity js-quantity-change bk-product-qty font-weight-800" value="1" id="quantity-to-cart">
                    <p class="js-quantity-change" data-value="1"> + </p>
                </div>
                <a class="addCart gap-8 d-flex flex-wrap align-items-center justify-content-center" onclick="addToCart()">
                    <input type="hidden" value="{{ $dataProduct['slug'] }}" id="product-to-cart">
                    <i class="fa fa-shopping-cart"></i>
                    <p class="title-cart" style="margin-left: 10px;">{{ __('Thêm vào giỏ hàng') }}</p>
                </a>
                <input type="hidden" class="js-buy-quantity-temp" value="1">
            </div>
            <div class="quantity mt-4 d-flex btn-buy-product">
                <a class="btn-1" href="{{ route('addCart', $dataProduct['slug']) }}">
                    <button class="btn-buy">{{ __('Mua ngay') }}</button>
                </a>
            </div>

            <div class="box-product-policy-detal boder-radius-10 mt-2">
                <p class="title font-weight-600">{{ __('Yên tâm mua hàng') }}</p>
                <div class="list-showroom-detail d-flex flex-wrap justify-content-between" id="js-box-showrom-has-pro-list">
                    <div class="item d-flex align-items-center gap-6">
                        <i class="fas fa-comments-dollar"></i>
                        <p class="gap-6-item">{{ __('Cam kết giá tốt nhất thị trường') }}.</p>
                    </div>
                    <div class="item d-flex align-items-center gap-6">
                        <i class="fas fa-handshake"></i>
                        <p class="gap-6-item">{{ __('Sản phẩm mới 100%.') }}</p>
                    </div>
                    <div class="item d-flex align-items-center gap-6">
                        <i class="	fas fa-paper-plane"></i>
                        <p class="gap-6-item">{{ __('Lỗi 1 đổi 1 ngay lập tức.') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <div>
        <h3 class="productRelated">{{ __('Sản phẩm liên quan') }}</h3>
        <div class="swiper d-flex">
            <div class="swiper-wrapper swiper-top-sale">
                @foreach($productRelated as $product)
                <div class="swiper-slide1" role="group">
                    <div class="product-item">
                        <a href="" class="product-image position-relative">
                            @if(isset($product->image))
                            <img src="{{ asset($dataProduct->image[0]) }}" width="210" height="164" class="lazy product-image">
                            @endif
                        </a>
                        <div>
                            <h3 class="product-title line-clamp-3">{{ $product->name }} </h3>
                            @if($product->new_price != null)
                            <div class="product-martket-main d-flex align-items-center">
                                <del class="product-market-price">{{ $product->price }} ₫</del>
                                <?php $new_price = floor(100 - (((int) $product->new_price / (int) $product->price) * 100)) ?>

                                <div class="product-percent-price">-{{ $new_price }} %</div>
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
        </div>

        <section class="product-container set-background1">
            <div class="product-info" id="product-info">
                <h3>{{ __('Thông tin sản phẩm') }}</h3>
                <div class="p-info1">
                    {!! Str::limit($dataProduct->description, 1000, '')!!}
                    @if (strlen($dataProduct->description) > 3)
                    <span id="dots-{{ $dataProduct->id }}">...</span>
                    @endif
                </div>

                <div class="p-info1">
                    <span id="more-{{ $dataProduct->id }}" style="display: none;">{!! $dataProduct->description !!}</span>
                </div>

                <a href="javascript:" onclick="loadMore('{{ $dataProduct->id }}')" id="read-all-product" class="btn-article-col js-viewmore-content font-weight-500 gap-8 d-flex align-items-center justify-content-center">
                    {{ __('Xem tất cả') }}
                    <i class="fas fa-angle-down" style="margin-left: 5px;"></i>
                </a>

                <a href="javascript:" onclick="loadMore('{{ $dataProduct->id }}')" id="hide-all-product" class="btn-article-col js-viewmore-content font-weight-500 gap-8 d-flex align-items-center justify-content-center d-none">
                    {{ __('Thu gọn') }}
                    <i class="fas fa-angle-up" style="margin-left: 5px;"></i>
                </a>
            </div>

            <div class="product-related">
                <h3> {{ __('Thông số kĩ thuật') }}</h3>
                <table>
                    <tr>
                        <th col="300"></th>
                        <th></th>
                    </tr>
                    @if(isset($dataProduct->detail_tech))
                    @php
                    $dataProduct->detail_tech = json_decode($dataProduct->detail_tech, true);
                    @endphp
                    @if(is_array($dataProduct->detail_tech))
                    @foreach(array_slice($dataProduct->detail_tech, 0, 4) as $key => $value)
                    <tr>
                        <td style="font-weight: 600; width: 20%;">{{ $key }}</td>
                        <td>{{ $value }}</td>
                    </tr>
                    @endforeach
                    @endif
                    @endif
                </table>
                <a href="javascript:" id="read-all-product-detail" class="btn-article-col js-viewmore-content font-weight-500 gap-8 d-flex align-items-center justify-content-center">
                    {{ __('Xem tất cả') }}
                </a>
                <div id="myModal" class="modal">
                    <!-- Modal content -->
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <table>
                            <tr>
                                <th col="300"></th>
                                <th></th>
                            </tr>
                            @if(isset($dataProduct->detail_tech))
                            @if(is_array($dataProduct->detail_tech))
                            @foreach($dataProduct->detail_tech as $key => $value)
                            <tr>
                                <td style="font-weight: 600">{{ $key }}</td>
                                <td>{{ $value }}</td>
                            </tr>
                            @endforeach
                            @endif
                            @endif
                        </table>
                    </div>

                </div>
            </div>
        </section>

        @if(Session::has('message'))
        <p class="alert {{ Session::get('alert-class', 'alert-info') }}">{{ Session::get('message') }}</p>
        @endif
        <section class="comment">
            <form action="{{ route('storeComment') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="gift-product">
                    <div class="gift-promotion">
                        <div>
                            <textarea id="comment" name="content" placeholder="{{ __('Mời bạn để lại bình luận...') }}" onfocus="$('.js-actions-comment-2020').show();" name="user_post[content]"></textarea>
                            <input type="hidden" value="{{ $dataProduct->id }}" name="product_id">
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
            </form>
        </section>
        <hr class="hr-row">
        @include('page.product.comment-display', ['comments' => $dataProduct->comments, 'product_id' => $dataProduct->id]);
    </div>
    @endsection

    @section('js')
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myModal').hide();
            $('#read-all-product-detail').on('click', function() {
                $('#myModal').show();
            });
            $('.close').click(function() {
                $('#myModal').hide();
            });

        });
    </script>
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

        function loadMore(id) {
            var dots = document.getElementById("dots-" + id);
            var moreText = document.getElementById("more-" + id);
            if (moreText.style.display === "none") {
                moreText.style.display = "inline";
                dots.style.display = "none";
                $('#hide-all-product').removeClass('d-none');
                $('#read-all-product').addClass('d-none');
            } else {
                moreText.style.display = "none";
                dots.style.display = "inline";
                $('#read-all-product').removeClass('d-none');
                $('#hide-all-product').addClass('d-none');
            }
        }

        function updateCart(quantity, id) {
            $.get(
                '{{ asset("/cart/update-cart") }}', {
                    quantity: quantity,
                    id: id
                },
                function() {
                    location.reload()
                }
            )
        }

        function addToCart() {
            let slug = $('#product-to-cart').val();
            let total = $('#quantity-to-cart').val();
            let baseUrl = '/cart/add-to-cart/' + slug + '?total=' + total;

            window.location.href = baseUrl;
        }

        $(document).ready(function() {
            $('.js-quantity-change').on('click', function() {
                let value = $(this).data('value');
                let quantity = $('.js-buy-quantity').val();
                let new_quantity = 1;
                if (value == -1) {
                    if (quantity == 1) {
                        return;
                    } else {
                        new_quantity = parseInt(quantity) + parseInt(value);

                    }
                } else {
                    new_quantity = parseInt(quantity) + parseInt(value);
                }

                $('.js-buy-quantity').val(new_quantity);
            });
        });
    </script>
    @endsection
