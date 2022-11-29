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
                            {{ __('Smart building') }}s
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<main id=main class="site-main bg-white">
    <link href="{{asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{asset('frontend/assets/css/now-ui-kit.css?v=1.1.0')}}" rel="stylesheet" />
    <link href="{{asset('frontend/assets/css/history/content.css')}}" type="text/css" rel="stylesheet">
    <style>
        p{
            font-size: 15px;
            font-weight: inherit;
        }
        .wgl-tabs_header {
            min-height: 150px;
        }

        .groove-text-editor ul li {
            font-weight: 500;
        }
        p.groove-align-center.content-of-title {
            margin-bottom: 40px;
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
                    <a class="dropbtn" href={{route('products.api_gateway')}}>{{ __('Products') }}</a>
                </div>
                <div class="dropdown">

                    <a class="dropbtn">{{ __('Smart building') }} <i class='bx bx-chevron-down'></i></a>
                    <div class="dropdown-content">
                        <a href={{route('products.api_gateway')}}> {{ __('API GATEWAY') }}</a>
                        <a href={{route('products.saas')}}> {{ __('SAAS') }}</a>
                        <a href={{route('products.building')}}>{{ __('Smart building') }}</a>
                        <a href={{route('products.parking')}}>{{ __('Smart parking') }}</a>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>
    <?php
        //if(\App\Lib\BHelp::getConfigSetting('PRODUCT_BUILDING')){
        //    echo \App\Lib\BHelp::getConfigSetting('PRODUCT_BUILDING');
        //}
    ?>

<!-- Start -->
    <section class="section-our-culture frontpage-block-5 groove-section groove-section-boxed">
        <div class="groove-container groove-column-gap-default">
            <div class=groove-row>
                <div class="groove-title-heading title-heading-center  wgl-double_heading">

                    <h2 class="dbl__title-wrapper education-title groove-headingtitle mb-2">
                        <span>
                            {{ __('SMART BUILDING MANAGEMENT') }}
                        </span> <br>
                        <span class="cp_under_line"
                              style="background-color: #e50000;width: 80px;height: 2.2px; display: block;clear: both;margin: 0px auto auto;"></span>

                    </h2>
                    <p>
                        {{ __('Cutting-edge IoT-based system for safer,  more efficient building management.') }}
                    </p>
                </div>
            </div>
        </div>
        <div class="groove-container groove-column-gap-default" style="max-width: 1400px">
            <div class=groove-row>
                <div class="groove-title-heading title-heading-center  wgl-double_heading">
                    <p>
                        <img srcset="{{asset( App::getLocale() =='en'? 'frontend/assets/image/Product/Detail/Smart/img_ibs01.jpg' :'frontend/assets/image/Product/Detail/Smart/img_ibs01_kr.jpg')}}" alt="">
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="section-our-culture frontpage-block-5 groove-section groove-section-boxed"
             style="background: url(https://www.ldcc.co.kr/img/pc/sub1/bg_ibs.jpg) no-repeat 50% 0;background-size: cover;">

        <div id="container">
            <div id="content" class="content"
                 style="background: url(https://www.ldcc.co.kr/img/pc/sub1/bg_ibs.jpg) no-repeat 50% 0 !important; background-size: cover !important;">
                <div class="groove-container groove-column-gap-default">
                    <div class=groove-row>
                        <div class="groove-title-heading title-heading-center  wgl-double_heading row justify-content-center">

                            <h2 class="text-light p-5 text-center ">
                                {{ __('Experience the specialized services offered by LOTTE Data Communication, the creator of the IT system employed by the LOTTE World Tower, one of the tallest buildings in the world') }}
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="content_full bg_history">
                    <div class="content_w1280">
                        <div class="pr">
                            <div class="article_nav">

                                <a class="article_nav_btn article_nav_next">
                                    <i class="article_nav_pic">&gt;</i>
                                    <div class="article_nav_title">

                                        <div class="article_nav_table">

                                            <div class="article_nav_cell">
                                                <p>Notices</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="content_w1440">
                        <span class="timeline sceneTrigger"></span>
                        <h4 class="history_year text-light" style="border: 2px solid #ffffff !important;">
                            {{ __('SMART BUILDING') }}
                        </h4>
                        <ul class="list_history">
                            <!-- add 2022 -->


                            <!-- end add 2021 -->
                            <li class="point timeline02">
                                <div class="spot_history" style="border-left:none !important;">
                                    <h2 class="text-light font-weight-bold">
                                        {{ __('System implementation for Korea’s tallest building') }}
                                    </h2>
                                    <ul>
                                        <li class="text-light">
                                            {{ __('Our experience implementing the IBS for the LOTTE World Tower, a 123-story, 555m-tall vertical city of the future,') }}
                                        </li>
                                    </ul>

                                </div>
                                <div class="img_history"
                                     style="padding-top: 30px!important;border-right: 1px solid #ffffff !important;">
                                    <img src="{{asset('frontend/assets/image/Product/ico_ibs01.png')}}" alt="">
                                </div>
                                <span class="timeline02 sceneTrigger"></span>

                            </li>
                            <li class="point timeline01">
                                <div class="spot_history" style="padding-bottom: unset;padding-top: 60px;">
                                    <h2 class="text-light">
                                        {{ __('20+ years of know-') }}
                                    </h2>
                                    <ul>
                                        <li class="text-light">
                                            {{ __('Our wealth of experience and professionalism allows us to provide customers with more trustworthy services.') }}
                                        </li>
                                    </ul>
                                </div>
                                <div class="img_history" style="border-left: 1px solid #FFFFFF !important;">
                                    <img src="{{asset('frontend/assets/image/Product/ico_ibs03.png')}}"
                                         alt="Group Picture at the Ceremony for Self-driving Shuttle in Sejong City">
                                </div>
                                <span class="timeline01 sceneTrigger"></span>
                            </li>

                            <li class="point timeline01">

                                <div class="spot_history" style="border-left: none !important;">
                                    <h2 class="text-light">
                                        {{ __('Total Smart city solution') }}
                                    </h2>
                                    <ul>
                                        <li class="text-light">
                                            {{ __('Leading the way in realizing the smart city of the future, we provide integrated services encompassing buildings, offices, transportation and health care.') }}
                                        </li>
                                        <li class="text-light"></li>
                                    </ul>

                                </div>
                                <div class="img_history" style="border-right: 1px solid #FFFFFF !important;">
                                    <img src="{{asset('frontend/assets/image/Product/ico_ibs02.png')}}"
                                         alt="Group Picture at the Ceremony for Self-driving Shuttle in Sejong City">
                                </div>
                                <span class="timeline01 sceneTrigger"></span>
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!--      -->
    <section class="diff-block-2 groove-section groove-section-boxed" id=longterm>
        <div class="groove-title-heading  title-heading-center  wgl-double_heading banner_reponsive">
            <h2 class="dbl__title-wrapper groove-headingtitle" style="margin-top: 0;">
                <span>
                    {{ __('NOTABLE EXAMPLES') }}
                </span> <br>
                <span class="cp_under_line"
                      style="background-color: #e50000;width: 80px;height: 2.3px; display: block;clear: both;margin: 0px auto auto;"></span>

            </h2>
            <p class="groove-align-center content-of-title">
                {{ __('The latest examples of state-of-the-art IBS technology implementation') }}
            </p>
        </div>
        <div class="groove-container groove-column-gap-default" style="padding: 20px; max-width: 1170px">
            <div class=groove-row>
                <div class="groove-column groove-col-33">
                    <div class=diff-box style="padding: 20px;display: flex;
                   margin: 5px;
                   flex-direction: column;
                   justify-content: space-around;
                   align-items: center;height: 550px">
                        <h3 class="div-h3">
                            {{ __('LOTTE World Tower Mall') }}
                        </h3>
                        <div class="groove-image img-ct-sp">
                            <img style="width:300px;padding: 5px;" width=72
                                 alt="What makes us different - Groove Technology - 10"
                                 srcset="{{asset('frontend/assets/image/Product/img_ibs01_01.jpg')}}"
                                 data-src=https://cdn.groovetechnology.com/wp-content/uploads/2021/03/Group-144332.png
                                 class=lazyload
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                            <noscript>
                                <img class=lazy
                                     src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2072%2072'%3E%3C/svg%3E"
                                     data-src=https://cdn.groovetechnology.com/wp-content/uploads/2021/03/Group-144332.png
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
                   align-items: center;height: 550px">
                        <div class="groove-image img-ct-sp">
                            <h3 class="div-h3" style="text-align: center">
                                {{ __('LOTTE R&D Center') }}
                            </h3>
                            <img style="width:300px;padding: 5px" alt="What makes us different - Groove Technology - 13"
                                 srcset="{{asset('frontend/assets/image/Product/img_ibs01_02.jpg')}}"
                                 data-src=https://www.ldcc.co.kr/img/pc/sub1/img_ibs01_02.jpg class=lazyload
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                            <noscript>
                                <img class=lazy
                                     src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2064%2064'%3E%3C/svg%3E"
                                     data-src=https://cdn.groovetechnology.com/wp-content/uploads/2021/03/Group-144333.png
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
                   height: 550px">
                        <div class="groove-image img-ct-sp">
                            <h3 class="div-h3" style="text-align: center">
                                {{ __('LOTTE Center Hanoi') }}
                            </h3>
                            <img style="width:300px;padding: 5px;" width=72
                                 alt="What makes us different - Groove Technology - 10"
                                 srcset="{{asset('frontend/assets/image/Product/img_ibs01_03.jpg')}}"
                                 data-src=https://www.ldcc.co.kr/img/pc/sub1/img_ibs01_03.jpg class=lazyload
                                 src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                            <noscript>
                                <img class=lazy
                                     src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2072%2072'%3E%3C/svg%3E"
                                     data-src=https://cdn.groovetechnology.com/wp-content/uploads/2021/03/Group-144332.png
                                     style=width:72px;height:55px; width=72 heigth=55
                                     alt="What makes us different - Groove Technology - 10">
                            </noscript>
                        </div>

                    </div>

                </div>
            </div>
        </div>
        <div class="row justify-content-center mb-4">
            <a href={{route('case-study')}} class="btn btn-round"
               style="background-color: #B3000F;font-size: 0.8571em !important;padding: 11px 23px;">
                {{ __('Explore our case studies') }}
            </a>
        </div>
    </section>


</main>