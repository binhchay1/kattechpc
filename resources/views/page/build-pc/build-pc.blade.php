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
            <li><span onclick="showBuildId(1);changeTab(this);" style="padding:0 20px;">Cấu hình 1</span></li>
            <li class="active"><span onclick="showBuildId(2);changeTab(this);" style="padding:0 20px;">Cấu hình 2</span></li>
            <li><span onclick="showBuildId(3);changeTab(this);" style="padding:0 20px;">Cấu hình 3</span></li>
            <li><span onclick="showBuildId(4);changeTab(this);" style="padding:0 20px;">Cấu hình 4</span></li>
            <li><span onclick="showBuildId(5);changeTab(this);" style="padding:0 20px;">Cấu hình 5</span></li>
        </ul>

        <ul class="list-btn-action">
            <li style="width:auto;"><span onclick="openPopupRebuild()" style="padding:0 20px;">Làm mới <i class="fa fa-undo"></i></span></li>
        </ul>
        <div>
            <p class="total-price">Chi phí dự tính:
                <span class="js-config-summary"><span class="total-price-config">1.790.000 đ</span>
                </span>
            </p>
            <div class="js-buildpc-promotion-content" style="margin-bottom: 0px;"></div>
        </div>

        <div class="list-drive" id="js-buildpc-layout" style="border: solid 1px #e1e1e1;">
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-277" style="font-size: 15px;border-bottom: none;margin-bottom:10px;" "="">1. CPU - Bộ Vi Xử Lý</h3>
                    <div class=" item-speciaoffer d-flex align-item-center font-weight-500 color-red gap-6">
                </div>
            </div>
            <div class="drive-checked flex-1" style="margin-left:0;">
                <span class="show-popup_select span-last open-selection" id="js-category-info-277"><i class="fa fa-plus"></i> Chọn CPU - Bộ Vi Xử Lý</span>
                <div id="js-selected-item-277" data-id="277" class="js-item-row">
                    <div class="contain-item-drive" data-category_id="277" data-product_id="21492" data-current_stock="20">
                        <a target="_blank" href="/cpu-intel-core-i3-12100f" class="d-img"><img src="/media/product/75-21492-cpu-intel-core-i3-12100f.jpg"></a>
                        <span class="d-name">
                            <a target="_blank" href="/cpu-intel-core-i3-12100f"> CPU Intel Core i3 12100F (3.3GHz turbo up to 4.3GHz, 4 nhân 8 luồng, 12MB Cache) </a> <br>

                            Bảo hành: 36 tháng <br>
                            Kho hàng: <span style="color: red">Còn hàng </span> | Mã SP: <span style="color: red">SP3940860T</span>
                        </span>
                        <span class="d-price">1.790.000</span>
                        <i>x</i> <input class="count-p" type="number" value="1" min="1" max="50"><i>=</i>
                        <span class="sum_price">1.790.000</span>
                        <span class="btn-action_seclect show-popup_select"><i class="fa fa-edit edit-item"></i></span>
                        <span class="btn-action_seclect delete_select"><i class="fa fa-trash remove-item"></i></span>
                    </div>
                </div>
            </div>
        </div>
        <div class="item-drive d-flex">
            <div class="name-item-drive">
                <h3 class="d-name d-name-278" style="font-size: 15px;border-bottom: none;margin-bottom:10px;" "="">2. Main - Bo Mạch Chủ</h3>
                            </div>
                            <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="js-category-info-278"><i class="fa fa-plus"></i> Chọn Main - Bo Mạch Chủ</span>
                    <div id="js-selected-item-278" data-id="278" class="js-item-row"></div>
            </div>
        </div>
        <div class="item-drive d-flex">
            <div class="name-item-drive">
                <h3 class="d-name d-name-283" style="font-size: 15px;border-bottom: none;margin-bottom:10px;" "="">3. RAM - Bộ Nhớ Trong</h3>
                            </div>
                            <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="js-category-info-283"><i class="fa fa-plus"></i> Chọn RAM - Bộ Nhớ Trong</span>
                    <div id="js-selected-item-283" data-id="283" class="js-item-row"></div>
            </div>
        </div>
        <div class="item-drive d-flex">
            <div class="name-item-drive">
                <h3 class="d-name d-name-3274" style="font-size: 15px;border-bottom: none;margin-bottom:10px;" "="">4. Ổ Cứng SSD 1</h3>
                            </div>
                            <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="js-category-info-3274"><i class="fa fa-plus"></i> Chọn Ổ Cứng SSD 1</span>
                    <div id="js-selected-item-3274" data-id="3274" class="js-item-row"></div>
            </div>
        </div>
        <div class="item-drive d-flex">
            <div class="name-item-drive">
                <h3 class="d-name d-name-3644" style="font-size: 15px;border-bottom: none;margin-bottom:10px;" "="">5. Ổ Cứng SSD 2</h3>
                            </div>
                            <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="js-category-info-3644"><i class="fa fa-plus"></i> Chọn Ổ Cứng SSD 2</span>
                    <div id="js-selected-item-3644" data-id="3644" class="js-item-row"></div>
            </div>
        </div>
        <div class="item-drive d-flex">
            <div class="name-item-drive">
                <h3 class="d-name d-name-3273" style="font-size: 15px;border-bottom: none;margin-bottom:10px;" "="">6. Ổ Cứng HDD</h3>
                            </div>
                            <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="js-category-info-3273"><i class="fa fa-plus"></i> Chọn Ổ Cứng HDD</span>
                    <div id="js-selected-item-3273" data-id="3273" class="js-item-row"></div>
            </div>
        </div>
        <div class="item-drive d-flex">
            <div class="name-item-drive">
                <h3 class="d-name d-name-279" style="font-size: 15px;border-bottom: none;margin-bottom:10px;" "="">7. VGA - Card Màn Hình</h3><div class=" item-speciaoffer d-flex align-item-center font-weight-500 color-red gap-6"><i class="fa-solid fa-gift"></i>
            </div>
        </div>
        <div class="drive-checked flex-1" style="margin-left:0;">
            <span class="show-popup_select span-last open-selection" id="js-category-info-279"><i class="fa fa-plus"></i> Chọn VGA - Card Màn Hình</span>
            <div id="js-selected-item-279" data-id="279" class="js-item-row"></div>
        </div>
    </div>
    <div class="item-drive d-flex">
        <div class="name-item-drive">
            <h3 class="d-name d-name-282" style="font-size: 15px;border-bottom: none;margin-bottom:10px;" "="">8. PSU - Nguồn Máy Tính</h3>
                            </div>
                            <div class=" drive-checked flex-1" style="margin-left:0;">
                <span class="show-popup_select span-last open-selection" id="js-category-info-282"><i class="fa fa-plus"></i> Chọn PSU - Nguồn Máy Tính</span>
                <div id="js-selected-item-282" data-id="282" class="js-item-row"></div>
        </div>
    </div>
    <div class="item-drive d-flex">
        <div class="name-item-drive">
            <h3 class="d-name d-name-280" style="font-size: 15px;border-bottom: none;margin-bottom:10px;" "="">9. Case - Vỏ Máy Tính</h3>
                            </div>
                            <div class=" drive-checked flex-1" style="margin-left:0;">
                <span class="show-popup_select span-last open-selection" id="js-category-info-280"><i class="fa fa-plus"></i> Chọn Case - Vỏ Máy Tính</span>
                <div id="js-selected-item-280" data-id="280" class="js-item-row"></div>
        </div>
    </div>
    <div class="item-drive d-flex">
        <div class="name-item-drive">
            <h3 class="d-name d-name-3270" style="font-size: 15px;border-bottom: none;margin-bottom:10px;" "="">10. Tản Nhiệt Khí</h3>
                            </div>
                            <div class=" drive-checked flex-1" style="margin-left:0;">
                <span class="show-popup_select span-last open-selection" id="js-category-info-3270"><i class="fa fa-plus"></i> Chọn Tản Nhiệt Khí</span>
                <div id="js-selected-item-3270" data-id="3270" class="js-item-row"></div>
        </div>
    </div>
    <div class="item-drive d-flex">
        <div class="name-item-drive">
            <h3 class="d-name d-name-3269" style="font-size: 15px;border-bottom: none;margin-bottom:10px;" "="">11. Tản Nhiệt Nước AIO</h3>
                            </div>
                            <div class=" drive-checked flex-1" style="margin-left:0;">
                <span class="show-popup_select span-last open-selection" id="js-category-info-3269"><i class="fa fa-plus"></i> Chọn Tản Nhiệt Nước AIO</span>
                <div id="js-selected-item-3269" data-id="3269" class="js-item-row"></div>
        </div>
    </div>
    <div class="item-drive d-flex">
        <div class="name-item-drive">
            <h3 class="d-name d-name-3630" style="font-size: 15px;border-bottom: none;margin-bottom:10px;" "="">12. Tản Nhiệt Nước Custom</h3>
        </div>
        <div class=" drive-checked flex-1" style="margin-left:0;">
                <span class="show-popup_select span-last open-selection" id="js-category-info-3630"><i class="fa fa-plus"></i> Chọn Tản Nhiệt Nước Custom</span>
                <div id="js-selected-item-3630" data-id="3630" class="js-item-row"></div>
        </div>
    </div>
    <div class="item-drive d-flex">
        <div class="name-item-drive">
            <h3 class="d-name d-name-3271" style="font-size: 15px;border-bottom: none;margin-bottom:10px;" "="">13. Fan Tản Nhiệt</h3>
                            </div>
                            <div class=" drive-checked flex-1" style="margin-left:0;">
                <span class="show-popup_select span-last open-selection" id="js-category-info-3271"><i class="fa fa-plus"></i> Chọn Fan Tản Nhiệt</span>
                <div id="js-selected-item-3271" data-id="3271" class="js-item-row"></div>
        </div>
    </div>
    <div class="item-drive d-flex">
        <div class="name-item-drive">
            <h3 class="d-name d-name-281" style="font-size: 15px;border-bottom: none;margin-bottom:10px;" "="">14. Monitor - Màn Hình</h3>
                            </div>
                            <div class=" drive-checked flex-1" style="margin-left:0;">
                <span class="show-popup_select span-last open-selection" id="js-category-info-281"><i class="fa fa-plus"></i> Chọn Monitor - Màn Hình</span>
                <div id="js-selected-item-281" data-id="281" class="js-item-row"></div>
        </div>
    </div>
    <div class="item-drive d-flex">
        <div class="name-item-drive">
            <h3 class="d-name d-name-1235" style="font-size: 15px;border-bottom: none;margin-bottom:10px;" "="">15. Bàn Phím</h3>
                            </div>
                            <div class=" drive-checked flex-1" style="margin-left:0;">
                <span class="show-popup_select span-last open-selection" id="js-category-info-1235"><i class="fa fa-plus"></i> Chọn Bàn Phím</span>
                <div id="js-selected-item-1235" data-id="1235" class="js-item-row"></div>
        </div>
    </div>
    <div class="item-drive d-flex">
        <div class="name-item-drive">
            <h3 class="d-name d-name-1147" style="font-size: 15px;border-bottom: none;margin-bottom:10px;" "="">16. Mouse - Chuột</h3>
                            </div>
                            <div class=" drive-checked flex-1" style="margin-left:0;">
                <span class="show-popup_select span-last open-selection" id="js-category-info-1147"><i class="fa fa-plus"></i> Chọn Mouse - Chuột</span>
                <div id="js-selected-item-1147" data-id="1147" class="js-item-row"></div>
        </div>
    </div>
    <div class="item-drive d-flex">
        <div class="name-item-drive">
            <h3 class="d-name d-name-1118" style="font-size: 15px;border-bottom: none;margin-bottom:10px;" "="">17. Pad - Bàn Di Chuột</h3>
                            </div>
                            <div class=" drive-checked flex-1" style="margin-left:0;">
                <span class="show-popup_select span-last open-selection" id="js-category-info-1118"><i class="fa fa-plus"></i> Chọn Pad - Bàn Di Chuột</span>
                <div id="js-selected-item-1118" data-id="1118" class="js-item-row"></div>
        </div>
    </div>
    <div class="item-drive d-flex">
        <div class="name-item-drive">
            <h3 class="d-name d-name-3309" style="font-size: 15px;border-bottom: none;margin-bottom:10px;" "="">18. Tai Nghe</h3>
                            </div>
                            <div class=" drive-checked flex-1" style="margin-left:0;">
                <span class="show-popup_select span-last open-selection" id="js-category-info-3309"><i class="fa fa-plus"></i> Chọn Tai Nghe</span>
                <div id="js-selected-item-3309" data-id="3309" class="js-item-row"></div>
        </div>
    </div>
    <div class="item-drive d-flex">
        <div class="name-item-drive">
            <h3 class="d-name d-name-3308" style="font-size: 15px;border-bottom: none;margin-bottom:10px;" "="">19. Loa</h3>
                            </div>
                            <div class=" drive-checked flex-1" style="margin-left:0;">
                <span class="show-popup_select span-last open-selection" id="js-category-info-3308"><i class="fa fa-plus"></i> Chọn Loa</span>
                <div id="js-selected-item-3308" data-id="3308" class="js-item-row"></div>
        </div>
    </div>
    <div class="item-drive d-flex">
        <div class="name-item-drive">
            <h3 class="d-name d-name-3307" style="font-size: 15px;border-bottom: none;margin-bottom:10px;" "="">20. Ghế Gaming</h3>
                            </div>
                            <div class=" drive-checked flex-1" style="margin-left:0;">
                <span class="show-popup_select span-last open-selection" id="js-category-info-3307"><i class="fa fa-plus"></i> Chọn Ghế Gaming</span>
                <div id="js-selected-item-3307" data-id="3307" class="js-item-row"></div>
        </div>
    </div>
    <div class="item-drive d-flex">
        <div class="name-item-drive">
            <h3 class="d-name d-name-3411" style="font-size: 15px;border-bottom: none;margin-bottom:10px;" "="">21. Bàn Gaming</h3>
                            </div>
                            <div class=" drive-checked flex-1" style="margin-left:0;">
                <span class="show-popup_select span-last open-selection" id="js-category-info-3411"><i class="fa fa-plus"></i> Chọn Bàn Gaming</span>
                <div id="js-selected-item-3411" data-id="3411" class="js-item-row"></div>
        </div>
    </div>
    <div class="item-drive d-flex">
        <div class="name-item-drive">
            <h3 class="d-name d-name-3287" style="font-size: 15px;border-bottom: none;margin-bottom:10px;" "="">22. Webcam</h3>
                            </div>
                            <div class=" drive-checked flex-1" style="margin-left:0;">
                <span class="show-popup_select span-last open-selection" id="js-category-info-3287"><i class="fa fa-plus"></i> Chọn Webcam</span>
                <div id="js-selected-item-3287" data-id="3287" class="js-item-row"></div>
        </div>
    </div>
    <div class="item-drive d-flex">
        <div class="name-item-drive">
            <h3 class="d-name d-name-3341" style="font-size: 15px;border-bottom: none;margin-bottom:10px;" "="">23. Microphones</h3>
                            </div>
                            <div class=" drive-checked flex-1" style="margin-left:0;">
                <span class="show-popup_select span-last open-selection" id="js-category-info-3341"><i class="fa fa-plus"></i> Chọn Microphones</span>
                <div id="js-selected-item-3341" data-id="3341" class="js-item-row"></div>
        </div>
    </div>
    <div class="item-drive d-flex">
        <div class="name-item-drive">
            <h3 class="d-name d-name-3413" style="font-size: 15px;border-bottom: none;margin-bottom:10px;" "="">24. Thiết Bị Studio, Stream</h3>
                            </div>
                            <div class=" drive-checked flex-1" style="margin-left:0;">
                <span class="show-popup_select span-last open-selection" id="js-category-info-3413"><i class="fa fa-plus"></i> Chọn Thiết Bị Studio, Stream</span>
                <div id="js-selected-item-3413" data-id="3413" class="js-item-row"></div>
        </div>
    </div>
    <div class="item-drive d-flex">
        <div class="name-item-drive">
            <h3 class="d-name d-name-1751" style="font-size: 15px;border-bottom: none;margin-bottom:10px;" "="">25. Thiết Bị Mạng</h3>
                            </div>
                            <div class=" drive-checked flex-1" style="margin-left:0;">
                <span class="show-popup_select span-last open-selection" id="js-category-info-1751"><i class="fa fa-plus"></i> Chọn Thiết Bị Mạng</span>
                <div id="js-selected-item-1751" data-id="1751" class="js-item-row"></div>
        </div>
    </div>
    <div class="item-drive d-flex">
        <div class="name-item-drive">
            <h3 class="d-name d-name-3598" style="font-size: 15px;border-bottom: none;margin-bottom:10px;" "="">26. Giá treo màn hình</h3>
                            </div>
                            <div class=" drive-checked flex-1" style="margin-left:0;">
                <span class="show-popup_select span-last open-selection" id="js-category-info-3598"><i class="fa fa-plus"></i> Chọn Giá treo màn hình</span>
                <div id="js-selected-item-3598" data-id="3598" class="js-item-row"></div>
        </div>
    </div>
</div>

<p style="float:right; font-size:18px; color:#d00; margin-top:10px;">Chi phí dự tính: <span class="js-config-summary"><span class="total-price-config"></span></span></p>

<ul class="list-btn-action" id="js-buildpc-action">
    <li><span data-action="create-image">tải ảnh cấu hình <i class="fa fa-image"></i></span></li>

    <li><span data-action="download-excel">tải file excel cấu hình <i class="fa fa-file-excel"></i></span></li>
    <li><span data-action="view">Xem &amp; In <i class="fa fa-print"></i></span></li>
    <li><span data-action="add-cart">Thêm vào giỏ hàng <i class="fa fa-shopping-cart"></i></span></li>
</ul>
</div>

@include('includes.modal-build-pc')
@endsection
