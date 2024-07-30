var citis = document.getElementById("city");
var districts = document.getElementById("district");
var wards = document.getElementById("ward");
var Parameter = {
    url: "https://raw.githubusercontent.com/kenzouno1/DiaGioiHanhChinhVN/master/data.json",
    method: "GET",
    responseType: "application/json",
};
var promise = axios(Parameter);
promise.then(function (result) {
    renderCity(result.data);
});

$(document).ready(function () {
    $('.modal-coupon-area').on('click', '.modal-choose-coupon', function (e) {
        e.preventDefault();
        if ($(this).hasClass('disable')) {
            return false;
        }

        let list_button_choose = $('.item-coupon-in-list .modal-choose-coupon');

        for (let i = 0; i < list_button_choose.length; i++) {
            if (list_button_choose[i].classList.contains("checked")) {
                list_button_choose[i].classList.remove("checked")
            }
        }

        $(this).addClass('checked');
        $('.modal-button-coupon-area .after-submit').removeClass('submit-disable');
    });

    $('.before-submit').on('click', function (e) {
        e.preventDefault();

        let code = $('.input-with-validator').val();
        let _token = $('#token').val();
        $.ajax({
            url: '/cart/apply-coupon',
            type: 'POST',
            data: {
                _token: _token,
                code: code
            },
            success: function (data) {
                if ($.isEmptyObject(data.errors)) {
                    $(".error_msg").html(data.success);
                    let discount_amount = data.discount_total;
                    if (data.discount_type == 'percent') {
                        let final_discount_amount = ((total_amount * discount_amount) / 100);
                        let before_discount_amount = (total_amount - final_discount_amount);
                    } else {
                        let final_discount_amount = ((total_amount * discount_amount) / 100);
                        let before_discount_amount = (total_amount - final_discount_amount);
                    }

                    $('#total-amount').text(before_discount_amount.toString().replace(/(^\d{1,3}|\d{3})(?=(?:\d{3})+(?:,|$))/g, '$1.') + ' đ');
                    $('.accept-coupon').text('Mã đã được sử dụng');

                    let strAppend = `<div class="summary summary-area">
                        <div class="total-value final-value summary-total" style="margin: 0;">Giảm giá</div>
                        <div class="total-value final-value get-total" style="text-transform: inherit">
                            <div class="alert alert-danger">
                                `+ final_discount_amount.toString().replace(/(^\d{1,3}|\d{3})(?=(?:\d{3})+(?:,|$))/g, '$1.') + ` đ
                            </div>
                        </div>
                    </div>`;
                    $('.add-coupon-area').append(strAppend);
                    $('#modal-coupon').css('display', 'none');
                } else {
                    let resp = data.errors;
                    $(".error_msg_modal").html(resp);
                }
            },
        });
    });

    $('.after-submit').on('click', function (e) {
        e.preventDefault();

        let list_button_choose = $('.item-coupon-in-list .modal-choose-coupon');
        let code = '';

        for (let i = 0; i < list_button_choose.length; i++) {
            if (list_button_choose[i].classList.contains("checked")) {
                code = list_button_choose[i].getAttribute('data-id');
            }
        }
        let _token = $('#token').val();
        $.ajax({
            url: '/cart/apply-coupon',
            type: 'POST',
            data: {
                _token: _token,
                code: code
            },
            success: function (data) {
                if ($.isEmptyObject(data.errors)) {
                    $(".error_msg").html(data.success);
                    let discount_amount = data.discount_total;
                    let final_discount_amount = 0;
                    let before_discount_amount = 0;
                    if (data.list_product_id == null) {
                        if (data.type == 'percent') {
                            final_discount_amount = ((total_amount * discount_amount) / 100);
                            before_discount_amount = (total_amount - final_discount_amount);
                        } else {
                            final_discount_amount = discount_amount;
                            before_discount_amount = (total_amount - final_discount_amount);
                        }
                    } else {
                        let listProduct = JSON.parse(data.list_product_id);
                        for (let m in listProduct) {
                            if (data.type == 'percent') {
                                final_discount_amount = ((total_amount * discount_amount) / 100);
                                before_discount_amount = (total_amount - final_discount_amount);
                            } else {
                                final_discount_amount = discount_amount;
                                before_discount_amount = (total_amount - final_discount_amount);
                            }
                        }

                    }

                    $('#total-amount').text(before_discount_amount.toString().replace(/(^\d{1,3}|\d{3})(?=(?:\d{3})+(?:,|$))/g, '$1.') + ' đ');
                    $('.accept-coupon').text('Mã đã được sử dụng ' + data.code);

                    let strAppend = `<div class="summary summary-area">
                        <div class="total-value final-value summary-total" style="margin: 0;">Giảm giá</div>
                        <div class="total-value final-value get-total" style="text-transform: inherit">
                            <div class="alert alert-danger">
                                `+ final_discount_amount.toString().replace(/(^\d{1,3}|\d{3})(?=(?:\d{3})+(?:,|$))/g, '$1.') + ` đ
                            </div>
                        </div>
                    </div>`;
                    $('.add-coupon-area').append(strAppend);
                    $('#modal-coupon').css('display', 'none');
                } else {
                    let resp = data.errors;
                    $(".error_msg_modal").html(resp);
                }
            },
        });
    });
});

