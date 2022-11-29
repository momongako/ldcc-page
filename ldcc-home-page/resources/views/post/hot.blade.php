@extends('layouts.frontend')

@section('content')
    <div class="main-content">
        <div class="shared">
            <div class="container">
                <div class="divider"></div>
                <div class="row top">
                    <div class="col-md-6">
                        <h3>Tin tức nổi bật</h3>
                        <p>Integer commodo et augue consequat ullamcorper</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12" style="padding: 0px 0px;">
                        <div class="carousel-blog blog-new owl-carousel">
                            <?php foreach ($hostPosts as $post) :?>
                            <div class="item">
                                <div class="article new">
                                    <img src="{{$post->thumbnail}}" class="image-share" alt="">
                                    <div class="content-text">
                                        <span class="meta">{{date('d-m-Y',strtotime($post->publish_date))}} | <i class="fa fa-tag"></i> {{$post->category->name}}</span>
                                        <h4 class="title line2"><a href="/tt/tin-tuc/{{$post->slug}}">{{$post->title}}</a></h4>
                                        <ul>
                                            <li><i class="fa fa-eye"></i> 100</li>
                                            <li><i class="fa fa-comment-o"></i> 8</li>
                                            <li><i class="fa fa-share-alt"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection




