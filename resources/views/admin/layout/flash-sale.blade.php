<div class="tab-pane hidden" id="flash-sale">
    <form method="POST" action="{{ route('admin.store.flash.sale') }}" enctype="multipart/form-data">
        @csrf
        <div class="grid grid-cols-1 gap-5 lg:grid-cols-2 xl:grid-cols-12">
            <div class="xl:col-span-12 grid grid-cols-1 gap-5 lg:grid-cols-2 xl:grid-cols-12">
                <div class="xl:col-span-6">
                    <label for="cleave-date" class="inline-block mb-2 text-base font-medium">{{ __('Ngày kết thúc') }}</label>
                    <input type="date" name="flash_sale_timer" id="cleave-date" class="form-input border-slate-200 dark:border-zink-500 focus:outline-none focus:border-custom-500 disabled:bg-slate-100 dark:disabled:bg-zink-600 disabled:border-slate-300 dark:disabled:border-zink-500 dark:disabled:text-zink-200 disabled:text-slate-500 dark:text-zink-100 dark:bg-zink-700 dark:focus:border-custom-800 placeholder:text-slate-400 dark:placeholder:text-zink-200" placeholder="DD-MM-YYYY">
                    @if ($errors->has('flash_sale_timer'))
                    <span class="text-danger">{{ $errors->first('flash_sale_timer') }}</span>
                    @endif
                </div>
            </div>
            <div class="xl:col-span-6 mt-4">
                <div class="d-flex">
                    <label for="productDetail" class="inline-block mb-2 text-base font-medium">{{ __('Danh sách sản phẩm') }}</label>
                    <button id="add-product-flash-sale" type="button" style="padding: 5px 10px;" class="ml-2 text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20">+</button>
                </div>
                <ul class="space-y-5 rounded-md" id="area-product-flash-sale">
                    @if(isset($layout->flash_sale_list_product_id))
                    @foreach($layout->flash_sale_list_product_id as $key => $value)
                    <li class="item-product-flash-sale">
                        <input name="product_id[]" class="form-input" value="{{ $key }}" placeholder="{{ __('Nhập mã sản phẩm') }}" />
                        <input name="quantity[]" class="form-input ml-3" value="{{ $value }}" placeholder="{{ __('Nhập tên giá trị') }}" />
                        <span><i class="fa fa-xmas"></i></span>
                    </li>
                    @endforeach
                    @endif
                </ul>
            </div>
        </div>

        <button type="submit" class="text-white btn bg-custom-500 border-custom-500 hover:text-white hover:bg-custom-600 hover:border-custom-600 focus:text-white focus:bg-custom-600 focus:border-custom-600 focus:ring focus:ring-custom-100 active:text-white active:bg-custom-600 active:border-custom-600 active:ring active:ring-custom-100 dark:ring-custom-400/20" style="margin-top: 10px;">{{__('Thêm')}}</button>
    </form>
</div>
