(function ($) {
    "use strict";


 
    
    //============= Preloader carousel ============ 
    
    $(window).on('load', function () {
        $('.preloader').delay(1000).fadeOut(600);
    });

    $(document).ready(function () {
        
   
        jQuery('.venobox').venobox({
            titlePosition: 'bottom'
        });

        jQuery('.about_video').venobox();

        //============= Home page carousel ============ 

        $('.homepage-s').owlCarousel({
            loop: true,
            nav: true,
            items: 1,
            autoplay: true,
            dots: false,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        });
        
        
        $(".homepage-s").on('translate.owl.carousel', function () {
            $('.slider-ext-wrap span').removeClass('fadeInDown animated').hide();
        });
        
        $(".homepage-s").on('translated.owl.carousel', function () {
            $('.slider-ext-wrap span').addClass('fadeInDown animated').show();
        });

        $(".homepage-s").on('translate.owl.carousel', function () {
            $('.slider-ext-wrap h1').removeClass('flipInX animated').hide();
        });
        
        $(".homepage-s").on('translated.owl.carousel', function () {
            $('.slider-ext-wrap h1').addClass('flipInX animated').show();
        });

        $(".homepage-s").on('translate.owl.carousel', function () {
            $('.slider-ext-wrap p').removeClass('fadeInUp animated').hide();
        });
        
        $(".homepage-s").on('translated.owl.carousel', function () {
            $('.slider-ext-wrap p').addClass('fadeInUp animated').show();
        });

        $(".homepage-s").on('translate.owl.carousel', function () {
            $('.slider-ext-wrap a.first-btn').removeClass('fadeInLeft animated').hide();
        });
        
        $(".homepage-s").on('translated.owl.carousel', function () {
            $('.slider-ext-wrap a.first-btn').addClass('fadeInLeft animated').show();
        });

        $(".homepage-s").on('translate.owl.carousel', function () {
            $('.slider-ext-wrap a.sec-btn').removeClass('fadeInRight animated').hide();
        });
        
        $(".homepage-s").on('translated.owl.carousel', function () {
            $('.slider-ext-wrap a.sec-btn').addClass('fadeInRight animated').show();
        });


         //============= Home page one  teacher carousel ============ 

        $('.teacher-car-start').owlCarousel({
            loop: true,
            nav: false,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            dots: false,
            responsive: {
                320: {
                    items: 1
                },
                576: {
                    items: 3
                },
                600: {
                    items: 3
                },
                992: {
                    items: 4
                },
                1200: {
                    items: 5
                }
            }
        });
        
         //============= Home page one  teacher carousel ============ 

        $('.teacher-car-start-two').owlCarousel({
            loop: true,
            nav: false,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            dots: false,
            responsive: {
                320: {
                    items: 1
                },
                576: {
                    items: 2
                },
                768: {
                    items: 3
                },
                1200: {
                    items: 4
                }
            }
        });

         //============= Home page one  testimonial ============ 

        $('.testimonial-carousel').owlCarousel({
            loop: true,
            nav: false,
            autoplay: true,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            dots: false,
            items: 1,
        });
        
        /*home page two parent speach */
        $('.parent-say-content').owlCarousel({
            animateOut: 'flipOutX',
            animateIn: 'fadeIn',
            loop:true,
            nav:false,
            navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
            dots: true,
            items:1,
        })
         //============= Home page two parent speach ============ 
        
        $('.start-popular-tes').owlCarousel({
            animateOut: 'flipOutX',
            animateIn: 'fadeIn',
            loop: true,
            nav: false,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            dots: true,
            items: 1,
        });
        
         //============= Home page two parent speach ============ 
     
        $('.srart-popular-tes').owlCarousel({
            animateOut: 'flipOutX',
            animateIn: 'fadeIn',
            loop: true,
            nav: false,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            dots: false,
            responsive: {
                320: {
                    items: 1
                },
                650: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            }
        });

         //============= Home page two tab-inside carousel ============ 
        
        $('.tab-carousel').owlCarousel({
            loop: true,
            nav: false,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            dots: true,
            items: 1,
        });

        $(".dot-car-start").owlCarousel({
            items: 1,
            dots: true,
            dotsData: true
        });

         //============= Product zoom carousel ============ 
        
       $('.zoom-slider').owlCarousel({
             loop:true,
             nav:true,
             navText: ["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
             dots: false
         });
        
        //============= Testimonial carousel testimonial page ============ 
        $('.tes-car-start').owlCarousel({
            loop: true,
            nav: false,
            navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            dots: true,
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
        
        //============= Search   ============ 
        
        $(".search a").on('click',function () {
            $(".search-input").toggleClass("active");
        });
        
        //============= Cart top show hide toggle   ============ 
        
         $(".cart-area a").on('click',function () {
            $(".cart-drop").toggleClass("active");
        });
        
        //============= Mobile Button  ============ 

        $(".accordion-wrapper .mobile-open").on('click', function () {
            $(".accordion").toggleClass("active");
        });

        $(".accordion .closeme").on('click',function () {
            $(this).parents('.accordion').removeClass("active");
        });

        //============= scrollUp ============ 

        $.scrollUp({
            scrollText: '<i class="fa fa-angle-up"></i>',
            easingType: 'linear',
            scrollSpeed: 900,
            animation: 'fade'
        });

        //============= Product plus minus  ============

        $(".cart-plus-minus-button").append('<div class="dec qtybutton">-</div><div class="inc qtybutton">+</div>');
        $(".qtybutton").on("click", function () {
            var $button = $(this);
            var oldValue = $button.parent().find("input").val();
            if ($button.text() == "+") {
                var newVal = parseFloat(oldValue) + 1;
            } else {
                // Don't allow decrementing below zero
                if (oldValue > 0) {
                    var newVal = parseFloat(oldValue) - 1;
                } else {
                    newVal = 0;
                }
            }
            $button.parent().find("input").val(newVal);
        });

        //============= Zoom Activation  ============

        $("#zoom1").elevateZoom({
            gallery: 'gallery_01',
            cursor: 'pointer',
            galleryActiveClass: "active",
       
        });

        //============= Counteractive  ============
        
        
        $('.counter').counterUp({
            delay: 35,
            time: 5000
        });


        //============= wow js active  ============

       /* var wow = new WOW({
            
            boxClass: 'wow', 
            animateClass: 'animated', 
            offset: 50,
            mobile: false,
            live: false,
            callback: function (box) {
               
            },
            scrollContainer: null,
            resetAnimation: true,
        });
        
        wow.init();*/
        
        
          $("#getting-started")
              .countdown("2018/12/01", function (event) {
                  $(this).text(
                      event.strftime('%D days %H:%M:%S')
                  );
              });
        
    /*---------------------
        countdown
    --------------------- */
        
        $('[data-countdown]').each(function() {
        var $this = $(this), finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function(event) {
        $this.html(event.strftime('<span class="cdown day"><span class="time-count separator">%-D</span> <p class="cdown-tex">Days</p>  </span> <span class="cdown hour"><span class="time-count separator">%-H</span> <p class="cdown-tex">Hours</p>  </span> <span class="cdown minutes"><span class="time-count separator">%M</span> <p class="cdown-tex">Minutes</p>  </span> <span class="cdown"><span class="time-count">%S</span> <p class="cdown-tex">Secounds</p> </span>'));
          });
        });	
        


}); // DOM Ready

    
    //============= price-slider active  ============


    $("#slider-range").slider({
        range: true,
        min: 0,
        max: 600,
        values: [60, 570],
        slide: function (event, ui) {
            $("#amount").val("$" + ui.values[0] + " to $" + ui.values[1]);
        }
    });
    $("#amount").val("$" + $("#slider-range").slider("values", 0) +
        " to $" + $("#slider-range").slider("values", 1));


})(jQuery);
