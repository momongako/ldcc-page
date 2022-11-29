
<div class="page-header page-header_align_left" style=" margin-bottom: 0px; padding-top: 0px; padding-bottom: 10px;">
    <div class=page-header_wrapper>
        <div class=wgl-container>
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
                        <span class=current>{{__('Application development & integration')}}</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<main id=main class="site-main bg-white">

    <style>.wgl-tabs_header {
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
                    <a class="dropbtn" href={{route('services.application')}}>{{__('Services')}}</a>
                </div>
                <div class="dropdown">

                    <a class="dropbtn">{{__('Application development')}} <i class='bx bx-chevron-down'></i></a>
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

    </div>
    <!--Page 1-->
    <div class="wrapper">
        <!--     *********     FEATURES       *********      -->
        <div class="features-8">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <h2 class="title">{{__('OUR OFFERING')}}
                    <span class="cp_under_line"
                          style="background-color: #e50000;width: 80px;height: 2px; display: block;clear: both;margin: 0px auto auto;"></span>
                </h2>
                <h4 class="description">{{__('We build and integrate best-in-class application to help you realize your business needs.')}}</h4>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-3 col-lg-3">
                        <div class="card">
                            <div class="card-image">
                                <img src="{{asset('frontend/assets/image/Service/overview/service_11.jpg')}}" class="rounded" alt="">
                            </div>
                            <div class="info text-center" style="padding: 0px 0px 0px">
                                <div class="icon">
                                    <img src="{{asset('frontend/assets/image/About/icon/icons8-laptop-coding-100.png')}}" width="50"
                                         alt="">
                                </div>
                                <h4 class="info-title">{{__('Web Design & Development')}}</h4>
                                <p class="description">{{__('Provide a large portfolio of website design and development services using the latest technologies.')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-3 col-lg-3">
                        <div class="card">
                            <div class="card-image">
                                <img src="{{asset('frontend/assets/image/Service/overview/service12.jpg')}}" class="rounded" alt="">
                            </div>
                            <div class="info text-center " style="padding: 0px 0px 0px">
                                <div class="icon">
                                    <img src="{{asset('frontend/assets/image/About/icon/icons8-code-100.png')}}" width="50" alt="">
                                </div>
                                <h4 class="info-title">{{__('App Development')}}</h4>
                                <p class="description">{{__('Build app to help you deliver optimal and seamless experience to users.')}} </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-3 col-lg-3">
                        <div class="card">
                            <div class="card-image">
                                <img src="{{asset('frontend/assets/image/Service/overview/service13.jpg')}}" class="rounded" alt="">
                            </div>
                            <div class="info text-center" style="padding: 0px 0px 0px">
                                <div class="icon">
                                    <img src="{{asset('frontend/assets/image/About/icon/icons8-e-commerce-100.png')}}" width="50"
                                         alt="">
                                </div>
                                <h4 class="info-title">
                                    {{__('E-Commerce')}}</h4>
                                <p class="description">{{__('Offer a full-suite of E-commerce development services from analysis, planning and development to deliver the best-in-class online stores.')}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-3 col-lg-3">
                        <div class="card">
                            <div class="card-image">
                                <img src="{{asset('frontend/assets/image/Service/Detail/integration-system.jpg')}}" class="rounded"
                                     alt="">
                            </div>
                            <div class="info text-center" style="padding: 0px 0px 0px">
                                <div class="icon">
                                    <img src="{{asset('frontend/assets/image/About/icon/icons8-integration-100.png')}}" width="50"
                                         alt="">
                                </div>
                                <h4 class="info-title">{{__('System Integration')}}</h4>

                                <p class="description">
                                    {{__('Help clients to integrate multiple new applications to existing IT system as to ensure a seamless operation and deliver optimal performance.')}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--     *********     FEATURES      *********      -->
    <div class="features-7">
        <div class="col-md-8 mr-auto ml-auto text-center">
            <h2 class="title">
                {{__('OUR ATTRIBUTES')}}
                <span class="cp_under_line"
                      style="background-color: #e50000;width: 80px;height: 2.2px; display: block;clear: both;margin: 0px auto auto;"></span>
            </h2>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6 px-0">
                    <div class="col-sm-12">
                        <div class="info info-horizontal">
                            <div class="icon">
                                <i class='bx bx-bulb' style="color: #DA291C;font-size: 2.3rem"></i>
                            </div>
                            <div class="description">
                                <h5 class="info-title">{{__('In-Depth Expertise')}}</h5>
                                <p class="description">
                                    {{__('Our team is composed of experienced software developers and engineers who have successfully delivered multiple projects in these areas.')}}</p>
                            </div>
                        </div>
                        <div class="info info-horizontal">
                            <div class="icon">
                                <i class='bx bx-like' style="color: #DA291C;font-size: 2.3rem"></i>
                            </div>
                            <div class="description">
                                <h5 class="info-title">
                                    {{__('Quality assurance')}}</h5>
                                <p class="description">
                                    {{__('We apply strict quality assurance standards and process to ensure excellent deliverables and products.')}}</p>
                            </div>
                        </div>
                        <div class="info info-horizontal">
                            <div class="icon">
                                <i class='bx bx-run' style="color: #DA291C;font-size: 2.3rem"></i>
                            </div>
                            <div class="description">
                                <h5 class="info-title">{{__('Exposure')}}</h5>
                                <p class="description">
                                    {{__('Our team is well-exposed in serving clients across industries (E.g. retail, ecommerce, Financial services, manufacturing and construction).')}}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-flex flex-column justify-content-center">
                    <div>
                        <img src="{{asset('frontend/assets/image/marketing-digital-technology-business-conceptual_31965-24112.webp')}}"
                             alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--   SERVICE – Application development & integration -->
    <div class="cd-section" id="pricing">
        <div class="pricing-1 " id="pricing-1">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 ml-auto mr-auto text-center">
                        <h2 class="title">WORKFLOW
                            <span class="cp_under_line"
                                  style="background-color: #e50000;width: 80px;height: 2.2px; display: block;clear: both;margin: 0px auto auto;"></span>
                        </h2>
                        <h4 class="description ">
                            {{__('Our workflow is based on Agile Method which allows for agility and adaptability, creativity and innovation with lower costs, quality improvement, and maximization of company synergy.')}} </h4>
                    </div>
                </div>
                <div class="row ">
                    <div class="col-md-12">
                        <img src="{{asset('frontend/assets/image/Service/SERVICE–Application%20development&integration.svg')}}"
                             alt="">
                    </div>
                </div>
            </div>
        </div>

    </div>

    <div class="container mb-4">
        <div class="row">
            <div class="col-md-6 ml-auto mr-auto text-center">
                <h2 class="title">TECH SPEC
                    <span class="cp_under_line"
                          style="background-color: #e50000;width: 80px;height: 2.3px; display: block;clear: both;margin: 0px auto auto;"></span>
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <img src="{{asset('frontend/assets/image/Service/Frontend.svg')}}" alt="">
            </div>
        </div>
        <div class="row justify-content-center">
            <a href="{{route('case-study')}}" class="btn btn-primary btn-round">
                {{__('Explore our case studies')}}
            </a>
        </div>
    </div>


</main>
