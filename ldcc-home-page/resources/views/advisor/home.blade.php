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
                        Mypage
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
