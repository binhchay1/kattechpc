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
                <h2>{{__('Thông tin tài khoản')}}</h2>
                <form method="POST" action="{{route('updateProfile', $dataUser['id'])}}"  enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 xl:grid-cols-12">
                        <div class="xl:col-span-6 account">
                            <label for="productNameInput" class="inline-block mb-2 text-base font-medium">{{__('Tên người dùng')}}</label>
                            <input type="text" id="productNameInput" name="name" value="{{$dataUser->name}}"
                                   class="form-input  "
                                   placeholder="{{__('Tên người dùng')}}" >
                            @if ($errors->has('name'))
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div><!--end col-->

                        <div class="xl:col-span-6 account">
                            <label for="productCodeInput" class="">{{__('Địa chỉ email')}}
                            </label>
                            <input type="text" id="" name="email" value="{{$dataUser->email}}"
                                   class="form-input "
                                   placeholder="{{__('Địa chỉ email')}}">
                            @if ($errors->has('email'))
                                <span class="text-danger">{{ $errors->first('email') }}</span>
                            @endif
                        </div><!--end col-->

                        <div class="xl:col-span-6 account">
                            <div class="form-group">
                                <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{__('Hình ảnh')}}</label>
                                <div class="">
                                    <div class="" style="display: inline-grid;">
                                        <input value="" type="file" class="border-0 bg-light pl-0" name="profile_photo_path" id="image" hidden>
                                        <div class=" choose-avatar">
                                            <div id="btnimage">
                                                <img id="showImage" class="show-avatar" src="{{asset( $dataUser->profile_photo_path ?? '/images/user/avatar.jpg') }}" alt="avatar" >
                                            </div>
                                            <div id="button">
                                                <i id="btn_chooseImg" class="fas fa-camera"> {{ __('Chọn hình ảnh') }}</i>
                                            </div>
                                        </div>
                                        @if ($errors->has('profile_photo_path'))
                                            <span class="text-danger">{{ $errors->first('profile_photo_path') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="xl:col-span-6 account">

                            <div class="xl:col-span-4 mt-4">
                                <label for="productCodeInput" class="inline-block mb-2 text-base font-medium">{{__('Địa chỉ')}}
                                </label>
                                <input type="text" id="productCodeInput" name="address" value="{{$dataUser->address}}"
                                       class="form-input "
                                       placeholder="{{__('Địa chỉ')}}">
                                @if ($errors->has('address'))
                                    <span class="text-danger">{{ $errors->first('address') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="xl:col-span-6 account">
                            <label for="productCodeInput" class="inline-block mb-2 text-base font-medium">{{__('Số điện thoại')}}
                            </label>
                            <input type="text" id="productCodeInput" name="phone" value="{{$dataUser->phone}}"
                                   class="form-input "
                                   placeholder="{{__('Số điện thoại')}}">
                            @if ($errors->has('phone'))
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                            @endif
                        </div><!--end col-->

                        <div class="xl:col-span-6 account">
                            <label for="productPrice" class="inline-block mb-2 text-base font-medium">{{__('Ngày sinh')}}</label>
                            <input type="date" id="productPrice" name="age" value="{{$dataUser->age}}"
                                   class="form-input "
                                   placeholder="Enter User Age" >
                            @if ($errors->has('age'))
                                <span class="text-danger">{{ $errors->first('age') }}</span>
                            @endif
                        </div><!--end col-->

                        <div class="xl:col-span-6 account">
                            <label for="productStatus" class="inline-block mb-2 text-base font-medium">{{__('Giới tính')}}</label>
                            <select
                                class="form-input "
                                data-choices data-choices-search-false  id="productStatus" name="sex">
                                @foreach($genderUser as $gender => $value)
                                    <option value="{{ $value }}" {{$value == $dataUser->sex ? 'selected' : ''}}>{{ $value }}</option>
                                @endforeach
                            </select>
                        </div><!--end col-->
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
