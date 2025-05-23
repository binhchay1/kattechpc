@extends('layouts.master-without-nav')

@section('title')
{{ __('Bảo trì') }}
@endsection

@section('content')
<script type="text/javascript">
</script>
<div class="mb-0 border-none shadow-none lg:w-[500px] card bg-white/70 dark:bg-zink-500/70">
    <div class="!px-10 !py-12 card-body">
        <div class="mt-10">
            <img src="{{ URL::asset('build/images/auth/maintenance.png') }}" alt="" class="h-64 mx-auto">
        </div>
        <div class="mt-8 text-center">
            <h4 class="mb-2 text-purple-500">{{ __('Bảo trì') }}</h4>
            <p class="mb-6 text-slate-500 dark:text-zink-200">{{ __('Xin lỗi, Chúng tôi đang tiến hành bảo trì hệ thống. Vui lòng quay lại sau!') }}</p>
            @if(!Auth::check())
                <a href="{{  route('home') }}" class="text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i data-lucide="home" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">{{ __('Quay lại trang chủ') }}</span></a>
            @else
                @if(auth()->user()->role == "admin")
                    <a href="{{  route('admin.dashboard') }}" class="text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i data-lucide="home" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">{{ __('Quay lại trang chủ') }}</span></a>
                @else
                    <a href="{{  route('home') }}" class="text-white transition-all duration-200 ease-linear btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20"><i data-lucide="home" class="inline-block size-3 ltr:mr-1 rtl:ml-1"></i> <span class="align-middle">{{ __('Quay lại trang chủ') }}</span></a>
                @endif
            @endif
        </div>
    </div>
</div>
@endsection
