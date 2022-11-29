
<div class="page-header page-header_align_left" style=" margin-bottom: 0px; padding-top: 0px; padding-bottom: 10px;">
    <div class=page-header_wrapper>
        <div class=wgl-container>
            <div class=page-header_content>
                <div class=page-header_breadcrumbs style="color: #666666; font-size: 15px; line-height: 24px;">
                    <div class=breadcrumbs>
                        <span class=current>{{__('Home')}}</span>
                        <span class=divider></span>
                        <span class=current>{{__('About us')}}</span>
                        <span id="new_event" class=divider></span>
                        <span class=current>{{__('New & Event')}}</span></div>
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
                    <a class="dropbtn" href={{route('about.overview')}}>{{__('About us')}}</a>
                </div>
                <div class="dropdown">

                    <a class="dropbtn">{{__('News and Events')}} <i class='bx bx-chevron-down'></i></a>
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
    <section class="groove-section section-our-blog frontpage-block-6 groove-section-boxed only-pc"
             style="margin-bottom: 50px;">
        <div class="groove-title-heading title-heading-center  wgl-double_heading">

            <h2 class="dbl__title-wrapper education-title groove-headingtitle">
                <span>{{__('News & Events')}}</span>
                <br>
                <span class="cp_under_line"
                      style="background-color: #e50000;width: 80px;height: 2.2px; display: block;clear: both;margin:  auto auto;"></span>
            </h2>
            <p style="margin-bottom: 10px;">{{__('Latest news and events from Lotte Data Communication.')}}</p>
        </div>
        <br>
        <div class="groove-container groove-column-gap-default" style="max-width: 1170px">
            <div class=groove-row>
                @include('ldcc.pc.About.new_event_product')
            </div>
        </div>

    </section>
    <section class="section-our-blog frontpage-block-6 groove-section-boxed only-mobile" style="margin-bottom: 50px;">
        <div class="groove-title-heading title-heading-center  wgl-double_heading">
            <div class="dbl__subtitle ">
                <span>{{__('Latest News')}}</span></div>
            <h2 class="dbl__title-wrapper education-title groove-headingtitle"><span>{{__('FROM OUR NEW AND EVENTS')}}</span></h2>
        </div>
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
                                                @include('ldcc.pc.About.new_event-product_mobile')
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
                    <a class="btn-front-process groove-btn" href=# target=_blank>{{__('Read Our Events')}}</a>
                </div>
            </div>
        </div>
    </section>

</main>
