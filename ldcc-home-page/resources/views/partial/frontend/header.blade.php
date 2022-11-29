<header>
    <div class="header-top">
        <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', '/frontend/assets/images/header.svg')?>" class="top-layer" alt="">
        <img src="<?php echo \App\Lib\BHelp::getLinkCustom('img', '/frontend/assets/images/header1.svg')?>" class="after-layer" alt="">
    </div>
    <div class="header-main">
        <div class="container">
            @include('partial.frontend.top-menu')
            @include('partial.frontend.main-menu')
        </div>
    </div>
</header>
