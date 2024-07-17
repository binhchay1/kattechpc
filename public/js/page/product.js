var isMobileDetected = false;
var indexImage = 0;
$(document).ready(function () {
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        isMobileDetected = true;
    }

    $('#modalDetail').hide();
    $(".product-image-prev").addClass('d-none');

    $('#read-all-product-detail').on('click', function () {
        $('#modalDetail').show();
    });

    $('.close').click(function () {
        $('#modalDetail').hide();
    });

    $('.js-quantity-change').on('click', function () {
        let value = $(this).data('value');
        let quantity = $('.js-buy-quantity').val();
        let new_quantity = 1;
        if (value == -1) {
            if (quantity == 1) {
                return;
            } else {
                new_quantity = parseInt(quantity) + parseInt(value);

            }
        } else {
            new_quantity = parseInt(quantity) + parseInt(value);
        }

        $('.js-buy-quantity').val(new_quantity);
    });

    $('#showmenu').click(function () {
        $('.menu').slideToggle("fast");
    });

    $('.write_reply').click(function () {
        $('.menu1').slideToggle("fast");
    });

    $('#modal-detail-warranty-package .close').on('click', function () {
        $('#modal-detail-warranty-package').css('display', 'none');
    });

    let transProductRelated = 0;
    let defaultProductRelated = 6;
    let perTransProductRelated = 235;

    if (isMobileDetected) {
        defaultProductRelated = 1;
        perTransProductRelated = window.innerWidth + 10;
    }

    let listChildProductRelated = $(".swiper-product-related").children();
    if (listChildProductRelated.length > defaultProductRelated) {
        let stopProductRelated = listChildProductRelated.length - defaultProductRelated;
        let countProductRelated = 0;
        setInterval(function () {
            if (countProductRelated == stopProductRelated) {
                transProductRelated = 0;
                countProductRelated = 0;
                $('.swiper-product-related').css('transform', 'translate3d(' + transProductRelated + 'px, 0px, 0px)');
            } else {
                transProductRelated = transProductRelated - perTransProductRelated - 2;
                countProductRelated += 1;
                $('.swiper-product-related').css('transform', 'translate3d(' + transProductRelated + 'px, 0px, 0px)');
            }

        }, 3000);
    }

    let transProductViewed = 0;
    let defaultProductViewed = 6;
    let perTransProductViewed = 235;

    if (isMobileDetected) {
        defaultProductViewed = 1;
        perTransProductViewed = window.innerWidth + 10;
    }

    let listChildProductViewed = $(".swiper-product-viewed").children();
    if (listChildProductViewed.length > defaultProductViewed) {
        let stopProductViewed = listChildProductViewed.length - defaultProductViewed;
        let countProductViewed = 0;
        setInterval(function () {
            if (countTopSale == stopProductViewed) {
                transProductViewed = 0;
                countProductViewed = 0;
                $('.swiper-product-viewed').css('transform', 'translate3d(' + transProductViewed + 'px, 0px, 0px)');
            } else {
                transProductViewed = transProductViewed - perTransProductViewed - 2;
                countProductViewed += 1;
                $('.swiper-product-viewed').css('transform', 'translate3d(' + transProductViewed + 'px, 0px, 0px)');
            }

        }, 3000);
    }
});


function getImageCenter(image) {
    let src = image.src;
    let maxIndex = $('.swiper-slide-image').length;
    indexImage = image.getAttribute('data-index');
    $('.swiper-image').find('.border-image').removeClass('border-image');
    $("[data-index=" + indexImage + "]").addClass('border-image');
    $('#featured-image').attr('src', src);

    if (parseInt(indexImage) != 0) {
        $(".product-image-prev").removeClass('d-none');
    } else {
        $(".product-image-prev").addClass('d-none');
    }

    if (parseInt(indexImage) > maxIndex - 2) {
        $(".product-image-next").addClass('d-none');
    } else {
        $(".product-image-next").removeClass('d-none');
    }
}

function handleSlideImage(status) {
    let maxIndex = $('.swiper-slide-image').length;
    if (status == 'next') {
        if (parseInt(indexImage) < maxIndex) {
            let nextIndex = parseInt(indexImage) + 1;
            $("[data-index=" + indexImage + "]").removeClass('border-image');
            $("[data-index=" + nextIndex + "]").addClass('border-image');
            $("[data-index=" + nextIndex + "]").click();
        }

        if (indexImage > maxIndex - 2) {
            $(".product-image-next").addClass('d-none');
        } else {
            $(".product-image-next").removeClass('d-none');
        }

        if (indexImage > 0) {
            $(".product-image-prev").removeClass('d-none');
        }
    } else {
        if (parseInt(indexImage) > 0) {
            let prevIndex = parseInt(indexImage) - 1;
            $("[data-index=" + indexImage + "]").removeClass('border-image');
            $("[data-index=" + prevIndex + "]").addClass('border-image');
            $("[data-index=" + prevIndex + "]").click();
        }

        if (indexImage > 0) {
            $(".product-image-prev").removeClass('d-none');
        } else {
            $(".product-image-prev").addClass('d-none');
        }

        if (indexImage < maxIndex) {
            $(".product-image-next").removeClass('d-none');
        }
    }
}

function detailWarrantyPackage(warranty) {
    let price = warranty.getAttribute('data-price');
    let type = warranty.getAttribute('data-type');
    let description = warranty.getAttribute('data-description');
    let time_on = warranty.getAttribute('data-time-on');
    let device = warranty.getAttribute('data-device');

    $('#modal-detail-warranty-package').css('display', 'flex');
    $('#modal-warranty-price').html(price);
    $('#modal-warranty-type').html(type);
    $('#modal-warranty-description').html(description);
    $('#modal-warranty-time-on').html(time_on);
    $('#modal-warranty-device').html(device);
}

setTimeout(function () {
    $('.alert-add').remove();
}, 5000);

function loadMore(id) {
    var moreText = document.getElementById("more-detail-product");
    if (moreText.style.display === "none") {
        moreText.style.display = "inline";
        $('#hide-all-product').removeClass('d-none');
        $('#read-all-product').addClass('d-none');
    } else {
        moreText.style.display = "none";
        $('#read-all-product').removeClass('d-none');
        $('#hide-all-product').addClass('d-none');
    }
}

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

function addToCart() {
    let slug = $('#product-to-cart').val();
    let total = $('#quantity-to-cart').val();
    let warranty = $('#warranty-package-check').is(":checked");

    let baseUrl = '/cart/add-to-cart/' + slug + '?total=' + total + '&warranty=' + warranty;

    window.location.href = baseUrl;
}

function buyNowHandle(aTag) {
    let warranty = $('#warranty-package-check').is(":checked");
    let slug = aTag.getAttribute('data-slug');

    let baseUrl = '/cart/add-cart/' + slug + '?warranty=' + warranty;

    window.location.href = baseUrl;
}
