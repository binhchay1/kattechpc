<div class="global-menu-container">
    <p class="group-title"><i class="fa fa-bars"></i> {{ __('Danh mục sản phẩm') }}</p>
    <div class="global-menu-holder">
        @foreach($listCategory['default'] as $category)
        <div class="item">
            <a href="{{ $category->slug }}" class="cat-1">
                <img class="lazy icon-menu entered loaded" alt="{{ $category->name }}" width="1" height="1" src="{{ asset($category->image) }}">
                <span class="cat-title line-clamp-1">{{ $category->name }}</span>
            </a>

            <div class="sub-menu-list">
                <div class="sub-cat-2">
                    <p class="cat-2">{{ __('CHỌN THEO NHU CẦU') }}</p>
                    <div class="sub-cat-2-link">
                        @foreach($category->children as $categoryChild)
                        <a href="{{ route('showDataCategory', $categoryChild['slug']) }}">{{ $categoryChild->name }}</a>
                        @endforeach
                    </div>
                </div>

                <div class="sub-cat-2">
                    <p class="cat-2">{{ __('CHỌN THEO KHOẢNG GIÁ') }}</p>
                    <div class="sub-cat-2-link">
                        <a href="/duoi-10-trieu">{{ __('Dưới 10 Triệu') }}</a>
                        <a href="/10-trieu-15-trieu">{{ __('10 Triệu - 15 Triệu') }}</a>
                        <a href="/15-trieu-20-trieu">{{ __('15 Triệu - 20 Triệu') }}</a>
                        <a href="/20-trieu-30-trieu">{{ __('20 Triệu - 30 Triệu') }}</a>
                        <a href="/30-trieu-50-trieu">{{ __('30 Triệu - 50 Triệu') }}</a>
                        <a href="/50-trieu-100-trieu">{{ __('50 Triệu - 100 Triệu') }}</a>
                        <a href="/tren-100-trieu">{{ __('Trên 100 Triệu') }}</a>
                    </div>
                </div>

                @if(array_key_exists($category->name, $listCategory['brand']))
                <div class="sub-cat-2">
                    <p class="cat-2">{{ __('CHỌN THEO HÃNG') }}</p>
                    <div class="sub-cat-2-link">
                        @foreach($listCategory['brand'][$category->name] as $categoryBrand)
                        <a href="">{{ $categoryBrand['name'] }}</a>
                        @endforeach
                    </div>
                </div>
                @endif

                @if(array_key_exists($category->name, $listCategory['detail']))
                @foreach($listCategory['detail'][$category->name] as $keyDetail => $valueDetail)
                <div class="sub-cat-2">
                    <p class="cat-2">{{ __('CHỌN THEO') }} {{ $keyDetail }}</p>
                    <div class="sub-cat-2-link">
                        @foreach($valueDetail as $detailProductKey)
                        <a href="/laptop-intel-core-i3">{{ $detailProductKey }}</a>
                        @endforeach
                    </div>
                </div>
                @endforeach
                @endif

                <div class="sub-cat-2">
                    <p class="cat-2">{{ __('PHỤ KIỆN') }} {{ strtoupper($category->name) }}</p>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
