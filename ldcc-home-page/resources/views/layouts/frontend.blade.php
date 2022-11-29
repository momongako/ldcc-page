<!DOCTYPE html>
<html lang=en-US>
<meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
<head>
    <style>img.lazy {
            min-height: 1px
        }</style>
    <!--Style-->

    {{--    study case--}}
    <link rel=stylesheet href="{{asset(
    Route::currentRouteName() == "case-study"
    ?
    'frontend/assets/wp-content/themes/zikzag/css/style-GroovePorfolio-ver1.3.css':'')}}">
    <link rel=stylesheet href="{{asset(
        Route::currentRouteName() == "case-study"?
        'frontend/assets/wp-content/themes/zikzag/css/style-GrooveFrontpage-ver3.0.css':'')}}">

    {{--  end study case--}}
    <link href="{{ asset(
                            Route::currentRouteName() == "home"|| Route::currentRouteName() =="about.overview"||
                            Route::currentRouteName() == "about.partnership"||
                            Route::currentRouteName() == "case-study"||
                            Route::currentRouteName() == "services.system"
                             ?
                                'frontend/assets/css/home/bootstrap.min.css'
                             :
                                ''
                            )}}" rel="stylesheet"/>
    <link href="{{asset(
                                Route::currentRouteName() == "about.history"
                                ?
                                'frontend/assets/css/history/content.css'
                                :''
                                )}}" type="text/css" rel="stylesheet">
    <link rel=stylesheet href="{{asset(
                                    Route::currentRouteName() == "services.application" ||
                                    Route::currentRouteName() == 'services.cloud' ?
                                    'frontend/assets/wp-content/themes/zikzag/css/style-GrooveFrontpage-ver3.0.css'
                                    :''
                                    )}}">
    <link rel=stylesheet href="{{asset(
                                        Route::currentRouteName() == "services.application"||
                                    Route::currentRouteName() == 'services.cloud'||
                                    Route::currentRouteName() =="about.new_event"
                                     ?
                                        'frontend/assets/wp-content/themes/zikzag/css/style-GrooveFrontpage-ver1.9.css'
                                        :'')}}">
    <link href="{{asset( Route::currentRouteName() == "services.application"||
                         Route::currentRouteName() == 'services.cloud'||
                         Route::currentRouteName() == "case-study"||
                         Route::currentRouteName() == "about.overview"||
                         Route::currentRouteName() == "contact"||
                          Route::currentRouteName() == "services.security"

                         ?
                            'frontend/assets/css/now-ui-kit.css'
                         :  ''
                            )}}" rel="stylesheet"/>
    <link href="{{asset(Route::currentRouteName() == "services.application"||
                                    Route::currentRouteName() == 'services.cloud' ?
                                        'frontend/assets/css/bootstrap.min.css'
                                        :''
                                        )}}" rel="stylesheet"/>
    <link rel=stylesheet href="{{asset(Route::currentRouteName() == 'career.culture' ||
                                        Route::currentRouteName() == 'career.opportunity' ?
                                            'frontend/assets/css/app-carrer.css'
                                            :'')}}">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          type="text/css">

    <link rel="stylesheet" href="{{asset(
                                                Route::currentRouteName() == 'career.opportunityDetail'?
                                            'frontend/assets/css/Job/common.css':''
                                            )}}
                                            ">
    <link rel="stylesheet" href="{{asset(Route::currentRouteName() == 'career.opportunityDetail'?
                                            'frontend/assets/css/Job/chosen.css':'')}}">

    <link rel="stylesheet" href="{{asset(Route::currentRouteName() == 'career.opportunityDetail'?
                                            'frontend/assets/css/Job/jquery.fancybox.css':'')}}">


    <link href=<?php
                switch(Route::currentRouteName()) {
                  case 'case-study':
                       break;
                  case 'career.opportunityDetail':
                        break;
                  case 'case-study.detail1':
                        break;
                  case 'services.security':
                        echo asset('frontend/assets/css/theme.css');
                        break;
                  case 'about.overview':
                        echo asset('frontend/assets/css/theme.css');
                        break;
                  case 'contact':
                        break;
                  case 'services.offshore':
                        echo asset('frontend/assets/css/theme.css');
                        break;
                  case 'services.application':
                        break;
                  case 'services.erp':
                        echo asset('frontend/assets/css/theme.css');
                        break;
                  case 'services.data':
                        echo asset('frontend/assets/css/theme.css');
                        break;
                  case 'products.api_gateway':
                        echo asset('frontend/assets/css/theme.css');
                        break;
                  case 'products.saas':
                        echo asset('frontend/assets/css/theme.css');
                        break;
                  default:
                            echo asset('frontend/assets/css/home/paper-kit.css?v=2.1.0');
                        }
                    ?>
    rel="stylesheet"/>
    <link href="{{ asset(Route::currentRouteName() == 'services.cloud'
                     || Route::currentRouteName() == 'products.building'
                     || Route::currentRouteName() == 'products.parking'
                     ? 'frontend/assets/css/theme.css':'')}}" rel="stylesheet"/>
    <link href=<?php
                    if (asset('/case-study/detail') == substr(url()->current(),0,39)){
                         echo asset('frontend/assets/css/theme.css');
                    }
                 ?> rel="stylesheet"/>
{{--    <?php--}}

