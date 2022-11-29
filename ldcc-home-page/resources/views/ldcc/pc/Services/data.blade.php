<link href="{{asset('frontend/assets/css/now-ui-kit.css?v=1.1.0')}}" rel="stylesheet" />
<link href="{{asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
<div class="page-header page-header_align_left" style=" margin-bottom: 0px; padding-top: 0px; padding-bottom: 10px;">
    <div class=page-header_wrapper>
        <div
                class=wgl-container>
            <div
                    class=page-header_content>
                <div
                        class=page-header_breadcrumbs style="color: #666666; font-size: 15px; line-height: 24px;">
                    <div class=breadcrumbs>
                        <a href={{route('home')}} class=home>
                            {{__('Home')}}
                        </a>
                        <span class=divider></span>
                        <a href={{route('services.application')}} >
                            {{__('Service')}}
                        </a>
                        <span id="application" class=divider></span>
                        <span class=current>{{__('Data Center')}}</span></div>
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

                    <a class="dropbtn">{{__('Data Center')}} <i class='bx bx-chevron-down'></i></a>
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
            <hr>
        </div>
        <!--   SERVICE – Application development & integration -->
        <!--        Header Data-->
        <div class="wrapper">
            <div class="cd-section" id="blogs">
                <!--     *********     BLOGS 2      *********      -->
                <div class="blogs-2" id="blogs-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 ml-auto mr-auto">
                                <h2 class="title text-center">
                                    {{__('OUR SERVICE OFFERING')}}
                                    <span class="cp_under_line" style="background-color: #e50000;width: 80px;height: 2.3px; display: block;clear: both;margin: 0px auto auto;"></span>
                                </h2>
                                <p class="text-center">{{__('We provide total data centre services to help client realize their business needs.')}}</p>
                                <br />
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <div class="card card-plain card-blog" style="height: unset;border: none">
                                            <div class="card-image d-flex justify-content-center">
                                                <img class="img img-raised rounded" style="height: 297px !important;" src="{{asset('frontend/assets/image/Service/Data/Detail/data_2.jpg')}}" />
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title text-center">
                                                    Co-location/Rack rental
                                                </h5>
                                                <p class="card-description text-center">
                                                    {{__('Offer a place to ensure that your servers will run efficiently and smoothly without any worry in mind.')}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card card-plain card-blog" style="height: unset;border:none">
                                            <div class="card-image d-flex justify-content-center">
                                                <img class="img img-raised rounded" src="{{asset('frontend/assets/image/Service/Data/cloud_22.jpg')}}" />
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title text-center">
                                                    {{__('Virtual server/Cloud')}}
                                                </h5>
                                                <p class="card-description text-center">
                                                    {{__('Offer virtual storage for your file, no need to invest in purchasing servers.')}}
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
        <div class="wrapper">
            <div class="cd-section" id="blogs">
                <!--     *********     BLOGS 2      *********      -->
                <div class="blogs-2" id="blogs-2">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-10 ml-auto mr-auto">
                                <div class="row justify-content-center">
                                    <div class="col-md-6">
                                        <div class="card card-plain card-blog" style="height: unset;border: none">
                                            <div class="card-image d-flex justify-content-center">
                                                <img class="img img-raised rounded" src="{{asset('frontend/assets/image/Service/Data/Detail/data_1.webp')}}"  style="height: 297px;"/>
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title text-center">
                                                    {{__('Dedicated server')}}
                                                </h5>
                                                <p class="card-description text-center">
                                                    {{__('Allow you to rent a specific servers on specific space in the rack system.')}}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="card card-plain card-blog" style="height: unset;border: none">
                                            <div class="card-image d-flex justify-content-center">
                                                <img class="img img-raised rounded" src="{{asset('frontend/assets/image/Service/Cloud/data_11.webp')}}" />
                                            </div>
                                            <div class="card-body">
                                                <h5 class="card-title text-center">
                                                    {{__('DCIM Service')}}
                                                </h5>
                                                <p class="card-description text-center">
                                                    {{__('On-site management of your server and storage along with remote monitoring services 24/365.')}}
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

        <div class="features-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-5 justify-content-end">
                        <h2 class="title">{{__('Key advantages')}}</h2>
                        <ul style="padding-left: 20px!important;">
                            <li>{{__('Downtime prevention')}}</li>
                            <li>{{__('Remote monitoring and management')}}</li>
                            <li>{{__('Rich experience in managing equipment from multiple vendors')}}</li>
                            <li>{{__('Proactive incident management')}}</li>
                            <li>{{__('Optimized performance and capacity')}}</li>
                        </ul>
                    </div>
                    <div class="col-md-5">
                        <div class="tablet-container" style="float: right">
                            <img src="{{asset('frontend/assets/image/Service/Data/Picture5.png')}}" />
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-5 mb-3">
                <div class="col-md-12 text-center">

                    <h2>{{
                            session()->get('locale') == 'ko'
                            ?
                            ''
                            :
                            'Our data center is designed to ensure'
                        }}
                        <span style="color: #B3000F">
                            99.98%
                        </span>
                        {{
                            session()->get('locale') == 'ko'
                            ?
                            '가동 시간을 보장하도록 설계되었습니다'
                            :
                            'uptime'
                        }}
                    </h2>
                </div>
            </div>
            <div class="row">

                <div class="col-md-12">
                    <table  class="table table-bordered table-responsive">
                        <thead>
                        <tr >
                            <th class="text-center border table-secondary"><b>{{__('Specification')}}</b></th>
                            <th class="text-center border table-secondary"><b>Co-Lo</b></th>
                            <th class="text-center border table-secondary"><b>{{__('Rack')}}</b></th>
                            <th class="text-center border table-secondary"><b>{{__('Dedicated Server')}}</b></th>
                            <th class="text-center border table-secondary"><b>{{__('Rack Cage')}}</b></th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <th scope="row">{{__('Service initialization fee')}}</th>
                            <td>{{__('Free')}}</td>
                            <td>{{__('Free')}}</td>
                            <td>{{__('Free')}}</td>
                            <td></td>
                        </tr>
                        <tr>
                            <th scope="row">{{__('Rack space')}}</th>
                            <td>1U ~ 42U</td>
                            <td>42U</td>
                            <td>1U ~ 42U</td>
                            <td>{{__('From 08 racks')}}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{__('Separate an isolated area with an iron cage')}} </th>
                            <td>{{__('no')}}</td>
                            <td>{{__('no')}}</td>
                            <td>{{__('no')}}</td>
                            <td>{{__('yes')}}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{__('Power capacity')}}</th>
                            <td>1000 ~ 5000W</td>
                            <td>{{__('From 5000W')}}</td>
                            <td>1000 ~ 5000W</td>
                            <td>{{__('From 8 * 5000W')}}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{__('Maximum domestic internet speed')}}</th>
                            <td colspan="4" class="text-center">
                                {{__('Flexible according to customer requirements')}}
                            </td>
                        </tr>
                        <tr>
                            <th scope="row">{{__('The amount of information sent and received')}}</th>
                            <td colspan="4" class="text-center">{{__('Flexible according to customer requirements')}}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{__('Network port')}}</th>
                            <td colspan="4" class="text-center">100 Mbps/ 1000Mbps</td>
                        </tr>
                        <tr>
                            <th scope="row">{{__('Monitor online bandwidth traffic')}}</th>
                            <td colspan="4" class="text-center">{{__('yes')}}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{__('Technical support')}}</th>
                            <td colspan="4" class="text-center">{{__('yes')}}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{__('Configuration of the device')}}</th>
                            <td colspan="4" class="text-center">{{__('Flexible according to customer requirements')}}</td>
                        </tr>
                        <tr>
                            <th scope="row">{{__('Data Transfer')}}</th>
                            <td colspan="4" class="text-center">{{__('Unlimited')}}</td>
                        </tr>


                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row justify-content-center m-4">
                <a href="{{route('case-study')}}" class="btn btn-primary btn-round">
                    {{__('Explore our case studies')}}
                </a>
            </div>
        </div>

    </div>
</main>