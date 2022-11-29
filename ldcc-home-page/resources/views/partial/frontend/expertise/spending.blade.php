<div class="container">
    <div class="top-section">
        <h3>CHI TIÊU</h3>
        <span></span>
        <a href="{{url('/')}}/cat/chi-tieu" class="btn-border">Xem tất cả <i class="fa fa-long-arrow-right"></i></a>
    </div>
    <div class="row">
        <?php foreach ($spendingPosts as $k => $post) :?>
        <?php if ($k < 3) :?>
        <div class="col-md-4 col-sm-6 col-sx-12">
            <div class="know-item">
                <div class="content-know">
                    <a href="<?php echo \App\Lib\BHelp::getLinkCustom('category', $post)?>" class="cat">
                        <span><i class="icon-tag"></i> {{$post->category->name}}</span>
                    </a>
                    <a href="<?php echo \App\Lib\BHelp::getLinkCustom('post', $post)?>">
                        <?php $imgThumb = $post->thumbnail?$post->thumbnail:'/frontend/assets/images/hex-image.jpg'; ?>
                        <div class="image" style="background-image: url('<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>');"></div>
                    </a>
                    <div class="content-text">
                        <h4 class="title line2"><a href="{{\App\Lib\BHelp::getLinkCustom('post',$post)}}">{{$post->title}}</a></h4>
                        <span class="meta">{{date('d-m-y',strtotime($post->publish_date))}}</span>
                    </div>
                </div>
            </div>
        </div>
        <?php endif;?>
        <?php endforeach;?>
    </div>
    <div class="list-blog-mini">
        <div class="row">
            <?php foreach ($spendingPosts as $k => $post) :?>
            <?php if ($k > 2 and  $k < 6) :?>
            <div class="col-md-4 col-xs-12">
                <li>
                    <a href="<?php echo \App\Lib\BHelp::getLinkCustom('category', $post)?>" class="cat">
                        <span><i class="icon-tag"></i> {{$post->category->name}}</span>
                    </a>
                    <a href="<?php echo \App\Lib\BHelp::getLinkCustom('post', $post)?>">
                        <?php $imgThumb = $post->thumbnail?$post->thumbnail:'/frontend/assets/images/hex-image.jpg'; ?>
                        <div class="image" style="background-image: url('<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>');"></div>
                    </a>
                    <div class="content">
                        <h4 class="title line2"><a href="{{\App\Lib\BHelp::getLinkCustom('post',$post)}}">{{$post->title}}</a></h4>
                        <span class="meta">{{date('d-m-y',strtotime($post->publish_date))}}</span>
                    </div>
                </li>
            </div>
            <?php endif;?>
            <?php endforeach;?>
        </div>
    </div>
</div>
