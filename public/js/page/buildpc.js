var currentArea = 1;
var currentPrice1 = 0;
var currentPrice2 = 0;
var currentParam = {
    'choice': '',
    'brand': '',
    'price': '',
    'sort': ''
};
var urlCurrent = location.href;
var currentArrayProduct = {
    'listArea1': [],
    'listArea2': []
};

$(document).ready(function () {
    $(".open-selection").click(function () {
        var userChose = $(this).attr("id");
        changeProductHandle(userChose);
    });

    $('.close-popup').click(function () {
        $('#js-modal-popup').hide();
    });

    $('#js-brand-filter').on('click', 'li input', function () {
        if ($(this).is(":checked")) {
            var brandName = $(this).attr("data-id");
        } else {
            brandName = '';
        }

        handleSortBrand(brandName);
    });

    let search = document.getElementById('search-in-modal');
    let lis = document.getElementsByClassName('p-item');
    search.onkeyup = function () {
        var filter = search.value.toUpperCase();
        for (var i = 0; i < lis.length; i++) {
            var text = lis[i].getElementsByClassName('p-name')[0].innerHTML;
            if (text.toUpperCase().indexOf(filter) == 0) {
                lis[i].style.display = 'block';
            } else {
                lis[i].style.display = 'none';
            }
        }
    };

    $('#js-holder-p_item').on('mouseover', '.p-item .p-img img', function () {
        let title = $(this).attr('data-title');
        let price = $(this).attr('data-price');
        let new_price = $(this).attr('data-new-price');
        let sale_detail = $(this).attr('data-sale-detail');
        let status_guarantee = $(this).attr('data-status-guarantee');
        let status = $(this).attr('data-status');

        if (new_price == '' || new_price == null) {
            $('#title-new-price-buildpc').hide();
            $('#tooltips-new-price-buildpc').hide();
            $('#tooltips-sale-price-buildpc').hide();
            $('#tooltips-price-buildpc').removeClass('price-with-new-price');
        } else {
            $('#title-new-price-buildpc').show();
            $('#tooltips-new-price-buildpc').show();
            $('#tooltips-sale-price-buildpc').show();
            let priceCur = parseInt(price.replaceAll('.', ''));
            let newPriceCur = parseInt(new_price.replaceAll('.', ''));
            let calPriceCur = Math.floor(100 - ((newPriceCur / priceCur) * 100));
            $('#tooltips-price-buildpc').addClass('price-with-new-price');
            $('#tooltips-sale-price-buildpc').html('-' + calPriceCur + '%');
        }

        if (sale_detail == '' || sale_detail == null) {
            $('.tooltip-list-gift-buildpc').hide();
        } else {
            $('.tooltip-list-gift-buildpc').show();
        }

        $('.tooltip-name-buildpc').html(title);
        $('#tooltips-price-buildpc').html(price);
        $('#tooltips-new-price-buildpc').html(new_price);
        $('#tooltips-status-guarantee-buildpc').html(status_guarantee);
        $('#tooltips-status-storage-buildpc').html(status);
        $('.tooltip-list-gift-buildpc').html(sale_detail);

        $('#tooltip-buildpc').show();
        $('#tooltip-buildpc').css('left', $(this).offset().left + 225);
        $('#tooltip-buildpc').css('top', $(this).offset().top - 10);
    });

    $('#js-holder-p_item').on('mouseout', '.p-item .p-img img', function () {
        $('#tooltip-buildpc').hide();
    });
});

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

    let stringAppend = `<div class="contain-item-drive" id="product-item-in-list-` + currentArea + `-` + product.id + `">
                            <a target="_blank" href="/product/` + product.slug + `" class="d-img"><img src="` + image[0] + `"></a>
                            <span class="d-name">
                                <a target="_blank" href="/product/` + product.slug + `"> ` + product.name + `  </a> <br>
                                Bảo hành: ` + product.status_guarantee + ` <br>
                                Kho hàng: <span style="color: red">` + textStatus + `</span> | Mã SP: <span style="color: red">` + product.code + `</span>
                            </span>
                            <span class="d-price">` + product.price + `</span>
                            <i>x</i> <input class="count-p" type="number" value="1" min="1" max="50" disabled><i>=</i>
                            <span class="sum_price">` + product.price + `</span>
                            <span class="btn-action_seclect show-popup_select" onclick="changeProductHandle('` + idMenu + `')"><i class="fa fa-edit edit-item"></i></span>
                            <span class="btn-action_seclect delete_select" data-id="` + product.id + `" data-price="` + product.price + `" onclick="deleteProductHandle(this)"><i class="fa fa-trash remove-item"></i></span>
                            </div>`;
    $('#' + idMenu).hide();
    if ($(idSelected + ' .sum_price') != undefined) {
        if (currentArea == 1) {
            if (currentPrice1 != 0) {
                currentPrice1 -= parseInt($(idSelected + ' .sum_price').html().replaceAll('.', ''));
            }

            $('.total-price-in-hud-1').html(priceWithCommas(currentPrice1));

            currentArrayProduct.listArea1.push(product.id);
        } else {
            if (currentPrice2 != 0) {
                currentPrice2 -= parseInt($(idSelected + ' .sum_price').html().replaceAll('.', ''));
            }

            $('.total-price-in-hud-2').html(priceWithCommas(currentPrice2));

            currentArrayProduct.listArea2.push(product.id);
        }
    }

    $(idSelected).empty();
    $(idSelected).append(stringAppend);
    $('#js-modal-popup').hide();
    countTotalPrice(product.price);
}

