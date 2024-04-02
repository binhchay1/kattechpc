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

<div class="grid grid-cols-1 gap-5 lg:grid-cols-2 xl:grid-cols-12 tab-pane block" id="home">
    <div class="xl:col-span-12 upload-many-image">
        <label for="slideInput" class="inline-block mb-2 text-base font-medium">{{ __('Ảnh slide') }}</label>
        <div id="btnimage">
            <img id="showImage2" class="show-avatar" src="{{ asset('/images/layout/850x400.png') }}" alt="avatar">
        </div>
        <input id="slideInput" type="file" name="images[]" multiple class="form-control" />
    </div>
    <div class="xl:col-span-4">
        <div class="form-group">
            <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{ __('Ảnh quảng cáo 1') }}</label>
            <div class="">
                <div class="" style="display: inline-grid;">
                    <input type="file" class="border-0 bg-light pl-0" name="image" id="image1" hidden>
                    <div class=" choose-avatar">
                        <div id="btnimage">
                            <img id="showImage1" class="show-avatar" src="{{ asset('/images/layout/400x200.png') }}" alt="avatar">
                        </div>
                        <div id="button-1">
                            <i class="fas fa-camera btn_chooseImg"> {{ __('Chọn hình ảnh') }}</i>
                        </div>
                    </div>
                    @if ($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="xl:col-span-4">
        <div class="form-group">
            <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{ __('Ảnh quảng cáo 2') }}</label>
            <div class="">
                <div class="" style="display: inline-grid;">
                    <input type="file" class="border-0 bg-light pl-0" name="image" id="image2" hidden>
                    <div class=" choose-avatar">
                        <div id="btnimage">
                            <img id="showImage2" class="show-avatar" src="{{ asset('/images/layout/400x200.png') }}" alt="avatar">
                        </div>
                        <div id="button-2">
                            <i class="fas fa-camera btn_chooseImg"> {{ __('Chọn hình ảnh') }}</i>
                        </div>
                    </div>
                    @if ($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image') }}</span>
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
                    <input type="file" class="border-0 bg-light pl-0" name="image" id="image3" hidden>
                    <div class=" choose-avatar">
                        <div id="btnimage">
                            <img id="showImage3" class="show-avatar" src="{{ asset('/images/layout/400x200.png') }}" alt="avatar">
                        </div>
                        <div id="button-3">
                            <i class="fas fa-camera btn_chooseImg"> {{ __('Chọn hình ảnh') }}</i>
                        </div>
                    </div>
                    @if ($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image') }}</span>
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
                    <input type="file" class="border-0 bg-light pl-0" name="image" id="image4" hidden>
                    <div class=" choose-avatar">
                        <div id="btnimage">
                            <img id="showImage4" class="show-avatar" src="{{ asset('/images/layout/400x200.png') }}" alt="avatar">
                        </div>
                        <div id="button-4">
                            <i class="fas fa-camera btn_chooseImg"> {{ __('Chọn hình ảnh') }}</i>
                        </div>
                    </div>
                    @if ($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image') }}</span>
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
                    <input type="file" class="border-0 bg-light pl-0" name="image" id="image5" hidden>
                    <div class=" choose-avatar">
                        <div id="btnimage">
                            <img id="showImage5" class="show-avatar" src="{{ asset('/images/layout/400x200.png') }}" alt="avatar">
                        </div>
                        <div id="button-5">
                            <i class="fas fa-camera btn_chooseImg"> {{ __('Chọn hình ảnh') }}</i>
                        </div>
                    </div>
                    @if ($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image') }}</span>
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
                    <input type="file" class="border-0 bg-light pl-0" name="image" id="image6" hidden>
                    <div class=" choose-avatar">
                        <div id="btnimage">
                            <img id="showImage6" class="show-avatar" src="{{ asset('/images/layout/400x200.png') }}" alt="avatar">
                        </div>
                        <div id="button-6">
                            <i class="fas fa-camera btn_chooseImg"> {{ __('Chọn hình ảnh') }}</i>
                        </div>
                    </div>
                    @if ($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="xl:col-span-4">
        <div class="form-group">
            <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{ __('Ảnh biểu ngữ trái') }}</label>
            <div class="">
                <div class="" style="display: inline-grid;">
                    <input type="file" class="border-0 bg-light pl-0" name="image" id="image6" hidden>
                    <div class=" choose-avatar">
                        <div id="btnimage">
                            <img id="showImage6" class="show-avatar" src="{{ asset('/images/layout/200x400.png') }}" alt="avatar">
                        </div>
                        <div id="button-6">
                            <i class="fas fa-camera btn_chooseImg"> {{ __('Chọn hình ảnh') }}</i>
                        </div>
                    </div>
                    @if ($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <div class="xl:col-span-4">
        <div class="form-group">
            <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{ __('Ảnh biểu ngữ phải') }}</label>
            <div class="">
                <div class="" style="display: inline-grid;">
                    <input type="file" class="border-0 bg-light pl-0" name="image" id="image6" hidden>
                    <div class=" choose-avatar">
                        <div id="btnimage">
                            <img id="showImage6" class="show-avatar" src="{{ asset('/images/layout/200x400.png') }}" alt="avatar">
                        </div>
                        <div id="button-6">
                            <i class="fas fa-camera btn_chooseImg"> {{ __('Chọn hình ảnh') }}</i>
                        </div>
                    </div>
                    @if ($errors->has('image'))
                    <span class="text-danger">{{ $errors->first('image') }}</span>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/admin/layout.js') }}"></script>
