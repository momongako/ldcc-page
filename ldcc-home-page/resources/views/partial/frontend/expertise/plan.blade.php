<div class="container">
    <div class="top-section">
        <h3>KẾ HOẠCH</h3>
        <span></span>
        <a href="{{url('/')}}/cat/ke-hoach" class="btn-border">Xem tất cả <i class="fa fa-long-arrow-right"></i></a>
    </div>
    <div class="row">
        <div class="col-md-8">
            <ul class="main-list-blog">
                <?php if ($planPosts[0]):?>
                <?php $post0 = $planPosts[0] ?>
                <li>
                    <a href="<?php echo \App\Lib\BHelp::getLinkCustom('category', $post0)?>" class="cat">
                        <span><i class="icon-tag"></i> {{$post0->category->name}}</span>
                    </a>
                    <a href="<?php echo \App\Lib\BHelp::getLinkCustom('post', $post0)?>">
                        <div class="image" style="background-image: url('<?php echo \App\Lib\BHelp::getLinkCustom('img', $post0->thumbnail)?>');"></div>
                    </a>
                    <div class="content">
                        <h3 class=" line2"><a href="{{\App\Lib\BHelp::getLinkCustom('post',$post0)}}">{{$post0->title}}</a></h3>
                        <span>{{date('d-m-y',strtotime($post0->publish_date))}}</span>
                        <p><?php echo $post0->sub_title?></p>
                        <a href="{{\App\Lib\BHelp::getLinkCustom('post',$post0)}}" class="btn">Đọc tiếp <i class="fa fa-long-arrow-right"></i></a>
                    </div>
                </li>
                <?php endif?>
            </ul>
            <div class="row">
                <?php foreach ($planPosts as $k => $post):?>
                <?php if ($k > 0) :?>
                <div class="col-md-4">
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
                                <span>{{date('d-m-y',strtotime($post->publish_date))}}</span>
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
                <a href="<?php echo \App\Lib\BHelp::getConfigSetting('BANNER_PAGE_KIENTHUC3_LINK')?>">
                    <img src="<?=\App\Lib\BHelp::getConfigSetting('BANNER_PAGE_KIENTHUC3')?>" alt="">
                </a>
            </div>
        </div>
    </div>
</div>
