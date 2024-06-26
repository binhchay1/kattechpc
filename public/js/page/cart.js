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

        var _token = $("input[name='_token']").val();
        var discount_amount = $("input[name='discount_amount']").val();
        $.ajax({
            url: "{{ route('apply.coupon') }}",
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
        },
            setTimeout(window.location.reload.bind(window.location), 1000));

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

}

function downloadCartImage() {

}

function printCart() {

}
