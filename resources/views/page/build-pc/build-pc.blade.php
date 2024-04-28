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
            @foreach($menu as $key => $value)
            <div class="item-drive d-flex">
                <div class="name-item-drive">
                    <h3 class="d-name d-name-277" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">{{ $key + 1 }}. {{ $value->name }}</h3>
                </div>
                <div class="drive-checked" style="margin-left:0;">
                    <span class="show-popup_select span-last open-selection" id="category-js-{{ $key + 1 }}"><i class="fa fa-plus"></i> Chọn {{ $value->name }}</span>
                    <div id="js-selected-item-278" data-id="278" class="js-item-row"></div>
                </div>
            </div>
            @endforeach
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
                    $.each(data['product'], function(key, val) {
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
                                 <span id="buy-product" class="btn-buy js-select-product" data-id="` + data['menu'] + `" onclick="addToMenu(this, ` + data['product'] + `)">Thêm vào cấu hình <i class="fa fa-angle-right"></i></span>
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

    function addToMenu(idMenu, product) {
        let stringAppend = `<div class="drive-checked flex-1" style="margin-left:0;">
                                <span class="show-popup_select span-last open-selection" id="js-category-info-277" data-info="{&quot;id&quot;:277,&quot;name&quot;:&quot;CPU - Bộ Vi Xử Lý&quot;}"><i class="fa fa-plus"></i> Chọn CPU - Bộ Vi Xử Lý</span>
                                <div id="js-selected-item-277" data-id="277" class="js-item-row"><div class="contain-item-drive" data-category_id="277" data-product_id="26474" data-current_price="{{price_default}}" data-current_stock="20">
                            <a target="_blank" href="/cpu-intel-core-i7-14700f-tray-lga1700-20-core28-thread-base-21ghz-turbo-54ghz-cache-33mb" class="d-img"><img src="/media/product/75-26474-cpuit14700__4_bf2f88a4-5cec-447d.png"></a>
                            <span class="d-name">
                                <a target="_blank" href="/cpu-intel-core-i7-14700f-tray-lga1700-20-core28-thread-base-21ghz-turbo-54ghz-cache-33mb"> CPU Intel Core i7 14700F Tray New (LGA1700, 20 Core/28 Thread, Base 2.1Ghz/ Turbo 5.4Ghz, Cache 33MB)  </a> <br>
                                Bảo hành: 36 Tháng <br>
                                Kho hàng: <span style="color: red">Còn hàng </span> | Mã SP: <span style="color: red">CPU000045T</span>
                            </span>
                            <span class="d-price">6.990.000</span>
                            <i>x</i> <input class="count-p" type="number" value="1" min="1" max="50"><i>=</i>
                            <span class="sum_price">6.990.000</span>
                            <span class="btn-action_seclect show-popup_select"><i class="fa fa-edit edit-item"></i></span>
                            <span class="btn-action_seclect delete_select"><i class="fa fa-trash remove-item"></i></span>
                            /div></div>
                            </div>`;
    }

    function productWithFilter() {

    }
</script>
