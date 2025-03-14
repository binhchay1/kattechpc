var isMobileDetected = false;

var defaultTransFlash = 279;
var defaultTransTopSale = 247;
var defaultTransFooterSlide = 285;
var defaultTransProduct = 237;
var defaultTransCustomerReview = 0;

var countFlash = 0;
var countProduct = 0;
var countTopSale = 0;
var countFooterSlide = 0;
var countCustomerReview = 0;

var intervalFlash = 0;
var intervalTopSale = 0;
var intervalFooterSlide = 0;
var intervalProduct = 0;
var intervalCustomerReview = 0;

var listChildFlash = $(".swiper-flash-sale").children();
var listChildFooterSlide = $(".swiper-footer-slide").children();
var listChildCustomerReview = $(".swiper-review-customer").children();
var listChildTopSale = $(".swiper-top-sale").children();

var transFlash = 0;
var defaultFlash = 5;
var perTransFlash = 279;

var transProduct = 0;
var defaultProduct = 6;
var perTransProduct = 238;
var stopProduct = 0;

var transTopSale = 0;
var defaultTopSale = 3;
var perTransTopSale = 247;

var transFooterSlide = 0;
var defaultFooterSlide = 5;
var perTransFooterSlide = 285;

document.addEventListener("DOMContentLoaded", function () {
    $('.preloader-main').css('display', 'none');
    $('body').css('overflow', 'auto');
    $('body').css('overflow-x', 'hidden');

    let is_android = navigator.platform.toLowerCase().includes("android");
    checkSessions();

    if (typeof WURFL !== 'undefined') {
        if (WURFL.is_mobile) {
            mobileScreenHandle();
        } else {
            isMobileDetected = false;
            $('.global-fixed-right a').removeClass('right-inherit');
            $('.main-menu-category').addClass('d-none');
            handleSlideProductInterval();
        }
    } else {
        const checkIsMobile = /iPhone|iPad|iPod|Android/i.test(navigator.userAgent);

        if (checkIsMobile || is_android) {
            mobileScreenHandle();
        } else {
            isMobileDetected = false;
            $('.global-fixed-right a').removeClass('right-inherit');
            $('.main-menu-category').addClass('d-none');
            handleSlideProductInterval();
        }
    }

    window.addEventListener('resize', function () {
        if (window.innerWidth >= 651) {
            $('.global-fixed-right a').removeClass('right-inherit');
            $('body').css('width', '100%');
            $('body').css('overflow', 'auto');
            $('body').css('overflow-x', 'hidden');
            $('.detail-product-on-mobile').css('display', 'none');
            $('#toolbar-menu-mobile').addClass('d-none');
            if (!$('.main-menu-category').hasClass('d-none')) {
                $('.main-menu-category').addClass('d-none');
            }

            countFlash = 0;
            countProduct = 0;
            countTopSale = 0;
            countFooterSlide = 0;
            countCustomerReview = 0;

            transFlash = 0;
            transProduct = 0;
            transTopSale = 0;
            transFooterSlide = 0;

            defaultFlash = 5;
            defaultProduct = 6;
            defaultTopSale = 3;
            defaultFooterSlide = 5;

            defaultTransFlash = 279;
            defaultTransTopSale = 247;
            defaultTransFooterSlide = 285;
            defaultTransProduct = 237;
            defaultTransCustomerReview = 0;

            isMobileDetected = false;

            handleSlideProductInterval();
        } else {
            mobileScreenHandle();
        }
    }, true);

    window.addEventListener('scroll', () => {
        var y = $(this).scrollTop();
        if (y >= 300) {
            if (isMobileDetected) {
                $('.bottomMenu').fadeIn();
                $('.container-hamburger').addClass('header-fixed-menu-mobile');
                $('.menu-btn').css('top', '15px');
                $('.list-items').css(' background', 'white');
                $('.scroll-top-btn').removeClass('d-none');
                if (window.innerWidth >= 650) {
                    $('.wrap1').css('width', '60%');
                    $('.wrap1').css('left', '45%');
                } else {
                    $('.wrap1').css('width', '40%');
                    $('.wrap1').css('left', '40%');
                }
            } else {
                $('.sub-header-scroll').addClass('d-block');
                $('.sub-header-scroll').addClass('header-fixed');
                $('.scroll-top-btn').removeClass('d-none');
                $('.fixed-left').css('top', '65px');
                $('.fixed-right').css('top', '65px');
            }
        } else {
            if (isMobileDetected) {
                $('.bottomMenu').fadeOut();
                $('.container-hamburger').removeClass('header-fixed-menu-mobile');
                $('.scroll-top-btn').addClass('d-none');
                $('.wrap1').css('width', 'inherit');
            } else {
                $('.sub-header-scroll').removeClass('d-block');
                $('.sub-header-scroll').removeClass('header-fixed');
                $('.scroll-top-btn').addClass('d-none');
                $('.fixed-left').css('top', '280px');
                $('.fixed-right').css('top', '280px');
            }
        }
    }, true);

    var modal = document.getElementById("submitGetNews");
    $('#news-button-summit').on('click', function (e) {
        e.preventDefault();
        let email = $('#email_newsletter').val();
        let text = '';
        if (email == '' || email == null) {
            text = 'Vui lòng nhập địa chỉ email ...';
        } else if (!validateEmail(email)) {
            text = 'Không đúng định dạng email. Vui lòng nhập lại ...';
        } else {
            text = 'Cám ơn đã đăng ký nhận thông tin. Chúc quý khách có trải nghiệm vui vẻ với bên chúng tôi!'
        }

        $('#submitGetNews .description').text(text);
        modal.style.display = "flex";
    });

    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    $('.hover-for-tooltips').hover(function () {
        if (!isMobileDetected) {
            let title = $(this).attr('data-title');
            let price = $(this).attr('data-price');
            let new_price = $(this).attr('data-new-price');
            let sale_detail = $(this).attr('data-sale-detail');
            let status_guarantee = $(this).attr('data-status-guarantee');
            let status = $(this).attr('data-status');
            let detail = '';
            let currentPrice = '';

            if ($(this).attr('data-detail') != '') {
                detail = JSON.parse($(this).attr('data-detail'));
                $('.empty-hide-detail').show();
            } else {
                $('.empty-hide-detail').hide();
            }

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

            if (sale_detail == '') {
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
            let offsetLeft = 0;
            let offsetTop = 0;

            if ($(this).offset().left > 1200) {
                offsetLeft = $(this).offset().left - 460;
                offsetTop = $(this).offset().top - 10;
            } else {
                offsetLeft = $(this).offset().left + 260;
                offsetTop = $(this).offset().top - 10;
            }
            $('.global-tooltip').css('left', offsetLeft);
            $('.global-tooltip').css('top', offsetTop);
            $(this).css('transform', 'translate(0, -10px)');
        }
    }, function () {
        $(this).css('transform', 'translate(0, 0)');
        $('.global-tooltip').css('display', 'none');
    });

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

    $('.inline-search-mobile').unbind('keyup');
    $('.inline-search-mobile').bind('keyup', function () { });
    $(".inline-search-mobile").on('keyup', function (e) {
        suggestionForSearchMobile(this);
    });

    $('.inline-search-mobile-scroll').unbind('keyup');
    $('.inline-search-mobile-scroll').bind('keyup', function () { });
    $(".inline-search-mobile-scroll").on('keyup', function (e) {
        suggestionForSearchMobileScroll(this);
    });

    document.querySelector(".menu-btn").addEventListener("click", toggleMenuBar);

    $('#modal-youtube-play .close').on('click', function () {
        $('#modal-youtube-play iframe').attr('src', '');
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

                        let stringAppend = `<a href="/san-pham/` + slug + `">
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

                        let stringAppend = `<a href="/san-pham/` + slug + `">
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

function suggestionForSearchMobile(input) {
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
                    $('#js-search-result-mobile .list').empty();
                    $('.img-card').css('z-index', '-1');
                    for (let i = 0; i < result.length; i++) {
                        let price = result[i].price;
                        let name = result[i].name;
                        let slug = result[i].slug;
                        let image = JSON.parse(result[i].image);

                        let stringAppend = `<a href="/san-pham/` + slug + `">
                                    <img src="/`+ image[0] + `" alt="` + name + `">
                                    <span class="info">
                                    <span class="name">`+ name + `</span>
                                    <span class="price">`+ price + `</span>
                                    </span>
                                </a>`;

                        $('#js-search-result-mobile .list').append(stringAppend);
                    }

                    $('#js-search-result-mobile').css('display', 'block');
                } else {
                    $('#js-search-result-mobile .list').empty();
                    $('#js-search-result-mobile').css('display', 'none');
                    $('.img-card').css('z-index', 'inherit');
                }
            }
        });
    } else {
        $('#js-search-result-mobile .list').empty();
        $('#js-search-result-mobile').hide();
        $('.img-card').css('z-index', 'inherit');
    }
}

