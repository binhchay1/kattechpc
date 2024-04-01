$(document).ready(function () {
    $("#add-detail").click(function () {
        let detail_item = '<li class="item-detail"><input name="detail_key[]" class="form-input" value="" placeholder="Nhập tên trường"/><input name="detail_value[]" class="form-input ml-3" value="" placeholder="Nhập tên giá trị"/><span class="btn-x">X</span></li><script>$(`.btn-x`).click(function () {$(this).parent().remove();});</script>';
        $("#area-detail").append(detail_item);
    });

    $(`.btn-x`).click(function () { $(this).parent().remove(); });
});
