@extends('layouts.master-admin')

@section('title')
{{ __('Thống kê') }}
@endsection

@section('content')
<x-page-title title="Analytics" pagetitle="Dashboards" />
<div class="grid grid-cols-12 gap-x-5">
    <div class="order-6 col-span-12 2xl:order-1 card 2xl:col-span-5">
        <div class="card-body">
            <div class="flex items-center gap-2">
                <h6 class="mb-3 text-15 grow">{{ __('Tổng tiền theo tháng trong năm') }} - {{ date('Y') }}</h6>
                <select style="width: auto;" class="rounded-full form-select border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200">
                    <option selected disabled>Năm</option>
                    <option>Năm</option>
                    <option>Năm</option>
                </select>
            </div>

            <div id="incomeChart" class="apex-charts" data-chart-colors='["bg-red-500"]' dir="ltr"></div>
        </div>
    </div>
    <div class="order-7 col-span-12 2xl:order-1 card 2xl:col-span-7">
        <div class="card-body">
            <div class="flex items-center gap-2">
                <h6 class="mb-3 text-15 grow">{{ __('Tổng lượt truy cập năm') }} - {{ date('Y') }}</h6>
            </div>
            <div id="visitorChart" class="apex-charts" data-chart-colors='["bg-custom-500", "bg-purple-500"]' dir="ltr"></div>
        </div>
    </div>
    @include('includes.product-static')

    @include('includes.product-order-static')
</div>
@endsection

@push('scripts')
<script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="{{ asset('js/admin/dashboard.js') }}"></script>
@endpush
