<div class="grid grid-cols-1 gap-5 lg:grid-cols-2 xl:grid-cols-12 tab-pane hidden" id="top-sale">
    <div class="xl:col-span-4">
        <div class="form-group">
            <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{ __('Ảnh bìa') }}</label>
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
</div>
