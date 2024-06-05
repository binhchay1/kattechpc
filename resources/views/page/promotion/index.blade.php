@extends('layouts.page')

@section('title')
<title>{{ __('Khuyến mãi') }} | Kattech PC</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/page/post.css') }}" />
@endsection

<style>
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

    .promotion h2 a{
        color: #004B91;
        font-weight: 600;
        overflow: hidden;
    }

    .promotion h2  a:hover {
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
        background: #d4eaf7 url(https://phucanh.vn/template/default/images/san-khuyen-mai.jpg) left top no-repeat;
        height: 39px;
        line-height: 39px;
        color: #004890;
        font-style: italic;
        padding-left: 225px;
        font-size: 13px;
    }

    .row1 {
        font-size: 0;
        max-width: 100%;
        margin: 20px auto;
    }
</style>
@section('content')
<div class="container">
    <div class="saleoff-heading" >
        <a>Hãy thường xuyên theo dõi các chương trình khuyến mãi để có cơ hội mua HÀNG CHÍNH HÃNG GIÁ TỐT NHẤT</a>
    </div>
    <div class="row d-flex post-data">
        <div class="row1">
            @foreach($listPromotionDESC as $random)

                <?php $start_date = date('d/m/Y', strtotime($random->start_date));
                $end_date = date('d/m/Y', strtotime($random->end_date));
                ?>
            <div class="column">
                <div class="parent">
                    <div class="child">
                        <img class="img-fluid w-100" src="{{ $random->image ?? asset('images/page/no-image.png') }}" style="object-fit: cover;">
                        <div class="promotion">
                            <h2><a href="{{ route('promotion.detail', $random['slug']) }}" class="text-tech" href="">{{ $random->title }}</a></h2>
                        </div>
                        <div class="pac-market_time">
                            {{ __('Từ') }}: {{ $start_date }} -  {{ __('Kết thúc') }}: {{ $end_date }}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

</div>

@endsection

@section('js')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
@endsection
