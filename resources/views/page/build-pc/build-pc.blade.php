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
            <li id="build-pc-set-item-1" class="active"><span onclick="changeBuild(1);" style="padding:0 20px;">Cấu hình 1</span></li>
            <li id="build-pc-set-item-2"><span onclick="changeBuild(2);" style="padding:0 20px;">Cấu hình 2</span></li>
        </ul>

        <ul class="list-btn-action">
            <li style="width:auto;"><span onclick="resetBuildPC()" style="padding:0 20px;">Làm mới cấu hình hiện tại <i class="fa fa-undo"></i></span></li>
        </ul>

        <div id="build-pc-content-area-1">
            <div id="build-pc-content-price-1">
                <p class="total-price">Chi phí dự tính:
                    <span class="total-price-config-1"></span>
                </p>
                <div class="js-buildpc-promotion-content" style="margin-bottom: 0px;"></div>
            </div>
            <div class="list-drive" id="build-pc-content-list-1" style="border: solid 1px #e1e1e1;">
                @foreach($menu as $key => $value)
                <div class="item-drive d-flex">
                    <div class="name-item-drive">
                        <h3 class="d-name d-name-277" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">{{ $key + 1 }}. {{ $value->name }}</h3>
                        @if(isset($value->offers))
                        <h5 style="color: red; font-style: italic; font-weight: bold">{{ $value->offers }}</h5>
                        @endif
                    </div>
                    <div class="drive-checked" style="margin-left:0;">
                        <span class="show-popup_select span-last open-selection" id="category-js-{{ $key + 1 }}-1"><i class="fa fa-plus"></i> Chọn {{ $value->name }}</span>
                        <div id="category-js-selected-{{ $key + 1 }}-1" class="js-item-row category-selected-row"></div>
                    </div>
                </div>
                @endforeach
            </div>
            <p class="total-price">{{ __('Chi phí dự tính:') }} <span class="total-price-config-1"></span></p>
        </div>

        <div id="build-pc-content-area-2" class="d-none">
            <div id="build-pc-content-price-2">
                <p class="total-price">Chi phí dự tính:
                    <span class="total-price-config-2"></span>
                </p>
            </div>
            <div class="list-drive" id="build-pc-content-list-1" style="border: solid 1px #e1e1e1;">
                @foreach($menu as $key => $value)
                <div class="item-drive d-flex">
                    <div class="name-item-drive">
                        <h3 class="d-name d-name-277" style="font-size: 15px;border-bottom: none;margin-bottom:10px;">{{ $key + 1 }}. {{ $value->name }}</h3>
                        @if(isset($value->offers))
                        <h5 style="color: red; font-style: italic; font-weight: bold">{{ $value->offers }}</h5>
                        @endif
                    </div>
                    <div class="drive-checked" style="margin-left:0;">
                        <span class="show-popup_select span-last open-selection" id="category-js-{{ $key + 1 }}-2"><i class="fa fa-plus"></i> Chọn {{ $value->name }}</span>
                        <div id="category-js-selected-{{ $key + 1 }}-2" class="js-item-row category-selected-row"></div>
                    </div>
                </div>
                @endforeach
            </div>
            <p class="total-price">{{ __('Chi phí dự tính:') }} <span class="total-price-config-1"></span></p>
        </div>

        <ul class="list-btn-action" id="js-buildpc-action">
            <li><span data-action="add-cart">{{ __('Thêm vào giỏ hàng') }}<i class="fa fa-shopping-cart"></i></span></li>
        </ul>
    </div>
</div>

@include('includes.modal-build-pc')
@endsection
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script>
    var currentArea = 1;

    $(document).ready(function() {
        $(".open-selection").click(function() {
            var userChose = $(this).attr("id");
            var url = "get-product?key=" + userChose;
            $(".list-product-select").empty();
            $.ajax({
                type: 'get',
                url: url,
                success: function(data) {
                    $.each(data.products, function(key, val) {
                        let dataSendToAdd = JSON.stringify(val);
                        let name = val.name;
                        let code = val.code;
                        let new_price = val.new_price;
                        let price = val.price;
                        let slug = val.slug;
                        let image = JSON.parse(val.image);
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
                                <img src="` + image[0] + `">
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
                        <span id="buy-product" style="display: flex" class="btn-buy js-select-product" data-id="` + data.menu + `" data-product='` + dataSendToAdd + `' onclick="addToMenu(this)">Thêm vào cấu hình <i class="fa fa-angle-right"></i></span>
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

    function addToMenu(choose) {
        let idMenu = choose.getAttribute('data-id');
        let product = JSON.parse(choose.getAttribute('data-product'));
        let status = product.status;
        let image = JSON.parse(product.image);
        let split = idMenu.split('-');
        let idSelected = '#category-js-selected-' + split[2] + '-' + currentArea;
        if (status == 'available') {
            textStatus = 'Còn hàng';
        } else if (status == 'out of stock') {
            textStatus = 'Hết hàng';
        } else {
            textStatus = 'Đang về hàng';
        }
        let stringAppend = `<div class="contain-item-drive">
                            <a target="_blank" href="/product/` + product.slug + `" class="d-img"><img src="` + image[0] + `"></a>
                            <span class="d-name">
                                <a target="_blank" href="/product/` + product.slug + `"> ` + product.name + `  </a> <br>
                                Bảo hành: ` + product.status_guarantee + ` <br>
                                Kho hàng: <span style="color: red">` + textStatus + `</span> | Mã SP: <span style="color: red">` + product.code + `</span>
                            </span>
                            <span class="d-price">` + product.price + `</span>
                            <i>x</i> <input class="count-p" type="number" value="1" min="1" max="50"><i>=</i>
                            <span class="sum_price">` + product.price + `</span>
                            <span class="btn-action_seclect show-popup_select"><i class="fa fa-edit edit-item"></i></span>
                            <span class="btn-action_seclect delete_select"><i class="fa fa-trash remove-item"></i></span>
                            </div>`;
        $('#' + idMenu).hide();
        $(idSelected).append(stringAppend);
        $('#js-modal-popup').hide();
        countTotalPrice();
    }

    function changeBuild(tabSelect) {
        if (tabSelect == 1) {
            $('#build-pc-content-area-1').removeClass('d-none');
            $('#build-pc-content-area-2').addClass('d-none');
            $('#build-pc-set-item-1').addClass('active');
            $('#build-pc-set-item-2').removeClass('active');
            currentArea = 1;
        } else {
            $('#build-pc-content-area-2').removeClass('d-none');
            $('#build-pc-content-area-1').addClass('d-none');
            $('#build-pc-set-item-1').removeClass('active');
            $('#build-pc-set-item-2').addClass('active');
            currentArea = 2;
        }
    }

    function resetBuildPC() {
        $('#build-pc-content-list-' + currentArea + ' category-selected-row').empty();
    }

    function countTotalPrice() {

    }
</script>
