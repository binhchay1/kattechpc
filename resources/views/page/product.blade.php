@extends('layouts.page')

@section('title')
<title>{{ __('Sản phẩm') }} | Kattech PC</title>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('/css/page/product.css') }}" />
@endsection

@section('content')
<section class="page-product-detail bg-white mt-12">
    <div class="container">
        <div class="box-content-product-detail gap-12 d-flex justify-content-between">
            <div class="box-left">
                <img style="border-radius: 15px;width: 100%;" class="lazy entered loaded" width="1" height="1" src="/media/product/250-26461-26343-ax5-m-2--3-.jpg">
            </div>
            <div class="box-right">
                <h1 class="product-name color-black line-clamp-3">Bộ PC Gaming Intel I5 14400F/ RAM 16GB/ RTX 2060 Super </h1>
                <div class="list-basic-product-info d-flex align-items-center flex-wrap">
                    <div class="item-basic">
                        Mã SP: <span class="color-primary"></span>
                    </div>
                    <div class="item-basic">
                        Đánh giá: <span class="color-primary">15.84</span>
                    </div>
                    <div class="item-basic">
                        Bình luận: <span class="color-primary">0</span>
                    </div>
                    <div class="item-basic last-item-basic position-relative">
                        Lượt xem: <span class="color-primary">187</span>
                    </div>
                </div>
                <div class="list-basic-product-info d-flex align-items-center flex-wrap gap-6">
                    <div class="item-basic">
                        Bảo hành: <span class="color-red">Bảo hành theo từng linh kiện</span>
                    </div>

                    <div class="item-basic last-item-basic position-relative">
                        Tình trạng:
                        <span class="color-green">
                            Còn hàng
                        </span>
                    </div>

                    <div class="store-status-detail position-relative" id="js-store-status-detail">
                        <div class="title d-flex align-items-center justify-content-between">Xem chi nhánh đang có còn hàng <i class="fa-solid fa-caret-down"></i></div>
                        <div class="list-store-detail list-showroom-detail js-box-showrom-has-pro-list">
                            <div id="js-mien-bac">
                                <p class="d-flex align-items-center gap-6"><i class="sprite sprite-location-detail"></i> <b>Showroom Miền Bắc:</b></p> <a href="https://goo.gl/maps/3UeLE87NdpNzmmoGA" target="_blank"><span>50 Trần Phú - Hà Đông - HN</span> </a>
                            </div>
                            <div id="js-mien-nam">
                                <p class="d-flex align-items-center gap-6"><i class="sprite sprite-location-detail"></i><b>Showroom Miền Nam:</b></p><a href="https://goo.gl/maps/BfZeSWEYbYVwNAWK8" target="_blank"><span>249 Lý Thường Kiệt - Q.11 - HCM</span> </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="box-price-detail d-flex align-items-center boder-radius-10">
                    <p class="price-detail font-weight-600">18.390.000đ</p>
                    <span class="market-price-detail font-weight-500">19.990.000₫</span>
                    <div class="save-price-detail">Tiết kiệm 1.600.000đ</div>
                </div>

                <div class="product-buy-quantity d-flex align-items-center">
                    <p class="title-quantity">Số lượng:</p>
                    <div class="cart-quantity-select justify-content-center align-items-center d-flex">
                        <p class="js-quantity-change" data-value="-1"> − </p>
                        <input type="text" class="js-buy-quantity js-quantity-change bk-product-qty font-weight-800" value="1">
                        <p class="js-quantity-change" data-value="1"> + </p>
                    </div>
                    <a href="javascript:addProductToCart(26461, 0, '')" class="addCart gap-8 d-flex flex-wrap align-items-center justify-content-center">
                        <i class="sprite sprite-cart-detail"></i>
                        <p class="title-cart">Thêm vào giỏ hàng</p>
                    </a>
                    <input type="hidden" class="js-buy-quantity-temp" value="1">
                </div>
                <div id="detail-buy-ads" class="detail-buy gap-12 d-flex align-items-center justify-content-between flex-wrap">
                    <a href="javascript:;" class="detail-buy-now w-100" onclick="buyNow(26461, 0, '')">
                        <span>ĐẶT MUA NGAY</span>
                        Giao hàng tận nơi nhanh chóng
                    </a>
                    <a href="javascript:;" class="detail-add-cart" onclick="buyPayInstall(26461, 0, '')">
                        <span>TRẢ GÓP QUA HỒ SƠ</span>
                        Chỉ từ 2.665.000₫/ tháng
                    </a>
                    <a href="javascript:;" class="detail-add-cart" onclick="buyAlepay(26461, 0, '')">
                        <span>TRẢ GÓP QUA THẺ</span>
                        Chỉ từ 1.332.500₫/ tháng
                    </a>
                </div>

                <div class="box-product-has-product boder-radius-10 hide">
                    <p class="title font-weight-600">Sản phẩm còn hàng tại</p>
                    <div class="list-showroom-detail js-box-showrom-has-pro-list">
                        <div id="js-mien-bac">
                            <p class="d-flex align-items-center gap-6"><i class="sprite sprite-location-detail"></i> <b>Showroom Miền Bắc:</b></p> <a href="https://goo.gl/maps/3UeLE87NdpNzmmoGA" target="_blank"><span>50 Trần Phú - Hà Đông - HN</span> </a>
                        </div>
                        <div id="js-mien-nam">
                            <p class="d-flex align-items-center gap-6"><i class="sprite sprite-location-detail"></i><b>Showroom Miền Nam:</b></p><a href="https://goo.gl/maps/BfZeSWEYbYVwNAWK8" target="_blank"><span>249 Lý Thường Kiệt - Q.11 - HCM</span> </a>
                        </div>
                    </div>
                </div>
                <div class="box-product-policy-detal boder-radius-10 mt-12">
                    <p class="title font-weight-600">Yên tâm mua hàng</p>
                    <div class="list-showroom-detail d-flex flex-wrap justify-content-between" id="js-box-showrom-has-pro-list">
                        <div class="item d-flex align-items-center gap-6">
                            <i class="sprite sprite-camket-detail"></i>
                            <p>Cam kết giá tốt nhất thị trường.</p>
                        </div>
                        <div class="item d-flex align-items-center gap-6">
                            <i class="sprite sprite-sanphammoi-detail"></i>
                            <p>Sản phẩm mới 100%.</p>
                        </div>
                        <div class="item d-flex align-items-center gap-6">
                            <i class="sprite sprite-1doi1-detail"></i>
                            <p>Lỗi 1 đổi 1 ngay lập tức.</p>
                        </div>
                        <div class="item d-flex align-items-center gap-6">
                            <i class="sprite sprite-hotrotragop-detail"></i>
                            <p>Hỗ trợ trả góp - Thủ tục nhanh gọn.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="box-read-product-detail d-flex justify-content-between gap-12">
            <div class="box-left">
                <div class="box-review">
                    <p class="title-review font-weight-600">Bình luận và đánh giá</p>
                    <div class="review-customer-detail">
                        <form action="/ajax/post_comment.php" method="post" enctype="multipart/form-data" onsubmit="return check_field(0)" class="form-post">
                            <input type="hidden" name="user_post[item_type]" value="product">
                            <input type="hidden" name="user_post[item_id]" value="26461">
                            <input type="hidden" name="user_post[item_title]" value="Bộ PC Gaming Intel I5 14400F/ RAM 16GB/ RTX 2060 Super ">
                            <input type="hidden" name="user_post[rate]" value="0">
                            <input type="hidden" name="user_post[title]" value="Bộ PC Gaming Intel I5 14400F/ RAM 16GB/ RTX 2060 Super ">
                            <input type="hidden" name="user_post[user_email]" value="">
                            <input type="hidden" name="user_post[user_name]" value="">
                            <input type="hidden" name="user_post[user_avatar]" value="0">
                            <div class="review-info d-flex boder-radius-10">
                                <div class="avgRate d-flex justify-content-center align-items-center flex-column">
                                    <span class="font-weight-700">0/5</span>
                                    <i class="sprite-star-5 star0 icon-star-detail"></i>
                                    <p class="mt-12">0 đánh giá và nhận xét</p>
                                </div>
                                <div class="box-avg-rate-count">
                                    <div class="avg-rate-count">
                                        <div class="avg-rate-item d-flex justify-content-center align-items-center">
                                            <span class="rate-number">5 <i class="fas fa-star"></i></span>
                                            <div class="nhan-xet-bar">
                                                <div class="percent percent5" style="width:0%"></div>
                                            </div>
                                            <span class="total-avg-rate" title="Xem các đánh giá này"><strong>0</strong> đánh giá</span>
                                        </div>

                                        <div class="avg-rate-item mt-12 d-flex justify-content-center align-items-center">
                                            <span class="rate-number">4 <i class="fas fa-star"></i></span>
                                            <div class="nhan-xet-bar">
                                                <div class="percent percent4" style="width:0%"></div>
                                            </div>
                                            <span class="total-avg-rate" title="Xem các đánh giá này"><strong>0</strong> đánh giá</span>
                                        </div>

                                        <div class="avg-rate-item mt-12 d-flex justify-content-center align-items-center">
                                            <span class="rate-number">3 <i class="fas fa-star"></i></span>
                                            <div class="nhan-xet-bar">
                                                <div class="percent percent3" style="width:0%"></div>
                                            </div>
                                            <span class="total-avg-rate" title="Xem các đánh giá này"><strong>0</strong> đánh giá</span>
                                        </div>

                                        <div class="avg-rate-item mt-12 d-flex justify-content-center align-items-center">
                                            <span class="rate-number">2 <i class="fas fa-star"></i></span>
                                            <div class="nhan-xet-bar">
                                                <div class="percent percent2" style="width:0%"></div>
                                            </div>
                                            <span class="total-avg-rate" title="Xem các đánh giá này"><strong>0</strong> đánh giá</span>
                                        </div>

                                        <div class="avg-rate-item mt-12 d-flex justify-content-center align-items-center">
                                            <span class="rate-number rate-number1">1 <i class="fas fa-star"></i></span>
                                            <div class="nhan-xet-bar">
                                                <div class="percent percent1" style="width:0%"></div>
                                            </div>
                                            <span class="total-avg-rate" title="Xem các đánh giá này"><strong>0</strong> đánh giá</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <p class="text-danh-gia">Bạn đánh giá sao sản phẩm này</p>
                            <div class="button-review d-flex justify-content-center align-items-center" id="js-show-review">
                                <a href="javascript:;" class="font-weight-500">Đánh giá ngay</a>
                            </div>
                            <div class="button-review d-flex justify-content-center align-items-center hide" id="js-hide-review">
                                <a href="javascript:;" class="font-weight-500">Đóng lại</a>
                            </div>

                            <div class="box-form-review" id="js-box-review" style="display: none;">
                                <textarea class="review_reply_content" id="rating-content" placeholder="Mời bạn để lại đánh giá..." name="user_post[content]"></textarea>
                                <div class="actions-comment">
                                    <div class="infomation-customer">
                                        <table>
                                            <tbody>
                                                <tr class="d-flex align-items-center">
                                                    <td>
                                                        <label>Đánh giá:</label>
                                                    </td>
                                                    <td>
                                                        <div class="rating" id="select-rate-pro">
                                                            <div class="rating-selection" id="rating-review0">
                                                                <input type="radio" class="rating-input" id="rating-input-review-0-5" value="5" name="user_post[rate]" checked="">
                                                                <label for="rating-input-review-0-5" class="sprite-1star rating-star"></label>

                                                                <input type="radio" class="rating-input" id="rating-input-review-0-4" value="4" name="user_post[rate]">
                                                                <label for="rating-input-review-0-4" class="sprite-1star rating-star"></label>

                                                                <input type="radio" class="rating-input" id="rating-input-review-0-3" value="3" name="user_post[rate]">
                                                                <label for="rating-input-review-0-3" class="sprite-1star rating-star"></label>

                                                                <input type="radio" class="rating-input" id="rating-input-review-0-2" value="2" name="user_post[rate]">
                                                                <label for="rating-input-review-0-2" class="sprite-1star rating-star"></label>

                                                                <input type="radio" class="rating-input" id="rating-input-review-0-1" value="1" name="user_post[rate]">
                                                                <label for="rating-input-review-0-1" class="sprite-1star rating-star"></label>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>

                                                <tr class="d-flex align-items-center">
                                                    <td>Tên bạn</td>
                                                    <td><input type="text" id="rating-name" name="user_post[user_name]" class="form-control" value=""></td>
                                                </tr>

                                                <tr class="d-flex align-items-center">
                                                    <td>Email</td>
                                                    <td><input type="text" id="rating-email" name="user_post[user_email]" class="form-control" value=""></td>
                                                </tr>

                                            </tbody>
                                        </table>
                                    </div>
                                    <p id="js-review-note" class="d-flex font-weight-700" style="color: red;max-width: 100%;"></p>
                                    <a href="javascript:;" class="btn-review send_form mb-10 mt-12" onclick="send_vote()">Gửi đánh giá</a>
                                </div>

                            </div>
                            <!-- END FORM REVIEW -->
                        </form>
                    </div>

                    <div class="list-review">
                        <div id="js-review-holder"></div>
                    </div>
                </div>
                <!----BOX COMMENT-->
                <div class="box-comment">
                    <p class="title-comment font-weight-600">Hỏi và đáp</p>
                    <div class="comment-detail">
                        <div class="form-comment gap-10 d-flex justify-content-between">
                            <textarea class="comment_reply_content boder-radius-10" id="content0" placeholder="Xin mời để lại câu hỏi, Nguyencong sẽ trả lời ngay trong 1h, các câu hỏi sau 22h - 8h sẽ được trả lời vào sáng hôm sau." name="user_post[content]"></textarea>
                            <a class="btn-send-form-comment d-flex align-items-center justify-content-center gap-6 send-comment-pc" href="javascript:showCommentBox('0','')"> <i class="sprite sprite-icon-send-detail" style="margin-right:4px;"></i>Gửi</a>
                            <a class="btn-send-form-comment d-flex align-items-center justify-content-center gap-6 send-comment-mobile" href="javascript:showCommentBox('0','')"> <i class="sprite sprite-send-comment" style="margin-right:4px;"></i>Gửi</a>
                        </div>

                        <p id="js-content-note0" style="color: red;max-width: 100%;display: flex;font-weight:700;margin-bottom:10px;"></p>

                        <!--UPLOAD IMAGE--->
                        <input id="js-file-upload-id" type="hidden" value="">
                        <div class="imageUpload mb-10">
                            <div class="uploadImage js-test-upload-image dz-clickable" data-id="0" data-actions="review" id="js-upload-image-review" style="cursor: pointer;">
                                <i class="fa-solid fa-camera" style="margin-right: 6px"></i>Đính kèm ảnh
                                <input class="js-preview-upload-ids" type="hidden" size="40" value="" accept="image/*;capture=camera">
                            </div>

                            <div class="js-preview-upload d-flex align-items-center gap-12" id="js-preview-file-upload-review"></div>
                            <p class="error-upload" style="color:red;font-weight:700;margin-top:5px;"></p>
                        </div>

                        <div id="newCommentBox" style="display:none">
                            <div class="comment-box-wrap">
                                <div class="comment-box-container">
                                    <div class="title">
                                        Nhập thông tin
                                        <a href="javascript:closeCommentBox();" class="back-btn">
                                            <i class="fa fa-arrow-left"></i>
                                        </a>
                                    </div>
                                    <div class="form-wrap">
                                        <div class="sex">
                                            <label>
                                                <span class="radio">
                                                    <input type="radio" value="Anh" name="sex" checked="">
                                                    <span class="icon"></span>
                                                </span> Anh
                                            </label>
                                            <label>
                                                <span class="radio">
                                                    <input type="radio" value="chị" name="sex">
                                                    <span class="icon"></span>
                                                </span> chị
                                            </label>
                                        </div>
                                        <input type="text" id="name0" name="user_post[user_name]" class="form-control" value="" placeholder="Họ tên (bắt buộc)">
                                        <input type="text" id="email0" name="user_post[user_email]" class="form-control" value="" placeholder="Email (để nhận phản hồi qua mail)">
                                        <p id="js-comment-note0" style="color: red;max-width: 100%;display: flex;font-weight:700;margin-top:10px;"></p>

                                        <a class="btn-send-form-cmt d-flex align-items-center justify-content-center mt-12" href="javascript:postComment('0','');">Cập nhật</a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div id="comment-list" class="comment-list"></div>
                </div>
            </div>
            <div class="box-right">
                <div class="box-spec">
                    <h2 class="title font-weight-600">Thông số kỹ thuật</h2>
                    <div class="content-spec position-relative">
                        <table style="margin-left: -0.25pt; border-collapse: collapse; height: 506px;" width="785">
                            <tbody>
                                <tr style="height: 34.95pt;">
                                    <td style="width: 48.0pt; border: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 34.95pt;" width="64">
                                        <p style="text-align: center; line-height: normal;"><strong><span style="color: black;">MÃ</span></strong></p>
                                    </td>
                                    <td style="width: 228.0pt; border: solid windowtext 1.0pt; border-left: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 34.95pt;" width="304">
                                        <p style="text-align: center; line-height: normal;"><strong><span style="color: black;">TÊN LINH KIỆN</span></strong></p>
                                    </td>
                                    <td style="width: 48.0pt; border: solid windowtext 1.0pt; border-left: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 34.95pt;" width="64">
                                        <p style="text-align: center; line-height: normal;"><strong><span style="color: black;">BẢO HÀNH</span></strong></p>
                                    </td>
                                </tr>
                                <tr style="height: 15.0pt;">
                                    <td style="width: 48.0pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="64">
                                        <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">CPU</span></p>
                                    </td>
                                    <td style="width: 228.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="304">
                                        <p style="line-height: 200%;">CPU Intel Core I5 14400F</p>
                                    </td>
                                    <td style="width: 48.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="64">
                                        <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">36TH</span></p>
                                    </td>
                                </tr>
                                <tr style="height: 15.0pt;">
                                    <td style="width: 48.0pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="64">
                                        <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">MAIN</span></p>
                                    </td>
                                    <td style="width: 228.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="304">
                                        <p style="line-height: 200%;">B760M DDR4 M-ATX</p>
                                    </td>
                                    <td style="width: 48.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="64">
                                        <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">36TH</span></p>
                                    </td>
                                </tr>
                                <tr style="height: 24.75pt;">
                                    <td style="width: 48.0pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 24.75pt;" width="64">
                                        <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">RAM</span></p>
                                    </td>
                                    <td style="width: 228.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 24.75pt;" width="304">
                                        <p style="line-height: 200%;">Desktop 16GB (2x8) DDR4 3200Mhz</p>
                                    </td>
                                    <td style="width: 48.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 24.75pt;" width="64">
                                        <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">36TH</span></p>
                                    </td>
                                </tr>
                                <tr style="height: 21.0pt;">
                                    <td style="width: 48.0pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 21.0pt;" width="64">
                                        <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">SSD</span></p>
                                    </td>
                                    <td style="width: 228.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 21.0pt;" width="304">
                                        <p style="line-height: 200%;">NVMe 250GB</p>
                                    </td>
                                    <td style="width: 48.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 21.0pt;" width="64">
                                        <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">36TH</span></p>
                                    </td>
                                </tr>
                                <tr style="height: 21.0pt;">
                                    <td style="width: 48.0pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 21.0pt;" width="64">
                                        <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">VGA</span></p>
                                    </td>
                                    <td style="width: 228.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 21.0pt;" width="304">
                                        <p style="line-height: 200%;">GeForce RTX 2060 Super 8GB GDDR6</p>
                                    </td>
                                    <td style="width: 48.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 21.0pt;" width="64">
                                        <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">36TH</span></p>
                                    </td>
                                </tr>
                                <tr style="height: 15.0pt;">
                                    <td style="width: 48.0pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="64">
                                        <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">HDD</span></p>
                                    </td>
                                    <td style="width: 228.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="304">
                                        <p style="line-height: 200%;">Tùy chọn sau</p>
                                    </td>
                                    <td style="width: 48.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="64">
                                        <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">**TH</span></p>
                                    </td>
                                </tr>
                                <tr style="height: 15.0pt;">
                                    <td style="width: 48.0pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="64">
                                        <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">PSU</span></p>
                                    </td>
                                    <td style="width: 228.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="304">
                                        <p style="line-height: 200%;">Nguồn 650W 80 Plus Bronze</p>
                                    </td>
                                    <td style="width: 48.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="64">
                                        <p style="text-align: center; line-height: 200%;">36TH</p>
                                    </td>
                                </tr>
                                <tr style="height: 15.0pt;">
                                    <td style="width: 48.0pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="64">
                                        <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">CASE</span></p>
                                    </td>
                                    <td style="width: 228.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="304">
                                        <p style="line-height: 200%;">Vitra Cruise AX3 Black 3 Fan RGB</p>
                                    </td>
                                    <td style="width: 48.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="64">
                                        <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">12TH&nbsp;</span></p>
                                    </td>
                                </tr>
                                <tr style="height: 15.0pt;">
                                    <td style="width: 48.0pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="64">
                                        <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">TẢN</span></p>
                                    </td>
                                    <td style="width: 228.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="304">
                                        <p style="line-height: 200%;">Thermalright Burst Assassin 120 ARGB</p>
                                    </td>
                                    <td style="width: 48.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="64">
                                        <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">12TH</span></p>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                        <p>&nbsp;</p>
                    </div>
                    <div id="product-spec" style="display: none">
                        <div class="box-top-centent-spec d-flex justify-content-between hide">
                            <p class="font-weight-600">Thông số kỹ thuật</p>
                            <p class="delelte-content-spec d-flex justify-content-center align-items-center" data-fancybox-close=""><i class="fa-solid fa-xmark"></i></p>
                        </div>
                        <div class="content-spec">
                            <table style="margin-left: -0.25pt; border-collapse: collapse; height: 506px;" width="785">
                                <tbody>
                                    <tr style="height: 34.95pt;">
                                        <td style="width: 48.0pt; border: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 34.95pt;" width="64">
                                            <p style="text-align: center; line-height: normal;"><strong><span style="color: black;">MÃ</span></strong></p>
                                        </td>
                                        <td style="width: 228.0pt; border: solid windowtext 1.0pt; border-left: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 34.95pt;" width="304">
                                            <p style="text-align: center; line-height: normal;"><strong><span style="color: black;">TÊN LINH KIỆN</span></strong></p>
                                        </td>
                                        <td style="width: 48.0pt; border: solid windowtext 1.0pt; border-left: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 34.95pt;" width="64">
                                            <p style="text-align: center; line-height: normal;"><strong><span style="color: black;">BẢO HÀNH</span></strong></p>
                                        </td>
                                    </tr>
                                    <tr style="height: 15.0pt;">
                                        <td style="width: 48.0pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="64">
                                            <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">CPU</span></p>
                                        </td>
                                        <td style="width: 228.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="304">
                                            <p style="line-height: 200%;">CPU Intel Core I5 14400F</p>
                                        </td>
                                        <td style="width: 48.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="64">
                                            <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">36TH</span></p>
                                        </td>
                                    </tr>
                                    <tr style="height: 15.0pt;">
                                        <td style="width: 48.0pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="64">
                                            <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">MAIN</span></p>
                                        </td>
                                        <td style="width: 228.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="304">
                                            <p style="line-height: 200%;">B760M DDR4 M-ATX</p>
                                        </td>
                                        <td style="width: 48.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="64">
                                            <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">36TH</span></p>
                                        </td>
                                    </tr>
                                    <tr style="height: 24.75pt;">
                                        <td style="width: 48.0pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 24.75pt;" width="64">
                                            <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">RAM</span></p>
                                        </td>
                                        <td style="width: 228.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 24.75pt;" width="304">
                                            <p style="line-height: 200%;">Desktop 16GB (2x8) DDR4 3200Mhz</p>
                                        </td>
                                        <td style="width: 48.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 24.75pt;" width="64">
                                            <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">36TH</span></p>
                                        </td>
                                    </tr>
                                    <tr style="height: 21.0pt;">
                                        <td style="width: 48.0pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 21.0pt;" width="64">
                                            <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">SSD</span></p>
                                        </td>
                                        <td style="width: 228.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 21.0pt;" width="304">
                                            <p style="line-height: 200%;">NVMe 250GB</p>
                                        </td>
                                        <td style="width: 48.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 21.0pt;" width="64">
                                            <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">36TH</span></p>
                                        </td>
                                    </tr>
                                    <tr style="height: 21.0pt;">
                                        <td style="width: 48.0pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 21.0pt;" width="64">
                                            <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">VGA</span></p>
                                        </td>
                                        <td style="width: 228.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 21.0pt;" width="304">
                                            <p style="line-height: 200%;">GeForce RTX 2060 Super 8GB GDDR6</p>
                                        </td>
                                        <td style="width: 48.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 21.0pt;" width="64">
                                            <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">36TH</span></p>
                                        </td>
                                    </tr>
                                    <tr style="height: 15.0pt;">
                                        <td style="width: 48.0pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="64">
                                            <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">HDD</span></p>
                                        </td>
                                        <td style="width: 228.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="304">
                                            <p style="line-height: 200%;">Tùy chọn sau</p>
                                        </td>
                                        <td style="width: 48.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="64">
                                            <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">**TH</span></p>
                                        </td>
                                    </tr>
                                    <tr style="height: 15.0pt;">
                                        <td style="width: 48.0pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="64">
                                            <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">PSU</span></p>
                                        </td>
                                        <td style="width: 228.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="304">
                                            <p style="line-height: 200%;">Nguồn 650W 80 Plus Bronze</p>
                                        </td>
                                        <td style="width: 48.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="64">
                                            <p style="text-align: center; line-height: 200%;">36TH</p>
                                        </td>
                                    </tr>
                                    <tr style="height: 15.0pt;">
                                        <td style="width: 48.0pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="64">
                                            <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">CASE</span></p>
                                        </td>
                                        <td style="width: 228.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="304">
                                            <p style="line-height: 200%;">Vitra Cruise AX3 Black 3 Fan RGB</p>
                                        </td>
                                        <td style="width: 48.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="64">
                                            <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">12TH&nbsp;</span></p>
                                        </td>
                                    </tr>
                                    <tr style="height: 15.0pt;">
                                        <td style="width: 48.0pt; border: solid windowtext 1.0pt; border-top: none; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="64">
                                            <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">TẢN</span></p>
                                        </td>
                                        <td style="width: 228.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="304">
                                            <p style="line-height: 200%;">Thermalright Burst Assassin 120 ARGB</p>
                                        </td>
                                        <td style="width: 48.0pt; border-top: none; border-left: none; border-bottom: solid windowtext 1.0pt; border-right: solid windowtext 1.0pt; padding: 0cm 5.4pt 0cm 5.4pt; height: 15.0pt;" width="64">
                                            <p style="text-align: center; line-height: 200%;"><span style="line-height: 200%; color: black;">12TH</span></p>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <p>&nbsp;</p>
                        </div>
                        <!--<a href="javascript:void(0)" data-fancybox-close class="btn-conten-spec-delete d-flex align-items-center justify-content-center gap-6 hide"><i class="fa-solid fa-xmark"></i>Đóng</a>-->
                    </div>
                    <a data-fancybox="" data-options="{&quot;src&quot;: &quot;#product-spec&quot;, &quot;touch&quot;: false, &quot;smallBtn&quot; : false}" href="javascript:;" class="btn-article-col font-weight-500 gap-8 d-flex align-items-center justify-content-center">
                        Xem đầy đủ thông số kỹ thuật
                        <i class="fa-solid fa-angle-down"></i>
                    </a>
                </div>
                <div class="box-artilce-col-right box-artilce-col-right-product mt-12">
                    <div class="title-article d-flex align-items-center gap-12">
                        <i class="sprite sprite-news-detail"></i>
                        <p class="font-weight-600">Tin tức liên quan</p>
                    </div>
                    <div class="list-article-col-right d-flex flex-column gap-12 list-article-related" id="js-related-article-26461">
                        <div class="item-article d-flex gap-12">
                            <a href="/amd-phat-hanh-driver-chipset-moi-danh-cho-windows-10-va-11" class="img-article boder-radius-10 position-relative">

                                <img class="boder-radius-10" src="/media/news/2937-amd-driver-6-02-07-2300.jpg" alt="AMD phát hành driver chipset mới dành cho Windows 10 và 11">

                                <i class="sprite sprite-icon-play-video-detail icon-video-feature incon-play-youtube"></i>
                                <i class="sprite sprite-play-youtube incon-play-youtube"></i>
                            </a>
                            <div class="content-article content-article-item d-flex flex-column flex-1">
                                <a href="/amd-phat-hanh-driver-chipset-moi-danh-cho-windows-10-va-11" class="title-article">
                                    <h3 class="font-weight-400 line-clamp-2">AMD phát hành driver chipset mới dành cho Windows 10 và 11</h3>
                                </a>
                                <p class="time-article d-flex align-items-center gap-4">
                                    <i class="sprite sprite-clock-item-article"></i>
                                    <span>Hôm nay, 8:47 pm</span>
                                </p>
                                <p class="descreption-article line-clamp-2">Gói cập nhật mới nhất này được tung ra chủ yếu là để cung cấp tính ổn định cho CPU Ryzen, cùng với đó là rất nhiều cải tiến mới và quan trọng dành cho người dùng Windows 10 và 11.</p>
                            </div>
                        </div>

                        <div class="item-article d-flex gap-12">
                            <a href="/ban-cap-nhat-moi-nhat-lai-khien-cho-windows-11-bi-loi-man-hinh-xanh" class="img-article boder-radius-10 position-relative">

                                <img class="boder-radius-10" src="/media/news/2936-loi-man-hinh-xanh-windows-11.jpg" alt="Bản cập nhật mới nhất lại khiến cho Windows 11 bị lỗi màn hình xanh">

                                <i class="sprite sprite-icon-play-video-detail icon-video-feature incon-play-youtube"></i>
                                <i class="sprite sprite-play-youtube incon-play-youtube"></i>
                            </a>
                            <div class="content-article content-article-item d-flex flex-column flex-1">
                                <a href="/ban-cap-nhat-moi-nhat-lai-khien-cho-windows-11-bi-loi-man-hinh-xanh" class="title-article">
                                    <h3 class="font-weight-400 line-clamp-2">Bản cập nhật mới nhất lại khiến cho Windows 11 bị lỗi màn hình xanh</h3>
                                </a>
                                <p class="time-article d-flex align-items-center gap-4">
                                    <i class="sprite sprite-clock-item-article"></i>
                                    <span>Hôm nay, 11:50 am</span>
                                </p>
                                <p class="descreption-article line-clamp-2">Bản cập nhật tháng 3 dành cho Windows 11 vừa mới được Microsoft phát hành mới đây lại vừa gây ra lỗi màn hình xanh, nhưng có lẽ người dùng Windows đã cảm thấy chuyện này giờ đây đã trở nên quá đỗi bình thường.</p>
                            </div>
                        </div>

                        <div class="item-article d-flex gap-12">
                            <a href="/spotify-chuan-bi-them-video-nhac-tai-mot-so-quoc-gia-pha-hoi-nong-vao-youtube-music" class="img-article boder-radius-10 position-relative">

                                <img class="boder-radius-10" src="/media/news/2935-spotify-music-video.jpg" alt="Spotify chuẩn bị thêm video nhạc tại một số quốc gia, phả hơi nóng vào YouTube Music">

                                <i class="sprite sprite-icon-play-video-detail icon-video-feature incon-play-youtube"></i>
                                <i class="sprite sprite-play-youtube incon-play-youtube"></i>
                            </a>
                            <div class="content-article content-article-item d-flex flex-column flex-1">
                                <a href="/spotify-chuan-bi-them-video-nhac-tai-mot-so-quoc-gia-pha-hoi-nong-vao-youtube-music" class="title-article">
                                    <h3 class="font-weight-400 line-clamp-2">Spotify chuẩn bị thêm video nhạc tại một số quốc gia, phả hơi nóng vào YouTube Music</h3>
                                </a>
                                <p class="time-article d-flex align-items-center gap-4">
                                    <i class="sprite sprite-clock-item-article"></i>
                                    <span>16-03-2024, 11:33 am</span>
                                </p>
                                <p class="descreption-article line-clamp-2">Spotify đã đưa ra thông báo rằng họ sẽ bắt đầu triển khai video nhạc tại một số quốc gia đã được lựa chọn.</p>
                            </div>
                        </div>

                        <div class="item-article d-flex gap-12">
                            <a href="/nguoi-dung-windows-bat-dau-co-xu-huong-chuyen-su-dung-macbook-nhieu-hon" class="img-article boder-radius-10 position-relative">

                                <img class="boder-radius-10" src="/media/news/2934-nguoi-dung-windows-chuyen-sang-dung-macbook-1.jpg" alt="Người dùng Windows bắt đầu có xu hướng chuyển sử dụng MacBook nhiều hơn">

                                <i class="sprite sprite-icon-play-video-detail icon-video-feature incon-play-youtube"></i>
                                <i class="sprite sprite-play-youtube incon-play-youtube"></i>
                            </a>
                            <div class="content-article content-article-item d-flex flex-column flex-1">
                                <a href="/nguoi-dung-windows-bat-dau-co-xu-huong-chuyen-su-dung-macbook-nhieu-hon" class="title-article">
                                    <h3 class="font-weight-400 line-clamp-2">Người dùng Windows bắt đầu có xu hướng chuyển sử dụng MacBook nhiều hơn</h3>
                                </a>
                                <p class="time-article d-flex align-items-center gap-4">
                                    <i class="sprite sprite-clock-item-article"></i>
                                    <span>16-03-2024, 11:04 am</span>
                                </p>
                                <p class="descreption-article line-clamp-2">Theo như nhiều số liệu nghiên cứu gần đây, dường như người dùng Windows và Chromebook đang dần có xu hướng chuyển sang sử dụng MacBook nhiều hơn.</p>
                            </div>
                        </div>
                    </div>
                    <a href="/tin-tuc" class="btn-article-col font-weight-500 gap-8 d-flex align-items-center justify-content-center">
                        Xem tất cả
                        <i class="fa-solid fa-angle-down"></i>
                    </a>
                </div>
                <div class="box-artilce-col-right box-artilce-col-right-product box-article-video-featured mt-12">
                    <div class="title-article d-flex align-items-center gap-12">
                        <i class="sprite sprite-icon-video-detail"></i>
                        <p class="font-weight-600">Video nổi bật</p>
                    </div>
                    <div class="list-article-col-right d-flex flex-column gap-12" id="js-article-video-feature">
                        <!---AJAX HOLDER -->
                    </div>
                    <a href="https://www.youtube.com/c/NGUYENCONGPC" target="_blank" rel="nofollow" class="btn-article-col font-weight-500 gap-8 d-flex align-items-center justify-content-center">
                        Xem tất cả
                        <i class="fa-solid fa-angle-down"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div style="display:none" class="bk-data-product-hidden">
        <div class="box-product-deal">
            <div class="product-item" data-time="-1710690484.212"></div>
        </div>
    </div>
</section>
@endsection
