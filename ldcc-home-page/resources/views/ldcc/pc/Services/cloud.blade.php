<link href="{{asset('frontend/assets/css/now-ui-kit.css?v=1.1.0')}}" rel="stylesheet" />
<link href="{{asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
<div class="page-header page-header_align_left" style=" margin-bottom: 0px; padding-top: 0px; padding-bottom: 10px;">
    <div class=page-header_wrapper>
        <div
                class=wgl-container>
            <div
                    class=page-header_content>
                <div class=page-header_breadcrumbs style="color: #666666; font-size: 15px; line-height: 24px;">
                    <div class=breadcrumbs>
                        <a href={{route('home')}} class=home>
                            {{__('Home')}}
                        </a>
                        <span class=divider></span>
                        <a href={{route('services.application')}} >
                            {{__('Service')}}
                        </a>
                        <span id="application" class=divider></span>
                        <span class=current>{{__('Cloud Transformation')}}</span></div>
                </div>

            </div>
        </div>
    </div>
</div>
<main id=main class="site-main bg-white">
    <style>.wgl-tabs_header{
            min-height: 150px;
        }
        .groove-text-editor ul li {
            font-weight: 500;
        }
    </style>
    <div class=sticky-space>
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
                        top:43px;
                        left: -5px;
                        display: none;
                        position: absolute;
                        background-color: #ffffff !important;
                        min-width: 200px;
                        width: 250px;
                        box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
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
                    <a class="dropbtn" href={{route('services.application')}}>{{__('Services')}}</a>
                </div>
                <div class="dropdown">

                    <a class="dropbtn">{{__('Cloud Transformation')}} <i class='bx bx-chevron-down'></i></a>
                    <div class="dropdown-content">
                        <a href={{route('services.application')}}>{{__('Application development')}}</a>
                        <a href={{route('services.system')}}>{{__('System management')}}</a>
                        <a href={{route('services.offshore')}}>{{__('IT offshore')}}</a>
                        <a href={{route('services.erp')}}>{{__('ERP implementation')}}</a>
                        <a href={{route('services.cloud')}}>{{__('Cloud transformation')}}</a>
                        <a href={{route('services.data')}}>{{__('Data Center')}}</a>
                        <a href={{route('services.security')}}>{{__('Security')}}</a>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>
    <!--   SERVICE – Application development & integration -->
    <section class="section-what-wedo frontpage-block-3 groove-section groove-section-boxed">
        <div class="groove-container groove-column-gap-default" style="max-width:1170px ">
            <div class=groove-row>
                <div class="groove-title-heading title-heading-center  wgl-double_heading" style="margin-top: unset!important;">
                    <h2 class="dbl__title-wrapper education-title groove-headingtitle">
                        <span>{{__('OUR SERVICE OFFERING')}}</span> <br>
                        <span class="cp_under_line" style="background-color: #e50000;width: 80px;height: 2px; display: block;clear: both;margin: 0px auto auto;"></span>
                    </h2>
                    <p class="mb-3">{{__('We partner closely with clients to truly bring their operation to cloud.')}}</p>
                </div>
            </div>
        </div>
        <div class="groove-container groove-column-gap-default  only-pc" style="max-width:1170px ">
            <div class="wgl-tabs icon_position-top tabs_align-justify">
                <div class=wgl-tabs_headings>
                    <div data-tab-id=wgl-tab_1532 class="frontpage-wgl-tab frontpage-wgl-tab-2 wgl-tabs_header_wrap active">
                        <div class=wgl-tabs_header>
                            <span class=wgl-tabs_title>{{__('Digital Transformation')}}</span>
                            <span class=wgl-tabs_icon>
                                <img
                                        alt="Lotte Data Communication Vietnam."
                                        srcset="{{asset('frontend/assets/image/Service/Cloud/icon/icons8-connect-50.png')}}"
                                        class=lazyload>
                                <noscript><img
                                            class=lazy
                                            srcset="{{asset('frontend/assets/image/Service/Cloud/icon/icons8-connect-50.png')}}"
                                            style=width:69px;height:54px; width=69 heigth=54
                                            alt="Lotte Data Communication Vietnam."></noscript>
                            </span>
                        </div>
                    </div>
                    <div data-tab-id=wgl-tab_1533 class="frontpage-wgl-tab frontpage-wgl-tab-3 wgl-tabs_header_wrap">
                        <div class=wgl-tabs_header>
                            <span class=wgl-tabs_title >{{__('Cloud migration')}}</span>
                            <span class=wgl-tabs_icon>

                                <img
                                        srcset="{{asset('frontend/assets/image/Service/Cloud/icon/icons8-clouds-50.png')}}"
                                        alt="Lotte Data Communication Vietnam."
                                        class=lazyload">
                    <noscript><img
                                class=lazy
                                srcset="{{asset('frontend/assets/image/Service/Cloud/icon/icons8-clouds-50.png')}}"
                                style=width:86px;height:65px; width=86 heigth=65
                                alt="Lotte Data Communication Vietnam.">
                            </noscript>
                            </span>
                        </div>
                    </div>
                    <div data-tab-id=wgl-tab_1534 class="frontpage-wgl-tab frontpage-wgl-tab-4 wgl-tabs_header_wrap" style="width: 1170px">
                        <div class=wgl-tabs_header>
                            <span class=wgl-tabs_title>{{__('Cloud managed services')}}</span>
                            <span class=wgl-tabs_icon >

                    <img alt="Lotte Data Communication Vietnam."
                         srcset="{{asset('frontend/assets/image/Service/Cloud/icon/icons8-secure-50.png')}}"
                         class=lazyload
                         src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                            class=lazy
                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2089%2089'%3E%3C/svg%3E"
                                            srcset="{{asset('frontend/assets/image/Service/Cloud/icon/icons8-secure-50.png')}}"
                                            alt="Lotte Data Communication Vietnam."></noscript>
                            </span>
                        </div>
                    </div>
                    <div data-tab-id=wgl-tab_1535 class="frontpage-wgl-tab frontpage-wgl-tab-5 wgl-tabs_header_wrap">
                        <div class=wgl-tabs_header>


                            <span class=wgl-tabs_title> {{__('Security and monitoring')}} </span>
                            <span class=wgl-tabs_icon>

                                <img
                                        srcset="{{asset('frontend/assets/image/Service/Cloud/icon/icons8-security-lock-50.png')}}"
                                        alt="Lotte Data Communication Vietnam."
                                        class=lazyload>
                                <noscript>
                                    <img
                                            class=lazy
                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2057%2057'%3E%3C/svg%3E"
                                            srcset="{{asset('frontend/assets/image/Service/Cloud/icon/icons8-security-lock-50.png')}}"
                                            alt="Lotte Data Communication Vietnam.">
                                </noscript>
                            </span>
                        </div>
                    </div>
                    <div data-tab-id=wgl-tab_1536 class="frontpage-wgl-tab frontpage-wgl-tab-6 wgl-tabs_header_wrap">
                        <div class=wgl-tabs_header>
                            <span class=wgl-tabs_title>{{__('Data analytics & Intelligent system')}}</span>
                            <span class="wgl-tabs_icon ">
                                <img
                                        srcset="{{asset('frontend/assets/image/Service/Cloud/icon/icons8-cloud-database-50.png')}}"
                                        alt="Lotte Data Communication Vietnam."
                                        class=lazyload>
                                <noscript>
                                    <img
                                            class=lazy
                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2056%2056'%3E%3C/svg%3E"
                                            srcset="{{asset('frontend/assets/image/Service/Cloud/icon/icons8-cloud-database-50.png')}}"
                                            alt="Lotte Data Communication Vietnam.">
                                </noscript>
                            </span>
                        </div>
                    </div>
                </div>
                <div class=wgl-tabs_content-wrap>
                    <div data-tab-id=wgl-tab_1532 class=wgl-tabs_content>
                        <div data-elementor-type=page class=elementor data-elementor-settings=[]>
                            <div class="groove-container groove-column-gap-default">
                                <div class=groove-row>
                                    <div class=" groove-column groove-col-50">
                                        <div class=groove-image style=width:429px;height:321px; width=429 heigth=321>
                                            <img style=width:429px;height:321px; width=429 heigth=321
                                                 alt="Lotte Data Communication Vietnam."
                                                 srcset="{{asset('frontend/assets/image/Service/icon/img_cloud.png')}}"
                                                 class=lazyload>
                                            <noscript><img
                                                        class=lazy
                                                        style=width:429px;height:321px; width=429 heigth=321
                                                        alt="Lotte Data Communication Vietnam.">
                                            </noscript>
                                        </div>
                                    </div>
                                    <div class=" groove-column groove-col-50">
                                        <div class=groove-text-editor><h3 class="div-h3">{{__('Digital Transformation Consulting & Implementation')}} </h3>
                                            <p>{{__('Apply knowledge & experience in multiple system (e.g. ecommerce, ERP, Finance, POS, CCTV) in order to help digitalizing our client’s workflow, system to adapt the 4.0 industry standard')}}
                                                .</p>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-tab-id=wgl-tab_1533 class=wgl-tabs_content style="display: none;">
                        <div data-elementor-type=page class=elementor data-elementor-settings=[]>
                            <div class="groove-container groove-column-gap-default">
                                <div class=groove-row>
                                    <div class=" groove-column groove-col-50">
                                        <div class=groove-text-editor><h3 class="div-h3">{{__('Cloud Migration')}}</h3>
                                            <p>{{__('Offer solutions from hybrid to fully cloud based system, from taking advantage of current servers, data center to utilizing 100% cloud infrastructure')}}
                                            </p>

                                        </div>
                                    </div>
                                    <div
                                            class=" groove-column groove-col-50">
                                        <div
                                                class=groove-image style="width:429px;height:321px;margin-left: auto;"
                                                width=429 heigth=321>
                                            <img
                                                    style=width:429px;height:321px; width=429 heigth=321
                                                    alt="Lotte Data Communication Vietnam."
                                                    class=lazyload
                                                    srcset="{{asset('frontend/assets/image/Service/icon/img-cloud_2.png')}}">
                                            <noscript><img
                                                        class=lazy
                                                        srcset="{{asset('frontend/assets/image/Service/icon/img-cloud_2.png')}}"
                                                        style=width:429px;height:321px; width=429 heigth=321
                                                        alt="Lotte Data Communication Vietnam.">
                                            </noscript>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-tab-id=wgl-tab_1534 class=wgl-tabs_content style="display: none;">
                        <div data-elementor-type=page class=elementor data-elementor-settings=[]>
                            <div class="groove-container groove-column-gap-default">
                                <div class=groove-row>
                                    <div class="groove-column groove-col-50">
                                        <div class=groove-image style=width:429px;height:321px; width=429 heigth=321>
                                            <img
                                                    style=width:429px;height:321px; width=429 heigth=321
                                                    alt="Lotte Data Communication Vietnam."
                                                    class=lazyload
                                                    srcset="{{asset('frontend/assets/image/Service/icon/img-cloud_3.png')}}">
                                            <noscript><img
                                                        class=lazy
                                                        style=width:429px;height:321px; width=429 heigth=321
                                                        alt="Lotte Data Communication Vietnam.">
                                            </noscript>
                                        </div>
                                    </div>
                                    <div
                                            class=" groove-column groove-col-50">
                                        <div class=groove-text-editor><h3 class="div-h3">{{__('Cloud Managed Services')}}</h3>
                                            <p>{{__('Manage cloud system on behalf of our clients to ensure a smooth operation.')}}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-tab-id=wgl-tab_1535 class=wgl-tabs_content style="display: none;">
                        <div data-elementor-type=page class=elementor data-elementor-settings=[]>
                            <div class="groove-container groove-column-gap-default">
                                <div class=groove-row>
                                    <div class=" groove-column groove-col-50">
                                        <div class=groove-text-editor>

                                            <h3 class="div-h3">{{__('Security And Monitoring Services')}}</h3>
                                            <p>{{__('Apply our best practices in software development and security to our clients’ next cloud-based applications')}}
                                                <br>
                                                {{__('Fully monitor and auto scalable system to adapt any businesses workload')}}
                                                .</p>
                                        </div>
                                    </div>
                                    <div
                                            class=" groove-column groove-col-50">
                                        <div
                                                class=groove-image style="width:429px;height:321px; margin-left: auto;"
                                                width=429 heigth=321>
                                            <img
                                                    style=width:429px;height:321px; width=429 heigth=321
                                                    alt="Lotte Data Communication Vietnam."
                                                    srcset="{{asset('frontend/assets/image/Service/icon/img-cloud_4.png')}}"
                                                    class=lazyload>
                                            <noscript><img
                                                        class=lazy
                                                        style=width:429px;height:321px; width=429 heigth=321
                                                        alt="Lotte Data Communication Vietnam.">
                                            </noscript>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div data-tab-id=wgl-tab_1536 class=wgl-tabs_content style="display: none;">
                        <div data-elementor-type=page class=elementor data-elementor-settings=[]>
                            <div
                                    class="groove-container groove-column-gap-default">
                                <div class=groove-row>
                                    <div class=" groove-column groove-col-50">
                                        <div class=groove-image style=width:323px; >
                                            <img
                                                    style=width:323px;
                                                    alt="Lotte Data Communication Vietnam."
                                                    class=lazyload
                                                    srcset="{{asset('frontend/assets/image/Service/Data/data.webp')}}"
                                            >
                                            <noscript><img
                                                        class=lazy
                                                        srcset="{{asset('frontend/assets/image/Service/Data/data.webp')}}"
                                                        style=width:429px;height:321px; width=429 heigth=321
                                                        alt="Lotte Data Communication Vietnam.">
                                            </noscript>
                                        </div>
                                    </div>
                                    <div
                                            class=" groove-column groove-col-50">
                                        <div class=groove-text-editor><h3 class="div-h3">{{__('Data analytics & Intelligent system')}}</h3>
                                            <p>{{__('Architect, build data lake and streaming systems that handle Gigabytes data per second, suitable for almost big data applications in the market')}}
                                                <br>
                                                {{__('Consolidate data from IoT devices, Machine Learning and AI services to analyse raw and seem-to-be meaningless data to find trends and answer business questions.')}}
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


        <!--        Mobile     -->

        <div class="groove-container groove-column-gap-default only-mobile" data-element_type=widget
             data-widget_type=wgl-toggle-accordion.default>
            <div class=groove-row>
                <div class=wgl-accordion data-type=toggle>
                    <div class=wgl-accordion_panel>
                        <div class="wgl-accordion_header groove-accordion_header frontpage-wgl-tab-1">
                            <span class=wgl-tabs_icon>
                                <img
                                        alt="Lotte Data Communication Vietnam."
                                        srcset="{{asset('frontend/assets/image/Service/Cloud/icon/icons8-connect-50.png')}}"
                                        class=lazyload
                                        >
                                <noscript>
                                    <img
                                            srcset="{{asset('frontend/assets/image/Service/Cloud/icon/icons8-connect-50.png')}}"
                                            class=lazy
                                            style=width:69px;height:54px;
                                            width=69 heigth=54
                                            alt="Lotte Data Communication Vietnam.">
                            </noscript>
                            </span>
                            <span class=wgl-tabs_title>{{__('Digital Transformation')}}</span></div>
                        <div class=wgl-accordion_content style=display:none;>
                            <div class data-element_type=widget data-widget_type=image-box.default>
                                <div class="groove-container groove-column-gap-default">
                                    <div class=groove-row>
                                        <div class=" groove-column groove-col-50" style="display: flex; justify-content: center">
                                            <div class="groove-image eLarning-img groove-align-center"
                                                 style=width:323px;height:auto; width=323 heigth=auto>
                                                <img style=width:323px;height:auto; width=323 heigth=auto
                                                     alt="Lotte Data Communication Vietnam."
                                                     srcset="{{asset('frontend/assets/image/Service/icon/img_cloud.png')}}"
                                                     class=lazyload
                                                     src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                                                <noscript>
                                                    <img
                                                            class=lazy
                                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20323%20323'%3E%3C/svg%3E"
                                                            srcset="{{asset('frontend/assets/image/Service/icon/img_cloud.png')}}"
                                                            style=width:323px;height:auto; width=323 heigth=auto
                                                            alt="Lotte Data Communication Vietnam.">
                                                </noscript>
                                            </div>
                                        </div>
                                        <div class=" groove-column groove-col-50" style="display: flex; justify-content: center">
                                            <div class=groove-text-editor><h3 class="div-h3">{{__('Digital Transformation Consulting & Implementation')}} </h3>
                                                <p>{{__('Apply knowledge & experience in multiple system (e.g. ecommerce, ERP, Finance, POS, CCTV) in order to help digitalizing our client’s workflow, system to adapt the 4.0 industry standard')}}
                                                    .</p>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=wgl-accordion_panel>
                        <div class="wgl-accordion_header groove-accordion_header frontpage-wgl-tab-2">

                            <span class=wgl-tabs_icon>
                                <img

                                        alt="Lotte Data Communication Vietnam."
                                        srcset="{{asset('frontend/assets/image/Service/Cloud/icon/icons8-clouds-50.png')}}"
                                        class=lazyload
                                        ><noscript><img
                                            class=lazy
                                            srcset="{{asset('frontend/assets/image/Service/Cloud/icon/icons8-clouds-50.png')}}"
                                            style=width:86px;height:65px;
                                            width=86 heigth=65
                                            alt="Lotte Data Communication Vietnam."></noscript></span>
                            <span
                                    class=wgl-tabs_title>{{__('Cloud Migration')}}</span></div>
                        <div
                                class=wgl-accordion_content style=display:none;>
                            <div
                                    class data-element_type=widget data-widget_type=image-box.default>
                                <div
                                        class="groove-container groove-column-gap-default">
                                    <div
                                            class=groove-row>
                                        <div
                                                class=" groove-column groove-col-50">
                                            <div
                                                    class="groove-image groove-align-center"
                                                    style=width:323px;height:auto; width=323 heigth=auto>
                                                <img
                                                        srcset="{{asset('frontend/assets/image/Service/icon/img-cloud_2.png')}}"
                                                        style=width:323px;height:auto; width=323 heigth=auto
                                                        alt="Lotte Data Communication Vietnam."
                                                        class=lazyload
                                                       >
                                                <noscript><img
                                                            class=lazy
                                                            srcset="{{asset('frontend/assets/image/Service/icon/img-cloud_2.png')}}"
                                                            style=width:323px;height:auto; width=323 heigth=auto
                                                            alt="Lotte Data Communication Vietnam.">
                                                </noscript>
                                            </div>
                                        </div>
                                        <div class=" groove-column groove-col-50">
                                            <div class=groove-text-editor><h3 class="div-h3">{{__('Cloud Migration')}}</h3>
                                                <p>{{__('Offer solutions from hybrid to fully cloud based system, from taking advantage of current servers, data center to utilizing 100% cloud infrastructure')}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=wgl-accordion_panel>
                        <div class="wgl-accordion_header groove-accordion_header frontpage-wgl-tab-3">
                            <span
                                    class=wgl-tabs_icon><img

                                        alt="Lotte Data Communication Vietnam."
                                        srcset="{{asset('frontend/assets/image/Service/Cloud/icon/icons8-secure-50.png')}}"
                                         class=lazyload
                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                            class=lazy
                                            src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2089%2089'%3E%3C/svg%3E"
                                            srcset="{{asset('frontend/assets/image/Service/Cloud/icon/icons8-secure-50.png')}}"
                                            alt="Lotte Data Communication Vietnam."></noscript></span>
                            <span
                                    class=wgl-tabs_title>{{__('Cloud managed services')}}</span></div>
                        <div
                                class=wgl-accordion_content style=display:none;>
                            <div
                                    class data-element_type=widget data-widget_type=image-box.default>
                                <div
                                        class="groove-container groove-column-gap-default">
                                    <div
                                            class=groove-row>
                                        <div
                                                class=" groove-column groove-col-50">
                                            <div
                                                    class="groove-image eLarning-img groove-align-center"
                                                    style=width:323px;height:auto; width=323 heigth=auto>
                                                <img
                                                        srcset="{{asset('frontend/assets/image/Service/icon/img-cloud_3.png')}}"
                                                        style=width:323px;height:auto; width=323 heigth=auto
                                                        alt="Lotte Data Communication Vietnam."

                                                        class=lazyload
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                                                <noscript><img
                                                            class=lazy
                                                            srcset="{{asset('frontend/assets/image/Service/icon/img-cloud_3.png')}}"
                                                            style=width:323px;height:auto; width=323 heigth=auto
                                                            alt="Lotte Data Communication Vietnam.">
                                                </noscript>
                                            </div>
                                        </div>
                                        <div
                                                class=" groove-column groove-col-50">
                                            <div class=groove-text-editor><h3 class="div-h3">{{__('Cloud Managed Services')}}</h3>
                                                <p>{{__('Manage cloud system on behalf of our clients to ensure a smooth operation.')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=wgl-accordion_panel>
                        <div class="wgl-accordion_header groove-accordion_header frontpage-wgl-tab-4">

                            <span
                                    class=wgl-tabs_icon><img
                                        alt="Lotte Data Communication Vietnam."
                                        srcset="{{asset('frontend/assets/image/Service/Cloud/icon/icons8-security-lock-50.png')}}"
                                        class=lazyload
                                        ><noscript><img
                                            class=lazy
                                            srcset="{{asset('frontend/assets/image/Service/Cloud/icon/icons8-security-lock-50.png')}}"
                                            style=width:57px;height:54px;
                                            width=57 heigth=54
                                            alt="Lotte Data Communication Vietnam."></noscript></span>
                            <span
                                    class=wgl-tabs_title>{{__('Security and monitoring')}}</span></div>
                        <div
                                class=wgl-accordion_content style=display:none;>
                            <div
                                    class data-element_type=widget data-widget_type=image-box.default>
                                <div
                                        class="groove-container groove-column-gap-default">
                                    <div
                                            class=groove-row>
                                        <div
                                                class=" groove-column groove-col-50">
                                            <div
                                                    class="groove-image groove-align-center"
                                                    style=width:323px;height:auto; width=323 heigth=auto>
                                                <img
                                                        style=width:323px;height:auto; width=323 heigth=auto
                                                        alt="Lotte Data Communication Vietnam."
                                                        srcset="{{asset('frontend/assets/image/Service/icon/img-cloud_4.png')}}"
                                                        class=lazyload
                                                        src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                                                <noscript><img
                                                            class=lazy
                                                            srcset="{{asset('frontend/assets/image/Service/icon/img-cloud_4.png')}}"
                                                            style=width:323px;height:auto; width=323 heigth=auto
                                                            alt="Lotte Data Communication Vietnam.">
                                                </noscript>
                                            </div>
                                        </div>
                                        <div
                                                class=" groove-column groove-col-50">
                                            <div class=groove-text-editor>

                                                <h3 class="div-h3">{{__('Security And Monitoring Services')}}</h3>
                                                <p>{{__('Apply our best practices in software development and security to our clients’ next cloud-based applications')}}
                                                    <br>
                                                    {{__('Fully monitor and auto scalable system to adapt any businesses workload')}}
                                                    .</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=wgl-accordion_panel>
                        <div class="wgl-accordion_header groove-accordion_header frontpage-wgl-tab-5">
                        <span class=wgl-tabs_icon><img
                                    alt="Lotte Data Communication Vietnam."
                                    srcset="{{asset('frontend/assets/image/Service/Cloud/icon/icons8-cloud-database-50.png')}}"
                                    class=lazyload><noscript>
                                <img class=lazy
                                        srcset="{{asset('frontend/assets/image/Service/Cloud/icon/icons8-cloud-database-50.png')}}"
                                        alt="Lotte Data Communication Vietnam."></noscript></span>
                            <span class=wgl-tabs_title>{{__('Data analytics & Intelligent system')}}</span></div>
                        <div class=wgl-accordion_content style=display:none;>
                            <div class data-element_type=widget data-widget_type=image-box.default>
                                <div class="groove-container groove-column-gap-default">
                                    <div class=groove-row>
                                        <div class=" groove-column groove-col-50">
                                            <div class="groove-image groove-align-center"
                                                 style=width:323px;height:auto; width=323 heigth=auto>
                                                <img
                                                        style=width:323px;height:auto; width=323 heigth=auto
                                                        alt="Lotte Data Communication Vietnam."
                                                        srcset="{{asset('frontend/assets/image/About/Detail/Attractive_Features.png')}}"
                                                        class=lazyload>
                                                <noscript>
                                                    <img class=lazy
                                                            style=width:323px;height:auto; width=323 heigth=auto
                                                            alt="Lotte Data Communication Vietnam.">
                                                </noscript>
                                            </div>
                                        </div>
                                        <div class=" groove-column groove-col-50">
                                            <div
                                                    class=groove-text-editor><h3 class="div-h3">{{__('Data analytics & Intelligent system')}}</h3>
                                                <p>{{__('Architect, build data lake and streaming systems that handle Gigabytes data per second, suitable for almost big data applications in the market')}}
                                                    <br>
                                                    {{__('Consolidate data from IoT devices, Machine Learning and AI services to analyse raw and seem-to-be meaningless data to find trends and answer business questions.')}}
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
        </div>
    </section>
    <!--     *********     FEATURES 2      *********      -->
    <div class="features-2">
        <div class="container">
            <div class="row">
                <div class="col-md-8 mr-auto ml-auto">
                    <h2 class="title text-dark text-uppercase"> {{__('Our Capabilities')}}
                        <span class="cp_under_line" style="background-color: #e50000;width: 80px;height: 2.3px; display: block;clear: both;margin: 0px auto auto;"></span>
                    </h2>
                    <h4 class="description">{{__('We are certified as an Advanced AWS consulting partner')}}
                        .</h4>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="info">
                        <div class="image_detail" style="width: 240px!important;">
                            <img src="{{asset('frontend/assets/image/Service/Cloud/Picture1.png')}}" alt="">
                        </div>
                        <h4 class="info-title text-dark">{{__('AWS Advanced Consulting Partner')}}</h4>
                        <i class="description text-left">
                            {{__('“Lotte Data Communication Company(LDCC) provides migration, deployment, and managed services to make the transition to the cloud faster and more efficient to successfully support your business as a CSB Provider.”')}}
                        </i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="cd-section" id="testimonials">
        <!--     *********    TESTIMONIALS 1     *********      -->
        <div class="testimonials-1" >
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto text-center">
                        <h2 class="title text-uppercase" style="margin-bottom: 80px;padding: unset">
                            {{__('Our Core Competencies')}}
                            <span class="cp_under_line" style="background-color: #e50000;width: 80px;height: 2.1px; display: block;clear: both;margin: 0px auto auto;"></span>
                        </h2>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3">
                        <div class="card card-testimonial" style="height: 345px;">
                            <div class="card-avatar card-avatar-size">
                                <img src="{{asset('frontend/assets/image/Service/Cloud/Picture4.png')}}" alt="" width="70" style=" padding: 10px;;background-color: red">
                            </div>
                            <div class="card-body style-card-body" >
                                <div class="card-footer">
                                    <h4 class="card-title card-title-text">
                                        {{__('B2B E-Commerce applications')}}
                                    </h4>
                                </div>
                                <p class="card-description style-text-card-description">
                                    {{__('Developer applications that can be integrated into digital channels through design thinking and data-driven insights which combine to create frictionless and dependable experiences that are ready for the future of any business.')}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <style>
                            .card-avatar-size{
                                max-width: 130px !important;
                                max-height: 130px !important;
                                margin: -50px auto 0 !important;
                            }
                            .style-card-body{
                                font-size: 15px !important;
                                padding: 1.25rem !important;
                            }
                            .card-title-text{
                                color: #B3000F !important;
                                font-weight: 600 !important;
                            }
                            .style-text-card-description{
                                line-height: 20px !important;
                                font-size: 15px !important;
                                font-style: revert !important;
                            }
                        </style>
                        <div class="card card-testimonial" style="height: 345px;">
                            <div class="card-avatar card-avatar-size">
                                <img src="{{asset('frontend/assets/image/Service/Cloud/Picture5.png')}}" alt="" width="70"   style=" height: 70px!important;padding: 10px;background-color: red; object-fit: scale-down">
                            </div>
                            <div class="card-body style-card-body">
                                <div class="card-footer"style="margin-bottom: 15px">
                                    <h4 class="card-title card-title-text">
                                        {{__('Legacy systems and conversion to hybrid or cloud native')}}
                                    </h4>
                                </div>
                                <p class="card-description text-center style-text-card-description">
                                    {{__('Design hybrid or cloud native systems that maximize resource consumption to lower costs while maintaining excellent performance.')}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-testimonial" style="height: 345px;">
                            <div class="card-avatar card-avatar-size" >
                                <img src="{{asset('frontend/assets/image/Service/Cloud/Picture6.png')}}" alt="" width="70"   style="height:70px!important; padding: 10px;;background-color: red; object-fit: scale-down">
                            </div>
                            <div class="card-body style-card-body">
                                <div class="card-footer" style="margin-bottom: 15px;">
                                    <h4 class="card-title card-title-text">{{__('Experience with the demands of diverse clients sectors')}}</h4>
                                </div>
                                <p class="card-description style-text-card-description">
                                    {{__('Our team has In-depth understanding across the industry environment and regulations. We also has a team of in-house coordinators with excellent communication abilities, especially for Korean clients.')}}
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-testimonial" style="height: 345px">
                            <div class="card-avatar card-avatar-size">
                                <img src="{{asset('frontend/assets/image/Service/Cloud/Picture7.png')}}" alt="" width="70"   style=" height: 70px!important;padding: 10px;background-color: red; object-fit: scale-down">
                            </div>
                            <div class="card-body style-card-body">
                                <div class="card-footer">
                                    <h4 class="card-title card-title-text">{{__('Expertise in applying emerging 4.0 technologies')}}</h4>
                                </div>
                                <p class="card-description style-text-card-description">
                                    {{__('We are capable of building highly secured and trustworthy applications that leverage new emerging technologies such as IoT, Machine Learning/AI, Data Analysis.')}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center mb-3">
                <a href="{{route('case-study')}}" class="btn btn-primary btn-round"> {{__('Explore our case studies')}}</a>
            </div>
        </div>
    </div>



</main>