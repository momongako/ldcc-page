<div class="blog-header">
    <div class="container">
        <div class="row">
            <?php if (isset($hostPosts[0])):?>
            <div class="col-md-7">
                <div class="item-blog big" style="background-image: url('<?php echo \App\Lib\BHelp::getLinkCustom('img', $hostPosts[0]->thumbnail)?>');">
                    <div class="image"></div>
                    <div class="content">
                        <a href="<?php echo \App\Lib\BHelp::getLinkCustom('category', $hostPosts[0])?>">
                            <span><i class="icon-tag"></i> {{$hostPosts[0]->category->name}}</span>
                        </a>
                        <h3 class="line2">
                            <a href="<?php echo \App\Lib\BHelp::getLinkCustom('post', $hostPosts[0])?>">{{$hostPosts[0]->title}}</a>
                        </h3>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <div class="col-md-5">
                <?php if (isset($hostPosts[1])):?>
                <div class="item-blog mini" style="background-image: url('<?php echo \App\Lib\BHelp::getLinkCustom('img', $hostPosts[1]->thumbnail)?>');">
                    <div class="image"></div>
                    <div class="content">
                        <a href="<?php echo \App\Lib\BHelp::getLinkCustom('category', $hostPosts[1])?>">
                            <span><i class="icon-tag"></i> {{$hostPosts[1]->category->name}}</span>
                        </a>
                        <h3 class="line2"><a href="<?php echo \App\Lib\BHelp::getLinkCustom('post', $hostPosts[1])?>">{{$hostPosts[1]->title}}</a></h3>
                    </div>
                </div>
                <?php endif;?>
                <?php if (isset($hostPosts[2])):?>
                <div class="item-blog mini" style="background-image: url('<?php echo \App\Lib\BHelp::getLinkCustom('img', $hostPosts[2]->thumbnail)?>');">
                    <div class="image"></div>
                    <div class="content">
                        <a href="<?php echo \App\Lib\BHelp::getLinkCustom('category', $hostPosts[2])?>">
                            <span><i class="icon-tag"></i> {{$hostPosts[2]->category->name}}</span>
                        </a>
                        <h3 class="line2"><a href="<?php echo \App\Lib\BHelp::getLinkCustom('post', $hostPosts[2])?>">{{$hostPosts[2]->title}}</a></h3>
                    </div>
                </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>
