<div class="page-header page-header_align_left" style=" margin-bottom: 0px; padding-top: 0px; padding-bottom: 10px;">
    <div class=page-header_wrapper>
        <div class=wgl-container>
            <div class=page-header_content>
                <div class=page-header_breadcrumbs style="color: #666666; font-size: 15px; line-height: 24px;">
                    <div class=breadcrumbs>
                        <span class=current>{{__('Home')}}</span>
                        <span
                                class=divider></span>
                        <span class=current>{{__('About us')}}</span>
                        <span  id="partnership" class=divider></span>
                        <span class=current>{{__('PARTNERSHIP')}}</span></div>
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
    <div class=sticky-space  >
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

                    <a class="dropbtn">{{__('Our partner')}} <i class='bx bx-chevron-down'></i></a>
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
    <!--      API gateway (1/2)-->
    <section class="groove-section section-carrer frontpage-block-7 groove-section-boxed" style="margin-bottom: 50px;">
        <div class="groove-title-heading title-heading-center  wgl-double_heading">

            <h2 class="dbl__title-wrapper education-title groove-headingtitle">
                <span>{{__('OUR PARTNERS')}}</span> <br>
                <span class="cp_under_line" style="background-color: #e50000;width: 80px;height: 2.2px; display: block;clear: both;margin:  auto auto;"></span>

            </h2>
            <p>{{__('We partner with the world’s best to ensure quality delivered')}}</p>
        </div>

    </section>
    <div class="container _pc">
        <div class="row mb-5 d-table ">
            <div class="d-flex col-md-10 m-auto justify-content-center " style="gap: 20px; margin-bottom: 50px !important;">
                <div class=" col-sm-6 col-md-2 text-center">
                    <img src="{{asset('frontend/assets/image/Footer/logo.png')}}" width="119" alt="">
                </div>
                <div class=" col-sm-6 col-md-2 text-center">
                    <img src="{{asset('frontend/assets/image/Footer/sap_logo-removebg-preview.png')}}" style="width: 119px" alt="">
                </div>
                <div class="col-sm-6 col-md-2">
                    <img src="{{asset('frontend/assets/image/Footer/logo_3.png')}}" style="width: 119px" alt="">
                </div>
                <div class="col-sm-6 col-md-2 text-center">
                    <img src="{{asset('frontend/assets/image/Footer/logo_4.png')}}" style="width: 60px" alt="">
                </div>
                <div class="col-sm-6 col-md-2 text-center">
                    <img src="{{asset('frontend/assets/image/Footer/logo_5.png')}}" style="width: 119px"  alt="">
                </div>
            </div>
            <div class="d-flex col-md-10 m-auto justify-content-center " style="gap: 20px">
                <div class="col-sm-5 col-md-2 text-center d-flex flex-column justify-content-center">
                    <img src="{{asset('frontend/assets/image/Footer/logo_6.png')}}"  alt="">
                </div>
                <div class="col-sm-5 col-md-2 text-center d-flex flex-column justify-content-center">
                    <img src="{{asset('frontend/assets/image/Footer/logo_7.png')}}"  alt="">

                </div>
                <div class="col-sm-5 col-md-2 text-center   ">
                    <img src="{{asset('frontend/assets/image/Footer/logo_8.png')}}" width="90" alt="">
                </div>
                <div class="col-sm-5 col-md-2 text-center d-flex flex-column justify-content-center">
                    <img src="{{asset('frontend/assets/image/Footer/logo_9.png')}}"  alt="">
                </div>
                <div class="col-sm-5 col-md-2 text-center d-flex flex-column justify-content-center">
                    <img src="{{asset('frontend/assets/image/Footer/logo_10.png')}}"  alt="">
                </div>

            </div>
        </div>
    </div>
    <div class="container _mobile " style="display: none">
        <div class="row mb-5 ">
            <div class="d-flex col-md-10 m-auto justify-content-center " style="gap: 20px">
                <div class=" col-md-5 text-center">
                    <img src="{{asset('frontend/assets/image/Footer/logo.png')}}" width="119" alt="">
                </div>
                <div class="  col-md-5 text-center">
                    <img src="{{asset('frontend/assets/image/Footer/sap_logo-removebg-preview.png')}}" style="width: 119px" alt="">
                </div>
            </div>
        </div>
        <div class="row mb-5 ">
            <div class="d-flex col-md-10 m-auto justify-content-center " style="gap: 20px">
                <div class=" col-md-5 text-center">
                    <img src="{{asset('frontend/assets/image/Footer/logo_3.png')}}" style="width: 115px" alt="">
                </div>
                <div class="col-md-5 text-center">
                    <img src="{{asset('frontend/assets/image/Footer/logo_4.png')}}" style="width: 60px" alt="">
                </div>
            </div>
        </div>
        <div class="row mb-5 ">
            <div class="d-flex col-md-10 m-auto justify-content-center " style="gap: 20px">
                <div class=" col-md-5 text-center">
                    <img src="{{asset('frontend/assets/image/Footer/logo_6.png')}}"  alt="">
                </div>
                <div class="  col-md-5 text-center">
                    <img src="{{asset('frontend/assets/image/Footer/logo_7.png')}}"  alt="">
                </div>
            </div>
        </div>
        <div class="row mb-5 ">
            <div class="d-flex col-md-10 m-auto justify-content-center " style="gap: 20px">
                <div class=" col-md-5 text-center">
                    <img src="{{asset('frontend/assets/image/Footer/logo_8.png')}}" style="width: 115px"  alt="">
                </div>
                <div class="  col-md-5 text-center">
                    <img src="{{asset('frontend/assets/image/Footer/logo_9.png')}}"  alt="">
                </div>
            </div>
        </div>
        <div class="row mb-5 ">
            <div class="d-flex col-md-10 m-auto justify-content-center " style="gap: 20px">
                <div class=" col-md-5 text-center">
                    <img src="{{asset('frontend/assets/image/Footer/logo_10.png')}}"  alt="">
                </div>
                <div class="  col-md-5 text-center">
                    <img src="{{asset('frontend/assets/image/Footer/logo_5.png')}}" style="width: 115px"  alt="">
                </div>
            </div>
        </div>
    </div>
    <style>
        @media only screen and (max-width: 429px) {
            ._pc {
                display: none;
            }
            ._mobile {
                display: block !important;
            }
        }
    </style>
</main>
