<div class="modal" tabindex="-1" role="dialog" id="submitGetNews">
    <div class="modal-dialog" role="document" style="margin: auto; padding: 15px; border-radius: 15px;">
        <div class="modal-content in-product-page" style="width: auto">
            <div class="modal-header in-product-page-header" style="display: flex; justify-content: end;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p class="description" style="font-size: 20px; font-weight: bolder;">{{__('Cám ơn đăng ký theo dõi!!!')}}<br> {{__('Yêu cầu của bạn được gửi đi thành công')}}</p>
                <div class="d-flex justify-content-center">
                    <button class="btn" class="close" data-dismiss="modal" onclick="$('#submitGetNews').css('display', 'none')">{{__('Tiếp tục')}}</button>
                </div>
            </div>
        </div>
    </div>
</div>
