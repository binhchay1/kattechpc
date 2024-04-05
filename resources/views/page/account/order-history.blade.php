@extends('layouts.page')

@section('title')
    <title>{{ __('Trang chủ') }} | Kattech PC</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('/plugins/owlcarousel/owl.theme.default.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/page/profile.css') }}"/>
    <link rel="stylesheet" href="{{ asset('/css/page/cart.css') }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@endsection

@section('content')
    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <h2>{{$dataUser->name}}</h2>
                <a href="#" >
                    <div class="hover">
                        <h5>{{__('Thông tin tài khoản')}}</h5>
                    </div>
                </a>
                <a href="#" >
                    <div class="hover">
                        <h5>{{__('Quản lý đơn hàng')}}</h5>
                    </div>
                </a>
                <a href="{{route('change-password')}}" >
                    <div class="hover">
                        <h5>{{__('Thay đổi mật khẩu')}}</h5>
                    </div>
                </a>
                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <a onclick="this.closest('form').submit();return false;" >
                        <div class="hover">
                            <h5>{{__('Đăng xuất')}}</h5>
                        </div></a>
                </form>
            </div>
        </div>
        <div class="rightcolumn">
            <div class="card">
                <h2>{{__('Lịch sử mua hàng')}}</h2>
                <div class="basket " style="width: 100%;">
                    <div class="basket-labels">
                        <ul>
                            <li class="item item-heading">{{__('Sản phẩm')}}</li>
                            <li class="price">{{__('Giá')}}</li>
                            <li class="quantity">{{__('Số lượng')}}</li>
                            <li class="subtotal">{{__('Thành tiền')}}</li>
                        </ul>
                    </div>
                    @foreach($dataUser->orders as $orderHistory)
                        <div class="basket-product">
                            <div class="item">
                                <div class="price">11111đ</div>
                                <div class="product-image">
                                    <img src="" alt="Placholder Image 2" class="product-frame">
                                </div>
                            </div>
                            <div class="price">11111đ</div>
                            <div class="quantity">
                                <input type="number" value="1" min="1" class="quantity-field "  disabled>
                            </div>
                            <div class="subtotal get-total" id="total">111111đ</div>
                        </div>
                    @endforeach
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


    <script>
        setTimeout(function() {
            $('.alert-block').remove();
        }, 5000);
    </script>
@endsection
