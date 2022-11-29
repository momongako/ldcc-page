<div
    class="page-header page-header_align_left" style=" margin-bottom: 0px; padding-top: 0px; padding-bottom: 10px;">
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
                            <span class=current>{{__('Home')}}</span>
                        <span class=divider></span>
                            <span class=current>{{__('About us')}}</span>
                        <span  id="vision"
                               class=divider></span> <span
                            class=current>{{__('OUR VISION')}} </span></div>
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
        .groove-text-editor ul li {
            font-weight: 500;
        }
    </style>
    <div class=sticky-space  >
        <div class=sticky-container >
            <div class="header section-careers-sticky" style="display: flex;justify-content: center;margin-left: 0;padding: 10px">
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

                    <a class="dropbtn">{{__('Our Vision')}} <i class='bx bx-chevron-down'></i></a>
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

    <section class="section-our-culture frontpage-block-5 groove-section groove-section-boxed" style="margin-bottom: 50px;">
        <div class="groove-container groove-column-gap-default" style="max-width: 1400px">
            <div class=groove-row>
                <div class="groove-title-heading title-heading-center  wgl-double_heading">

                    <p>
                        <img src="{{asset(session()->get('locale') == 'ko' ? 'frontend/assets/image/About/Detail/vision/about_value.png' : 'frontend/assets/image/About/Detail/vision/Picture1.png')}}" alt="">
                    </p>
                </div>
            </div>
        </div>
    </section>

</main>