function suggestionForSearchMobileScroll(input) {
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
                    $('#js-search-result-mobile-scroll .list').empty();
                    $('.img-card').css('z-index', '-1');
                    for (let i = 0; i < result.length; i++) {
                        let price = result[i].price;
                        let name = result[i].name;
                        let slug = result[i].slug;
                        let image = JSON.parse(result[i].image);

                        let stringAppend = `<a href="/san-pham/` + slug + `">
                                    <img src="/`+ image[0] + `" alt="` + name + `">
                                    <span class="info">
                                    <span class="name">`+ name + `</span>
                                    <span class="price">`+ price + `</span>
                                    </span>
                                </a>`;

                        $('#js-search-result-mobile-scroll .list').append(stringAppend);
                    }

                    $('#js-search-result-mobile-scroll').css('display', 'block');
                } else {
                    $('#js-search-result-mobile-scroll .list').empty();
                    $('#js-search-result-mobile-scroll').css('display', 'none');
                    $('.img-card').css('z-index', 'inherit');
                }
            }
        });
    } else {
        $('#js-search-result-mobile-scroll .list').empty();
        $('#js-search-result-mobile-scroll').hide();
        $('.img-card').css('z-index', 'inherit');
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
    $('.main-menu-category').addClass('show');
    $('body').css('overflow', 'hidden');
}

