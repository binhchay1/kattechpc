@extends('layouts.page')

@section('title')
    <title>{{ __('Trang chủ') }} | Kattech PC</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{ asset('/plugins/owlcarousel/owl.theme.default.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/css/page/product-detail.css') }}" />
@endsection

@section('content')
    <body>

    <!-- product section -->
    <section class="product-container">
        <!-- left side -->
        <div class="img-card">
            <img src="img/image-1.png" alt="" id="featured-image">
            <!-- small img -->
            <div class="small-Card">
                <img src="img/image-1.png" alt="" class="small-Img">
                <img src="img/small-img-2.png" alt="" class="small-Img">
                <img src="img/small-img-3.png" alt="" class="small-Img">
                <img src="img/image-1.png" alt="" class="small-Img">
            </div>
        </div>
        <!-- Right side -->
        <div class="product-info">
            <h3>{{$product->name}}</h3>
            <h5>{{__('Giá ')}}: {{$product->price}} <del>$170</del></h5>
            <p><span style="font-size:18px">✔ {{__('Hỗ trợ đổi mới trong 7 ngày')}}.&nbsp;</span></p>
            <p><span style="font-size:18px">✔ {{__('Bảo hành: 24 Tháng. Bảo hành tại hãng. Bảo hành toàn cầu. Đổi mới 30 ngày')}}.&nbsp;</span></p>
            <p><span style="font-size:18px">✔ {{__(' Miễn phí giao hàng toàn quốc.')}}.&nbsp;</span></p>

            <div class="quantity mt-4">
                <form action="{{ route('page.cart.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                <h4><span style="font-size:18px">{{__('Số Lượng')}}&nbsp;<input type="number" value="1" min="1"></span></h4>
                <button class="btn-buy">{{__('MUA NGAY')}}</button>
                </form>
            </div>

            <div class="gift-product">
                <div class="gift">
                    <h2>{{__('Quà tặng và ưu đã đi ')}}</h2>
                </div>
                <div class="gift-promotion">
                    <hr>
                    <div class="">
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
        <!-- Right side -->
        <div class="product-info">
            <h3>{{__('Thông tin sản phẩm')}}</h3>

            <table>
                <tr>
                    <th width="200">Company</th>
                    <th>Country</th>
                </tr>
                <tr>
                    <td>Alfreds Futterkiste</td>
                    <td>Maria Anders</td>
                </tr>
            </table>
        </div>
        <!-- left side -->
        <div class="">
            <div class="row top1">
                <h2 class="text"> {{__('Sản phẩm liên quan')}}</h2>
                <div id="content">
                    <div id="left">
                        <img src="https://source.unsplash.com/87kYkk3oHTM/395x225" alt="Image Alt" class="img-fluid" />

                    </div>
                    <div id="right">
                        <div id="object3">lorem ipsum</div>
                        <div id="object4">dolor site amet</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="comment">
        <!-- Right side -->
        <div class="gift-product">
            <div class="gift-promotion">
                <div class="">
                    <textarea id="comment" placeholder="Mời bạn để lại bình luận..." onfocus="$('.js-actions-comment-2020').show();" name="user_post[content]"></textarea>
                    <div class="actions-comment-2020 js-actions-comment-2020 ">
                        <div class="actions-comment-wrap">
                            <div class="cmt_right float-right">
                               <button class="btn btn-primary btn-comment">{{__('Bình luận')}}</button>
                            </div>
                            <div class="js-preview-upload" id="js-preview-file-upload-comment" style=""></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- script tags -->
    </body>
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
