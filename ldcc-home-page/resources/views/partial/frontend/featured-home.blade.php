<?php //echo \App\Lib\BHelp::getConfigSetting('HOME_PAGE_TINH_NOI_BAT')?>

<div class="featured">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <?php foreach ($session3 as $key => $value) { ?>
                    <?php $imgThumb = $value['thumbnail']?$value['thumbnail']:'/frontend/assets/images/Feature.png'; ?>
                    <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>" class="featured-image featured-image-show-hiden featured-image-{{$key}}" alt="">
                <?php } ?>
                
            </div>
            <div class="col-md-6">
                <div class="content-text">
                    <div class="wow fadeInUp" data-wow-delay="0.2s">
                        <h3><?php echo \App\Lib\BHelp::getConfigSetting('HOME_TINH_NANG_NOI_BAT')?></h3>
                    </div>
                    <ul class="list-featured">
                        <?php foreach ($session3 as $key => $value) { ?>
                            <li data-key="{{$key}}">
                                <div class="wow fadeInUp" data-wow-delay="0.3s">
                                    <h4><?php echo $value['title']; ?></h4>
                                    <?php echo $value['content']; ?>
                                </div>
                            </li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    
    jQuery(function($){
        $('.featured-image-show-hiden').hide();
        $('.featured-image-0').show();

        $(".list-featured li").on({
            mouseenter: function () {
                var index = $(this).data('key');
                $('.featured-image-show-hiden').hide();
                $('.featured-image-'+index).show();
            },
            mouseleave: function () {
                $('.featured-image-show-hiden').hide();
                $('.featured-image-0').show();
            }
        });
    })
</script>