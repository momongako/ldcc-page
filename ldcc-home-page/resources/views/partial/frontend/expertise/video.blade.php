<div class="video">
    <div class="bg-image" style="background-image: url('<?php echo \App\Lib\BHelp::getLinkCustom('img', '/frontend/assets/images/kienthuc/bg-video.png')?>');">
        <div class="container">
            <div class="top-section">
                <h3>Video</h3>
                <a href="https://www.youtube.com/channel/UCq-HH_EKc80_VZAR_c_9iGg" target="_blank" class="btn-border"> Xem tất cả <i class="fa fa-long-arrow-right"></i></a>
            </div>
            <div class="tab-content">
                <div id="outcome2" class="tab-pane fade in active">
                    <div class="row">
                        <div class="col-md-8 col-xs-12">
                            <?php foreach ($playlistItems['results'] as $key => $value): ?>
                                <?php if($key == 0): ?>
                                    <div class="bg-image" style="background-image: url('<?php echo \App\Lib\BHelp::getLinkCustom('img', '/frontend/assets/images/kienthuc/video.png')?>');">
                                        <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo $value->contentDetails->videoId; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>
                                    <p><?php echo $value->snippet->title; ?></p>
                                <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <div class="col-md-4 col-xs-12">
                            <div class="list-video">
                                <ul>
                                    <?php foreach ($playlistItems['results'] as $key => $value): ?>
                                        <?php if($key >= 1 && $key <= 4): ?>
                                            <li>
                                                <div class="bg-image" style="background-image: url('<?php echo \App\Lib\BHelp::getLinkCustom('img', '/frontend/assets/images/kienthuc/video.png')?>');">
                                                    <iframe width="100%" height="100%" src="https://www.youtube.com/embed/<?php echo $value->contentDetails->videoId; ?>" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                </div>
                                                <p><?php echo $value->snippet->title; ?></p>
                                            </li>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
