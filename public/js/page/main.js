var isMobileDetected = false;

$(document).ready(function () {
    var modal = document.getElementById("submitGetNews");
    var btn = document.getElementById("news-button-summit");
    var span = document.getElementsByClassName("close")[0];

    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        isMobileDetected = true;
    }

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
        let detail = JSON.parse($(this).attr('data-detail'));
        let currentPrice = '';

        if (new_price == '' || new_price == null) {
            currentPrice = price;
        } else {
            currentPrice = new_price;
        }

        if (status == 'available') {
            status = 'Còn hàng';
            $('#tooltips-status-storage').css('color', 'green');
        } else if (status == 'out of stock') {
            status = 'Hết hàng';
            $('#tooltips-status-storage').css('color', 'red');
        } else {
            status = 'Đặt hàng';
            $('#tooltips-status-storage').css('color', 'yellow');
        }

        if (sale_detail == '' || sale_detail == null) {
            $('.tooltip-list-gift').hide();
        } else {
            $('.tooltip-list-gift').show();
        }

        $('#tooltip-detail').empty();
        for (let i in detail) {
            let stringAppend = `- ` + i + `: ` + detail[i] + `<br>`;

            $('#tooltip-detail').append(stringAppend);
        }

        $('.global-tooltip .tooltip-name').html(title);
        $('#tooltips-price').html(price);
        $('#tooltips-price').html(currentPrice);
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

    if (typeof (listCategory) != 'undefined' && listCategory !== null) {
        for (let k = 0; k < listCategory.default.length; k++) {
            let transProduct = 0;
            let defaultProduct = 6;
            let perTransProduct = 236;
            let idElementProduct = '.swiper-product-' + listCategory.default[k].slug;
            let listChildProduct = $(idElementProduct).children();

            if (isMobileDetected) {
                perTransProduct = window.innerWidth + 12;
            }

            if (listChildProduct.length > defaultProduct) {
                let stopProduct = listChildProduct.length - defaultProduct;
                let countProduct = 0;
                setInterval(function () {
                    if (countProduct == stopProduct) {
                        transProduct = 0;
                        countProduct = 0;
                        $(idElementProduct).css('transform', 'translate3d(' + transProduct + 'px, 0px, 0px)');
                    } else {
                        transProduct = transProduct - perTransProduct;
                        countProduct += 1;
                        $(idElementProduct).css('transform', 'translate3d(' + transProduct + 'px, 0px, 0px)');
                    }

                }, 3000);
            }
        }
    }

    let transTopSale = 0;
    let defaultTopSale = 3;
    let perTransTopSale = 249;

    if (isMobileDetected) {
        perTransTopSale = window.innerWidth - 10;
    }

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

    let transFooterSlide = 0;
    let defaultFooterSlide = 5;
    let perTransFooterSlide = 285;

    let listChildFooterSlide = $(".swiper-footer-slide").children();
    if (listChildFooterSlide.length > defaultFooterSlide) {
        let stopFooterSlide = listChildFooterSlide.length - defaultFooterSlide;
        let countFooterSlide = 0;
        setInterval(function () {
            if (countFooterSlide == stopFooterSlide) {
                transFooterSlide = 0;
                countFooterSlide = 0;
                $('.swiper-footer-slide').css('transform', 'translate3d(' + transFooterSlide + 'px, 0px, 0px)');
            } else {
                transFooterSlide = transFooterSlide - perTransFooterSlide;
                countFooterSlide += 1;
                $('.swiper-footer-slide').css('transform', 'translate3d(' + transFooterSlide + 'px, 0px, 0px)');
            }

        }, 3000);
    }

    if (isMobileDetected) {
        let transCustomerReview = 0;
        let defaultCustomerReview = 1;
        let perTransCustomerReview = 392;
        let currentCountPagination = 1;

        let listChildCustomerReview = $(".swiper-review-customer").children();
        if (listChildCustomerReview.length > defaultCustomerReview) {
            let stopCustomerReview = listChildCustomerReview.length - defaultCustomerReview;
            let countCustomerReview = 0;
            let countPagination = 1;
            setInterval(function () {
                if (countCustomerReview == stopCustomerReview) {
                    transCustomerReview = 0;
                    countCustomerReview = 0;
                    countPagination = 1;

                    $("span[data-id='swiper-pagination-bullet-" + currentCountPagination + "']").removeClass('swiper-pagination-bullet-active');
                    $("span[data-id='swiper-pagination-bullet-" + countPagination + "']").addClass('swiper-pagination-bullet-active');
                    $('.swiper-review-customer').css('transform', 'translate3d(' + transCustomerReview + 'px, 0px, 0px)');
                } else {
                    transCustomerReview = transCustomerReview - perTransCustomerReview;
                    countCustomerReview += 1;
                    let nextCountPagination = countPagination + 1;

                    $("span[data-id='swiper-pagination-bullet-" + countPagination + "']").removeClass('swiper-pagination-bullet-active');
                    $("span[data-id='swiper-pagination-bullet-" + nextCountPagination + "']").addClass('swiper-pagination-bullet-active');
                    $('.swiper-review-customer').css('transform', 'translate3d(' + transCustomerReview + 'px, 0px, 0px)');
                    currentCountPagination = countPagination += 1;
                }

            }, 3000);
        }
    } else {
        let transCustomerReview = 0;
        let defaultCustomerReview = 4;
        let perTransCustomerReview = 350;
        let currentCountPagination = 1;

        let listChildCustomerReview = $(".swiper-review-customer").children();
        if (listChildCustomerReview.length > defaultCustomerReview) {
            let stopCustomerReview = listChildCustomerReview.length - defaultCustomerReview;
            let countCustomerReview = 0;
            let countPagination = 1;
            setInterval(function () {
                if (countCustomerReview == stopCustomerReview) {
                    transCustomerReview = 0;
                    countCustomerReview = 0;
                    countPagination = 1;

                    $("span[data-id='swiper-pagination-bullet-" + currentCountPagination + "']").removeClass('swiper-pagination-bullet-active');
                    $("span[data-id='swiper-pagination-bullet-" + countPagination + "']").addClass('swiper-pagination-bullet-active');
                    $('.swiper-review-customer').css('transform', 'translate3d(' + transCustomerReview + 'px, 0px, 0px)');
                } else {
                    transCustomerReview = transCustomerReview - perTransCustomerReview;
                    countCustomerReview += 1;
                    let nextCountPagination = countPagination + 1;

                    $("span[data-id='swiper-pagination-bullet-" + countPagination + "']").removeClass('swiper-pagination-bullet-active');
                    $("span[data-id='swiper-pagination-bullet-" + nextCountPagination + "']").addClass('swiper-pagination-bullet-active');
                    $('.swiper-review-customer').css('transform', 'translate3d(' + transCustomerReview + 'px, 0px, 0px)');
                    currentCountPagination = countPagination += 1;
                }

            }, 3000);
        }
    }

    $('.global-menu-container').hover(function () {
        $('.global-menu-holder').show();
    }, function () {
        if ($(".global-menu-holder .sub-menu-list").css("display") != "flex" && $('.global-menu-holder').is(':visible')) {
            $('.global-menu-holder').hide();
        }
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
        $('.global-menu-holder').hide();
    });

    $('.sub-cat-2-link a').hover(function () {
        $(this).css('color', 'red');
    }, function () {
        $(this).css('color', 'black');
    });

    $('.lazy').Lazy();

    $('.inline-search').unbind('keyup');
    $('.inline-search').bind('keyup', function () { });
    $(".inline-search").on('keyup', function (e) {
        suggestionForSearch(this);
    });

    $('.inline-search-scroll').unbind('keyup');
    $('.inline-search-scroll').bind('keyup', function () { });
    $(".inline-search-scroll").on('keyup', function (e) {
        suggestionForSearchScroll(this);
    });

    document.querySelector(".menu-btn").addEventListener("click", toggleMenuBar);

    $('#modal-youtube-play .close').on('click', function () {
        $('#modal-youtube-play').css('display', 'none');
    });

    $('#modal-map .close').on('click', function () {
        $('#modal-map').css('display', 'none');
    });

    $('.fa-map-marker-alt').on('click', function () {
        $('#modal-map').css('display', 'flex');
    });

    $('.header-top-hotline').hover(function () {
        $('.header-top-left .sub').addClass('d-block');
    }, function () {
        $('.header-top-left .sub').hover(function () {
        }, function () {
            $('.header-top-left .sub').removeClass('d-block');
        });
    });
});

