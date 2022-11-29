<?php //echo \App\Lib\BHelp::getConfigSetting('HOME_PAGE_CACH_SU_DUNG')?>

<div class="guide">
    <div class="bg-image">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="heading"><?php echo \App\Lib\BHelp::getConfigSetting('HOME_CACH_SU_DUNG')?></h3>
                    <ul class="actions">
                        <li class="btn-border-hover active" data-target="customer" data-show='tab-item-customer' data-hidden="tab-item-advisor">
                        <?php echo \App\Lib\BHelp::getConfigSetting('HOME_CACH_SU_DUNG_KHACH_HANG')?>
                        </li>
                        <li class="btn-border-hover" data-target="advisor" data-show='tab-item-advisor' data-hidden="tab-item-customer">
                        <?php echo \App\Lib\BHelp::getConfigSetting('HOME_CACH_SU_DUNG_CO_VAN')?>
                        </li>  
                    </ul>

                    <div class="tab-item active" id="customer">
                        <div class="wow fadeInUp" data-wow-delay="0.3s">
                            <ul class="steps">
                                <?php foreach ($cach_su_dung_pronexus as $key => $value) :?>
                                    <?php if($key < 4): ?>
                                        <?php if($key == 0): ?>
                                            <li class="go-to-step1 active" data-item="{{$key+1}}">
                                        <?php else: ?>
                                            <li class="go-to-step1" data-item="{{$key+1}}">
                                        <?php endif; ?>
                                            <span class="hex-icon">
                                                <span class="hex"></span>
                                                <span class="number">
                                                    <i class="text">{{$key+1}}</i>
                                                    <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', '/frontend/assets/images/check.svg')?>" alt="">
                                                </span>
                                            </span>
                                            <span><?php echo $value['title']; ?></span>
                                        </li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                        <div class="text_customer wow fadeInUp" data-wow-delay="0.5s">
                            <?php foreach ($cach_su_dung_pronexus as $key => $value) :?>
                                <?php if($key < 4): ?>
                                    <div class="content-text text_customer_advisor content-text{{$key+1}}"><?php echo $value['sub_title']; ?></div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                    </div>

                    <div class="tab-item" id="advisor">
                        <ul class="steps">
                            <?php foreach ($cach_su_dung_pronexus as $key => $value) :?>
                                <?php if($key >= 4 && $key < 8): ?>
                                    <li class="go-to-step2 active" data-item="{{$key-3}}">
                                        <span class="hex-icon">
                                            <span class="hex"></span>
                                            <span class="number">
                                                <i class="text">{{$key-3}}</i>
                                                <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', '/frontend/assets/images/check.svg')?>" alt="">
                                            </span>
                                        </span>
                                        <span><?php echo $value['title']; ?></span>
                                    </li>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </ul>
                        <div class="text_advisor">
                            <?php foreach ($cach_su_dung_pronexus as $key => $value) :?>
                                <?php if($key >= 4 && $key < 8): ?>
                                    <div class="content-text text_customer_advisor content-text2{{$key-3}}"><?php echo $value['sub_title']; ?></div>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        
                    </div>
                </div>
                <div class="col-md-5 col-md-offset-1">
                    <div class="content-carousel">
                        <div class="tab-item-customer" id="">
                            <div class="carousel-slide1 owl-carousel">
                                <?php foreach ($cach_su_dung_pronexus as $key => $value) :?>
                                    <?php if($key < 4): ?>
                                        <?php $imgThumb = $value['thumbnail']?$value['thumbnail']:'/frontend/assets/images/mobile.svg'; ?>
                                        <div class="items">
                                            <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>" alt="">
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>

                        <div class="tab-item-advisor" id="">
                            <div class="carousel-slide2 owl-carousel">
                                <?php foreach ($cach_su_dung_pronexus as $key => $value) :?>
                                    <?php if($key >= 4 && $key < 8): ?>
                                        <?php $imgThumb = $value['thumbnail']?$value['thumbnail']:'/frontend/assets/images/default.jpg'; ?>
                                        <div class="items">
                                            <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>" alt="">
                                        </div>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    jQuery(function($){
        $('.tab-item-customer').show();
        $('.tab-item-advisor').hide();

        $('.text_customer_advisor').hide();
        $('.content-text1').show();

        $('ul.actions li').click(function(){
            $(this).tab('show');
            // console.log(this);
            var show = $(this).data('show');
            var hidden = $(this).data('hidden');
            $('.'+show).show();
            $('.'+hidden).hide();
            if(show == 'tab-item-customer'){
                $('.text_customer_advisor').hide();
                $('.content-text1').show();
            }
            if(show == 'tab-item-advisor'){
                $('.text_customer_advisor').hide();
                $('.content-text21').show();
            }

        })
        var owl1 = $('.carousel-slide1').owlCarousel({
            loop:true,
            margin:0,
            nav:true,
            dots:true,
            items: 1,
            autoWidth:true,
            loop:false,
            navText:['<i class="fa fa-long-arrow-left"></i>','<i class="fa fa-long-arrow-right"></i>']
        });

        $('.go-to-step1').on('click', function(){
            var index = $(this).data('item');
            $(this).addClass('active');
            $(this).siblings('li').removeClass('active');
            owl1.trigger('to.owl.carousel', [index - 1, 500]);

            var classtext = '.content-text'+index;
            $('.text_customer_advisor').hide();
            $(classtext).show();
        });

        owl1.on('changed.owl.carousel', function(event){
            var index = event.item.index + 1; 
            $('[data-item="'+index+'"]').addClass('active');
            $('[data-item="'+index+'"]').siblings('li').removeClass('active');
        });


        var owl2 = $('.carousel-slide2').owlCarousel({
            loop:true,
            margin:0,
            nav:true,
            dots:true,
            items: 1,
            autoWidth:true,
            loop:false,
            navText:['<i class="fa fa-long-arrow-left"></i>','<i class="fa fa-long-arrow-right"></i>']
        });
        $('.go-to-step2').on('click', function(){
            var index = $(this).data('item');
            $(this).addClass('active');
            $(this).siblings('li').removeClass('active');
            owl2.trigger('to.owl.carousel', [index - 1, 500]);

            var classtext = '.content-text2'+index;
            $('.text_customer_advisor').hide();
            $(classtext).show();
        });
        owl2.on('changed.owl.carousel', function(event){
            var index = event.item.index + 1; 
            $('[data-item="'+index+'"]').addClass('active');
            $('[data-item="'+index+'"]').siblings('li').removeClass('active');
        });
    })
</script>