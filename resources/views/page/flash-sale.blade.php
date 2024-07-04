@extends('layouts.page')

@section('title')
<title>{{ __('Flash sale') }} | Kattech PC</title>
@endsection

@section('description', __('Săn linh kiện có giá cực tốt mỗi ngày với Kattech PC'))
@section('keywords', 'sale, flash sale, kattechpc, kattech')
@section('breadcrumb', __('Flash sale'))

@section('css')
<link rel="stylesheet" href="{{ asset('css/page/flash-sale.css') }}" />
@endsection

@section('content')
<section class="page-deal container page-hompage">
    <div class="box-product-deal">
        <div class="banner-deal-page">
            <a href="/ad.php?id=299" class="item-banner" style="display:block;margin-bottom:16px">
                <img src="/media/banner/16_Jan0020c1620255554792b53307703d1377.jpg" alt="banner-deal">
            </a>
        </div>

        <div class="box-list-item-deal d-flex gap-12 flex-wrap" id="js-deal-page">
            <div class="product-item">
                <div class="item-deal">
                    <a href="/pc-gaming-10" class="product-image position-relative">
                        <img src="/media/product/250-25984-pc-meo.jpg" alt="BỘ PC MEOW (I5 13500 / RAM 16G DDR5 / VGA RTX 4060 8G)">
                    </a>
                    <div class="product-info flex-1">
                        <a href="/pc-gaming-10">
                            <h3 class="product-title line-clamp-3">BỘ PC MEOW (I5 13500 / RAM 16G DDR5 / VGA RTX 4060 8G)</h3>
                        </a>
                        <div class="product-martket-main d-flex align-items-center">
                            <p class="product-market-price">28.990.000 ₫</p>
                            <div class="product-percent-price">9%</div>
                        </div>
                        <div class="product-price-main font-weight-600">
                            26.500.000đ
                        </div>
                        <div class="p-quantity-sale" data-quantity-left="1" data-quantity-sale-total="6">
                            <i class="sprite sprite-fire-deal"></i>
                            <div class="bg-gradient"></div>
                            <p class="js-line-deal-left" style="width: 83.3333%;"></p>
                            <span>Còn 1/ 6 sản phẩm</span>
                        </div>
                        <div class="js-item-deal-time js-item-time-25984">
                            <p class="time-deal-page">Kết thúc sau <span>01</span>:<span>19</span>:<span>20</span>:<span>27</span></p>
                        </div>
                        <a href="javascript:buyNow(25984)" class="buy-now-deal">Mua giá sốc</a>
                        <a href="/pc-gaming-10" class="text-deal-item mt-10 color-primary font-weight-500" style="display:none;">Xem sản phẩm</a>
                    </div>
                </div>
            </div>

            <div class="product-item">
                <div class="item-deal">
                    <a href="/laptop-asus-expertbook-b1400cba-eb0678w-core-i3-1215u-8gb-256gb-intel-uhd-140-inch-fhd-win-11-den" class="product-image position-relative">
                        <img src="/media/product/250-25784-eb0678w.png" alt="Laptop Asus ExpertBook B1400CBA-EB0678W (Core i3-1215U | 8GB | 256GB | Intel® UHD | 14.0-inch FHD | Win 11 | Đen)">
                    </a>
                    <div class="product-info flex-1">
                        <a href="/laptop-asus-expertbook-b1400cba-eb0678w-core-i3-1215u-8gb-256gb-intel-uhd-140-inch-fhd-win-11-den">
                            <h3 class="product-title line-clamp-3">Laptop Asus ExpertBook B1400CBA-EB0678W (Core i3-1215U | 8GB | 256GB | Intel® UHD | 14.0-inch FHD | Win 11 | Đen)</h3>
                        </a>

                        <div class="product-martket-main d-flex align-items-center">
                            <p class="product-market-price">12.590.000 ₫</p>
                            <div class="product-percent-price">13%</div>
                        </div>

                        <div class="product-price-main font-weight-600">
                            10.900.000đ
                        </div>
                        <div class="p-quantity-sale" data-quantity-left="1" data-quantity-sale-total="5">
                            <i class="sprite sprite-fire-deal"></i>
                            <div class="bg-gradient"></div>
                            <p class="js-line-deal-left" style="width: 80%;"></p>
                            <span>Còn 1/ 5 sản phẩm</span>
                        </div>
                        <div class="js-item-deal-time js-item-time-25784">
                            <p class="time-deal-page">Kết thúc sau <span>01</span>:<span>19</span>:<span>20</span>:<span>27</span></p>
                        </div>
                        <a href="javascript:buyNow(25784)" class="buy-now-deal">Mua giá sốc</a>
                        <a href="/laptop-asus-expertbook-b1400cba-eb0678w-core-i3-1215u-8gb-256gb-intel-uhd-140-inch-fhd-win-11-den" class="text-deal-item mt-10 color-primary font-weight-500" style="display:none;">Xem sản phẩm</a>
                    </div>
                </div>
            </div>

            <div class="product-item">
                <div class="item-deal">
                    <a href="/man-hinh-gaming-aoc-27g474-fast-ips-27-inch-180hz-fhd" class="product-image position-relative">
                        <img src="/media/product/250-26469-27g2z_f.png" alt="Màn Hình Gaming AOC 27G4/74 (Fast IPS, 27 inch, 180Hz, FHD)">
                    </a>
                    <div class="product-info flex-1">
                        <a href="/man-hinh-gaming-aoc-27g474-fast-ips-27-inch-180hz-fhd">
                            <h3 class="product-title line-clamp-3">Màn Hình Gaming AOC 27G4/74 (Fast IPS, 27 inch, 180Hz, FHD)</h3>
                        </a>

                        <div class="product-martket-main d-flex align-items-center">
                            <p class="product-market-price">4.990.000 ₫</p>
                            <div class="product-percent-price">14%</div>
                        </div>

                        <div class="product-price-main font-weight-600">
                            4.300.000đ
                        </div>
                        <div class="p-quantity-sale" data-quantity-left="1" data-quantity-sale-total="7">
                            <i class="sprite sprite-fire-deal"></i>
                            <div class="bg-gradient"></div>
                            <p class="js-line-deal-left" style="width: 85.7143%;"></p>
                            <span>Còn 1/ 7 sản phẩm</span>
                        </div>
                        <div class="js-item-deal-time js-item-time-26469">
                            <p class="time-deal-page">Kết thúc sau <span>01</span>:<span>19</span>:<span>20</span>:<span>27</span></p>
                        </div>
                        <a href="javascript:buyNow(26469)" class="buy-now-deal">Mua giá sốc</a>
                        <a href="/man-hinh-gaming-aoc-27g474-fast-ips-27-inch-180hz-fhd" class="text-deal-item mt-10 color-primary font-weight-500" style="display:none;">Xem sản phẩm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
