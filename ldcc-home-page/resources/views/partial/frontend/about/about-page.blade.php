<div class="about">
    <div class="container">
        <div class="row">
            <?php foreach ($chungtoilamgi as $key => $value) :?>            
                <div class="col-md-7">
                    <?php $imgThumb = $value['thumbnail']?$value['thumbnail']:'/frontend/assets/images/what-you-do.png'; ?>
                    <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', $imgThumb)?>" class="img-responsive" alt="">
                </div>
                <div class="col-md-5">
                    <div class="content">
                        <div class="wow fadeInUp" data-wow-delay="0.4s">
                            <h3><?php echo $value['title']; ?></h3>
                        </div>

                        <div class="qoute wow fadeInUp" data-wow-delay="0.7s">
                            <?php echo $value['sub_title']; ?>
                        </div>
                        <div class="mota wow fadeInUp" data-wow-delay="0.9s">
                            <?php echo $value['content']; ?>
                        </div>
                    </div>
                </div>   
            <?php endforeach;?>
        </div>
    </div>
</div>
