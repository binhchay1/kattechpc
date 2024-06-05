@extends('layouts.page')

@section('title')
<title>{{ __('Giỏ hàng') }} | Kattech PC</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('/css/page/cart.css') }}" />
@endsection

@section('content')
<main>
    @if($totalCart == 0)
    <div class="">
        <img class="image-cart" src="{{asset('images/cart.jpg')}}">
        <h2 class="text-center">{{ __('Không có sản phẩm nào trong giỏ hàng') }}</h2>

        <div class="button-css-cart">
            <a href="{{ route('home') }}">
                <button class="button-cart">{{ __('Tiếp tục mua hàng') }}</button>
            </a>
        </div>
    </div>
    @else
    <form action="{{ route('checkout') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="title-c-ct"> {{ __('Địa chỉ giao hàng') }}</div>
        <a href="#">
            <div class="title-c-ct input-address">{{ __('THÔNG TIN KHÁCH HÀNG') }}</div>
        </a>
        <div class="product-data">
            <h3 style="font-style: italic; color: #e31223">{{ __('Các thông tin * bắt buộc nhập') }}</h3>
            @if(Auth::user())
            <div class="basket" id="info-user">
                <div class="basket-module">
                    <div class="row">
                        <div class="col-25">
                            <label for="fname" class="label">{{__('Họ tên')}}<span class="require-field">*</span></label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="fname" name="name" value="{{Auth::user()->name}}" placeholder="{{ __('Họ và tên') }}">
                        </div>
                        @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="fname" class="label">{{__('Email')}}<span class="require-field">*</span></label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="fname" name="email" placeholder="{{__('Địa chỉ email')}}">
                        </div>
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}<span class="require-field">*</span></span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="fname" class="label">{{__('Số điện thoại')}}<span class="require-field">*</span></label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="fname" name="phone" value="{{Auth::user()->phone}}" placeholder="{{ __('Số điện thoại') }}">
                        </div>
                        @if ($errors->has('phone'))
                        <span class="text-danger">{{ $errors->first('phone') }}</span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="fname" class="label">{{__('Tỉnh/Thành phố')}}<span class="require-field">*</span></label>
                        </div>
                        <select class="form-select form-select-sm mb-3 selected-name" id="city" aria-label=".form-select-sm" name="province">
                            <option value="" selected>Chọn tỉnh thành</option>
                        </select>
                        @if ($errors->has('province'))
                        <span class="text-danger">{{ $errors->first('province') }}</span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="fname" class="label">{{__('Quận/huyện')}}<span class="require-field">*</span></label>
                        </div>
                        <select class="form-select form-select-sm mb-3 selected-name" id="district" aria-label=".form-select-sm" name="district">
                            <option value="" selected>Chọn quận huyện</option>
                        </select>
                        @if ($errors->has('district'))
                        <span class="text-danger">{{ $errors->first('district') }}</span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="fname" class="label">{{__('Phường/xã')}}<span class="require-field">*</span></label>
                        </div>
                        <select class="form-select form-select-sm selected-name" id="ward" aria-label=".form-select-sm" name="ward">
                            <option value="" selected>Chọn phường xã</option>
                        </select>
                        @if ($errors->has('ward'))
                        <span class="text-danger">{{ $errors->first('ward') }}</span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="fname" class="label">{{__('Địa chỉ')}}<span class="require-field">*</span></label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="fname" name="address" value="{{Auth::user()->address}}" placeholder="{{ __('Địa chỉ') }}">
                        </div>
                        @if ($errors->has('address'))
                        <span class="text-danger">{{ $errors->first('address') }}</span>
                        @endif
                        <?php $date = date('Y-m-d H:i:s'); ?>
                        <input type="hidden" id="fname" name="user_id" value="{{Auth::user()->id}}" placeholder="{{ __('Địa chỉ') }}">
                        <input type="hidden" id="fname" name="order_date" value="{{$date}}" placeholder="{{ __('Địa chỉ') }}">
                        <input type="hidden" id="fname" name="status" value="0">
                    </div>
                </div>
            </div>
            @else
            <div class="basket" id="info-user">
                <div class="basket-module">
                    <div class="row">
                        <div class="col-25">
                            <label for="fname" class="label">{{__('Họ tên')}}<span class="require-field">*</span></label>
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
                            <label for="fname" class="label">{{__('Email')}}<span class="require-field">*</span></label>
                        </div>
                        <div class="col-75">
                            <input type="text" id="fname" name="email" placeholder="{{__('Địa chỉ email')}}">
                        </div>
                        @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="fname" class="label">{{__('Số điện thoại')}}<span class="require-field">*</span></label>
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
                            <label for="fname" class="label">{{__('Tỉnh/Thành phố')}}<span class="require-field">*</span></label>
                        </div>
                        <select class="form-select form-select-sm mb-3 selected-name" id="city" aria-label=".form-select-sm" name="province">
                            <option value="" selected>Chọn tỉnh thành</option>
                        </select>
                        @if ($errors->has('province'))
                        <span class="text-danger">{{ $errors->first('province') }}</span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="fname" class="label">{{__('Quận/huyện')}}<span class="require-field">*</span></label>
                        </div>
                        <select class="form-select form-select-sm mb-3 selected-name" id="district" aria-label=".form-select-sm" name="district">
                            <option value="" selected>Chọn quận huyện</option>
                        </select>
                        @if ($errors->has('district'))
                        <span class="text-danger">{{ $errors->first('district') }}</span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="fname" class="label">{{__('Phường/xã')}}<span class="require-field">*</span></label>
                        </div>
                        <select class="form-select form-select-sm selected-name" id="ward" aria-label=".form-select-sm" name="ward">
                            <option value="" selected>Chọn phường xã</option>
                        </select>
                        @if ($errors->has('ward'))
                        <span class="text-danger">{{ $errors->first('ward') }}</span>
                        @endif
                    </div>
                    <div class="row">
                        <div class="col-25">
                            <label for="fname" class="label">{{__('Địa chỉ')}}<span class="require-field">*</span></label>
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
                <div class="basket-labels" id="cart-basket">
                    <ul>
                        <li class="item item-heading">{{ __('Sản phẩm') }}</li>
                        <li class="quantity item-quan">{{ __('Số lượng') }}</li>
                        <li class="subtotal ">{{ __('Thành tiền') }}</li>
                    </ul>
                </div>

                @foreach($dataCart as $product)
                <div class="basket-product" id="item-cart">
                    <div class="item">
                        <div class="product-image">
                            <?php $image = json_decode($product->attributes->image, true); ?>
                            <img src="{{ asset($image[0])}}" alt="Placholder Image 2" class="product-frame">
                        </div>
                        <div class="product-details">
                            <h1><strong><span class="item-quantity"></span> {{ $product->name }}</strong></h1>
                        </div>
                    </div>

                    <div class="quantity " id="quantity-cart">
                        <input type="number" value="{{ $product->quantity }}" min="1" class="quantity-field" onchange="updateCart(this.value,'{{ $product->id }}')">
                    </div>

                    <?php
                    $total = (int) $product->quantity * (int) str_replace('.', '',  $product->price);

                    ?>
                    <div id="get-total" class="subtotal get-total inline" id="total_cart">{{ number_format($total, 0, '.', '.') }} đ
                        <input hidden name="total_cart" value="{{ $total }}">
                        <div class="delete" id="delete-cart">
                            <a>
                                <button type="button" onclick="deleteSales(`{{ route('deleteCart', $product['id']) }}`)">{{ __('Xóa') }}</button>
                            </a>
                        </div>
                    </div>
                </div>
                @endforeach

                <div class="basket">
                    <div class="summary1">
                        <h3 class="input-address">{{__('Hình thức thanh toán')}}</h3>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" checked>{{__('Thanh toán sau khi nhận hàng')}}<br>
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
                        <div class=" input-address summary-total-items total-title">{{ __('Tổng cộng:') }} </div>
                        <div class="total-value final-value get-total" id="basket-total">{{ number_format($totalCart, 0, '.', '.') }} đ</div>
                    </div>
                    <div class=" input-address total-value final-value summary-total " id="basket-total">{{__('Giảm giá:')}}
                        @if(Session::get('discount'))
                        <?php $getDiscount = Session::get('discount')->discount_amount ?>
                        {{($getDiscount)}} đ
                        @endif
                    </div>
                    @if(Session::get('discount'))
                    <?php $getDiscount = Session::get('discount')->discount_amount ?>
                    <div class="summary-total">
                        <div class="input-address total-title">{{ __('Thành tiền') }}</div>
                        <?php $money = $totalCart - $getDiscount ?>
                        <div class="total-value final-value get-total" id="basket-total">{{ number_format($money, 0, '.', '.') }} đ
                            <input hidden name="" value="{{ $money }}">
                        </div>
                    </div>
                    @else
                    <div class="summary-total">
                        <div class="input-address total-title">{{ __('Thành tiền') }}</div>
                        <div class="total-value final-value get-total" id="basket-total">{{ number_format($totalCart, 0, '.', '.') }} đ
                            <input hidden name="" value="{{ $totalCart }}">
                        </div>
                    </div>
                    @endif
                    <div class="summary-checkout">
                        <button class="checkout-cta">{{ __('Đặt hàng') }}</button>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </form>
    @endif
