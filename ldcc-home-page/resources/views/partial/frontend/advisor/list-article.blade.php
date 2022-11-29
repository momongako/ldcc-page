<div class="shared list-article" >
    <div class="container">
        <div class="row top">
            <div class="col-xs-12">
                <h3 style="text-align: center;"><?php echo \App\Lib\BHelp::getConfigSetting('ADVISOR_BAIVIET_TIEUBIEU')?></h3>
            </div>
        </div>
        <div class="row">
            <?php foreach ($baiviettieubieu as $post) :?>
            <div class="col-md-4 col-sm-6 col-xs-12">
                <div class="article new">
                    <?php $imgThumb = $post['thumbnail']?$post['thumbnail']:'/frontend/assets/images/default.jpg'; ?>
                    <a href="<?php echo \App\Lib\BHelp::getLinkCustom('post', $post)?>"><img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>" class="image-share" alt=""></a>
                    <div class="content-text">
                        <span class="meta">{{date('d-m-Y',strtotime($post->publish_date))}} | <a href="<?php echo \App\Lib\BHelp::getLinkCustom('category', $post)?>"><i class="fa fa-tag"></i> {{$post->category->name}}</a></span>
                        <h4 class="title line2"><a href="<?php echo \App\Lib\BHelp::getLinkCustom('post', $post)?>">{{$post->title}}</a></h4>
                        <ul>
                            <li><i class="fa fa-eye"></i> {{$post->count_view}}</li>
                            <li><i class="fa fa-comment-o"></i> {{$post->countcomment}}</li>
                            <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo \App\Lib\BHelp::getLinkCustom('post', $post)?>"><i class="fa fa-share-alt"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
        <div class="view-all">
            <a href="<?php echo \App\Lib\BHelp::getConfigSetting('ADVISOR_BAIVIET_TIEUBIEU_XEMALL_LINK')?>" class="btn-border"><?php echo \App\Lib\BHelp::getConfigSetting('ADVISOR_BAIVIET_TIEUBIEU_XEMALL_TEXT')?> <i class="fa fa-long-arrow-right"></i></a>
        </div>
    </div>
</div>
