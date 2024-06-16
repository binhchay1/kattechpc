@extends('layouts.page')

@section('title')
<title>{{ __('Đăng ký') }} | Kattech PC</title>
@endsection

@section('description', 'Share text and photos with your friends and have fun')
@section('keywords', 'sharing, sharing text, text, sharing photo, photo,')
@section('breadcrumb', __('Đăng ký'))

@section('css')
<link rel="stylesheet" href="{{ asset('css/page/auth.css') }}" />
@endsection

@section('content')
<div class="container">
    <div>
        <h1>Đăng ký</h1>
    </div>
    <div class="mb-0 border-none shadow-none xl:w-2/3 card bg-white/70 dark:bg-zink-500/70">
        <div class="grid grid-cols-1 gap-0 lg:grid-cols-12">
            <div class="lg:col-span-5">
                <div class="!px-10 !py-12 card-body">

                    <div class="text-center">
                        <h4 class="mb-2 text-purple-500 dark:text-purple-500">{{ __('Chào mừng') }} !</h4>
                        <p class="text-slate-500 dark:text-zink-200">{{ __('Đăng ký để trải nghiệm nhiều tính năng khác của chúng tôi') }}</p>
                    </div>
                    <div>
                        <form method="POST" action="{{ route('register') }}" class="mt-10">
                            @csrf
                            <div class="mb-3">
                                <x-label for="name" value="{{ __('Tên') }}" />
                                <x-input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="{{ __('Nhập tên') }}" />
                                <x-input-error for="name" />
                            </div>
                            <div class="mb-3">
                                <x-label for="email" value="{{ __('Email') }}" />
                                <x-input id="email" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="{{ __('Nhập email') }}" />
                                <x-input-error for="email" />
                            </div>
                            <div class="mb-3">
                                <x-label for="password" value="{{ __('Mật khẩu') }}" />
                                <x-input id="password" type="password" name="password" required autocomplete="new-password" placeholder="{{ __('Nhập mật khẩu') }}" />
                                <x-input-error for="password" />
                            </div>
                            <div class="mb-3">
                                <x-label for="password_confirmation" value="{{ __('Xác nhận mật khẩu') }}" />
                                <x-input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="{{ __('Nhập xác nhận mật khẩu') }}" />
                            </div>

                            <div class="mt-5">
                                <button type="submit" class="w-full text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                                    {{ __('Đăng ký') }}</button>
                            </div>
                        </form>
                        <div class="relative text-center my-9 before:absolute before:top-3 before:left-0 before:right-0 before:border-t before:border-t-slate-200 dark:before:border-t-zink-500">
                            <h5 class="inline-block px-4 py-0.5 text-sm bg-white text-slate-500 dark:bg-zink-700 dark:text-zink-200 rounded relative">
                                {{ __('Tạo tài khoản với') }}
                            </h5>
                        </div>

                        <x-social-login />

                        <div class="mt-10 text-center">
                            <p class="mb-0 text-slate-500 dark:text-zink-200">{{ __('Bạn đã có tài khoản ?') }}<a href="{{ route('login') }}" class="font-semibold underline transition-all duration-150 ease-linear text-slate-500 dark:text-zink-200 hover:text-custom-500 dark:hover:text-custom-500" style="margin-left: 10px;">{{ __('Đăng nhập') }}</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
