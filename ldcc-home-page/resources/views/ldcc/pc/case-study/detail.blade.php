<div class="page-header page-header_align_left"
     style=" margin-bottom: 0px; padding-top: 0px; padding-bottom: 10px;">
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
                        <a href={{route('home')}} class=home>
                            Home
                        </a>
                        <span class=divider></span>
                        <a href={{route('case-study')}}>
                            Case Study
                        </a>
                        <span id="overview"
                              class=divider>
                </span>
                        <span
                                class=current>{{$caseStudyDetail->case_name}}</span></div>
                </div>
            </div>
        </div>
    </div>
</div>
    <main id=main class=site-main>
        <style>
            .wgl-tabs_header {
                min-height: 150px;
            }

            .groove-text-editor ul li {
                font-weight: 400;
            }
        </style>

        <section class="aboutus-block-6 about-us_toggle groove-section groove-section-boxed" id=corevalues
                 style="margin-bottom: 50px;">
            <div class="groove-title-heading title-heading-center  wgl-double_heading">
                <h2 class="dbl__title-wrapper">
                    <span>{{$caseStudyDetail->case_name}}</span> <br>
                    <span class="cp_under_line"
                          style="background-color: #e50000;width: 80px;height: 2px; display: block;clear: both;margin: 1px auto auto;"></span>
                </h2>
                <p class="pb-4">{{$caseStudyDetail->case_description}}</p>
            </div>
            <div style="display: flex; justify-content: center">
                <div>
                    <img style="width: 960px;height: 640px" src="https://pronexus-media-files.s3-ap-southeast-1.amazonaws.com/public{{$caseStudyDetail->thumbnail}}" alt="">
                </div>
            </div>
            <br>
            <div class="groove-container groove-column-gap-default " style="max-width: 850px">
                <div>
                    <h3>Our Client</h3>
                    <ul class=custom-text-editor style="padding-left: 50px;">
                        <li> {!!$caseStudyDetail->our_client !!}</li>
                    </ul>
                </div>
            </div>
            <div class="groove-container groove-column-gap-default " style="max-width: 850px">
                <div>
                    <h3>Challenges and needs</h3>
                    <ul class=custom-text-editor style="padding-left: 50px;">
                        <li>{!!$caseStudyDetail->challenges_and_needs !!}</li>
                    </ul>
                </div>
            </div>
            <div class="groove-container groove-column-gap-default " style="max-width: 850px">
                <div>
                    <h3>Our work</h3>
                    <ul class=custom-text-editor style="padding-left: 50px;">
                        <li>{!!$caseStudyDetail->our_work !!}</li>
                    </ul>
                </div>
            </div>
            <div class="groove-container groove-column-gap-default " style="max-width: 850px">
                <div>
                    <h3>Outcome</h3>
                    <ul class=custom-text-editor style="padding-left: 50px;">
                        <li>{!!$caseStudyDetail->outcome !!}</li>
                    </ul>
                </div>
            </div>
        </section>

        <div class="row justify-content-center mb-4">
            <a href="{{route('case-study')}}" class="btn btn-primary btn-round">Back to Overview</a>
        </div>
    </main>

