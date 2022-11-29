
<div class="page-header page-header_align_left"
     style=" margin-bottom: 0px; padding-top: 0px; padding-bottom: 10px;height: 60px;">
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
                        <span  class=current>{{__('Home')}}</span>
                        <span
                                class=divider></span>
                        <span class=current>{{__('About us')}}</span>
                        <span  id="history"
                               class=divider></span> <span
                                class=current>{{__('History')}}</span></div>
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

                    <a class="dropbtn">{{__('Our History')}}<i class='bx bx-chevron-down'></i></a>
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
    <section class="section-our-culture frontpage-block-5 groove-section groove-section-boxed"  style="background-color: #FFFFFF">
        <div class="groove-container groove-column-gap-default"  style="background-color: #FFFFFF">
            <div class=groove-row>
                <div class="groove-title-heading title-heading-center  wgl-double_heading">
                    <h2 class="dbl__title-wrapper education-title groove-headingtitle"  style="background-color: #FFFFFF">
                        <span>{{__('OUR HISTORY')}}</span> <br>
                        <span class="cp_under_line" style="background-color: #e50000;width: 80px;height: 2.2px; display: block;clear: both;margin:  auto auto;"></span>

                    </h2>
                </div>
            </div>
        </div>
        <div id="container">
            <div id="content" class="content">
                <div class="content_full bg_history">

                    <div class="content_w1440">
                        <span class="timeline sceneTrigger"></span>
                        <h4 class="history_year"> {{__('Present')}} ~ 1996 </h4>
                        <ul class="list_history">
                            <!-- add 2022 -->
                            <!-- end add 2021 -->
                            <li class="point timeline02">
                                <div class="spot_history">
                                    <strong>2015 - {{__('Present')}}</strong>
                                    <ul>
                                        <li>{{__('Opening Ho Chi Minh R&D Center in Vietnam')}}</li>

                                    </ul>

                                </div>

                                <span class="timeline02 sceneTrigger"></span>
                            </li>
                            <li class="point timeline01">
                                <div class="spot_history" style="border-right: 1px solid red!important;">
                                    <strong>2010 - 2015</strong>
                                    <ul>
                                        <li> {{__('Announced the company’s second revised vision (Value Innovation)')}}</li>
                                        <li>{{__('Acquired Hyundai Information Technology')}}</li>
                                        <li>{{__('Awarded contract for the implementation of an operation system for Second Access Road at Busan New Port')}}</li>
                                        <li>{{__('Launched the Disaster Restoration Center')}}</li>
                                    </ul>
                                </div>

                                <span class="timeline01 sceneTrigger"></span>
                            </li>

                            <li class="point timeline01">

                                <div class="spot_history">

                                    <strong>2005 - 2009</strong>
                                    <ul>
                                        <li>{{__('Received of the ‘Award of Excellence’ at the Seoul Quality Management Convention')}}</li>
                                        <li> {{__('Announced the company’s vision (The Best Value Partner)')}}</li>
                                        <li> {{__('Opened the Integrated Data Center')}}</li>
                                        <li> {{__('Established the Vietnam branch')}}</li>
                                    </ul>

                                </div>

                                <span class="timeline01 sceneTrigger"></span>
                            </li>
                            <li class="point timeline01">
                                <div class="spot_history" style="border-right: 1px solid red">
                                    <strong>1996 - 2004 </strong>
                                    <ul>
                                        <li>{{__('Established Lotte Data Communication and launched system management business and deployed MOIN services')}}</li>
                                        <li> {{__('Merged with LOTTE Electronics')}}</li>
                                    </ul>

                                </div>

                            </li>
                        </ul>
                    </div>
                </div>
            </div>





        </div>
    </section>
</main>
