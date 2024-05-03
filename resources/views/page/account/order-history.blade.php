@extends('layouts.page')

@section('title')
<title>{{ __('Lịch sử mua hàng') }} | Kattech PC</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/page/profile.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/page/cart.css') }}" />
@endsection

@section('content')
<div class="row">
    @include('includes.left-menu-profile')
    <div class="rightcolumn">
        <div class="card">
            <h2>{{ __('Lịch sử mua hàng') }}</h2>
            <div class="basket " style="width: 100%;">
                <div class="basket-labels">
                    <ul>
                        <li class="item item-heading">{{ __('Mã đơn hàng') }}</li>
                        <li class="price">{{ __('Ngày') }}</li>
                        <li class="subtotal">{{ __('Thành tiền') }}</li>
                    </ul>
                </div>
                @foreach($dataUser->orders as $orderHistory)
                <div class="basket-product">
                    <div class="item">
                        <div class="price">{{ $orderHistory->orders->order_code }}</div>
                    </div>
                    <div class="item">
                        <div class="price">{{ $orderHistory->orders->order_date }}</div>
                    </div>
                    <div class="subtotal get-total" id="total">111111đ</div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script>
    setTimeout(function() {
        $('.alert-block').remove();
    }, 5000);
</script>
@endsection
