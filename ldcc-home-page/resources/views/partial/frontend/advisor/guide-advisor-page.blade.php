<div class="guide signature" >
    <div class="bg-image">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="heading"><?php echo \App\Lib\BHelp::getConfigSetting('ADVISOR_TINHNANG_NOIBAT')?></h3>
                    <ul class="steps">
                        <?php foreach ($tinh_nang_noi_bat as $key => $value) :?>
                            <li class="go-to-step1 active" data-item="{{$key+1}}">
                                <span class="hex-icon">
                                    <span class="hex"></span>
                                    <span class="icon">
                                        <?php if($key == 0): ?>
                                            <i class="icon-connections"></i>
                                        <?php elseif($key == 1):?>
                                            <i class="icon-calendar-1"></i>
                                        <?php elseif($key == 2): ?>
                                            <i class="icon-technology"></i>
                                        <?php elseif($key == 3): ?>
                                            <i class="icon-calendar"></i>
                                        <?php endif; ?>
                                    </span>
                                </span>
                                <span class="text"><?php echo $value['title']; ?></span>
                            </li>
                        <?php endforeach; ?>  
                    </ul>
                    <div class="advisor_description">
                        <?php foreach ($tinh_nang_noi_bat as $key => $value) :?>
                            <div class="item text_customer_advisor content-text{{$key+1}}">
                                <div class="content-text">
                                    <?php echo $value['sub_title']; ?>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <div class="col-md-6">
                    <?php foreach ($tinh_nang_noi_bat as $key => $value) :?>
                        <?php $imgThumb = $value['thumbnail']?$value['thumbnail']:'/frontend/assets/images/advisor3d.svg'; ?>
                        <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>" class="img-responsive img_show_style img_show_{{$key+1}}" alt="">
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    jQuery(function($){
        $('.text_customer_advisor').hide();
        $('.content-text1').show();
        $('.img_show_style').hide();
        $('.img_show_1').show();

        $('.go-to-step1').on('click', function(){
            var index = $(this).data('item');
            $(this).addClass('active');
            $(this).siblings('li').removeClass('active');

            var classtext = '.content-text'+index;
            $('.text_customer_advisor').hide();
            $(classtext).show();

            var classimg = '.img_show_'+index;
            $('.img_show_style').hide();
            $(classimg).show();
        });
    })
</script>