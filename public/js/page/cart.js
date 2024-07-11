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
}

$(document).ready(function () {
    $(".btn-submit").click(function (e) {
        e.preventDefault();
        var _token = $('#token').val();
        var discount_amount = $('#promo-code').val();
        $.ajax({
            url: '/cart/apply-coupon',
            type: 'POST',
            data: {
                _token: _token,
                discount_amount: discount_amount
            },
            success: function (data) {
                if ($.isEmptyObject(data.errors)) {
                    $(".error_msg").html(data.success);
                } else {
                    let resp = data.errors;
                    $(".error_msg").html(resp);
                }
            },
        });

    });
});

function updateCart(quantity, id) {
    $.get(
        '{{ asset("/cart/update-cart") }}', {
        quantity: quantity,
        id: id
    },
        function () {
            location.reload()
        }
    )
}

function deleteSales(url) {
    if (confirm('Are you sure?')) {
        $.ajax({
            type: "get",
            url: url,
            success: function (result) {
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
