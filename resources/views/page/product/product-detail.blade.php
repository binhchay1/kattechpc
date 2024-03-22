@extends('layouts.page')

@section('title')
<title>{{ __('Trang chủ') }} | Kattech PC</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('/plugins/owlcarousel/owl.theme.default.min.css') }}" />
<link rel="stylesheet" href="{{ asset('/css/page/product-detail.css') }}" />
@endsection

@section('content')

<div class="container">

<section class="product-container">
    <div class="img-card">
        <img src="{{ $product->image }}" alt="" id="featured-image">
        <div class="small-Card">
            <img src="{{ $product->image }}" alt="" class="small-Img">
            <img src="{{ $product->image }}" alt="" class="small-Img">
            <img src="{{ $product->image }}" alt="" class="small-Img">
        </div>
    </div>

    <div class="product-info">
        <h3>{{ $product->name }}</h3>
        <h5>{{ __('Giá ') }}: {{ $product->price }} <del>$1700000 đ</del></h5>
        <p><span style="font-size:18px">✔ {{ __('Hỗ trợ đổi mới trong 7 ngày') }}.&nbsp;</span></p>
        <p><span style="font-size:18px">✔ {{ __('Bảo hành: 24 Tháng. Bảo hành tại hãng. Bảo hành toàn cầu. Đổi mới 30 ngày') }}.&nbsp;</span></p>
        <p><span style="font-size:18px">✔ {{ __(' Miễn phí giao hàng toàn quốc.') }}.&nbsp;</span></p>

        <div class="quantity mt-4">
            <a href="{{route('addCart', $product['slug'])}}">
                <button class="btn-buy">{{__('MUA NGAY')}}</button>
            </a>
        </div>

        <div class="gift-product">
            <div class="gift" style="background: #ddd;">
                <h2 style="margin-left: 10px;">{{__('Quà tặng và ưu đã đi ')}}</h2>
            </div>
            <div class="gift-promotion">
                <hr>
                <div>
                    <p><span style="font-size:18px"> ✦ {{__('Tặng phiếu vệ sinh bảo dưỡng Laptop, PC miễn phí trọn đời trị giá 999.000đ (THEK417) ')}} .&nbsp;</span></p>
                    <p><span style="font-size:18px"> ✦ {{__('Giảm ngay 50.000đ khi mua Balo, Cặp, Túi chống sốc cao cấp thương hiệu WIWU ')}} .&nbsp;</span></p>
                    <p><span style="font-size:18px"> ✦ {{__('Giảm ngay 100.000đ khi mua Ram Laptop thương hiệu KINGSTON, LEXAR ')}} .&nbsp;</span></p>
                    <p><span style="font-size:18px"> ✦ {{__('Giảm ngay 200.000đ khi mua Ghế công thái học thương hiệu LEGION ')}} .&nbsp;</span></p>
                    <p><span style="font-size:18px"> ✦ {{__(' Từ ngày 15/10/2023 đến ngày 30/11/2023 Ưu đãi giảm giá sốc khi mua màn hình Samsung kèm Laptop/PC HACOM (chi tiết truy cập tại đây) ')}} .&nbsp;</span></p>
                    <p><span style="font-size:18px"> ✦ {{__(' Ưu đãi lớn khi mua kèm Loa Swan chính hãng do HACOM phân phối ')}} .&nbsp;</span></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="product-container">
    <div class="product-info">
        <h3>{{__('Thông tin sản phẩm')}}</h3>
            <table>
                <tr>
                    <th col="300"></th>
                    <th></th>
                </tr>
                <tr>
                    <td>CPU</td>
                    <td>Intel® Core™ i5-12450HX, 8C (4P + 4E) / 12T, P-core up to 4.4GHz, E-core up to 3.1GHz, 12MB</td>
                </tr>
                <tr>
                    <td>RAM</td>
                    <td>8GB (1 x 8GB) DDR5-4800 SO-DIMM (Còn trống 1 khe, tối đa 32GB)</td>
                </tr>
                <tr>
                    <td>Ổ cứng</td>
                    <td>512GB SSD M.2 2242 PCIe 4.0x4 NVMe (2 Slots: M.2 2242/M.2 2280 PCIe 4.0 x4)</td>
                </tr>
                <tr>
                    <td>Card đồ họa</td>
                    <td>NVIDIA® GeForce RTX™ 2050 4GB GDDR6, Boost Clock 1575MHz, TGP 65W</td>
                </tr>
                <tr>
                    <td>Màn hình</td>
                    <td>15.6" FHD (1920x1080) IPS 300nits Anti-glare, 100% sRGB, 144Hz, G-SYNC®</td>
                </tr>

            </table>
        </div>

    <div class="product-related">
        <h3 > {{ __('Sản phẩm liên quan') }}</h3>
        @foreach($productRelated as $related)
            <div> <a href="{{ route('productDetail', $related->name) }}" style="margin: 20px">
                    <img src="{{ $related->image }}" alt="Image Alt" width="200" height="150"/>
                </a>
            </div>
            <div>
                <div id="related-name">{{ $related->name }}12121313131313</div>
                <div id="related-price">{{ $related->price }}</div>
            </div>
        @endforeach
    </div>
</section>

<section class="comment">
    <div class="gift-product">
        <div class="gift-promotion">
            <div class="">
                <textarea id="comment" placeholder="Mời bạn để lại bình luận..." onfocus="$('.js-actions-comment-2020').show();" name="user_post[content]"></textarea>
                <div class="actions-comment-2020 js-actions-comment-2020 ">
                    <div class="actions-comment-wrap">
                        <div class="cmt_right float-right">
                            <button class="btn btn-primary btn-comment">{{__('Bình luận')}}</button>
                        </div>
                        <div class="js-preview-upload" id="js-preview-file-upload-comment"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

@section('js')
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('/plugins/owlcarousel/owl.carousel.min.js') }}"></script>
<script>
    $('.vendor-carousel').owlCarousel({
        loop: true,
        nav: false,
        autoplay: true,
        smartSpeed: 1000,
    });
</script>
@endsection
