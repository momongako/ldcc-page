<?php //echo \App\Lib\BHelp::getConfigSetting('HOME_PAGE_DICH_VU_TU_VAN')?>
<div class="advisor">
    <div class="container">
        <h3><?php echo \App\Lib\BHelp::getConfigSetting('HOME_DICH_VU')?></h3>
        <ul>
            <?php foreach ($session6 as $key => $value) : ?>
                <li class="wow fadeInUp" data-wow-delay="0.{{$key+1}}s" data-item="{{$key+1}}">
                    <div class="fancy">
                        <?php $number = $key+1; ?>
                        <?php $imgThumb = "/frontend/assets/images/ad".$number.".png"; ?>
                        <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>" >
                        <div>
                            <h4 class="title"><?php echo $value['title']; ?></h4>
                        </div>
                        <div class="text qoute"><?php echo $value['content']; ?></div>
                        <a href="<?php $key_config = 'HOME_DICH_VU_LINK_'.($key+1); echo \App\Lib\BHelp::getConfigSetting($key_config)?>"> <i class="fa fa-angle-double-right"></i> </a>
                    </div>
                </li>
            <?php endforeach; ?>
        </ul>
        <a href="<?php echo \App\Lib\BHelp::getConfigSetting('HOME_DICH_VU_BUTTON_LINK')?>" class="btn-hot"><?php echo \App\Lib\BHelp::getConfigSetting('HOME_DICH_VU_BUTTON_TEXT')?></a>
    </div>
</div>