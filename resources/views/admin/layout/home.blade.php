<div class="tab-pane block" id="home">
    <form method="POST" action="{{ route('admin.store.layout') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 xl:grid-cols-12">
            <div class="xl:col-span-4">
                <div class="form-group">
                    <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{ __('Ảnh quảng cáo 1') }}</label>
                    <div class="">
                        <div class="" style="display: inline-grid;">
                            <input type="file" class="border-0 bg-light pl-0" name="small_thumbnail_1" id="image1" hidden>
                            <div class=" choose-avatar">
                                <div id="btnimage">
                                    @if(isset($layout->small_thumbnail_1))
                                    <img id="showImage1" class="show-avatar" src="{{ asset($layout->small_thumbnail_1) }}" alt="avatar">
                                    @else
                                    <img id="showImage1" class="show-avatar" src="{{ asset('/images/layout/500x250.png') }}" alt="avatar">
                                    @endif
                                </div>
                                <div id="button-1">
                                    <i class="fas fa-camera btn_chooseImg"> {{ __('Chọn hình ảnh') }}</i>
                                </div>
                            </div>
                            <div>
                                <input type="text" name="permarklink_small_thumbnail_1" value="{{ isset($layout->permarklink_small_thumbnail_1) ? $layout->permarklink_small_thumbnail_1 : old('permarklink_small_thumbnail_1') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="{{ __('Nhập đường dẫn') }}">
                            </div>
                            @if ($errors->has('small_thumbnail_1'))
                            <span class="text-danger">{{ $errors->first('small_thumbnail_1') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="xl:col-span-4">
                <div class="form-group">
                    <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{ __('Ảnh quảng cáo 2') }}</label>
                    <div>
                        <div style="display: inline-grid;">
                            <input type="file" class="border-0 bg-light pl-0" name="small_thumbnail_2" id="image2" hidden>
                            <div class=" choose-avatar">
                                <div id="btnimage">
                                    @if(isset($layout->small_thumbnail_2))
                                    <img id="showImage2" class="show-avatar" src="{{ asset($layout->small_thumbnail_2) }}" alt="avatar">
                                    @else
                                    <img id="showImage2" class="show-avatar" src="{{ asset('/images/layout/500x250.png') }}" alt="avatar">
                                    @endif
                                </div>
                                <div id="button-2">
                                    <i class="fas fa-camera btn_chooseImg"> {{ __('Chọn hình ảnh') }}</i>
                                </div>
                            </div>
                            <div>
                                <input type="text" name="permarklink_small_thumbnail_2" value="{{ isset($layout->permarklink_small_thumbnail_2) ? $layout->permarklink_small_thumbnail_2 : old('permarklink_small_thumbnail_2') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="{{ __('Nhập đường dẫn') }}">
                            </div>
                            @if ($errors->has('small_thumbnail_2'))
                            <span class="text-danger">{{ $errors->first('small_thumbnail_2') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="xl:col-span-4">
                <div class="form-group">
                    <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{ __('Ảnh quảng cáo 3') }}</label>
                    <div class="">
                        <div class="" style="display: inline-grid;">
                            <input type="file" class="border-0 bg-light pl-0" name="small_thumbnail_3" id="image3" hidden>
                            <div class=" choose-avatar">
                                <div id="btnimage">
                                    @if(isset($layout->small_thumbnail_3))
                                    <img id="showImage3" class="show-avatar" src="{{ asset($layout->small_thumbnail_3) }}" alt="avatar">
                                    @else
                                    <img id="showImage3" class="show-avatar" src="{{ asset('/images/layout/350x175.png') }}" alt="avatar">
                                    @endif
                                </div>
                                <div id="button-3">
                                    <i class="fas fa-camera btn_chooseImg"> {{ __('Chọn hình ảnh') }}</i>
                                </div>
                            </div>
                            <div>
                                <input type="text" name="permarklink_small_thumbnail_3" value="{{ isset($layout->permarklink_small_thumbnail_3) ? $layout->permarklink_small_thumbnail_3 : old('permarklink_small_thumbnail_3') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="{{ __('Nhập đường dẫn') }}">
                            </div>
                            @if ($errors->has('small_thumbnail_3'))
                            <span class="text-danger">{{ $errors->first('small_thumbnail_3') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="xl:col-span-4">
                <div class="form-group">
                    <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{ __('Ảnh quảng cáo 4') }}</label>
                    <div class="">
                        <div class="" style="display: inline-grid;">
                            <input type="file" class="border-0 bg-light pl-0" name="small_thumbnail_4" id="image4" hidden>
                            <div class=" choose-avatar">
                                <div id="btnimage">
                                    @if(isset($layout->small_thumbnail_4))
                                    <img id="showImage4" class="show-avatar" src="{{ asset($layout->small_thumbnail_4) }}" alt="avatar">
                                    @else
                                    <img id="showImage4" class="show-avatar" src="{{ asset('/images/layout/350x175.png') }}" alt="avatar">
                                    @endif
                                </div>
                                <div id="button-4">
                                    <i class="fas fa-camera btn_chooseImg"> {{ __('Chọn hình ảnh') }}</i>
                                </div>
                            </div>
                            <div>
                                <input type="text" name="permarklink_small_thumbnail_4" value="{{ isset($layout->permarklink_small_thumbnail_4) ? $layout->permarklink_small_thumbnail_4 : old('permarklink_small_thumbnail_4') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="{{ __('Nhập đường dẫn') }}">
                            </div>
                            @if ($errors->has('small_thumbnail_4'))
                            <span class="text-danger">{{ $errors->first('small_thumbnail_4') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="xl:col-span-4">
                <div class="form-group">
                    <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{ __('Ảnh quảng cáo 5') }}</label>
                    <div class="">
                        <div class="" style="display: inline-grid;">
                            <input type="file" class="border-0 bg-light pl-0" name="small_thumbnail_5" id="image5" hidden>
                            <div class=" choose-avatar">
                                <div id="btnimage">
                                    @if(isset($layout->small_thumbnail_5))
                                    <img id="showImage5" class="show-avatar" src="{{ asset($layout->small_thumbnail_5) }}" alt="avatar">
                                    @else
                                    <img id="showImage5" class="show-avatar" src="{{ asset('/images/layout/350x175.png') }}" alt="avatar">
                                    @endif
                                </div>
                                <div id="button-5">
                                    <i class="fas fa-camera btn_chooseImg"> {{ __('Chọn hình ảnh') }}</i>
                                </div>
                            </div>
                            <div>
                                <input type="text" name="permarklink_small_thumbnail_5" value="{{ isset($layout->permarklink_small_thumbnail_5) ? $layout->permarklink_small_thumbnail_5 : old('permarklink_small_thumbnail_5') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="{{ __('Nhập đường dẫn') }}">
                            </div>
                            @if ($errors->has('small_thumbnail_5'))
                            <span class="text-danger">{{ $errors->first('small_thumbnail_5') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="xl:col-span-4">
                <div class="form-group">
                    <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{ __('Ảnh quảng cáo 6') }}</label>
                    <div class="">
                        <div class="" style="display: inline-grid;">
                            <input type="file" class="border-0 bg-light pl-0" name="small_thumbnail_6" id="image6" hidden>
                            <div class=" choose-avatar">
                                <div id="btnimage">
                                    @if(isset($layout->small_thumbnail_6))
                                    <img id="showImage6" class="show-avatar" src="{{ asset($layout->small_thumbnail_6) }}" alt="avatar">
                                    @else
                                    <img id="showImage6" class="show-avatar" src="{{ asset('/images/layout/350x175.png') }}" alt="avatar">
                                    @endif
                                </div>
                                <div id="button-6">
                                    <i class="fas fa-camera btn_chooseImg"> {{ __('Chọn hình ảnh') }}</i>
                                </div>
                            </div>
                            <div>
                                <input type="text" name="permarklink_small_thumbnail_6" value="{{ isset($layout->permarklink_small_thumbnail_6) ? $layout->permarklink_small_thumbnail_6 : old('permarklink_small_thumbnail_6') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="{{ __('Nhập đường dẫn') }}">
                            </div>
                            @if ($errors->has('small_thumbnail_6'))
                            <span class="text-danger">{{ $errors->first('small_thumbnail_6') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="xl:col-span-3">
                <div class="form-group">
                    <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{ __('Ảnh biểu ngữ trái') }}</label>
                    <div class="">
                        <div class="" style="display: inline-grid;">
                            <input type="file" class="border-0 bg-light pl-0" name="small_banner_thumbnail_left" id="image7" hidden>
                            <div class=" choose-avatar">
                                <div id="btnimage">
                                    @if(isset($layout->small_banner_thumbnail_left))
                                    <img id="showImage7" class="show-avatar" src="{{ asset($layout->small_banner_thumbnail_left) }}" alt="avatar">
                                    @else
                                    <img id="showImage7" class="show-avatar" src="{{ asset('/images/layout/150x450.png') }}" alt="avatar">
                                    @endif
                                </div>
                                <div id="button-7">
                                    <i class="fas fa-camera btn_chooseImg"> {{ __('Chọn hình ảnh') }}</i>
                                </div>
                            </div>
                            <div>
                                <input type="text" name="permarklink_small_banner_thumbnail_left" value="{{ isset($layout->permarklink_small_banner_thumbnail_left) ? $layout->permarklink_small_banner_thumbnail_left : old('permarklink_small_banner_thumbnail_left') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="{{ __('Nhập đường dẫn') }}">
                            </div>
                            @if ($errors->has('small_banner_thumbnail_left'))
                            <span class="text-danger">{{ $errors->first('small_banner_thumbnail_left') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            <div class="xl:col-span-3">
                <div class="form-group">
                    <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{ __('Ảnh biểu ngữ phải') }}</label>
                    <div class="">
                        <div class="" style="display: inline-grid;">
                            <input type="file" class="border-0 bg-light pl-0" name="small_banner_thumbnail_right" id="image8" hidden>
                            <div class=" choose-avatar">
                                <div id="btnimage">
                                    @if(isset($layout->small_banner_thumbnail_right))
                                    <img id="showImage8" class="show-avatar" src="{{ asset($layout->small_banner_thumbnail_right) }}" alt="avatar">
                                    @else
                                    <img id="showImage8" class="show-avatar" src="{{ asset('/images/layout/150x450.png') }}" alt="avatar">
                                    @endif
                                </div>
                                <div id="button-8">
                                    <i class="fas fa-camera btn_chooseImg"> {{ __('Chọn hình ảnh') }}</i>
                                </div>
                            </div>
                            <div>
                                <input type="text" name="permarklink_small_banner_thumbnail_right" value="{{ isset($layout->permarklink_small_banner_thumbnail_right) ? $layout->permarklink_small_banner_thumbnail_right : old('permarklink_small_banner_thumbnail_right') }}" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="{{ __('Nhập đường dẫn') }}">
                            </div>
                            @if ($errors->has('small_banner_thumbnail_right'))
                            <span class="text-danger">{{ $errors->first('small_banner_thumbnail_right') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20" style="margin-top: 10px;">{{__('Thêm ảnh')}}</button>
    </form>
</div>
