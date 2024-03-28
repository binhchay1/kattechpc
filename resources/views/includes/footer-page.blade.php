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
                <p><a href="" target="_blank">{{ __('Thông tin tuyển dụng') }}</a></p>
                <p><a href="{{route('post')}}" target="_blank">{{ __('Tin công nghệ') }}</a></p>
                <span class="footer-middle-social">
                    <a href="" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="" target="_blank"><i class="fab fa-youtube"></i></a>
                    <a href="" target="_blank"><i class="fab fa-instagram"></i></a>
                </span>
            </div>
            <div class="footer-middle-item">
                <span class="footer-middle-title">HỖ TRỢ KHÁCH HÀNG</span>
                <p><a href="#">{{ __('Hướng dẫn mua hàng trực tuyến') }}</a>
                </p>
                <p><a href="#">Hướng dẫn thanh toán</a></p>
                <p><a href="#">Hướng dẫn mua hàng trả góp</a>
                </p>
                <p><a href="#">In hóa đơn điện tử</a>
                </p>
                <p><a href="{{route('complaint')}}">Góp ý, Khiếu Nại</a></p>
            </div>
            <div class="footer-middle-item">
                <span class="footer-middle-title">CHÍNH SÁCH CHUNG</span>
                <p><a href="{{route('rules')}}">Chính sách, quy định chung</a></p>
                <p><a href="{{route('policy')}}">Chính sách bảo hành</a></p>
                <p><a href="{{route('businessPolicy')}}">Chính sách cho doanh nghiệp</a></p>
                <p><a href="{{route('productPolicy')}}">Chính sách hàng chính hãng</a></p>
                <p><a href="#">Bảo mật thông tin khách hàng</a></p>
                <p><a href="#">Chính sách nhập lại tính phí</a></p>
            </div>
            <div class="footer-middle-item">
                <span class="footer-middle-title">THÔNG TIN KHUYẾN MẠI</span>
                <p><a href="{{route('promotion')}}" target="_blank">Thông tin khuyến mại</a></p>
                </p>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="footer-bottom-content">
            <p>© 2021 Công ty Cổ phần đầu tư công nghệ Kattech PC</p>
            <p>Địa chỉ: Tòa nhà Vicom </p>
            <p>GPĐKKD số 0101142131 do Sở KHĐT Tp.Hà Nội cấp ngày 12/9/2023</p>
            <p>Email: <a class="color-primary" href="mailto:info@kattechpc.com">info@kattechpc.com</a>. {{ __('Điện thoại') }}: <a class="color-primary" href="tel:1900 1903">1900 1903</a></p>
        </div>
    </div>
</div>

@include('includes.modal-submit-get-news')
