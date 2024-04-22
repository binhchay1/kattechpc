@extends('layouts.page')

@section('title')
    <title>{{ __('Giỏ hàng') }} | Kattech PC</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/page/cart.css') }}"/>
@endsection

@section('content')
    <main>
        @if ($totalCart == 0)
            <div class="">
                <img class="image-cart" src="{{asset('images/cart.jpg')}}">
                <h2 class="text-center">{{__('Không có sản phẩm nào trong giỏ hàng')}}</h2>

                <div class="button-css-cart">
                    <a href="{{route('home')}}">
                        <button class="button-cart">{{__('Tiếp tục mua hàng')}}</button>
                    </a>
                </div>
            </div>
        @else
            <form action="{{route('checkout')}}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="title-c-ct"> {{__('Địa chỉ giao hàng')}}</div>
                <a href="#">
                    <div class="title-c-ct input-address">{{__('Nhập thông tin địa chỉ bạn muốn giao hàng?')}}</div>
                </a>
                <div class="product-data">
                    @if(Auth::user())
                        <div class="basket" id="info-user">
                            <div class="basket-module">
                                <div class="row">
                                    <div class="col-25">
                                        <label for="fname" class="label">{{__('Họ tên')}}</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" id="fname" name="name" value="{{Auth::user()->name}}" placeholder="{{__('Họ và tên')}}">
                                    </div>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="fname" class="label">{{__('Số điện thoại')}}</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" id="fname" name="phone" value="{{Auth::user()->phone}}" placeholder="{{__('Số điện thoại')}}">
                                    </div>
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="fname" class="label">{{__('Tỉnh/Thành phố')}}</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" id="fname" name="province" value="{{Auth::user()->province}}" placeholder="{{__('Tỉnh/thành phố')}}">
                                    </div>
                                    @if ($errors->has('province'))
                                        <span class="text-danger">{{ $errors->first('province') }}</span>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="fname" class="label">{{__('Quận/huyện')}}</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" id="fname" name="district" value="{{Auth::user()->district}}" placeholder="{{__('Quận huyện')}}">
                                    </div>
                                    @if ($errors->has('district'))
                                        <span class="text-danger">{{ $errors->first('district') }}</span>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="fname" class="label">{{__('Địa chỉ')}}</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" id="fname" name="address" value="{{Auth::user()->address}}" placeholder="{{__('Địa chỉ')}}">
                                    </div>
                                    @if ($errors->has('address'))
                                        <span class="text-danger">{{ $errors->first('address') }}</span>
                                    @endif
                                    <?php $date = date('Y-m-d H:i:s'); ?>
                                    <input type="hidden" id="fname" name="user_id" value="{{Auth::user()->id}}" placeholder="{{__('Địa chỉ')}}">
                                    <input type="hidden" id="fname" name="order_date" value="{{$date}}" placeholder="{{__('Địa chỉ')}}">
                                    <input type="hidden" id="fname" name="status" value="0">
                                </div>
                            </div>
                        </div>
                    @else
                        <div class="basket" id="info-user">
                            <div class="basket-module">
                                <div class="row">
                                    <div class="col-25">
                                        <label for="fname" class="label">{{__('Họ tên')}}</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" id="fname" name="name" placeholder="{{__('Họ và tên')}}">
                                    </div>
                                    @if ($errors->has('name'))
                                        <span class="text-danger">{{ $errors->first('name') }}</span>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="fname" class="label">{{__('Số điện thoại')}}</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" id="fname" name="phone" placeholder="{{__('Số điện thoại')}}">
                                    </div>
                                    @if ($errors->has('phone'))
                                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="fname" class="label">{{__('Tỉnh/Thành phố')}}</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" id="fname" name="province" placeholder="{{__('Tỉnh/thành phố')}}">
                                    </div>
                                    @if ($errors->has('province'))
                                        <span class="text-danger">{{ $errors->first('province') }}</span>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="fname" class="label">{{__('Quận/huyện')}}</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" id="fname" name="district" placeholder="{{__('Quận huyện')}}">
                                    </div>
                                    @if ($errors->has('district'))
                                        <span class="text-danger">{{ $errors->first('district') }}</span>
                                    @endif
                                </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="fname" class="label">{{__('Địa chỉ')}}</label>
                                    </div>
                                    <div class="col-75">
                                        <input type="text" id="fname" name="address" placeholder="{{__('Địa chỉ')}}">
                                    </div>
                                    @if ($errors->has('address'))
                                        <span class="text-danger">{{ $errors->first('address') }}</span>
                                    @endif
                                    <?php $date = date('Y-m-d H:i:s'); ?>
                                    <input type="hidden" id="fname" name="order_date" value="{{$date}}" placeholder="{{__('Địa chỉ')}}">
                                    <input type="hidden" id="fname" name="status" value="0" placeholder="{{__('Địa chỉ')}}">
                                </div>
                            </div>
                        </div>
                    @endif
                    <div class="basket">
                        <div class="basket-labels">
                            <ul>
                                <li class="item item-heading">{{__('Sản phẩm')}}</li>
                                <li class="price">{{__('Giá')}}</li>
                                <li class="quantity">{{__('Số lượng')}}</li>
                                <li class="subtotal">{{__('Thành tiền')}}</li>
                            </ul>
                        </div>

                        @foreach($dataCart as $product)
                            <div class="basket-product">
                                <div class="item">
                                    <div class="product-image">
                                        <img src="{{asset($product->attributes->image)}}" alt="Placholder Image 2" class="product-frame">
                                    </div>
                                    <div class="product-details">
                                        <h1><strong><span class="item-quantity"></span> {{$product->name}}</strong></h1>
                                    </div>
                                </div>
                                @if($product->new_price != null))
                                    <div class="price">{{ number_format($product->new_price) }} đ</div>
                                @else
                                    <div class="price">{{ number_format($product->price) }} đ</div>
                                @endif
                                <div class="quantity">
                                    <input type="number" value="{{$product->quantity}}" min="1" class="quantity-field" onchange="updateCart(this.value,'{{$product->id}}')">
                                </div>
                                @if( $product->new_price != null)
                                    <?php
                                    $totalDisCount = $product['quantity'] * $product['new_price'];
                                    ?>
                                    <div class="subtotal get-total" id="total">{{ number_format($totalDisCount) }} đ
                                @else
                                    <?php
                                    $total = $product['quantity'] * $product['price'];
                                    ?>
                                    <div class="subtotal get-total" id="total">{{number_format($total) }} đ
                                @endif
                                    <div class=" delete">
                                            <a href="">
                                                <button type="button" onclick="deleteSales('{{ route("deleteCart", $product["id"]) }}')">{{__('Xóa')}}</button>
                                            </a>
                                        </div>
                                    </div>
                            </div>
                        @endforeach

                        <div class="basket">
                            <div class="summary1">
                                <h3>{{__('Hình thức thanh toán')}}</h3>
                                <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" checked>
                                <label for="vehicle1">{{__('Thanh toán sau khi nhận hàng')}}</label><br>
                                <form>
                                    <div class="basket-module">
                                        <label for="promo-code">{{__('Nhập mã khuyến mãi')}}</label>
                                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                                        <input id="promo-code" type="text" name="discount_amount" class="promo-code-field">
                                        <p class="error_msg" id="promo-code" style="color: red"></p>
                                        <button type="button" class=" btn-submit promo-code-cta">Apply</button>
                                    </div>
                                </form>
                            </div>
                            <div class="summary">
                                @if(Session::get('getProduct' && Session::get('getProduct')->new_price != null))
                                    <div class="summary-total-items total-title">{{__('Tổng cộng')}} : {{number_format($totalDisCount)}}đ</div>
                                @else
                                    <div class="summary-total-items total-title">{{__('Tổng cộng')}} : {{number_format($total)}}đ</div>
                                @endif
                                @if(Session::get('discount') && Session::get('getProduct')->new_price != null))
                                    <div class="">
                                        <?php $getDiscount = Session::get('discount')->discount_amount ?>
                                    </div>
                                    <div class="total-value final-value summary-total " id="basket-total">{{__('Giảm giá')}}
                                        : {{number_format($getDiscount)}}đ
                                    </div>
                                    <div class="summary-total">
                                        <div class="total-title">{{__('Thành tiền')}}</div>
                                        <?php $money = $totalDisCount - $getDiscount?>
                                        <div class="total-value final-value get-total" id="basket-total">{{number_format($money)}}đ
                                            <input hidden name="total_cart" value="{{$money}}">
                                        </div>
                                    </div>
                                @elseif(Session::get('discount'))
                                    <div class="">
                                        <?php $getDiscount = Session::get('discount')->discount_amount ?>
                                    </div>
                                    <div class="total-value final-value summary-total " id="basket-total">{{__('Giảm giá')}} : {{number_format($getDiscount)}}đ
                                    </div>
                                    <div class="summary-total">
                                        <div class="total-title">{{__('Thành tiền')}}</div>
                                        <?php $money = $total - $getDiscount?>
                                        <div class="total-value final-value get-total" id="basket-total">{{number_format($money)}}đ</div>
                                        <input hidden name="total_cart" value="{{$money}}">
                                    </div>
                                @elseif(Session::get('getProduct' && Session::get('getProduct')->new_price != null))
                                    <div class="total-value final-value summary-total" id="basket-total">{{__('Giảm giá')}}
                                    </div>
                                    <div class="summary-total">
                                        <div class="total-title">{{__('Thành tiền')}} {{number_format($totalDisCount)}}đ</div>
                                        <input hidden name="total_cart" value="{{$totalDisCount}}">
                                        <div class="total-value final-value get-total" id="basket-total"></div>
                                    </div>
                                    @else
                                        <div class="total-value final-value summary-total" id="basket-total">{{__('Giảm giá')}}
                                        </div>
                                        <div class="summary-total">
                                            <div class="total-title">{{__('Thành tiền')}} {{number_format($total)}}đ</div>
                                            <input hidden name="total_cart" value="{{$total}}">
                                            <div class="total-value final-value get-total" id="basket-total"></div>
                                        </div>
                                @endif

                                <div class="summary-checkout">
                                    <button class="checkout-cta">{{__('Đặt hàng')}}</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </form>
        @endif
    </main>
    <meta name="viewport" content="width=device-width"/>
