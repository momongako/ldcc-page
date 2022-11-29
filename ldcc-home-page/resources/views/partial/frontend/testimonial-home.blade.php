<?php //echo \App\Lib\BHelp::getConfigSetting('HOME_PAGE_TESTIMONIAL')?>

<div class="testimonial">
    <div class="bg-image" style="background-image: url(<?php echo \App\Lib\BHelp::getConfigSetting('HOME_BG_Testimonials')?>);">
        <div class="container">
            <h3><?php echo \App\Lib\BHelp::getConfigSetting('HOME_TIEU_DE_Testimonials')?></h3>
            <div class="carousel-testimonial owl-carousel">
                <?php foreach ($testimonials as $key => $value) { ?>
                    <?php $imgThumb = $value['thumbnail']?$value['thumbnail']:'/frontend/assets/images/testi.png'; ?>
                    <div class="item">
                        <div class="image">
                            <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>" alt="">
                        </div>
                        <div class="content">
                            <i class="fa fa-quote-right"></i>
                            <?php echo $value['content']; ?>
                            <h4>{{$value['title']}}</h4>
                            <div class="testimonial_sub_title"><?php echo $value['sub_title']; ?></div>
                        </div>
                    </div>
                <?php } ?>
                
            </div>
            <div class="nav-owl">
                <ul class="change-test">
                    <?php foreach ($testimonials as $key => $value) { ?>
                        <?php $imgThumb = $value['thumbnail']?$value['thumbnail']:'/frontend/assets/images/testi.png'; ?>
                        <li data-item="{{$key+1}}"><img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>" class="img-responsive" alt=""></li>
                    <?php } ?>
                    {{-- <li data-item="1" class="active"><img src="assets/images/nav0.png" class="img-responsive" alt=""></li> --}}
                </ul>
            </div>
        </div>
    </div>
</div>
<style>
    .testimonial .carousel-testimonial .item .content .testimonial_sub_title p{
        padding: 0px;
        margin: 0px;
        border: 0px;
    }
</style>