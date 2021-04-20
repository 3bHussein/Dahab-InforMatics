jQuery(document).ready(function () {

    //masonry
    jQuery('#masonry').masonry();

    //Select2
    jQuery(".basic-single").select2({
        theme: "bootstrap"
    });
    //Datepicker
   jQuery('.datepicker').datepicker({
        autoclose: true
    });
    //File ipload
    jQuery('.file-upload').file_upload();

    //Tooltips
    jQuery('[data-toggle="tooltip"]').tooltip();

//back to top
   jQuery('body').append('<div id="toTop" class="btn btn-top"><span class="ti-arrow-up"></span></div>');
    jQuery(window).scroll(function () {
        if (jQuery(this).scrollTop() !== 0) {
            jQuery('#toTop').fadeIn();
        } else {
            jQuery('#toTop').fadeOut();
        }
    });
    jQuery('#toTop').on('click', function () {
        $("html, body").animate({scrollTop: 0}, 600);
        return false;
    });

    //navbar sticky
    var windows = jQuery(window);
    var stick = jQuery(".header-sticky");
    windows.on('scroll', function () {
        var scroll = windows.scrollTop();
        if (scroll < 245) {
            stick.removeClass("sticky");
        } else {
            stick.addClass("sticky");
        }
    });


    //navbar dropdown
    jQuery('.dropdown-menu a.dropdown-toggle').on('click', function (e) {
        var $el = $(this);
        var $parent = $(this).offsetParent(".dropdown-menu");
        if (!$(this).next().hasClass('show')) {
            $(this).parents('.dropdown-menu').first().find('.show').removeClass("show");
        }
        var $subMenu = $(this).next(".dropdown-menu");
        $subMenu.toggleClass('show');

        jQuery(this).parent("li").toggleClass('show');

        jQuery(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function (e) {
            $('.dropdown-menu .show').removeClass("show");
        });

        if (!$parent.parent().hasClass('navbar-nav')) {
            $el.next().css({"top": $el[0].offsetTop, "left": $parent.outerWidth() - 4});
        }
        return false;
    });


    /*------------------------------------
     Mobile Menu
     -------------------------------------- */

    jQuery("#mobile-menu").metisMenu();

    jQuery("#sidebar").mCustomScrollbar({
        theme: "minimal",
        scrollInertia: 100
    });

    jQuery('#dismiss, .overlay').on('click', function () {
        jQuery('#sidebar').removeClass('active');
        jQuery('.overlay').fadeOut();
    });

    jQuery('#sidebarCollapse').on('click', function () {
        jQuery('#sidebar').addClass('active');
        jQuery('.overlay').fadeIn();
    });



    //Slider Preloader 
    var slider_preloader_status = jQuery(".slider_preloader_statusr");
    var slider_preloader = jQuery(".slider_preloader");
    var header_slider = jQuery(".header-slider");
    slider_preloader_status.fadeOut();
    slider_preloader.delay(350).fadeOut('slow');
    header_slider.removeClass("header-slider-preloader");

    // Slider JS
    jQuery('#animation-slide').owlCarousel({
        autoHeight: true,
        items: 1,
        loop: true,
        autoplay: false,
        dots: true,
        nav: true,
        autoplayTimeout: 7000,
        navText: ["<i class='ti-angle-left'></i>", "<i class='ti-angle-right'></i>"],
        //animateIn: "fadeIn",
        //animateOut: "fadeIn",
        autoplayHoverPause: false,
        touchDrag: true,
        mouseDrag: true
    });
    jQuery("#animation-slide").on("translate.owl.carousel", function () {
        jQuery(this).find(".owl-item .slide-text > *").removeClass("fadeInUp animated").css("opacity", "0");
        jQuery(this).find(".owl-item .slide-img").removeClass("fadeInRight animated").css("opacity", "0");
    });
    jQuery("#animation-slide").on("translated.owl.carousel", function () {
        jQuery(this).find(".owl-item.active .slide-text > *").addClass("fadeInUp animated").css("opacity", "1");
        jQuery(this).find(".owl-item.active .slide-img").addClass("fadeInRight animated").css("opacity", "1");
    });

    //Smooth Page Scrolling in jQuery
    jQuery('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function () {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && location.hostname === this.hostname) {
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            if (target.length) {
                $('html, body').animate({
                    scrollTop: (target.offset().top - 48)
                }, 1000, "easeInOutExpo");
                return false;
            }
        }
    });

    //Page header carousel
    jQuery('.page-header-carousel').owlCarousel({
        loop: true,
        dots: false,
        nav: true,
        navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            }
        }
    });

    //Owl testimonial
    jQuery('.owl-testimonial').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        navText: ['<i class="ti-angle-left"></i>', '<i class="ti-angle-right"></i>'],
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
                nav: true
            },
            600: {
                items: 1,
                nav: false
            },
            1000: {
                items: 1,
                nav: true,
                loop: false
            }
        }
    });


jQuery( ".pagination ul li a" ).addClass( "page-link" );
 jQuery( ".pagination ul li a" ).removeClass( "page-numbers" );
jQuery( ".pagination ul li a " ).removeClass( "prev" );
 jQuery( ".pagination ul li a " ).removeClass( "next" );
jQuery( ".pagination  li span" ).removeClass( "page-numbers" );
jQuery( ".pagination  li span" ).addClass( "page-link" );
 jQuery( ".current" ).parent().addClass( "active" );

});    









