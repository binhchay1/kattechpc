<div class="global-menu-container">
    <p class="group-title"><i class="fa fa-bars"></i> Danh mục sản phẩm</p>
    <div class="global-menu-holder">
        @foreach($listCategory as $category)
        <div class="item">
            <a href="{{ $category->slug }}" class="cat-1">
                <img class="lazy icon-menu entered loaded" alt="{{ $category->name }}" width="1" height="1" src="{{ asset($category->image) }}">
                <span class="cat-title line-clamp-1">{{ $category->name }}</span>
            </a>

            <div class="sub-menu-list">
                <div class="sub-cat-2">
                    <p href="/chon-theo-nhu-cau" class="cat-2">{{ __('CHỌN THEO NHU CẦU') }}</p>
                    @foreach($category->children as $children)
                    <a href="{{ route('showDataCategory', $category['slug']) }}">{{ $children->name }}</a>
                    @endforeach
                </div>

                <div class="sub-cat-2">
                    <a href="/chon-theo-khoang-gia" class="cat-2">{{ __('CHỌN THEO KHOẢNG GIÁ') }}</a>
                    <a href="/duoi-10-trieu">Dưới 10 Triệu </a>
                    <a href="/10-trieu-15-trieu">10 Triệu - 15 Triệu </a>
                    <a href="/15-trieu-20-trieu">15 Triệu - 20 Triệu </a>
                    <a href="/20-trieu-30-trieu">20 Triệu - 30 Triệu </a>
                    <a href="/30-trieu-50-trieu">30 Triệu - 50 Triệu </a>
                    <a href="/50-trieu-100-trieu">50 Triệu - 100 Triệu </a>
                    <a href="/tren-100-trieu">Trên 100 Triệu </a>
                </div>

                <div class="sub-cat-2">
                    <a href="/chon-theo-cpu" class="cat-2">CHỌN THEO CPU</a>
                    <a href="/laptop-intel-core-i3">Intel Core i3 </a>
                    <a href="/intel-celeronpentium">Intel Celeron/Pentium </a>
                    <a href="/intel-core-i5">Intel Core i5 </a>
                    <a href="/intel-core-i7">Intel Core i7 </a>
                    <a href="/intel-core-i9">Intel Core i9 </a>
                    <a href="/amd-ryzen-3">AMD Ryzen 3 </a>
                    <a href="/amd-ryzen-5">AMD Ryzen 5 </a>
                    <a href="/amd-ryzen-7">AMD Ryzen 7 </a>
                    <a href="/amd-ryzen-9">AMD Ryzen 9 </a>
                    <a href="/apple-m1">Apple M1 </a>
                    <a href="/apple-m2">Apple M2 </a>
                </div>

                <div class="sub-cat-2">
                    <a href="/laptop-chon-theo-hang" class="cat-2">{{ __('CHỌN THEO HÃNG') }}</a>
                </div>

                <div class="sub-cat-2">
                    <a href="/phu-kien-laptop" class="cat-2">PHỤ KIỆN {{ strtoupper($category) }}</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
