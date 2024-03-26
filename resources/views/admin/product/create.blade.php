@extends('layouts.master-admin')

@section('title')
    {{ __('Thêm sản phẩm') }}
@endsection

@section('content')
    <div class="grid grid-cols-1 xl:grid-cols-12 gap-x-5 mt-4">
        <div class="xl:col-span-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">{{__('Thêm sản phẩm')}}</h6>

                    <form method="POST" action="{{route('admin.product.store')}}"  enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 xl:grid-cols-12">
                            <div class="xl:col-span-6">
                                <label for="productNameInput" class="inline-block mb-2 text-base font-medium">{{ __('Tên sản phẩm') }}</label>
                                <input type="text" id="productNameInput" name="name" value="{{old('name')}}"
                                       class="form-input  border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                       placeholder="{{__('Tên sản phẩm')}}" >
                                @if ($errors->has('name'))
                                    <span class="text-danger">{{ $errors->first('name') }}</span>
                                @endif
                            </div>

                            <div class="xl:col-span-6">
                                <label for="productCodeInput" class="inline-block mb-2 text-base font-medium"> {{ __('Mã sản phẩm') }}</label>
                                <input type="text" id="productCodeInput" name="code" value="{{old('code')}}"
                                       class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                       placeholder="{{__('Mã sản phẩm')}}">
                                @if ($errors->has('code'))
                                    <span class="text-danger">{{ $errors->first('code') }}</span>
                                @endif
                            </div>
                            <div class="xl:col-span-12">
                                <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{__('Thể loại')}}</label>
                                <select style="width: 50%"
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    data-choices data-choices-search-false  id="categorySelect" name="category_id" >
                                    @foreach($listCategories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach
                                </select>
                                @if ($errors->has('category_id'))
                                    <span class="text-danger">{{ $errors->first('category_id') }}</span>
                                @endif
                            </div><!--end col-->
                            <div class="xl:col-span-3">
                                <div class="form-group xl:col-span-3">
                                    <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{__('Hình ảnh')}}</label>
                                    <div class="">
                                        <div class="" style="display: inline-grid;">
                                            <input type="file" name="image[]" class="form-control @error('image.*') is-invalid @enderror" multiple>
{{--                                            <div class=" choose-avatar">--}}
{{--                                                <div id="btnimage">--}}
{{--                                                    <img id="showImage" class="show-avatar" src="{{ asset('/images/product.png') }}" alt="avatar" >--}}
{{--                                                </div>--}}
{{--                                                <div id="button">--}}
{{--                                                    <i id="btn_chooseImg" class="fas fa-camera"> {{ __('Chọn hình ảnh') }}</i>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
                                            @if ($errors->has('image'))
                                                <span class="text-danger">{{ $errors->first('image') }}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="lg:col-span-2 xl:col-span-12">
                                <div>
                                    <label for="productDescription"
                                           class="inline-block mb-2 text-base font-medium">{{__('Miêu tả')}}</label>
                                    <textarea
                                        class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                        id="productDescription" name="description" placeholder="{{__('Miêu tả')}}" rows="5">{{old('description')}}</textarea>
                                    @if ($errors->has('description'))
                                        <span class="text-danger">{{ $errors->first('description') }}</span>
                                    @endif
                                </div>
                            </div>

                            <div class="xl:col-span-4">
                                <label for="productPrice" class="inline-block mb-2 text-base font-medium">{{__('Giá')}}</label>
                                <input type="number" id="productPrice" name="price" value="{{old('price')}}"
                                       class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                       placeholder="{{__('Giá')}}" >
                                @if ($errors->has('price'))
                                    <span class="text-danger">{{ $errors->first('price') }}</span>
                                @endif
                            </div><!--end col-->

                            <div class="xl:col-span-4">
                                <label for="productStatus" class="inline-block mb-2 text-base font-medium">{{__('Trạng thái')}}</label>
                                <select
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    data-choices data-choices-search-false  id="productStatus" name="status">
                                    @foreach($statusProduct as $status => $value)
                                        <option value="{{$value}}">{{$value}}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('status'))
                                    <span class="text-danger">{{ $errors->first('status') }}</span>
                                @endif
                            </div><!--end col-->

                        </div><!--end grid-->
                        <div class="flex justify-end gap-2 mt-4">
                            <button type="reset"
                                    class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-700 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">{{__('Xóa toàn bộ')}}</button>
                            <button type="submit"
                                    class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">
                                {{__('Thêm sản phẩm')}}</button>

                        </div>
                    </form>
                </div>
            </div><!--end card-->
        </div><!--end col-->
    </div><!--end grid-->
@endsection
@push('scripts')
    <!-- dropzone -->
    <script src="{{ URL::asset('build/libs/dropzone/dropzone-min.js') }}"></script>
    <!--product create init js-->
    <script src="{{ URL::asset('build/js/pages/apps-ecommerce-product-create.init.js') }}"></script>

    <!-- App css -->
    <link rel="stylesheet" href="{{ asset('css/admin/product.css') }}">
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
    <script src="{{ URL::asset('js/eventImage.js') }}"></script>
@endpush
