<div class="col-md-2 sidebar-left col-sm-12 col-xs-12">
    <ul class="sidebar-action">
        <li><a href="#"><img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', '/frontend/assets/images/hex-border-primary-small.svg')?>" alt=""><i class="fa fa-eye"></i></a> {{$post->count_view}}</li>
        <li><a href="#comment-content"><img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', '/frontend/assets/images/hex-border-primary-small.svg')?>" alt=""><i class="icon-comment-white-oval-bubble"></i></a> {{$countComment}}</li>
        <li><a href="#"><img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', '/frontend/assets/images/hex-border-primary-small.svg')?>" alt=""><i class="icon-bookmark"></i></a> Save</li>
        <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo \App\Lib\BHelp::getLinkCustom('post', $post)?>"><img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', '/frontend/assets/images/hex-border-primary-small.svg')?>" alt=""><i class="icon-share-1"></i></a> Share</li>
    </ul>
</div>
