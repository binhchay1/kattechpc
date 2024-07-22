@extends('layouts.page')

@section('title')
<title>{{ __('Giỏ hàng') }} | Kattech PC</title>
@endsection

@section('description', __('Thêm vào giỏ hàng cùng Kattech PC'))
@section('keywords', 'cart, kattechpc, kattech')
@section('breadcrumb', __('Giỏ hàng'))

@section('css')
<link rel="stylesheet" href="{{ asset('/css/page/cart.css') }}" />
@endsection

@section('content')
<main>
    @if($totalCart == 0)
    <div>
        <img class="image-cart" src="{{asset('images/cart.jpg')}}">
        <h2 class="text-center">{{ __('Không có sản phẩm nào trong giỏ hàng') }}</h2>

        <div class="button-css-cart">
            <a href="{{ route('home') }}" style="padding: 10px 15px; border-radius: 10px;">
                {{ __('Tiếp tục mua hàng') }}
            </a>
        </div>
    </div>
    @else
    <form action="{{ route('checkout') }}" method="post" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="title-c-ct input-address">{{ __('THÔNG TIN KHÁCH HÀNG') }}</div>
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
                            <option value="" selected>{{ __('Chọn tỉnh thành') }}</option>
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
                            <option value="" selected>{{ __('Chọn quận huyện') }}</option>
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
                            <option value="" selected>{{ __('Chọn phường xã') }}</option>
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
                    <div class="row">
                        <div class="col-25">
                            <label for="fname" class="label">{{__('Ghi chú')}}<span class="require-field"></span></label>
                        </div>
                        <div class="col-75">
                            <textarea type="text" id="fname" name="notes" value="" placeholder="{{ __('Ghi chú') }}"></textarea>
                        </div>

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
                            <option value="" selected>{{ __('Chọn tỉnh thành') }}</option>
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
                            <option value="" selected>{{ __('Chọn phường xã') }}</option>
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
                    <div class="row">
                        <div class="col-25">
                            <label for="fname" class="label">{{__('Ghi chú')}}<span class="require-field"></span></label>
                        </div>
                        <div class="col-75">
                            <textarea type="text" id="fname" name="notes" value="" placeholder="{{ __('Ghi chú') }}"></textarea>
                        </div>

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
                <div class="basket-product flex-direction-column item-cart">
                    <div class="d-flex">
                        <div class="item">
                            <div class="product-image">
                                <?php $image = json_decode($product->attributes->image, true); ?>
                                <img src="{{ asset($image[0]) }}" alt="Placholder Image 2" class="product-frame">
                            </div>
                            <div class="product-details">
                                <h1><strong><span class="item-quantity"></span> {{ $product->name }}</strong></h1>
                            </div>
                        </div>

                        <div class="in-mobile">
                            <div class="quantity " id="quantity-cart">
                                <input type="number" value="{{ $product->quantity }}" min="1" class="quantity-field" onchange="updateCart(this.value, '{{ $product->id }}')">
                            </div>
                        </div>
                        <?php
                        $total = (int) $product->quantity * (int) str_replace('.', '',  $product->price);

                        ?>
                        <div class="subtotal get-total inline">
                            <span id="total_cart-{{ $product->id }}">{{ number_format($total, 0, '.', '.') }} đ</span>
                            <input hidden name="total_cart" value="{{ $total }}">
                            <div class="delete delete-cart">
                                <a>
                                    <button type="button" onclick="deleteSales(`{{ route('deleteCart', $product['id']) }}`)">{{ __('Xóa') }}</button>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div>
                        @if(isset($product->attributes->warranty->title))
                        <div>
                            <span class="warranty-text">
                                <p>Gói bảo hành : {{ $product->attributes->warranty->title }} ( {{ $product->attributes->warranty->price }} )</p>
                            </span>
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach

                <div>
                    <div class="summary1">
                        <h3 class="input-address">{{__('Hình thức thanh toán')}}</h3>
                        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike" checked disabled>{{__('Thanh toán sau khi nhận hàng')}}<br>
                        <div class="basket-module" id="add_discount">
                            <label for="promo-code">{{__('Nhập mã khuyến mãi')}}</label>
                            <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">
                            @if(Session::has('discount-total'))
                            <?php $getDiscount = Session::get('discount-total');
                            $intValue = (int) str_replace(',', '', $getDiscount);
                            ?>
                            <input id="promo-code" type="text" name="discount_amount" value="{{ Session::get('discount-code') }}" class="promo-code-field">
                            @else
                            <input id="promo-code" type="text" name="discount_amount" value="" class="promo-code-field">
                            @endif
                            <p class="error_msg" id="promo-code" style="color: red"></p>
                            <a type="button" class="btn-submit promo-code-cta">{{ __('Áp dụng') }}</a>
                        </div>
                    </div>
                    <div class="summary summary-area">
                        <div class="input-address summary-total-items total-title">{{ __('Tổng cộng') }} </div>
                    </div>
                    @if(Session::has('discount-total'))
                    <div class="summary summary-area">
                        <div class="total-value final-value summary-total" style="margin: 0;">{{__('Giảm giá')}}</div>
                        <div class="total-value final-value get-total" style="text-transform: inherit">
                            <div class="alert alert-danger total-discount">
                                {{ number_format((($intValue * $totalCart) / 100), 0, '.', '.') }} đ
                            </div>
                        </div>
                    </div>
                    <div class="summary-total summary-area">
                        <div class="total-title">{{ __('Thành tiền') }}</div>
                        <?php $money = $totalCart - (($intValue * $totalCart) / 100) ?>
                        <div class="total-value final-value get-total" id="total-amount">{{ number_format($money, 0, '.', '.') }} đ
                            <input hidden name="" value="{{ $money }}">
                        </div>
                    </div>
                    @else
                    <div class="add-coupon-area"></div>
                    <div class="summary-total summary-area">
                        <div class="total-title">{{ __('Thành tiền') }}</div>
                        <div class="total-value final-value get-total" id="total-amount">{{ number_format($totalCart, 0, '.', '.') }} đ
                            <input hidden name="" value="{{ $totalCart }}">
                        </div>
                    </div>
                    @endif
                    <div class="summary-checkout">
                        <button class="checkout-cta">{{ __('Đặt hàng') }}</button>
                        <div class="d-flex action-cart">
                            <a onclick="downloadCartExcel()" target="_blank">{{ __('Tải file excel') }}</a>
                            <a onclick="downloadCartImage()" target="_blank">{{ __('Tải ảnh báo giá') }}</a>
                            <a onclick="printCart()" target="_blank">{{ __('In báo giá') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @endif
</main>

<div id="area-export-image"></div>
@endsection

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.21.1/axios.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/es6-promise@4/dist/es6-promise.auto.min.js"></script>
<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>
<script>
    const total_amount = `<?php echo $totalCart ?>`;
</script>
<script src="{{ asset('js/page/cart.js') }}"></script>
@endsection
