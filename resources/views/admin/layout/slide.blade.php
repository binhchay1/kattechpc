<div class="tab-pane hidden" id="slide">
    <form method="POST" action="{{ route('admin.store.slide') }}" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 xl:grid-cols-12">
            <div class="xl:col-span-12 upload-many-image">
                <div class="user-image mb-3 text-center">
                    <div class="imgPreview">
                        @if(isset($layout->slide_thumbnail))
                        @foreach($layout->slide_thumbnail as $thumbnail)
                        <img src="{{ asset($thumbnail) }}" />
                        @endforeach
                        @endif
                    </div>
                </div>
                <div class="form-group">
                    <label for="categorySelect" class="inline-block mb-2 text-base font-medium">{{ __('Ảnh slide') }}</label>
                    <div>
                        <div style="display: inline-grid;">
                            <input type="file" name="slide_thumbnail[]" class="custom-file-input" id="images" multiple="multiple">
                            @if ($errors->has('image'))
                            <span class="text-danger">{{ $errors->first('image') }}</span>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20" style="margin-top: 10px;">{{__('Thêm')}}</button>
    </form>
</div>
