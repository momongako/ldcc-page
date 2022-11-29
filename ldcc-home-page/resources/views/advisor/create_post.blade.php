@extends('layouts.frontend')

@section('content')
    <link rel="stylesheet" href="/frontend/bootstrap/css/bootstrap.min.css">
    <script src="/ckeditor/ckeditor.js"></script>
    <div class="main-content">
        <div class="blog-header">
            <div class="container">
                <div class="row justify-content-center">
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
                        <h1>{{ __('Tạo bài viết') }}</h1>
                        <div class="card">
                            @if(session()->has('message'))
                                <p class="alert {{ session()->get('alert-class', 'alert-info') }}">{{ session()->get('message') }}</p>
                            @endif
                            
                            <div class="card-body">
                                <form method="POST" action="/ad/bai-viet" enctype="multipart/form-data">
                                    @csrf
                                    <div class="row">
                                        <div class="form-group">
                                            <label>{{ __('Tiêu đề') }}</label>
                                            <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ old('title') }}" required autocomplete="title" autofocus>
                                            @if ($errors->has('title'))
                                                <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $errors->first('title') }}</strong>
                                                        </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="thumbnail">{{ __('Ảnh Thumbnail') }}</label>
                                            <input type="file" onchange="onFileChange(event)" name="thumbnail" class="form-control-file" id="thumbnail" >
                                        </div>
                                        <div>
                                            <img id = "imagePreview" width="100" height="100"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="sub_title">{{ __('Sort description') }}</label>
                                            <textarea id="sub_title" class="form-control @error('sub_title') is-invalid @enderror" name="sub_title" value="{{ old('sub_title') }}" required autocomplete="sub_title" autofocus>
                                            </textarea>
                                            @if ($errors->has('sub_title'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('sub_title') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="content">{{ __('Nội dung') }}</label>
                                            <textarea id="content" class="form-control @error('content') is-invalid @enderror" name="content" value="{{ old('content') }}" required autocomplete="content" autofocus>
                                            </textarea>
                                            @if ($errors->has('content'))
                                                <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('content') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">
                                                {{ __('Lưu') }}
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        CKEDITOR.replace('sub_title',{
            customConfig: '/ckeditor/basic-config.js'
        });
        CKEDITOR.replace('content');

        var onFileChange = function(event) {
            var output = document.getElementById('imagePreview');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };

    </script>
@endsection
