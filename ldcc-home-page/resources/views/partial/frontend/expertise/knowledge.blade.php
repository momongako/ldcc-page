<div class="container">
    <div class="top-section">
        <h3>BẠN CẦN BIẾT</h3>
        <span></span>
        <a href="{{url('/')}}/cat/ban-can-biet" class="btn-border">Xem tất cả <i class="fa fa-long-arrow-right"></i></a>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="row">
                <?php foreach ($youNeedPosts as $k => $post) : ?>
                <?php if ($k < 2) : ?>
                <div class="col-sm-6 col-sx-12">
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
                                <span class="meta">{{date('d-m-Y',strtotime($post->publish_date))}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif;?>
                <?php endforeach;?>
            </div>
            <div class="row">
                <?php foreach ($youNeedPosts as $k => $post) : ?>
                <?php if ($k >1 and $k < 5) : ?>
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
                                <span class="meta">{{date('d-m-Y',strtotime($post->publish_date))}}</span>
                            </div>
                        </div>
                    </div>
                </div>
                <?php endif;?>
                <?php endforeach;?>
            </div>
        </div>
        <div class="col-md-4">
            <div class="banner-bar">
                <a href="<?php echo \App\Lib\BHelp::getConfigSetting('BANNER_PAGE_KIENTHUC6_LINK')?>">
                    <img src="<?=\App\Lib\BHelp::getConfigSetting('BANNER_PAGE_KIENTHUC6')?>" alt="">
                </a>
            </div>
        </div>
    </div>
</div>
