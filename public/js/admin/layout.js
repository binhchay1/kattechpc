$(document).ready(function () {
    var id = '';
    $('.btn_chooseImg').on('click', function () {
        let parent = $(this).parent();
        let getAttr = parent.attr('id');
        let slice = getAttr.split('-');
        id = slice[1];
        $('#image' + id).click();
    });

    $('input').change(function () {
        readURL(this, id);
    });
});

function readURL(input, id) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function (e) {
            $('#showImage' + id).attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
