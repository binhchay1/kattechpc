@extends('layouts.page')

@section('title')
<title>{{ __('Xây dựng cấu hình') }} | Kattech PC</title>
@endsection

@section('css')

<link rel="stylesheet" href="{{ asset('/css/page/build-pc.css') }}" />
@endsection

@section('content')
<div class="build-pc-area">
    <div class="build-pc_content">
        <h1 style="font-size: 30px;line-height:36px;margin-bottom: 10px;text-align: center;font-weight:500;">Build PC - Xây dựng cấu hình máy tính PC giá rẻ chuẩn nhất</h1>
        <h2 style="font-size: 26px;line-height:30px;margin-bottom: 10px;font-weight:500; ">Chọn linh kiện xây dựng cấu hình - Tự build PC</h2>

        <ul class="list-btn-action">
            <li class="active"><span onclick="showBuildId(1); changeTab(this);" style="padding:0 20px;">Cấu hình 1</span></li>
            <li><span onclick="showBuildId(2); changeTab(this);" style="padding:0 20px;">Cấu hình 2</span></li>
        </ul>

        <ul class="list-btn-action">
            <li style="width:auto;"><span onclick="openPopupRebuild()" style="padding:0 20px;">Làm mới <i class="fa fa-undo"></i></span></li>
        </ul>
        <div>
            <p class="total-price">Chi phí dự tính:
                <span class="js-config-summary"><span class="total-price-config"></span>
                </span>
            </p>
            <div class="js-buildpc-promotion-content" style="margin-bottom: 0px;"></div>
        </div>

        <div class="list-drive" id="js-buildpc-layout" style="border: solid 1px #e1e1e1;">
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-277" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">1. CPU - Bộ Vi Xử Lý</h3>
                </div>
                <div class="drive-checked" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="category-cpu"><i class="fa fa-plus"></i> Chọn CPU - Bộ Vi Xử Lý</span>
                    <div id="js-selected-item-278" data-id="278" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-278" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">2. Main - Bo Mạch Chủ</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="category-main"><i class="fa fa-plus"></i> Chọn Main - Bo Mạch Chủ</span>
                    <div id="js-selected-item-278" data-id="278" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-283" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">3. RAM - Bộ Nhớ Trong</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="category-ram"><i class="fa fa-plus"></i> Chọn RAM - Bộ Nhớ Trong</span>
                    <div id="js-selected-item-283" data-id="283" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-3274" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">4. Ổ Cứng SSD 1</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="category-ssd"><i class="fa fa-plus"></i> Chọn Ổ Cứng SSD 1</span>
                    <div id="js-selected-item-3274" data-id="3274" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-3644" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">5. Ổ Cứng SSD 2</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="category-ssd"><i class="fa fa-plus"></i> Chọn Ổ Cứng SSD 2</span>
                    <div id="js-selected-item-3644" data-id="3644" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-3273" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">6. Ổ Cứng HDD</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="category-hdd"><i class="fa fa-plus"></i> Chọn Ổ Cứng HDD</span>
                    <div id="js-selected-item-3273" data-id="3273" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-279" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">7. VGA - Card Màn Hình</h3>
                    <div class=" item-speciaoffer d-flex align-item-center font-weight-500 color-red gap-6"><i class="fa-solid fa-gift"></i>
                    </div>
                </div>
                <div class="drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="category-vga"><i class="fa fa-plus"></i> Chọn VGA - Card Màn Hình</span>
                    <div id="js-selected-item-279" data-id="279" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-282" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">8. PSU - Nguồn Máy Tính</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="category-psu"><i class="fa fa-plus"></i> Chọn PSU - Nguồn Máy Tính</span>
                    <div id="js-selected-item-282" data-id="282" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-280" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">9. Case - Vỏ Máy Tính</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="category-case"><i class="fa fa-plus"></i> Chọn Case - Vỏ Máy Tính</span>
                    <div id="js-selected-item-280" data-id="280" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-3270" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">10. Tản Nhiệt Khí</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="category-cooling-air"><i class="fa fa-plus"></i> Chọn Tản Nhiệt Khí</span>
                    <div id="js-selected-item-3270" data-id="3270" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-3269" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">11. Tản Nhiệt Nước AIO</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="category-cooling-aio"><i class="fa fa-plus"></i> Chọn Tản Nhiệt Nước AIO</span>
                    <div id="js-selected-item-3269" data-id="3269" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-3630" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">12. Tản Nhiệt Nước Custom</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="category-cooling-custom"><i class="fa fa-plus"></i> Chọn Tản Nhiệt Nước Custom</span>
                    <div id="js-selected-item-3630" data-id="3630" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-3271" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">13. Fan Tản Nhiệt</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="category-fan"><i class="fa fa-plus"></i> Chọn Fan Tản Nhiệt</span>
                    <div id="js-selected-item-3271" data-id="3271" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-281" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">14. Monitor - Màn Hình</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="category-monitor"><i class="fa fa-plus"></i> Chọn Monitor - Màn Hình</span>
                    <div id="js-selected-item-281" data-id="281" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-1235" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">15. Bàn Phím</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="category-keyboard"><i class="fa fa-plus"></i> Chọn Bàn Phím</span>
                    <div id="js-selected-item-1235" data-id="1235" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-1147" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">16. Mouse - Chuột</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="category-mouse"><i class="fa fa-plus"></i> Chọn Mouse - Chuột</span>
                    <div id="js-selected-item-1147" data-id="1147" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-1118" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">17. Pad - Bàn Di Chuột</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="category-pad"><i class="fa fa-plus"></i> Chọn Pad - Bàn Di Chuột</span>
                    <div id="js-selected-item-1118" data-id="1118" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-3309" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">18. Tai Nghe</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="category-headphone"><i class="fa fa-plus"></i> Chọn Tai Nghe</span>
                    <div id="js-selected-item-3309" data-id="3309" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-3308" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">19. Loa</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="category-speaker"><i class="fa fa-plus"></i> Chọn Loa</span>
                    <div id="js-selected-item-3308" data-id="3308" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-3307" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">20. Ghế Gaming</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="category-chair"><i class="fa fa-plus"></i> Chọn Ghế Gaming</span>
                    <div id="js-selected-item-3307" data-id="3307" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-3411" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">21. Bàn Gaming</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="category-desk"><i class="fa fa-plus"></i> Chọn Bàn Gaming</span>
                    <div id="js-selected-item-3411" data-id="3411" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-3287" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">22. Webcam</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="category-webcam"><i class="fa fa-plus"></i> Chọn Webcam</span>
                    <div id="js-selected-item-3287" data-id="3287" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">23. Microphones</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="category-microphone"><i class="fa fa-plus"></i> Chọn Microphones</span>
                    <div id="js-selected-item-3341" data-id="3341" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">24. Thiết Bị Mạng</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="category-network"><i class="fa fa-plus"></i> Chọn Thiết Bị Mạng</span>
                    <div id="js-selected-item-1751" data-id="1751" class="js-item-row"></div>
                </div>
            </div>
        </div>

        <p class="total-price">{{ __('Chi phí dự tính:') }} <span class="js-config-summary"><span class="total-price-config"></span></span></p>

        <ul class="list-btn-action" id="js-buildpc-action">
            <li><span data-action="create-image">{{ __('Tải ảnh cấu hình') }}<i class="fa fa-image"></i></span></li>
            <li><span data-action="view">{{ __('Xem và in') }}<i class="fa fa-print"></i></span></li>
            <li><span data-action="add-cart">{{ __('Thêm vào giỏ hàng') }}<i class="fa fa-shopping-cart"></i></span></li>
        </ul>
    </div>
