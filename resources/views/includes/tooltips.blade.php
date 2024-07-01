<div id="tooltip" class="global-tooltip">
    <a class="hover_name tooltip-name"></a>
    <table>
        <tbody>
            <tr>
                <td>- {{ __('Giá bán:') }}</td>
                <td>
                    <span id="tooltips-price"> </span><span>₫ [Đã bao gồm VAT]</span>
                </td>
            </tr>

            <tr>
                <td>- {{ __('Bảo hành:') }}</td>
                <td id="tooltips-status-guarantee"></td>
            </tr>

            <tr>
                <td>- {{ __('Tình trạng:') }}</td>
                <td id="tooltips-status-storage"></td>
            </tr>

        </tbody>
    </table>
    <span class="tooltip-title"><i class="fa fa-layer-group"></i> {{ __('Thông số sản phẩm') }}</span>
    <div class="hover_offer" id="tooltip-detail">
    </div>
    <span class="tooltip-title"><i class="fa fa-gift"></i> {{ __('Chương trình khuyến mại') }}</span>
    <div class="hover_offer tooltip-list-gift">

    </div>
</div>
