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
                                class=current>{{__('IT OFFSHORE')}}</span></div>
                </div>

            </div>
        </div>
    </div>
</div>
<main id=main class="site-main bg-white">
    <link href="{{asset('frontend/assets/css/now-ui-kit.css?v=1.1.0')}}" rel="stylesheet" />
    <link href="{{asset('frontend/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
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
                    <a class="dropbtn" href="#">{{__('IT Offshore')}} <i class='bx bx-chevron-down'></i></a>
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
    <div class="col-md-8 ml-auto mb-2 mr-auto text-center">
        <h2 class="title"> {{__('OUR OFFERING')}} <br>
            <span class="cp_under_line" style="background-color: #e50000;width: 80px;height: 2px; display: block;clear: both;margin: 1px auto auto;"></span>
        </h2>
        <h4 class="description text-dark" style="font-weight: 400!important;">{{__('Experience high-quality global outsourcing services at a reasonable price.')}}</h4>
    </div>
    <div class="logo_mobile col-md-6 mr-auto ml-auto text-center m-5">
        <img src="{{asset('frontend/assets/image/Service/offsor/logo_gloss.jpg')}}" width="300" alt="">
    </div>

    <div class="container container_slide mb-5">

        <div class="row justify-content-center">
            <div class="column">
                <a class="demo cursor" onclick="currentSlide(1)">{{__('Web Development')}}</a>
            </div>
            <div class="column">
                <a class="demo cursor" onclick="currentSlide(2)">{{__('App Development')}}</a>
            </div>
            <div class="column">
                <a class="demo cursor" onclick="currentSlide(3)">{{__('Data processing')}}</a>
            </div>
            <div class="column">
                <a class="demo cursor" onclick="currentSlide(4)">{{__('Tech consulting')}}</a>
            </div>
        </div>
        <hr>
        <!-- Full-width images with number text -->
        <div class="mySlides">
            <div class="image_category container">
                <div class="inner row col-md-12 m-auto">
                    <div class="col-md-6 d-flex justify-content-around">
                        <div class="item_image col-md-3 "  style="max-width: unset !important;">
                <span class="image_box">
                  <img  src="{{asset('frontend/assets/image/Service/offsor/icon-web.svg')}}" alt="">
                </span>
                            <p>{{__('Design website')}}</p>
                        </div>
                        <div class="item_image col-md-3 " style="max-width: unset !important;">
                <span class="image_box">
                  <img src="{{asset('frontend/assets/image/Service/offsor/icon-app.svg')}}" alt="">
                </span>
                            <p>{{__('Web application')}}</p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-around">
                        <div class="item_image col-md-3 " style="max-width: unset !important;">
                <span class="image_box">
                  <img src="{{asset('frontend/assets/image/Service/offsor/icon-admin.svg')}}" alt="">
                </span>
                            <p>{{__('Admin page')}}</p>
                        </div>
                        <div class="item_image  col-md-3 " style="max-width: unset !important;">
                <span class="image_box">
                  <img src="{{asset('frontend/assets/image/Service/offsor/icon-responsive.svg')}}" alt="">
                </span>
                            <p>{{__('Responsive')}}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="numbertext ">
                <h2 class="text-center m-0">{{__('WEB DEVELOPMENT')}}</h2>
                {{__('Develop and maintain app applications optimized for the customers business')}}
            </div>

        </div>

        <div class="mySlides">
            <div class="image_category container">
                <div class="inner row col-md-12 m-auto">
                    <div class="col-md-6 d-flex justify-content-around">
                        <div class="item_image col-md-3 " style="max-width: unset !important;">
                  <span class="image_box">
                    <img  src="{{asset('frontend/assets/image/Service/offsor/icon-app-1.svg')}}" alt="">
                  </span>
                            <p>Android</p>
                        </div>
                        <div class="item_image col-md-3 " style="max-width: unset !important;">
                  <span class="image_box">
                    <img src="{{asset('frontend/assets/image/Service/offsor/icon-app-2.svg')}}" alt="">
                  </span>
                            <p>iOS</p>
                        </div>
                    </div>
                    <div class="col-md-6 d-flex justify-content-around">
                        <div class="item_image col-md-3 " style="max-width: unset !important;">
                  <span class="image_box">
                    <img src="{{asset('frontend/assets/image/Service/offsor/icon-app-3.svg')}}" alt="">
                  </span>
                            <p>{{__('Cross Platform')}}</p>
                        </div>
                        <div class="item_image col-md-3 " style="max-width: unset !important;">
                  <span class="image_box">
                    <img src="{{asset('frontend/assets/image/Service/offsor/icon-app-4.svg')}}" alt="">
                  </span>
                            <p>Store Distribution</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="numbertext text_mobile" style=" {{session()->get('locale') == 'ko' ? 'left: 280px;' : 'left: 155px;'}}">
                <h2 class="text-center m-0">APP</h2>
                {{__('Lotte Data Communication develops and maintains web applications optimized for customer is business.')}}
            </div>

        </div>

        <div class="mySlides">
            <div class="image_category container">
                <div class="inner row  m-auto">
                    <div class="row col-md-9 m-auto justify-content-around ">
                        <div class="item_image col-md-3 " >
                  <span class="image_box">
                    <img  src="{{asset('frontend/assets/image/Service/offsor/icon-ecommerce-1.svg')}}" alt="">
                  </span>
                            <p>{{__('E-commerce data')}}</p>
                        </div>
                        <div class="item_image col-md-3 " >
                  <span class="image_box">
                    <img src="{{asset('frontend/assets/image/Service/offsor/icon-ecommerce-3.svg')}}" alt="">
                  </span>
                            <p>{{__('Big data')}}</p>
                        </div>
                        <div class="item_image col-md-3 " >
                  <span class="image_box">
                    <img src="{{asset('frontend/assets/image/Service/offsor/icon-ecommerce-2.svg')}}" alt="">
                  </span>
                            <p>{{__('AI training data')}}</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="numbertext text_mobile " style="left: 297px;">
                <h2 class="text-center m-0">
                    {{__('DATA PROCESSING')}}
                </h2>
                {{__('Provide the data processing services according to business needs.')}}
            </div>
        </div>

        <div class="mySlides">
            <div class="image_category container">
                <div class="inner row col-md-12  m-auto">
                    <div class="col-md-6 d-flex justify-content-around">
                        <div class="item_image col-md-3 " style="max-width: unset!important;">
                  <span class="image_box">
                    <img  src="{{asset('frontend/assets/image/Service/offsor/icon-tech-1.svg')}}" alt="">
                  </span>
                            <p>{{__('System')}}</p>
                        </div>
                        <div class="item_image col-md-3 "  style="max-width: unset !important;">
                  <span class="image_box">
                    <img  src="{{asset('frontend/assets/image/Service/offsor/icon-tech-2.svg')}}" alt="">
                  </span>
                            <p>{{__('Resource management')}}</p>
                        </div >
                    </div>
                    <div class="col-md-6 d-flex justify-content-around">
                        <div class="item_image col-md-3 "  style="max-width: unset !important;">
                  <span class="image_box">
                    <img  src="{{asset('frontend/assets/image/Service/offsor/icon-tech-3.svg')}}" alt="">
                  </span>
                            <p>{{__('Analysis')}}</p>
                        </div>
                        <div class="item_image col-md-3 "  style="max-width: unset !important;">
                  <span class="image_box">
                    <img  src="{{asset('frontend/assets/image/Service/offsor/icon-tech-4.svg')}}" alt="">
                  </span>
                            <p>{{__('Advice')}}</p>
                        </div>
                    </div>

                </div>
            </div>
            <div class="numbertext text_mobile " style="left: 300px;">
                <h2 class="text-center m-0">{{__('TECHNOLOGY CONSULTING')}}</h2>
                {{__('Provide professional and strategic consulting services for overall IT.')}}
            </div>
        </div>


    </div>

    <div class="wrapper mb-3">
        <!--     *********     FEATURES       *********      -->
        <div class="features-8">
            <div class="col-md-8 ml-auto mr-auto text-center">
                <h2 class="title"> {{__('OUR ATTRIBUTES')}}
                    <span class="cp_under_line" style="background-color: #e50000;width: 80px;height: 2.5px; display: block;clear: both;margin: 1px auto auto;"></span>
                </h2>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md- align-items-center">
                        <img src="{{asset(
                            session()->get('locale') == 'ko'
                            ?
                            'frontend/assets/image/img_offshoring_kr.png'
                            :
                            'https://www.ldcc.co.kr/img/en/pc/sub01/img_en_offshoring.png'
                            )}}" class="rounded" alt="">
                    </div>
                    <div class="col-md-6">
                        <div class="col-sm-12">
                            <div class="info info-horizontal" style="padding: unset!important;">
                                <div class="icon">
                                    <i class='bx bx-sort-down mt-1' style="color: #da291c"></i>
                                </div>
                                <div class="description">
                                    <h5 class="info-title" style=" margin: 25px 0 2px;">{{__('Lower labour costs')}} </h5>
                                    <p class="description">{{__('By transferring simple tasks to our offshoring team, an average cost reduction rate of 40% is expected.')}}</p>
                                </div>
                            </div>
                            <div class="info info-horizontal" style="padding: unset!important;">
                                <div class="icon">
                                    <i class='bx bx-trending-up' style="color: #da291c"></i>
                                </div>
                                <div class="description">
                                    <h5 class="info-title" style="margin: 25px 0 2px;">{{__('Up-to-date with latest trends')}}</h5>
                                    <p class="description">
                                        {{__('Our R&D center team makes sure the latest trends and improved features are applied.')}}
                                    </p>
                                </div>
                            </div>
                            <div class="info info-horizontal" style="padding: unset!important;">
                                <div class="icon">
                                    <i class='bx bx-like' style="color: #da291c" ></i>
                                </div>
                                <div class="description">
                                    <h5 class="info-title" style="margin: 25px 0 2px;">{{__('Quality assurance')}}</h5>
                                    <p class="description">
                                        {{__('LDCC’s professional IT coordinating eliminates the risks from language barrier and quality gap.')}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row justify-content-center">
                    <a href="{{route('case-study')}}" class="btn btn-primary btn-round"> {{__('Explore our case studies')}}</a>
                    <a href="https://glotoss.com" class="btn btn-primary btn-round"> {{__('Explore further')}}</a>
                </div>
            </div>
        </div>
    </div>
    <style>
        .container_slide {
            position: relative;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
            margin-top: 100px;
        }
        .item_image {
            padding: 0 15px;
            text-align: center;
        }
        .item_image .image_box {
            display: flex;
            width: 150px;
            height: 150px;
            margin: 0 auto 30px;
            border-radius: 50%;
            background-color: #fff;
            justify-content: center;
            align-items: center;
            box-shadow: 0 30px 60px rgba(241,74,22,.25);
            -webkit-box-shadow: 0 30px 60px rgb(241 74 22 / 25%);
        }

        /* Add a pointer when hovering over the thumbnail images */
        .cursor {
            cursor: pointer;
        }


        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: #B3000F;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            font-size: 16px;
            position: absolute;
            top: 66px;
            left: 280px;
        }

        /* Container for image text */
        .caption-container {
            text-align: center;
            background-color: #222;
            padding: 2px 16px;
            color: white;
            display:none ;
        }

        .row:after {
            content: "";
            display: table;
            clear: both;
        }

        /* Six columns side by side */
        .column {
            float: left;
            width: 16.66%;
            padding: 10px;
            margin: 5px;
            text-align: center;
        }


        .demo {
            opacity: 0.6;
        }

        .activer,
        .demo:hover {
            opacity: 1;
            background-color: #B3000F;
            padding:10px;
            border-radius: 10px;
            color: #FFFFFF!important;
        }
        @media only screen and (max-width: 391px) {
            .column {
                float: left;
                width:unset !important;
                padding: 10px;
                margin: 5px;
                text-align: center;
            }
            .numbertext {
                font-size: 16px;
                position: absolute;
                top: 112px;
                left: 0px;
                text-align: center;
            }
            .text_mobile {
                top: 112px!important;
                left: 0px!important;
                text-align: center!important;
            }
            .logo_mobile {
                text-align: center!important;
                width: 199px!important;
            }
        }
        @media only screen and (max-width: 429px) {
            .column {
                float: left;
                width:unset !important;
                padding: 10px;
                margin: 5px;
                text-align: center;
            }
            .numbertext {
                font-size: 16px;
                position: absolute;
                top: 112px;
                left: 0px;
                text-align: center;
            }
            .text_mobile {
                top: 112px!important;
                left: 0px!important;
                text-align: center!important;
            }
            .logo_mobile {
                text-align: center!important;
                width: 199px!important;
            }
        }
    </style>
    <script>
        let slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("demo");
            let captionText = document.getElementById("caption");
            if (n > slides.length) {slideIndex = 1}
            if (n < 1) {slideIndex = slides.length}
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" activer", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " activer";
            captionText.innerHTML = dots[slideIndex-1].alt;
        }
    </script>

</main>