{{--        dd(substr(url()->current(),0,39),asset('/case-study/detail'))--}}
{{--    ?>--}}

    <link href="{{ asset('frontend/assets/css/home/demo.css')}}" rel="stylesheet"/>
    <link href="{{ asset('frontend/assets/css/edit-page.css')}}" rel="stylesheet"/>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css"/>
{{--    <link rel="preconnect" href="https://fonts.googleapis.com">--}}
{{--    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>--}}
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
          rel="stylesheet">

{{--    <link rel=preload href="{{ asset('frontend/assets/wp-content/plugins/w3-total-cache/pub/js/lazyload.min.js')}}" as=script>--}}
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <title>Lotte Data Communication Vietnam.</title>
    <meta name="Lotte Data Communication Vietnam.">
    <meta name="robots" content="follow, index, max-snippet:-1, max-video-preview:-1, max-image-preview:large">

    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Lotte Data Communication Vietnam.">
    <meta property="og:description" content="Lotte Data Communication Vietnam.">
    <meta property="og:url" content="https://ldcc.vn/">
    <meta property="og:site_name" content="Lotte Data Communication Vietnam.">
    <meta property="og:updated_time" content="2021-05-26T18:16:17+07:00">
    <meta property="og:image" content="https://ldcc.vn/sites/default/files/logo.png">
    <meta property="og:image:secure_url" content="https://ldcc.vn/sites/default/files/logo.png">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="603">
    <meta property="og:image:alt" content="Lotte Data Communication Vietnam.">
    <meta property="og:image:type" content="image/jpeg">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Lotte Data Communication Vietnam.">
    <meta name="twitter:description" content="Lotte Data Communication Vietnam.">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta
            name="twitter:site" content="@ldcc">
    <meta
            name="twitter:creator" content="@ldcc">
    <meta
            name="twitter:image" content="https://ldcc.vn/sites/default/files/logo.png">
    <link rel=stylesheet id=contact-form-7-css
          href="{{ asset('frontend/assets/wp-content/plugins/contact-form-7/includes/css/styles5fba.css')}}"
          type=text/css media=all>

    <link rel=stylesheet id=wp-job-manager-frontend-css
          href="{{ asset('frontend/assets/wp-content/plugins/wp-job-manager/assets/css/frontendaf9b.css')}}"
          type=text/css media=all>

    <link rel=stylesheet id=zikzag-flaticon-css
          href="{{ asset('frontend/assets/wp-content/themes/zikzag/fonts/flaticon/flaticon1.0f658.css')}}"
          type=text/css media=all>

    <link rel=stylesheet id=zikzag-main-css
          href="{{ asset('frontend/assets/wp-content/themes/zikzag/css/maincss-ver4.7f658.css')}}"
          type=text/css media=all>

    <link rel="stylesheet" href="{{ asset('frontend/assets/css/inline-css.css')}}">

    <link rel=stylesheet id=jquery-swipebox-css
          href="{{ asset('frontend/assets/wp-content/themes/zikzag/js/swipebox/css/swipebox.minf658.css')}}"
          type=text/css media=all>

    <script src="{{ asset('frontend/assets/wp-includes/js/jquery/jquery.minaf6c.js')}}" id=jquery-core-js></script>

    <script src="{{ asset('frontend/assets/wp-includes/js/jquery/jquery-migrate.mind617.js')}}"
            id=jquery-migrate-js></script>

    <script src="https://unpkg.com/@popperjs/core@2/dist/umd/popper.min.js"></script>
    <script src="https://unpkg.com/tippy.js@6/dist/tippy-bundle.umd.js"></script>

    <script>document.documentElement.className = document.documentElement.className.replace('no-js', 'js');</script>
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/no-js-layyload.css')}}">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link
            rel="stylesheet"
            href="https://unpkg.com/tippy.js@6/animations/scale.css"
    />
    <link
            rel=icon href="https://ldcc.vn/sites/default/files/logo.png">
    <style title=dynamic-css class=options-output>
        #side-panel .side-panel_sidebar {
            padding-top: 40px;
            padding-right: 50px;
            padding-bottom: 40px;
            padding-left: 50px;
        }
    </style>