function closeMenuMobile() {
    $('.main-menu-category').removeClass('show');
    $('body').css('overflow', 'auto');
}

function handleSideBar(menu) {
    let sub = menu.next();
    if (menu.hasClass('active')) {

        menu.removeClass('active');
        sub.removeClass('d-block');
    } else {
        menu.addClass('active');
        sub.addClass('d-block');
    }
}

function disablePopup() {
    $('#adv-popup banner').addClass('d-block');
    $('#adv-popup background').addClass('d-block');

    let status = true;
    let id = 'accepted';
    let element = document.getElementById('adv-popup');
    if (readCookie(id) != true && readCookie(id) != 'true') {
        writeCookie(id, status, 1);
        element.style.display = 'none';
    }
}

function checkSessions() {
    let id = 'accepted';
    if (readCookie(id) != true && readCookie(id) != 'true') {
        $('#adv-popup .banner').addClass('d-block');
        $('#adv-popup .background').addClass('d-block');
    }
}

function writeCookie(name, value, days) {
    var date, expires;
    if (days) {
        date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        expires = "; expires=" + date.toGMTString();
    } else {
        expires = "";
    }
    document.cookie = name + "=" + value + expires + "; path=/";
}

function readCookie(name) {
    var i, c, ca, nameEQ = name + "=";
    ca = document.cookie.split(';');
    for (i = 0; i < ca.length; i++) {
        c = ca[i];
        while (c.charAt(0) == ' ') {
            c = c.substring(1, c.length);
        }
        if (c.indexOf(nameEQ) == 0) {
            return c.substring(nameEQ.length, c.length);
        }
    }

    return '';
}

