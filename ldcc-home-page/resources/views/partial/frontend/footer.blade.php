<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-4 col-xs-12 mobile-center">
                <img class="logo" src="<?php echo \App\Lib\BHelp::getConfigSetting('WEB_LOGO')?>" alt="">
            </div>

            <?php echo \App\Lib\BHelp::getConfigSetting('FOOTER_FOLLOW_US')?>

            <div class="col-sm-4 col-xs-12 mobile-center">
                <h3>Đăng ký để nhận các cập nhật</h3>
                <form action="javascript:void (0)" method="post" id="register-email-newsletter-from" class="sign-up-form">
                    <input type="email" id="email-newsletter" name="email-newsletter" placeholder="Nhập email của bạn">
                    <input type="hidden" id="_token" value="{{ csrf_token() }}">
                    <button type="submit"><i class="fa fa-long-arrow-right"></i></button>
                </form>
                <div id="register-email-message"></div>
            </div>
        </div>
        <div class="row footer-menu">
            <?php echo \App\Lib\BHelp::getConfigSetting('FOOTER_COMPANY')?>

            <?php echo \App\Lib\BHelp::getConfigSetting('FOOTER_HELP')?>

            <?php echo \App\Lib\BHelp::getConfigSetting('FOOTER_LEGAL')?>

            <?php echo \App\Lib\BHelp::getConfigSetting('FOOTER_PRODUCT')?>

            <?php echo \App\Lib\BHelp::getConfigSetting('FOOTER_APP_LINK')?>

            {{-- <div class="col-sm-2 col-xs-6">
                <h3>Company</h3>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Media Center</a></li>
                    <li><a href="#">Careers</a></li>
                    <li><a href="#">Institutional Offerings</a></li>
                </ul>
            </div>    
            <div class="col-sm-2 col-xs-6">
                <h3>Help</h3>
                <ul>
                    <li><a href="#">Help Center</a></li>
                    <li><a href="#">Apply to List</a></li>
                    <li><a href="#">Contacts</a></li>
                </ul>
            </div>
            <div class="col-sm-3 col-xs-6">
                <h3>Legal</h3>
                <ul>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="#">Institution License</a></li>
                    <li><a href="#">Affiliate Terms</a></li>
                </ul>
            </div>
            <div class="col-sm-2 col-xs-6">
                <h3>Products</h3>
                <ul>
                    <li><a href="#">App</a></li>
                    <li><a href="#">Advisor</a></li>
                    <li><a href="#">Customer</a></li>
                </ul>
            </div>
            <div class="col-sm-3 col-xs-12 mobile-center">
                <h3>Mobile App</h3>
                <ul class="download-app">
                    <li><a href="#"><img src="/frontend/assets/images/appstore.svg" alt=""></a></li>
                    <li><a href="#"><img src="/frontend/assets/images/chplay.svg" alt=""></a></li>
                </ul>
            </div> --}}
        </div>
        <div class="row footer-text">
            <div class="col-sm-12 full-width mobile-center">
                <p>Copyright © 2020 ProNexus. All rights reserved.</p>
            </div>
        </div>
    </div>
</footer>

