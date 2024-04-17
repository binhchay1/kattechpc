@extends('layouts.master-admin')

@section('title')
    {{ __('Thay đổi mã khuyến mãi') }}
@endsection

@section('content')
    <div class="grid grid-cols-1 xl:grid-cols-12 gap-x-5 mt-4">
        <div class="xl:col-span-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">{{ __('Thay đổi mã khuyến mãi') }}</h6>

                    <form method="POST" action="{{route('admin.coupon.update', $coupon['id'])}}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 xl:grid-cols-12">
                            <div class="xl:col-span-6">
                                <label for="categoryInput" class="inline-block mb-2 text-base font-medium">{{ __('Mã khuyến mãi') }}</label>
                                <input type="text" id="categoryInput" name="code" value="{{ $coupon->code }}" class="form-input  border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="{{ __('Tên danh mục') }}">
                                @if ($errors->has('code'))
                                    <span class="text-danger"  style="color: red">{{ $errors->first('code') }}</span>
                                @endif
                            </div>
                            <div class="xl:col-span-6">
                                <label for="categoryInput" class="inline-block mb-2 text-base font-medium">{{ __('Số tiền') }}</label>
                                <input type="text" id="categoryInput" name="discount_amount" value="{{ $coupon->discount_amount }}" class="form-input  border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="{{ __('Tên danh mục') }}">
                                @if ($errors->has('discount_amount'))
                                    <span class="text-danger" style="color: red">{{ $errors->first('discount_amount') }}</span>
                                @endif
                            </div>
                        </div>

                        <div class="flex justify-end gap-2 mt-4">
                            <button type="reset" class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-700 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">{{__('Xóa toàn bộ')}}</button>
                            <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">{{__('Sửa danh mục')}}</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
