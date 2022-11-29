<main id=main class=site-main>
    <link rel=stylesheet href={{asset('frontend/assets/wp-content/themes/zikzag/css/style-GrooveFrontpage-ver3.0.css')}}>
    <link rel=stylesheet href={{asset('frontend/assets/wp-content/themes/zikzag/css/style-GrooveFrontpage-ver1.9.css')}}>
    <link rel=stylesheet href=frontend/assets/wp-content/themes/zikzag/css/style-GrooveFrontpage-ver3.0.css>
    <section class="section-header-fronpage frontpage-block-1 groove-section groove-section-boxed"
             style="
                min-height: 900px;
                background: url(frontend/assets/image/Banner/1.jpg) 50% 50% no-repeat;
                background-size: cover;
                height: 100vh;
                position: relative;
            ">
        <style>
            @media only screen and (max-width: 395px) {
                .content {
                    margin-top: unset!important;
                    right: 0!important;
                    text-align: center;
                    line-height: 50px !important;
                }
                .t-s {
                    font-size: 18px!important;
                }
            }
            @media only screen and (max-width: 438px) {
                .content {
                    margin-top: 10px!important;
                    right: 0!important;
                    text-align: center;
                    line-height: 50px !important;
                }
                .t-s {
                    font-size: 18px!important;
                }
            }
            @media only screen and (max-width: 1400px) {
                .content {
                    right: 100px!important;
                    /*text-align: center;*/
                    line-height: 50px !important;
                }
                .t-s {
                    font-size: 18px!important;
                }
                .scroll_dow_page {
                    z-index: 5;
                    top: 52%!important;
                }
            }
            @media only screen and (max-width: 1266px) {
                .content {
                    right: 45px!important;
                    /*text-align: center;*/

                }
                .t-s {
                    font-size: 18px!important;
                }
                .scroll_dow_page {
                    z-index: 5;
                    top: 44%!important;
                }
            }

        </style>
        <div class="container p-5" >
            <div class="content" style="margin-top: 80px; position: absolute; top: 50px; right: 300px" >
                <div class="inner">
                    <h2 class="t-h text-light p-2" data-aos="fade-down" data-aos-duration="1000"  style="font-size: 40px!important;">
                        {{__('Create a valuable future with IT')}}
                    </h2>
                    <p class="t-s text-light p-2"  data-aos="fade-up" data-aos-duration="1000" style="font-size:22px; line-height: 29px!important; max-width: 700px">
                        {{__('Based on IT know-how and technology in all industries, including retail, manufacturing, logistics, finance and healthcare, We will create a smart world by combining cutting-edge technologies such as AI, Bigdata, IoT, and Cloud.')}}
                    </p>
                </div>
            </div>
            <div class="scroll_dow_page" style="width: 1040px; display: block; position: absolute; z-index: 5;top: 62%;">
                <a href="#services_home" class="d-flex justify-content-center" >
                    <i class='bx bx-down-arrow-alt bx-fade-down' style="color: #ffffff; font-size: 3rem; font-weight: 400" ></i>
                </a>
            </div>
        </div>
    </section>




    <!--Service -->
    <section class="service_pc diff-block-2 groove-section groove-section-boxed" style="max-width: 1110px;margin: auto">
        <style>


            @media only screen and (max-width: 395px) {
                .container_slider {
                    position: relative;
                    margin-top: 120px !important;
                    margin-bottom: 100px;
                    display: block !important;
                }
                .column_item {
                    display: flex;
                    justify-content: flex-start;
                    background-color: whitesmoke;
                    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
                    padding: 6px!important;
                    border-radius: 5px;
                    margin-bottom: 5px!important;
                    /*background-color: #DA291C;*/
                }
                .row_slide {
                    display: flex !important;
                    flex-direction: row !important;
                    width: 100% !important;
                    justify-content: center;!important;
                    gap: 10px;
                    position: absolute;
                    top: -100px;
                }
                .column_item p {
                    padding: 10px;
                    margin: unset;
                    display: none;
                }
                .mySlides {
                    display: flex;
                    justify-content:center ;
                }

                .cursor {
                    cursor: pointer;
                }


                .numbertext {
                    color: #ffffff;
                    font-size: 12px;
                    background-color: #DA291C;
                    padding: 8px 12px;
                    position: absolute;
                    left: 0 !important;
                    width: 400px !important;
                    top: 251px !important;
                    border-radius: 2px;
                }

                .row_slide:after {
                    content: "";
                    background-color:red ;
                    display: table;
                    clear: both;
                }

                /* Six columns side by side */
                .column {
                    float: left;
                }
                .column_item {
                    display: flex;
                    justify-content: flex-start;
                    border: 1px solid #f30;
                    padding: 6px;
                    border-radius: 5px;
                    margin-bottom: 5px;
                    /*background-color: #DA291C;*/
                }
                .column_item p {
                    padding: 10px;
                    margin: unset;
                }

                .row_slider {
                    width: 100%;
                    padding: 5px !important;
                    display: flex;
                    justify-content: flex-end;
                }
                /* Add a transparency effect for thumnbail images */
                .demo {
                    opacity: 0.8;

                }

                .actives,
                .demo:hover {
                    opacity: 1;
                    background-color: #da291c;
                }
                .background {
                    position: relative;
                    width: 100%;
                    height: 100%;
                    z-index: 1;
                    display: -webkit-flex;
                    display: -moz-box;
                    display: flex;
                    -webkit-transition-property: -webkit-transform;
                    transition-property: -webkit-transform;
                    transition-property: transform;
                    transition-property: transform,-webkit-transform;
                    -moz-box-sizing: content-box;
                    box-sizing: content-box;
                }
            }
            /*new css*/
            @media only screen and (max-width: 439px) {
                .container_slider {
                    position: relative;
                    margin-top: 120px !important;
                    margin-bottom: 100px;
                    display: block !important;
                }
                .column_item {
                    display: flex;
                    justify-content: flex-start;
                    background-color: whitesmoke;
                    box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
                    padding: 6px!important;
                    border-radius: 5px;
                    margin-bottom: 5px!important;
                    /*background-color: #DA291C;*/
                }

                .row_slide {
                    display: flex !important;
                    flex-direction: row !important;
                    width: 100% !important;
                    justify-content: center;!important;
                    gap: 10px;
                    position: absolute;
                    top: -100px;
                }
                .column_item p {
                    padding: 10px;
                    margin: unset;
                    display: none;
                }
                .mySlides {
                    display: flex;
                    justify-content:center ;
                }

                .cursor {
                    cursor: pointer;
                }


                .numbertext {
                    color: #ffffff;
                    font-size: 12px;
                    background-color: #DA291C;
                    padding: 8px 12px;
                    position: absolute;
                    left: 0 !important;
                    width: 400px !important;
                    top: 251px !important;
                    border-radius: 2px;
                }

                .row_slide:after {
                    content: "";
                    background-color:red ;
                    display: table;
                    clear: both;
                }

                /* Six columns side by side */
                .column {
                    float: left;
                }
                .column_item {
                    display: flex;
                    justify-content: flex-start;
                    border: 1px solid #f30;
                    padding: 6px;
                    border-radius: 5px;
                    margin-bottom: 5px;
                    /*background-color: #DA291C;*/
                }
                .column_item p {
                    padding: 10px;
                    margin: unset;
                }

                .row_slider {
                    width: 100%;
                    padding: 5px !important;
                    display: flex;
                    justify-content: flex-end;
                }
                /* Add a transparency effect for thumnbail images */
                .demo {
                    opacity: 0.8;

                }

                .actives,
                .demo:hover {
                    opacity: 1;
                    background-color: #da291c;
                }
                .background {
                    position: relative;
                    width: 100%;
                    height: 100%;
                    z-index: 1;
                    display: -webkit-flex;
                    display: -moz-box;
                    display: flex;
                    -webkit-transition-property: -webkit-transform;
                    transition-property: -webkit-transform;
                    transition-property: transform;
                    transition-property: transform,-webkit-transform;
                    -moz-box-sizing: content-box;
                    box-sizing: content-box;
                }
            }
            /*end new css*/
            .container_slider {
                display: flex;
                position: relative;
                margin-top: 80px;
            }

            .row_slide {
                display: flex;
                flex-direction: column;
                width: 50%;
            }

            /* Hide the images by default */
            .mySlides {
                display: flex;
                justify-content:center ;
            }

            .cursor {
                cursor: pointer;
            }


            .numbertext {
                color: #ffffff;
                display: flex;
                flex-direction: column;
                justify-content: center;
                background-color: #DA291C;
                padding: 8px 12px;
                position: absolute;
                top: 305px;
                left: 38px;
                width: 100%;
                height: 82px;
                font-size: 16px;
                border-radius: 2px;
            }

            .row_slide:after {
                content: "";
                background-color:red ;
                display: table;
                clear: both;
            }

            /* Six columns side by side */
            .column {
                float: left;
            }
            .column_item {
                display: flex;
                justify-content: flex-start;
                background-color: whitesmoke;
                box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
                padding: 12px;
                border-radius: 5px;
                margin-bottom: 10px;
                /*background-color: #DA291C;*/
            }
            .column_item p {
                padding: 10px;
                margin: unset;
            }

            .row_slider {
                width: 100%;
                padding: 70px;
                display: flex;
                justify-content: flex-end;
            }
            /* Add a transparency effect for thumnbail images */
            .demo {
                opacity: 0.8
            }

            .actives,
            .demo:hover {
                opacity: 1;
                background-color: #da291c;
                color: white!important;

            }
            .background {
                position: relative;
                width: 100%;
                height: 100%;
                z-index: 1;
                display: -webkit-flex;
                display: -moz-box;
                display: flex;
                -webkit-transition-property: -webkit-transform;
                transition-property: -webkit-transform;
                transition-property: transform;
                transition-property: transform,-webkit-transform;
                -moz-box-sizing: content-box;
                box-sizing: content-box;
            }

        </style>

        <div data-aos="fade-down" data-aos-duration="1000"  class="groove-title-heading  title-heading-center  wgl-double_heading banner_reponsive">
            <h2 class="dbl__title-wrapper groove-headingtitle" id="services_home">
                <span style="color: #B3000F;font-size: 24px!important;">{{__('Our services')}}</span> <br>
                <span class="cp_under_line" style="background-color: #e50000;width: 80px;height: 2.5px; display: block;clear: both;margin: 4px auto auto;"></span>

            </h2>
            <p class="text-center">{{__('We deliver well-rounded IT services')}}</p>
        </div>
        <div class="container_slider row" data-aos="fade-up" data-aos-duration="1500" >
            <div class="row_slide  ">
                <div class="column"  onclick="currentSlide(1)">
                    <div class="column_item demo cursor">
                        <i class='bx bx-devices' style="font-size: 2rem;" ></i>
                        <p>{{__('Application development')}}</p>
                    </div>
                </div>
                <div class="column"  onclick="currentSlide(2)">
                    <div class="column_item demo cursor">
                        <i class='bx bx-customize' style="font-size: 2rem"></i>
                        <p onclick="currentSlide(2)">
                            {{__('ERP implementation')}}
                        </p>
                    </div>
                </div>
                <div class="column" onclick="currentSlide(3)">
                    <div class="column_item demo cursor">
                        <i class='bx bx-shield'style="font-size: 2rem"></i>
                        <p onclick="currentSlide(3)">{{__('Security')}}</p>
                    </div>
                </div>
                <div class="column" onclick="currentSlide(4)">
                    <div class="column_item demo cursor">
                        <i class='bx bx-share-alt' style="font-size: 2rem"></i>
                        <p onclick="currentSlide(4)">
                            {{__('IT offshore')}}</p>
                    </div>
                </div>
                <div class="column" onclick="currentSlide(5)">
                    <div class="column_item demo cursor">
                        <i class='bx bx-task' style="font-size: 2rem"></i>
                        <p  onclick="currentSlide(5)">{{__('System management')}}</p>
                    </div>
                </div>
                <div class="column" onclick="currentSlide(6)">
                    <div class="column_item demo cursor">
                        <i class='bx bx-cloud-snow' style="font-size: 2rem"></i>
                        <p onclick="currentSlide(6)">{{__('Cloud transformation')}}</p>
                    </div>
                </div>
                <div class="column" onclick="currentSlide(7)">
                    <div class="column_item demo cursor">
                        <i class='bx bx-data' style="font-size: 2rem"></i>
                        <p class="demo cursor "  onclick="currentSlide(7)">{{__('Data Center')}}</p>
                    </div>
                </div>
            </div>
            <div class="row_slider">
                <div class="mySlides">
                    <div class="background" >
                        <img src="{{asset('frontend/assets/image/image2.jpg')}}" alt="" style=" border-radius: 20px;transition-duration: 300ms; opacity: 0.3;transform: translate3d(100px, -40px, 0px);">
                        <div style=" position: absolute">
                            <img src="{{asset('frontend/assets/image/image1.jpg')}}" style="border-radius: 20px;width:100%">
                        </div>
                        <div class="numbertext">
                            {{__('We build and integrate best-in-class applications to help you realize your business needs.')}}
                        </div>
                    </div>

                </div>

                <div class="mySlides">
                    <div class="background" >
                        <img src="{{asset('frontend/assets/image/image1.jpg')}}" alt="" style="border-radius: 20px; transition-duration: 300ms; opacity: 0.3;transform: translate3d(100px, -40px, 0px);">
                        <div style=" position: absolute">
                            <img src="{{asset('frontend/assets/image/image2.jpg')}}" style="width:100%; border-radius: 20px;box-shadow: rgba(149, 157, 165, 0.2) 0px 8px 24px;">
                        </div>
                        <div class="numbertext">
                            {{__('We effectively implement ERP systems to optimize your operation.')}}
                        </div>
                    </div>

                </div>

                <div class="mySlides">
                    <div class="background" >
                        <img src="{{asset('frontend/assets/image/image2.jpg')}}" alt="" style=" border-radius: 20px;transition-duration: 300ms; opacity: 0.3;transform: translate3d(100px, -40px, 0px);">
                        <div style=" position: absolute">
                            <img src="{{asset('frontend/assets/image/Home/security_11.jpg')}}" style="border-radius: 20px;height: 339px;width: 509px;">
                        </div>
                        <div class="numbertext" style="top: 305px">
                            {{__('We build a reliable business environment with optimized convergence security services with a group of information protection expert.')}}
                        </div>
                    </div>

                </div>

                <div class="mySlides">
                    <div class="background" >
                        <img src="{{asset('frontend/assets/image/image1.jpg')}}" alt="" style="border-radius: 20px; transition-duration: 300ms; opacity: 0.3;transform: translate3d(100px, -40px, 0px);">
                        <div style=" position: absolute">
                            <img src="{{asset('frontend/assets/image/image4.jpg')}}" style="border-radius: 20px;width:100%">
                        </div>
                        <div class="numbertext">
                            {{__('We offer high-quality global outsourcing services at a reasonable price.')}}
                        </div>
                    </div>

                </div>

                <div class="mySlides">
                    <div class="background" >
                        <img src="{{asset('frontend/assets/image/image4.jpg')}}" alt="" style="border-radius: 20px; transition-duration: 300ms; opacity: 0.3;transform: translate3d(100px, -40px, 0px);">
                        <div style=" position: absolute">
                            <img src="{{asset('frontend/assets/image/image_5.webp')}}" style="border-radius: 20px;width:100%">
                        </div>
                        <div class="numbertext">
                            {{__('We ensure an optimal performance of software and hardware system.')}}
                        </div>
                    </div>

                </div>

                <div class="mySlides">
                    <div class="background" >
                        <img src="{{asset('frontend/assets/image/image_5.webp')}}" alt="" style="border-radius: 20px; transition-duration: 300ms; opacity: 0.3;transform: translate3d(100px, -40px, 0px);">
                        <div style=" position: absolute">
                            <img src="{{asset('frontend/assets/image/image6.webp')}}" style="border-radius: 20px;width:100%">
                        </div>
                        <div class="numbertext">
                            {{__('We partner closely with clients to truly bring their operation to cloud.')}}
                        </div>
                    </div>

                </div>

                <div class="mySlides">
                    <div class="background" >
                        <img src="{{asset('frontend/assets/image/image1.jpg')}}" alt="" style="border-radius: 20px; transition-duration: 300ms; opacity: 0.3;transform: translate3d(100px, -40px, 0px);">
                        <div style=" position: absolute">
                            <img src="{{asset('frontend/assets/image/image7.jpg')}}" style="border-radius: 20px;height: 339px;width: 509px;">
                        </div>
                        <div class="numbertext">
                            {{__('We provide total data centre services to help client realize their business needs.')}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script>
          let slideIndex = 1;
          showSlides(slideIndex);
          // Thumbnail image controls
          function currentSlide(n) {
            showSlides(slideIndex = n);
          }

          function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("mySlides");
            let dots = document.getElementsByClassName("demo");

            let captionText = document.getElementById("caption");
            if (n > slides.length) {
              slideIndex = 1
            }
            if (n < 1) {
              slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
              slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
              dots[i].className = dots[i].className.replace(" actives", "");
            }
            slides[slideIndex-1].style.display = "block";
            dots[slideIndex-1].className += " actives";
            // captionText.innerHTML = dots[slideIndex-1].alt;
            // document.getElementsByClassName("demo").addEventListener("click", myFunction);

            function myFunction() {
              // document.getElementsByClassName("demo").innerHTML = "YOU CLICKED ME!";
            }
          }
        </script>
    </section>
    <!--  Products  -->
    <div class="cd-section" id="headers">
        <!--     *********     FEATURES 2      *********      -->
        <div class="features-2">
            <div class="container">
                <div class="row"  data-aos="fade-up" data-aos-duration="1000">
                    <div class="col-md-8 ml-auto mr-auto text-center">
                        <h2 class="dbl__title-wrapper groove-headingtitle">
                            <span style="font-size: 24px!important;">{{__('OUR PRODUCTS')}}</span> <br>
                            <span class="cp_under_line" style="background-color: #e50000;
                            width: 80px;height: 2.5px; display: block;clear: both;margin: 4px auto auto;">
                            </span>
                        </h2>
                        <p>{{__('Our products aim to drive up your operational efficiency.')}}</p>
                        <br/>
                    </div>
                </div>
                <div class="row" style="flex-wrap: wrap">
                    <div class="col-md-3"  data-aos="fade-up" >
                        <div class="card" data-background="image" style="background-image: url('frontend/assets/image/Home/product_bg1.jpg')">
                            <div class="card-body">
                                <h6 class="card-category" style="font-size: 1.3em">
                                    {{__('API Gateway')}}</h6>
                                <div class="card-icon">
                                    <i class='bx bx-share-alt'></i>
                                </div>
                                <p class="card-description">
                                    {{__('Our API Gateway allows client app/platform to connect with multiple external platforms with only one time of integration, thus reduce any future cost related to AP integration.')}}
                                </p>

                                <div class="card-footer">
                                    <a href="{{route('products.api_gateway')}}" class="btn btn-link btn-neutral">
                                        <i class='bx bx-detail' aria-hidden="true"></i> {{__('Show more')}}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3"  data-aos="fade-up" data-aos-duration="400">
                        <div class="card" data-background="image" style="background-image: url('frontend/assets/image/Home/img_1.png')">
                            <div class="card-body">
                                <h6 class="card-category" style="font-size: 1.3em">
                                    {{__('SaaS')}} </h6>
                                <div class="card-icon">
                                    <i class="bx bx-task"></i>
                                </div>
                                <p class="card-description">{{__('We offer an eco-system of software available via internet to help optimize operations of our clients.')}}</p>

                                <div class="card-footer" style="padding-top: 60px;">
                                    <a href="{{route('products.saas')}}" class="btn btn-link btn-neutral">
                                        <i class='bx bx-detail' aria-hidden="true"></i> {{__('Show more')}}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up" data-aos-duration="500">
                        <div class="card" data-background="image" style="background-image: url('frontend/assets/image/Home/img_2.png')">
                            <div class="card-body">
                                <h6 class="card-category" style="font-size: 1.3em">{{__('Smart building')}} </h6>
                                <div class="card-icon">
                                    <i class='bx bx-buildings'></i>
                                </div>
                                <p class="card-description">{{__('Cutting-edge IoT-based system for safer, more efficient building management.')}}</p>

                                <div class="card-footer" style="padding-top: 60px;">
                                    <a href="{{route('products.building')}}" class="btn btn-link btn-neutral">
                                        <i class='bx bx-detail' aria-hidden="true"></i> {{__('Show more')}}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3" data-aos="fade-up" data-aos-duration="600">
                        <div class="card" data-background="image" style="background-image: url('frontend/assets/image/Home/p3.png')">
                            <div class="card-body">
                                <h6 class="card-category" style="font-size: 1.3em">{{__('Smart parking')}} </h6>
                                <div class="card-icon">
                                    <i class='bx bx-home-smile'></i>
                                </div>
                                <p class="card-description">
                                    {{__('We create a new level of convenience for your life by using cutting-edge technology in transportation, environment, housing, and business.')}}
                                </p>

                                <div class="card-footer pt-4">
                                    <a href="{{route('products.parking')}}" class="btn btn-link btn-neutral">
                                        <i class='bx bx-detail' aria-hidden="true"></i> {{__('Show more')}}
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--    New Event    -->
    <section class="groove-section section-our-blog frontpage-block-6 groove-section-boxed only-pc" style="margin-bottom: 50px;">
        <div class="groove-title-heading title-heading-center  wgl-double_heading"data-aos="fade-down"data-aos-duration="1500" style="margin-top: unset!important;">
            <h2 class="dbl__title-wrapper education-title groove-headingtitle">
                <span>{{__('News & Events')}}</span> <br>
                <span class="cp_under_line" style="background-color: #e50000;width: 80px;height: 2px; display: block;clear: both;margin: 4px auto auto;"></span>
            </h2>
            <p style="margin-bottom: 10px;">{{__('Latest news and events from Lotte Data Communication.')}}</p>
        </div>
        <div class="groove-container groove-column-gap-default" style="max-width: 1170px">
            <div class=groove-row>
                @foreach ($newEvents as $newEvent)
                    <div class="groove-element groove-column groove-col-33">
                        <a  target=_blank>
                            <div class="blog-post format-standard-image">
                                <div class=blog-post_wrapper>
                                    <div class=blog-post_media>
                                        <a href="/new_event_product_detail/{{$newEvent->slug}}" rel=bookmark
                                           target=_blank>
                                            <img
                                                    style=width:340px;height:214px; width=60 heigth=119
                                                    alt="Lotte Data Communication Vietnam."
                                                    srcset="https://pronexus-media-files.s3-ap-southeast-1.amazonaws.com/public{{$newEvent->thumbnail}}"
                                                    data-src=https://cdn.groovetechnology.com/wp-content/uploads/2022/08/groove-technology-react-native-vs-native-which-one-to-choose-for-app-development-intro.png
                                                    class=lazyload
                                                    src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                                            <noscript><img
                                                        class=lazy
                                                        src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%202625%201875'%3E%3C/svg%3E"
                                                        data-src=https://cdn.groovetechnology.com/wp-content/uploads/2022/08/groove-technology-react-native-vs-native-which-one-to-choose-for-app-development-intro.png
                                                        style=width:340px;height:214px; width=60 heigth=119
                                                        alt="Lotte Data Communication Vietnam.">
                                            </noscript>
                                        </a>
                                    </div>
                                    <span
                                            class=post_date>

                                <span> <?php echo date('M', strtotime($newEvent->created_at)) ?></span>
                                <span> <?php echo date('d', strtotime($newEvent->created_at)) ?> </span>
                                <span><?php echo date('Y', strtotime($newEvent->created_at)) ?></span>
                          </span>
                                    <span class=post_meta-categories>
                            <span><?php echo $newEvent->type == 1 ? 'NEWS' : 'EVENT' ?> </span>
                          </span>
                                    <div class=blog-post_content>
                                        <div class=blog-post_title>
                                            <a href="/new_event_product_detail/{{$newEvent->slug}}" target=_blank>
                                                {{ $newEvent->title }}</a>
                                            <p>{!! $newEvent->sub_title !!}</p>
                                        </div>
                                        <a href="/new_event_product_detail/{{$newEvent->slug}}"
                                           target=_blank class=button-read-more>{{__('Read More')}}</a>
                                        <span class="span-reading-time rt-reading-time"><span
                                                    class="rt-label rt-prefix"></span>

                        </span></div>
                                </div>
                            </div>
                        </a></div>
                @endforeach
            </div>
        </div>

    </section>
    <section class="section-our-blog frontpage-block-6 groove-section-boxed only-mobile" style="margin-bottom: 50px;">
        <div class="groove-title-heading title-heading-center  wgl-double_heading">
            <div class="dbl__subtitle ">
                <span>{{__('Latest News')}}</span></div>
            <h2 class="dbl__title-wrapper education-title groove-headingtitle"><span>FROM OUR NEW AND EVENTS</span></h2></div>
        <div class="groove-container groove-column-gap-default blog-slider">
            <div class=groove-row>
                <div class="groove-element groove-column groove-col-100">
                    <div class=wgl_cpt_section>
                        <div class=blog-posts>
                            <div class="container-grid row blog_carousel blog-style-standard">
                                <div class=wgl-carousel_wrapper>
                                    <div class=wgl-carousel>
                                        <div class="swiper-container swiper-container-initialized swiper-container-horizontal swiper-container-ios">
                                            <div class=swiper-wrapper2>
                                                @foreach ($newEvents as $newEvent)
                                                    <div class=swiper-slide>
                                                        <figure class=swiper-slide-inner>
                                                            <div
                                                                    class="blog-post format-standard-image">
                                                                <div
                                                                        class="container-grid row blog_carousel blog-style-standard">
                                                                    <div
                                                                            class=blog-post_wrapper>
                                                                        <div
                                                                                class=blog-post_media>
                                                                            <div
                                                                                    class=blog-post_media_part>
                                                                                <a href="/new_event_product_detail/{{$newEvent->slug}}"
                                                                                   rel=bookmark target=_blank>
                                                                                    <img
                                                                                            srcset="https://pronexus-media-files.s3-ap-southeast-1.amazonaws.com/public{{$newEvent->thumbnail}}"
                                                                                            alt="Lotte Data Communication Vietnam."
                                                                                            data-src=https://cdn.groovetechnology.com/wp-content/uploads/2022/08/groove-technology-react-native-vs-native-which-one-to-choose-for-app-development-intro-350x200.png
                                                                                            class=lazyload
                                                                                            src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                                                                                    <noscript><img
                                                                                                class=lazy
                                                                                                src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%20350%20200'%3E%3C/svg%3E"
                                                                                                data-src=https://cdn.groovetechnology.com/wp-content/uploads/2022/08/groove-technology-react-native-vs-native-which-one-to-choose-for-app-development-intro-350x200.png
                                                                                                alt="Lotte Data Communication Vietnam.">
                                                                                    </noscript>
                                                                                </a></div>
                                                                        </div>
                                                                        <div class=blog_post-meta_content>
                                                                            <div class=blog-post_content>
                                                                                <h3 class="blog-post_title">
                                                                                    <a href=/new_event_product_detail/{{$newEvent->slug}}
                                                                                            rel=bookmark target=_blank>
                                                                                        {{ $newEvent->title }}
                                                                                    </a>
                                                                                </h3>
                                                                                <div class=blog-post_text>
                                                                                    <div class=blog-post_text><p>{!! $newEvent->sub_title !!}</p></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </figure>
                                                    </div>
                                                @endforeach
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
        <div class="frontpage-button-container groove-container groove-column-gap-default">
            <div class="groove-container groove-column-gap-default">
                <div class=groove-row>
                    <a class="btn-front-process groove-btn" href=# target=_blank>Read Our Events</a>
                </div>
            </div>
        </div>
    </section>
    <!--    End Event    -->
