@extends('layouts.frontend')
@section('content')
<div class="page-knowlegde">
    <div class="main-content">
        <div class="blog-header">
            <div class="container">
                <div class="row">
                    @include('partial.frontend.expertise.top-post')
                    @include('partial.frontend.expertise.podcast')
                </div>
            </div>
        </div>
        @include('partial.frontend.expertise.tab-carousel')
        @include('partial.frontend.expertise.banner')

        {{-- // chuyen gia noi --}}
        <div class="block-knowledge section-1">
            @include('partial.frontend.expertise.expertSay')
        </div>
        
        {{-- // Video --}}
        @include('partial.frontend.expertise.video')
        <div class="block-knowledge section-2">
            @include('partial.frontend.expertise.invest')
        </div>
        <div class="section-banner">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-xs-12">
                        <a href="<?php echo \App\Lib\BHelp::getConfigSetting('BANNER_PAGE_KIENTHUC2_LINK')?>">
                            <img src="<?=\App\Lib\BHelp::getConfigSetting('BANNER_PAGE_KIENTHUC2')?>" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="block-knowledge section-3">
            @include('partial.frontend.expertise.plan')
        </div>

        <?php if(!empty(\App\Lib\BHelp::getConfigSetting('BANNER_PAGE_KIENTHUC4')) && \App\Lib\BHelp::getConfigSetting('BANNER_PAGE_KIENTHUC5') !== 'null'): ?>
            <div class="banner banner-child-1">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-xs-12">
                            <div class="banner-2">
                                <a href="<?php echo \App\Lib\BHelp::getConfigSetting('BANNER_PAGE_KIENTHUC4_LINK')?>">
                                    <img src="<?=\App\Lib\BHelp::getConfigSetting('BANNER_PAGE_KIENTHUC4')?>" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="block-knowledge section-4">
            @include('partial.frontend.expertise.spending')
        </div>

        <?php if(!empty(\App\Lib\BHelp::getConfigSetting('BANNER_PAGE_KIENTHUC5')) && \App\Lib\BHelp::getConfigSetting('BANNER_PAGE_KIENTHUC5') !== 'null'): ?>
            <div class="banner banner-child-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-xs-12">
                            <div class="banner-2">
                                <a href="<?php echo \App\Lib\BHelp::getConfigSetting('BANNER_PAGE_KIENTHUC5_LINK')?>">
                                    <img src="<?=\App\Lib\BHelp::getConfigSetting('BANNER_PAGE_KIENTHUC5')?>" alt="">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="block-knowledge section-5">
            @include('partial.frontend.expertise.knowledge')
        </div>

        <?php if(!empty(\App\Lib\BHelp::getConfigSetting('BANNER_PAGE_KIENTHUC7')) && \App\Lib\BHelp::getConfigSetting('BANNER_PAGE_KIENTHUC7') !== 'null'): ?>
            <div class="section-banner section-banner-2">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9 col-xs-12 text-center">
                            <a href="<?php echo \App\Lib\BHelp::getConfigSetting('BANNER_PAGE_KIENTHUC7_LINK')?>">
                                <img src="<?=\App\Lib\BHelp::getConfigSetting('BANNER_PAGE_KIENTHUC7')?>" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <div class="block-knowledge section-6">
            @include('partial.frontend.expertise.library')
        </div>
    </div>
</div>
@endsection
