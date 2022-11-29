<div class="know-item">
    <div class="content-know">
        <a href="<?php echo \App\Lib\BHelp::getLinkCustom('category', $item)?>" class="cat">
            <span><i class="icon-tag"></i> {{$item->category->name}}</span>
        </a>
        <a href="<?php echo \App\Lib\BHelp::getLinkCustom('post', $item)?>">
            <?php $imgThumb = $item->thumbnail?$item->thumbnail:'/frontend/assets/images/hex-image.jpg'; ?>
            <div class="image" style="background-image: url('<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>');"></div>
        </a>
        <div class="content-text">
            <h4 class="title line2"><a href="{{\App\Lib\BHelp::getLinkCustom('post',$item)}}">{{$item->title}}</a></h4>
            <span class="meta">{{date('d-m-Y',strtotime($item->publish_date))}}</span>
            <p><?php echo $item->sub_title?></p>
        </div>
    </div>
</div>
