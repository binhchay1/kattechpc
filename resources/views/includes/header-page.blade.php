<div class="header">
    <div class="header-top">
        <div class="header-top-container">
            <div class="header-top-left">
                <span class="header-top-hotline"> {{ __('Gọi mua hàng:') }} <span class="hotline"><a href="tel:1900.1903">1900.1903</a></span> <i class="fa fa-phone"></i></span>
            </div>
            <div class="header-top-right">
                <div>
                    <a href="{{ route('policy') }}" class="sep-item-link" target="_blank"><i class="fa fa-pen"></i> {{ __('Chính sách bảo hành') }}</a>
                </div>
                <div class="ml-15px">
                    <a href="{{ route('support') }}" class="sep-item-link" target="_blank"><i class="fa fa-wrench"></i> {{ __('Hỗ trợ') }}</a>
                </div>
                <div class="ml-15px">
                    <a href="{{ route('promotion') }}" class="sep-item-link" target="_blank"><i class="fa fa-tag"></i> {{ __('Khuyến mại') }}</a>
                </div>

                @if(Auth::check())
                <div class="ml-15px">
                    <a href="{{ route('account') }}" class="sep-item-link" target="_blank"><i class="fa fa-user"></i> {{ __('Tài khoản') }}</a>
                </div>
                @else
                <div class="ml-15px">
                    <a href="/register" class="sep-item-link" target="_blank"><i class="fa fa-address-book"></i> {{ __('Đăng ký') }}</a>
                </div>
                <div class="ml-15px">
                    <a href="/login" class="sep-item-link" target="_blank"><i class="fa fa-home"></i> {{ __('Đăng nhập') }}</a>
                </div>
                @endif
            </div>
        </div>
    </div>

    <div class="header-bottom">
        <div class="header-bottom-container">
            <div class="logo">
                <a href="/">
                    <img src="{{ asset('/images/logo/logo.png') }}" alt="logo Kattech PC" width="232" height="211" class="loading">
                </a>
            </div>

            <div class="search-area ml-40px">
                <div class="input-search">
                    <form name="search" method="post" action="/search">
                        <div class="input-text"><input type="text" name="q" class="inline-search" placeholder="Nhập tên sản phẩm, từ khóa cần tìm" autocomplete="off" field_signature="1012080445"></div>
                        <button type="submit" class="button-search"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>

            <div class="action-area d-flex ml-20px">
                <div class="build-area">
                    <a href="/build-pc">
                        <i class="fa fa-screwdriver"></i>
                        <span>{{ __('Xây dựng cấu hình') }}</span>
                    </a>
                </div>
                <div class="cart-area ml-20px">
                    <a href="{{route('page.cart.index')}}">
                        <i class="fa fa-shopping-cart"></i>
                        <span>{{ __('Giỏ hàng') }}</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
