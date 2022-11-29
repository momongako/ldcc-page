<div class="page-header page-header_align_left" style=" margin-bottom: 0px; padding-top: 0px; padding-bottom: 10px;">
    <div class=page-header_wrapper>
        <div class=wgl-container>
            <div class=page-header_content>
                <div class=page-header_breadcrumbs style="color: #666666; font-size: 15px; line-height: 24px;">
                    <div class=breadcrumbs>
                        <span  class=current>{{__('Home')}}</span>
                        <span class=divider></span>
                        <span class=current>{{__('About us')}}</span>
                        <span id="CEO" class=divider></span> <span class=current>{{__('CEO MESSAGE')}} </span>
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
    <div class=sticky-space>
        <div class=sticky-container>
            <div class="header section-careers-sticky" style="display: flex;justify-content: center;margin-left: 0;">
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
                    <a class="dropbtn" href={{route('about.overview')}}>{{__('About us')}}</a>
                </div>
                <div class="dropdown">

                    <a class="dropbtn">{{__('CEO Message')}} <i class='bx bx-chevron-down'></i></a>
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
    <section class="section-about-groove frontpage-block-2 groove-section groove-section-boxed" id=frontpage-block-2
             style="margin-top: 1px;">
        <div class="groove-container groove-column-gap-default">
            <div class=groove-row>
                <div class="groove-title-heading title-heading-center  wgl-double_heading">
                    <h2 class="dbl__title-wrapper education-title groove-headingtitle " style="text-align: center">
                        <span>{{__('CEO Message')}}</span><br>
                        <span class="cp_under_line"
                              style="background-color: #e50000;width: 80px;height: 2.2px; display: block;clear: both;margin:  auto auto;"></span>

                    </h2>
                    <p>{{__('We will grow with our customers to create a more valuable future.')}}</p>
                </div>
            </div>
        </div>
        <div class="groove-container groove-column-gap-default" id=mission style="max-width: 1170px">
            <div class=groove-row>
                <div class="groove-element groove-column groove-col-50 about-groove-nth1 only-pc">
                    <div class=groove-image style="display: flex; justify-content: center">
                        <img style="width:564px;box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px;" width=564
                             srcset="{{asset('frontend/assets/image/About/Picture1.png')}}"
                             alt="Lotte Data Communication Vietnam."
                             src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==">
                    </div>
                </div>
                <div class="groove-element groove-column groove-col-50 about-groove-nth1 only-mobile groove-align-center">
                    <div class=groove-image>
                        <img style=" width: auto; height: 350px; object-fit: cover; " width=100% heigth=350
                             alt="Lotte Data Communication Vietnam." srcset="{{asset('frontend/assets/image/About/Picture1.png')}}"
                             class=lazyload
                             >
                    </div>
                </div>
                <div class="groove-element groove-column groove-col-50 about-groove-nth2" style="max-width: 600px;">

                    <p style="color: #666; font-size: 16px!important;line-height: 1.3!important;padding-top: 50px;
    padding-left: 31px;">
                        {{__('With new technologies and service paradigms, we are becoming the ‘Digital platform leader’ that leads DT(Digital Transformation).')}}
                        <br> <br>
                        {{__('We will transform customer value based on core competencies to drive customer business innovation and continue to challenge ourselves to discover new business model.')}}
                        <br> <br>
                        {{__('We promise to maximize the value of our customers and shareholders and to become a responsible company that grows together with society.')}}
                        <br>
                        Thank you.
                        <br>
                        <br>
                        {{__('CEO')}} <br>
                        <b>{{__('Rho, Jun-hyung')}}</b>
                    </p>

                </div>
            </div>
        </div>
    </section>
</main>

