$(document).ready(function () {
    $("#add-detail").click(function () {
        let detail_item = '<li class="item-detail"><input name="detail_key[]" class="form-input" value="" placeholder="Nhập tên trường"/><input name="detail_value[]" class="form-input ml-3" value="" placeholder="Nhập tên giá trị"/><span class="btn-x">X</span></li><script>$(`.btn-x`).click(function () {$(this).parent().remove();});</script>';
        $("#area-detail").append(detail_item);
    });

    $(`.btn-x`).click(function () { $(this).parent().remove(); });

    var multiImgPreview = function (input, imgPreviewPlaceholder) {
        if (input.files) {
            var filesAmount = input.files.length;
            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();
                reader.onload = function (event) {
                    $($.parseHTML('<img>')).attr('src', event.target.result).appendTo(imgPreviewPlaceholder);
                }
                reader.readAsDataURL(input.files[i]);
            }
        }
    };

    $('#images').on('change', function () {
        multiImgPreview(this, 'div.imgPreview');
    });
});
