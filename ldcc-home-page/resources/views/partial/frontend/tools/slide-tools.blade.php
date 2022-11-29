<div class="slide">
    <div class="image">
        <?php foreach ($bannerTop as $key => $value) :?>
            <?php $imgThumb = $value['thumbnail']?$value['thumbnail']:'/frontend/assets/images/tool-slide.png'; ?>
            <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>" class="img-responsive" alt="">
            <div class="content-slide">
                <div class="container">
                    <div class="content">
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                            <h2><?php echo $value['title']; ?></h2>
                        </div>
                        <div class="content_top_banner wow fadeInUp" data-wow-delay="0.9s"><?php echo $value['sub_title']; ?></div>
                        <div class="button-action wow fadeInUp" data-wow-delay="0.9s">
                            <a href="<?php echo \App\Lib\BHelp::getConfigSetting('TOOL_SLIDER_TOP_BUTTON_LINK')?>" class="btn-linear"><?php echo \App\Lib\BHelp::getConfigSetting('TOOL_SLIDER_TOP_BUTTON_TEXT')?></a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach;?>
    </div>
</div>