@endsection

@section('js')
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>


    <script>
        function updateCart(quantity, id) {
            $.get(
                '{{ asset("/cart/update-cart") }}', {
                    quantity: quantity,
                    id: id
                },
                function () {
                    location.reload()
                }
            )
        }
    </script>
    <script>
        function deleteSales(url) {
            if (confirm('Are you sure?')) {
                $.ajax({
                    type: "get",
                    url: url,
                    success: function (result) {
                    }
                });
            }
        }
    </script>
{{--    <script>--}}
{{--        $(document).ready(function () {--}}
{{--            $(".btn-submit").click(function (e) {--}}
{{--                e.preventDefault();--}}

{{--                var _token = $("input[name='_token']").val();--}}
{{--                var discount_amount = $("input[name='discount_amount']").val();--}}
{{--                $.ajax({--}}
{{--                    url: "{{ route('apply.coupon') }}",--}}
{{--                    type: 'POST',--}}
{{--                    data: {_token: _token, discount_amount: discount_amount},--}}
{{--                    success: function (data) {--}}
{{--                        if ($.isEmptyObject(data.errors)) {--}}
{{--                            $(".error_msg").html(data.success);--}}
{{--                        } else {--}}
{{--                            let resp = data.errors;--}}
{{--                            $(".error_msg").html(resp);--}}
{{--                        }--}}
{{--                    }--}}
{{--                });--}}

{{--            });--}}
{{--        });--}}
{{--    </script>--}}
@endsection