$(document).scroll(function () {
    if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent)) {
        var y = $(this).scrollTop();
        if (y > 400) {
            $('.bottomMenu').fadeIn();
            $('.container-hamburger').addClass('header-fixed-menu-mobile');
            $('.menu-btn').css('top', '5px');
        } else {
            $('.bottomMenu').fadeOut();
            $('.container-hamburger').removeClass('header-fixed-menu-mobile');
            $('.menu-btn').css('top', '40px');
            $('.main-menu-category').css('margin-top', '40px');
        }
    }

    var x = $(this).scrollTop();
    if (x >= 300) {
        $('.sub-header-scroll').addClass('d-block');
        $('.sub-header-scroll').addClass('header-fixed');
        $('.scroll-top-btn').addClass('d-block');
    } else {
        $('.sub-header-scroll').removeClass('d-block');
        $('.sub-header-scroll').removeClass('header-fixed');
        $('.scroll-top-btn').removeClass('d-block');
    }
});

function priceWithCommas(price) {
    return price.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ".");
}

function suggestionForSearch(input) {
    let urlSuggest = '/get-products-for-suggestions';
    if (input.value != '') {
        $.ajax({
            type: "get",
            data: {
                search: input.value
            },
            url: urlSuggest,
            success: function (result) {
                if (result.length > 0) {
                    $('#js-search-result .list').empty();
                    for (let i = 0; i < result.length; i++) {
                        let price = result[i].price;
                        let name = result[i].name;
                        let slug = result[i].slug;
                        let image = JSON.parse(result[i].image);

                        let stringAppend = `<a href="/product/` + slug + `">
                                    <img src="`+ image[0] + `" alt="` + name + `">
                                    <span class="info">
                                    <span class="name">`+ name + `</span>
                                    <span class="price">`+ price + `</span>
                                    </span>
                                </a>`;

                        $('#js-search-result .list').append(stringAppend);
                    }

                    $('#js-search-result').css('display', 'block');
                } else {
                    $('#js-search-result .list').empty();
                    $('#js-search-result').css('display', 'none');
                }
            }
        });
    } else {
        $('#js-search-result .list').empty();
        $('#js-search-result').hide();
    }
}

