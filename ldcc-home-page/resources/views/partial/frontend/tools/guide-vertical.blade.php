<div class="guide vertical reverse" style="background:#fff">
    <div class="bg-image" style="background-image: url(<?php echo \App\Lib\BHelp::getConfigSetting('TOOL_BG_CACHTHUC_HOATDONG')?>);">
        <div class="container">
            <h3 class="primary-color"><?php echo \App\Lib\BHelp::getConfigSetting('TOOL_CACHTHUC_HOATDONG')?></h3>
            <div class="row">
                <div class="col-md-7">
                    <div class="content-carousel">
                        <div class="carousel-slide owl-carousel">
                            <?php foreach ($cachthuchoatdong as $key => $value) :?>
                                <div class="items">
                                    <?php $imgThumb = $value['thumbnail']?$value['thumbnail']:'/frontend/assets/images/mobile.svg'; ?>
                                    <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>" class="img-responsive" alt="">
                                </div>
                            <?php endforeach;?>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <ul class="steps">
                        <?php foreach ($cachthuchoatdong as $key => $value) :?>
                            <li class="go-to-step <?php if($key == 0){echo 'active';} ?> wow fadeInUp" data-wow-delay="0.{{$key+2}}s" data-item="{{$key+1}}">
                                <span class="hex-icon">
                                    <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', "/frontend/assets/images/hex-primary-small.svg")?>" class="primary icon" alt="">
                                    <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', "/frontend/assets/images/hex-border-primary.svg")?>" class="white icon" alt="">
                                    <span class="number">
                                        <i class="text">{{$key+1}}</i>
                                    </span>
                                </span>
                                <div class="content-text">
                                    <h4><?php echo $value['title']; ?></h4>
                                    <?php echo $value['sub_title']; ?>
                                </div>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
