<script src='https://www.google.com/recaptcha/api.js?hl=vi'></script>
<div id="login_form" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="/login" class="form-login" id="login-form" method="post">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Đăng nhập</h4>
                </div>
                <div class="modal-body">
                    <label for="">Email hoặc số điện thoại</label>
                    <input type="email" id="email-login" name="email" placeholder="Email">
                    <label for="">Mật khẩu</label>
                    <input type="password" id="password-login" name="password" placeholder="Password">

                    <div class="g-recaptcha" data-sitekey="{{\App\Lib\BHelp::getConfigSetting('GOOGLE_RECAPTCHA_KEY',env('GOOGLE_RECAPTCHA_KEY'))}}"></div>

                    <p id="message-login" class="text-danger"></p>
                </div>
                @csrf
                <div class="modal-footer">
                    <button type="button" class="btn-linear" data-dismiss="modal">Cancel</button>
                    <button type="button" id="submit-login" class="btn-hot" >Đăng nhập</button>
                </div>
            </form>
        </div>
    </div>
</div>