function suggestionForSearchScroll(input) {
    let urlSuggest = '/get-products-for-suggestions';
    if (input.value != '') {
        $.ajax({
            type: "get",
            data: {
                search: input.value
            },
            url: urlSuggest,
            success: function (result) {
                if (result.length > 0) {
                    $('#js-search-result-scroll .list').empty();
                    for (let i = 0; i < result.length; i++) {
                        let price = result[i].price;
                        let name = result[i].name;
                        let slug = result[i].slug;
                        let image = JSON.parse(result[i].image);

                        let stringAppend = `<a href="/product/` + slug + `">
                                    <img src="`+ image[0] + `" alt="` + name + `">
                                    <span class="info">
                                    <span class="name">`+ name + `</span>
                                    <span class="price">`+ price + `</span>
                                    </span>
                                </a>`;

                        $('#js-search-result-scroll .list').append(stringAppend);
                    }

                    $('#js-search-result-scroll').css('display', 'block');
                } else {
                    $('#js-search-result-scroll .list').empty();
                    $('#js-search-result-scroll').css('display', 'none');
                }
            }
        });
    } else {
        $('#js-search-result-scroll .list').empty();
        $('#js-search-result-scroll').hide();
    }
}

function watchYoutubeVideo(youtube) {
    let getUrl = youtube.attr('data-url');
    let urlParams = new URL(getUrl);
    let idUrl = urlParams.searchParams.get('v');
    let urlYoutube = 'https://www.youtube.com/embed/' + idUrl + '?autoplay=true';

    $('#modal-youtube-play iframe').attr('src', urlYoutube);
    $('#modal-youtube-play').css('display', 'flex');
}

function toggleMenuBar() {
    document.querySelector(".main-menu-category").classList.toggle("show");
}
