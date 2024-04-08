$(document).ready(function () {
    $("#add-detail").click(function () {
        let detail_item = '<li class="item-detail"><input name="detail_key[]" class="form-input" value="" placeholder="Nhập tên trường"/><input name="detail_value[]" class="form-input ml-3" value="" placeholder="Nhập tên giá trị"/><span class="btn-x">X</span></li><script>$(`.btn-x`).click(function () {$(this).parent().remove();});</script>';
        $("#area-detail").append(detail_item);
    });

    $(`.btn-x`).click(function () { $(this).parent().remove(); });

    if (status_product == 'edit') {
        var lengthPreview = $('#imgPreview li').length;
    }

    var multiImgPreview = function (input) {
        if (input.files) {

            var filesAmount = input.files.length;
            for (let i = 0; i < filesAmount; i++) {
                var reader = new FileReader();
                reader.onload = function (event) {
                    if (status_product == 'create') {
                        $('#imgPreview').append('<li><img id="img-review-' + (i + 1) + '" src="' + event.target.result + '" class="p-2 m-3"><input id="input-review-' + (i + 1) + '" type="text" name="image_preview[]" value="' + input.files[i].name + '" hidden><button id="button-review-' + (i + 1) + '" type="button" class="btn-delete-image" onclick="deleteImagePreview(this, `' + input.files[i].name + '`)"/>Delete</button></li>');
                    } else {
                        $('#imgPreview').append('<li><img id="img-review-' + (lengthPreview + 1) + '" src="' + event.target.result + '" class="p-2 m-3"><input id="input-review-' + (lengthPreview + 1) + '" type="text" name="image_preview[]" value="' + input.files[i].name + '" hidden><button id="button-review-' + (lengthPreview + 1) + '" type="button" class="btn-delete-image" onclick="deleteImagePreview(this)"/>Delete</button></li>');
                        lengthPreview++;
                    }
                }
                reader.readAsDataURL(input.files[i]);
            }
        }
    };

    $('#images').on('change', function () {
        multiImgPreview(this);
    });

    $('#imgPreview').sortable();
});

function deleteImagePreview(button, imgName) {
    let idButton = $(button).attr('id');
    let split = idButton.split('-');
    let id = split[2];
    let idImageReview = '#img-review-' + id;
    let idInputReview = '#input-review-' + id;
    let idButtonReview = '#button-review-' + id;
    let images = $('#images');
    const dt = new DataTransfer()
    $(idImageReview).remove();
    $(idInputReview).remove();
    $(idButtonReview).remove();

    for (let i = 0; i < images[0].files.length; i++) {

        if (images[0].files[i].name != imgName) {
            dt.items.add(images[0].files[i])
        }
    }

    images[0].files = dt.files;
}
