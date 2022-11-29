<div class="container">
    <div class="top-section">
        <h3>CHUYÊN GIA NÓI</h3>
        <span></span>
        <a href="{{url('/')}}/cat/cong-dong" class="btn-border">Xem tất cả <i class="fa fa-long-arrow-right"></i></a>
    </div>
    <div class="row">
        <?php foreach ($expertSayPots as $k => $post) :?>
        <?php if ($k < 3) :?>
        <div class="col-md-4 col-sm-6 col-sx-12">
            <div class="item-related">
                <a href="<?php echo \App\Lib\BHelp::getLinkCustom('category', $post)?>" class="cat">
                    <span><i class="icon-tag"></i> {{$post->category->name}}</span>
                </a>
                <a href="<?php echo \App\Lib\BHelp::getLinkCustom('post', $post)?>">
                    <?php $imgThumb = $post->thumbnail?$post->thumbnail:'/frontend/assets/images/hex-image.jpg'; ?>
                    <div class="image" style="background-image: url('<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>');"></div>
                </a>
                <div class="meta">
                    <?php !empty($post->publish_date)? $datapost = $post->publish_date : $datapost = $post->created_at ?>
                    <span>{{date('d-m-Y',strtotime($datapost))}}</span>
                    <ul class="right">
                        <li><i class="fa fa-eye"></i> {{$post->count_view}}</li>
                        <li><i class="icon-comment-white-oval-bubble"></i> {{$post->count_comment}}</li>
                        <li><i class="icon-share-1"></i></li>
                    </ul>
                </div>
                <h4 class="line2"><a href="{{\App\Lib\BHelp::getLinkCustom('post',$post)}}">{{$post->title}}</a></h4>
                
                <div class="author">
                    <?php $imgThumb = $post->user->thumbnail?$post->user->thumbnail:'/frontend/assets/images/hex-image.jpg'; ?>
                    <div class="img" style="background-image: url('<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>');">
                    </div>
                    <div class="author-info">
                        <p>{{$post->user->name}}</p>
                        <span>{{ceil(str_word_count($post->content)/400)}} min read</span>
                    </div>
                </div>
            </div>
        </div>
        <?php endif;?>
        <?php endforeach;?>
    </div>
    <div class="row ">
        <?php foreach ($expertSayPots as $k => $post) :?>
        <?php if ($k >= 3) :?>
        <div class="col-md-3 col-sm-6 col-sx-12">
            <div class="item-related">
                <a href="<?php echo \App\Lib\BHelp::getLinkCustom('category', $post)?>" class="cat">
                    <span><i class="icon-tag"></i> {{$post->category->name}}</span>
                </a>
                <a href="<?php echo \App\Lib\BHelp::getLinkCustom('post', $post)?>">
                    <?php $imgThumb = $post->thumbnail?$post->thumbnail:'/frontend/assets/images/hex-image.jpg'; ?>
                    <div class="image" style="background-image: url('<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>');"></div>
                </a>
                <div class="meta">
                    <span>{{date('d-m-Y',strtotime($post->publish_date))}}</span>
                    <ul class="right">
                        <li><i class="fa fa-eye"></i> {{$post->count_view}}</li>
                        <li><i class="icon-comment-white-oval-bubble"></i> {{$post->count_comment}}</li>
                        <li><i class="icon-share-1"></i></li>
                    </ul>
                </div>
                <h4 class="line2"><a href="{{\App\Lib\BHelp::getLinkCustom('post',$post)}}">{{$post->title}}</a></h4>
                
                <div class="author">
                    <?php $imgThumb = $post->user->thumbnail?$post->user->thumbnail:'/frontend/assets/images/hex-image.jpg'; ?>
                    <div class="img" style="background-image: url('<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>');">
                    </div>
                    <div class="author-info">
                        <p>{{$post->user->name}}</p>
                        <span>{{ceil(str_word_count($post->content)/400)}} min read</span>
                    </div>
                </div>                
            </div>
        </div>
        <?php endif;?>
        <?php endforeach;?>
    </div>
</div>
