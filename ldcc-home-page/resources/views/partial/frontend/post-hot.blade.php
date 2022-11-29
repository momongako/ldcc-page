<div class="shared">
    <div class="container">
        <div class="divider"></div>
        <div class="row top">
            <div class="col-md-6">
                <h3><?php echo \App\Lib\BHelp::getConfigSetting('HOME_TINTUC_NOIBAT_TIEU_DE')?></h3>
                <p><?php echo \App\Lib\BHelp::getConfigSetting('HOME_TINTUC_NOIBAT_MO_TA')?></p>
            </div>
            <div class="col-md-6 have-button">
                {{-- <a href="/tin-tuc-noi-bat.html" class="btn-border right">Xem tất cả <i class="fa fa-long-arrow-right"></i></a> --}}
                <a href="<?php echo \App\Lib\BHelp::getConfigSetting('HOME_TINTUC_NOIBAT_XEMALL_LINK')?>" class="btn-border right"><?php echo \App\Lib\BHelp::getConfigSetting('HOME_TINTUC_NOIBAT_XEMALL')?> <i class="fa fa-long-arrow-right"></i></a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12" style="padding: 0px 0px;">
                <div class="carousel-blog blog-new owl-carousel" style="margin-bottom: 60px">
                    <?php foreach ($tintucnoibat as $post) :?>
                        <div class="item">
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
            </div>
        </div>
    </div>
</div>
