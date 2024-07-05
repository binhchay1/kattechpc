@extends('layouts.page')

@section('title')
<title>{{ $promotion->title }} | Kattech PC</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('css/page/promotion-detail.css') }}" />
@endsection

@section('description', __($promotion->short_description . 'với Kattech PC'))
@section('keywords', 'promotion, flash sale, sale, kattechpc, kattech')
@section('breadcrumb', $promotion->title)

<style>
    .promotion-releated {
        padding: 10px;
    }
</style>
@section('content')
<div class=" content-promotion d-flex">

    <div class="leftColumn" >
        <div class="card" style="flex-direction: column; justify-content: center;">
            <div class="flex-direction-column">
                <p style="font-size: 24px; margin: 0;">{{ $promotion->title }}</p>
                <p>{{ date_format($promotion->created_at, "F j, Y, g:i a") }}</p>
                <p>{{ $promotion->short_description }}</p>
            </div>

        </div>

        <div class="">
            <p class="">{!! $promotion->content !!}</p>
        </div>
        <p style="text-align: justify;"><span style="font-size: 12pt;"><strong>Lưu ý:</strong></span></p>
        <p><span style="font-size: 12pt;"><em>- Áp dụng cho tất cả các sản phẩm Laptop trừ Apple, Surface</em></span></p>
        <p><span style="font-size: 12pt;"><em>- KH chỉ được hưởng 1 chương trình KM trừ tiền (nếu có) - áp dụng song song với chương trình sinh viên</em></span></p>
        <p><span style="font-size: 12pt;"><em>- Khách hàng vẫn được hưởng các chương trình khuyến mại tặng quà khác (nếu có)</em></span></p>
        <p><span style="font-size: 12pt;"><strong>Kattech cam kết</strong></span></p>
        <p><span style="font-size: 12pt;">- 100% sản phẩm chính hãng</span></p>
        <p><span style="font-size: 12pt;">- 100% giá cạnh tranh so với thị trường</span></p>
        <p><span style="font-size: 12pt;"><strong>Hình thức giao hàng, dịch vụ bảo hành và chăm sóc khách hàng tại Kattech</strong></span></p>
        <p><span style="font-size: 12pt;">- <a href="https://www.phucanh.vn/page/chinh-sach-doi-tra-san-pham" target="_blank">Đổi mới sản phẩm đến 30 ngày</a></span></p>
        <p><span style="font-size: 12pt;">- Khách hàng đặt hàng sẽ được nhân viên Kattech giao hàng hoặc nhận qua dịch vụ chuyển phát nhanh</span></p>
        <p><span style="font-size: 12pt;">- Giao hàng nhanh trong nội thành Hà Nội trong vòng 2H</span></p>
        <p><span style="font-size: 12pt;">- <a href="https://www.phucanh.vn/page/chinh-sach-bao-hanh" target="_blank">Bảo hành chính hãng 100%, bảo hành tại nơi sử dụng</a></span></p>
        <p><span style="font-size: 12pt;">- Đội ngũ chăm sóc khách hàng sẵn sàng giải đáp mọi thắc mắc</span></p>
        <p><span style="font-size: 12pt;">- Các sản phẩm sẽ có hướng dẫn lắp đặt, sử dụng từ đội ngũ kĩ thuật qua kênh tin tức, video</span></p>
        <p><span style="font-size: 12pt;">- Shipper luôn đeo khẩu trang đảm bảo an toàn</span></p>
        <p><span style="font-size: 12pt;"><em>&gt;&gt;Xem thêm các chương trình khuyến mãi hấp dẫn khác </em><strong><a href="https://www.phucanh.vn/landing-page.html" target="_blank">tại đây</a></strong></span></p>
        <p><span style="font-size: 12pt;"><strong>Để biết thêm thông tin chi tiết, Quý khách vui lòng xem chi tiết trên từng sản phẩm, tới hệ thống showroom Kattech hoặc liên hệ hotline 1900 2164 (ext 1)</strong></span></p>
        <p><span style="font-size: 12pt;"><strong>Tới <a href="https://www.phucanh.vn/" target="_blank">Kattech</a> để được tư vấn và sở hữu các sản phẩm công nghệ, <a href="https://www.phucanh.vn/may-tinh-xach-tay-laptop.html" target="_blank">laptop</a>, <a href="https://www.phucanh.vn/may-tinh-de-ban.html" target="_blank">PC</a>, <a href="https://www.phucanh.vn/camera-giam-sat.html" target="_blank">camera</a>, <a href="https://www.phucanh.vn/linh-kien-pc-lap-rap.html" target="_blank">linh kiện máy tính</a>, <a href="https://www.phucanh.vn/thiet-bi-van-phong.html" target="_blank">thiết bị văn phòng</a>,... chính hãng, uy tín cùng chất lượng dịch vụ và nhiều chương trình <a href="https://www.phucanh.vn/landing-page.html" target="_blank">khuyến mãi</a> ưu đãi.</strong></span></p>
        <p><span style="font-size: 12pt;"><strong>Kattech SMART WORLD - HÀNG CHÍNH HÃNG - GIÁ LUÔN TỐT NHẤT!!!</strong></span></p>
        <p><span style="font-size: 12pt;"><strong>HOTLINE: 1900 2164</strong></span></p>
        <p><span style="font-size: 12pt;"><strong>Hệ thống Showroom Kattech:</strong></span></p>
        <p><span style="font-size: 12pt;"><strong>* Showroom 1:</strong> 15 Xã Đàn, Đống Đa, Hà Nội ✆ Tel: (024) 3968.9966 (ext 1)</span></p>
        <p><span style="font-size: 12pt;"><strong>* Showroom 2:</strong> 134 Thái Hà, Đống Đa, Hà Nội ✆ Tel: (024) 3968.9966 (ext 3)</span></p>
        <p><span style="font-size: 12pt;"><strong>* Showroom 3:</strong> 152-154 Trần Duy Hưng, Cầu Giấy, Hà Nội ✆ Tel: (024) 3968.9966 (ext 2)</span></p>
        <p><span style="font-size: 12pt;"><strong>* Showroom 4:</strong> 141-143 Phạm Văn Đồng, Cầu Giấy, Hà Nội ✆ Tel: (024) 3968.9966 (ext 5)</span></p>
        <p><span style="font-size: 12pt;"><strong>* Showroom 5:</strong> 87-89 Lê Duẩn, Cửa Nam, Hoàn Kiếm, Hà Nội ✆ Tel: (024) 3968 9966 (ext 6)</span></p>
        <p><span style="font-size: 12pt;"><strong>* Bán hàng trực tuyến:</strong> 1900 2164 (ext 1) hoặc 0974 55 88 11 </span></p>
        <p><span style="font-size: 12pt;"><strong>* Bán hàng dự án &amp; doanh nghiệp:</strong> 1900 2164 (ext 2) hoặc 038 658 6699 </span></p>
        <p><span style="font-size: 12pt;">* Fanpage Laptop, Điện thoại &amp; Thiết bị Văn phòng: <strong><a href="https://www.facebook.com/PhucAnhSmartWorld/" target="_blank">https://www.facebook.com/PhucAnhSmartWorld/</a></strong></span></p>
        <p><span style="font-size: 12pt;">* Fanpage Hi-End &amp; Gaming World: <strong><a href="https://www.facebook.com/PhucAnhGamingWorld/" target="_blank">https://www.facebook.com/PhucAnhGamingWorld</a></strong></span></p>
    </div>

    <div class="rightColumn">
        <div class="new-relate">
            <h3 id="title-post" > {{ __('Tin tức liên quan') }}</h3>
            @if($firstPosts1 != null)
            <div id="" style="margin-top: 30px">
                <div id="">
                    <img src="{{ $firstPosts1->thumbnail ?? asset( 'images/page/no-image.png') }}" alt="Image Alt" class="image-post" />
                </div>
                <div id="">
                    <h3> {{$firstPosts1->title}}</h3>
                </div>
            </div>
            @endif
            @if($postRandom)
            @foreach($postRandom as $post)
                <div id="content" >
                    <div id="left">
                        <img src="{{ $post->thumbnail ?? asset( 'images/page/no-image.png') }}" alt="Image Alt" class="image-post" />
                    </div>
                    <div id="content-right">
                        <?php $text = \Illuminate\Support\Str::limit($post->short_description, 80) ?>
                        <a href="{{ route('post.detail', $post['slug']) }}"><h3> {{$text}}</h3></a>
                    </div>
                </div>
            @endforeach
            @endif
        </div>

        <div class="new-read-late">
            <h3 id="title-post" > {{ __('Bài viết gần đây nhất') }}</h3>
            @foreach($listPromotion as $promotion)
                <div id="" style="margin-top: 30px">
                    <div id="">
                        <img src="{{  asset( $promotion->image ?? 'images/page/no-image.png') }}" alt="Image Alt" class="image-post" />
                    </div>
                    <div id="">
                        <a href="{{ route('promotion.detail', $promotion['slug']) }}">
                            <h3> {{$promotion->title}}</h3>
                        </a>

                    </div>
                    <span id="post-des">{{$promotion->short_description}}</span>
                </div>
            @endforeach
        </div>

    </div>
</div>
@endsection
