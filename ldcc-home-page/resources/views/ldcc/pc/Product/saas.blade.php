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
                            {{ __('SAAS') }}
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<main id=main class="site-main bg-white">
    <link href="{{asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet"/>
    <link href="{{asset('frontend/assets/css/now-ui-kit.css?v=1.1.0')}}" rel="stylesheet"/>
    <link href="{{asset('frontend/assets/css_saas/style.css')}}" rel="stylesheet"/>
    <style>
        .wgl-tabs_header {
            min-height: 150px;
        }

        p {
            font-size: 15px;
        }

        h4 {
            margin-bottom: 0px;
            margin-top: 0px;
        }

        p.text.font-weight-bold.mb-2 {
            font-weight: 300;
        }

        .groove-text-editor ul li {
            font-weight: 500;
        }

        p {
            line-height: 20px;
            margin-bottom: 10px;
        }

        p.box_saas {
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

                    <a class="dropbtn">SAAS <i class='bx bx-chevron-down'></i></a>
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
    //if(\App\Lib\BHelp::getConfigSetting('PRODUCT_SAAS')){
    //    echo \App\Lib\BHelp::getConfigSetting('PRODUCT_SAAS');
    //}
    ?>

    <div class="features-7" style="background-color: #FFFFFF">
        <div class="col-md-8 mr-auto ml-auto text-center">
            <h2 class="title">
                {{ __('OUR SAAS ECO-SYSTEM') }}
                <span class="cp_under_line"
                      style="background-color: #e50000;width: 80px;height: 2.2px; display: block;clear: both;margin: 0px auto auto;"></span>

            </h2>
            <h4 class="description">
                {{ __('Software as a service (or SaaS) is a way of delivering applications over the Internet—as a service. Instead of installing and maintaining software, a client simply accesses and use it via the Internet, thus does not need to worry of complex software and hardware management.') }}
            </h4>
        </div>
    </div>
    <!-- About Area Start -->
    <section class="about" id="about" style="background-color: #FFFFFF">
        <div class="container">
            <div class="list_card row">
                <div class=" card_item col-md-6 col-lg-3">
                    <div class="box">
                        <div class="inner-box">
                            <div class="icon">
                                <img src="{{asset('frontend/assets/image/Product/Detail/SAAS/Picture6.png')}}" width="80" alt=""
                                     style="margin-top: 18px;">
                            </div>
                            <h4 class="title font-weight-bold">{{__('E-Bidding')}}</h4>
                            <p class="text mb-3">{{__('Online purchasing/bidding')}}</p>

                            <ul>
                                <li><i style="color: #E7211F; font-size: 12px; "
                                       class="check_icon bx bx-check-circle"></i>
                                    {{__('Publicity, transparency &')}} <span class="ml-3">{{__('efficiency')}}</span> </li>
                                <li><i style="color: #E7211F; font-size: 12px"
                                       class="check_icon bx bx-check-circle"></i>
                                    {{__('Easily search for suppliers')}}</li>
                                <li><i style="color: #E7211F; font-size: 12px"
                                       class="check_icon bx bx-check-circle"></i>
                                    {{__('Improving the')}} <span class="ml-3">{{__('competitive ability')}}</span> </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <div class=" card_item col-md-6 col-lg-3">
                    <div class="box">
                        <div class="inner-box">
                            <div class="icon">
                                <img src="{{asset('frontend/assets/image/Product/Detail/SAAS/Picture7.png')}}" width="60" alt="">
                            </div>
                            <h4 class="title font-weight-bold">{{__('E-Task')}}</h4>
                            <p class="text  mb-3">{{__('Task management solution')}}</p>
                            <ul>
                                <li><i style="color: #E7211F; font-size: 12px"
                                       class="check_icon bx bx-check-circle"></i>
                                    {{__('Easy collaboration')}}</li>
                                <li><i style="color: #E7211F; font-size: 12px"
                                       class="check_icon bx bx-check-circle"></i>
                                    {{__('Intuitive progress')}}</li>
                                <li><i style="color: #E7211F; font-size: 12px"
                                       class="check_icon bx bx-check-circle"></i>
                                    {{__('Flexible management')}}</li>
                            </ul>


                        </div>
                    </div>
                </div>
                <div class="card_item_doc col-md-6 col-lg-3">
                    <div class="box">
                        <div class="inner-box">
                            <div class="icon">
                                <img src="{{asset('frontend/assets/image/Product/Detail/SAAS/img.png')}}" width="60" alt="">
                            </div>
                            <h4 class="title font-weight-bold">{{__('E-Document')}}</h4>
                            <p class="text  mb-3">{{__('E-document management')}}</p>
                            <style>
                                @media only screen and (max-width: 391px) {
                                    .saas_box {
                                        margin: unset !important;
                                    }

                                }

                                @media only screen and (max-width: 429px) {
                                    .saas_box {
                                        margin: unset !important;
                                    }

                                }
                            </style>
                            <p class="box_saas">
                                <i style="color: #E7211F; font-size: 12px" class="check_icon bx bx-check-circle"></i>
                                {{__('Centralized document')}} <span class="saas_box ml-3"> {{__('management')}} </span> <br>
                            </p>
                            <p class="box_saas">
                                <i style="color: #E7211F; font-size: 12px" class="check_icon bx bx-check-circle"></i>
                                {{__('Searching quickly and')}} <span class="saas_box ml-3"> {{__("easily")}} </span> <br>
                            </p>
                            <p class="box_saas">
                                <i style="color: #E7211F; font-size: 12px" class="check_icon bx bx-check-circle"></i>
                                {{__('Organizing documents')}} <span class="saas_box ml-3"> {{__('easily by group')}} </span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="card_item_center col-md-6 col-lg-3">
                    <div class="box">
                        <div class="inner-box">
                            <div class="icon">
                                <img src="{{asset('frontend/assets/image/Product/Detail/SAAS/Logo_app_service_2-06.svg')}}"
                                     width="60" alt="">
                            </div>
                            <h4 class="title font-weight-bold">{{__('E-Approval')}}</h4>
                            <p class="text  mb-3">{{__('E-Approval management')}}</p>
                            <span class="text">
                                <i style="color: #E7211F; font-size: 12px" class="check_icon bx bx-check-circle"></i>
                                {{__('Requesting approval')}} <span class="saas_box ml-3"> {{__('easily')}} </span>
                            </span><br>
                            <span class="text">
                                <i style="color: #E7211F; font-size: 12px" class="check_icon bx bx-check-circle"></i>
                                {{__('Managing approval')}} <span class="saas_box ml-3"> {{__('anytime, anywhere')}}</span>
                            </span><br>
                            <span class="text">
                                <i style="color: #E7211F; font-size: 12px" class="check_icon bx bx-check-circle"></i>
                                {{__('Transparency of process')}} <span class="saas_box ml-3"> {{__('and information')}} </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card_item_center col-md-6 col-lg-3">
                    <div class="box">
                        <div class="inner-box">
                            <div class="icon">
                                <img src="{{asset('frontend/assets/image/Product/Detail/l_gate.png')}}" width="60" alt="">
                            </div>
                            <h4 class="title font-weight-bold">{{__('L.Gate')}}</h4>
                            <p class="text  mb-3">{{__('Internal Enterprise Portal')}}</p>
                            <span class="text">
                                <i style="color: #E7211F; font-size: 12px" class="check_icon bx bx-check-circle"></i>
                                {{__('Building enterprise')}} <span class="saas_box ml-3"> {{__('culture')}} </span>
                            </span><br>
                            <span class="text">
                                <i style="color: #E7211F; font-size: 12px" class="check_icon bx bx-check-circle"></i>
                                {{__('Centralized storage of')}} <span class="saas_box ml-3"> {{__('information')}} </span>
                            </span><br>
                            <span class="text">
                                <i style="color: #E7211F; font-size: 12px" class="check_icon bx bx-check-circle"></i>
                                {{__('Promoting interaction &')}} <span class="saas_box ml-3"> {{__('connecting employees')}} </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card_item_center col-md-6 col-lg-3">
                    <div class="box">
                        <div class="inner-box">
                            <div class="icon">
                                <img src="{{asset('frontend/assets/image/Product/Detail/SAAS/Picture8.png')}}" width="60" alt="">
                            </div>
                            <h4 class="title font-weight-bold">{{__('L.Book')}}</h4>
                            <p class="text  mb-3">{{__('Resource management')}}</p>
                            <span class="text">
                                <i style="color: #E7211F; font-size: 12px" class="check_icon bx bx-check-circle"></i>
                                {{__('Looking up meeting')}} <span class="saas_box ml-3"> {{__('room booking schedule')}} </span><span
                                        class="saas_box ml-3"> {{__('easily')}} </span>
                            </span><br>
                            <span class="text">
                                <i style="color: #E7211F; font-size: 12px" class="check_icon bx bx-check-circle"></i>
                                {{__('Booking meeting room')}} <span class="saas_box ml-3">{{__('quickly')}}</span>
                            </span><br>
                            <span class="text">
                                <i style="color: #E7211F; font-size: 12px" class="check_icon bx bx-check-circle"></i>
                                {{__('Optimizing company')}} <span class="saas_box ml-3">{{__('resources')}} </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card_item_talent col-md-6 col-lg-3">
                    <div class="box">
                        <div class="inner-box">
                            <div class="icon">
                                <img src="{{asset('frontend/assets/image/Product/Detail/SAAS/Logo_app_service_2-05.svg')}}"
                                     width="60" alt="">
                            </div>
                            <h4 class="title font-weight-bold">{{__('Talent Center')}}</h4>
                            <p class="text  mb-3 text-center"> {{__('Skill & Experience')}}</p>
                            <span class="text ">
                                <i style="color: #E7211F; font-size: 12px" class="check_icon bx bx-check-circle"></i>
                                {{__('Building a network of')}} <span class="saas_box ml-3"> {{__('capacity profiles')}} </span>
                            </span><br>
                            <span class="text ">
                                <i style="color: #E7211F; font-size: 12px" class="check_icon bx bx-check-circle"></i>
                                {{__('Centralized storage of')}} <span class="saas_box ml-3"> {{__('information')}} </span>
                            </span><br>
                            <span class="text ">
                                <i style="color: #E7211F; font-size: 12px" class="check_icon bx bx-check-circle"></i>
                                {{__('Promoting interaction &')}} <span class="saas_box ml-3"> {{__('connecting employees')}} </span>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card_item_doc col-md-6 col-lg-3">
                    <div class="box">
                        <div class="inner-box">
                            <div class="icon">
                                <img src="{{asset('frontend/assets/image/Product/Detail/SAAS/Logo_app_service_2-04.svg')}}"
                                     width="60" alt="">
                            </div>
                            <h4 class="title font-weight-bold">{{__('Community')}}</h4>
                            <p class="text  mb-3">{{__('Social network & Survey')}}</p>
                            <span class="text">
                                <i style="color: #E7211F; font-size: 12px"
                                   class="check_icon bx bx-check-circle"></i>{{__('Focus on internal')}} <span
                                        class="saas_box ml-3"> {{__('communication')}} </span>
                            </span>
                            <br>
                            <span class="text">
                                <i style="color: #E7211F; font-size: 12px"
                                   class="check_icon bx bx-check-circle"></i>{{__('Share knowledge &')}} <span
                                        class="saas_box ml-3"> {{__('experience')}} </span>
                            </span>
                            <br>
                            <span class="text">
                                <i style="color: #E7211F; font-size: 12px" class="check_icon bx bx-check-circle"></i>
                                {{__('Managing centrally &')}} <span class=" saas_box ml-3"> {{__('visually survey data')}} </span>
                            </span>
                        </div>
                    </div>
                </div>

                <!--        End-->
            </div>
        </div>
    </section>

    <div class="features-7" style="background-color: #FFFFFF">
        <div class="col-md-8 mr-auto ml-auto text-center">
            <h2 class="title">KEY ATTRIBUTES
                <span class="cp_under_line"
                      style="background-color: #e50000;width: 80px;height: 2.2px; display: block;clear: both;margin: 0px auto auto;"></span>

            </h2>
        </div>
        <div class="cd-section" id="features">
            <!--     *********    END FEATURES 1      *********      -->
            <div class="features-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="info info-hover"
                                 style="padding: 20px;box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;height: 315px;">
                                <div class="icon icon-primary size-icon-edit">
                                    <i class='bx bxs-analyse'></i>
                                </div>
                                <h4 class="info-title">
                                    {{ __('Fast & Cost saving') }}
                                </h4>
                                <ul class="text-left p-3">
                                    <li style="list-style: disc" class="edit-table-saas">
                                        {{ __('No need to invest in hardware and software') }}
                                    </li>
                                    <li style="list-style: disc" class="edit-table-saas">
                                        {{ __('Pay based on usage') }}
                                    </li>
                                </ul>

                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="info info-hover"
                                 style="padding: 20px;box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;height: 315px;">
                                <div class="icon icon-primary size-icon-edit">
                                    <i class='bx bx-devices'></i>
                                </div>
                                <h4 class="info-title">
                                    {{ __('Scalability') }}
                                </h4>
                                <ul class="text-left p-3">
                                    <li style="list-style: disc" class="edit-table-saas">
                                        {{ __('Easy to scale/ resize according to your needs') }}
                                    </li>
                                    <li style="list-style: disc" class="edit-table-saas">
                                        {{ __('Provide all the services you need') }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="info info-hover"
                                 style="padding: 20px;box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;height: 315px;">
                                <div class="icon icon-primary size-icon-edit">
                                    <i class='bx bx-shield'></i>
                                </div>
                                <h4 class="info-title">
                                    {{ __('Security & stability') }}
                                </h4>
                                <ul class="text-left p-3">
                                    <li style="list-style: disc" class="edit-table-saas">
                                        {{ __('Operated by top experts') }}
                                    </li>
                                    <li style="list-style: disc" class="edit-table-saas">
                                        {{ __('Use Cloud with high security') }}
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="info info-hover"
                                 style="padding: 20px;box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;height: 315px;">
                                <div class="icon icon-primary size-icon-edit">
                                    <i class='bx bx-line-chart'></i>
                                </div>
                                <h4 class="info-title">
                                    {{ __('Through support') }}
                                </h4>
                                <ul class="text-left p-3">
                                    <li style="list-style: disc;" class="edit-table-saas">
                                        {{ __('Continuously upgrade to improve convenience & efficiency for users') }}
                                    </li>
                                    <li style="list-style: disc;" class="edit-table-saas">
                                        {{ __('Multilingual customer support (Vietnamese, English, Korean)') }}
                                    </li>

                                </ul>

                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mt-3">
                        <a href="/api_gateway"
                           class="btn btn-primary btn-round">{{ __('Explore our case studies') }}</a>
                        <a href="https://lead.ldcc.vn" class="btn btn-primary btn-round">{{ __('Explore further') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>