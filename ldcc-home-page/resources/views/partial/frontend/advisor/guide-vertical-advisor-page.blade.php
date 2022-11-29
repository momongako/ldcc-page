<div class="guide vertical" >
    <div class="bg-image">
        <div class="container">
            <h3 class="white-color"><?php echo \App\Lib\BHelp::getConfigSetting('ADVISOR_CACHTHUC_HOATDONG')?></h3> 
            <div class="row">
                <div class="col-md-6">
                    <ul class="steps">
                        <?php foreach ($cachthuchoatdong as $key => $value) :?>
                            <li class="go-to-step wow fadeInUp" data-wow-delay="0.{{$key+1}}s" data-item="{{$key+1}}">
                                <span class="hex-icon">
                                    <span class="hex"></span>
                                    <span class="number">
                                        <i class="text">{{$key+1}}</i>
                                    </span>
                                </span>
                                <div class="content-text">
                                    <h4><?php echo $value['title'];?></h4>
                                    <?php echo $value['sub_title'];?>
                                </div>
                            </li>
                        <?php endforeach; ?>
                        
                    </ul>
                </div>
                <div class="col-md-6">
                    <div class="content-carousel">
                        <div class="carousel-slide owl-carousel">
                            <?php foreach ($cachthuchoatdong as $key => $value) :?>
                                <?php $imgThumb = $value['thumbnail']?$value['thumbnail']:'/frontend/assets/images/mobile.svg'; ?>
                                <div class="items">
                                    <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>" alt="">
                                </div>
                            <?php endforeach; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>