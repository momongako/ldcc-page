<div class="slide">
    <div class="image">
        <?php foreach ($bannerTop as $key => $value) :?>
            <?php $imgThumb = $value['thumbnail']?$value['thumbnail']:'/frontend/assets/images/slide-advisor.png'; ?>
            <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>" class="img-responsive" alt="">
            <div class="content-slide">
                <div class="container">
                    <div class="content right">
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                            <h2><?php echo $value['title']; ?></h2>
                        </div>
                        <div class="content_banner wow fadeInUp" data-wow-delay="0.9s"><?php echo $value['sub_title']; ?></div>
                        <div class="button-action wow fadeInUp" data-wow-delay="0.9s">
                            <a href="<?php echo \App\Lib\BHelp::getConfigSetting('ADVISOR_SLIDER_BUTTON_LINK')?>" class="btn-linear"><?php echo \App\Lib\BHelp::getConfigSetting('ADVISOR_SLIDER_BUTTON_TEXT')?> <i class="fa fa-long-arrow-right"></i></a>
                        </div>                 
                    </div>
                </div>
            </div>
        <?php endforeach; ?>   
    </div>
</div>
