@extends('layouts.master-admin')
@section('title')
    {{ __('Thêm bài viết') }}
@endsection
@section('content')

    <!-- page title -->
    <div class="grid grid-cols-1 xl:grid-cols-12 gap-x-5 mt-4">
        <div class="xl:col-span-12">
            <div class="card">
                <div class="card-body">
                    <h6 class="mb-4 text-15">{{__('Thêm bài viết')}}</h6>

                    <form method="POST" action="{{route('admin.promotion.store')}}"  enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 xl:grid-cols-12">
                            <div class="xl:col-span-6">
                                <label for="productNameInput" class="inline-block mb-2 text-base font-medium">{{__('Tiêu đề bài viết')}}</label>
                                <input type="text" id="productNameInput" name="title" value="{{old('title')}}"
                                       class="form-input  border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                       placeholder="{{__('Tiêu đề bài viết')}}" >
                                @if ($errors->has('title'))
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                @endif
                            </div><!--end col-->

                            <div class="xl:col-span-6">
                                <label for="productCodeInput" class="inline-block mb-2 text-base font-medium">{{__('Nội dung bài viết')}}
                                </label>
                                <textarea
                                    class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200"
                                    id="productDescription" name="content" placeholder="{{__('Nội dung bài viết')}}" rows="5">{{ old('content') }}</textarea>
                                @if ($errors->has('content'))
                                    <span class="text-danger">{{ $errors->first('content') }}</span>
                                @endif
                            </div><!--end col-->

                        </div><!--end grid-->
                        <div class="flex justify-end gap-2 mt-4">
                            <button type="reset"
                                    class="text-red-500 bg-white btn hover:text-red-500 hover:bg-red-100 focus:text-red-500 focus:bg-red-100 active:text-red-500 active:bg-red-100 dark:bg-zink-700 dark:hover:bg-red-500/10 dark:focus:bg-red-500/10 dark:active:bg-red-500/10">{{__('Xóa toàn bộ')}}</button>
                            <button type="submit"
                                    class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">{{__('Thêm bài viết')}}</button>
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
    <link rel="stylesheet" href="{{ asset('css/admin/user.css') }}">
    <!-- App js -->
    <script src="{{ URL::asset('build/js/app.js') }}"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.ckeditor').ckeditor();
        });
        CKEDITOR.replace( 'productDescription', {
            height: 500,
        } );
    </script>
@endpush
