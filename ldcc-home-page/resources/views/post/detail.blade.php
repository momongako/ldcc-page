@extends('layouts.frontend')

<meta charset="UTF-8">
<link rel="icon" type="image/png" sizes="96x96" href="<?php echo \App\Lib\BHelp::getLinkCustom('img', '/img/favicon.png')?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php echo isset($pageTitle)?$pageTitle:''?></title>
<meta name="csrf-token" content="{{ csrf_token() }}">

<meta name="robots" content="index, follow">
<meta name="googlebot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
<meta name="bingbot" content="index, follow, max-snippet:-1, max-image-preview:large, max-video-preview:-1">
<link rel="canonical" href="{{url()->current()}}">
<meta name="description" content="<?php echo strip_tags($post->sub_title); ?>">
<meta name="Keywords" content="<?php echo $post->tag; ?>">

<!-- Google / Search Engine Tags -->
<meta itemprop="name" content="{{$post->title}}">
<meta itemprop="description" content="<?php echo strip_tags($post->sub_title); ?>">
<meta itemprop="image" content="<?php echo \App\Lib\BHelp::getLinkCustom('img', $post->thumbnail)?>">
    
<!-- Facebook Meta Tags -->
<meta property="og:locale" content="vi_VN">
<meta property="og:type" content="article"/>
<meta property="og:title" content="{{$post->title}}"/>
<meta property="og:description" content="<?php echo strip_tags($post->sub_title); ?>"/>
<meta property="og:url" content="{{url()->current()}}"/>
<meta property="og:site_name" content="<?php echo \App\Lib\BHelp::getConfigSetting('WEB_NAME')?>"/>
<meta property="og:image" content="<?php echo \App\Lib\BHelp::getLinkCustom('img', $post->thumbnail)?>"/>
    
<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{$post->title}}">
<meta name="twitter:description" content="<?php echo strip_tags($post->sub_title); ?>">
<meta name="twitter:image" content="<?php echo \App\Lib\BHelp::getLinkCustom('img', $post->thumbnail)?>">



@section('content')
    <div class="main-content">
        <div class="main-article">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-xs-12">
                        <?php echo \App\Lib\BHelp::getBreadcrums('post', $post)?>
                    </div>
                </div>
                <div class="row">
                    @include('partial.frontend.blog.left-info')
                    <div class="col-md-8 main-content-article">
                        <div class="content">
                            <h1 class="title"><?php echo $post->title?></h1>
                            <div class="row author">
                                <div class="col-sm-6">
                                    <?php $imgThumb = $post->user['thumbnail']?$post->user['thumbnail']:'/frontend/assets/images/hex-image.jpg'; ?>
                                    <div class="img" style="background-image: url('<?php echo \App\Lib\BHelp::getLinkCustom('img', $post->user['thumbnail'])?>');">
                                    </div>
                                    <div class="author-info">
                                        <?php if($post->created_by_type == 1): ?>
                                            <p>{{$post->author_name}}</p>
                                        <?php else: ?>
                                            <p>{{$post->user['name']}}</p>
                                        <?php endif; ?>
                                        <span>{{ceil(str_word_count($post->content)/400)}} min read</span>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <span class="date">{{date('d-m-Y',strtotime($post->publish_date))}}  | <a href="<?php echo \App\Lib\BHelp::getLinkCustom('category', $post)?>"><i class="icon-tag"></i> {{$post->category->name}}</a></span>
                                </div>
                            </div>
                            <div class="content-description">
                                <?php echo $post->sub_title;?>
                            </div>
                            <div class="content-text">
                                <?php echo $post->content?>
                            </div>
                            <div class="row meta-bottom">
                                <div class="col-xs-12 text-right">
                                    <ul>
                                        <li><a target="_blank" href="http://www.twitter.com/share?url=<?php echo \App\Lib\BHelp::getLinkCustom('post', $post)?>"><i class="fa fa-twitter"></i></a></li>
                                        <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo \App\Lib\BHelp::getLinkCustom('post', $post)?>"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="icon-bookmark"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="category">
                                <ul>
                                    <?php if ($post->tag):?>
                                        <?php $tags = explode(',',$post->tag)?>
                                        <?php foreach ($tags as $k => $tag):?>
                                            <li><a href="<?php echo \App\Lib\BHelp::getLinkCustom('tag', $tag)?>"><span><i class="icon-tag"></i> {{$tag}}</span> </a></li>
                                        <?php endforeach;?>
                                    <?php endif;?>
                                </ul>
                            </div>
                            
                            <div class="row comment-meta-bottom">
                                @include('partial.frontend.blog.comment-post')
                            </div>
                        </div>
                    </div>
                    <?php /*
                    <div class="col-md-2 col-sm-12 col-xs-12 content-ads text-right">
                        <div class="section-ads text-right">
                            <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', '/frontend/assets/images/image-blog/ads1.png')?>" alt="">
                            <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', '/frontend/assets/images/image-blog/ads2.png')?>" alt="">
                        </div>
                    </div>
                    */ ?>
                </div>
                @include('partial.frontend.blog.related')
                @include('partial.frontend.blog.category-post')
            </div>
        </div>
    </div>
    <script>
        jQuery(function($) {
            $(window).on('scroll', function() {
                var offset2 = window.pageYOffset;
                var top = $('.related').position().top - 350;
                if (offset2 >= top) {
                    $('.sidebar-action').removeClass('fixed');
                } else {
                    if (offset2 >= 200) {
                        $('.sidebar-action').addClass('fixed');
                    } else {
                        $('.sidebar-action').removeClass('fixed');
                    }
                }
            });
        });
    </script>
@endsection
