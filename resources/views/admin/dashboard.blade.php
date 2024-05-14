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
                <h6 class="mb-3 text-15 grow">Location-Based Response Times</h6>
                <div class="shrink-0">
                    <button type="button" class="px-2 py-1.5 text-xs text-custom-500 btn bg-custom-100 hover:text-white hover:bg-custom-600 focus:text-white focus:bg-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:ring active:ring-custom-100 dark:bg-custom-500/20 dark:text-custom-500 dark:hover:bg-custom-500 dark:hover:text-white dark:focus:bg-custom-500 dark:focus:text-white dark:active:bg-custom-500 dark:active:text-white dark:ring-custom-400/20">
                        View More <i data-lucide="move-right" class="inline-block size-4 ltr:ml-1 rlt:mr-1 rtl:-rotate-180"></i>
                    </button>
                </div>
            </div>

            <div id="responseTimes" class="apex-charts" data-chart-colors='["bg-red-500"]' dir="ltr"></div>
        </div>
    </div>
    <div class="order-7 col-span-12 2xl:order-1 card 2xl:col-span-7">
        <div class="card-body">
            <div class="flex items-center gap-2">
                <h6 class="mb-3 text-15 grow">Pages Interaction</h6>
                <div class="relative dropdown shrink-0">
                    <button type="button" class="px-2 py-1.5 text-xs bg-text-slate-500 btn bg-slate-100 hover:text-white hover:bg-slate-600 focus:text-white focus:bg-slate-600 focus:ring focus:ring-slate-100 active:text-white active:bg-slate-600 active:ring active:ring-slate-100 dark:bg-slate-500/20 dark:text-slate-400 dark:hover:bg-slate-500 dark:hover:text-white dark:focus:bg-slate-500 dark:focus:text-white dark:active:bg-slate-500 dark:active:text-white dark:ring-slate-400/20 dropdown-toggle" id="emailDataDropdown" data-bs-toggle="dropdown">
                        This Yearly <i data-lucide="chevron-down" class="inline-block size-4 ltr:ml-1 rlt:mr-1"></i>
                    </button>

                    <ul class="absolute z-50 hidden py-2 mt-1 ltr:text-left rtl:text-right list-none bg-white rounded-md shadow-md dropdown-menu min-w-[10rem] dark:bg-zink-600" aria-labelledby="emailDataDropdown">
                        <li>
                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">1 Weekly</a>
                        </li>
                        <li>
                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">1 Monthly</a>
                        </li>
                        <li>
                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">3 Monthly</a>
                        </li>
                        <li>
                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">6 Monthly</a>
                        </li>
                        <li>
                            <a class="block px-4 py-1.5 text-base transition-all duration-200 ease-linear text-slate-600 dropdown-item hover:bg-slate-100 hover:text-slate-500 focus:bg-slate-100 focus:text-slate-500 dark:text-zink-100 dark:hover:bg-zink-500 dark:hover:text-zink-200 dark:focus:bg-zink-500 dark:focus:text-zink-200" href="#!">This Yearly</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="pagesInteraction" class="apex-charts" data-chart-colors='["bg-custom-500", "bg-purple-500"]' dir="ltr"></div>
        </div>
    </div>
    @include('includes.product-static')

    @include('includes.product-order-static')
</div>
@endsection

@push('scripts')
<script src="{{ URL::asset('build/libs/apexcharts/apexcharts.min.js') }}"></script>
<script src="https://apexcharts.com/samples/assets/stock-prices.js"></script>
<script src="{{ URL::asset('build/js/pages/dashboards-analytics.init.js') }}"></script>
@endpush
