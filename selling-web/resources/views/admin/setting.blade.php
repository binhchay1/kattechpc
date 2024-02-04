@extends('layouts.admin')

@section('title', 'Setting | Vasinfor')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin/setting.css') }}">
@endsection

@section('content')
<div class="content-wrapper">
    <div class="container-xxl flex-grow-1 container-p-y">
        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Account /</span> My Personal Data</h4>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h5 class="card-header">Personal Data Details</h5>
                    <form method="POST" action="{{ route('admin.profile.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="card-body row">
                            <div class="col-6">
                                <h2 class="text-center">Stock Code
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalStockCode">
                                        Change
                                    </button>
                                </h2>

                                <ul class="list-group" id="stock-code-list-selected">
                                    @foreach($stockCode as $code)
                                    <li class="list-group-item mt-2">
                                        {{ $code }}
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div class="col-6">
                                <h2 class="text-center">Sector
                                    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalSector">
                                        Change
                                    </button>
                                </h2>
                                <ul class="list-group" id="industry-list-selected">
                                    @foreach($listIndustry as $industry)
                                    <li class="list-group-item mt-2">
                                        {{ $industry['name'] }} <img src="">
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@include('includes.modal-stock-code')
@include('includes.modal-industry')
@endsection

@section('js')
<script src="{{ asset('js/admin/setting.js') }}"></script>
@endsection
