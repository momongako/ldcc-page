@extends('layouts.frontend')

@section('content')
    <div class="main-content">
        <div class="shared">
            <div class="container">
                <div class="row top">
                    <div class="col-md-6">
                        <h3>Kiến thức hữu ích</h3>
                        <p>Read the latest news and important updates from ProNexus</p>
                    </div>
                    <div class="col-md-6 have-button">
                        <a href="/kien-thuc" class="btn-border right">Xem tất cả <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <div class="carousel-blog owl-carousel">
                            <?php foreach ($homePosts as $post) :?>
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


