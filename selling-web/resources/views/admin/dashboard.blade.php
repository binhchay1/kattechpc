@extends('layouts.admin')

@section('title', 'Dashboard | Vasinfor')

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <div class="row">
            @foreach($listStockPersonal as $stock)
            <div class="col-4 mb-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title d-flex align-items-start justify-content-between">
                            <span class="d-block mb-1">{{ $stock['shortName'] }}</span>
                            <div class="dropdown">
                                <button class="btn p-0" type="button" id="cardOpt4" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="bx bx-dots-vertical-rounded"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt4">
                                    <a class="dropdown-item" href="javascript:void(0);">3 month</a>
                                    <a class="dropdown-item" href="javascript:void(0);">1 year</a>
                                </div>
                            </div>
                        </div>
                        <span class="d-block mb-1">{{ $stock['ticker'] }}</span>
                        <h3 class="card-title text-nowrap mb-2">{{ $stock['cp'] == null ? 0 : $stock['cp'] }}</h3>
                        @if($stock['priceChange3m'] > 0)
                        <small class="text-success fw-semibold "><i class="bx bx-up-arrow-alt"></i> {{ $stock['priceChange3m'] }} %</small>
                        @elseif($stock['priceChange3m'] == 0)
                        <small class="text-primary fw-semibold "><i class="bx bx-left-arrow-alt"></i> {{ $stock['priceChange3m'] }} %</small>
                        @else
                        <small class="text-danger fw-semibold "><i class="bx bx-down-arrow-alt"></i> {{ $stock['priceChange3m'] }} %</small>
                        @endif
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="col-md-6 col-lg-4 order-2 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between">
                    <h5 class="card-title m-0 me-2">Industry trending</h5>
                    <div class="dropdown">
                        <button class="btn p-0" type="button" id="transactionID" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bx bx-dots-vertical-rounded"></i>
                        </button>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="transactionID">
                            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <ul class="p-0 m-0">
                        @foreach($listIndustryPersonal as $industry)
                        <li class="d-flex mb-4 pb-1">
                            <div class="avatar flex-shrink-0 me-3">
                                <img src="../assets/img/icons/unicons/paypal.png" alt="User" class="rounded">
                            </div>
                            <div class="d-flex w-100 flex-wrap align-items-center justify-content-between gap-2">
                                <div class="me-2">
                                    <small class="text-muted d-block mb-1">{{ $industry }}</small>
                                    <h6 class="mb-0">Send money</h6>
                                </div>
                                <div class="user-progress d-flex align-items-center gap-1">
                                    <h6 class="mb-0">+82.6</h6>
                                    <span class="text-muted">USD</span>
                                </div>
                            </div>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection