@extends('layouts.master-admin')

@section('title')
{{ __('Thêm sản phẩm') }}
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('css/admin/product.css') }}">
@endpush

@section('content')
<div class="grid grid-cols-1 xl:grid-cols-12 gap-x-5 mt-4">
    <div class="xl:col-span-12">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">{{__('Thêm sản phẩm')}}</h6>
                <form method="POST" action="{{route('admin.product.store')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 xl:grid-cols-12">
                        <div class="xl:col-span-4">
                            <label for="productNameInput" class="inline-block mb-2 text-base font-medium">{{ __('Tên sản phẩm') }}</label>
                            <input type="text" id="productNameInput" name="name" value="{{ old('name') }}" class="form-input  border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="{{ __('Tên sản phẩm') }}">
                            @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>

                        <div class="xl:col-span-4">
                            <label for="productShortDescription" class="inline-block mb-2 text-base font-medium"> {{ __('Mô tả ngắn') }}</label>
                            <input type="text" id="productShortDescription" name="short_description" value="{{ old('short_description') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="{{ __('Mô tả ngắn') }}">
                            @if ($errors->has('short_description'))
                            <span class="text-danger">{{ $errors->first('short_description') }}</span>
                            @endif
                        </div>

                        <div class="xl:col-span-4">
                            <label for="productCodeInput" class="inline-block mb-2 text-base font-medium"> {{ __('Mã sản phẩm') }}</label>
                            <input type="text" id="productCodeInput" name="code" value="{{ old('code') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="{{ __('Mã sản phẩm') }}">
                            @if ($errors->has('code'))
                            <span class="text-danger">{{ $errors->first('code') }}</span>
                            @endif
                        </div>

                        <div class="xl:col-span-3">
                            <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{ __('Thể loại') }}</label>
                            <select style="width: 50%" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" data-choices data-choices-search-false id="categorySelect" name="category_id">
                                @foreach($listCategories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('category_id'))
                            <span class="text-danger">{{ $errors->first('category_id') }}</span>
                            @endif
                        </div>

                        <div class="xl:col-span-3">
                            <label for="productPrice" class="inline-block mb-2 text-base font-medium">{{ __('Giá') }}</label>
                            <input type="number" id="productPrice" name="price" value="{{ old('price') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="{{ __('Giá') }}">
                            @if ($errors->has('price'))
                            <span class="text-danger">{{ $errors->first('price') }}</span>
                            @endif
                        </div>

                        <div class="xl:col-span-3">
                            <label for="productNewPrice" class="inline-block mb-2 text-base font-medium">{{ __('Giá mới') }}</label>
                            <input type="number" id="productNewPrice" name="new_price" value="{{ old('new_price') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="{{ __('Giá mới') }}">
                            @if ($errors->has('new_price'))
                            <span class="text-danger">{{ $errors->first('new_price') }}</span>
                            @endif
                        </div>

                        <div class="xl:col-span-3">
                            <label for="productStatus" class="inline-block mb-2 text-base font-medium">{{ __('Trạng thái') }}</label>
                            <select class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" data-choices data-choices-search-false id="productStatus" name="status">
                                @foreach($statusProduct as $status => $value)
                                <option value="{{$value}}">{{$value}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('status'))
                            <span class="text-danger">{{ $errors->first('status') }}</span>
                            @endif
                        </div>

                        <div class="xl:col-span-6">
                            <div class="user-image mb-3 text-center">
                                <div class="imgPreview">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{__('Hình ảnh')}}</label>
                                <div>
                                    <div style="display: inline-grid;">
                                        <input type="file" name="image[]" class="custom-file-input" id="images" multiple="multiple">
                                        @if ($errors->has('image'))
                                        <span class="text-danger">{{ $errors->first('image') }}</span>
                                        @endif
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="lg:col-span-2 xl:col-span-12">
                            <label for="productDescription" class="inline-block mb-2 text-base font-medium">{{ __('Mô tả') }}</label>
                            <textarea id="editor" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="productDescription" name="description" placeholder="{{ __('Mô tả') }}" rows="5">{{ old('description') }}</textarea>
                            @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>

                        <div class="lg:col-span-2 xl:col-span-12">
                            <label for="productSaleDescription" class="inline-block mb-2 text-base font-medium">{{ __('Qùa tặng kèm') }}</label>
                            <textarea id="editor" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="productSaleDescription" name="sale_detail" placeholder="{{ __('Qùa tặng kèm') }}" rows="5">{{ old('sale_detail') }}</textarea>
                            @if ($errors->has('sale_detail'))
                            <span class="text-danger">{{ $errors->first('sale_detail') }}</span>
                            @endif
                        </div>

                        <div class="lg:col-span-2 xl:col-span-6">
                            <div class="d-flex">
                                <label for="productDetail" class="inline-block mb-2 text-base font-medium">{{ __('Chi tiết') }}</label>
                                <button id="add-detail" type="button" style="padding: 5px 10px;" class="ml-2 text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">+</button>
                            </div>

                            <ul class="space-y-5 rounded-md" id="area-detail"></ul>

                            @if ($errors->has('detail'))
                            <span class="text-danger">{{ $errors->first('detail') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="flex justify-end gap-2 mt-4">
                        <button type="reset" class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-700 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">{{__('Xóa toàn bộ')}}</button>
                        <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                            {{ __('Thêm sản phẩm') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>

<script>
    ClassicEditor
        .create(document.querySelector('#editor'), {
            height: 500,
            ckfinder: {
                uploadUrl: '<?php route("admin.post.uploadMedia") . '?_token=' . csrf_token(); ?>',
            }
        })
        .catch(error => {
            console.error(error);
        });
</script>
<script src="{{ URL::asset('js/admin/eventImage.js') }}"></script>
<script src="{{ URL::asset('js/admin/product.js') }}"></script>
@endpush
