<div class="partners">
    <div class="container">
        <h3 class="primary-color"><?php echo \App\Lib\BHelp::getConfigSetting('ABOUT_DOITAC')?></h3>
        <div class="partner-carousel owl-carousel">
            
            <?php foreach ($doi_tac as $key => $value) :?>
                <div class="item">
                    <?php $num = $key + 1; ?>
                    <?php $imgThumb = $value['thumbnail']?$value['thumbnail']:'/frontend/assets/images/doitac'.$num.'.svg'; ?>
                    <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>" alt="">
                    
                </div>    
            <?php endforeach;?>
        </div>
    </div>
</div>
