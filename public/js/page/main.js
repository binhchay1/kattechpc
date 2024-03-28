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

    $('.hover-for-tooltips').hover(function (e) {
        $('.global-tooltip').css('display', 'block');
        $('.global-tooltip').css('left', e.clientX + 100);
        $('.global-tooltip').css('top', e.clientY + 1200);
    }, function () {
        $('.global-tooltip').css('display', 'none');
    })

    let trans = 0;
    setInterval(function () {
        trans = trans - 198;
        $('.swiper-wrapper').css('transform', 'translate3d(' + trans + 'px, 0px, 0px)')
    }, 3000);
});
