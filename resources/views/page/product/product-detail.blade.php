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
                @if($dataProduct->is_flashsale == 0)
                @if($dataProduct->new_price != null)
                <h5>{{ ($dataProduct->new_price )}}đ </h5>
                <del class="old-price">{{ ($dataProduct->price) }} đ</del>
                <div class="save-price-detail">{{ __('Tiết kiệm:') }} {{ number_format((int) str_replace('.', '', $dataProduct->price) - (int) str_replace('.', '', $dataProduct->new_price) )}} đ</div>
                @else
                <h5>{{ __('Giá ') }}: {{ ($dataProduct->price) }} đ</h5>
                @endif
                @else
                <div class="box-flash-sale d-flex align-items-center boder-radius-10">
                    <div class="box-left position-relative d-flex align-items-center">
                        <i class="sprite sprite-flashsale-detail"></i>
                        <p class="title-deal font-weight-800">flash sale</p>
                    </div>
                    <div class="box-middle product-time-holder global-time-deal d-flex gap-6">
                        <div class="item-time">
                            <b class="font-weight-500"> 00</b>
                            <p>Ngày</p>
                        </div>
                        <span>:</span>
                        <div class="item-time">
                            <b class="font-weight-500">17</b>
                            <p>Giờ</p>
                        </div>
                        <span>:</span>
                        <div class="item-time">
                            <b class="font-weight-500">51</b>
                            <p>Phút</p>
                        </div>
                        <span>:</span>
                        <div class="item-time">
                            <b class="font-weight-500">03</b>
                            <p>Giây</p>
                        </div>
                    </div>
                    <div class="box-right">
                        <div id="deal-line-detail" class="box-product-deal">
                            <p class="text-deal-detail">Còn 3/5 sản phẩm</p>
                            <div class="p-quantity-sale" data-quantity-left="3" data-quantity-sale-total="5">
                                <i class="sprite sprite-fire-deal"></i>
                                <div class="bg-gradient"></div>
                                <p class="js-line-deal-left" style="width: 40%;"></p>
                            </div>
                        </div>
                    </div>
                </div>
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
                        <a href="{{ route('productDetail', $product['slug']) }}" class="product-image position-relative">
                            @if(isset($product->image))
                            <img src="{{ asset($dataProduct->image[0]) }}" width="210" height="164" class="lazy product-image">
                            @endif
                        </a>
                        <div>
                            <a href="{{ route('productDetail', $product['slug']) }}">
                                <h3 class="product-title line-clamp-3">{{ $product->name }} </h3>
                            </a>

                            @if($product->new_price != null)
                            <div class="product-martket-main d-flex align-items-center">
                                <del class="product-market-price">{{ $product->price }} ₫</del>
                                <?php $new_price = floor(100 - (((int)$product->new_price / (int)$product->price) * 100)) ?>

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

        <div class="feedback-form">
            <h2>{{__('Đánh giá sản phẩm')}}</h2>
            <div class="review-info d-flex boder-radius-10">
                @foreach($listRatings as $rating)
                <div class="avgRate d-flex justify-content-center align-items-center flex-column">
                    @php $ratenum = number_format($ratingValue) @endphp
                    <div class="rating1">
                        <!-- Notice that the stars are in reverse order -->
                        @for($i = 1; $i <= $ratenum; $i++) <i class=" checked-rating fa fa-star " style="font-size: 20px"></i>
                            @endfor
                            @for($j = $ratenum + 1; $j <= 5; $j++) <i class="fa fa-star " style="font-size: 20px"></i>
                                @endfor
                    </div>
                    @if($rating->count() > 0)
                    <p class="mt-12">{{$rating->count()}} đánh giá và nhận xét</p>
                    @else
                    <p class="mt-12">Chưa có đánh giá và nhận xét</p>
                    @endif
                </div>
                <div class="box-avg-rate-count">
                    <div class="avg-rate-count">
                        <div class="avg-rate-item d-flex justify-content-center align-items-center">
                            <span class="rate-number">5 <i class="fas fa-star checked-rating"></i></span>
                            <div class="nhan-xet-bar">
                                <div class="percent percent5" style="width:50%"></div>
                            </div>
                            <span class="total-avg-rate" title="Xem các đánh giá này"><strong>1</strong> đánh giá</span>
                        </div>

                        <div class="avg-rate-item mt-12 d-flex justify-content-center align-items-center">
                            <span class="rate-number">4 <i class="fas fa-star checked-rating"></i></span>
                            <div class="nhan-xet-bar">
                                <div class="percent percent4" style="width:50%"></div>
                            </div>
                            <span class="total-avg-rate" title="Xem các đánh giá này"><strong>1</strong> đánh giá</span>
                        </div>

                        <div class="avg-rate-item mt-12 d-flex justify-content-center align-items-center">
                            <span class="rate-number">3 <i class="fas fa-star checked-rating"></i></span>
                            <div class="nhan-xet-bar">
                                <div class="percent percent3" style="width:0%"></div>
                            </div>
                            <span class="total-avg-rate" title="Xem các đánh giá này"><strong>0</strong> đánh giá</span>
                        </div>

                        <div class="avg-rate-item mt-12 d-flex justify-content-center align-items-center">
                            <span class="rate-number">2 <i class="fas fa-star checked-rating"></i></span>
                            <div class="nhan-xet-bar">
                                <div class="percent percent2" style="width:0%"></div>
                            </div>
                            <span class="total-avg-rate" title="Xem các đánh giá này"><strong>0</strong> đánh giá</span>
                        </div>

                        <div class="avg-rate-item mt-12 d-flex justify-content-center align-items-center">
                            <span class="rate-number rate-number1">1 <i class="fas fa-star checked-rating"></i></span>
                            <div class="nhan-xet-bar">
                                <div class="percent percent1" style="width:0%"></div>
                            </div>
                            <span class="total-avg-rate" title="Xem các đánh giá này"><strong>0</strong> đánh giá</span>
                        </div>

                    </div>

                </div>
                @endforeach
            </div>
            <div class="button-review d-flex justify-content-center align-items-center" id="js-show-review">
                <a href="javascript:" class="font-weight-500" id="showmenu">Đánh giá ngay</a>
            </div>
            <form id="feedbackForm" action="{{ route('rating') }}" class="menu" method="post" enctype="multipart/form-data" style="display: none">
                {{ csrf_field() }}
                <div class="box-form-review" id="js-box-review" style="display: block;">
                    <textarea class="review_reply_content" id="rating-content" placeholder="Mời bạn để lại đánh giá..." name="content" spellcheck="false"></textarea>
                    <div class="rating">

                        <!-- Notice that the stars are in reverse order -->
                        <input type="radio" id="star5" name="rating_product" value="5">
                        <label for="star5">&#9733;</label>
                        <input type="radio" id="star4" name="rating_product" value="4">
                        <label for="star4">&#9733;</label>
                        <input type="radio" id="star3" name="rating_product" value="3">
                        <label for="star3">&#9733;</label>
                        <input type="radio" id="star2" name="rating_product" value="2">
                        <label for="star2">&#9733;</label>
                        <input type="radio" id="star1" name="rating_product" value="1">
                        <label for="star1">&#9733;</label>

                    </div>
                </div>
                <input type="hidden" name="product_id" value="{{$dataProduct->id}}">
                <input type="hidden" name="user_id" value="{{Auth::user()->id ?? ""}}">
                <button type="submit" class="submit-btn" id="">{{__('Gửi đánh giá')}}</button>
            </form>

            <!----BOX RATING-->

            <div class="list-review">
                <div id="js-review-holder">
                    @foreach($listRatings as $rating)
                    <div class="item-comment">
                        <div class="form-reply-comment">
                            <div class="comment-name d-flex align-items-center justify-content-between">
                                <div class="comment-form-left d-flex align-items-center gap-6">
                                    <b class="user-name d-flex align-items-center gap-6">
                                        {{$rating->user->name}}
                                    </b>
                                </div>
                                <div class="comment-form-right d-flex align-items-center gap-4">
                                    <i class="fa fa-clock-o" style="font-size:15px; margin-right: 5px"></i>
                                    <?php $date = date_format($rating->created_at, "d/m/Y") ?>
                                    <span style="color:#787878;font-size: 12px;margin-right: 4px;font-weight: 700">{{$date}}</span>
                                </div>
                            </div>
                            <div class="comment-content d-flex align-items-center justify-content-between">
                                <div class="text-review d-flex flex-column gap-12">
                                    @php $ratenum = number_format($ratingValue) @endphp
                                    <div class="rating1">
                                        <!-- Notice that the stars are in reverse order -->
                                        @for($i = 1; $i <= $ratenum; $i++) <i class=" checked-rating fa fa-star "></i>
                                            @endfor
                                            @for($j = $ratenum + 1; $j <= 5; $j++) <i class="fa fa-star "></i>
                                                @endfor
                                    </div>
                                    <p class="d-flex aligin-items-center"><b>Nhận xét:</b>{{$rating->content}}</p>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>


        <!----BOX COMMENT-->
        <div class="box-comment">
            <p class="title-comment font-weight-600">Hỏi và đáp</p>
            <form action="{{ route('storeComment') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="comment-detail">
                    <div class="form-comment gap-10 d-flex justify-content-between">
                        <div style="width: 80%;">
                            <textarea class="comment_reply_content boder-radius-10" id="content0" name="content" placeholder="Xin mời để lại câu hỏi"></textarea>
                            <input type="hidden" value="{{ $dataProduct->id }}" name="product_id">
                        </div>
                        <div style="width: 20%;">
                            <button type="submit" style="border: 0">
                                <a class="btn-send-form-comment d-flex align-items-center justify-content-center gap-6 send-comment-pc"> <i class="fa fa-send-o" style="font-size:24px"></i>Gửi</a>
                            </button>
                        </div>
                    </div>

                    <p id="js-content-note0" style="color: red;max-width: 100%;display: flex;font-weight:700;margin-bottom:10px;"></p>
                </div>
            </form>
            @include('page.product.comment-display', ['comments' => $dataProduct->comments, 'product_id' => $dataProduct->id])
        </div>

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

    <script>
        $(document).ready(function() {
            $('#showmenu').click(function() {
                $('.menu').slideToggle("fast");
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('.write_reply').click(function() {
                $('.menu1').slideToggle("fast");
            });
        });
    </script>
    @endsection
