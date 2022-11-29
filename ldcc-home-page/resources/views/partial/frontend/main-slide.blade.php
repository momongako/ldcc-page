<?php //echo \App\Lib\BHelp::getConfigSetting('HOME_PAGE_MAIN_IMAGE')?>

<div class="slide">
    <div class="image">
        <?php foreach ($session1 as $key => $value) { ?>
            <?php $imgThumb = $value['thumbnail']?$value['thumbnail']:'/frontend/assets/images/slide.png'; ?>
            <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>" class="img-responsive" alt="">
        <?php } ?>
        <div class="content-slide">
            <div class="container">
                <div class="content">
                    <?php foreach ($session1 as $key => $value) { ?>
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                            <h2><?php echo $value['title']; ?></h2>
                        </div>
                        <div class="wow fadeInUp" data-wow-delay="0.9s">
                            <?php echo $value['sub_title']; ?>
                        </div>
                        
                        <div class="button-action wow fadeInUp" data-wow-delay="0.9s">
                            <a href="#"  data-toggle="modal" data-target="#register_form" class="btn-linear"><?php echo \App\Lib\BHelp::getConfigSetting('HOME_SLIDER_BUTTON_TAOTAIKHOAN')?></a>
                            <?php /*<a href="<?php echo \App\Lib\BHelp::getConfigSetting('HOME_SLIDER_BUTTON_TAOTAIKHOAN_LINK')?>" class="btn-linear"><?php echo \App\Lib\BHelp::getConfigSetting('HOME_SLIDER_BUTTON_TAOTAIKHOAN')?></a>*/?>
                            <a href="<?php echo \App\Lib\BHelp::getConfigSetting('HOME_SLIDER_BUTTON_TAOTAIKHOAN_LINK_APPLE')?>"> <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', '/frontend/assets/images/apple.svg')?>"> </a>
                            <a href="<?php echo \App\Lib\BHelp::getConfigSetting('HOME_SLIDER_BUTTON_TAOTAIKHOAN_LINK_PALYSTORE')?>"> <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', '/frontend/assets/images/playstore.svg')?>"> </a>
                        </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</div>