</main>
@endsection

@section('js')

<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script>
    var citis = document.getElementById("city");
    var districts = document.getElementById("district");
    var wards = document.getElementById("ward");
    var Parameter = {
        url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
        method: "GET",
        responseType: "application/json",
    };
    var promise = axios(Parameter);
    promise.then(function(result) {
        renderCity(result.data);
    });

    function renderCity(data) {
        for (const x of data) {
            citis.options[citis.options.length] = new Option(x.Name, x.Name);
        }
        citis.onchange = function() {
            district.length = 1;
            ward.length = 1;
            if (this.value != "") {
                const result = data.filter(n => n.Name === this.value);

                for (const k of result[0].Districts) {
                    district.options[district.options.length] = new Option(k.Name, k.Name);
                }
            }
        };
        district.onchange = function() {
            ward.length = 1;
            const dataCity = data.filter((n) => n.Name === citis.value);
            if (this.value != "") {
                const dataWards = dataCity[0].Districts.filter(n => n.Name === this.value)[0].Wards;

                for (const w of dataWards) {
                    wards.options[wards.options.length] = new Option(w.Name, w.Name);
                }
            }
        };
    }

    $(document).ready(function() {
        $(".btn-submit").click(function(e) {
            e.preventDefault();

            var _token = $("input[name='_token']").val();
            var discount_amount = $("input[name='discount_amount']").val();
            $.ajax({
                    url: "{{ route('apply.coupon') }}",
                    type: 'POST',
                    data: {
                        _token: _token,
                        discount_amount: discount_amount
                    },
                    success: function(data) {
                        if ($.isEmptyObject(data.errors)) {
                            $(".error_msg").html(data.success);
                        } else {
                            let resp = data.errors;
                            $(".error_msg").html(resp);
                        }
                    },
                },
                setTimeout(window.location.reload.bind(window.location), 1000));

        });
    });

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

    function deleteSales(url) {
        if (confirm('Are you sure?')) {
            $.ajax({
                type: "get",
                url: url,
                success: function(result) {
                    location.reload()
                }
            });
        }
    }
</script>
@endsection
