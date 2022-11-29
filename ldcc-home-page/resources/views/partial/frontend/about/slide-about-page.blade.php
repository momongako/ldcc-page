<div class="slide about-page">
    <?php foreach ($bannerTop as $key => $value) :?>
        <div class="image">
            <?php $imgThumb = $value['thumbnail']?$value['thumbnail']:'/frontend/assets/images/slide-about.png'; ?>
            <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>" class="img-responsive" alt="">
            <div class="content-slide">
                <div class="container">
                    <div class="content">
                        <div class="wow fadeInUp" data-wow-delay="0.5s">
                            <h2><?php echo $value['title']; ?></h2>
                        </div>
                        <div class="mota_1 wow fadeInUp" data-wow-delay="0.9s">
                            <?php echo $value['sub_title']; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
    <?php endforeach;?>
</div>
