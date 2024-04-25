@extends('layouts.page')

@section('title')
<title>{{ __('Xây dựng cấu hình') }} | Kattech PC</title>
@endsection

@section('css')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                <span class="js-config-summary"><span class="total-price-config"></span>
                </span>
            </p>
            <div class="js-buildpc-promotion-content" style="margin-bottom: 0px;"></div>
        </div>

        <div class="list-drive" id="js-buildpc-layout" style="border: solid 1px #e1e1e1;">
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-277" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">1. CPU - Bộ Vi Xử Lý</h3>
                    <div class=" item-speciaoffer d-flex align-item-center font-weight-500 color-red gap-6">
                    </div>
                </div>
                <div class="drive-checked" style="margin-left:0;">
                    @if ($totalBuild == 0)
                    <span class="show-popup_select span-last open-selection" id="js-category-info-277"><i class="fa fa-plus"></i> Chọn CPU - Bộ Vi Xử Lý</span>
                    @else
                    @foreach($dataBuild as $productBuild)
                    <div id="js-selected-item-277" data-id="277" class="js-item-row d-flex">
                        <div class="">
                            <a target="_blank" href="/cpu-intel-core-i3-12100f" class="d-img"><img src="https://nguyencongpc.vn/media/product/75-17131-cpu-amd-ryzen-9-5900xcpu-amd-ryzen-9-5900xcpu-amd-ryzen-9-5900xcpu-amd-ryzen-9-5900x.jpg"></a>
                        </div>
                        <div class="">
                            <span class="d-name">
                                <a target="_blank" href="/cpu-intel-core-i3-12100f" class="p-name"> {{$productBuild->name}} </a> <br>

                                Bảo hành: 36 tháng <br>
                                Kho hàng: <span style="color: red">Còn hàng </span> | Mã SP: <span style="color: red">{{$productBuild->code}}</span>
                            </span>
                        </div>
                        <div class="check-build">
                            <span class="d-price">{{number_format($productBuild->price)}}</span>
                            <i>x</i> <input class="count-p" type="number" value="{{ $productBuild->quantity }}" min="1" max="50" onchange="updateOrder(this.value,'{{$productBuild->id}}')"><i>=</i>
                            <?php
                            $total = $productBuild['quantity'] * $productBuild['price'];
                            ?>
                            <span class="sum_price">{{number_format($total)}}</span>
                            <span class="btn-action_seclect show-popup_select"><i class="fa fa-edit edit-item"></i></span>
                            <span class="btn-action_seclect delete_select" onclick="deleteBuild(`{{ route('deleteBuildPC', $productBuild['id']) }}`)"><i class="fa fa-trash remove-item"></i></span>
                        </div>
                    </div>
                    @endforeach
                    @endif
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-278" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">2. Main - Bo Mạch Chủ</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="linh-kiện"><i class="fa fa-plus"></i> Chọn Main - Bo Mạch Chủ</span>
                    <div id="js-selected-item-278" data-id="278" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-283" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">3. RAM - Bộ Nhớ Trong</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="js-category-info-283"><i class="fa fa-plus"></i> Chọn RAM - Bộ Nhớ Trong</span>
                    <div id="js-selected-item-283" data-id="283" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-3274" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">4. Ổ Cứng SSD 1</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="js-category-info-3274"><i class="fa fa-plus"></i> Chọn Ổ Cứng SSD 1</span>
                    <div id="js-selected-item-3274" data-id="3274" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-3644" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">5. Ổ Cứng SSD 2</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="js-category-info-3644"><i class="fa fa-plus"></i> Chọn Ổ Cứng SSD 2</span>
                    <div id="js-selected-item-3644" data-id="3644" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-3273" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">6. Ổ Cứng HDD</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="js-category-info-3273"><i class="fa fa-plus"></i> Chọn Ổ Cứng HDD</span>
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
                    <span class="show-popup_select span-last open-selection" id="js-category-info-279"><i class="fa fa-plus"></i> Chọn VGA - Card Màn Hình</span>
                    <div id="js-selected-item-279" data-id="279" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-282" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">8. PSU - Nguồn Máy Tính</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="js-category-info-282"><i class="fa fa-plus"></i> Chọn PSU - Nguồn Máy Tính</span>
                    <div id="js-selected-item-282" data-id="282" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-280" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">9. Case - Vỏ Máy Tính</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="js-category-info-280"><i class="fa fa-plus"></i> Chọn Case - Vỏ Máy Tính</span>
                    <div id="js-selected-item-280" data-id="280" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-3270" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">10. Tản Nhiệt Khí</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="js-category-info-3270"><i class="fa fa-plus"></i> Chọn Tản Nhiệt Khí</span>
                    <div id="js-selected-item-3270" data-id="3270" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-3269" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">11. Tản Nhiệt Nước AIO</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="js-category-info-3269"><i class="fa fa-plus"></i> Chọn Tản Nhiệt Nước AIO</span>
                    <div id="js-selected-item-3269" data-id="3269" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-3630" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">12. Tản Nhiệt Nước Custom</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="js-category-info-3630"><i class="fa fa-plus"></i> Chọn Tản Nhiệt Nước Custom</span>
                    <div id="js-selected-item-3630" data-id="3630" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-3271" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">13. Fan Tản Nhiệt</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="js-category-info-3271"><i class="fa fa-plus"></i> Chọn Fan Tản Nhiệt</span>
                    <div id="js-selected-item-3271" data-id="3271" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-281" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">14. Monitor - Màn Hình</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="js-category-info-281"><i class="fa fa-plus"></i> Chọn Monitor - Màn Hình</span>
                    <div id="js-selected-item-281" data-id="281" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-1235" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">15. Bàn Phím</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="js-category-info-1235"><i class="fa fa-plus"></i> Chọn Bàn Phím</span>
                    <div id="js-selected-item-1235" data-id="1235" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-1147" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">16. Mouse - Chuột</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="js-category-info-1147"><i class="fa fa-plus"></i> Chọn Mouse - Chuột</span>
                    <div id="js-selected-item-1147" data-id="1147" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-1118" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">17. Pad - Bàn Di Chuột</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="js-category-info-1118"><i class="fa fa-plus"></i> Chọn Pad - Bàn Di Chuột</span>
                    <div id="js-selected-item-1118" data-id="1118" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-3309" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">18. Tai Nghe</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="js-category-info-3309"><i class="fa fa-plus"></i> Chọn Tai Nghe</span>
                    <div id="js-selected-item-3309" data-id="3309" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-3308" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">19. Loa</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="js-category-info-3308"><i class="fa fa-plus"></i> Chọn Loa</span>
                    <div id="js-selected-item-3308" data-id="3308" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-3307" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">20. Ghế Gaming</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="js-category-info-3307"><i class="fa fa-plus"></i> Chọn Ghế Gaming</span>
                    <div id="js-selected-item-3307" data-id="3307" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-3411" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">21. Bàn Gaming</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="js-category-info-3411"><i class="fa fa-plus"></i> Chọn Bàn Gaming</span>
                    <div id="js-selected-item-3411" data-id="3411" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-3287" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">22. Webcam</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="js-category-info-3287"><i class="fa fa-plus"></i> Chọn Webcam</span>
                    <div id="js-selected-item-3287" data-id="3287" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-3341" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">23. Microphones</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="js-category-info-3341"><i class="fa fa-plus"></i> Chọn Microphones</span>
                    <div id="js-selected-item-3341" data-id="3341" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-3413" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">24. Thiết Bị Studio, Stream</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="js-category-info-3413"><i class="fa fa-plus"></i> Chọn Thiết Bị Studio, Stream</span>
                    <div id="js-selected-item-3413" data-id="3413" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-1751" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">25. Thiết Bị Mạng</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="js-category-info-1751"><i class="fa fa-plus"></i> Chọn Thiết Bị Mạng</span>
                    <div id="js-selected-item-1751" data-id="1751" class="js-item-row"></div>
                </div>
            </div>
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-3598" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">26. {{ __('Giá treo màn hình') }}</h3>
                </div>
                <div class=" drive-checked flex-1" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="js-category-info-3598"><i class="fa fa-plus"></i> {{ __('Chọn Giá treo màn hình') }}</span>
                    <div id="js-selected-item-3598" data-id="3598" class="js-item-row"></div>
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
