@extends('layouts.page')

@section('title')
    <title>{{ __('Trang chủ') }} | Kattech PC</title>
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('/plugins/owlcarousel/owl.theme.default.min.css') }}"/>
    <link rel="stylesheet" href="{{ asset('css/page/profile.css') }}"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
@endsection

@section('content')
    <div class="row">
        <div class="leftcolumn">
            <div class="card">
                <h2></h2>
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
                <a href="#" >
                    <div class="hover">
                        <h5>{{__('Thay đổi mật khẩu')}}</h5>
                    </div>
                </a>
                <a href="#">
                    <div class="hover">
                        <h5>{{__('Đăng xuất')}}</h5>
                    </div>
                </a>
            </div>
        </div>
        <div class="rightcolumn">
            <div class="card">
                <h2>{{__('Thay đổi mật khẩu')}}</h2>
                <form method="POST" action="{{ route('update-password') }}"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 xl:grid-cols-12">
                        <div class="xl:col-span-6 account">
                            <label for="productNameInput" class="inline-block mb-2 text-base font-medium">{{__('Mật khẩu hiện tại')}}</label>
                            <input type="password" id="productNameInput" name="old_password" value=""
                                   class="form-input "
                                   placeholder="{{__('Mật khẩu cũ')}}" >
                            @if ($errors->has('old_password'))
                                <span class="text-danger">{{ $errors->first('old_password') }}</span>
                            @endif
                        </div><!--end col-->

                        <div class="xl:col-span-6 account">
                            <label for="productCodeInput" class="">{{__('Mật khẩu mới')}}
                            </label>
                            <input type="password" id="" name="new_password"
                                   class="form-input "
                                   placeholder="{{__('Mật khẩu mới')}}">
                            @if ($errors->has('new_password'))
                                <span class="text-danger">{{ $errors->first('new_password') }}</span>
                            @endif

                        </div><!--end col-->
                        <div class="xl:col-span-6 account">
                            <div class="xl:col-span-4 mt-4">
                                <label for="productCodeInput" class="inline-block mb-2 text-base font-medium">{{__('Nhập lại mật khẩu')}}
                                </label>
                                <input type="password" id="productCodeInput" name="new_password_confirmation" value=""
                                       class="form-input "
                                       placeholder="{{__('Nhập lại mật khẩu')}}">
                                @if ($errors->has('new_password_confirmation'))
                                    <span class="text-danger">{{ $errors->first('new_password_confirmation') }}</span>
                                @endif
                            </div>
                        </div>
                    </div><!--end grid-->
                    <div class="flex justify-end gap-2 mt-4">
                        <button type="reset"
                                class="btn-reset">{{__('Xóa toàn bộ')}}</button>
                        <button type="submit"
                                class="btn-submit">{{__('Sửa thông tin')}}</button>
                    </div>
                </form>
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
