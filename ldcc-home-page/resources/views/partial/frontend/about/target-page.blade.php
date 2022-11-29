<div class="advisor" style="background-image: url(<?php echo \App\Lib\BHelp::getConfigSetting('ABOUT_BG_MUCTIEU')?>);">
    <div class="container">
        <h3><?php echo \App\Lib\BHelp::getConfigSetting('ABOUT_MUCTIEU')?></h3>
        <ul>
            <?php foreach ($muctieu as $key => $value) :?>
                <li class="wow fadeInUp" data-wow-delay="0.{{$key+2}}s">
                    <div class="fancy">
                        <?php $number = $key+7; ?>
                        <?php $imgThumb = $value['thumbnail']?$value['thumbnail']:'/frontend/assets/images/ad'.$number.'.png'; ?>
                        <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>" alt="">
                        
                        <h4 class="title"><?php echo $value['title']; ?></h4>
                        <div class="text">
                            <?php echo $value['sub_title']; ?>
                        </div>
                    </div>
                </li>
            <?php endforeach;?>
        </ul>
    </div>
</div>
