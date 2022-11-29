<div class="tool-list">
    <div class="bg-image" style="background-image: url(<?php echo \App\Lib\BHelp::getConfigSetting('TOOL_BG_DANHSACH_CONGCU')?>);">
        <div class="container">
            <h3><?php echo \App\Lib\BHelp::getConfigSetting('TOOL_DANHSACH_CONGCU')?></h3>
            <ul class="tools">
                <?php foreach ($danhsachtool as $key => $value) :?>
                    <li class="wow fadeInUp" data-wow-delay="0.{{$key+2}}s">
                        <div class="tool">
                            <div class="image">
                                <?php $number = $key+1; ?>
                                <?php $imgThumb = $value['thumbnail']?$value['thumbnail']:"/frontend/assets/images/tool".$number.".png"; ?>
                                <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>" class="" alt="">
                            </div>
                            <div class="content">
                                <h4><?php echo $value['title']; ?></h4>
                                <?php echo $value['sub_title']; ?>
                            </div>
                        </div>
                    </li>
                <?php endforeach;?>
            </ul>
        </div>
    </div>
</div>