function changeBuild(tabSelect) {
    if (tabSelect == 1) {
        $('#build-pc-content-area-1').removeClass('d-none');
        $('#build-pc-content-area-2').addClass('d-none');
        $('#build-pc-set-item-1').addClass('active');
        $('#build-pc-set-item-2').removeClass('active');
        currentArea = 1;
        currentArrayProduct.listArea1 = [];
    } else {
        $('#build-pc-content-area-2').removeClass('d-none');
        $('#build-pc-content-area-1').addClass('d-none');
        $('#build-pc-set-item-1').removeClass('active');
        $('#build-pc-set-item-2').addClass('active');
        currentArea = 2;
        currentArrayProduct.listArea2 = [];
    }
}

function resetBuildPC() {
    let urlGetMenu = '/get-list-menu';
    $.ajax({
        type: "get",
        url: urlGetMenu,
        success: function (result) {
            if (currentArea == 1) {
                currentPrice1 = 0;
                $('.total-price-in-hud-1').html(0);
            } else {
                currentPrice2 = 0;
                $('.total-price-in-hud-2').html(0);
            }

            $('#build-pc-content-list-' + currentArea + ' .category-selected-row').empty();

            for (let k = 0; k < result.length; k++) {
                let idBtnAdd = '#category-js-' + result[k].id + '-' + currentArea;
                $(idBtnAdd).show();
            }
        }
    });
}

function countTotalPrice(priceUpdate) {
    if (currentArea == 1) {
        currentPrice1 += parseInt(priceUpdate.replaceAll('.', ''));
        $('.total-price-in-hud-1').html(priceWithCommas(currentPrice1));
    } else {
        currentPrice2 += parseInt(priceUpdate.replaceAll('.', ''));
        $('.total-price-in-hud-2').html(priceWithCommas(currentPrice2));
    }
}