</head>


<body style=" font-family: 'Poppins', sans-serif !important;"
      class="home page-template page-template-GrooveHome page-template-GrooveHome-php page page-id-1222 mega-menu-main-menu mega-menu-career-location page-home-page zikzag elementor-default">
<div id=preloader-wrapper style=background-color:#ffffff;>
    <div id=prk_main_loader class="loader-inner ball-triangle-path">
        <div></div>
        <div></div>
        <div></div>
    </div>
</div>

<h1 style="position: absolute;color: transparent;">Lotte Data Communication Vietnam. RSS</h1>

@include('layouts.header')
@yield('content')
@include('layouts.footer')

</body>

</html>
<!--Slide-->
<script>
    jQuery(window).scroll(function () {
        var scroll = jQuery(window).scrollTop();
        if (scroll >= 50) {
            jQuery(".section-careers-sticky").addClass("she-header");
        }
        else {
            jQuery(".section-careers-sticky").removeClass("she-header");
        }
    });
    jQuery(document).ready(function () {
        if (jQuery(window).width() > 767) {
            jQuery('.swiper-wrapper').slick({
                infinite: true,
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 3000,
                centerMode: true
            });
        }
        else {
            jQuery('.swiper-wrapper').slick({
                dots: true,
                autoplay: true,
                autoplaySpeed: 3000,
                arrows: false,
                infinite: true
            });
        }
    });
    jQuery('.services').click(function () {
        jQuery('html,body').animate({
            scrollTop: jQuery('#services').offset().top - 150
        }, 800);
    });
    jQuery('.cooperation').click(function () {
        jQuery('html,body').animate({
            scrollTop: jQuery('#cooperation').offset().top - 150
        }, 800);
    });
    jQuery('.whygroove').click(function () {
        jQuery('html,body').animate({
            scrollTop: jQuery('#whygroove').offset().top - 150
        }, 800);
    });
    jQuery('.example').click(function () {
        jQuery('html,body').animate({
            scrollTop: jQuery('#example').offset().top - 150
        }, 800);
    });
    jQuery('.faq').click(function () {
        jQuery('html,body').animate({
            scrollTop: jQuery('#faq').offset().top - 150
        }, 800);
    });
</script>
<script>jQuery('.groove-animation-6').click(function () {
        jQuery('html,body').animate({
            scrollTop: jQuery('#frontpage-block-2').offset().top - 100
        }, 800);
    });
    // jQuery(document).ready(function () {
    //     if (jQuery(window).width() > 767) {
    //         jQuery('.swiper-wrapper').slick({
    //             infinite: true,
    //             slidesToShow: 3,
    //             slidesToScroll: 1,
    //             autoplay: true,
    //             autoplaySpeed: 3000,
    //             centerMode: true
    //         });
    //     } else {
    //         jQuery('.swiper-wrapper').slick({
    //             dots: true,
    //             autoplay: true,
    //             autoplaySpeed: 3000,
    //             arrows: false,
    //             infinite: true
    //         });
    //         jQuery('.swiper-wrapper2').slick({
    //             dots: false,
    //             autoplay: false,
    //             autoplaySpeed: 3000,
    //             arrows: true,
    //             infinite: true
    //         });
    //     }
    // });
</script>