</div>

@include('includes.modal-build-pc')
@endsection
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>

<script>
    $(document).ready(function() {
        $(".open-selection").click(function() {
            var userChose = $(this).attr("id");
            var url = "get-product?key=" + userChose;
            $.ajax({
                type: 'get',
                url: url,
                success: function(data) {
                    $(".list-product-select").empty();
                    $.each(data, function(key, val) {
                        let name = val.name;
                        let code = val.code;
                        let new_price = val.new_price;
                        let price = val.price;
                        let slug = val.slug;
                        let image = val.image;
                        let urlProduct = '/product/' + slug;
                        let urlAddToBuild = '/add-build-pc/' + slug;
                        let status_guarantee = val.status_guarantee;
                        let status = val.status;
                        if (status == 'available') {
                            textStatus = 'Còn hàng';
                        } else if (status == 'out of stock') {
                            textStatus = 'Hết hàng';
                        } else {
                            textStatus = 'Đang về hàng';
                        }

                        let stringAppend = `<div class="row p-item">
                        <div class="col-lg-3">
                            <a href="` + urlProduct + `" class="p-img">
                                <img src="` + image + `">
                            </a>
                        </div>
                        <div class="col-lg-6 info">
                            <a href="" class="p-name">` + name + `</a>
                            <table>
                                <tbody>
                                    <tr>
                                        <td><b>Bảo hành:</b></td>
                                        <td>` + status_guarantee + `</td>
                                    </tr>

                                    <tr>
                                        <td valign="top"><b>Kho hàng:</b></td>
                                        <td>
                                            ` + textStatus + `
                                            | <b>Mã SP:</b> ` + code + `
                                        </td>
                                    </tr>
                                </tbody>
                            </table>`;

                        if (new_price != null) {
                            let discount = Math.floor(100 - ((parseInt(new_price) / parseInt(price)) * 100));
                            stringAppend += `<span class="p-price">` + new_price + `</span>
                                    <div class="product-martket-main d-flex align-items-center" style="margin-top:10px;">
                                <p class="product-market-price" style="color: #575757;text-decoration: line-through;">
                                    ` + price + `<u> đ</u>
                                </p>
                            <div class="product-percent-price" style="background: #BE1F2D;border-radius: 7px;color:#fff;border-radius: 7px;margin-left:6px;padding: 1px 8px;">-` + discount + ` %</div>
                            </div>`;
                        } else {
                            stringAppend += `<span class="p-price">` + price + `</span>`;
                        }

                        stringAppend += `</div><div class="col-lg-3" style="margin-top:10px ">
                             <a class="btn-1" href="` + urlAddToBuild + `">
                                 <span id="buy-product" class="btn-buy js-select-product" data-id="17131">Thêm vào cấu hình <i class="fa fa-angle-right"></i></span>
                             </a>
                        </div>
                        </div>
                     <hr>`;

                        $(".list-product-select").append(stringAppend);
                    })
                }
            });

            $('#js-modal-popup').show();

        });

        $('.close-popup').click(function() {
            $('#js-modal-popup').hide();
        });

    });

    function updateOrder(quantity, id) {
        $.get(
            '{{ asset("update-build-pc") }}', {
                quantity: quantity,
                id: id
            },
            function() {
                location.reload()
            }
        )
    }

    function deleteBuild(url) {
        if (confirm('Are you sure?')) {
            $.ajax({
                type: "get",
                url: url,
                success: function(result) {}
            });

        }
    }
</script>