function priceWithCommas(price) {
    return price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

function deleteProductHandle(button) {
    let id = button.getAttribute('data-id');
    let idArea = '#product-item-in-list-' + currentArea + '-' + id;
    let price = button.getAttribute('data-price');
    if (currentArea == 1) {
        currentPrice1 -= parseInt(price.replaceAll('.', ''));
        $('.total-price-in-hud-1').html(priceWithCommas(currentPrice1));
        var index = currentArrayProduct.listArea1.indexOf(id);
        if (index !== -1) {
            currentArrayProduct.listArea1.splice(index, 1);
        }
    } else {
        currentPrice2 -= parseInt(price.replaceAll('.', ''));
        $('.total-price-in-hud-2').html(priceWithCommas(currentPrice2));
        var index = currentArrayProduct.listArea2.indexOf(id);
        if (index !== -1) {
            currentArrayProduct.listArea2.splice(index, 1);
        }
    }
    $(idArea).remove();
    let idBtnAdd = '#category-js-' + id + '-' + currentArea;
    $(idBtnAdd).show();
}

function changeProductHandle(userChose) {
    var url = "get-product?key=" + userChose;
    currentParam.choice = userChose;
    $(".list-product-select").empty();
    $.ajax({
        type: 'get',
        url: url,
        success: function (data) {
            renderProductToModal(data);
            $('#js-brand-filter').empty();
            renderBrandToModal(data);
            renderCountWithPrice(data);
        }
    });

    $('#js-modal-popup').show();
}

function addToCart() {
    let url = '/build-pc-checkout';
    let data = '';
    if (currentArea == 1) {
        data = currentArrayProduct.listArea1;
    } else {
        data = currentArrayProduct.listArea2;
    }

    $.ajax({
        type: "get",
        data: {
            data: data
        },
        url: url,
        success: function (result) {
            if (result == 'success') {
                window.location.href = '/show-cart';
            }
        }
    });
}

function renderProductToModal(data) {
    $.each(data.products, function (key, val) {
        let dataSendToAdd = JSON.stringify(val);
        let name = val.name;
        let code = val.code;
        let title = val.title;
        let new_price = val.new_price;
        let price = val.price;
        let sale_detail = val.sale_detail;
        let slug = val.slug;
        let image = JSON.parse(val.image);
        let urlProduct = '/product/' + slug;
        let status_guarantee = val.status_guarantee;
        let status = val.status;
        if (status == 'available') {
            textStatus = 'Còn hàng';
        } else if (status == 'out of stock') {
            textStatus = 'Hết hàng';
        } else {
            textStatus = 'Đang về hàng';
        }

        let stringAppend = `<div class="p-item"><div class="row">
                        <div class="col-lg-3">
                            <a href="` + urlProduct + `" class="p-img">
                                <img src="` + image[0] + `"
                                data-title="` + title + `"
                                data-price="` + price + `"
                                data-new-price="` + new_price + `"
                                data-sale-detail="` + sale_detail + `"
                                data-status-guarantee="` + status_guarantee + `"
                                data-status="` + status + `">
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
                     <hr></div>`;

        $(".list-product-select").append(stringAppend);
    })
}

function renderBrandToModal(data) {
    var listBrand = {};
    $.each(data.products, function (key, val) {
        if (!(val.brands.name in listBrand)) {
            listBrand[val.brands.name] = 1;
        } else {
            listBrand[val.brands.name] += 1;
        }
    });

    if (currentParam.brand != '') {
        $.each(listBrand, function (key, val) {
            let strAppend = `<li id="brand-js-` + key.toLowerCase().replaceAll(' ', '-') + `">
                                <label>
                                    <input type="checkbox" data-id="` + key + `" checked>
                                    <span class="value-filter">` + key + ` ( ` + val + ` )</span>
                                </label>
                            </li>
                            `;

            $('#js-brand-filter').append(strAppend);
        });
    } else {
        $.each(listBrand, function (key, val) {
            let strAppend = `<li id="brand-js-` + key.toLowerCase().replaceAll(' ', '-') + `">
                                <label>
                                    <input type="checkbox" data-id="` + key + `">
                                    <span class="value-filter">` + key + ` ( ` + val + ` )</span>
                                </label>
                            </li>
                            `;

            $('#js-brand-filter').append(strAppend);
        });
    }
}

function renderCountWithPrice(data) {
    let under1m = 0;
    let to10m = 0;
    let to15m = 0;
    let to20m = 0;
    let to30m = 0;
    let to50m = 0;
    let to100m = 0;
    let over100m = 0;

    $.each(data.products, function (key, val) {
        let price = 0;
        if (val.new_price != null) {
            price = val.new_price.replaceAll('.', '');
        } else {
            price = val.price.replaceAll('.', '');
        }

        if (price < 1000000) {
            under1m += 1;
        }

        if (price > 1000000 && price < 10000000) {
            to10m += 1;
        }

        if (price > 10000000 && price < 15000000) {
            to15m += 1;
        }

        if (price > 15000000 && price < 20000000) {
            to20m += 1;
        }

        if (price > 20000000 && price < 30000000) {
            to30m += 1;
        }

        if (price > 30000000 && price < 50000000) {
            to50m += 1;
        }

        if (price > 50000000 && price < 100000000) {
            to100m += 1;
        }

        if (price > 100000000) {
            over100m += 1;
        }
    });


    $('#price-under-1m').html(under1m);
    $('#price-1m-to-10m').html(to10m);
    $('#price-10m-to-15m').html(to15m);
    $('#price-15m-to-20m').html(to20m);
    $('#price-20m-to-30m').html(to30m);
    $('#price-30m-to-50m').html(to50m);
    $('#price-50m-to-100m').html(to100m);
    $('#price-over-100m').html(over100m);
}

function renderPriceToModal() {
    let choicePrice = currentParam.price;
    let listLiPrice = $('#js-price-filter li');
    if (choicePrice == '') {
        for (let i = 0; i < listLiPrice.length; i++) {
            listLiPrice[i].style.display = 'block';
        }
    } else {
        let idChoicePrice = 'choice-' + choicePrice;

        for (let i = 0; i < listLiPrice.length; i++) {
            if (listLiPrice[i].getAttribute('id') == idChoicePrice) {
                listLiPrice[i].style.display = 'block';
            } else {
                listLiPrice[i].style.display = 'none';
            }
        }
    }

}

function handelSortProduct(sort) {
    currentParam.sort = sort;
    var url = "get-product?key=" + currentParam.choice + "&sort=" + sort;

    if (currentParam.brand != '') {
        url = url + '&brand=' + currentParam.brand
    }

    if (currentParam.price != '') {
        url = url + '&price=' + currentParam.price
    }

    $.ajax({
        type: 'get',
        url: url,
        success: function (data) {
            $(".list-product-select").empty();
            renderProductToModal(data);
            $('#js-brand-filter').empty();
            renderBrandToModal(data);
            renderPriceToModal();
        }
    });
}

function handleSortBrand(brandName) {
    currentParam.brand = brandName;

    if (brandName == '') {
        var url = "get-product?key=" + currentParam.choice;
    } else {
        var url = "get-product?key=" + currentParam.choice + "&brand=" + brandName;
    }

    if (currentParam.sort != '') {
        url = url + '&sort=' + currentParam.sort
    }

    if (currentParam.price != '') {
        url = url + '&price=' + currentParam.price
    }

    $.ajax({
        type: 'get',
        url: url,
        success: function (data) {
            $(".list-product-select").empty();
            renderProductToModal(data);
            $('#js-brand-filter').empty();
            renderBrandToModal(data);
            renderPriceToModal();
        }
    });
}

function handleSortPrice(price) {
    var idInput = '#input-' + price;
    if ($(idInput).is(":checked")) {
        currentParam.price = price;
        var url = "get-product?key=" + currentParam.choice + "&price=" + price;
    } else {
        currentParam.price = '';
        var url = "get-product?key=" + currentParam.choice;
    }

    if (currentParam.sort != '') {
        url = url + '&sort=' + currentParam.sort
    }

    if (currentParam.brand != '') {
        url = url + '&brand=' + currentParam.brand
    }

    $.ajax({
        type: 'get',
        url: url,
        success: function (data) {
            $(".list-product-select").empty();
            renderProductToModal(data);
            $('#js-brand-filter').empty();
            renderBrandToModal(data);
            renderPriceToModal();
        }
    });
}

function printPage() {
    var w = window.open();

    var headers = $("#headers").html();
    var field = $("#field1").html();
    var field2 = $("#field2").html();

    var html = "<!DOCTYPE HTML>";
    html += '<html lang="en-us">';
    html += '<head><style></style></head>';
    html += "<body>";

    html += "</body>";
    w.document.write(html);
    w.window.print();
    w.document.close();
};

function exportExcel() {

}