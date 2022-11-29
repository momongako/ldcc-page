<?php //echo \App\Lib\BHelp::getConfigSetting('HOME_PAGE_ABOUT_PRONEXUS')?>

<div class="about">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php foreach ($session2 as $key => $value) { ?>
                    <div class="wow fadeInUp" data-wow-delay="0.3s">
                        <h3><?php echo $value['title']; ?></h3>
                    </div>
                    <div class="qoute wow fadeInUp" data-wow-delay="0.5s">
                        <?php echo $value['sub_title']; ?>
                    </div>
                    <div class="wow fadeInUp" data-wow-delay="0.8s">
                        <?php echo $value['content']; ?>
                    </div>
                <?php } ?>
            </div>
            <div class="col-md-6">
                <?php foreach ($session2 as $key => $value) { ?>
                    <?php $imgThumb = $value['thumbnail']?$value['thumbnail']:'/frontend/assets/images/About.png'; ?>
                    <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>" class="img-responsive" alt="">
                <?php } ?>
            </div>
        </div>
    </div>
</div>