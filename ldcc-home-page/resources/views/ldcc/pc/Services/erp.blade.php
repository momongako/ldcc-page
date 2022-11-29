<link href="{{asset('frontend/assets/css/now-ui-kit.css?v=1.1.0')}}" rel="stylesheet" />
<link href="{{asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
<link rel=stylesheet href=frontend/assets/wp-content/themes/zikzag/css/style-GrooveFrontpage-ver1.9.css>
<div class="page-header page-header_align_left" style=" margin-bottom: 0px; padding-top: 0px; padding-bottom: 10px;">
    <div class=page-header_wrapper>
        <div
                class=wgl-container>
            <div class=page-header_content>
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
                        <span class=current>{{__('ERP Implementation')}} </span></div>
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

                    <a class="dropbtn">{{__('ERP Implementation')}}<i class='bx bx-chevron-down'></i></a>
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

    <div class="features-7">
        <div class="col-md-8 mr-auto ml-auto text-center">
            <h2 class="title"> {{__('ABOUT ERP SYSTEM')}}
                <span class="cp_under_line" style="background-color: #e50000;width: 80px;height: 2px; display: block;clear: both;margin: 0px auto auto;"></span>
            </h2>
        </div>
        <div class="container-fluid">
            <div class="container row m-auto">
                <div class="col-md-12">
                    <div class="card card-plain card-blog border-0" style="height: unset!important;">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="card-image">
                                    <img class="img img-raised rounded" style="box-shadow: unset!important;" src="{{asset('frontend/assets/image/Service/icon/Picture4.png')}}" />
                                </div>
                            </div>
                            <div class="col-md-7" style="margin: auto 0">
                                <div class="description" style="color: #222222">
                                    <p style="font-size: 15px">
                                        {{__('ERP system is software solution to help clients collect, store, link and analyse data across different functions within a company, which brings in the following advantages:')}}
                                    </p>
                                    <ul class="ml-3">
                                        <li>{{__('Optimization of business processes')}}</li>
                                        <li> {{__('Cost-saving')}}</li>
                                        <li> {{__('Better financial reporting and production planning')}}</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section-what-wedo frontpage-block-3 groove-section groove-section-boxed">
        <div class="groove-container groove-column-gap-default" style="max-width:1170px ">
            <div class=groove-row>
                <div class="groove-title-heading title-heading-center  wgl-double_heading">
                    <h2 class="dbl__title-wrapper education-title groove-headingtitle mb-3">
                        <span>{{__('Our service offering')}}</span> <br>
                        <span class="cp_under_line" style="background-color: #e50000;width: 80px;height: 2.3px; display: block;clear: both;margin: 0px auto auto;"></span>
                    </h2>
                </div>
            </div>
        </div>
        <div class="groove-container groove-column-gap-default  only-pc" style="max-width:1170px ">
            <div class="wgl-tabs icon_position-top tabs_align-justify">
                <div class=wgl-tabs_headings>
                    <div data-tab-id=wgl-tab_1532 class="frontpage-wgl-tab frontpage-wgl-tab-2 wgl-tabs_header_wrap active">
                        <div class=wgl-tabs_header>
                            <span class=wgl-tabs_title>{{__('Consulting & implementation')}}</span>
                            <span class=wgl-tabs_icon>
                                <img width="50"
                                     alt="Lotte Data Communication Vietnam."
                                     srcset="{{asset('frontend/assets/image/Service/ERP/icons8-administrative-tools-64.png')}}"
                                     class=lazyload>
                                <noscript><img
                                            class=lazy
                                            srcset="{{asset('frontend/assets/image/Service/icon/Picture5.png')}}"
                                            style=width:69px;height:54px; width=69 heigth=54
                                            alt="Lotte Data Communication Vietnam."></noscript>
                            </span>
                        </div>
                    </div>
                    <div data-tab-id=wgl-tab_1533 class="frontpage-wgl-tab frontpage-wgl-tab-3 wgl-tabs_header_wrap">
                        <div class=wgl-tabs_header>
                            <span class=wgl-tabs_title style="">{{__('System Migration Services')}}</span>
                            <span class=wgl-tabs_icon>

                                <img
                                        width="50"
                                        srcset="{{asset('frontend/assets/image/Service/ERP/icons8-system-task-64.png')}}"
                                        alt="Lotte Data Communication Vietnam."
                                        class=lazyload>
                    <noscript><img
                                class=lazy
                                srcset="{{asset('frontend/assets/image/Service/icon/Picture6.png')}}"
                                style=width:86px;height:65px; width=86 heigth=65
                                alt="Lotte Data Communication Vietnam.">
                            </noscript>
                            </span>
                        </div>
                    </div>
                    <div data-tab-id=wgl-tab_1534 class="frontpage-wgl-tab frontpage-wgl-tab-4 wgl-tabs_header_wrap">
                        <div class=wgl-tabs_header>
                            <span class=wgl-tabs_title>{{__('Maintenance & Support')}}</span>
                            <span class=wgl-tabs_icon>
                    <img alt="Lotte Data Communication Vietnam."
                         style="margin-top: -10px;"
                         srcset="{{asset('frontend/assets/image/Service/ERP/icons8-good-quality-50.png')}}"
                         class=lazyload
                         src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw=="><noscript><img
                                            class=lazy
                                            height="85"
                                            srcset="{{asset('frontend/assets/image/Service/icon/Picture7.png')}}"
                                            style=width:89px;height:55px; width=89 heigth=55
                                            alt="Lotte Data Communication Vietnam."></noscript>
                            </span>
                        </div>
                    </div>
                    <div data-tab-id=wgl-tab_1535 class="frontpage-wgl-tab frontpage-wgl-tab-5 wgl-tabs_header_wrap">
                        <div class=wgl-tabs_header>
                            <span class=wgl-tabs_title>{{__('Cloud-based solution')}}</span>
                            <span class=wgl-tabs_icon>
                                <img
                                        style="margin-top: -10px;"
                                        width="50"
                                        srcset="{{asset('frontend/assets/image/Service/ERP/icons8-cloud-storage-64.png')}}"
                                        alt="Lotte Data Communication Vietnam."
                                        class=lazyload>
                                <noscript>
                                    <img
                                            class=lazy
                                            srcset="{{asset('frontend/assets/image/Service/icon/img.png')}}"
                                            style=width:89px;height:54px; width=89 heigth=54
                                            alt="Lotte Data Communication Vietnam.">
                                </noscript>
                            </span>
                        </div>
                    </div>
                    <div data-tab-id=wgl-tab_1536 class="frontpage-wgl-tab frontpage-wgl-tab-6 wgl-tabs_header_wrap">
                        <div class=wgl-tabs_header>
                            <span class=wgl-tabs_title>{{__('Data analytics and Intelligent')}} </span>
                            <span class=wgl-tabs_icon>
                                <img
                                        width="50"
                                        srcset="{{asset('frontend/assets/image/Service/ERP/icons8-database-administrator-64.png')}}"
                                        alt="Lotte Data Communication Vietnam."
                                        class=lazyload>
                                <noscript>
                                    <img
                                            class=lazy
                                            style=width:56px;height:54px; width=56 heigth=54
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
                                        <div class=groove-text-editor><h3 class="div-h3">
                                            {{__('Consulting & implementation')}} </h3>
                                            <p>{{__('Apply knowledge & experience in multiple system (e.g. Ecommerce, ERP, Finance, Logistic, Retail, Wholesale, Manufacturing …) in order to digitalize our client’s workflow, system to adapt the 4.0 industry standard')}}</p>

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
                                        <div class=groove-text-editor><h3 class="div-h3">
                                            {{__('System Migration Services')}}
                                            </h3>
                                            <p>{{__('Migrate historical data and legacy systems for new business design and digital transformation')}} .</p>
                                        </div>
                                    </div>
                                    <div class=" groove-column groove-col-50">
                                        <div class=groove-image style="width:429px;height:321px;margin-left: auto;"
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
                                    <div class=" groove-column groove-col-50">
                                        <div class=groove-text-editor><h3 class="div-h3">
                                            {{__('Maintenance & Support')}}</h3>
                                            <p>{{__('Manage system our client’s behalf to ensure a smooth operation.')}}</p>
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
                                            <h3 class="div-h3">
                                                {{__('Cloud-based solution')}}</h3>
                                            <p>{{__('Implement new cloud-based solutions as to reduce up-front cost for customer; at the same time, client can connect multiple options on-clouds to optimize their operations.')}}</p>
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
                            <div class="groove-container groove-column-gap-default">
                                <div class=groove-row>
                                    <div class=" groove-column groove-col-50">
                                        <div class=groove-image style=width:323px; >
                                            <img
                                                    style=width:323px;
                                                    alt="Lotte Data Communication Vietnam."
                                                    class=lazyload
                                                    srcset="{{asset('frontend/assets/image/image7.jpg')}}">
                                            <noscript><img
                                                        class=lazy
                                                        style=width:429px;height:321px; width=429 heigth=321
                                                        srcset="{{asset('frontend/assets/image/image7.jpg')}}"
                                                        alt="Lotte Data Communication Vietnam.">
                                            </noscript>
                                        </div>
                                    </div>
                                    <div
                                            class=" groove-column groove-col-50">
                                        <div class=groove-text-editor><h3 class="div-h3">
                                            {{__('Data analytics and Intelligent system')}}</h3>
                                            <p>{{__('Consolidate data from IoT devices, Machine Learning and AI services to analyse raw and seem-to-be meaningless data to find trends and answer business questions.')}}</p>

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
                                        style=width:69px;
                                        alt="Lotte Data Communication Vietnam."
                                        srcset="{{asset('frontend/assets/image/Service/icon/Picture5.png')}}"
                                        class=lazyload>
                                <noscript>
                                    <img
                                            srcset="{{asset('frontend/assets/image/Service/icon/icons8-setting-100.png')}}"
                                            class=lazy
                                            width=69 heigth=54
                                            alt="Lotte Data Communication Vietnam.">
                            </noscript>
                            </span>
                            <span class=wgl-tabs_title>{{__('Consulting & implementation')}}</span></div>
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
                                                     class=lazyload>
                                                <noscript>
                                                    <img
                                                            class=lazy
                                                            srcset="{{asset('frontend/assets/image/Service/icon/img_cloud.png')}}"
                                                            style=width:323px;height:auto; width=323 heigth=auto
                                                            alt="Lotte Data Communication Vietnam.">
                                                </noscript>
                                            </div>
                                        </div>
                                        <div class=" groove-column groove-col-50" style="display: flex; justify-content: center">
                                            <div class=groove-text-editor><h3 class="div-h3">{{__('Consulting & implementation ')}}</h3>
                                                <p>{{__('Apply knowledge & experience in multiple system (e.g. Ecommerce, ERP, Finance, Logistic, Retail, Wholesale, Manufacturing …) in order to digitalize our client’s workflow, system to adapt the 4.0 industry standard')}}</p>

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
                                        width="70"
                                        srcset="{{asset('frontend/assets/image/Service/icon/Picture6.png')}}"
                                        class=lazyload><noscript><img
                                            class=lazy
                                            srcset="{{asset('frontend/assets/image/Service/icon/Picture6.png')}}"
                                            style=width:86px;height:65px;
                                            width=86 heigth=65
                                            alt="Lotte Data Communication Vietnam."></noscript></span>
                            <span class=wgl-tabs_title>{{__('System Migration Services')}}</span></div>
                        <div class=wgl-accordion_content style=display:none;>
                            <div class data-element_type=widget data-widget_type=image-box.default>
                                <div class="groove-container groove-column-gap-default">
                                    <div class=groove-row>
                                        <div class=" groove-column groove-col-50">
                                            <div class="groove-image groove-align-center"
                                                    style=width:323px;height:auto; width=323 heigth=auto>
                                                <img srcset="{{asset('frontend/assets/image/Service/icon/img-cloud_2.png')}}"
                                                        style=width:323px;height:auto; width=323 heigth=auto
                                                        alt="Lotte Data Communication Vietnam."
                                                        class=lazyload>
                                                <noscript><img
                                                            class=lazy
                                                            srcset="{{asset('frontend/assets/image/Service/icon/img-cloud_2.png')}}"
                                                            style=width:323px;height:auto; width=323 heigth=auto
                                                            alt="Lotte Data Communication Vietnam.">
                                                </noscript>
                                            </div>
                                        </div>
                                        <div class=" groove-column groove-col-50">
                                            <div class=groove-text-editor><h3 class="div-h3">{{__('System Migration Services')}}</h3>
                                                <p>
                                                    {{__('Migrate historical data and legacy systems for new business design and digital transformation')}}
                                                    .</p>

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
                                        width=59
                                        alt="Lotte Data Communication Vietnam."
                                        srcset="{{asset('frontend/assets/image/Service/icon/Picture7.png')}}"
                                        class=lazyload><noscript>
                                    <img class=lazy
                                            srcset="{{asset('frontend/assets/image/Service/icon/Picture7.png')}}"
                                            style=width:89px;height:55px;
                                            width=89 heigth=55
                                            alt="Lotte Data Communication Vietnam."></noscript>
                            </span>
                            <span
                                    class=wgl-tabs_title>
{{__('Maintenance & Support')}}</span></div>
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
                                                        class=lazyload>
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
                                            <div class=groove-text-editor><h3 class="div-h3">
                                                {{__('Maintenance & Support')}}</h3>
                                                <p>Provide various remote/on-site support for client (e.g. training, maintenance, spot-charge)
                                                    Manage system our client’s behalf to ensure a smooth operation .</p>
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
                                        width="70"

                                        alt="Lotte Data Communication Vietnam."
                                        srcset="{{asset('frontend/assets/image/Service/icon/img.png')}}"
                                        class=lazyload><noscript>
                                    <img class=lazy
                                            srcset="{{asset('frontend/assets/image/Service/icon/img.png')}}"
                                            style=width:57px;height:54px;
                                            width=57 heigth=54
                                            alt="Lotte Data Communication Vietnam."></noscript></span>
                            <span
                                    class=wgl-tabs_title>{{__('Cloud-based solution')}}</span></div>
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
                                                        class=lazyload>
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

                                                <h3 class="div-h3">{{__('Cloud-based solution')}}</h3>
                                                <p>{{__('Implement new cloud-based solutions as to reduce up-front cost for customer; at the same time, client can connect multiple options on-clouds to optimize their operations.')}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=wgl-accordion_panel>
                        <div class="wgl-accordion_header groove-accordion_header frontpage-wgl-tab-5">
                        <span
                                class=wgl-tabs_icon><img
                                    style=width:56px;height:54px; width=56 heigth=54
                                    alt="Lotte Data Communication Vietnam."
                                    srcset="{{asset('frontend/assets/image/Service/icon/Picture10.png')}}"
                                    class=lazyload><noscript><img
                                        class=lazy
                                        style=width:56px;height:54px; width=56 heigth=54
                                        srcset="{{asset('frontend/assets/image/Service/icon/Picture10.png')}}"
                                        alt="Lotte Data Communication Vietnam."></noscript></span>
                            <span class=wgl-tabs_title>
{{__('Data analytics and Intelligent systemt')}}</span></div>
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
                                                        srcset="{{asset('frontend/assets/image/image7.jpg')}}"
                                                        class=lazyload
                                                >
                                                <noscript>
                                                    <img
                                                            class=lazy
                                                            style=width:323px;height:auto; width=323 heigth=auto
                                                            alt="Lotte Data Communication Vietnam.">
                                                </noscript>
                                            </div>
                                        </div>
                                        <div class=" groove-column groove-col-50">
                                            <div
                                                    class=groove-text-editor><h3 class="div-h3">
                                                {{__('Data analytics and Intelligent system')}}</h3>
                                                <p>{{__('Consolidate data from IoT devices, Machine Learning and AI services to analyse raw and seem-to-be meaningless data to find trends and answer business questions.')}}</p>

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
    <div class="features-2" >
        <div class="container">
            <div class="row">
                <div class="col-md-8 mr-auto ml-auto">
                    <h2 class="title text-dark text-uppercase">
                        {{__('Our capabilities')}}
                        <span class="cp_under_line" style="background-color: #e50000;width: 80px;height: 2.3px; display: block;clear: both;margin: 0px auto auto;"></span>
                    </h2>

                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="info">
                        <div class="image_detail" style="width: 100px;">
                            <img src="{{asset('frontend/assets/image/SAP_Partner_R-jpg-300x176.jpg')}}" alt="" style="border-radius:unset!important;">
                        </div>
                        <h4 class="info-title text-dark">
                            SAP PE Partner
                        </h4>

                        <ul class="description text-center " style="width: 270px" >
                            <li style="list-style: none;border-bottom: none;margin-bottom: 0px">{{__('Partner')}} ID : 2678343 –
                                {{__('Start 2022')}}</li>
                            <li style="list-style: none;border-bottom: none;margin-bottom: 0px">{{__('Partner')}} {{__('Type')}}  : PE Sell</li>
                            <li style="list-style:none;border-bottom: none;margin-bottom: 0px">{{__('Authorisation')}} : SAP ByDesign/SAP B1</li>
                        </ul>

                    </div>
                </div>
            </div>

        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <div class="info" style="padding: 20px 20px 30px;box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;height: 320px;">
                        <div class="image_detail">
                            <img src="{{asset('frontend/assets/image/Service/ERP/icons8-guarantee-100.png')}}" alt="">
                        </div>
                        <h4 class="info-title">
                            <strong style="font-size: 3rem;color: #B3000F">3+</strong>
                            <span class="text-dark">{{__('Certified personnel')}}</span>
                        </h4>
                        <p class="description" style="line-height: 20px">
                            <span>{{__('Solution Consultant')}}</span> <br>
                            <span>{{__('SAP B1 v.10 for HANA')}}</span> <br>
                            <span>{{__('SAP ByDesign (cloud)')}}</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info" style="padding: 20px 20px 30px;box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;height: 320px;">
                        <div class="image_detail">
                            <img src="{{asset('frontend/assets/image/Service/ERP/icons8-students-100.png')}}" alt="">
                        </div>
                        <h4 class="info-title text-dark">
                            <strong style="font-size: 3rem;color: #B3000F">2+</strong>{{__('Senior')}} <br> {{__('personnel')}}
                        </h4>
                        <p class="description" style="line-height: 20px">
                            <span>{{__('SAP HANA Architecture')}}</span> <br>
                            <span>{{__('Solution Integration Framework')}}</span>
                        </p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info" style="padding: 20px 20px 30px;box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;height: 320px">
                        <div class="image_detail">
                            <img src="{{asset('frontend/assets/image/Service/ERP/icons8-google-code-100.png')}}" alt="">
                        </div>
                        <h4 class="info-title text-dark">
                            <strong style="font-size: 3rem;color: #B3000F">10+</strong>Solution
                            Developer
                        </h4>
                        <p class="description text-left" style="line-height: 20px">SAP Business One SDK
                            {{__('(DI-API, UI-API, Service Layer), SAP UI5 & Fiori, SAP Hana .NET and MS SQL Server, Java, Ruby on Rails Integration')}}</p>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="info" style="padding: 20px 20px 30px;box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;height: 320px;">
                        <div class="image_detail">
                            <img src="{{asset('frontend/assets/image/Service/ERP/icons8-theme-park-100.png')}}" alt="">
                        </div>
                        <h4 class="info-title text-dark">
                            LDDC Pack
                        </h4>
                        <p class="description mt-5" style="line-height: 20px">{{__('LDDC Pack: VAS, E-Invoice, Printing, Reports, Sale EDI… ')}}<br>
                            {{__('SAP Integration Hub for Outlook, DHL, UPS, Spotify, Magneto….')}}</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center m-3">
                <a href="{{route('case-study')}}" class="btn btn-primary btn-round"> {{__('Explore our case studies')}}</a>
            </div>

        </div>
    </div>

</main>