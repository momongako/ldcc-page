<div class="guide signature">
    <div class="bg-image" style="background-image: none">
        <div class="container">
            <?php foreach ($tamnhin_sumenh as $key => $value) :?>
                <div class="row">
                    <div class="col-md-6">
                        <div class="wow fadeInUp" data-wow-delay="0.2s">
                            <h3 class="heading"><?php echo $value['title']; ?></h3>
                        </div>
                        <div class="content-tamnhin wow fadeInUp" data-wow-delay="0.5s">
                            <?php echo $value['sub_title']; ?>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <?php $imgThumb = $value['thumbnail']?$value['thumbnail']:'/frontend/assets/images/person-1.png'; ?>
                        <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>" class="img-responsive" alt="">
                    </div>
                </div>
            <?php endforeach;?>            
        </div>
    </div>
</div>
