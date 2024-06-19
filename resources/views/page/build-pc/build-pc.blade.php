@extends('layouts.page')

@section('title')
<title>{{ __('Xây dựng cấu hình') }} | Kattech PC</title>
@endsection

@section('description', __('Xây dựng cấu hình với Kattech PC'))
@section('keywords', 'build pc, build, kattechpc, kattech')
@section('breadcrumb', __('Xây dựng cấu hình'))

@section('css')
<link rel="stylesheet" href="{{ asset('/css/page/build-pc.css') }}" />
@endsection

@section('content')
<div class="build-pc-area">
    <div class="build-pc_content">
        <h1 style="font-size: 30px;line-height:36px;margin-bottom: 10px;text-align: center;font-weight:500;">{{ __('Build PC - Xây dựng cấu hình máy tính PC giá rẻ chuẩn nhất') }}</h1>
        <h2 style="font-size: 26px;line-height:30px;margin-bottom: 10px;font-weight:500; ">{{ __('Chọn linh kiện xây dựng cấu hình - Tự build PC') }} </h2>

        <ul class="list-btn-action">
            <li id="build-pc-set-item-1" class="active"><span onclick="changeBuild(1);" style="padding:0 20px;">{{ __('Cấu hình') }} 1</span></li>
            <li id="build-pc-set-item-2"><span onclick="changeBuild(2);" style="padding:0 20px;">{{ __('Cấu hình') }} 2</span></li>
        </ul>

        <ul class="list-btn-action">
            <li class="reset-build-pc" style="width:auto;"><span onclick="resetBuildPC()" style="padding:0 20px;">{{ __('Làm mới') }} <i class="fa fa-undo"></i></span></li>
        </ul>

        <div id="build-pc-content-area-1">
            <div id="build-pc-content-price-1">
                <p class="total-price">{{ __('Chi phí dự tính:') }} <span class="total-price-in-hud-1">0</span>
                    <span class="total-price-config-1"></span>
                </p>
                <div class="js-buildpc-promotion-content" style="margin-bottom: 0px;"></div>
            </div>
            <div class="list-drive" id="build-pc-content-list-1" style="border: solid 1px #e1e1e1;">
                @foreach($menu as $key => $value)
                <div class="item-drive d-flex">
                    <div class="name-item-drive">
                        <h3 class="d-name d-name-277" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">{{ $key + 1 }}. {{ $value->name }}</h3>
                        @if(isset($value->offers))
                        <div class="d-flex">
                            <i class="fa fa-gift"></i>
                            <h5 class="offers-build-pc">{{ $value->offers }}</h5>
                        </div>
                        @endif
                    </div>
                    <div class="drive-checked" style="margin-left:0;">
                        <span class="show-popup_select span-last open-selection" id="category-js-{{ $value->id }}-1"><i class="fa fa-plus"></i> Chọn {{ $value->name }}</span>
                        <div id="category-js-selected-{{ $value->id }}-1" class="js-item-row category-selected-row"></div>
                    </div>
                </div>
                @endforeach
            </div>
            <p class="total-price">{{ __('Chi phí dự tính:') }} <span class="total-price-in-hud-1">0</span><span class="total-price-config-1"></span></p>
        </div>

        <div id="build-pc-content-area-2" class="d-none">
            <div id="build-pc-content-price-2">
                <p class="total-price">{{ __('Chi phí dự tính:') }} <span class="total-price-in-hud-2">0</span>
                    <span class="total-price-config-2"></span>
                </p>
            </div>
            <div class="list-drive" id="build-pc-content-list-2" style="border: solid 1px #e1e1e1;">
                @foreach($menu as $key => $value)
                <div class="item-drive d-flex">
                    <div class="name-item-drive">
                        <h3 class="d-name d-name-277" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">{{ $key + 1 }}. {{ $value->name }}</h3>
                        @if(isset($value->offers))
                        <h5 style="color: red; font-style: italic; font-weight: bold">{{ $value->offers }}</h5>
                        @endif
                    </div>
                    <div class="drive-checked" style="margin-left:0;">
                        <span class="show-popup_select span-last open-selection" id="category-js-{{ $value->id }}-2"><i class="fa fa-plus"></i> Chọn {{ $value->name }}</span>
                        <div id="category-js-selected-{{ $value->id }}-2" class="js-item-row category-selected-row"></div>
                    </div>
                </div>
                @endforeach
            </div>
            <p class="total-price">{{ __('Chi phí dự tính:') }} <span class="total-price-in-hud-2">0</span><span class="total-price-config-2"></span></p>
        </div>

        <ul class="list-btn-action" id="js-buildpc-action">
            <li onclick="addToCart()"><span>{{ __('Thêm vào giỏ hàng') }}<i class="fa fa-shopping-cart"></i></span></li>
            <li onclick="printPage()"><span>{{ __('Xem và in') }}<i class="fa fa-shopping-cart"></i></span></li>
        </ul>
    </div>
</div>

@include('includes.modal-build-pc')
@include('includes.tooltips-buildpc')
@include('includes.modal-no-item-print')
@endsection

@section('js')
<script src="{{ asset('/js/page/buildpc.js') }}"></script>
@endsection
