<div class="list-mobile" >
    <div class="container">
        <?php foreach ($motacuoipage as $key => $value) :?>
            <?php $imgThumb = $value['thumbnail']?$value['thumbnail']:'/frontend/assets/images/mobiles.svg'; ?>
            <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>" class="" alt="">
            <div class="content">
                <div class="wow fadeInUp" data-wow-delay="0.4s">
                    <h3 class="primary-color"><?php echo $value['title']; ?></h3>
                </div>
                <div class="wow fadeInUp" data-wow-delay="0.8s">
                    <?php echo $value['sub_title']; ?>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>
