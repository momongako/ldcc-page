@extends('layouts.frontend')

@section('content')
<link rel="stylesheet" href="/frontend/bootstrap/css/bootstrap.min.css">
    <div class="main-content">
        <div class="blog-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-2">
                        <ul class="header_gnav">
                            @if (session()->has('advisor') || session()->has('customer'))
                                @if (session()->has('advisor'))
                                    <li><a href="/mypage">Mypage</a></li>
                                    <li><a href="/ad/danh-sach-bai-viet">Quản lý bài viết</a></li>
                                @endif
                                <li><a href="/logout">Logout</a></li>
                                
                            @else
                                <li><a href="/login">Login</a></li>
                                <li><a href="/register">Register</a></li>
                            @endif
                        </ul>
                    </div>
                    <div class="col-md-10">
                        <a class="btn btn-primary" href="/ad/tao-bai-viet">Tạo bài viết</a>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Tiêu đề</th>
                                        <th scope="col">Trạng thái</th>
                                        <th scope="col">Ngày tạo</th>
                                        <th scope="col">Sửa</th>
                                    </tr>
                                </thead>
                                <tbody>
<!--                                --><?php //dd($posts)?>
                                    <?php foreach ($posts as $key=>$post) :?>
                                        <tr>
                                            <th scope="row">{{($posts->currentPage()-1)*$posts->perPage() + $key+1}}</th>
                                            <td><a href="/ad/bai-viet/{{$post->slug}}">{{$post->title}}</a></td>
                                            <td>{{$post->status?'Xuất bản':'Đang chờ duyệt'}}</td>
                                            <td>{{date('d-m-Y',strtotime($post->created_at))}}</td>
                                            <td><a href="/ad/bai-viet/{{$post->slug}}">Sửa</a></td>
                                        </tr>
                                    <?php endforeach;?>
                                </tbody>
                            </table>
                        </div>
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
                </div>
            </div>
        </div>
    </div>
@endsection
