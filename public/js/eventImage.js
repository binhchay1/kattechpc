
$(document).on('click', '#btn_chooseImg', function () {
    $('#image').click();
});

$(document).on('click', '#btn_chooseImg1', function () {
    $('#image1').click();
});
$(document).on('click', '#btn_chooseImg2', function () {
    $('#image2').click();
});
$(document).on('click', '#btn_chooseImg3', function () {
    $('#image3').click();
});

$('#image').change(function() {
    readURL(this);
});
$('#image1').change(function() {
    readURL1(this);
});
$('#image2').change(function() {
    readURL2(this);
});
$('#image3').change(function() {
    readURL3(this);
});
function readURL(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#showImage').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }

}

function readURL1(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#showImage1').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }

}

function readURL2(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#showImage2').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }

}

function readURL3(input) {
    if (input.files && input.files[0]) {
        var reader = new FileReader();
        reader.onload = function(e) {
            $('#showImage3').attr('src', e.target.result);
        }
        reader.readAsDataURL(input.files[0]);
    }

}



// function loadImage1() {
//
//     $(document).on('click', '#btn_chooseImg1', function () {
//         $('#image1').click();
//     });
//
//     $('#image1').change(function() {
//         readURL(this);
//     });
// }
// function readURL(input) {
//     console.log(input.files && input.files[0])
//     if (input.files && input.files[0]) {
//         var reader = new FileReader();
//         reader.onload = function(e) {
//             $('#showImage').attr('src', e.target.result);
//         }
//         reader.readAsDataURL(input.files[0]);
//     }
// }



// function loadImage() {
//     $(document).on('click', '#btn_chooseImg', function () {
//         $('#image').click();
//     });
//
//     $('#image').change(function() {
//         readURL(this);
//     });
// }
// function readURL(input) {
//     if (input.files && input.files[0]) {
//         var reader = new FileReader();
//         reader.onload = function(e) {
//             $('#showImage').attr('src', e.target.result);
//         }
//         reader.readAsDataURL(input.files[0]);
//     }
// }
// function loadImage() {
//     $(document).on('click', '#btn_chooseImg', function () {
//         $('#image').click();
//     });
//
//     $('#image').change(function() {
//         readURL(this);
//     });
// }
// function readURL(input) {
//     if (input.files && input.files[0]) {
//         var reader = new FileReader();
//         reader.onload = function(e) {
//             $('#showImage').attr('src', e.target.result);
//         }
//         reader.readAsDataURL(input.files[0]);
//     }
// }
