<div class="tab-carousel">
    <div class="container">
        <ul class="nav nav-tabs tab-carousel-nav">
            <li class="active">
                <a data-toggle="tab" href="#outcome1">
                    <span class="hex-icon">
                        <span class="hex"></span>
                        <span class="icon">
                            <i class="icon-donate"></i>
                            <label for="">Chi tiêu</label>
                        </span>
                    </span>
                </a>
            </li>
            <li>
                <a data-toggle="tab" href="#plan1">
                    <span class="hex-icon">
                        <span class="hex"></span>
                        <span class="icon">
                            <i class="icon-planning"></i>
                            <label for="">Kế hoạch</label>
                        </span>
                    </span>
                </a>
            </li>
            <li>
                <a data-toggle="tab" href="#invets1">
                    <span class="hex-icon">
                        <span class="hex"></span>
                        <span class="icon">
                            <i class="icon-save-money"></i>
                            <label for="">Đầu tư</label>
                        </span>
                    </span>
                </a>
            </li>
            <li>
                <a data-toggle="tab" href="#you-know1">
                    <span class="hex-icon">
                        <span class="hex"></span>
                        <span class="icon">
                            <i class="icon-i-know"></i>
                            <label for="">Bạn cần biết</label>
                        </span>
                    </span>
                </a>
            </li>
            <li>
                <a data-toggle="tab" href="#labrary1">
                    <span class="hex-icon">
                        <span class="hex"></span>
                        <span class="icon">
                            <i class="icon-book"></i>
                            <label for="">Thư viện</label>
                        </span>
                    </span>
                </a>
            </li>
        </ul>
        <div class="tab-content">
            <div id="outcome1" class="tab-pane fade in active">
                <div class="carousel-know owl-carousel">
                    <?php foreach ($spendingPosts as $post) :?>
                    @include('partial.frontend.expertise.owl-carousel-item',['item'=>$post])
                    <?php endforeach;?>
                </div>
            </div>
            <div id="plan1" class="tab-pane fade">
                <div class="carousel-know owl-carousel">
                    <?php foreach ($planPosts as $post) :?>
                        @include('partial.frontend.expertise.owl-carousel-item',['item'=>$post])
                    <?php endforeach;?>
                </div>
            </div>
            <div id="invets1" class="tab-pane fade">
                <div class="carousel-know owl-carousel">
                    <?php foreach ($investPosts as $post) :?>
                        @include('partial.frontend.expertise.owl-carousel-item',['item'=>$post])
                    <?php endforeach;?>
                </div>
            </div>
            <div id="you-know1" class="tab-pane fade">
                <div class="carousel-know owl-carousel">
                    <?php foreach ($youNeedPosts as $post) :?>
                    @include('partial.frontend.expertise.owl-carousel-item',['item'=>$post])
                    <?php endforeach;?>
                </div>
            </div>
            <div id="labrary1" class="tab-pane fade">
                <div class="carousel-know owl-carousel">
                    <?php foreach ($libraryPots as $post) :?>
                    @include('partial.frontend.expertise.owl-carousel-item',['item'=>$post])
                    <?php endforeach;?>
                </div>
            </div>            
        </div>
    </div>
</div>
