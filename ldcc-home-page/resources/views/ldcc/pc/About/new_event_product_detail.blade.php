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
                        <span class=current>{{__('Home')}}</span>
                        <span class=divider></span>
                        <span class=current>
                            {{__('NEW & EVENT')}}
                        </span>
                        <span id="application"
                              class=divider>
                </span>
                        <span class=current>
                            {{$post->title}}
                        </span>
                    </div>
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

    <!--   SERVICE – Application development & integration -->
    <section class="aboutus-block-6 about-us_toggle groove-section groove-section-boxed" id=corevalues style="margin-bottom: 50px;">
        <div class="groove-title-heading title-heading-center  wgl-double_heading">
            <h2 class="dbl__title-wrapper">
{{--                <span>{{$post->title}}</span><br>--}}
                <span>press release</span><br>
                <span class="cp_under_line" style="background-color: #e50000;width: 80px;height: 2.2px; display: block;clear: both;margin:  auto auto;"></span>

            </h2>
{{--            <p>--}}
{{--                {!!$post->sub_title!!}--}}
{{--            </p>--}}
        </div>

        <div style="display: flex; justify-content: center">
            <div>
                <img style="width: 960px;height: 640px;" src="https://pronexus-media-files.s3-ap-southeast-1.amazonaws.com/public{{$post->thumbnail}}" alt="">
            </div>
        </div>
        <br>
        <h3 style="text-align: center">{{$post->title}}</h3>
        <div class="groove-container groove-column-gap-default " style="max-width: 850px">
            <div class=groove-text-editor>
                {!!$post->content !!}
            </div>
        </div>


    </section>
    <!--      API gateway (2/2)-->



</main>