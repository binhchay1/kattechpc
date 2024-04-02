<style>
    .show-avatar {
        width: 150px;
    }

    .text-base {
        font-weight: bold;
        font-size: 18px;
    }

    .upload-many-image {
        display: flex;
        flex-direction: column;
    }

    #slideInput {
        margin-top: 20px;
    }
</style>

<form method="POST" action="{{route('admin.store.layout')}}"  enctype="multipart/form-data">
    {{ csrf_field() }}

<div class="grid grid-cols-1 gap-5 lg:grid-cols-2 xl:grid-cols-12 tab-pane block" id="home">
    <div class="xl:col-span-3 upload-many-image">
        <label for="slideInput" class="inline-block mb-2 text-base font-medium">{{ __('Ảnh slide') }}</label>
        <div class="">
            <div class="" style="display: inline-grid;">
                <input type="file" class="border-0 bg-light pl-0" name="big_thumbnail" id="image1" hidden>
                <div class=" choose-avatar">
                    <div id="btnimage">
                        <img id="showImage1" class="show-avatar" src="{{ asset('/images/layout/400x200.png') }}" alt="avatar">
                    </div>
                    <div id="button-1">
                        <i class="fas fa-camera btn_chooseImg"> {{ __('Chọn hình ảnh') }}</i>
                    </div>
                </div>
                @if ($errors->has('big_thumbnail'))
                    <span class="text-danger">{{ $errors->first('big_thumbnail') }}</span>
                @endif
            </div>
        </div>
    </div>
    <div class="xl:col-span-3">
        <div class="form-group">
            <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{ __('Ảnh bìa') }}</label>
            <div class="">
                <div class="" style="display: inline-grid;">
                    <input type="file" class="border-0 bg-light pl-0" name="big_banner_thumbnail" id="image10" hidden>
                    <div class=" choose-avatar">
                        <div id="btnimage">
                            <img id="showImage10" class="show-avatar" src="{{ asset('/images/layout/400x200.png') }}" alt="avatar">
                        </div>
                        <div id="button-10">
                            <i class="fas fa-camera btn_chooseImg"> {{ __('Chọn hình ảnh') }}</i>
                        </div>
                    </div>
                    @if ($errors->has('big_banner_thumbnail'))
                        <span class="text-danger">{{ $errors->first('big_banner_thumbnail') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <div class="xl:col-span-6">
        <label for="cleave-date" class="inline-block mb-2 text-base font-medium">{{ __('Ngày kết thúc') }}</label>
        <input type="date" name="flash_sale_timer" id="cleave-date" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="DD-MM-YYYY">
        @if ($errors->has('flash_sale_timer'))
            <span class="text-danger">{{ $errors->first('flash_sale_timer') }}</span>
        @endif
    </div>
    <div class="xl:col-span-3">
        <div class="form-group">
            <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{ __('Ảnh quảng cáo 1') }}</label>
            <div class="">
                <div class="" style="display: inline-grid;">
                    <input type="file" class="border-0 bg-light pl-0" name="small_thumbnail_1" id="image2" hidden>
                    <div class=" choose-avatar">
                        <div id="btnimage">
                            <img id="showImage2" class="show-avatar" src="{{ asset('/images/layout/400x200.png') }}" alt="avatar">
                        </div>
                        <div id="button-2">
                            <i class="fas fa-camera btn_chooseImg"> {{ __('Chọn hình ảnh') }}</i>
                        </div>
                    </div>
                    @if ($errors->has('small_thumbnail_1'))
                    <span class="text-danger">{{ $errors->first('small_thumbnail_1') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="xl:col-span-3">
        <div class="form-group">
            <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{ __('Ảnh quảng cáo 2') }}</label>
            <div class="">
                <div class="" style="display: inline-grid;">
                    <input type="file" class="border-0 bg-light pl-0" name="small_thumbnail_2" id="image3" hidden>
                    <div class=" choose-avatar">
                        <div id="btnimage">
                            <img id="showImage3" class="show-avatar" src="{{ asset('/images/layout/400x200.png') }}" alt="avatar">
                        </div>
                        <div id="button-3">
                            <i class="fas fa-camera btn_chooseImg"> {{ __('Chọn hình ảnh') }}</i>
                        </div>
                    </div>
                    @if ($errors->has('small_thumbnail_2'))
                    <span class="text-danger">{{ $errors->first('small_thumbnail_2') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="xl:col-span-3">
        <div class="form-group">
            <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{ __('Ảnh quảng cáo 3') }}</label>
            <div class="">
                <div class="" style="display: inline-grid;">
                    <input type="file" class="border-0 bg-light pl-0" name="small_thumbnail_3" id="image4" hidden>
                    <div class=" choose-avatar">
                        <div id="btnimage">
                            <img id="showImage4" class="show-avatar" src="{{ asset('/images/layout/400x200.png') }}" alt="avatar">
                        </div>
                        <div id="button-4">
                            <i class="fas fa-camera btn_chooseImg"> {{ __('Chọn hình ảnh') }}</i>
                        </div>
                    </div>
                    @if ($errors->has('small_thumbnail_3'))
                    <span class="text-danger">{{ $errors->first('small_thumbnail_3') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="xl:col-span-3">
        <div class="form-group">
            <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{ __('Ảnh quảng cáo 4') }}</label>
            <div class="">
                <div class="" style="display: inline-grid;">
                    <input type="file" class="border-0 bg-light pl-0" name="small_thumbnail_4" id="image5" hidden>
                    <div class=" choose-avatar">
                        <div id="btnimage">
                            <img id="showImage5" class="show-avatar" src="{{ asset('/images/layout/400x200.png') }}" alt="avatar">
                        </div>
                        <div id="button-5">
                            <i class="fas fa-camera btn_chooseImg"> {{ __('Chọn hình ảnh') }}</i>
                        </div>
                    </div>
                    @if ($errors->has('small_thumbnail_4'))
                    <span class="text-danger">{{ $errors->first('small_thumbnail_4') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="xl:col-span-3">
        <div class="form-group">
            <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{ __('Ảnh quảng cáo 5') }}</label>
            <div class="">
                <div class="" style="display: inline-grid;">
                    <input type="file" class="border-0 bg-light pl-0" name="small_thumbnail_5" id="image6" hidden>
                    <div class=" choose-avatar">
                        <div id="btnimage">
                            <img id="showImage6" class="show-avatar" src="{{ asset('/images/layout/400x200.png') }}" alt="avatar">
                        </div>
                        <div id="button-6">
                            <i class="fas fa-camera btn_chooseImg"> {{ __('Chọn hình ảnh') }}</i>
                        </div>
                    </div>
                    @if ($errors->has('small_thumbnail_5'))
                    <span class="text-danger">{{ $errors->first('small_thumbnail_5') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="xl:col-span-3">
        <div class="form-group">
            <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{ __('Ảnh quảng cáo 6') }}</label>
            <div class="">
                <div class="" style="display: inline-grid;">
                    <input type="file" class="border-0 bg-light pl-0" name="small_thumbnail_6" id="image7" hidden>
                    <div class=" choose-avatar">
                        <div id="btnimage">
                            <img id="showImage7" class="show-avatar" src="{{ asset('/images/layout/400x200.png') }}" alt="avatar">
                        </div>
                        <div id="button-7">
                            <i class="fas fa-camera btn_chooseImg"> {{ __('Chọn hình ảnh') }}</i>
                        </div>
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
                    <input type="file" class="border-0 bg-light pl-0" name="small_banner_thumbnail_1" id="image8" hidden>
                    <div class=" choose-avatar">
                        <div id="btnimage">
                            <img id="showImage8" class="show-avatar" src="{{ asset('/images/layout/200x400.png') }}" alt="avatar">
                        </div>
                        <div id="button-8">
                            <i class="fas fa-camera btn_chooseImg"> {{ __('Chọn hình ảnh') }}</i>
                        </div>
                    </div>
                    @if ($errors->has('small_banner_thumbnail_1'))
                    <span class="text-danger">{{ $errors->first('small_banner_thumbnail_1') }}</span>
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
                    <input type="file" class="border-0 bg-light pl-0" name="small_banner_thumbnail_2" id="image9" hidden>
                    <div class=" choose-avatar">
                        <div id="btnimage">
                            <img id="showImage9" class="show-avatar" src="{{ asset('/images/layout/200x400.png') }}" alt="avatar">
                        </div>
                        <div id="button-9">
                            <i class="fas fa-camera btn_chooseImg"> {{ __('Chọn hình ảnh') }}</i>
                        </div>
                    </div>
                    @if ($errors->has('small_banner_thumbnail_2'))
                    <span class="text-danger">{{ $errors->first('small_banner_thumbnail_2') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
    <button type="submit"
    class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">{{__('Thêm ảnh')}}</button>

</form>
<script src="{{ asset('js/admin/layout.js') }}"></script>
