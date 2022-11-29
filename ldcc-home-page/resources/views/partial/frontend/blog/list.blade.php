<div class="list-blogs">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="banner" style="padding: 20px 0px 30px">
                    <a href="<?php echo \App\Lib\BHelp::getConfigSetting('TT_BANNER_1_LINK')?>">
                        <img src="<?php echo \App\Lib\BHelp::getConfigSetting('TT_BANNER_1')?>" alt="">
                    </a>
                </div>
                <ul class="main-list-blog">
                    <?php foreach ($posts as $post) : ?>
                    <li>
                        <a href="<?php echo \App\Lib\BHelp::getLinkCustom('category', $post)?>" class="cat">
                            <span><i class="icon-tag"></i> {{$post->category->name}}</span>
                        </a>
                        <a href="<?php echo \App\Lib\BHelp::getLinkCustom('post', $post)?>">
                            <div class="image" style="background-image: url('<?php echo \App\Lib\BHelp::getLinkCustom('img', $post->thumbnail)?>');"></div>
                        </a>
                        <div class="content">
                            <h3 class="line2"><a href="<?php echo \App\Lib\BHelp::getLinkCustom('post', $post)?>">{{$post->title}}</a></h3>
                            <span>{{date('d-m-Y',strtotime($post->publish_date))}}</span>
                            <div class="line3"><?php echo $post->sub_title?></div>
                            <a href="<?php echo \App\Lib\BHelp::getLinkCustom('post', $post)?>" class="btn">Đọc tiếp <i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </li>
                    <?php endforeach;?>
                </ul>

                <div class="pagination">
                    
                    <?php
                    // config
                    $link_limit = 7; // maximum number of links (a little bit inaccurate, but will be ok for now)
                    ?>
                    <?php $paginator = $posts; ?>

                    @if ($paginator->lastPage() > 1)
                        <ul class="pagination">
                            <li class="{{ ($paginator->currentPage() == 1) ? ' disabled' : 'page_top_end page_first' }}">
                                <a href="{{ $paginator->url(1) }}">Trang đầu</a>
                            </li>
                            @for ($i = 1; $i <= $paginator->lastPage(); $i++)
                                <?php
                                $half_total_links = floor($link_limit / 2);
                                $from = $paginator->currentPage() - $half_total_links;
                                $to = $paginator->currentPage() + $half_total_links;
                                if ($paginator->currentPage() < $half_total_links) {
                                $to += $half_total_links - $paginator->currentPage();
                                }
                                if ($paginator->lastPage() - $paginator->currentPage() < $half_total_links) {
                                    $from -= $half_total_links - ($paginator->lastPage() - $paginator->currentPage()) - 1;
                                }
                                ?>
                                @if ($from < $i && $i < $to)
                                    <li class="{{ ($paginator->currentPage() == $i) ? ' active' : '' }}">
                                        <a href="{{ $paginator->url($i) }}">{{ $i }}</a>
                                    </li>
                                @endif
                            @endfor
                            <li class="{{ ($paginator->currentPage() == $paginator->lastPage()) ? ' disabled' : 'page_top_end page_last' }}">
                                <a href="{{ $paginator->url($paginator->lastPage()) }}">Trang cuối</a>
                            </li>
                        </ul>
                    @endif
                </div>
            </div>
            @include('partial.frontend.blog.new-post')
        </div>
    </div>
</div>