function mobileScreenHandle() {
    isMobileDetected = true;

    var widthDevice = (window.innerWidth > 650) ? 650 : window.innerWidth;
    $('body').attr('style', 'width: ' + (widthDevice) + 'px !important');
    $('.global-fixed-right a').addClass('right-inherit');
    $('body').css('overflow', 'auto');
    $('body').css('overflow-x', 'hidden');
    $('.swiper-flash-sale').css('transform', 'translate3d(0px, 0px, 0px)');
    $('.swiper-top-sale').css('transform', 'translate3d(0px, 0px, 0px)');
    $('.swiper-footer-slide').css('transform', 'translate3d(0px, 0px, 0px)');
    $('.detail-product-on-mobile').css('display', 'block');
    if ($('.main-menu-category').hasClass('d-none')) {
        $('.main-menu-category').removeClass('d-none');
    }

    if(widthDevice <= 650) {
        $('.swiper-button-next-slide-mobile').css('right', '0');
        $('.swiper-button-prev-slide-mobile').css('left', '0');
    } else {
        $('.swiper-button-next-slide-mobile').css('right', 'calc(20% + 17px)');
        $('.swiper-button-prev-slide-mobile').css('left', 'calc(20% + 17px)');
    }

    countFlash = 0;
    countProduct = 0;
    countTopSale = 0;
    countFooterSlide = 0;
    countCustomerReview = 0;

    transFlash = 0;
    transProduct = 0;
    transTopSale = 0;
    transFooterSlide = 0;

    defaultFlash = 1;
    defaultProduct = 1;
    defaultTopSale = 1;
    defaultFooterSlide = 1;

    if (window.innerWidth < 650) {
        defaultTransFlash = window.innerWidth - 18;
        defaultTransTopSale = window.innerWidth - 18;
        defaultTransFooterSlide = window.innerWidth + 5;
        defaultTransProduct = window.innerWidth + 12;
        defaultTransCustomerReview = window.innerWidth - 10;
    } else {
        defaultTransFlash = 650 - 18;
        defaultTransTopSale = 650 - 18;
        defaultTransFooterSlide = 650 + 5;
        defaultTransProduct = 650 + 12;
        defaultTransCustomerReview = 650 - 10;
    }

    handleSlideProductInterval();
}

