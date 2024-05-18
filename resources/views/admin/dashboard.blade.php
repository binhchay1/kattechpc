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
