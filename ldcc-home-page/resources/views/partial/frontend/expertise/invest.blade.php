<div class="container">
    <div class="top-section">
        <h3>ĐẦU TƯ</h3>
        <span></span>
        <a href="{{url('/')}}/cat/dau-tu" class="btn-border">Xem tất cả <i class="fa fa-long-arrow-right"></i></a>
    </div>
    <div class="row">
        <div class="col-md-8">
            <ul class="main-list-blog">
                <?php if (isset($investPosts[0])) :?>
                <?php $post0 = $investPosts[0]?>
                <li>
                    <a href="<?php echo \App\Lib\BHelp::getLinkCustom('category', $post0)?>" class="cat">
                        <span><i class="icon-tag"></i> {{$post0->category->name}}</span>
                    </a>
                    <a href="<?php echo \App\Lib\BHelp::getLinkCustom('post', $post0)?>">
                        <?php $imgThumb = $post0->thumbnail?$post0->thumbnail:'/frontend/assets/images/hex-image.jpg'; ?>
                    <div class="image" style="background-image: url('<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>');"></div>
                    </a>

                    <div class="content">
                        <h3 class="line2"><a href="{{\App\Lib\BHelp::getLinkCustom('post',$post0)}}">{{$post0->title}}</a></h3>
                        <span>{{date('d-m-y',strtotime($post0->publish_date))}}</span>
                        <p><?php echo $post0->sub_title?></p>
                        <a href="{{\App\Lib\BHelp::getLinkCustom('post',$post0)}}" class="btn">Đọc tiếp <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </li>
                <?php endif;?>
            </ul>
            <div class="list-blog-mini">
                <div class="row">
                    <?php foreach ($investPosts as $k => $post):?>
                    <?php if ($k > 0 and $k < 5) :?>
                    <div class="col-md-6 col-xs-12">
                        <li>
                            <a href="<?php echo \App\Lib\BHelp::getLinkCustom('category', $post)?>" class="cat">
                                <span><i class="icon-tag"></i> {{$post->category->name}}</span>
                            </a>
                            <a href="<?php echo \App\Lib\BHelp::getLinkCustom('post', $post)?>">
                                <?php $imgThumb = $post->thumbnail?$post->thumbnail:'/frontend/assets/images/hex-image.jpg'; ?>
                                <div class="image" style="background-image: url('<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>');"></div>
                            </a>
                            <div class="content">
                                <h4 class="line2"><a href="{{\App\Lib\BHelp::getLinkCustom('post',$post)}}">{{$post->title}}</a></h4>
                                <span>{{date('d-m-y',strtotime($post->publish_date))}}</span>
                            </div>
                        </li>
                    </div>
                    <?php endif;?>
                    <?php endforeach;?>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="banner-bar">
                <a href="<?php echo \App\Lib\BHelp::getConfigSetting('BANNER_PAGE_KIENTHUC1_LINK')?>">
                    <img src="<?=\App\Lib\BHelp::getConfigSetting('BANNER_PAGE_KIENTHUC1')?>" alt="">
                </a>
            </div>
        </div>
    </div>
</div>
