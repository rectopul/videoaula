jQuery.noConflict(); // Reverts '$' variable back to other JS libraries
jQuery(document).ready(function ($) {
    /* Full Banner */
    var $ = window.jQuery;
    function resizeFullBaner() {
        if ($("div#wpadminbar").length > 0) {
            $("header#header").css("top", $("div#wpadminbar").innerHeight());
        }

        $(".content-slide article ").each(function (e) {
            var mleft = $(this).width() / 2,
                mtop = $(this).innerHeight() / 2;

            $(this).css({
                marginLeft: "-" + mleft + "px",
                marginTop: "-" + mtop + "px",
            });
        });
    }

    resizeFullBaner();

    /* Slider Full Banner */

    var swiper1 = new Swiper(".full-banner", {
        centeredSlides: true,
        loop: true,
        autoplay: {
            delay: 2500,
            disableOnInteraction: false,
        },
    });

    var SwiperF = new Swiper(".sobre-content", {
        centeredSlides: true,
        loop: true,
        slidesPerView: 3,
        spaceBetween: 30,
        autoHeight: true,
        navigation: {
            nextEl: ".SobNext",
            prevEl: ".SobPrev",
        },
        breakpoints: {
            // when window width is <= 768px
            768: {
                autoHeight: true,
            },
        },
    });

    var swiper2 = new Swiper(".carrousel-services", {
        loop: true,
        slidesPerView: 2,
        autoHeight: false,
        spaceBetween: 30,
        navigation: {
            nextEl: ".ServNext",
            prevEl: ".ServPrev",
        },
        breakpoints: {
            // when window width is <= 768px
            768: {
                autoHeight: true,
            },
        },
    });

    /**
     * Slider Marketplace
     */

    var swiperMKT = new Swiper(".container-carroussel-marketplace", {
        loop: true,
        slidesPerView: 1,
        autoHeight: false,
        spaceBetween: 0,
        navigation: {
            nextEl: ".rmb-button-next",
            prevEl: ".rmb-button-prev",
        },
    });

    /**
     * Swiper Parceiro
     */
    var swiperPARC = new Swiper(".parceiros__content", {
        loop: true,
        slidesPerView: 7,
        spaceBetween: 90,
        navigation: {
            nextEl: ".PCnext",
            prevEl: ".PCprev",
        },
    });

    /**
     * Corners Position
     */
    $(".cases-pagination").each(function (e, i) {
        $(this).css("margin-left", "-" + $(this).innerWidth() / 2 + "px");
    });

    /**
     * Contact form
     */

    $('input[type="radio"][checked="checked"]').each(function (e, i) {
        $(this).parent().addClass("checked");
    });

    $("label").click(function (e) {
        e.preventDefault();
        console.log(e);
        if (e.target.childNodes[1] && e.target.childNodes[1].type == "radio") {
            $('input[type="radio"][name="site_type"]').removeAttr("checked");

            $(".form-contact label.checked")
                .find("input")
                .prop("checked", false)
                .removeAttr("checked");

            $(".form-contact label.checked").removeClass("checked");

            $(this)
                .find("input")
                .prop("checked", true)
                .attr("checked", "checked");
        }

        $(this).addClass("checked");
    });

    function animateCSS(element, animationName, callback) {
        const node = document.querySelector(element);
        node.classList.add("animated", animationName);

        function handleAnimationEnd() {
            node.classList.remove("animated", animationName);
            node.removeEventListener("animationend", handleAnimationEnd);

            if (typeof callback === "function") callback();
        }

        node.addEventListener("animationend", handleAnimationEnd);
    }

    /**
     * Contact form 7 validator
     * events:
     * wpcf7invalid — Fires when an Ajax form submission has completed successfully, but mail hasn’t been sent because there are fields with invalid input.
     * wpcf7spam — Fires when an Ajax form submission has completed successfully, but mail hasn’t been sent because a possible spam activity has been detected.
     * wpcf7mailsent — Fires when an Ajax form submission has completed successfully, and mail has been sent.
     * wpcf7mailfailed — Fires when an Ajax form submission has completed successfully, but it has failed in sending mail.
     * wpcf7submit — Fires when an Ajax form submission has completed successfully, regardless of other incidents.
     */

    var wpcf7Elm = $(".wpcf7");

    $(wpcf7Elm).on("wpcf7submit", function (event) {
        //console.log(event)
    });

    $(wpcf7Elm).on("wpcf7invalid", function (event) {
        if (event.detail.apiResponse.status == "validation_failed") {
            $(".wpcf7-response-output").remove();
            var message = event.detail.apiResponse.message;
            console.log(event.detail.apiResponse);

            var toast =
                '<div style="position:fixed;" role="alert" aria-live="assertive" aria-atomic="true" class="toast" data-delay="20000">' +
                '<div class="toast-header">' +
                '<svg class="bd-placeholder-img rounded mr-2" width="20" height="20" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice" focusable="false" role="img"><rect fill="#dc3545" width="100%" height="100%"></rect></svg>' +
                '<strong class="mr-auto">' +
                "Erros de validação" +
                "</strong>" +
                "<small>11 mins ago</small>" +
                '<button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">' +
                '<span aria-hidden="true">&times;</span>' +
                "</button>" +
                "</div>" +
                '<div class="toast-body">' +
                message +
                "</div>" +
                "</div>";

            $("body").prepend(toast);

            animateCSS(".toast", "slideInDown");

            $(".toast").toast("show");

            for (const key in event.detail.apiResponse.invalidFields) {
                if (
                    event.detail.apiResponse.invalidFields.hasOwnProperty(key)
                ) {
                    const element = event.detail.apiResponse.invalidFields[key];
                    console.log(element.into);

                    $(".wpcf7-not-valid-tip").remove();

                    $(element.into)
                        .attr({
                            "data-placement": "bottom",
                            tabindex: 0,
                            "data-toggle": "tooltip",
                            "data-original-title": element.message,
                            title: element.message,
                        })
                        .addClass("red-tooltip")
                        .tooltip("toggle");
                }
            }

            setTimeout(function () {
                $(".red-tooltip")
                    .removeAttr(
                        "data-placement tabindex data-toggle title data-original-title"
                    )
                    .tooltip("hide");
            }, 4000);

            $(".toast").on("hidden.bs.toast", function () {
                animateCSS(".toast", "slideOutUp");

                $(".toast").on("animationend", function () {
                    $(".toast").remove();
                });
            });
        }
    });

    /**
     * Menu Mobile
     * Efeitos do menu mobile
     */

    $(".corners").click(function () {
        if ($(".nav_mobile-menu").hasClass("menu-show")) {
            $(".nav_mobile-menu")
                .css("transform", "translateX(calc(100vw - 15px))")
                .removeClass("menu-show");
        } else {
            $(".nav_mobile-menu")
                .css("transform", "translateX(calc(30px))")
                .addClass("menu-show");
        }
    });

    /**
     * Responsivo
     * Parte Dedicada
     * a layout responsivo
     */

    function insertToSwiper(container, itens, arrows, options) {
        var { next, prev } = arrows;
        var opt = options
            ? options
            : {
                  slidesPerView: 1,
                  spaceBetween: 40,
                  navigation: { nextEl: next, prevEl: prev },
              };

        if (opt.navigation) {
            $(itens)
                .parent()
                .append(
                    "<!-- If we need navigation buttons -->" +
                        '<div class="swiper-button-prev ' +
                        prev.replace(".", "") +
                        '"></div>' +
                        '<div class="swiper-button-next ' +
                        next.replace(".", "") +
                        '"></div>'
                );
        }

        $(itens)
            .addClass("swiper-slide")
            .wrapAll("<div class='swiper-wrapper'></div>");

        return new Swiper(container, opt);
    }
    if (window.matchMedia("(max-width: 480px)").matches) {
        //...
    } else {
        //...
    }

    /**
     * Window on Resize Functions
     */

    $(window).on("resize", function () {
        resizeFullBaner();
    });
});
