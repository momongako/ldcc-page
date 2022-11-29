<link rel=stylesheet href={{asset('frontend/assets/wp-content/themes/zikzag/css/style-GrooveFrontpage-ver3.0.css')}}>
<link rel=stylesheet href={{asset('frontend/assets/wp-content/themes/zikzag/css/style-GrooveFrontpage-ver1.9.css')}}>
<link href="{{asset('frontend/assets/css/now-ui-kit.css')}}" rel="stylesheet" />
<div class="page-header page-header_align_left" style=" margin-bottom: 0px; padding-top: 0px; padding-bottom: 10px;">
    <div class=page-header_wrapper>
        <div
                class=wgl-container>
            <div
                    class=page-header_content>
                <div
                        class=page-header_breadcrumbs style="color: #666666; font-size: 15px; line-height: 24px;">
                    <div class="breadcrumbs">
                        <a href={{route('home')}} class=home>
                            {{__('Home')}}
                        </a>
                        <span class=divider></span>
                        <a href={{route('services.application')}} >
                            {{__('Service')}}
                        </a>
                        <span id="application" class=divider></span>
                        <span class=current>{{__('SYSTEM MANAGEMENT')}}</span>
                    </div>
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

                    <a class="dropbtn">{{__('System management')}} <i class='bx bx-chevron-down'></i></a>
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
    <!--   SERVICE – -->

    <div class="wrapper">
        <div class="cd-section" id="blogs">
            <!--     *********     BLOGS 1      *********      -->
            <div class="blogs-1" id="blogs-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 ml-auto mr-auto">
                            <h2 class="title text-center">{{__('OUR OFFERING')}}
                                <span class="cp_under_line" style="background-color: #e50000;width: 80px;height: 2.2px;
                                 display: block;clear: both;margin: 2px auto auto;"></span>
                            </h2>

                            <p class="text-center">{{__('We deliver efficiently running IT systems for you.')}}</p>
                            <br />
                            <div class="card card-plain card-blog" style="height: unset!important;">
                                <div class="row mb-5">
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <img class="img img-raised rounded" src="{{asset('frontend/assets/image/About/sys.jpg')}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <h6 class="category text-info" style="color: #B3000F!important;">
                                            {{__('Software management')}}</h6>

                                        <p class="card-description">
                                            Ensure a stable operational software performance for clients, we will regular check and perform software update.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-plain card-blog" style="height: unset!important;">
                                <div class="row">
                                    <div class="col-md-7">
                                        <h6 class="category text-danger" style="color: #B3000F!important;">
                                            {{__('IT infrastructure management')}}
                                        </h6>

                                        <p class="card-description">
                                            {{__('Ensure performance of IT infrastructure (including server, network and office - accessories) up to expectation of users, deliver the optimal up-time of the infrastructure system.')}}
                                        </p>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <img class="img img-raised rounded
                                " src="{{asset('frontend/assets/image/Service/ERP/service_off.jpg')}}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--     *********    END BLOGS 1      *********      -->
            <!--     *********     BLOGS 2      *********      -->
            <div class="blogs-2" id="blogs-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 ml-auto mr-auto">
                            <h2 class="title text-center">{{__('OUR ATTRIBUTES')}}
                                <span class="cp_under_line" style="background-color: #e50000;width: 80px;height: 2.2px;
                                 display: block;clear: both;margin: 2px auto auto;"></span>
                            </h2>
                            <p class="text-center">{{__('We have strong experiences with multiple software and IT infrastructure system given years of serving our clients')}}</p>
                            <br />
                            <div class="row justify-content-center">
                                <div class="col-md-5">
                                    <div class="card card-plain card-blog" style="height: unset">
                                        <div class="card-image">
                                            <a>
                                                <img class="img img-raised rounded" src="{{asset('frontend/assets/image/Service/ERP/istock.jpg')}}" />
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="category text-info" style="color: #B3000F!important;">
                                                {{__('In-Depth Expertise')}}
                                            </h6>

                                            <p class="card-description">
                                                {{__('We have strong experiences with multiple software and IT infrastructure system given years of serving our customers.')}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-5">
                                    <div class="card card-plain card-blog" style="height: unset">
                                        <div class="card-image">
                                            <a >
                                                <img class="img img-raised rounded" src="https://www.lottelogistics.com.vn/images/b-1.jpg"  style="height: 208px!important;"/>
                                            </a>
                                        </div>
                                        <div class="card-body">
                                            <h6 class="category text-success" style="color: #B3000F!important;">

                                                {{__('Skillful Talent Pool')}}
                                            </h6>
                                            <p class="card-description">
                                                {{__('Well-trained and certified human resources to serve our clients .')}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-center mb-4">
                                <a href="{{route('case-study')}}" class="btn btn-primary btn-round"> {{__('Explore our case studies')}}</a>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!--     *********    END BLOGS 2      *********      -->


        </div>
    </div>
</main>
