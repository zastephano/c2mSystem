$(function () {
    "use strict";
    var e = !1,
        o = $(".timer");

    function t() {
        o.length && !e && ($(window).scrollTop() - o.offset().top + $(window).height() >= 0 && (e = o.countTo()))
    }

    function n() {
        $(window).scrollTop() > 0 ? $(".appsLand-navbar").addClass("active-navbar") : $(".appsLand-navbar").removeClass("active-navbar")
    }

    function i() {
        $("body").css({
            paddingBottom: $(".apps-footer").height() + "px"
        })
    }
    t(), $(".appsLand-links > li > a, .scrollLink").on("click", function (e) {
        var o = $(this).attr("href");
        if (console.log(o), "#" === o.charAt(0)) {
            e.preventDefault();
            var t = this.hash,
                n = $(t).offset().top;
            $("html, body").animate({
                scrollTop: n
            }, 500)
        }
    }), $(".scrollToTop").on("click", function (e) {
        $("html, body").animate({
            scrollTop: 0
        }, 500)
    }), n(), new Swiper(".swiper-container", {
        pagination: ".swiper-pagination",
        effect: "coverflow",
        grabCursor: !1,
        centeredSlides: !0,
        slidesPerView: "auto",
        nextButton: ".screenShots__style-1__btn-next",
        prevButton: ".screenShots__style-1__btn-prev",
        paginationClickable: !0,
        spaceBetween: 40,
        initialSlide: 0,
        loop: !0,
        shadow: !1,
        coverflow: {
            rotate: 30,
            stretch: 0,
            depth: 100,
            modifier: 1,
            shadow: !1
        }
    }), new Swiper(".screenshots-slider-container__2", {
        pagination: ".swiper-pagination",
        centeredSlides: !0,
        slidesPerView: "auto",
        paginationClickable: !0,
        nextButton: ".screenShots__style-2__btn-next",
        prevButton: ".screenShots__style-2__btn-prev",
        loop: !0,
        effect: "cube",
        grabCursor: !0,
        cube: {
            shadow: !1,
            slideShadows: !0,
            shadowOffset: 20,
            shadowScale: 1
        }
    }), new Swiper(".testimonials-slider-container", {
        pagination: ".testimonials-slider-pagination",
        effect: "flip",
        grabCursor: !0,
        nextButton: ".testimonials-slider-button-next",
        prevButton: ".testimonials-slider-button-prev",
        loop: !0
    }), new Swiper(".clientLogos-slider-container", {
        slidesPerView: 6,
        loop: !0,
        breakpoints: {
            991: {
                slidesPerView: 4
            },
            640: {
                slidesPerView: 3
            },
            480: {
                slidesPerView: 2
            },
            320: {
                slidesPerView: 1
            }
        }
    }), $(".option-template-menu-open").on("click", function () {
        $(this).parent().toggleClass("active")
    }), $(".color-list a").on("click", function (e) {
        e.preventDefault(), $(".color-list li").removeClass("active"), $(this).parent().addClass("active"), $("#color-option").attr("href", $(this).attr("href"))
    }), $(".dropdown").hover(function () {
        $(this).addClass("open")
    }, function () {
        $(this).removeClass("open")
    }), $(".menu-toggle").on("click", function () {
        $(".appsLand-navbar").toggleClass("mobile-menu-active")
    }), $(window).on("load", function () {
        $("#myModal").on("hidden.bs.modal", function () {
            $("#popup-youtube-player")[0].contentWindow.postMessage('{"event":"command","func":"stopVideo","args":""}', "*")
        }), i(), $(".loading").animate({
            opacity: 0
        }, 500, function () {
            $(this).remove()
        }), (new WOW).init(), $('[data-toggle="tooltip"]').tooltip()
    }), $(window).on("scroll", function () {
        n(), t(), $(window).scrollTop() > 1e3 ? $(".scrollToTop").addClass("active") : $(".scrollToTop").removeClass("active")
    }), $(window).on("resize", function () {
        i()
    })
});