</main>

<script>
  jQuery(document).ready(function () {
    if (jQuery(window).width() < 768) {
      jQuery(".only-pc").remove();
      jQuery("#jquery.contactus.css-css").remove();
    }
    if (jQuery(window).width() > 768) {
      jQuery(".only-mobile").remove();
    }
    if (jQuery(window).width() < 1025) {
      jQuery(".hiden-tablet").remove();
    }
    if (jQuery(window).width() > 1025) {
      jQuery(".only-mobile-tablet").remove();
    }
    if (jQuery(window).width() == 768) {
      jQuery(".alert-rotate").show();
    } else {
      jQuery(".alert-rotate").hide();
    }

    jQuery('.alert-close').click(function () {
      jQuery(".alert-rotate").hide();
      window.location.reload();
    });
    jQuery(window).on('resize', function () {
      if (jQuery(window).width() == 768) {
        jQuery(".alert-rotate").show();
      } else {
        jQuery(".alert-rotate").hide();
      }
    });
    jQuery(".contact-messenger").click(function () {
      if (jQuery(".menu-contact-messenger").hasClass("show")) {
        jQuery(".menu-contact-messenger").removeClass("show");
      } else {
        jQuery(".menu-contact-messenger").addClass("show");
      }
    });

    jQuery(".close-menu-contact").click(function () {
      if (jQuery(".menu-contact-messenger").hasClass("show")) {
        jQuery(".menu-contact-messenger").removeClass("show");
      }
    });

    jQuery(".menu-search").mouseover(function () {
      jQuery(".menu-search .search-field").focus();
    })


  });</script>
<script>
  jQuery(window).scroll(function () {
    var scroll = jQuery(window).scrollTop();
    if (scroll >= 50) {
      jQuery(".wgl-site-header").addClass("sticky_active");
    } else {
      jQuery(".wgl-site-header").removeClass("sticky_active");
    }
  });
</script>