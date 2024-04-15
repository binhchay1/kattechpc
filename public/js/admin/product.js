var storeName = new Array();
var storeFile = new DataTransfer();

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

            let images = $('#images');
            for (let i = 0; i < input.files.length; i++) {
                var reader = new FileReader();

                reader.onload = function (event) {
                    if (status_product == 'create') {
                        $('#imgPreview').append('<li data-id="' + input.files[i].name + '"><img id="img-review-' + (i + 1) + '" src="' + event.target.result + '" class="p-2 m-3"><button id="button-review-' + (i + 1) + '" type="button" class="btn-delete-image" onclick="deleteImagePreview(this, `' + input.files[i].name + '`)"/>Delete</button></li>');
                    } else {
                        $('#imgPreview').append('<li data-id="' + input.files[i].name + '"><img id="img-review-' + (lengthPreview + 1) + '" src="' + event.target.result + '" class="p-2 m-3"><button id="button-review-' + (lengthPreview + 1) + '" type="button" class="btn-delete-image" onclick="deleteImagePreview(this, `' + input.files[i].name + '`)"/>Delete</button></li>');
                        lengthPreview++;
                    }
                }
                reader.readAsDataURL(input.files[i]);

                if (status_product == 'create') {
                    storeName.push(input.files[i].name);
                    storeFile.items.add(input.files[i]);
                }
            }

            images[0].files = storeFile.files;
            $('#imgPreview').sortable('refresh');
        }
    };

    $('#images').on('change', function () {
        multiImgPreview(this);

        $('#imgPreview').sortable('refresh');
        $('#input-review').val(storeName.join());
    });

    $('#imgPreview').sortable({
        items: 'li',
        cursor: '-webkit-grabbing',
        scrollSensitivity: 40,

        stop: function () {
            let sort = new Array();
            let container = $(this);

            container.find('li').each(function () {
                sort.push($(this).attr('data-id'));
            });
            storeName = sort;

            $('#input-review').val(storeName.join());
        }
    });
});

function deleteImagePreview(button, imgName) {
    let idButton = $(button).attr('id');
    let split = idButton.split('-');
    let id = split[2];
    let idImageReview = '#img-review-' + id;
    let idInputReview = '#input-review-' + id;
    let idButtonReview = '#button-review-' + id;
    let images = $('#images');
    let imgPreview = new Array();

    $(idImageReview).remove();
    $(idInputReview).remove();
    $(idButtonReview).remove();
    storeFile = new DataTransfer();

    for (let i = 0; i < images[0].files.length; i++) {
        if (images[0].files[i].name != imgName) {
            storeFile.items.add(images[0].files[i]);
            imgPreview.push(images[0].files[i].name);
        } else {
            imgName = '';
        }
    }

    storeName = imgPreview;
    images[0].files = storeFile.files;

    $('#input-review').val(storeName.join());
    $('#imgPreview').sortable('refresh');
}
