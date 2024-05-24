<div class="newsletter">
    <div class="newsletter-area">
        <div class="newsletter-title">
            <p class="newsletter-title">{{ __('ĐĂNG KÝ NHẬN EMAIL THÔNG BÁO KHUYẾN MẠI HOẶC ĐỂ ĐƯỢC TƯ VẤN MIỄN PHÍ') }}</p>
        </div>
        <div class="newsletter-form">
            <input type="text" name="" id="email_newsletter" placeholder="Nhập email hoặc số điện thoại của bạn">
            <a class="footer-subscribe-button" id="news-button-summit">{{ __('Gửi') }}</a>
        </div>
    </div>
</div>

<div class="footer">
    <div class="footer-container">
        <div class="policy-area">
            <div class="policy-item">
                <div class="policy-icon"><i class="fa fa-shipping-fast"></i></div>
                <div class="d-flex flex-column ml-10px">
                    <span class="policy-title">{{ __('CHÍNH SÁCH GIAO HÀNG') }}</span>
                    <span class="policy-content">{{ __('Nhận hàng và thanh toán tại nhà') }}</span>
                </div>
            </div>
            <div class="policy-item">
                <div class="policy-icon"><i class="fa fa-sync"></i></div>
                <div class="d-flex flex-column ml-10px">
                    <span class="policy-title">{{ __('ĐỔI TRẢ DỄ DÀNG') }}</span>
                    <span class="policy-content">{{ __('1 đổi 1 trong 15 ngày') }}</span>
                </div>
            </div>
            <div class="policy-item">
                <div class="policy-icon"><i class="fa fa-credit-card"></i></div>
                <div class="d-flex flex-column ml-10px">
                    <span class="policy-title">{{ __('THANH TOÁN TIỆN LỢI') }}</span>
                    <span class="policy-content">{{ __('Trả tiền mặt, CK, trả góp 0%') }}</span>
                </div>
            </div>
            <div class="policy-item">
                <div class="policy-icon"><i class="fa fa-comments"></i></div>
                <div class="d-flex flex-column ml-10px">
                    <span class="policy-title">{{ __('HỖ TRỢ NHIỆT TÌNH') }}</span>
                    <span class="policy-content">{{ __('Tư vấn, giải đáp mọi thắc mắc') }}</span>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-middle">
        <div class="footer-middle-content">
            <div class="footer-middle-item">
                <span class="footer-middle-title">{{ __('GIỚI THIỆU') }} KATTECH</span>
                <p><a href="">{{ __('Giới thiệu công ty') }}</a></p>
                <p><a href="" target="_blank">{{ __('Liên hệ hợp tác kinh doanh') }}</a></p>
                <p><a href="{{ route('post') }}" target="_blank">{{ __('Tin công nghệ') }}</a></p>
                <span class="footer-middle-social">
                    <a href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="" target="_blank"><i class="fab fa-instagram"></i></a>
                </span>
            </div>
            <div class="footer-middle-item">
                <span class="footer-middle-title">{{ __('HỖ TRỢ KHÁCH HÀNG') }}</span>
                <p><a href="{{ route('paymentOnline') }}">{{ __('Hướng dẫn mua hàng trực tuyến') }}</a>
                </p>
                <p><a href="{{ route('payment') }}">{{__('Hướng dẫn thanh toán')}}</a></p>
                <p><a href="{{ route('electronicBill') }}">{{ __('In hóa đơn điện tử') }}</a>
                </p>
                <p><a href="{{ route('complaint') }}">{{ __('Góp ý, Khiếu Nại') }}</a></p>
            </div>
            <div class="footer-middle-item">
                <span class="footer-middle-title">{{ __('CHÍNH SÁCH CHUNG') }}</span>
                <p><a href="{{ route('rules') }}">{{ __('Chính sách, quy định chung') }}</a></p>
                <p><a href="{{ route('policy') }}">{{ __('Chính sách bảo hành') }}</a></p>
                <p><a href="{{ route('businessPolicy') }}">{{ __('Chính sách cho doanh nghiệp') }}</a></p>
                <p><a href="{{ route('productPolicy') }}">{{ __('Chính sách hàng chính hãng') }}</a></p>
                <p><a href="{{ route('securityCustomer') }}">{{ __('Bảo mật thông tin khách hàng') }}</a></p>
            </div>
            <div class="footer-middle-item">
                <span class="footer-middle-title">{{ __('THÔNG TIN KHUYẾN MẠI') }}</span>
                <p><a href="{{ route('promotion') }}" target="_blank">{{ __('Thông tin khuyến mại') }}</a></p>
                </p>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="footer-bottom-content">
            <p>{{__('© 2021 Công ty Cổ phần đầu tư công nghệ Kattech PC')}}</p>
            <p>{{__('Địa chỉ: Tòa nhà Vicom')}} </p>
            <p>{{__('GPĐKKD số 0101142131 do Sở KHĐT Tp.Hà Nội cấp ngày 12/9/2023')}}</p>
            <p>Email: <a class="color-primary" href="mailto:info@kattechpc.com">info@kattechpc.com</a>. {{ __('Điện thoại') }}: <a class="color-primary" href="tel:1900 1903">1900 1903</a></p>
        </div>
    </div>
</div>
<div id="toolbar-menu-mobile" class="toolbar-menu-mobile  d-xl-none d-lg-none hSticky hSticky-nav hSticky-up bottomMenu">
    <ul style="padding: 0;">
        @if(Auth::check())
            <li class="item">
                <a href="{{ route('profile') }}">
				<span class="icon">
					<i class="fa fa-user-o" aria-hidden="true"></i>
				</span>
                    <span>{{Auth::user()->name}}</span>
                </a>
            </li>
        @else
        <li class="item">
            <a href="{{ route('login') }}">
				<span class="icon">
					<i class="fa fa-user-o" aria-hidden="true"></i>
				</span>
                <span>Khách hàng</span>
            </a>
        </li>
        @endif
        <li class="item">
            <a href="{{ route('showCart') }}"class="js-click-menu-mb" id="">
				<span class="icon">
				<i class="fa fa-shopping-cart" aria-hidden="true"></i>
				</span>
                <span>Giỏ hàng</span>
            </a>
        </li>
        <li class="item ">
            <a href="{{ route('post') }}">
					<span class="icon">
					<i class="fa fa-newspaper-o" aria-hidden="true"></i>
				</span>
                <span>Tin tức</span>
            </a>
        </li>
        <li class="item about-smember ">
            <a href="/account">
				<span class="icon">
					<i class="fa fa-youtube-play" aria-hidden="true"></i>
				</span>
                <span>Youtube</span>
            </a>
        </li>
    </ul>
</div>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>

<style>
    .bottomMenu {
        display: none;
        position: fixed;
        bottom: 0;
        width: 100%;
        height: 60px;
        border-top: 1px solid #000;
    }
</style>
<script>
    $(document).scroll(function () {
        var y = $(this).scrollTop();
        if (y > 800) {
            $('.bottomMenu').fadeIn();
        } else {
            $('.bottomMenu').fadeOut();
        }

    });
</script>
@include('includes.modal-submit-get-news')
