@extends('layouts.master-admin')

@section('title')
{{ __('Thêm mã khuyến mãi') }}
@endsection

<style>
    .hide {
        display: none;
    }

    .show {
        display: block;
    }
</style>

@section('content')
<div class="grid grid-cols-1 xl:grid-cols-12 gap-x-5 mt-4">
    <div class="xl:col-span-12">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">{{ __('Thêm mã khuyến mãi') }}</h6>

                <form method="POST" action="{{route('admin.coupon.store')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 xl:grid-cols-12">
                        <div class="xl:col-span-6">
                            <label for="categoryInput" class="inline-block mb-2 text-base font-medium">{{ __('Mã khuyến mãi') }}</label>
                            <input type="text" id="categoryInput" name="code" value="{{ old('code') }}" class="form-input  border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="{{ __('Mã khuyến mãi') }}">
                            @if ($errors->has('code'))
                            <span class="text-danger" style="color: red">{{ $errors->first('code') }}</span>
                            @endif
                        </div>

                        <div class="xl:col-span-6">
                            <label>{{ __('Loại') }}</label>
                            <select id="filter-category" onchange="handleType($(this))" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" data-choices data-choices-search-false name="type">
                                <option value="percent" selected>{{ __('Giảm giá theo %') }}</option>
                                <option value="number">{{ __('Giảm giá trừ thẳng') }}</option>
                            </select>
                        </div>

                        <div class="xl:col-span-6 d-none" id="discount-by-percent">
                            <label for="categoryInput" class="inline-block mb-2 text-base font-medium">{{ __('Tỉ lệ giảm giá') }}</label>
                            <span style="display: flex; align-items: center;">
                                <input type="number" id="discount_amount" name="discount_amount" onkeyup="onlyNumberAmount(this)" value="{{ old('discount_amount') }}" class="form-input input-element border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" min="1" max="100" placeholder="{{ __('Tỉ lệ giảm giá') }}">
                                <span style="font-weight: bold; margin-left: 15px;">%</span>
                            </span>

                            @if ($errors->has('discount_amount'))
                            <span class="text-danger" style="color: red">{{ $errors->first('discount_amount') }}</span>
                            @endif
                        </div>

                        <div class="xl:col-span-6" id="discount-by-number">
                            <label for="categoryInput" class="inline-block mb-2 text-base font-medium">{{ __('Số tiền giảm giá') }}</label>
                            <span style="display: flex; align-items: center;">
                                <input type="number" id="discount_amount" name="discount_amount" onkeyup="onlyNumberAmount(this)" value="{{ old('discount_amount') }}" class="form-input input-element border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" min="1" max="100" placeholder="{{ __('Tỉ lệ giảm giá') }}">
                                <span style="font-weight: bold; margin-left: 15px;">đ</span>
                            </span>

                            @if ($errors->has('discount_amount'))
                            <span class="text-danger" style="color: red">{{ $errors->first('discount_amount') }}</span>
                            @endif
                        </div>

                        <div class="xl:col-span-6">
                            <label for="categoryInput" class="inline-block mb-2 text-base font-medium">{{ __('Sản phẩm được áp dụng') }}</label>
                            <div class="choices is-open" data-type="select-multiple" role="combobox" aria-autocomplete="list" aria-haspopup="true" aria-expanded="true">
                                <div class="choices__inner"><select class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200 choices__input" id="choices-multiple-default" data-choices="" name="choices-multiple-default" multiple="" hidden="" tabindex="-1" data-choice="active">
                                        <option value="Choice 1" data-custom-properties="[object Object]">Choice 1</option>
                                    </select>
                                    <div class="choices__list choices__list--multiple">
                                        <div class="choices__item choices__item--selectable" data-item="" data-id="1" data-value="Choice 1" data-custom-properties="[object Object]" aria-selected="true">Choice 1</div>
                                    </div><input type="search" name="search_terms" class="choices__input choices__input--cloned" autocomplete="off" autocapitalize="off" spellcheck="false" role="textbox" aria-autocomplete="list" aria-label="null" style="min-width: 1ch; width: 2ch;" aria-activedescendant="choices--choices-multiple-default-item-choice-2">
                                </div>
                                <div class="choices__list choices__list--dropdown is-active" aria-expanded="true">
                                    <div class="choices__list" aria-multiselectable="true" role="listbox">
                                        <div id="choices--choices-multiple-default-item-choice-2" class="choices__item choices__item--choice choices__item--selectable is-highlighted" role="option" data-choice="" data-id="2" data-value="Choice 2" data-select-text="Press to select" data-choice-selectable="" aria-selected="true">Choice 2</div>
                                        <div id="choices--choices-multiple-default-item-choice-3" class="choices__item choices__item--choice choices__item--selectable" role="option" data-choice="" data-id="3" data-value="Choice 3" data-select-text="Press to select" data-choice-selectable="">Choice 3</div>
                                    </div>
                                </div>
                            </div>
                            @if ($errors->has('code'))
                            <span class="text-danger" style="color: red">{{ $errors->first('code') }}</span>
                            @endif
                        </div>

                    </div>

                    <div class="flex justify-end gap-2 mt-4">
                        <button type="reset" class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-700 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">{{__('Xóa toàn bộ')}}</button>
                        <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">{{__('Thêm mã khuyến mãi')}}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        if ($('#discount_amount').val() != null || $('#discount_amount').val() != '') {
            let input = document.getElementById('discount_amount');
            let v = input.value.replace(/\D+/g, '');
            input.value = v.replace(/(^\d{1,3}|\d{3})(?=(?:\d{3})+(?:,|$))/g, '$1.');
        }

        $('#discount-by-percent').show();
        $('#discount-by-number').hide();
    })

    function onlyNumberAmount(input) {
        let v = input.value.replace(/\D+/g, '');
        input.value = v.replace(/(^\d{1,3}|\d{3})(?=(?:\d{3})+(?:,|$))/g, '$1.');
    }

    function handleType(select) {
        let choice = select.val();

        if (choice == 'percent') {
            $('#discount-by-percent').show();
            $('#discount-by-number').hide();
        } else {
            $('#discount-by-number').show();
            $('#discount-by-percent').hide();
        }
    }
</script>
