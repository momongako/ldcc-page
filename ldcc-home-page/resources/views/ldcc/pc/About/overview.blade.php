<link href="{{asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
<div class="page-header page-header_align_left"
     style=" margin-bottom: 0px; padding-top: 0px; padding-bottom: 10px;">
    <div
            class=page-header_wrapper>
        <div
                class=wgl-container>
            <div
                    class=page-header_content>
                <div
                        class=page-header_breadcrumbs style="color: #666666; font-size: 15px; line-height: 24px;">
                    <div
                            class=breadcrumbs>
                        <span class=current>
                            {{__('Home')}}
                        </span>
                        <span class=divider></span>
                        <span class=current>
                            {{__('About us')}}
                        </span>
                        <span id="overview"
                              class=divider>
                </span>
                        <span
                                class=current>{{__('Overview')}}</span></div>
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
    <div class=sticky-space style="box-shadow: rgba(0, 0, 0, 0.45) 0px 25px 20px -20px !important;" >
        <div class=sticky-container >
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
                    <a class="dropbtn" href={{route('about.overview')}}>{{__('About us')}}</a>
                </div>
                <div class="dropdown">

                    <a class="dropbtn">{{__('Overview')}} <i class='bx bx-chevron-down'></i></a>
                    <div class="dropdown-content">
                        <a href={{route('about.overview')}}>{{__('Overview')}}</a>
                        <a href={{route('about.vision')}}>{{__('Our Vision')}}</a>
                        <a href={{route('about.ceo')}}>{{__('CEO Message')}}</a>
                        <a href={{route('about.history')}}>{{__('Our History')}}</a>
                        <a href={{route('about.partnership')}}>{{__('Our partner')}}</a>
                        <a href={{route('about.new_event')}}>{{__('News and Events')}}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="wrapper">
        <div class="cd-section" id="blogs">

            <!--     *********    END BLOGS 4      *********      -->
            <div class="blogs-4" id="blogs-4">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ml-auto mr-auto">
                            <h4 class="title text-center">{{__('WE PROVIDE COMPREHENSIVE IT SERVICES RANGING FROM BUSINESS CONSULTING TO DEVELOPMENT')}}
                                <br>{{__('MANAGEMENT AND MAINTENANCE')}}</h4>
                            <br />
                            <img src="{{asset('frontend/assets/image/About/About%20-%20overview.svg')}}" />
                        </div>
                    </div>
                </div>
            </div>
            <!--     *********    END BLOGS 4      *********      -->

            <!--     *********     BLOGS 1      *********      -->
            <div class="blogs-1" id="blogs-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 ml-auto mr-auto">
                            <h2 class="title text-center text-uppercase">{{__('Service Value Chain')}}
                                <span class="cp_under_line" style="background-color: #e50000;width: 80px;height: 2.2px; display: block;clear: both;margin: 2px auto auto;"></span>
                            </h2>
                            <br />
                            <div class="card card-plain card-blog" style="height: unset!important;">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <img class="img img-raised rounded" src="{{asset('frontend/assets/image/About/biz.jpg')}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <h6 class="category text-info" style="color: #B3000F!important;">
                                            {{__('Biz. Enhancement')}}</h6>
                                        <br>
                                        <ul class="pl-4">
                                            <li>{{__('Improve IT system given Biz development direction and plan')}}</li>
                                            <li>{{__('Suggest new IT based on clients’ needs and Business Direction')}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-plain card-blog" style="height: unset!important;">
                                <div class="row">
                                    <div class="col-md-7">
                                        <h6 class="category text-danger" style="color: #B3000F!important;">
                                            {{__('System Development')}}
                                        </h6>
                                        <br>
                                        <ul class="pl-4">
                                            <li>{{__('Define IT system architecture')}}</li>
                                            <li>{{__('Conduct integration and development')}}</li>
                                            <li class ={{ session()->get('locale') == 'ko' ? 'invisible' : '' }}>Support Strategic Tech introduction and integration</li>
                                        </ul>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <img class="img img-raised rounded"
                                                 src="{{asset('frontend/assets/image/About/Detail/overview/about_1.jpg')}}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card card-plain card-blog" style="height: unset!important;">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <img class="img img-raised rounded"
                                                 src="{{asset('frontend/assets/image/About/sys.jpg')}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <h6 class="category text-info" style="color: #B3000F!important;">
                                            {{__('System management')}}
                                        </h6>
                                        <br>
                                        <ul class="pl-4">
                                            <li>
                                                {{__('Inspect & maintain on a regular basis')}}
                                            </li>
                                            <li>
                                                {{__('Liaise with creditable vendors to deliver management and maintenance.')}}
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--     *********    END BLOGS 1      *********      -->
        </div>


    </div>



</main>
