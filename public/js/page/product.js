$(document).ready(function () {
    let transProductRelated = 0;
    let defaultProductRelated = 6;
    let perTransProductRelated = 235;

    let listChildProductRelated = $(".swiper-product-related").children();
    console
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
