var App = function() {
    var MediaSize = {
        xl: 1200,
        lg: 992,
        md: 991,
        sm: 576
    };
    var ToggleClasses = {
        headerhamburger: '.toggle-sidebar',
        inputFocused: 'input-focused',
    };

    var Selector = {
        mainHeader: '.header.navbar',
        headerhamburger: '.toggle-sidebar',
        fixed: '.fixed-top',
        mainContainer: '.main-container',
        sidebar: '#sidebar',
        sidebarContent: '#sidebar-content',
        sidebarStickyContent: '.sticky-sidebar-content',
        ariaExpandedTrue: '#sidebar [aria-expanded="true"]',
        ariaExpandedFalse: '#sidebar [aria-expanded="false"]',
        contentWrapper: '#content',
        contentWrapperContent: '.container',
        mainContentArea: '.main-content',
        searchFull: '.toggle-search',
        overlay: {
            sidebar: '.overlay',
            cs: '.cs-overlay',
            search: '.search-overlay'
        }
    };

    var categoryScroll = {
        scrollCat: function() {
            var sidebarWrapper = document.querySelectorAll('.sidebar-wrapper [aria-expanded="true"]')[0];
            var sidebarWrapperTop = sidebarWrapper.offsetTop - 12;
            setTimeout(function(){ $('.menu-categories').animate({ scrollTop: sidebarWrapperTop }, 500); }, 500);
        }
    }

    var toggleFunction = {
        sidebar: function($recentSubmenu) {
            $('.sidebarCollapse').on('click', function (sidebar) {
                sidebar.preventDefault();
                getSidebar = $('.sidebar-wrapper');
                if ($recentSubmenu === true) {
                    if ($('.collapse.submenu').hasClass('show')) {
                        $('.submenu.show').addClass('mini-recent-submenu');
                        getSidebar.find('.collapse.submenu').removeClass('show');
                        getSidebar.find('.collapse.submenu').removeClass('show');
                        $('.collapse.submenu').parents('li.menu').find('.dropdown-toggle').attr('aria-expanded', 'false');
                    } else {
                        if ($(Selector.mainContainer).hasClass('sidebar-closed')) {
                            if ($('.collapse.submenu').hasClass('recent-submenu')) {
                                getSidebar.find('.collapse.submenu.recent-submenu').addClass('show');
                                $('.collapse.submenu.recent-submenu').parents('.menu').find('.dropdown-toggle').attr('aria-expanded', 'true');
                                $('.submenu').removeClass('mini-recent-submenu');

                            } else {
                                $('li.active .submenu').addClass('recent-submenu');
                                getSidebar.find('.collapse.submenu.recent-submenu').addClass('show');
                                $('.collapse.submenu.recent-submenu').parents('.menu').find('.dropdown-toggle').attr('aria-expanded', 'true');
                                $('.submenu').removeClass('mini-recent-submenu');
                            }
                        }
                    }
                }
                $(Selector.mainContainer).toggleClass("sidebar-closed");
                $(Selector.mainHeader).toggleClass('expand-header');
                $(Selector.mainContainer).toggleClass("sbar-open");
                $('.overlay').toggleClass('show');
                $('html,body').toggleClass('sidebar-noneoverflow');
            });
        },
        onToggleSidebarSubmenu: function() {
            $('.sidebar-wrapper').on('mouseenter mouseleave', function(event) {
                event.preventDefault();
                if ($('body').hasClass('alt-menu')) {
                    if ($('.main-container').hasClass('sidebar-closed')) {
                        if (event.type === 'mouseenter') {
                            $('li .submenu').removeClass('show');
                            $('li.active .submenu').addClass('recent-submenu');
                            $('li.active').find('.collapse.submenu.recent-submenu').addClass('show');
                            $('.collapse.submenu.recent-submenu').parents('.menu').find('.dropdown-toggle').attr('aria-expanded', 'true');
                        } else if (event.type === 'mouseleave') {
                            $('li').find('.collapse.submenu').removeClass('show');
                            $('.collapse.submenu.recent-submenu').parents('.menu').find('.dropdown-toggle').attr('aria-expanded', 'false');
                            $('.collapse.submenu').parents('.menu').find('.dropdown-toggle').attr('aria-expanded', 'false');
                        }
                    }
                } else {
                    if ($('.main-container').hasClass('sidebar-closed')) {
                        $('.collapse.submenu.recent-submenu').parents('.menu').find('.dropdown-toggle').attr('aria-expanded', 'true');
                        $(this).find('.submenu.recent-submenu').toggleClass('show');
                    }

                }
            })
        },
        offToggleSidebarSubmenu: function () {
            $('.sidebar-wrapper').off('mouseenter mouseleave');
        },
        overlay: function() {
            $('#dismiss, .overlay, cs-overlay').on('click', function () {
                // hide sidebar
                $(Selector.mainContainer).addClass('sidebar-closed');
                $(Selector.mainContainer).removeClass('sbar-open');
                // hide overlay
                $('.overlay').removeClass('show');
                $('html,body').removeClass('sidebar-noneoverflow');
            });
        },
        search: function() {
            $(Selector.searchFull).click(function(event) {
               $(this).parents('.search-animated').find('.search-full').addClass(ToggleClasses.inputFocused);
               $(this).parents('.search-animated').addClass('show-search');
               $(Selector.overlay.search).addClass('show');
               $(Selector.overlay.search).addClass('show');
            });

            $(Selector.overlay.search).click(function(event) {
               $(this).removeClass('show');
               $(Selector.searchFull).parents('.search-animated').find('.search-full').removeClass(ToggleClasses.inputFocused);
               $(Selector.searchFull).parents('.search-animated').removeClass('show-search');
            });
        }
    }

    var inBuiltfunctionality = {
        mainCatActivateScroll: function() {
            const ps = new PerfectScrollbar('.menu-categories', {
                wheelSpeed:.5,
                swipeEasing:!0,
                minScrollbarLength:40,
                maxScrollbarLength:300
            });
        },
        preventScrollBody: function() {
            $('#sidebar').bind('mousewheel DOMMouseScroll', function(e) {
                var scrollTo = null;

                if (e.type == 'mousewheel') {
                    scrollTo = (e.originalEvent.wheelDelta * -1);
                }
                else if (e.type == 'DOMMouseScroll') {
                    scrollTo = 40 * e.originalEvent.detail;
                }

                if (scrollTo) {
                    e.preventDefault();
                    $(this).scrollTop(scrollTo + $(this).scrollTop());
                }
            });
        }
    }

    /*
        Production Functionality - Only for Online files not for user files
    */
    var productionFunctionality = {
        createButtons: function() {
            var form = [
                {
                    type: 'anchor',
                    label: 'Buy Now',
                    target: '_blank'
                },
                {
                    type: 'button',
                    label: ''
                }
            ];
            
            var element = document.createElement("div");
            var wrapHtmlAttr = document.createAttribute("class");
            wrapHtmlAttr.value = "online-actions";
            element.style.cssText = "position: fixed;bottom: 43px;left: 21px;z-index: 1025;";
            element.setAttributeNode(wrapHtmlAttr);
            for (var i = 0; i < form.length; i++) {
                var obj = form[i];
                switch (obj.type) {
                    case "button":
                        var button = document.createElement('button');
                        var textButton = document.createTextNode(obj.label);
                        button.innerHTML = '<svg style="width: 15px; height: 15px; stroke-width: 2; vertical-align: middle;" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-arrow-up"><line x1="12" y1="19" x2="12" y2="5"></line><polyline points="5 12 12 5 19 12"></polyline></svg>';
                        button.style.cssText = " margin-right: 6px;padding: 6px 9px; display: none; border: none;box-shadow: 0 10px 20px -10px #4801FF; background-image: linear-gradient(-225deg, #AC32E4 0%, #7918F2 48%, #4801FF 100%);";
                        button.classList.add('btn', 'btn-secondary', 'scroll-top-btn');
                        button.appendChild(textButton);
                        element.appendChild(button);
                        break;
            
                    case "anchor":
                        var anchor = document.createElement('a');
                        var textanchor = document.createTextNode(obj.label);
                        anchor.setAttribute('href',"https://themeforest.net/item/cork-responsive-admin-dashboard-template/25582188");
                        anchor.style.cssText = "border: none; background-image: linear-gradient(to right, #ff0844 20%, #ffb199 141%);box-shadow: 0 10px 20px -10px #ff0844;";
                        anchor.classList.add('btn', 'btn-danger', 'buy-btn');
                        anchor.target = obj.target;
                        anchor.appendChild(textanchor);
                        element.appendChild(anchor);
                        break;
                }
                var div = document.querySelector("body");
                div.appendChild(element);
            }
        },

        scrollTop: function() {
            $(document).on('click', '.scroll-top-btn', function(event) {
                event.preventDefault();
                var body = $("html, body");
                body.stop().animate({scrollTop:0}, 500, 'swing');
            });
        },

        checkScrollPosition: function() {
            $(document).scroll(function(event) {
                var lanWrapper = $('.layout-spacing');
                var elementScrollToTop = $('.scroll-top-btn');
                var windowScroll = $(window).scrollTop()
                var elementoffset = lanWrapper.offset().top;
            
                // Check if window scroll > or == element offset?
                if (windowScroll >= elementoffset) {
                elementScrollToTop.addClass('d-inline-block');
                } else if (windowScroll < elementoffset) {
                elementScrollToTop.removeClass('d-inline-block');
                }
            });
        }
    }

    var _mobileResolution = {
        onRefresh: function() {
            var windowWidth = window.innerWidth;
            if ( windowWidth <= MediaSize.md ) {
                categoryScroll.scrollCat();
                toggleFunction.sidebar();
            }
        },
        
        onResize: function() {
            $(window).on('resize', function(event) {
                event.preventDefault();
                var windowWidth = window.innerWidth;
                if ( windowWidth <= MediaSize.md ) {
                    toggleFunction.offToggleSidebarSubmenu();
                }
            });
        }
        
    }

    var _desktopResolution = {
        onRefresh: function() {
            var windowWidth = window.innerWidth;
            if ( windowWidth > MediaSize.md ) {
                categoryScroll.scrollCat();
                toggleFunction.sidebar(true);
                toggleFunction.onToggleSidebarSubmenu();
            }
        },
        
        onResize: function() {
            $(window).on('resize', function(event) {
                event.preventDefault();
                var windowWidth = window.innerWidth;
                if ( windowWidth > MediaSize.md ) {
                    toggleFunction.onToggleSidebarSubmenu();
                }
            });
        }
        
    }

    function sidebarFunctionality() {
        function sidebarCloser() {

            if (window.innerWidth <= 991 ) {


                if (!$('body').hasClass('alt-menu')) {

                    $("#container").addClass("sidebar-closed");
                    $('.overlay').removeClass('show');
                } else {
                    $(".navbar").removeClass("expand-header");
                    $('.overlay').removeClass('show');
                    $('#container').removeClass('sbar-open');
                    $('html, body').removeClass('sidebar-noneoverflow');
                }

            } else if (window.innerWidth > 991 ) {

                if (!$('body').hasClass('alt-menu')) {

                    $("#container").removeClass("sidebar-closed");
                    $(".navbar").removeClass("expand-header");
                    $('.overlay').removeClass('show');
                    $('#container').removeClass('sbar-open');
                    $('html, body').removeClass('sidebar-noneoverflow');
                } else {
                    $('html, body').addClass('sidebar-noneoverflow');
                    $("#container").addClass("sidebar-closed");
                    $(".navbar").addClass("expand-header");
                    $('.overlay').addClass('show');
                    $('#container').addClass('sbar-open');
                    $('.sidebar-wrapper [aria-expanded="true"]').parents('li.menu').find('.collapse').removeClass('show');
                }
            }

        }

        function sidebarMobCheck() {
            if (window.innerWidth <= 991 ) {

                if ( $('.main-container').hasClass('sbar-open') ) {
                    return;
                } else {
                    sidebarCloser()
                }
            } else if (window.innerWidth > 991 ) {
                sidebarCloser();
            }
        }

        sidebarCloser();

        $(window).resize(function(event) {
            sidebarMobCheck();
        });

    }

    return {
        init: function() {
            toggleFunction.overlay();
            toggleFunction.search();
            /*
                Desktop Resoltion fn
            */
            _desktopResolution.onRefresh();
            _desktopResolution.onResize();

            /*
                Mobile Resoltion fn
            */
            _mobileResolution.onRefresh();            
            _mobileResolution.onResize();

            sidebarFunctionality();

            /*
                In Built Functionality fn
            */
            inBuiltfunctionality.mainCatActivateScroll();
            inBuiltfunctionality.preventScrollBody();

            /*
                Production Functionality - Only for Online files not for user files
            */
                productionFunctionality.createButtons();
                productionFunctionality.scrollTop();
                productionFunctionality.checkScrollPosition();
        }
    }

}();
