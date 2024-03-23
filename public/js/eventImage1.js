$(function () {
    loadImage1();
});
function loadImage1() {
    $(document).on('click', '#btn_chooseImg1', function () {
        $('#image1').click();
    });

    $('#image1').change(function() {
        readURL(this);
    });
}
function readURL(input) {
    console.log(input.files && input.files[0])
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#showImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }
}
