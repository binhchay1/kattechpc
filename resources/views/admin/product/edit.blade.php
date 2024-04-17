@extends('layouts.master-admin')

@section('title')
{{ __('Sửa sản phẩm') }}
@endsection

@push('css')
<link rel="stylesheet" href="{{ asset('css/admin/product.css') }}">
@endpush

@section('content')
<div class="grid grid-cols-1 xl:grid-cols-12 gap-x-5 mt-4">
    <div class="xl:col-span-12">
        <div class="card">
            <div class="card-body">
                <h6 class="mb-4 text-15">{{ __('Sửa sản phẩm') }}</h6>
                <form method="POST" action="{{ route('admin.product.update', $product->id) }}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 xl:grid-cols-12">
                        <div class="xl:col-span-12">
                            <div class="xl:col-span-4">
                                <input name="hot_status" id="checkboxDefault1" class="size-4 border rounded-sm appearance-none cursor-pointer bg-slate-100 border-slate-200 dark:bg-zink-600 dark:border-zink-500 checked:bg-custom-500 checked:border-custom-500 dark:checked:bg-custom-500 dark:checked:border-custom-500 checked:disabled:bg-custom-400 checked:disabled:border-custom-400" type="checkbox" {{ $product->hot_status == 1 ? 'checked=""' : '' }}>
                                <label for="productNameInput" class="inline-block mb-2 text-base font-medium">{{ __('Hot') }}</label><br>
                                <input name="hot_sale_status" id="checkboxDefault1" class="size-4 border rounded-sm appearance-none cursor-pointer bg-slate-100 border-slate-200 dark:bg-zink-600 dark:border-zink-500 checked:bg-custom-500 checked:border-custom-500 dark:checked:bg-custom-500 dark:checked:border-custom-500 checked:disabled:bg-custom-400 checked:disabled:border-custom-400" type="checkbox" {{ $product->hot_sale_status == 1 ? 'checked=""' : '' }}>
                                <label for="productNameInput" class="inline-block mb-2 text-base font-medium">{{ __('Bán chạy') }}</label>
                            </div>
                        </div>

                        <div class="xl:col-span-4">
                            <label for="productNameInput" class="inline-block mb-2 text-base font-medium">{{ __('Tên sản phẩm') }}</label>
                            <input type="text" id="productNameInput" name="name" value="{{ old('name', $product->name) }}" class="form-input  border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="{{ __('Tên sản phẩm') }}">
                            @if ($errors->has('name'))
                            <span class="text-danger">{{ $errors->first('name') }}</span>
                            @endif
                        </div>

                        <div class="xl:col-span-4">
                            <label for="productNameInput" class="inline-block mb-2 text-base font-medium">{{ __('Tiêu đề') }}</label>
                            <input type="text" id="productNameInput" name="title" value="{{ old('title', $product->title) }}" class="form-input  border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="{{ __('Tiêu đề') }}">
                            @if ($errors->has('title'))
                            <span class="text-danger">{{ $errors->first('title') }}</span>
                            @endif
                        </div>

                        <div class="xl:col-span-4">
                            <label for="productNameInput" class="inline-block mb-2 text-base font-medium">{{ __('Từ khóa') }}</label>
                            <input type="text" id="productNameInput" name="key_word" value="{{ old('key_word', $product->key_word) }}" class="form-input  border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="{{ __('Từ khóa') }}">
                            @if ($errors->has('key_word'))
                            <span class="text-danger">{{ $errors->first('key_word') }}</span>
                            @endif
                        </div>

                        <div class="xl:col-span-4">
                            <label for="productShortDescription" class="inline-block mb-2 text-base font-medium"> {{ __('Mô tả ngắn') }}</label>
                            <input type="text" id="productShortDescription" name="short_description" value="{{ old('short_description', $product->short_description) }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="{{ __('Mô tả ngắn') }}">
                            @if ($errors->has('short_description'))
                            <span class="text-danger">{{ $errors->first('short_description') }}</span>
                            @endif
                        </div>

                        <div class="xl:col-span-4">
                            <label for="productCodeInput" class="inline-block mb-2 text-base font-medium"> {{ __('Mã sản phẩm') }}</label>
                            <input type="text" id="productCodeInput" name="code" value="{{ old('code', $product->code) }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="{{ __('Mã sản phẩm') }}">
                            @if ($errors->has('code'))
                            <span class="text-danger">{{ $errors->first('code') }}</span>
                            @endif
                        </div>

                        <div class="xl:col-span-3">
                            <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{ __('Thể loại') }}</label>
                            <select style="width: 50%" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" data-choices data-choices-search-false id="categorySelect" name="category_id">
                                @foreach($listCategories as $category)
                                <option value="{{ $category->id }}" @if($category->category_id == $category->id) selected @endif>{{$category->name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('category_id'))
                            <span class="text-danger">{{ $errors->first('category_id') }}</span>
                            @endif
                        </div>

                        <div class="xl:col-span-4">
                            <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{ __('Thương hiệu') }}</label>
                            <select style="width: 50%" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500
                            disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500
                            dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:
                            border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" data-choices data-choices-search-false id="brandSelect" name="brand_id">
                                @foreach($listBrands as $brand)
                                <option value="{{ $brand->id }}" {{ $brand->id == $product->brand_id ? 'selected' : '' }}>{{ $brand->name }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('brand_id'))
                            <span class="text-danger">{{ $errors->first('brand_id') }}</span>
                            @endif
                        </div>

                        <div class="xl:col-span-4">
                            <label for="productPrice" class="inline-block mb-2 text-base font-medium">{{ __('Giá') }}</label>
                            <input type="text" id="productPrice" name="price" value="{{ old('price', $product->price) }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="{{ __('Giá') }}" onkeyup="onlyNumberAmount(this)">
                            @if ($errors->has('price'))
                            <span class="text-danger">{{ $errors->first('price') }}</span>
                            @endif
                        </div>

                        <div class="xl:col-span-4">
                            <label for="productNewPrice" class="inline-block mb-2 text-base font-medium">{{ __('Giá mới') }}</label>
                            <input type="text" id="productNewPrice" name="new_price" value="{{ old('new_price', $product->new_price) }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="{{ __('Giá mới') }}" onkeyup="onlyNumberAmount(this)">
                            @if ($errors->has('new_price'))
                            <span class="text-danger">{{ $errors->first('new_price') }}</span>
                            @endif
                        </div>

                        <div class="xl:col-span-4">
                            <label for="productStatus" class="inline-block mb-2 text-base font-medium">{{ __('Trạng thái') }}</label>
                            <select class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" data-choices data-choices-search-false id="productStatus" name="status">
                                @foreach($statusProduct as $status => $value)
                                <option value="{{ $value }}" {{ $value == $product->status ? 'selected' : '' }}>{{ $value }}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('status'))
                            <span class="text-danger">{{ $errors->first('status') }}</span>
                            @endif
                        </div>
                        <div class="xl:col-span-12">
                            <label for="categorySelect" class="inline-block mb-2 text-base font-medium ">{{ __('Hình ảnh thay đổi') }}</label>
                            <div class="user-image mb-3 text-center">
                                <ul class="imgPreview" id="imgPreview">
                                    @php
                                    $listNameImage = [];
                                    @endphp
                                    @foreach ($product->image as $key => $value)
                                    @php
                                    $nameImage = explode('/', $value);
                                    if(!empty($nameImage)) {
                                    foreach($nameImage as $itemInList) {
                                    if($itemInList == 'images' or $itemInList == 'upload' or $itemInList == 'product') {
                                    continue;
                                    }
                                    $getNameImage = $itemInList;
                                    $listNameImage[] = $getNameImage;
                                    }
                                    }
                                    @endphp
                                    @if(isset($getNameImage))
                                    <li data-id="{{ $getNameImage }}">
                                        <img id="img-review-{{ $key + 1 }}" src="{{ asset($value) }}" class="p-2" />
                                        <button id="button-review-{{ $key + 1 }}" type="button" class="btn-delete-image" onclick="deleteImagePreview(this)" />Delete</button>
                                    </li>
                                    @endif
                                    @endforeach
                                </ul>
                                @if(!empty($listNameImage))
                                <input id="input-review" type="text" name="image_preview" value="{{ implode(',', $listNameImage) }}" hidden>
                                @else
                                <input id="input-review" type="text" name="image_preview" hidden>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{ __('Hình ảnh') }}</label>
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
                            <textarea id="editor" class="editor form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="productDescription" name="description" placeholder="{{ __('Mô tả') }}" rows="5">{{ old('description' , $product->description) }}</textarea>
                            @if ($errors->has('description'))
                            <span class="text-danger">{{ $errors->first('description') }}</span>
                            @endif
                        </div>

                        <div class="lg:col-span-2 xl:col-span-12">
                            <label for="productSaleDescription" class="inline-block mb-2 text-base font-medium">{{ __('Qùa tặng kèm') }}</label>
                            <textarea id="editor-gift" class="editor form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" id="productSaleDescription" name="sale_detail" placeholder="{{ __('Qùa tặng kèm') }}" rows="5">{{ old('sale_detail', $product->sale_detail) }}</textarea>
                            @if ($errors->has('sale_detail'))
                            <span class="text-danger">{{ $errors->first('sale_detail') }}</span>
                            @endif
                        </div>

                        <div class="lg:col-span-2 xl:col-span-6">
                            <div class="d-flex">
                                <label for="productDetail" class="inline-block mb-2 text-base font-medium">{{ __('Chi tiết') }}</label>
                                <button id="add-detail" type="button" style="padding: 5px 10px;" class="ml-2 text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">+</button>
                            </div>

                            <ul class="space-y-5 rounded-md" id="area-detail">
                                @if($product->detail)
                                @foreach($product->detail as $key => $value)
                                <li class="item-detail">
                                    <input name="detail_key[]" class="form-input" value="{{ $key }}" placeholder="{{ __('Nhập tên trường') }}" />
                                    <textarea name="detail_value[]" class="form-input ml-3" placeholder="{{ __('Nhập tên giá trị') }}">{{ $value }}</textarea>
                                    <span><i class="fa fa-xmas"></i></span>
                                </li>
                                @endforeach
                                @endif
                            </ul>

                            @if ($errors->has('detail'))
                            <span class="text-danger">{{ $errors->first('detail') }}</span>
                            @endif
                        </div>
                    </div>
                    <div class="flex justify-end gap-2 mt-4">
                        <button type="reset" class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-700 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">{{__('Xóa toàn bộ')}}</button>
                        <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                            {{ __('Sửa sản phẩm') }}
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
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://code.jquery.com/ui/1.13.2/jquery-ui.js"></script>
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

    ClassicEditor
        .create(document.querySelector('#editor-gift'), {
            height: 500,
            ckfinder: {
                uploadUrl: '<?php route("admin.post.uploadMedia") . '?_token=' . csrf_token(); ?>',
            }
        })
        .catch(error => {
            console.error(error);
        });

    const status_product = 'edit';
</script>
<script src="{{ URL::asset('js/admin/product.js') }}"></script>
@endpush
