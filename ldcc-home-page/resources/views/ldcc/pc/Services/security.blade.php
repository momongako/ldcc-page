<link href="{{asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
<div class="page-header page-header_align_left" style=" margin-bottom: 0px; padding-top: 0px; padding-bottom: 10px;">
    <div class=page-header_wrapper>
        <div
                class=wgl-container>
            <div
                    class=page-header_content>
                <div
                        class=page-header_breadcrumbs style="color: #666666; font-size: 15px; line-height: 24px;">
                    <div
                            class=breadcrumbs>
                        <a href={{route('home')}} class=home>
                            {{__('Home')}}
                        </a>
                        <span class=divider></span>
                        <a href={{route('services.application')}} >
                            {{__('Service')}}
                        </a>
                        <span id="application" class=divider></span>
                        <span
                                class=current>{{__('Security')}}</span></div>
                </div>

            </div>
        </div>
    </div>
</div>
<main id=main class="site-main bg-white">
    <style>
        .wgl-tabs_header{
            min-height: 150px;
        }
        main{
            line-height: 1.412;
        }
        .groove-text-editor ul li {
            font-weight: 500;
        }
    </style>
    <div class=sticky-space>
        <div class=sticky-container>
            <div class="header section-careers-sticky" style="display: flex;justify-content: center;margin-left: 0">
                <style>
                    .card.card-plain.card-blog {
                        border: none;
                    }
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
                        z-index: 1;
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

                    <a class="dropbtn">{{__('Security')}} <i class='bx bx-chevron-down'></i></a>
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
    <!--   SERVICE – Security -->
    <div class="wrapper">
        <div class="cd-section" id="blogs">

            <!--     *********     BLOGS 3      *********      -->
            <div class="blogs-3">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 ml-auto mr-auto">
                            <h2 class="title text-center mt-4">
                                {{__('SECURITY')}}
                                <span class="cp_under_line" style="background-color: #e50000;width: 80px;height: 2px; display: block;clear: both;margin: 0px auto auto;"></span>
                            </h2>
                            <p class="text-center" style="color:#000000;line-height: 20px;">
                                {{__('We build a reliable business environment with optimized convergence security services')}}
                                <br> {{__('with a group of information protection expert.')}}</p>
                            <br />
                            <div class="card card-plain card-blog" style="height:unset;margin: unset">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <img class="img img-raised rounded" src="{{asset('frontend/assets/image/Service/Security/security.jpg')}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <h3 class="card-title">
                                            {{__('Security compliance diagnostics')}}
                                        </h3>
                                        <p >
                                            {{__('Support clients to evaluate IT policies and systems related to IT security according to existing group and corporate regulations')}}
                                        </p>
                                        <ul>
                                            <ol><i class='bx bx-chevron-right' style="color: #B3000F"></i>
                                                {{__('Compliance and Risk')}}
                                            </ol>
                                            <ol><i class='bx bx-chevron-right' style="color: #B3000F"></i>
                                                {{__('Audit collection')}}
                                            </ol>
                                            <ol><i class='bx bx-chevron-right' style="color: #B3000F"></i>
                                                {{__('Procedure Consultant')}}
                                            </ol>
                                            <ol><i class='bx bx-chevron-right' style="color: #B3000F"></i>
                                                {{__('Training on demand')}}
                                            </ol>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <br>
                            <div class="card card-plain card-blog" style="height: unset">
                                <div class="row">
                                    <div class="col-md-7">
                                        <h3 class="card-title">
                                            {{__('Security system architecture and implementation')}}
                                        </h3>
                                        <p>
                                            {{__('Design an optimal security system architecture to enhance information security for clients along with searching for relevant partners')}}
                                            <br/>
                                            {{__('Execute implementation and oversee performance of vendors to ensure new security to be able to deliver expected performance.')}}
                                        </p>
                                        <ol><i class='bx bx-chevron-right' style="color: #B3000F"></i>
                                            {{__('Consulting to build Infrastructure Security Endpoint Security')}}
                                        </ol>
                                        <ol><i class='bx bx-chevron-right' style="color: #B3000F"></i>
                                            {{__('Network Security')}}
                                        </ol>
                                        <ol><i class='bx bx-chevron-right' style="color: #B3000F"></i>
                                            {{__('Web Security')}}
                                        </ol>
                                        <ol><i class='bx bx-chevron-right' style="color: #B3000F"></i>
                                            {{__('Data Security')}}
                                        </ol>
                                        <ol><i class='bx bx-chevron-right' style="color: #B3000F"></i>
                                            {{__('Cloud Security')}}
                                        </ol>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <img class="img img-raised rounded" src="{{asset('frontend/assets/image/Service/Security/security2.jpg')}}" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <hr>
                            <div class="card card-plain card-blog" style="height: unset;">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <img class="img img-raised rounded" src="{{asset('frontend/assets/image/Service/Security/scurity3.webp')}}" />
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <h3 class="card-title">
                                            {{__('Security management')}}
                                        </h3>
                                        <p>
                                            {{__('Perform regular inspection of information security for customers, and perform upgrade of the system on information security to ensure optimal performance.')}}
                                        </p>
                                        <ul>
                                            <ol><i class='bx bx-chevron-right' style="color: #B3000F"></i>
                                                {{__('Optimize Policies')}}
                                            </ol>
                                            <ol><i class='bx bx-chevron-right' style="color: #B3000F"></i>
                                                {{__('Hardening Network, EndPoint devices')}}
                                            </ol>
                                            <ol><i class='bx bx-chevron-right' style="color: #B3000F"></i>
                                                {{__('Incident response')}}
                                            </ol>
                                            <ol><i class='bx bx-chevron-right' style="color: #B3000F"></i>
                                                {{__('Health-check monthly')}}
                                            </ol>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="card card-plain card-blog" style="height: unset;">
                                <div class="row">
                                    <div class="col-md-7">
                                        <h3 class="card-title">
                                            {{__('Vulnerability assessment')}}
                                        </h3>
                                        <p>
                                            {{__('Conduct mock-hacking in order to assess the vulnerability of the current IT system which including penetration testing, product assessment, network scanning, and situational awareness.')}}
                                        </p>
                                        <ul>
                                            <ol><i class='bx bx-chevron-right' style="color: #B3000F"></i>
                                                {{__('Vulnerability assessment')}}
                                            </ol>
                                            <ol><i class='bx bx-chevron-right' style="color: #B3000F"></i>
                                                {{__('Penetration testing')}}
                                            </ol>
                                            <ol><i class='bx bx-chevron-right' style="color: #B3000F"></i>
                                                {{__('Product assessment')}}
                                            </ol>
                                            <ol><i class='bx bx-chevron-right' style="color: #B3000F"></i>
                                                {{__('Network Scanning')}}
                                            </ol>
                                            <ol><i class='bx bx-chevron-right' style="color: #B3000F"></i>
                                                {{__('Vulnerability scanning')}}
                                            </ol>
                                            <ol><i class='bx bx-chevron-right' style="color: #B3000F"></i>
                                                {{__('Situational awareness')}}
                                            </ol>

                                        </ul>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="card-image">
                                            <img class="img img-raised rounded" src="{{asset('frontend/assets/image/Service/Security/security4.webp')}}" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center mb-4">
                        <a href="{{route('case-study')}}" class="btn btn-primary btn-round">
                            {{__('Explore our case studies')}}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>



</main>
