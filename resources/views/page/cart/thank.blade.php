@extends('layouts.page')

@section('title')
<title>{{ __('Cám ơn') }} | Kattech PC</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('/css/page/cart.css') }}" />
@endsection

@section('content')
<main>
    <div class="thank">
        <div>
            <h2 class="set-text">{{__('CẢM ƠN QUÝ KHÁCH ĐÃ MUA HÀNG TẠI KATTECH')}}</h2>
        </div>

        <div>
            <button class="button-tks">
                <h1 class="order-success">{{__('Đặt hàng thành công')}}</h1>
            </button>
        </div>
        <p class="tks">{{__('Cảm ơn quý khách đã cho KATTECH có cơ hội được phục vụ.
                Nhân viên KATTECH sẽ liên hệ với quý khách trong thời gian sớm nhất.')}}</p>

        <img class="image-cart" src="{{asset('images/cart.jpg')}}">
        <div class="button-css-cart">

            <a href="{{ route('home') }}">
                <button class="button-cart">{{__('Tiếp tục mua hàng')}}</button></a>
        </div>
    </div>
</main>

@endsection

@section('js')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
@endsection
