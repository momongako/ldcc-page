<div class="page-header page-header_align_left" style=" margin-bottom: 0px; padding-top: 0px; padding-bottom: 10px;">
    <div class=page-header_wrapper>
        <div class=wgl-container>
            <div class=page-header_content>
                <div class=page-header_breadcrumbs style="color: #666666; font-size: 15px; line-height: 24px;">
                    <div class=breadcrumbs>
                        <a href={{route('home')}} class=home>
                            {{ __('Home') }}
                        </a> <span class=divider></span>
                        <a href={{route('products.api_gateway')}}>
                            {{ __('Products') }}
                        </a>
                        <span id="overview" class=divider>

              </span>
                        <span class=current>
                            {{ __('Smart parking') }}
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<main id=main class="site-main bg-white">
    <link rel=stylesheet href="{{asset('frontend/assets/wp-content/themes/zikzag/css/style-GrooveFrontpage-ver3.0.css')}}">
    <link rel=stylesheet href="{{asset('frontend/assets/wp-content/themes/zikzag/css/style-GrooveFrontpage-ver1.9.css')}}">
    <link href="{{asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/assets/css/now-ui-kit.css?v=1.1.0')}}" rel="stylesheet" />
    <link href="{{asset('frontend/assets/wp-content/themes/zikzag/css/style-SoftWareConsultancy-ver1.1.css')}}" rel="stylesheet" />
    <style>
        .wgl-tabs_header {
            min-height: 150px;
        }
        main {
            line-height: 1.412 !important;
        }
        .groove-text-editor ul li {
            font-weight: 500;
        }
        p.groove-align-center.content-of-title {
            font-size: 15px;
            font-weight: inherit;
        }
    </style>
    <div class=sticky-space style="background-color: #FFFFFF">
        <div class=sticky-container>
            <div class="header section-careers-sticky" style="display: flex;justify-content: center;margin-left: 0">
                <style>
                    .dropbtn_home {
                        padding: 10px;
                        position: relative;
                        display: inline-block;
                    }

                    .dropbtn {
                        /*background-color: #ffffff;*/
                        border-bottom: 1px solid #2b2b2b;
                        font-size: 16px;
                        padding: 10px;
                        margin: auto 0;
                        text-transform: unset;
                        cursor: pointer;
                    }

                    .dropdown {
                        padding: 10px;
                        position: relative;
                        display: inline-block;
                    }

                    .dropdown-content {
                        top: 43px;
                        left: -5px;
                        display: none;
                        position: absolute;
                        background-color: #ffffff !important;
                        min-width: 200px;
                        width: 250px;
                        box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
                        z-index: 100;
                    }

                    .dropdown-content a {
                        color: #df0101;
                        padding: 16px;
                        text-decoration: none;
                        display: block;
                    }

                    .dropdown-content a:hover {
                        background-color: #f1f1f1
                    }

                    .dropdown:hover .dropdown-content {
                        display: block;
                    }

                    .dropdown:hover .dropbtn {
                        background-color: whitesmoke;
                        color: #2b2b2b;
                    }
                </style>
                <div class="dropbtn_home">
                    <a class="dropbtn" href={{route('products.api_gateway')}}>
                        {{ __('Products') }}
                    </a>
                </div>
                <div class="dropdown">

                    <a class="dropbtn">
                        {{ __('Smart parking') }}
                        <i class='bx bx-chevron-down'></i></a>
                    <div class="dropdown-content">
                        <a href={{route('products.api_gateway')}}>
                            {{ __('API GATEWAY') }}
                        </a>
                        <a href={{route('products.saas')}}>
                            {{ __('SAAS') }}
                        </a>
                        <a href={{route('products.building')}}>
                            {{ __('Smart building') }}
                        </a>
                        <a href={{route('products.parking')}}>
                            {{ __('Smart parking') }}
                        </a>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>

    <?php
        //if(\App\Lib\BHelp::getConfigSetting('PRODUCT_PARKING')){
        //    echo \App\Lib\BHelp::getConfigSetting('PRODUCT_PARKING');
        //}
    ?>