function renderCity(data) {
    for (const x of data) {
        citis.options[citis.options.length] = new Option(x.Name, x.Name);
    }
    citis.onchange = function () {
        districts.length = 1;
        wards.length = 1;
        if (this.value != "") {
            const result = data.filter(n => n.Name === this.value);

            for (const k of result[0].Districts) {
                districts.options[district.options.length] = new Option(k.Name, k.Name);
            }
        }
    };
    districts.onchange = function () {
        wards.length = 1;
        const dataCity = data.filter((n) => n.Name === citis.value);
        if (this.value != "") {
            const dataWards = dataCity[0].Districts.filter(n => n.Name === this.value)[0].Wards;

            for (const w of dataWards) {
                wards.options[wards.options.length] = new Option(w.Name, w.Name);
            }
        }
    };

    $('#modal-coupon .btn-close').on('click', function () {
        $('#modal-coupon').css('display', 'none');
    });
}

function updateCart(quantity, id) {
    let url = '/cart/update-cart';
    $.ajax({
        type: "get",
        url: url,
        data: {
            quantity: quantity,
            id: id
        },
        success: function (result) {
            let idElement = '#total_cart-' + id;
            $(idElement).text(result.price + ' đ');
            location.reload();
        }
    });
}

function deleteSales(url) {
    if (confirm('Are you sure?')) {
        $.ajax({
            type: "get",
            url: url,
            success: function () {
                location.reload()
            }
        });
    }
}

function downloadCartExcel() {
    let urlExport = '/cart/export-excel-cart';
    let fileName = 'cart-kattech.xlsx';

    $.ajax({
        type: "GET",
        url: urlExport,
        cache: false,
        xhr: function () {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function () {
                if (xhr.readyState == 2) {
                    if (xhr.status == 200) {
                        xhr.responseType = "blob";
                    } else {
                        xhr.responseType = "text";
                    }
                }
            };

            return xhr;
        },
        success: function (data) {
            var blob = new Blob([data], { type: "application/octetstream" });

            var isIE = false || !!document.documentMode;
            if (isIE) {
                window.navigator.msSaveBlob(blob, fileName);
            } else {
                var url = window.URL || window.webkitURL;
                link = url.createObjectURL(blob);
                var a = $("<a />");
                a.attr("download", fileName);
                a.attr("href", link);
                $("body").append(a);
                a[0].click();
                $("body").remove(a);
            }
        }
    });
}

function downloadCartImage() {
    let urlExportImage = '/cart/export-image-cart';

    $.ajax({
        type: "GET",
        url: urlExportImage,
        success: function (data) {
            $('#area-export-image').html(data);
            capture();
            $('#area-export-image').empty();
        }
    });
}

function capture() {
    const captureElement = document.querySelector('#capture')
    html2canvas(captureElement)
        .then(canvas => {
            canvas.style.display = 'none';
            document.body.appendChild(canvas);
            return canvas;
        })
        .then(canvas => {
            const image = canvas.toDataURL('image/png').replace('image/png', 'image/octet-stream');
            const a = document.createElement('a');
            a.setAttribute('download', 'my-image.png');
            a.setAttribute('href', image);
            a.click();
            canvas.remove();
            window.open('', '_self').close();
        })
}

function printCart() {
    let urlPrint = '/cart/print-cart';
    window.location.href = urlPrint;
}

function showModalCoupon() {
    let urlCoupon = '/cart/get-coupons';

    $.ajax({
        type: "GET",
        url: urlCoupon,
        success: function (response) {
            $('#modal-coupon-area-active').empty();
            $('#modal-coupon-area-de-active').empty();
            var data = response.data;
            var product = response.product;
            var d = new Date();
            var month = d.getMonth() + 1;
            var day = d.getDate();
            var now = d.getFullYear() + '-' +
                (month < 10 ? '0' : '') + month + '-' +
                (day < 10 ? '0' : '') + day;

            for (let i = 0; i < data.length; i++) {
                let textDiscount = '';
                let textApply = '';
                let textClass = '';
                let active = true;

                let dateDiff = datediff(parseDate(now), parseDate(data[i].time_end));
                dateDiff = parseInt(dateDiff) + 1;

                if (data[i].type == "percent") {
                    textDiscount = '%';
                } else {
                    textDiscount = 'đ';
                }

                if (data[i].list_product_id == null) {
                    textApply = 'Áp dụng cho toàn bộ sản phẩm';
                } else {
                    for (let k in product) {
                        if (Object.values(product).indexOf(data[k]) > -1) {
                            textApply = 'Sản phẩm ' + k + ' được sử dụng mã này';
                        } else {
                            textApply = 'Sản phẩm trong giỏ hàng của bạn không được hỗ trợ dùng mã này';
                            textClass = 'disable';
                            active = false;
                        }
                    }
                }

                let content = `
                <div class="item-coupon-in-list `+ textClass + `">
                    <div class="image-item-coupon-in-list">
                        <img src="/images/logo/logo.png">
                    </div>

                    <div class="information-item-coupon-in-list">
                        <span>Giảm giá đến `+ data[i].discount_amount + ' ' + textDiscount + `</span>
                        <span>Điều kiện : `+ textApply + `</span>
                        <span>Số lượng còn lại `+ data[i].total_amount + ` </span>
                        <span>Thời gian còn `+ dateDiff + ` ngày</span>
                    </div>
                    <div class="d-flex justify-content-center align-items-center click-choose-item-coupons">
                        <div data-id="`+ data[i].code + `" class="modal-choose-coupon ` + textClass + `" aria-label="" role="radio" aria-checked="false" tabindex="0"></div>
                    </div>
                </div>`;

                if (active) {
                    $('#modal-coupon-area-active').append(content);
                } else {
                    $('#modal-coupon-area-de-active').append(content);
                }
            }

            $('#modal-coupon').css('display', 'flex');
        }
    });
}

function datediff(first, second) {
    return Math.round((second - first) / (1000 * 60 * 60 * 24));
}

function parseDate(str) {
    var mdy = str.split('-');
    return new Date(mdy[2], mdy[0] - 1, mdy[1]);
}
