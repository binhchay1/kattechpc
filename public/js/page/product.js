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

    $('.vendor-carousel').owlCarousel({
        loop: true,
        nav: false,
        autoplay: true,
        smartSpeed: 1000,
    });

    $('.hover-for-tooltips').hover(function () {
        $('.global-tooltip').css('display', 'block');
        $('.global-tooltip').css('left', $(this).offset().left + 225);
        $('.global-tooltip').css('top', $(this).offset().top - 50);
    }, function () {
        $('.global-tooltip').css('display', 'none');
    });

    let transFlash = 0;
    let defaultFlash = 7;
    let perTransFlash = 300;

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

    let transProduct = 0;
    let defaultProduct = 6;
    let perTransProduct = 238;

    let listChildProduct = $(".swiper-product").children();
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

    let transTopSale = 0;
    let defaultTopSale = 3;
    let perTransTopSale = 280;

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
});
