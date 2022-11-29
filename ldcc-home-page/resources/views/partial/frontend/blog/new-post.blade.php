<div class="col-md-4">
    <div class="block">
        <h3 class="line-right"><?php echo \App\Lib\BHelp::getConfigSetting('TT_MOI_CAP_NHAT')?></h3>
        <ul class="list-blog-mini">
            <?php foreach ($newPosts as $post) :?>
            <li>
                <a href="<?php echo \App\Lib\BHelp::getLinkCustom('category', $post)?>" class="cat">
                    <span><i class="icon-tag"></i> {{$post->category->name}}</span>
                </a>
                <a href="<?php echo \App\Lib\BHelp::getLinkCustom('post', $post)?>">
                    <div class="image" style="background-image: url('<?php echo \App\Lib\BHelp::getLinkCustom('img', $post->thumbnail)?>');"></div>
                </a>
                <div class="content">
                    <h4 class="line2"><a href="<?php echo \App\Lib\BHelp::getLinkCustom('post', $post)?>">{{$post->title}}</a></h4>
                    <span>{{date('d-m-Y',strtotime($post->publish_date))}}</span>
                </div>
            </li>
            <?php endforeach;?>
        </ul>
    </div>
    <div class="block">
        <a href="<?php echo \App\Lib\BHelp::getConfigSetting('TT_BANNER_RIGHT_1_LINK')?>">
            <img src="<?php echo \App\Lib\BHelp::getConfigSetting('TT_BANNER_RIGHT_1')?>" class="img-responsive" alt="">
        </a>
    </div>
    <div class="block">
        <a href="<?php echo \App\Lib\BHelp::getConfigSetting('TT_BANNER_RIGHT_2_LINK')?>">
            <img src="<?php echo \App\Lib\BHelp::getConfigSetting('TT_BANNER_RIGHT_2')?>" class="img-responsive" alt="">
        </a>
    </div>
</div>
