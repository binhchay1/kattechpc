@extends('layouts.page')

@section('title')
    <title>{{ __('Trang chủ') }} | Kattech PC</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('/plugins/owlcarousel/owl.theme.default.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/page/business-policy.css') }}"/>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="column">
                <h1>{{__('CHÍNH SÁCH CHO DOANH NGHIỆP')}}</h1>
                <h2>{{__('CAM KẾT GIÁ TỐT NHẤT THỊ TRƯỜNG')}}</h2>
            </div>
            <div class="column">
                <img class="image-pc" src="{{asset('/images/page/pc-setup.jpg')}}">
            </div>
        </div>

        <div class=" top">
            <div class=" ml-200px">
                <h3>{{__('10 LÝ DO DOANH NGHIỆP CHỌN KATTECH')}}</h3>
            </div>
        </div>

        <div class=" top1">
            <div class="parent">
                <div class="child">
                    <span class="policy-title">{{ __('Công ty uy tín') }}</span>
                </div>
                <div class="child">
                    <span class="policy-title">{{ __('Hàng hóa đa dạng, chính hãng') }}</span>
                </div>
                <div class="child">
                    <span class="policy-title">{{ __('Miễn phí vận chuyển và lắp đặt') }}</span>
                </div>
                <div class="child">
                    <span class="policy-title">{{ __('Giai hàng nhanh chóng') }}</span>
                </div>
                <div class="child">
                    <span class="policy-title">{{ __('Chăm sóc khách hàng 24/7') }}</span>
                </div>  <div class="child">
                    <p class="policy-title">{{ __('Thanh toán thuận tiện, an toàn') }}</p>
                </div>
                <div class="child">
                    <span class="policy-title">{{ __('Đổi hàng trong vòng 15 ngày') }}</span>
                </div>
                <div class="child">
                    <span class="policy-title">{{ __('Nhận và bảo hành tại nơi sử dụng') }}</span>
                </div>
                <div class="child">
                    <span class="policy-title">{{ __('Chính sách tốt cho doanh nghiệp') }}</span>
                </div>
                <div class="child">
                    <span class="policy-title">{{ __('Đội ngũ chuyên nghiệp, chu đáo') }}</span>
                </div>
            </div>
        </div>

        <div class=" top">
                <h3>{{__('ĐỐI TÁC ĐÁNG TIN CẬY')}}</h3>
            <h4>{{__('HACOM là đối tác số 1 cung cấp chính hãng các sản phẩm công nghệ đến từ các thương hiệu hàng đầu thế giới tại Việt Nam.
                Sản phẩm đầy đủ 100% giấy tờ - Cam kết chứng minh nguồn gốc xuất xứ.')}}</h4>
        </div>

        <div class=" top">
           <img class="top-image" style="" src="https://hoabinhcomputer.com/mediacenter/media/images/2209/news/ava/best-laptop-brand-1698568664.jpg">
        </div>

        <div class=" top">
            <h3>{{__('Liên hệ')}}</h3>
            <h4>{{__('Bộ phận doanh nghiệp công ty ')}}</h4>
        </div>

        <div class=" top1">
            <div class="parent">
                <div class="child1">
                    <span class="policy-title">Tên: {{ __('Nguyễn Văn A') }}</span>
                    <br>
                    <span class="policy-title">Email: {{ __('nguyenvana@gmail.com') }}</span>
                    <br>
                    <span class="policy-title">Liên hệ: {{ __('0945333422/0355545643') }}</span>
                    <br>
                    <button class="btn btn-button">Phụ trách</button>
                </div>
                <div class="child1">
                    <span class="policy-title">Tên: {{ __('Nguyễn Văn A') }}</span>
                    <br>
                    <span class="policy-title">Email: {{ __('nguyenvana@gmail.com') }}</span>
                    <br>
                    <span class="policy-title">Liên hệ: {{ __('0945333422/0355545643') }}</span>
                    <br>
                    <button class="btn btn-button">Phụ trách</button>
                </div>
                <div class="child1">
                    <span class="policy-title">Tên: {{ __('Nguyễn Văn A') }}</span>
                    <br>
                    <span class="policy-title">Email: {{ __('nguyenvana@gmail.com') }}</span>
                    <br>
                    <span class="policy-title">Liên hệ: {{ __('0945333422/0355545643') }}</span>
                    <br>
                    <button class="btn btn-button">Phụ trách</button>
                </div>
                <div class="child1">
                    <span class="policy-title">Tên: {{ __('Nguyễn Văn A') }}</span>
                    <br>
                    <span class="policy-title">Email: {{ __('nguyenvana@gmail.com') }}</span>
                    <br>
                    <span class="policy-title">Liên hệ: {{ __('0945333422/0355545643') }}</span>
                    <br>
                    <button class="btn btn-button">Phụ trách</button>
                </div>
                <div class="child1">
                    <span class="policy-title">Tên: {{ __('Nguyễn Văn A') }}</span>
                    <br>
                    <span class="policy-title">Email: {{ __('nguyenvana@gmail.com') }}</span>
                    <br>
                    <span class="policy-title">Liên hệ: {{ __('0945333422/0355545643') }}</span>
                    <br>
                    <button class="btn btn-button">Phụ trách</button>
                </div>
                <div class="child1">
                    <span class="policy-title">Tên: {{ __('Nguyễn Văn A') }}</span>
                    <br>
                    <span class="policy-title">Email: {{ __('nguyenvana@gmail.com') }}</span>
                    <br>
                    <span class="policy-title">Liên hệ: {{ __('0945333422/0355545643') }}</span>
                    <br>
                    <button class="btn btn-button">Phụ trách</button>
                </div>



            </div>
        </div>
    </div>

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
