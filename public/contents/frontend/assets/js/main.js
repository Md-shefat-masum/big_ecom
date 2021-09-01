(function ($) {
    "use strict";

    new WOW().init();

    /*---background image---*/
    function dataBackgroundImage() {
        $('[data-bgimg]').each(function () {
            var bgImgUrl = $(this).data('bgimg');
            $(this).css({
                'background-image': 'url(' + bgImgUrl + ')', // + meaning concat
            });
        });
    }

    $(window).on('load', function () {
        dataBackgroundImage();
    });

    /*---stickey menu---*/
    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop();
        if (scroll < 100) {
            $(".sticky-header").removeClass("sticky");
        } else {
            $(".sticky-header").addClass("sticky");
        }
    });

    /*---jQuery MeanMenu---*/
    $('.mobile-menu nav').meanmenu({
        meanScreenWidth: "9901",
        meanMenuContainer: ".mobile-menu",
        onePage: true,
    });

    /*---slider activation---*/
    $('.slider3_carousel').owlCarousel({
        animateOut: 'fadeOut',
        autoplay: true,
        loop: true,
        nav: false,
        autoplay: false,
        autoplayTimeout: 8000,
        items: 1,
        dots: true,
    });



    $('.modal').on('shown.bs.modal', function (e) {
        $('.product_navactive').resize();
    })

    $('.product_navactive a').on('click', function (e) {
        e.preventDefault();

        var $href = $(this).attr('href');

        $('.product_navactive a').removeClass('active');
        $(this).addClass('active');

        $('.product-details-large .tab-pane').removeClass('active show');
        $('.product-details-large ' + $href).addClass('active show');

    })


    /*--- Tooltip Active---*/
    $('.action_links ul li a,.add_to_cart a,.footer_social_link ul li a').tooltip({
        animated: 'fade',
        placement: 'top',
        container: 'body'
    });

    /*--- niceSelect---*/
    $('.select_option').niceSelect();

    /*---  Accordion---*/
    $(".faequently-accordion").collapse({
        accordion: true,
        open: function () {
            this.slideDown(300);
        },
        close: function () {
            this.slideUp(300);
        }
    });

    /*--- counterup activation ---*/
    $('.counter_number').counterUp({
        delay: 10,
        time: 1000
    });

    /*---  ScrollUp Active ---*/
    $.scrollUp({
        scrollText: '<i class="fa fa-angle-double-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });

    /*---countdown activation---*/

    $('[data-countdown]').each(function () {
        var $this = $(this),
            finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function (event) {
            $this.html(event.strftime('<div class="countdown_area"><div class="single_countdown"><div class="countdown_number">%D</div><div class="countdown_title">days</div></div><div class="single_countdown"><div class="countdown_number">%H</div><div class="countdown_title">hours</div></div><div class="single_countdown"><div class="countdown_number">%M</div><div class="countdown_title">mins</div></div><div class="single_countdown"><div class="countdown_number">%S</div><div class="countdown_title">secs</div></div></div>'));

        });
    });


    /*---niceSelect---*/
    $('.niceselect_option').niceSelect();

    /*---elevateZoom---*/
    // $("#zoom1").elevateZoom({
    //     gallery: 'gallery_01',
    //     responsive: true,
    //     cursor: 'crosshair',
    //     zoomType: 'inner'

    // });

    /*---widget sub categories---*/
    $(".widget_sub_categories > a").on("click", function () {
        $(this).toggleClass('active');
        $('.widget_dropdown_categories').slideToggle('medium');
    });


    /*---categories slideToggle---*/
    $(".categories_title").on("click", function () {
        $(this).toggleClass('active');
        $('.categories_menu_toggle').slideToggle('medium');
    });

    /*---widget sub categories---*/
    $(".sub_categories1 > a").on("click", function () {
        $(this).toggleClass('active');
        $('.dropdown_categories1').slideToggle('medium');
    });

    /*---widget sub categories---*/
    $(".sub_categories2 > a").on("click", function () {
        $(this).toggleClass('active');
        $('.dropdown_categories2').slideToggle('medium');
    });

    /*---widget sub categories---*/
    $(".sub_categories3 > a").on("click", function () {
        $(this).toggleClass('active');
        $('.dropdown_categories3').slideToggle('medium');
    });

    /*----------  Category more toggle  ----------*/

    $(".categories_menu_toggle li.hidden").hide();
    $("#more-btn").on('click', function (e) {

        e.preventDefault();
        $(".categories_menu_toggle li.hidden").toggle(500);
        var htmlAfter = '<i class="fa fa-minus" aria-hidden="true"></i> Less Categories';
        var htmlBefore = '<i class="fa fa-plus" aria-hidden="true"></i> More Categories';


        if ($(this).html() == htmlBefore) {
            $(this).html(htmlAfter);
        } else {
            $(this).html(htmlBefore);
        }
    });


    /*---shop grid activation---*/
    $('.shop_toolbar_btn > button').on('click', function (e) {

        e.preventDefault();

        $('.shop_toolbar_btn > button').removeClass('active');
        $(this).addClass('active');

        var parentsDiv = $('.shop_wrapper');
        var viewMode = $(this).data('role');


        parentsDiv.removeClass('grid_3 grid_4 grid_5 grid_list').addClass(viewMode);

        if (viewMode == 'grid_3') {
            parentsDiv.children().addClass('col-lg-4 col-md-4 col-sm-6').removeClass('col-lg-3 col-cust-5 col-12');

        }

        if (viewMode == 'grid_4') {
            parentsDiv.children().addClass('col-lg-3 col-md-4 col-sm-6').removeClass('col-lg-4 col-cust-5 col-12');
        }

        if (viewMode == 'grid_list') {
            parentsDiv.children().addClass('col-12').removeClass('col-lg-3 col-lg-4 col-md-4 col-sm-6 col-cust-5');
        }

    });



    /*---search box slideToggle---*/
    $(".search_box > a").on("click", function () {
        $(this).toggleClass('active');
        $('.search_widget').slideToggle('medium');
    });


    /*---mini cart activation---*/
    $('.mini_cart_wrapper > a').on('click', function () {
        $('.mini_cart,.off_canvars_overlay').addClass('active')
    });

    $('.mini_cart_close,.off_canvars_overlay').on('click', function () {
        $('.mini_cart,.off_canvars_overlay').removeClass('active')
    });


    /*---canvas menu activation---*/
    $('.canvas_open').on('click', function () {
        $('.Offcanvas_menu_wrapper,.off_canvars_overlay').addClass('active')
    });

    $('.canvas_close,.off_canvars_overlay').on('click', function () {
        $('.Offcanvas_menu_wrapper,.off_canvars_overlay').removeClass('active')
    });


    /*---Off Canvas Menu---*/
    var $offcanvasNav = $('.offcanvas_main_menu'),
        $offcanvasNavSubMenu = $offcanvasNav.find('.sub-menu');
    $offcanvasNavSubMenu.parent().prepend('<span class="menu-expand"><i class="fa fa-angle-down"></i></span>');

    $offcanvasNavSubMenu.slideUp();

    $offcanvasNav.on('click', 'li a, li .menu-expand', function (e) {
        var $this = $(this);
        if (($this.parent().attr('class').match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/)) && ($this.attr('href') === '#' || $this.hasClass('menu-expand'))) {
            e.preventDefault();
            if ($this.siblings('ul:visible').length) {
                $this.siblings('ul').slideUp('slow');
            } else {
                $this.closest('li').siblings('li').find('ul:visible').slideUp('slow');
                $this.siblings('ul').slideDown('slow');
            }
        }
        if ($this.is('a') || $this.is('span') || $this.attr('clas').match(/\b(menu-expand)\b/)) {
            $this.parent().toggleClass('menu-open');
        } else if ($this.is('li') && $this.attr('class').match(/\b('menu-item-has-children')\b/)) {
            $this.toggleClass('menu-open');
        }
    });


    /*js ripples activation*/
    $('.js-ripples').ripples({
        resolution: 512,
        dropRadius: 20,
        perturbance: 0.04
    });


})(jQuery);