function handleSlideProductInterval() {
    if (intervalFlash != 0) {
        clearInterval(intervalFlash);
    }

    if (intervalFooterSlide != 0) {
        clearInterval(intervalFooterSlide);
    }

    if (intervalTopSale != 0) {
        clearInterval(intervalTopSale);
    }

    if (intervalCustomerReview != 0) {
        clearInterval(intervalCustomerReview);
    }

    if (typeof (listCategory) != 'undefined' && listCategory !== null) {
        let listInterval = {}
        for (let k = 0; k < listCategory.default.length; k++) {
            clearInterval(listInterval[k]);
            var listChildProduct = $('.swiper-product-' + listCategory.default[k].slug).children();

            if (listChildProduct.length > defaultProduct) {
                stopProduct = listChildProduct.length - defaultProduct;
                listInterval[k] = setInterval(function () {
                    perTransProduct = defaultTransProduct;

                    if (countProduct == stopProduct) {
                        transProduct = 0;
                        countProduct = 0;
                        $('.swiper-product-' + listCategory.default[k].slug).css('transform', 'translate3d(' + transProduct + 'px, 0px, 0px)');
                    } else {
                        transProduct = transProduct - perTransProduct;
                        countProduct += 1;
                        $('.swiper-product-' + listCategory.default[k].slug).css('transform', 'translate3d(' + transProduct + 'px, 0px, 0px)');
                    }

                }, 3000);

                $('.swiper-button-next-product-' + listCategory.default[k].slug).on('click', function () {
                    if (countProduct == stopProduct) {
                        transProduct = 0;
                        countProduct = 0;
                        $('.swiper-product-' + listCategory.default[k].slug).css('transform', 'translate3d(' + transProduct + 'px, 0px, 0px)');
                    } else {
                        transProduct = transProduct - perTransProduct;
                        countProduct += 1;
                        $('.swiper-product-' + listCategory.default[k].slug).css('transform', 'translate3d(' + transProduct + 'px, 0px, 0px)');
                    }

                    clearInterval(listInterval[k]);
                });

                $('.swiper-button-prev-product-' + listCategory.default[k].slug).on('click', function () {
                    if (countProduct == 0) {
                        transProduct = 0 - (perTransProduct * stopProduct);
                        countProduct = stopProduct;
                        $('.swiper-product-' + listCategory.default[k].slug).css('transform', 'translate3d(' + transProduct + 'px, 0px, 0px)');
                    } else {
                        transProduct = transProduct + perTransProduct;
                        countProduct -= 1;
                        $('.swiper-product-' + listCategory.default[k].slug).css('transform', 'translate3d(' + transProduct + 'px, 0px, 0px)');
                    }

                    clearInterval(listInterval[k]);
                });
            } else {
                $('.swiper-button-next-product-' + listCategory.default[k].slug).addClass('d-none');
                $('.swiper-button-prev-product-' + listCategory.default[k].slug).addClass('d-none');
            }
        }
    }

    if (listChildFlash.length > defaultFlash) {
        let stopFlash = listChildFlash.length - defaultFlash;
        intervalFlash = setInterval(function () {
            perTransFlash = defaultTransFlash;
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

        $('.swiper-button-next-flash-sale').on('click', function () {
            if (countFlash == stopFlash) {
                transFlash = 0;
                countFlash = 0;
                $('.swiper-flash-sale').css('transform', 'translate3d(' + transFlash + 'px, 0px, 0px)');
            } else {
                transFlash = transFlash - perTransFlash;
                countFlash += 1;
                $('.swiper-flash-sale').css('transform', 'translate3d(' + transFlash + 'px, 0px, 0px)');
            }

            clearInterval(intervalFlash);
        });

        $('.swiper-button-prev-flash-sale').on('click', function () {
            if (countFlash == 0) {
                transFlash = 0 - (perTransFlash * stopFlash);
                countFlash = stopFlash;
                $('.swiper-flash-sale').css('transform', 'translate3d(' + transFlash + 'px, 0px, 0px)');
            } else {
                transFlash = transFlash + perTransFlash;
                countFlash -= 1;
                $('.swiper-flash-sale').css('transform', 'translate3d(' + transFlash + 'px, 0px, 0px)');
            }

            clearInterval(intervalFlash);
        });
    } else {
        $('.swiper-button-next-flash-sale').addClass('d-none');
        $('.swiper-button-prev-flash-sale').addClass('d-none');
    }

    if (listChildTopSale.length > defaultTopSale) {
        let stopTopSale = listChildTopSale.length - defaultTopSale;
        let intervalTopSale = setInterval(function () {
            perTransTopSale = defaultTransTopSale;

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

        $('.swiper-button-next-top-sale').on('click', function () {
            if (countTopSale == stopTopSale) {
                transTopSale = 0;
                countTopSale = 0;
                $('.swiper-top-sale').css('transform', 'translate3d(' + transTopSale + 'px, 0px, 0px)');
            } else {
                transTopSale = transTopSale - perTransTopSale;
                countTopSale += 1;
                $('.swiper-top-sale').css('transform', 'translate3d(' + transTopSale + 'px, 0px, 0px)');
            }

            clearInterval(intervalTopSale);
        });

        $('.swiper-button-prev-top-sale').on('click', function () {
            if (countTopSale == 0) {
                transTopSale = 0 - (perTransTopSale * stopTopSale);
                countTopSale = stopTopSale;
                $('.swiper-top-sale').css('transform', 'translate3d(' + transTopSale + 'px, 0px, 0px)');
            } else {
                transTopSale = transTopSale + perTransTopSale;
                countTopSale -= 1;
                $('.swiper-top-sale').css('transform', 'translate3d(' + transTopSale + 'px, 0px, 0px)');
            }

            clearInterval(intervalTopSale);
        });
    } else {
        $('.swiper-button-next-top-sale').addClass('d-none');
        $('.swiper-button-prev-top-sale').addClass('d-none');
    }

    if (listChildFooterSlide.length > defaultFooterSlide) {
        let stopFooterSlide = listChildFooterSlide.length - defaultFooterSlide;

        intervalFooterSlide = setInterval(function () {
            if (isMobileDetected) {
                perTransFooterSlide = defaultTransFooterSlide;
            }

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

        $('.swiper-button-next-footer-slide').on('click', function () {
            if (countFooterSlide == stopFooterSlide) {
                transFooterSlide = 0;
                countFooterSlide = 0;
                $('.swiper-footer-slide').css('transform', 'translate3d(' + transFooterSlide + 'px, 0px, 0px)');
            } else {
                transFooterSlide = transFooterSlide - perTransFooterSlide;
                countFooterSlide += 1;
                $('.swiper-footer-slide').css('transform', 'translate3d(' + transFooterSlide + 'px, 0px, 0px)');
            }

            clearInterval(intervalFooterSlide);
        });

        $('.swiper-button-prev-footer-slide').on('click', function () {
            if (countFooterSlide == 0) {
                transFooterSlide = 0 - (perTransFooterSlide * stopFooterSlide);
                countFooterSlide = stopFooterSlide;
                $('.swiper-footer-slide').css('transform', 'translate3d(' + transFooterSlide + 'px, 0px, 0px)');
            } else {
                transFooterSlide = transFooterSlide + perTransFooterSlide;
                countFooterSlide -= 1;
                $('.swiper-footer-slide').css('transform', 'translate3d(' + transFooterSlide + 'px, 0px, 0px)');
            }

            clearInterval(intervalFooterSlide);
        });
    }

    if (isMobileDetected) {
        if (window.innerWidth > 650) {
            defaultTransCustomerReview = 650 - 10;
        } else {
            defaultTransCustomerReview = window.innerWidth - 10;
        }

        let transCustomerReview = 0;
        let defaultCustomerReview = 1;
        let perTransCustomerReview = defaultTransCustomerReview;
        let currentCountPagination = 1;

        if (listChildCustomerReview.length > defaultCustomerReview) {
            let stopCustomerReview = listChildCustomerReview.length - defaultCustomerReview;
            let countCustomerReview = 0;
            let countPagination = 1;
            intervalCustomerReview = setInterval(function () {
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

            $('.swiper-pagination-bullet').on('click', function (e) {
                e.preventDefault;
                let data_id = $(this).attr('data-id');
                let index = parseInt(data_id.split('-')[3]);
                let transForReview = -(defaultTransCustomerReview * (index - 1));
                $('.swiper-pagination .swiper-pagination-bullet-active').removeClass('swiper-pagination-bullet-active');
                $('.swiper-review-customer').css('transform', 'translate3d(' + transForReview + 'px, 0px, 0px)');
                $(this).addClass('swiper-pagination-bullet-active');
                countPagination = index;
                clearInterval(intervalCustomerReview);
            });
        }
    } else {
        let transCustomerReview = 0;
        let defaultCustomerReview = 4;
        let perTransCustomerReview = 360;
        let currentCountPagination = 1;

        let listChildCustomerReview = $(".swiper-review-customer").children();
        if (listChildCustomerReview.length > defaultCustomerReview) {
            let stopCustomerReview = listChildCustomerReview.length - defaultCustomerReview;
            countCustomerReview = 0;
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

            $('.swiper-pagination-bullet').on('click', function (e) {
                e.preventDefault;
                let data_id = $(this).attr('data-id');
                let index = parseInt(data_id.split('-')[3]);
                let transForReview = -(360 * (index - 1));
                $('.swiper-pagination .swiper-pagination-bullet-active').removeClass('swiper-pagination-bullet-active');
                $('.swiper-review-customer').css('transform', 'translate3d(' + transForReview + 'px, 0px, 0px)');
                $(this).addClass('swiper-pagination-bullet-active');
            });
        }
    }
}

function validateEmail(email) {
    var re = /\S+@\S+\.\S+/;
    return re.test(email);
}
