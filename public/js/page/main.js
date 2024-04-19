$(document).ready(function () {
    var modal = document.getElementById("submitGetNews");
    var btn = document.getElementById("news-button-summit");
    var span = document.getElementsByClassName("close")[0];

    btn.onclick = function () {
        modal.style.display = "block";
    }

    span.onclick = function () {
        modal.style.display = "none";
    }

    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    if ($(".vendor-carousel")[0]) {
        $('.vendor-carousel').owlCarousel({
            loop: true,
            nav: false,
            autoplay: true,
            smartSpeed: 1000,
        });
    }

    $('.hover-for-tooltips').hover(function () {
        let title = $(this).attr('data-title');
        let price = $(this).attr('data-price');
        let new_price = $(this).attr('data-new-price');
        let sale_detail = $(this).attr('data-sale-detail');
        let status_guarantee = $(this).attr('data-status-guarantee');
        let status = $(this).attr('data-status');

        if (new_price == '' || new_price == null) {
            $('#title-new-price').hide();
            $('#tooltips-new-price').hide();
            $('#tooltips-sale-price').hide();
        } else {
            $('#title-new-price').show();
            $('#tooltips-new-price').show();
            $('#tooltips-sale-price').show();
        }

        if (sale_detail == '' || sale_detail == null) {
            $('.tooltip-list-gift').hide();
        } else {
            $('.tooltip-list-gift').show();
        }

        $('.global-tooltip .tooltip-name').html(title);
        $('#tooltips-price').html(price);
        $('#tooltips-new-price').html(new_price);
        $('#tooltips-status-guarantee').html(status_guarantee);
        $('#tooltips-status-storage').html(status);
        $('.tooltip-list-gift').html(sale_detail);

        $('.global-tooltip').css('display', 'block');
        $('.global-tooltip').css('left', $(this).offset().left + 225);
        $('.global-tooltip').css('top', $(this).offset().top - 10);
    }, function () {
        $('.global-tooltip').css('display', 'none');
    });

    let transFlash = 0;
    let defaultFlash = 7;
    let perTransFlash = 198;

    let listChildFlash = $(".swiper-flash-sale").children();
    if (listChildFlash.length > defaultFlash) {
        let stopFlash = listChildFlash.length - defaultFlash;
        let countFlash = 0;
        setInterval(function () {
            if (countFlash == stopFlash) {
                transFlash = 0;
                countFlash = 0;
                $('.swiper-flash-sale').css('transform', 'translate3d(' + transFlash + 'px, 0px, 0px)');
            } else {
                transFlash = transFlash - perTransFlash;
                countFlash += 1;
                $('.swiper-flash-sale').css('transform', 'translate3d(' + transFlash + 'px, 0px, 0px)');
            }
        }, 3000);
    }

    if (typeof (listCategory) != "undefined" && listCategory !== null) {
        for (let k = 0; k < listCategory.length; k++) {
            let transProduct = 0;
            let defaultProduct = 6;
            let perTransProduct = 238;
            let idElementProduct = '.swiper-product-' + listCategory[k].slug;

            let listChildProduct = $(idElementProduct).children();
            if (listChildProduct.length > defaultProduct) {
                let stopProduct = listChildProduct.length - defaultProduct;
                let countProduct = 0;
                setInterval(function () {
                    if (countProduct == stopProduct) {
                        transProduct = 0;
                        countProduct = 0;
                        $('.swiper-product').css('transform', 'translate3d(' + transProduct + 'px, 0px, 0px)');
                    } else {
                        transProduct = transProduct - perTransProduct;
                        countProduct += 1;
                        $('.swiper-product').css('transform', 'translate3d(' + transProduct + 'px, 0px, 0px)');
                    }

                }, 3000);
            }
        }
    }

    let transTopSale = 0;
    let defaultTopSale = 3;
    let perTransTopSale = 249;

    let listChildTopSale = $(".swiper-top-sale").children();
    if (listChildTopSale.length > defaultTopSale) {
        let stopTopSale = listChildTopSale.length - defaultTopSale;
        let countTopSale = 0;
        setInterval(function () {
            if (countTopSale == stopTopSale) {
                transTopSale = 0;
                countTopSale = 0;
                $('.swiper-top-sale').css('transform', 'translate3d(' + transTopSale + 'px, 0px, 0px)');
            } else {
                transTopSale = transTopSale - perTransTopSale;
                countTopSale += 1;
                $('.swiper-top-sale').css('transform', 'translate3d(' + transTopSale + 'px, 0px, 0px)');
            }

        }, 3000);
    }

    $('.global-menu-container').hover(function () {
        $('.global-menu-holder').css('opacity', 1);
    }, function () {
        $('.global-menu-holder').css('opacity', 0);
    });

    $('.global-menu-holder .item .cat-1').hover(function () {
        $(this).css('background-color', '#b42328');
        $(this).css('color', '#ffffff');
        $(this).next().css('display', 'flex');
    }, function () {
        $(this).css('background-color', '#ffffff');
        $(this).css('color', 'black');
        $(this).next().css('display', 'none');
    });

    $('.sub-menu-list').hover(function () {
        $('.global-menu-holder').css('opacity', 1);
        $(this).prev().css('background-color', '#b42328');
        $(this).prev().css('color', '#ffffff');
        $(this).css('display', 'flex');
    }, function () {
        $(this).prev().css('background-color', '#ffffff');
        $(this).prev().css('color', 'black');
        $(this).css('display', 'none');
    });

    $('.sub-cat-2-link a').hover(function () {
        $(this).css('color', 'red');
    }, function () {
        $(this).css('color', 'black');
    });

    $('.lazy').Lazy();
});
