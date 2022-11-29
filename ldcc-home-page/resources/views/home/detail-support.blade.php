@extends('layouts.frontend')
@section('content')
    <div class="main-content">
        <div class="box-search">
            <div class="container">
                <div class="content-search">
                    <h3><?php echo \App\Lib\BHelp::getConfigSetting('HOTRO_TITLE')?></h3>
                    <form action="/ho-tro/{{$post->slug}}" method="get" class="search-form">
                        <input type="text" name="search" value="">
                        <i class="fa fa-search"></i>
                    </form>
                    <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', '/frontend/assets/images/support1.svg')?>" class="image-1" alt="">
                    <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', '/frontend/assets/images/support2.svg')?>" class="image-2" alt="">
                </div>
            </div>
        </div>
        <div class="list-faq page-support-2">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="content-list">
                            <div class="panel-group">
                                <?php foreach ($categories as $category) :?>
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <h4 class="panel-title">
                                            <a data-toggle="collapse" href="#collapse{{$category->id}}">{{$category->name}}<i class="fa fa-angle-down"></i></a>
                                        </h4>
                                    </div>
                                    <div id="collapse{{$category->id}}" class="panel-collapse collapse">
                                        <ul class="list-group">
                                            <?php if ($category->posts) : ?>
                                                <?php $posts = $category->posts?>
                                                <?php foreach ($posts as $item):?>
                                                    <li class="list-group-item"><a href="/ho-tro/{{$item->slug}}">{{$item->title}}</a></li>
                                                <?php endforeach;?>
                                            <?php endif ?>
                                        </ul>
                                    </div>
                                </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="content-support">
                            <h3>{{$post->title}}</h3>
                            <?php echo $post->content?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
