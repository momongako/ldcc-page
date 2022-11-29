<div class="author">
    <?php //print_r($post->user);die; ?>
    <?php $imgThumb = $post->user['thumbnail']?$post->user['thumbnail']:'/frontend/assets/images/hex-image.jpg'; ?>
    <div class="img" style="background-image: url('<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>');">
    </div>
    <div class="author-info">
        <?php if($post->created_by_type == 1): ?>
            <p>{{$post->author_name}}</p>
        <?php else: ?>
            <p>{{$post->user['name']}}</p>
        <?php endif; ?>
        <span>{{ceil(str_word_count($post->content)/400)}} min read</span>
    </div>
</div>
