<div class="related same-cat">
    <h3>CÙNG CHUYÊN MỤC</h3>
    <div class="row">
        <?php //$categoryPosts = $category->posts ?>
        <?php foreach ($listPostOfcategory as $post) : ?>
        <div class="col-md-3 col-sm-6 col-sx-12">
            <div class="item-related ">
                <?php $imgThumb = $post['thumbnail']?$post['thumbnail']:'/frontend/assets/images/image-blog/related-1.png'; ?>
                <a href="<?php echo \App\Lib\BHelp::getLinkCustom('category', $post)?>" class="cat">
                    <span><i class="icon-tag"></i> {{$post->category->name}}</span>
                </a>
                <a href="<?php echo \App\Lib\BHelp::getLinkCustom('post', $post)?>">
                    <div class="image" style="background-image: url('<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>');"></div>
                </a>

                <div class="meta">
                    <span>{{date('d-m-Y',strtotime($post->publish_date))}}</span>
                    <ul class="right">
                        <li><i class="fa fa-eye"></i> {{$post->count_view}}</li>
                        <li><i class="icon-comment-white-oval-bubble"></i> {{$post->countcomment}}</li>
                        <li><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=<?php echo \App\Lib\BHelp::getLinkCustom('post', $post)?>"><i class="icon-share-1"></i></a></li>
                    </ul>
                </div>
                <h4 class="line2"><a href="<?php echo \App\Lib\BHelp::getLinkCustom('post', $post)?>">{{$post->title}}</a></h4>
                @include('partial.frontend.blog.author-post',['post'=>$post])
            </div>
        </div>
        <?php endforeach;?>
    </div>
</div>