<!--      API gateway (1/2)-->
    <section class="section-our-culture frontpage-block-5 groove-section groove-section-boxed"
             style="background-image: url(https://www.ldcc.co.kr/img/pc/sub01/img_smartparking.jpg);height: 100vh">
        <div class="groove-container groove-column-gap-default">
            <div class=groove-row>
                <div class="groove-title-heading title-heading-center  wgl-double_heading">
                    <h2 class="dbl__title-wrapper education-title groove-headingtitle">
                        <span>
                            {{ __('SMART PARKING') }}
                        </span> <br>
                        <span class="cp_under_line"
                              style="background-color: #e50000;width: 80px;height: 2.2px; display: block;clear: both;margin: 0px auto auto;"></span>

                    </h2>
                    {{--<p class="edit-title-smart-parking-product">We create a new level of convenience for your life by using cutting-edge technology <br>--}}
                        {{--in transportation, environment, housing, and business</p>--}}
                </div>
            </div>
        </div>
        <div class="groove-container groove-column-gap-default groove-paddingtop70"
             style="padding-top: 1px; max-width: 1170px;height: 393px">
            <div class=groove-row>
                <div class="groove-element groove-column groove-col-50">
                    <div class=groove-image>
                        <div class=groove-image style="display: flex; justify-content: center">
                            <img alt="Lotte Data Communication Vietnam."
                                 srcset="{{asset( App::getLocale() =='en' ? 'frontend/assets/image/Product/Detail/Smart/img_smartparking2.png' : 'frontend/assets/image/Product/Detail/Smart/img_smartparking2_kr.png' )}}"
                                 class="culture-img-mobile only-pc lazyload"
                                >
                            <noscript><img
                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20548%20548'%3E%3C/svg%3E"
                                        style=width:548px;height:533px; width=548 heigth=533
                                        srcset="{{asset('frontend/assets/image/Product/Detail/Smart/img_smartparking2.png')}}"
                                        class="culture-img-mobile only-pc lazy" alt="Lotte Data Communication Vietnam.">
                            </noscript>
                            <img style=width:315px; alt="Lotte Data Communication Vietnam."
                                 srcset="{{asset('frontend/assets/image/Product/Detail/Smart/img_smartparking2.png')}}"
                                 class="culture-img-mobile only-mobile lazyload"
                                 >
                            <noscript><img
                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20315%20315'%3E%3C/svg%3E"
                                        data-src=https://cdn.groovetechnology.com/wp-content/uploads/2020/07/right-img-1.png
                                        style=width:315px; class="culture-img-mobile only-mobile lazy"
                                        srcset="{{asset('frontend/assets/image/Product/Detail/Smart/img_ibs01.jpg')}}" alt="Lotte Data Communication Vietnam.">
                            </noscript>
                        </div>
                    </div>
                </div>
                <br>
                <br>
                <br>
                <br>
                <div class="groove-element groove-column groove-col-50" style="display: flex; align-items: center">
                    <div class="groove-element groove-infobox edu-block-4-infobox">
                        <div class=groove-info-box-left>
                            <div class=groove-info-box-left>
                                <div class=groove-infobox-content>
                                    <h3 class="infobox-content-title text-center p-3" style="margin-top: 40px;">
                                        {{ __('Smart Parking A smart way to run your parking facilities') }}
                                    </h3>
                                    <p class="text-center edit-center-product">
                                        {{ __('A solution that integrates automatic license plate recognition, available parking space info, vehicle location, settlement and other features that are desired by both parking facility users and management.') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </section>
    <!--      API gateway (2/2)-->
    <section class="section-our-culture frontpage-block-5 groove-section groove-section-boxed">
        <div class="groove-container groove-column-gap-default" style="max-width: 1400px">
            <div class=groove-row>
                <div class="groove-title-heading title-heading-center  wgl-double_heading">

                    <p>
                        <img src="{{asset( App::getLocale() =='en' ? 'frontend/assets/image/Product/Detail/Smart/img_smartparking01.jpg' : 'frontend/assets/image/Product/Detail/Smart/img_smartparking01_kr.jpg')}}" alt="">
                    </p>
                </div>
            </div>
        </div>
    </section>


    <div class="wrapper mt-5">
        <div class="cd-section" id="blogs">
            <!--     *********     BLOGS 1      *********      -->
            <div class="blogs-1" id="blogs-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ml-auto mr-auto">
                            <div class="card card-plain card-blog " style="height: unset!important;">
                                <div class="row mb-3">
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <img class="img img-raised rounded"
                                                 src="{{asset('frontend/assets/image/Product/Detail/Smart/img_smartparking1.jpg')}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-7 m-auto">
                                        <h6 class="category text-info" style="color: #B3000F!important;">
                                            {{ __('Parking control') }}
                                        </h6>

                                        <p class="card-description">
                                            {{ __('Fast entry/exit through automatic license plate recognition.') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-plain card-blog" style="height: unset!important;">
                                <div class="row">
                                    <div class="col-md-7 m-auto">
                                        <h6 class="category text-danger text-right" style="color: #B3000F!important;">
                                            {{ __('Mobile service application') }}
                                        </h6>

                                        <p class="card-description text-right">
                                            {{ __('Enabling service use at any time, from anywhere.') }}
                                        </p>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <img class="img img-raised rounded"
                                                 src="{{asset('frontend/assets/image/Product/Detail/Smart/smartparking2.jpg')}}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-plain card-blog" style="height: unset!important;">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <img class="img img-raised rounded"
                                                 src="{{asset('frontend/assets/image/Product/Detail/Smart/smartparking3.jpg')}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-7 m-auto">
                                        <h6 class="category text-info " style="color: #B3000F!important;">
                                            {{ __('Consolidated management service') }}
                                        </h6>

                                        <p class="card-description">
                                            {{ __('Single Cloud-based system that enables the management of multiple facilities.') }}
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--      -->
    <section class="diff-block-2 groove-section groove-section-boxed" id=longterm>
        <div class="groove-title-heading  title-heading-center  wgl-double_heading banner_reponsive">
            <h2 class="dbl__title-wrapper groove-headingtitle">
                <span>
                    {{ __('NOTABLE EXAMPLES') }}
                </span> <br>
                <span class="cp_under_line"
                      style="background-color: #e50000;width: 80px;height: 3.2px; display: block;clear: both;margin: 0px auto auto;"></span>
            </h2>
            <p class="groove-align-center content-of-title">
                {{ __('Proven system, with applications both in Korea and overseas.') }}
            </p>
        </div>
        <div class="groove-container groove-column-gap-default" style="padding: 20px; max-width: 1170px">
            <div class=groove-row>
                <div class="groove-column groove-col-33">
                    <div class=diff-box style="padding: 20px;display: flex;
                   margin: 5px;
                   flex-direction: column;
                   justify-content: space-around;
                   align-items: center;height: 600px">
                        <h3 class="div-h3" style="text-align: center">
                            {{ __('Shopping malls') }}
                            <br>
                            -
                            {{ __('LOTTE Department Store Seoul/Busan') }}
                        </h3>
                        <div class="groove-image img-ct-sp">
                            <img style="width:300px;padding: 5px;" width=72 alt="What makes us different - Groove Technology - 10"
                                 srcset="{{asset('frontend/assets/image/Product/img_smartparking02_01.jpg')}}"
                                 class=lazyload
                                 >
                            <noscript>
                                <img class=lazy
                                     style=width:72px;height:55px; width=72 heigth=55
                                     alt="What makes us different - Groove Technology - 10">
                            </noscript>
                        </div>
                    </div>
                </div>
                <div class="groove-column groove-col-33">
                    <div class=diff-box style="padding: 20px;display: flex;
                   margin: 5px;
                   flex-direction: column;
                   justify-content: space-around;
                   align-items: center;height: 600px">
                        <div class="groove-image img-ct-sp">
                            <h3 class="div-h3" style="text-align: center;margin-bottom: 32px;">
                                {{ __('Skyscraper') }}
                                <br>

                                - {{ __('LOTTE World Tower & Mall') }}
                            </h3>
                            <img style="width:300px;padding: 5px" alt="What makes us different - Groove Technology - 13"
                                 srcset="{{asset('frontend/assets/image/Product/Detail/Smart/img_smartparking02_02.jpg')}}"
                                 class=lazyload
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                            <noscript>
                                <img class=lazy
                                     style=width:64px;height:55px; width=64 heigth=55
                                     alt="What makes us different - Groove Technology - 13"></noscript>
                        </div>
                    </div>

                </div>
                <div class="groove-column groove-col-33">
                    <div class=diff-box style="padding: 20px;display: flex;
                   margin: 5px;
                   flex-direction: column;
                   justify-content: space-around;
                   align-items: center;
                   height: 600px">
                        <div class="groove-image img-ct-sp">
                            <h3 class="div-h3" style="text-align: center;margin-bottom: 4px;">
                                {{ __('Overseas shopping complexes') }}

                                <br>
                                -
                                {{ __('LOTTE Center Hanoi') }}
                            </h3>

                            <img style="width:300px;padding: 5px; margin-top: 30px;" width=72
                                 alt="What makes us different - Groove Technology - 10"
                                 srcset="{{asset('frontend/assets/image/Product/Detail/Smart/img_smartparking02_03.jpg')}}"
                                 class=lazyload
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                            <noscript>
                                <img class=lazy
                                     style=width:72px;height:55px; width=72 heigth=55
                                     alt="What makes us different - Groove Technology - 10">
                            </noscript>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-4">
            <a href="/case-study" class="btn btn-primary btn-round">
                {{ __('Explore our case studies') }}
            </a>
        </div>
    </section>

</main>