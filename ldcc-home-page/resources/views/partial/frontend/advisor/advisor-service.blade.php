<div class="advisor-service" >
    <div class="container">
        <h3 class="primary-color"><?php echo \App\Lib\BHelp::getConfigSetting('ADVISOR_DICHVU_TUVAN')?></h3>
        <di class="row">
            <div class="owl-services owl-carousel">
                <?php foreach ($dich_vu_tu_van as $key => $value):?>
                    <div class="item">
                        <?php $imgThumb = $value['thumbnail']?$value['thumbnail']:'/frontend/assets/images/Group.svg'; ?>
                        <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>" class="img-responsive" alt="">
                    </div>
                <?php endforeach;?>
            </div>
        </di>
    </div>
    <div class="list-featured">
        <div class="container">
            <ul class="list-fancy">
                <?php foreach ($dich_vu_tu_van as $key => $value):?>
                <li class="go-to-step-advisor wow fadeInUp" data-wow-delay="0.{{$key+2}}s" data-item="{{$key+1}}">
                    <div class="fancy-item">
                        <img src="frontend/assets/images/ad{{$key+1}}.png" alt="">
                        <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', '/frontend/assets/images/icon-fancy.png')?>" class="icon-bg" alt="">
                        <h4>{{$key+1}}. {{$value->title}}</h4>
                        <div><?php echo $value->content?></div>
                    </div>
                </li>
                <?php endforeach;?>
            </ul>

            

            <a href="<?php echo \App\Lib\BHelp::getConfigSetting('ADVISOR_DICHVU_TUVAN_BUTTON_LINK')?>" class="btn-hot"><?php echo \App\Lib\BHelp::getConfigSetting('ADVISOR_DICHVU_TUVAN_BUTTON_TEXT')?></a>
        </div>
    </div>
</div>
<script>
    jQuery(function($) {
        // var owlText = $('.owl-text').owlCarousel({
        //     loop: false,
        //     margin: 30,
        //     nav: false,
        //     dots: false,
        //     items: 1
        // });
        // $('.go-to-step-advisor').on('click', function() {
        //     var index = $(this).data('item');
        //     $(this).addClass('active');
        //     $(this).siblings('li').removeClass('active');
        //     owlText.trigger('to.owl.carousel', [index - 1, 500]);
        // });
        // var owlText = $('.owl-services').owlCarousel({
        //     loop: false,
        //     margin: 30,
        //     nav: true,
        //     dots: false,
        //     items: 1,
        //     navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>']
        // });
        
    });
</script>