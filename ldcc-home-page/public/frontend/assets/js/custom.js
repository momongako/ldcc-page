jQuery(function($) {

    $('.open-menu').on('click', function(e) {
        e.preventDefault();
        $('.menu').slideToggle();
    });
    var owl = $('.carousel-slide').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        dots: true,
        items: 1,
        autoWidth: true,
        loop: false,
        navText: ['<i class="fa fa-long-arrow-left"></i>', '<i class="fa fa-long-arrow-right"></i>']
    });
    $('.go-to-step').on('click', function() {
        var index = $(this).data('item');
        $(this).addClass('active');
        $(this).siblings('li').removeClass('active');
        owl.trigger('to.owl.carousel', [index - 1, 500]);
    });
    owl.on('changed.owl.carousel', function(event) {
        var index = event.item.index + 1;
        $('[data-item="' + index + '"]').addClass('active');
        $('[data-item="' + index + '"]').siblings('li').removeClass('active');
    });
    var owlMembers = $('.content-carousel-members').owlCarousel({
        margin: 0,
        nav: true,
        dots: true,
        loop: true,
        responsiveClass: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 2,
            },
            768: {
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
    var owlBlog = $('.owl-margin').owlCarousel({
        margin: 30,
        nav: false,
        dots: true,
        loop: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 2,
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        }
    });
    var owlBlog = $('.carousel-blog').owlCarousel({
        margin: 0,
        nav: false,
        dots: true,
        loop: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 2,
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            }
        }
    });
    var owlTesti = $('.carousel-testimonial').owlCarousel({
        margin: 0,
        nav: true,
        dots: true,
        items: 1,
        loop: false,
        navText: ['<i class="fa fa-long-arrow-left"></i>', '<i class="fa fa-long-arrow-right"></i>']
    });
    $('.change-test li').on('click', function() {
        var index = $(this).data('item');
        $(this).addClass('active');
        $(this).siblings('li').removeClass('active');
        owlTesti.trigger('to.owl.carousel', [index - 1, 500]);
    });
    owlTesti.on('changed.owl.carousel', function(event) {
        var index = event.item.index + 1;
        $('.change-test [data-item="' + index + '"]').addClass('active');
        $('.change-test [data-item="' + index + '"]').siblings('li').removeClass('active');
    });
    var owlText = $('.owl-text').owlCarousel({
        loop: false,
        margin: 30,
        nav: false,
        dots: false,
        items: 1
    });
    $('.go-to-step-advisor').on('click', function() {
        var index = $(this).data('item');
        $(this).addClass('active');
        $(this).siblings('li').removeClass('active');
        owlText.trigger('to.owl.carousel', [index - 1, 500]);
    });
    var owlText = $('.owl-services').owlCarousel({
        loop: false,
        margin: 30,
        nav: true,
        dots: false,
        items: 1,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
    });
    var partners = $('.partner-carousel').owlCarousel({
        margin: 30,
        nav: true,
        dots: false,
        loop: true,
        responsiveClass: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 2,
            },
            768: {
                items: 2
            },
            992: {
                items: 4
            }
        }
    });
    //to.owl.carousel
    $('.guide .actions li').on('click', function(e) {
        e.preventDefault();
        var target = $(this).data('target');
        $(this).addClass('active');
        $(this).siblings('li').removeClass('active');
        $('.tab-item').removeClass('active');
        $('#' + target).addClass('active');
    });
    //related-carousel
    var related = $('.related-carousel').owlCarousel({
        margin: 15,
        nav: true,
        dots: false,
        loop: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        responsive: {
            0: {
                items: 1,
                dots: true,
            },
            576: {
                items: 2,
                dots: true,
            },
            768: {
                items: 2,
                dots: true,
            },
            992: {
                items: 2,
                dots: true,
            },
            1200: {
                items: 3
            }
        }
    });
    //carousel-know
    $('.tab-carousel-nav a').on('click', function(e) {
        e.preventDefault();
        let id = $(this).attr('href');
        let carousel = $(id).find('.carousel-know');
        carousel.owlCarousel({
            margin: 0,
            nav: true,
            dots: false,
            loop: true,
            navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
            responsive: {
                0: {
                    items: 1
                },
                576: {
                    items: 2,
                },
                768: {
                    items: 2
                },
                992: {
                    items: 2
                },
                1200: {
                    items: 3
                }
            }
        });
    });
    $('.in.active .carousel-know').owlCarousel({
        margin: 0,
        nav: true,
        dots: false,
        loop: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        responsive: {
            0: {
                items: 1
            },
            576: {
                items: 2,
            },
            768: {
                items: 2
            },
            992: {
                items: 2
            },
            1200: {
                items: 3
            }
        }
    });
    $(window).on('scroll', function() {
        var offset = window.pageYOffset;
        if (offset >= 175) {
            $('header').addClass('fixed_height');
            $('.header-main').addClass('fixed');
            $('body').addClass('header-fixed');
        } else {
            $('header').removeClass('fixed_height');
            $('.header-main').removeClass('fixed');
            $('body').removeClass('header-fixed');
        }
    });

    function getWidth() {
        if (self.innerWidth) {
            return self.innerWidth;
        }

        if (document.documentElement && document.documentElement.clientWidth) {
            return document.documentElement.clientWidth;
        }

        if (document.body) {
            return document.body.clientWidth;
        }
    }

    $('li.has-submenu').on('click', function(e) {
        if (getWidth() >= 1200) {
            // cho click link
        } else {
            $(this).find('.sub-menu').slideToggle('slow');
        }
    });
    // $('.mobiles .guide').on('click', function(e) {
    //     e.preventDefault();
    //     let id = $(this).data('content');
    //     $('.list-mobile .content').removeClass('active');
    //     $('.list-mobile #content-' + id).addClass('active');
    // })
})



jQuery(document).ready(function($) {
    if ($(window.location.hash).length > 0) {
        setTimeout(function() {
            console.log(window.location.hash);
            $('html, body').animate({ scrollTop: parseInt($(window.location.hash).offset().top) }, 1000);
        }, 2000);
    }


    var position = $(window).scrollTop();
    $(window).on("scroll", function() {
        var scroll = $(window).scrollTop();
        if (scroll > position && scroll > 145) {
            $('.header-main').addClass('hide_menu');
            //$('.main-menu .menu').hide(); // hidden megamenu 
        } else {
            $('.header-main').removeClass('hide_menu');
        }
        position = scroll;
        if ($(window).scrollTop() + $(window).height() === $(document).height()) {
            $('.header-main').removeClass('hide_menu');
        }
    });
})