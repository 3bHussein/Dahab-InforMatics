// -----------------------------

//   js index
/* =================== */
/*  ## preloader
    ## SmartMenu Nav
    ## scroll-up
    ## Typed text
    ## counter
    ## smooth scroll
    ## countdown
    ## owl carousel
    ## WOW
    ## Shuffle JS
    ## Contact Form
    

    

*/
// -----------------------------


(function($) {
    "use strict";



    /*---------------------
    preloader
    --------------------- */

    $(window).on('load', function() {
        $('#preloader').fadeOut('slow', function() { $(this).remove(); });
    });


 
    
    /*-----------------
    sticky
    -----------------*/
    // $(window).on('scroll', function() {
    //     if ($(window).scrollTop() > 85) {
    //         $('header').addClass('navbar-fixed-top');
    //     } else {
    //         $('header').removeClass('navbar-fixed-top');
    //     }
    // });
    

    /*----------------------------
     SmartMenu Nav
    ------------------------------ */
    $('#educusMenuV1').smartmenus({
        subMenusSubOffsetX: 6,
        subMenusSubOffsetY: -8
    });



    $(function () {
        var $mainMenuState = $('#educusMenuV1-state');
        if ($mainMenuState.length) {
            // animate mobile menu
            $mainMenuState.change(function (e) {
                var $menu = $('#educusMenuV1');
                if (this.checked) {
                    $menu.hide().slideDown(250, function () { $menu.css('display', ''); });
                } else {
                    $menu.show().slideUp(250, function () { $menu.css('display', ''); });
                }
            });
            // hide mobile menu beforeunload
            $(window).on('beforeunload unload', function () {
                if ($mainMenuState[0].checked) {
                    $mainMenuState[0].click();
                }
            });
        }
    });


    // Mobile Menu Register Button Position
    $('.educusMenuV1-btn').on('click', function(){
        $('.header-register-btn').toggleClass('mmtoggleactive');
    });

 
    /*-----------------
    scroll-up
    -----------------*/
    $.scrollUp({
        scrollText: '<i class="fa fa-arrow-up" aria-hidden="true"></i>',
        easingType: 'linear',
        scrollSpeed: 1500,
        animation: 'fade'
    });
    

    /*------------------------------
         Typed text
    ------------------------------ */
    if ($('#typed').length > 0) {
        var typed = new Typed('#typed', {
            stringsElement: '#typed-strings',
            smartBackspace: true, // Default value
            typeSpeed: 150,
            backSpeed: 150,
            loop: true,
            
        });
    }
    
    /*------------------------------
         counter
    ------------------------------ */
    $('.counter-up').counterUp();
    
    /*---------------------
    smooth scroll
    --------------------- */
    $('.smoothscroll').on('click', function(e) {
        e.preventDefault();
        var target = this.hash;

        $('html, body').stop().animate({
            'scrollTop': $(target).offset().top - 80
        }, 1200);
    });
    
    /*---------------------
    countdown
    --------------------- */
    $('[data-countdown]').each(function() {
        var $this = $(this),
            finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function(event) {
            $this.html(event.strftime('<span class="cdown days"><span class="time-count">%-D</span> <p>Days</p></span> <span class="cdown hour"><span class="time-count">%-H</span> <p>Hour</p></span> <span class="cdown minutes"><span class="time-count">%M</span> <p>Min</p></span> <span class="cdown second"> <span><span class="time-count">%S</span> <p>Sec</p></span>'));
        });
    });
    
    /*---------------------
    owl carousel
    --------------------- */

    // Service Carousel
    function service_carousel() {
        var owl = $(".service-carousel");
        owl.owlCarousel({
            loop: true,
            margin:0,
            responsiveClass: true,
            navigation: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            nav: true,
            items: 5,
            smartSpeed: 2000,
            dots: false,
            autoplay: false,
            autoplayTimeout: 4000,
            center: true,
            thumbs: false,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                768: {
                    items: 3
                }
            }
        });
    }
    service_carousel();


    // Testimonial Carousel
    function Testimonial_carousel() {
        var owl = $(".testimonial-carousel");
        owl.owlCarousel({
            loop: true,
            margin:0,
            responsiveClass: true,
            navigation: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            nav: true,
            items: 5,
            smartSpeed: 2000,
            dots: false,
            autoplay: false,
            autoplayTimeout: 4000,
            center: true,
            thumbs: true,
            thumbImage: true,
            thumbContainerClass: 'owl-thumbs',
            thumbItemClass: 'owl-thumb-item',
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                760: {
                    items: 1
                }
            }
        });
    }
    Testimonial_carousel();




    // Testimonial Carousel 2
    function Testimonial2_carousel() {
        var owl = $(".testimonial-carouselV2");
        owl.owlCarousel({
            loop: true,
            margin:0,
            responsiveClass: true,
            navigation: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            nav: false,
            items: 5,
            smartSpeed: 2000,
            dots: false,
            autoplay: false,
            autoplayTimeout: 4000,
            center: false,
            thumbs: false,
            // thumbImage: true,
            // thumbContainerClass: 'owl-thumbs',
            // thumbItemClass: 'owl-thumb-item',
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                760: {
                    items: 2
                }
            }
        });
    }
    Testimonial2_carousel();

   
    // Speaker Carousel
    function speaker_carousel() {
        var owl = $(".speaker-carousel");
        owl.owlCarousel({
            loop: true,
            margin:0,
            responsiveClass: true,
            navigation: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            nav: false,
            items: 5,
            smartSpeed: 2000,
            dots: true,
            autoplay: false,
            autoplayTimeout: 4000,
            center: true,
            thumbs: false,
            responsive: {
                0: {
                    items: 1
                },
                480: {
                    items: 1
                },
                768: {
                    items: 3
                }
            }
        });
    }
    speaker_carousel();
    
    /*---------------------
    WOW
    --------------------- */
    var wowSel = 'wow';
    
    var wow = new WOW({
        boxClass: wowSel,
        animateClass: 'animated',
        offset: 0,
        mobile: true,
        live: true,
        callback: function(box) {
            
        },
        scrollContainer: null
    });
    wow.init();
    /**================================ 
    End of WOW 
    ================================**/
    
    /*---------------------
    Shuffle JS
    --------------------- */ 
    if ($('.portfolio-shuffle').length > 0) {

        var Shuffle = window.Shuffle;
        var myShuffle = new Shuffle(document.querySelector('.portfolio-shuffle'), {
        itemSelector: '.image-item',
        sizer: '.my-sizer-element',
        buffer: 1,
        });
        window.jQuery('input[name="shuffle-filter"]').on('change', function (evt) {
        var input = evt.currentTarget;
        if (input.checked) {
            myShuffle.filter(input.value);
        }
        });

    }
    
 
     /*---------------------
    Contact Form
    --------------------- */
     $('.cf-msg').hide();
     $('form#cf button#submit').on('click', function() {

         var firstName = $('#firstName').val();
         var email = $('#email').val();
         var subjectName = $('#subjectName').val();
         var msg = $('#msg').val();
         var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;

         if (!regex.test(email)) {
             alert('Please enter valid email');
             return false;
         }

         firstName = $.trim(firstName);
         subjectName = $.trim(subjectName);
         email = $.trim(email);
         msg = $.trim(msg);

         if (firstName != '' && email != '' && msg != '') {
             var values = "firstName=" + firstName + "&subjectName=" + subjectName + "&email=" + email + " &msg=" + msg;
             $.ajax({
                 type: "POST",
                 url: "assets/php/mail.php",
                 data: values,
                 success: function() {
                     $('#firstName').val('');
                     $('#subjectName').val('');
                     $('#email').val('');
                     $('#msg').val('');

                     $('.cf-msg').fadeIn().html('<div class="alert alert-success"><strong>Success!</strong> Email has been sent successfully.</div>');
                     setTimeout(function() {
                         $('.cf-msg').fadeOut('slow');
                     }, 4000);
                 }
             });
         } else {
             $('.cf-msg').fadeIn().html('<div class="alert alert-danger"><strong>Warning!</strong> Please fillup the informations correctly.</div>')
         }
         return false;
     });

}(jQuery));











