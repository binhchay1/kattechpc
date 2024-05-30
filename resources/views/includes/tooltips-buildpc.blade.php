<div id="tooltip-buildpc" class="global-tooltip">
    <div class="tooltip-name">

    </div>
    <div class="tooltip-descreption">
        <div class="tooltip-descreption-price">
            <p>{{ __('Giá niêm yết') }}</p>
            <p id="title-new-price">{{ __('Giá bán') }}</p>
            <p>{{ __('Bảo hành') }}</p>
            <p>{{ __('Tình trạng') }}</p>
        </div>
        <div class="tooltip-descreption-info">
            <div>
                <div class="d-flex align-items-center">
                    <p class="card-price-origin color-black" id="tooltips-price">
                        <span class="card-price-origin-line-through"></span>
                    </p>
                    <span id="tooltips-sale-price" class="color-red" style="margin-left: 4px;"></span>
                </div>
            </div>
            <p style="margin: 0;" id="tooltips-new-price"></p>
            <p>
                <span class="color-red line-clamp" id="tooltips-status-guarantee"></span>
            </p>
            <p class="color-secondary" id="tooltips-status-storage">
            </p>
        </div>
    </div>

    <div class="box-tooltip-gift">
        <div class="tooltip-input tooltip-gift">
            <p class="icon-gift">
                <i class="fa-solid fa-gift"></i>
                {{ __('Khuyến mãi') }}
            </p>
        </div>
        <div class="tooltip-list tooltip-list-gift">

        </div>
    </div>
</div>
