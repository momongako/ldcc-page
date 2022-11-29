@extends('layouts.frontend')

@section('content')
    <div class="main-content">
        @include('partial.frontend.about.slide-about-page')
        @include('partial.frontend.about.about-page')
        @include('partial.frontend.about.target-page')
        @include('partial.frontend.about.mission-page')

        {{-- Gặp gỡ chuyên gia của chúng tôi(Xem lai style) --}}
        @include('partial.frontend.leaders-home')
        {{-- Gặp gỡ chuyên gia của chúng tôi --}}


        @include('partial.frontend.about.partner')

        {{-- form Liên hệ --}}

        <div class="contact-form" id="about-contact-form">
            <div class="bg-image" style="background-image: url(<?php echo \App\Lib\BHelp::getConfigSetting('ABOUT_BG_LIENHE')?>);">
                <div class="container">
                    <h3><?php echo \App\Lib\BHelp::getConfigSetting('ABOUT_TITLE_LIENHE')?></h3>
                    <div class="row">
                        <div class="col-md-5">
                            <div class="content_left_contact">
                                <div class="">
                                    <?php echo \App\Lib\BHelp::getConfigSetting('ABOUT_MOTA_LIENHE')?>
                                </div>
                                <ul>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube-play"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-contact">
                                <form id="contact-frm" method="POST">
                                    <input type="text" id="contact-name" name="username" class="form-control" placeholder="Tên bạn">
                                    <input type="email" id="contact-email" name="email" class="form-control" placeholder="Email">
                                    <input type="text" id="contact-phone" name="phone" class="form-control" placeholder="Số điện thoại">
                                    <textarea name="message" id="contact-content" class="form-control" cols="30" rows="10" placeholder="Nội dung"></textarea>
                                    @csrf
                                    <div class="alert alert-danger contact-message"></div>
                                    <button class="btn-hot">Gửi <i class="fa fa-long-arrow-right"></i></button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- form Liên hệ --}}

        @include('partial.frontend.about.banner-about')
        <script src="/frontend/assets/js/form-contact.js"></script>
    </div>
@endsection
