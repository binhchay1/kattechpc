@extends('layouts.page')

@section('title')
<title>{{ __('Khuyến mãi') }} | Kattech PC</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/page/post.css') }}" />
@endsection

@section('description', __('Tham gia khuyến mãi shock mỗi ngày với Kattech PC'))
@section('keywords', 'promotion, sale, kattechpc, kattech')
@section('breadcrumb', __('Khuyến mãi'))

<style>

    .container-promotion {
        width: 1200px;
        display: block;
        margin: 0 auto;
    }

    .row {
        background: none;
        box-shadow: rgba(100, 100, 111, 0.2) 0px 7px 29px 0px;
    }

    .column {
        font-size: 16px;

        @media (min-width: 360px) {
            display: inline-block;
            width: 33.33%;
        }
    }

    .promotion h2 {
        font-size: 14px;
        padding-top: 0px;
        height: 40px;
        text-transform: uppercase;
        margin: 0;
        text-align: center;
        margin-top: 10px;
    }

    .promotion h2 a {
        color: #004B91;
        font-weight: 600;
        overflow: hidden;
    }

    .promotion h2 a:hover {
        color: dodgerblue;
    }


    .pac-market_time {
        text-align: center;
        margin-top: 5px;
        color: #e00;
        font-style: italic;
        font-size: 13px;
    }

    .parent {
        padding: 10px;
    }

    .saleoff-heading {
        margin-top: 30px;
        background: #d4eaf7 url(/public/images/san-khuyen-mai.jpg) left top no-repeat;
        height: 39px;
        line-height: 39px;
        color: #004890;
        font-style: italic;
        padding-left: 225px;
        font-size: 13px;
    }

    .set-image-promotion {
        width: 320px;
        overflow: hidden;
        padding: 0px 0px 0px 0px !important;
        text-align: center;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }

    .image-promotion
    {
        border: none;
        max-width: 100%;
        height: auto;
    }

    .column {
        float: left;
        width: 378px;
        margin: 0px;
        text-align: center;
        border: 1px solid #ddd;
        display: block;
        padding: 10px;
        overflow: hidden;
        position: relative;
    }

    .column:hover {
        border-color: red;
    }

</style>

@section('content')
<div class="container-promotion">
    <div class="saleoff-heading">
        <a>{{ __('Hãy thường xuyên theo dõi các chương trình khuyến mãi để có cơ hội mua HÀNG CHÍNH HÃNG GIÁ TỐT NHẤT') }}</a>
    </div>
    <div class="row post-data">
        <?php
        $date = date('d/m/Y ');
        $getCurrentDate = strtotime($date);
        ?>
            @foreach($listPromotionDESC as $random)
            <?php
                $start_date = date('d/m/Y', strtotime($random->start_date));
            $end_date = date('d/m/Y', strtotime($random->end_date));
            $getEndDate = strtotime($end_date);
            ?>
            @if($getCurrentDate < $getEndDate)
            <div class="column">
                <div class="set-image-promotion">
                    <img class="image-promotion " src="{{ $random->image ?? asset('images/page/no-image.png') }}" style="object-fit: cover;">
                </div>
                <div class="promotion">
                    <h2><a href="{{ route('promotion.detail', $random['slug']) }}" class="text-tech" href="">{{ $random->title }}</a></h2>
                    <div class="pac-market_time">
                        {{ __('Từ') }}: {{ $start_date }} - {{ __('Kết thúc') }}: {{ $end_date }}
                    </div>
                </div>
            </div>
            @endif
            @endforeach
    </div>
</div>
@endsection

@section('js')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
@endsection
