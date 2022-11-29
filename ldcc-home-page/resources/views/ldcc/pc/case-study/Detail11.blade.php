<div class="page-header page-header_align_left" style=" margin-bottom: 0px; padding-top: 0px; padding-bottom: 10px;">
    <div class=page-header_wrapper>
        <div class=wgl-container>
            <div class=page-header_content>
                <div class=page-header_breadcrumbs style="color: #666666; font-size: 15px; line-height: 24px;">
                    <div class=breadcrumbs><a href=index.html class=home>Home</a> <span class=divider></span> <a
                                href=case_studies_ldcc_page.html>Case Study</a>
                        <span id="application" class=divider>

              </span>
                        <span class=current>Customer-centric system development</span>
                    </div>
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

    {{--title detai --}}
    <?php
    if(\App\Lib\BHelp::getConfigSetting('CASE_STUDY_DETAIL_11')){
        echo \App\Lib\BHelp::getConfigSetting('CASE_STUDY_DETAIL_11');
    }
    ?>

    <div class="row justify-content-center">
        <a href="{{route('case-study')}}" class="btn btn-primary btn-round">Back to Overview</a>
    </div>
    {{--end title --}}

</main>
