@extends('layouts.page')

@section('title')
    <title>{{ __('Cám ơn') }} | Kattech PC</title>
@endsection

@section('description', __('Cám ơn đã tham gia cùng Kattech PC'))
@section('keywords', ' thank, kattechpc, kattech')
@section('breadcrumb', __('Cám ơn'))

@section('css')
    <link rel="stylesheet" href="{{ asset('/css/page/cart.css') }}" />
@endsection

@section('content')
    <main>
        <div class="thank" style="padding: 15px">
            <div>
                <h2 class="set-text" style="color: red; font-weight: bold;">{{__('Đăng kí thành công')}}</h2>
            </div>
            <p class="tks">{{__('Cảm ơn các bạn đã đăng kí và sử dụng KATTECH.')}}</p>

            <img class="image-cart" style="width: 50% !important;" src="{{asset('images/logo/logo.png')}}">

        </div>
    </main>

@endsection

@section('js')
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script> window.setTimeout( function(){
            window.location = "{{URL::to('/')}}";
        }, 5000 );

    </script>
@endsection
