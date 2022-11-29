<div class="shared">
    <div class="container">
        <div class="row top">
            <div class="col-md-6">
                <h3><?php echo \App\Lib\BHelp::getConfigSetting('HOME_KIENTHUC_HUUICH_TIEU_DE')?></h3>
                <p><?php echo \App\Lib\BHelp::getConfigSetting('HOME_KIENTHUC_HUUICH_MO_TA')?></p>
            </div>
            <div class="col-md-6 have-button">
                {{-- <a href="/kien-thuc-huu-ich.html" class="btn-border right">Xem tất cả <i class="fa fa-long-arrow-right"></i></a> --}}
                <a href="<?php echo \App\Lib\BHelp::getConfigSetting('HOME_KIENTHUC_HUUICH_XEMALL_LINK')?>" class="btn-border right"><?php echo \App\Lib\BHelp::getConfigSetting('HOME_KIENTHUC_HUUICH_XEMALL')?> <i class="fa fa-long-arrow-right"></i></a>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <div class="carousel-blog owl-margin owl-carousel">
                    <?php foreach ($kienthucpost as $post) :?>
                        <div class="item">
                            <div class="article">
                                <?php $imgThumb = $post['thumbnail']?$post['thumbnail']:'/frontend/assets/images/default.jpg'; ?>
                                <a href="<?php echo \App\Lib\BHelp::getLinkCustom('post', $post)?>"><div style="background-image: url('<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>');" class="image-share"></div></a>
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
