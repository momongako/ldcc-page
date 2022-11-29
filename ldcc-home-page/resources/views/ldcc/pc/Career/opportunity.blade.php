<div class="page-header page-header_align_left" style=" margin-bottom: 0px; padding-top: 0px; padding-bottom: 10px;">
    <div class=page-header_wrapper>
        <div class=wgl-container>
            <div class=page-header_content>
                <div class=page-header_breadcrumbs style="color: #666666; font-size: 15px; line-height: 24px;">
                    <div class=breadcrumbs><a href=index.html class=home>
                            {{ __('Home') }}
                        </a> <span class=divider></span> <a
                                href=career_ldcc_page.html>
                            {{ __('CAREER') }}
                        </a>
                        <span class=divider>

              </span>
                        <span class=current>
                            {{ __('Career opportunity') }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<main id=main class="site-main bg-white" style="background-color: white">

    <style>
        .wgl-tabs_header {
            min-height: 150px;
        }

        .groove-text-editor ul li {
            font-weight: 500;
        }
    </style>
    <div class=sticky-space style="background-color: #FFFFFF">
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
                    <a class="dropbtn" href="{{route('career.culture')}}">
                        {{ __('Career') }}
                    </a>
                </div>
                <div class="dropdown">

                    <a class="dropbtn">{{ __('Career opportunity') }}<i class='bx bx-chevron-down'></i></a>
                    <div class="dropdown-content">
                        <a class=services href="{{route('career.culture')}}">
                            {{ __('Our culture') }}
                        </a>
                        <a class=cooperation href="{{route('career.opportunity')}}">
                            {{ __('Career opportunity') }}
                        </a>
                    </div>
                </div>
            </div>
            <hr>
        </div>
    </div>

    <div class="img-size" style="">
        <img src="{{asset('frontend/assets/image/Banner/img_1.jpg')}}" alt="">
    </div>

    <!-- Section jobs list -->
    <section class="cp_container container">
        <div id="info" class="tab-pane fade active in ">

            <style>
                .img-size {
                    width: 60%;
                    text-align: center;
                    display: block;
                    margin-left: auto;
                    margin-right: auto;
                }
                .cp_job_view_detail a.quick-apply:hover {
                    border-color: #999;
                    opacity: 1;
                    background-color: transparent;
                    color: #333;
                }

                .cp_job_view_detail a.quick-apply {
                    border-color: #e50000;
                    background-color: #e50000;
                    color: #fff;
                }

                .cp_job_view_detail a:hover {
                    border-color: #e50000;
                    background-color: #e50000;
                    color: #fff;
                }

                a.collapse-jobs-listing:hover span {
                    background-color: #e50000;
                }

                a.collapse-jobs-listing:hover span i {
                    color: #fff
                }

                .load_more a:hover {
                    border-color: #e50000;
                    background-color: #e50000;
                    color: #fff;
                }
            </style>
            <div class="cp_tab_content cp_our_jobs_section" id="jobs">
                <div class="container">
                    <div class="panel-group">
                        <div class="panel panel-default">
                            <div class="panel-heading">

                            </div>
                            @if (count($listCareerOpportunity) > 0)
                                <div id="jobsListing" class="panel-collapse collapse cp_our_jobs_container in">
                                    <div class="panel-body">
                                        <div class="cp_our_jobs_listing" id="ajax_cp_our_jobs_listing">

                                            <h3 style="border-color: #e50000">
                                                We Have <?php echo count($listCareerOpportunity) ;?> Jobs For You
                                            </h3>

                                            <div class="jobs_listing_block ">
                                                @foreach ($listCareerOpportunity as $careerOpportunity)
                                                    <div class="cp_our_job_item  show ">
                                                    <div class="row">

                                                        <div class="col-xs-12 col-sm-10 cp_Job_summary_info">
                                                            <h4>
                                                                <a href="/opportunity-detail/{{$careerOpportunity->slug}}" target="_blank"
                                                                   onclick="ga('send', 'event', 'VNWCompanyCulture', 'ViewJob', 'Lotte Data Communication Company Limited Vietnam-1559950');">
                                                                    {{$careerOpportunity->position}}
                                                                </a>
                                                            </h4>
                                                            <ul>
                                                                <li><i class="fa fa-briefcase"></i>
                                                                    {{$careerOpportunity->levers_name}}
                                                                </li>
                                                                <li><i class="fa fa-map-marker"></i>
                                                                    {{$careerOpportunity->recruitment_office_name}}
                                                                </li>
                                                                <li><i class="fa fa-calendar-o"></i>
                                                                    {{$careerOpportunity->end_date}}
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <div class="col-xs-12 col-sm-2 cp_job_view_detail">
                                                            <a href="/opportunity-detail/{{$careerOpportunity->slug}}" target="_blank"
                                                               onclick="ga('send', 'event', 'VNWCompanyCulture', 'ViewJob', 'Lotte Data Communication Company Limited Vietnam-1559950');">
                                                                View</a>
                                                        </div>
                                                    </div>
                                                </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

</main>