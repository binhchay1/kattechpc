<style>
    .show-avatar {
        width: 150px;
    }

    .text-base {
        font-weight: bold;
        font-size: 18px;
    }
</style>

<div class="grid grid-cols-1 gap-5 lg:grid-cols-2 xl:grid-cols-12" id="home">
    <div class="xl:col-span-12 d-flex">
        <label for="slideInput" class="inline-block mb-2 text-base font-medium">{{ __('Ảnh slide') }}</label>
        <input id="slideInput" type="file" name="images[]" multiple class="form-control" required oninvalid="this.setCustomValidity('Chọn một hoặc nhiều ảnh')" />
    </div>
    <div class="xl:col-span-4">
        <div class="form-group">
            <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{__('Ảnh quảng cáo 1')}}</label>
            <div class="">
                <div class="" style="display: inline-grid;">
                    <input type="file" class="border-0 bg-light pl-0" name="image" id="image1" hidden>
                    <div class=" choose-avatar">
                        <div id="btnimage">
                            <img id="showImage1" class="show-avatar" src="{{ asset('/images/product.png') }}" alt="avatar">
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
            <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{__('Ảnh quảng cáo 2')}}</label>
            <div class="">
                <div class="" style="display: inline-grid;">
                    <input type="file" class="border-0 bg-light pl-0" name="image" id="image2" hidden>
                    <div class=" choose-avatar">
                        <div id="btnimage">
                            <img id="showImage2" class="show-avatar" src="{{ asset('/images/product.png') }}" alt="avatar">
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
            <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{__('Ảnh quảng cáo 3')}}</label>
            <div class="">
                <div class="" style="display: inline-grid;">
                    <input type="file" class="border-0 bg-light pl-0" name="image" id="image3" hidden>
                    <div class=" choose-avatar">
                        <div id="btnimage">
                            <img id="showImage3" class="show-avatar" src="{{ asset('/images/product.png') }}" alt="avatar">
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
            <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{__('Ảnh quảng cáo 4')}}</label>
            <div class="">
                <div class="" style="display: inline-grid;">
                    <input type="file" class="border-0 bg-light pl-0" name="image" id="image4" hidden>
                    <div class=" choose-avatar">
                        <div id="btnimage">
                            <img id="showImage4" class="show-avatar" src="{{ asset('/images/product.png') }}" alt="avatar">
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
            <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{__('Ảnh quảng cáo 5')}}</label>
            <div class="">
                <div class="" style="display: inline-grid;">
                    <input type="file" class="border-0 bg-light pl-0" name="image" id="image5" hidden>
                    <div class=" choose-avatar">
                        <div id="btnimage">
                            <img id="showImage5" class="show-avatar" src="{{ asset('/images/product.png') }}" alt="avatar">
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
            <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{__('Ảnh quảng cáo 6')}}</label>
            <div class="">
                <div class="" style="display: inline-grid;">
                    <input type="file" class="border-0 bg-light pl-0" name="image" id="image6" hidden>
                    <div class=" choose-avatar">
                        <div id="btnimage">
                            <img id="showImage6" class="show-avatar" src="{{ asset('/images/product.png') }}" alt="avatar">
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
