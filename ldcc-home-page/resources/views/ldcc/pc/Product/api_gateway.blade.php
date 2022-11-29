<link href="frontend/assets/css/bootstrap.min.css" rel="stylesheet" />
<link href="frontend/assets/css/now-ui-kit.css?v=1.1.0" rel="stylesheet" />
<style>
    p {
        line-height: 20px;
        font-weight: inherit;
        font-size: 15px;
        margin-bottom: 10px;
    }
    h3{
        margin-bottom: 0.5rem;
    }
</style>
<?php
//  if(\App\Lib\BHelp::getConfigSetting('PRODUCT_API_GATEWAY')){
//      echo \App\Lib\BHelp::getConfigSetting('PRODUCT_API_GATEWAY');
//  }
?>
<div class="page-header page-header_align_left" style=" margin-bottom: 0px; padding-top: 0px; padding-bottom: 10px;">
    <div class=page-header_wrapper>
        <div class=wgl-container>
            <div class=page-header_content>
                <div class=page-header_breadcrumbs style="color: #666666; font-size: 15px; line-height: 24px;">
                    <div class=breadcrumbs>
                        <a href='#' class=home>
                            {{ __('Home') }}
                        </a>
                        <span class=divider></span>
                        <a href={{route('products.api_gateway')}}>
                            {{ __('Products') }}
                        </a>
                        <span id="overview" class=divider></span>
                        <span class=current>
                            {{ __('API GATEWAY') }}
                        </span>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<main id=main class="site-main bg-white">
    <style>
        .wgl-tabs_header {
            min-height: 150px;
        }

        .groove-text-editor ul li {
            font-weight: 500;
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
                        {{ __('Product') }}
                    </a>
                </div>
                <div class="dropdown">

                    <a class="dropbtn">
                        {{ __('API GATEWAY') }}
                        <i class='bx bx-chevron-down'></i></a>
                    <div class="dropdown-content">
                        <a href="#">
                            {{ __('API GATEWAY') }}
                        </a>
                        <a href="/saas">
                            {{ __('SAAS') }}
                        </a>
                        <a href="/building">
                            {{ __('Smart building') }}
                        </a>
                        <a href="/parking">
                            {{ __('Smart parking') }}
                        </a>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>

    <div class="features-7 p-0">
        <div class="col-md-8 mr-auto ml-auto text-center">
            <h2 class="title">
                {{ __('THE API CHALLENGE') }}
                <span class="cp_under_line"
                      style="background-color: #e50000;width: 80px;height: 2.2px; display: block;clear: both;margin: 0px auto auto;"></span>
            </h2>
            <p>
                {{ __('Traditionally, a platform struggles to connect to external services using various combinations of connection methods and types.') }}
            </p>
        </div>
        <div class="container">
            <div class="container row m-auto  ">
                <div class="col-md-12">
                    <div class="card card-plain card-blog border-0" style="height: unset!important;">
                        <div class="row mt-5">
                            <div class="col-md-7">
                                <div class="card-image text-right p-3">
                                    <img class="img img-raised rounded" style="box-shadow: unset!important;"
                                         src="{{asset('frontend/assets/image/Product/Detail/Group%2023.svg')}}" />
                                </div>
                                <ul style="list-style: none">
                                    <li>
                                        <span style="color: #B3000F; font-size: 12px">CM:</span> <span style="font-size: 11px">Connection
                        method</span>
                                    </li>
                                    <li>
                                        <span style="color: #B3000F; font-size: 12px">CT:</span> <span style="font-size: 11px">Connection
                        type</span>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-md-5" style="margin: auto 0">
                                <div>
                                    <h3><span>
                                            {{ __('Key issues') }}
                                        </span></h3>
                                    <ul style="list-style: none">
                                        <li class="p-1"><img src="{{asset('frontend/assets/image/Product/icon-1.svg')}}" alt="">
                                            {{ __('High initial configuration cost') }}
                                        </li>
                                        <li class="p-1"><img src="{{asset('frontend/assets/image/Product/icon-1.svg')}}" alt="">
                                            {{ __('Require regular maintenance') }}
                                        </li>
                                        <li class="p-1"><img src="{{asset('frontend/assets/image/Product/icon-1.svg')}}" alt="">
                                            {{ __('Potential cyber-security risks') }}
                                        </li>
                                    </ul>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="features-7 p-0">
        <div class="col-md-8 mr-auto ml-auto text-center">
            <h2 class="title p-0">
                {{ __('OUR SOLUTION') }}
                <span class="cp_under_line"
                      style="background-color: #e50000;width: 80px;height: 2.2px; display: block;clear: both;margin: 0px auto auto;"></span>
            </h2>
        </div>
        <div class="col-md-6 mr-auto ml-auto text-right">
            <img src="{{asset('frontend/assets/image/Product/logo-latD.svg')}}" width="150" alt="">
        </div>
        <div class="container">
            <div class="container row m-auto  ">
                <div class="col-md-12">
                    <div class="card card-plain card-blog border-0" style="height: unset!important;">
                        <div class="row mt-5">
                            <div class="col-md-6 mt-3 p-0">
                                <div>
                                    <div>
                                        <p class="sub-title" style="font-weight: bolder"><span style="color: #B3000F">LATG<sup
                                                        style="font-size: 11px">TM</sup></span> - <span style="color: #B3000F">L</span>otte <span
                                                    style="color: #B3000F">A</span>PI <span style="color: #B3000F">T</span>ransit <span
                                                    style="color: #B3000F">G</span>ateway</p>
                                        <p>{{ __('Our LATG allows client app/platform to connect with multiple external platforms') }}
                                            <span class="red-color">
                                                {{ __('with only one time of integration') }}
                                            </span>, {{ __('thus reduce any future cost') }}
                                            {{ __('related to AP integration') }}
                                             .</p>
                                        <ul style="list-style: none">
                                            <li>
                                                <img src="{{asset('frontend/assets/image/Product/icon-2.svg')}}" alt=""> <strong>{{ __('Cost-saving') }}</strong>
                                                <br>
                                                <ol>{{ __('Using LATG™s various gateways, a company will save development and API configuration resources, also ensure a smoother operation') }}</ol>
                                            </li>

                                            <li><img src="{{asset('frontend/assets/image/Product/icon-2.svg')}}" alt=""> <strong>{{ __('Risk mitigation') }}</strong> <br>
                                                <ol> {{ __('Since there is no need to modify core of platform, the cybersecurity risk can be greatly reduced') }}</ol>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="card-image">
                                    <img class="img img-raised rounded" style="box-shadow: unset!important;"
                                         src="{{asset('frontend/assets/image/Product/Detail/API%20getway%202.svg')}}" />
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="container row m-auto justify-content-center p-4">
                    <a href="/case-study" class="btn  btn-round" style="background-color: #B3000F">
                        {{ __('Explore our case studies') }}
                    </a>
                    <a href="https://latg.lotte.vn/" class="btn  btn-round" style="background-color: #B3000F">
                        {{ __('Explore further') }}
                    </a>
                </div>


            </div>
        </div>
    </div>

</main>

