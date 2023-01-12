(function ($) {
    "use strict";

    // Css Function Js
    const bgSelector = $("[data-bg-img]");
    bgSelector.each(function (index, elem) {
        let element = $(elem),
            bgSource = element.data('bg-img');
        element.css('background-image', 'url(' + bgSource + ')');
    });

    const Bgcolorcl = $("[data-bg-color]");
    Bgcolorcl.each(function (index, elem) {
        let element = $(elem),
            Bgcolor = element.data('bg-color');
        element.css('background-color', Bgcolor);
    });

    // Responsive Menu
    var $offcanvasNav = $("#offcanvasNav a");
    $offcanvasNav.on("click", function () {
        var link = $(this);
        var closestUl = link.closest("ul");
        var activeLinks = closestUl.find(".active");
        var closestLi = link.closest("li");
        var linkStatus = closestLi.hasClass("active");
        var count = 0;

        closestUl.find("ul").slideUp(function () {
            if (++count == closestUl.find("ul").length)
                activeLinks.removeClass("active");
        });

        if (!linkStatus) {
            closestLi.children("ul").slideDown();
            closestLi.addClass("active");
        }
    });

    // Menu Activeion Js
    var cururl = window.location.pathname;
    var curpage = cururl.substr(cururl.lastIndexOf('/') + 1);
    var hash = window.location.hash.substr(1);
    if ((curpage === "" || curpage === "/" || curpage === "admin") && hash === "") {} else {
        $(".header-navigation li").each(function () {
            $(this).removeClass("active");
        });
        if (hash != "")
            $(".header-navigation li a[href='" + hash + "']").parents("li").addClass("active");
        else
            $(".header-navigation li a[href='" + curpage + "']").parents("li").addClass("active");
    }

    // Vertical Menu Js
    const $btnMenu = $(".vmenu-btn");
    const $vmenuContent = $(".vmenu-content");
    $btnMenu.on("click", function (event) {
        $vmenuContent.slideToggle(500);
    });

    $vmenuContent.each(function () {
        var $ul = $(this),
            $lis = $ul.find(".vmenu-item:gt(08)"),
            isExpanded = $ul.hasClass("expanded");
        $lis[isExpanded ? "show" : "hide"]();

        if ($lis.length > 0) {
            $ul.append(
                $(
                    '<li class="expand">' +
                    (isExpanded ?
                        '<a class="minus" href="javascript:void(0);"><span>- Close Categories</span></a>' :
                        '<a href="javascript:void(0);"><span>+ More Categories</span></a>') +
                    "</li>"
                ).on("click", function (event) {
                    var isExpanded = $ul.hasClass("expanded");
                    event.preventDefault();
                    $(this).html(
                        isExpanded ?
                        '<a href="javascript:void(0);"><span>+ More Categories</span></a>' :
                        '<a class="minus" href="javascript:void(0);"><span>- Close Categories</span></a>'
                    );
                    $ul.toggleClass("expanded");
                    $lis.toggle(300);
                })
            );
        }
    });


    // Swiper Hero Slider Five JS
    var mainlSliderThree = new Swiper('.hero-five-slider-container', {
        slidesPerView: 1,
        slidesPerGroup: 1,
        loop: true,
        speed: 700,
        spaceBetween: 0,
        effect: 'fade',
        fadeEffect: {
            crossFade: true,
        },
        pagination: {
            el: '.hero-slide-five-pagination',
            clickable: 'true',
        }
    });



    // Scroll Top Hide Show
    var varWindow = $(window);
    varWindow.on('scroll', function () {
        if ($(this).scrollTop() > 250) {
            $('.scroll-to-top').fadeIn();
        } else {
            $('.scroll-to-top').fadeOut();
        }
    });

    //Scroll To Top Animate
    $('.scroll-to-top').on('click', function () {
        $('html, body').animate({
            scrollTop: 0
        }, 800);
        return false;
    });




})(window.jQuery);
