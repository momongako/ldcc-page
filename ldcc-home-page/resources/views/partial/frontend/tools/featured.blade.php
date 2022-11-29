<div class="featured reverse">
    <div class="container">
        <h3>Tính năng nổi bật</h3>
        <div class="row">
            <div class="col-md-6">
                <div class="content-text">
                    <ul class="list-featured" style="background-image:none !important">
                        <?php foreach ($tinh_nang_noi_bat as $key => $value) :?>
                            <li class="wow fadeInUp" data-wow-delay="0.{{$key+2}}s" data-key="{{$key}}">
                                <div>
                                    <h4><?php echo $value['title']; ?></h4>
                                    <?php echo $value['sub_title']; ?>
                                </div>
                            </li>
                        <?php endforeach;?>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <?php foreach ($tinh_nang_noi_bat as $key => $value) { ?>
                    <?php $imgThumb = $value['thumbnail']?$value['thumbnail']:'/frontend/assets/images/tinh-nang-noi-bat.svg'; ?>
                    <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>" class="img-responsive featured-image-show-hiden featured-image-{{$key}}" alt="">
                <?php } ?>
            </div>
        </div>
        <div class="divider"></div>
    </div>
</div>






<script>
    
    jQuery(function($){
        $('.featured-image-show-hiden').hide();
        $('.featured-image-0').show();

        $(".featured.reverse .list-featured li").on({
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