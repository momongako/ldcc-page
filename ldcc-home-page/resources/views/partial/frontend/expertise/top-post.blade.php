<div class="col-md-8">
    <div class="card">
        <div class="row">
            <?php if (isset($hostPosts[0])) :?>
            <?php $post1 = $hostPosts[0]?>
            <div class="col-md-8">
                <?php $imgThumb = $post1->thumbnail?$post1->thumbnail:'/frontend/assets/images/hex-image.jpg'; ?>
                <div class="item-blog big" style="background-image: url('<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>');">
                    <div class="image"></div>
                    <div class="content">
                        <a href="{{\App\Lib\BHelp::getLinkCustom('category',$post1)}}"><span><i class="icon-tag"></i> {{$post1->category->name}}</span></a>
                        <h3><a href="{{\App\Lib\BHelp::getLinkCustom('post',$post1)}}">{{$post1->title}}</a></h3>
                    </div>
                </div>
            </div>
            <?php endif;?>
            <div class="col-md-4">
                <?php if (isset($hostPosts[1])) :?>
                <?php $post2 = $hostPosts[1]?>
                <div class="blog-item style1">
                    <?php $imgThumb = $post2->thumbnail?$post2->thumbnail:'/frontend/assets/images/hex-image.jpg'; ?>
                    <div class="image" style="background-image: url('<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>');">
                        <a href="{{\App\Lib\BHelp::getLinkCustom('category',$post2)}}"><span class="label"><i class="icon-tag"></i> {{$post2->category->name}}</span></a>
                    </div>
                    <h3 class="line2"><a href="{{\App\Lib\BHelp::getLinkCustom('post',$post2)}}">{{$post2->title}}</a></h3>
                    <span>{{date('d-m-Y',strtotime($post2->publish_date))}}</span>
                </div>
                <?php endif;?>
                <?php if (isset($hostPosts[2])) :?>
                <?php $post3 = $hostPosts[2]?>
                <div class="blog-item style1">
                    <?php $imgThumb = $post3->thumbnail?$post3->thumbnail:'/frontend/assets/images/hex-image.jpg'; ?>
                    <div class="image" style="background-image: url('<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>');">
                        <a href="{{\App\Lib\BHelp::getLinkCustom('category',$post3)}}"><span class="label"><i class="icon-tag"></i> {{$post3->category->name}}</span></a>
                    </div>
                    <h3 class="line2"><a href="{{\App\Lib\BHelp::getLinkCustom('post',$post3)}}">{{$post3->title}}</a></h3>
                    <span>{{date('d-m-Y',strtotime($post3->publish_date))}}</span>
                </div>
                <?php endif;?>
            </div>
        </div>
    </div>
</div>
