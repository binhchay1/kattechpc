@extends('layouts.page')

@section('title')
<title>{{ __('Lịch sử mua hàng') }} | Kattech PC</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/page/profile.css') }}" />
<link rel="stylesheet" href="{{ asset('css/page/order-history.css') }}" />
@endsection

@section('content')
<div class="row">
    @include('includes.left-menu-profile')
    <div class="rightcolumn">
        <div class="card">
            <h2>{{ __('Lịch sử mua hàng') }}</h2>
            <div class="basket">
                <div class="basket-labels">
                    <div class="item-code heading">{{ __('Mã đơn hàng') }}</div>
                    <div class="item-date heading">{{ __('Ngày') }}</div>
                    <div class="item-total heading">{{ __('Thành tiền') }}</div>
                    <div class="item-action heading">{{ __('Hành động') }}</div>
                </div>
                @foreach($dataUser->orders as $orderHistory)
                <div class="basket-product">
                    <div class="item-code">{{ $orderHistory->order_code }}</div>
                    <div class="item-date">{{ $orderHistory->order_date }}</div>
                    <div class="item-total"></div>
                    <div class="item-action"><button>{{ __('Xem chi tiết') }}</button></div>
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
