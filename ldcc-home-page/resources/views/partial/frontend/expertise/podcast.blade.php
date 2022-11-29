<div class="col-md-4">
    <div class="podcast">
        <div class="bg-image" style="background-image: url('<?php echo \App\Lib\BHelp::getLinkCustom('img', '/frontend/assets/images/kienthuc/background-podcast.png')?>');">
            <h3>Podcast</h3>
            <div class="tab-content">
                <div id="outcome" class="tab-pane fade in active">
                    <ul>
                        <?php foreach ($podcast as $key => $value): ?>
                            <?php //if($key <= 2): ?>
                                <iframe src="<?php echo $value; ?>" height="100px" width="auto" frameborder="0" scrolling="no"></iframe>
                            <?php //endif; ?>
                        <?php endforeach; ?>
                        
                    </ul>
                </div>
            </div>
            <div class="wrap-button">
                <a href="https://anchor.fm/pronexus" target="_blank" class="btn-border">Xem thêm <i class="fa fa-long-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div>
