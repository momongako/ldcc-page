<div class="leaders bg-primary" >
    <div class="bg-image">
        <div class="container">
            <h3 class="heading-section"><?php echo \App\Lib\BHelp::getConfigSetting('ADVISOR_COVAN_TIEUBIEU')?></h3>
            <ul class="list-advisor">
                <?php foreach ($co_van_tieu_bieu as $key => $value) : ?>
                <?php if($key < 3): ?>
                <li class="wow fadeInUp" data-wow-delay="0.{{$key+1}}s">
                    <div class="member">
                        <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', '/frontend/assets/images/hex-white-big.svg')?>" class="pattern-hex" alt="">
                        <div class="intro-member">
                            <div class="image">
                                <div style="background-image: url('<?php echo \App\Lib\BHelp::getLinkCustom('img', $value['thumbnail'])?>')" class="avatar"></div>
                                <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', '/frontend/assets/images/medal.svg')?>" class="medal" alt="">
                            </div>
                            <div class="rate">
                                <div class="containerdiv">
                                    <div>
                                        <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', '/frontend/assets/images/stars_blank.png')?>" alt="img">
                                    </div>
                                    <div class="cornerimage" style="width:<?php echo (($value['rating']/5)*100); ?>%;">
                                        <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', '/frontend/assets/images/stars_full.png')?>" alt="">
                                    </div>
                                </div>
                            </div>
                            <h4 class="name"><?php echo $value['title']; ?></h4>
                            <div class="text"><?php echo $value['content']; ?></div>
                            <span><?php echo $value['rating']; ?>/5</span>
                        </div>
                    </div>
                </li>
                <?php endif; ?>
                <?php endforeach; ?>
            </ul>
            <div class="carousel-members">
                <div class="content-carousel-members owl-carousel">
                    <?php foreach ($co_van_tieu_bieu as $key => $value) : ?>
                    <?php if($key >= 3): ?>
                        <div class="item wow fadeInUp" data-wow-delay="0.{{$key+2}}s">
                            <div class="intro-member">
                                <div class="image">
                                    <div style="background-image: url('<?php echo \App\Lib\BHelp::getLinkCustom('img', $value['thumbnail'])?>')" class="avatar"></div>
                                    <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', '/frontend/assets/images/medal.svg')?>" class="medal" alt="">
                                </div>
                                <div class="rate">
                                    <div class="containerdiv">
                                        <div>
                                            <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', '/frontend/assets/images/stars_blank.png')?>" alt="img">
                                        </div>
                                        <div class="cornerimage" style="width:75%;">
                                            <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', '/frontend/assets/images/stars_full.png')?>" alt="">
                                        </div>
                                    </div>
                                </div>
                                <h4 class="name"><?php echo $value['title']; ?></h4>
                                <div class="text"><?php echo $value['content']; ?></div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>

    </div>
</div>
