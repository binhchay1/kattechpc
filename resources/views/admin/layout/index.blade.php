@extends('layouts.master-admin')

@section('title')
{{ __('Giao diện') }}
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('css/admin/layout.css') }}">
@endpush

@section('content')
<div class="grid grid-cols-1 gap-x-5 xl:grid-cols-12 mt-4">
    <div class="xl:col-span-12">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">{{ __('Giao diện') }}</h6>
                <div>
                    <ul class="flex flex-wrap w-full text-sm font-medium text-center border-b border-slate-200 dark:border-zink-500 nav-tabs">
                        <li class="group active">
                            <a href="javascript:void(0);" data-tab-toggle data-target="home" class="inline-block px-4 py-2 text-base transition-all duration-300 ease-linear rounded-t-md text-slate-500 dark:text-zink-200 border border-transparent group-[.active]:text-custom-500 group-[.active]:border-slate-200 dark:group-[.active]:border-zink-500 group-[.active]:border-b-white dark:group-[.active]:border-b-zink-700 hover:text-custom-500 active:text-custom-500 dark:hover:text-custom-500 dark:active:text-custom-500 dark:group-[.active]:hover:text-white -mb-[1px]">{{ __('Trang chủ') }}</a>
                        </li>
                    </ul>

                    <div class="mt-5 tab-content">
                        @include('admin.layout.home')
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
    setTimeout(function() {
        $('.alert-block').remove();
    }, 5000);
</script>
@endpush

