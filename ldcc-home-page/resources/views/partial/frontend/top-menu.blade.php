<div class="top-menu">
    <div class="row">
        <div class="col-lg-6 col-lg-offset-6 top-text">
            <ul class="top-menu">
                <li><a href="/about"><span>Về ProNexus</span></a></li>
                <li><a href="#" data-toggle="modal" data-target="#search_form"><span>Tìm kiếm</span> <i class="fa fa-search"></i> </a></li>
                <li>
                    <a href="<?php echo \App\Lib\BHelp::getConfigSetting('TOP_MENU_TAI_APP_LINK')?>">
                        <span><?php echo \App\Lib\BHelp::getConfigSetting('TOP_MENU_TAI_APP_TEXT')?></span>
                        <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', '/frontend/assets/images/download.svg')?>">
                    </a>
                </li>
            </ul>
            <ul class="change-language">
                <li><img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', '/frontend/assets/images/global.svg')?>" alt=""></li>
                <li class="language vi active">Tiếng Việt</li>
                <li class="language en">English</li>
            </ul>
        </div>
    </div>
</div>
