@extends('layouts.frontend')

@section('banner')
    <?php
        if(\App\Lib\BHelp::getConfigSetting('EMAIL_BANNER')){
            echo \App\Lib\BHelp::getConfigSetting('EMAIL_BANNER');
        }
    ?>
@endsection

@section('content')
    <?php
        if(\App\Lib\BHelp::getConfigSetting('EMAIL_CONTENT_BLOG_1')){
            echo \App\Lib\BHelp::getConfigSetting('EMAIL_CONTENT_BLOG_1');
        }
        if(\App\Lib\BHelp::getConfigSetting('EMAIL_CONTENT_BLOG_2')){
            echo \App\Lib\BHelp::getConfigSetting('EMAIL_CONTENT_BLOG_2');
        }
    ?>
@endsection

