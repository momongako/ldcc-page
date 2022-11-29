jQuery(function($) {
    var checkCaptch = false;
    var verifyCallback = function(response) {
        if (response == "") {
            checkCaptch = false;
        } else {
            checkCaptch = true;
        }
    };
    $('#submit-login').click(function() {
        $('#message-login').html('');
        
        if(grecaptcha.getResponse() == "") {
            $('#message-login').html("<p style='color: #dc3545;'>Capcha không hợp lệ</p>");
            return false;
        }
        var email = $('#email-login').val();
        var password = $('#password-login').val();
        var _tokenV = $('#_token').val();
        
        if(!email.length){
            $('#message-login').html("<p style='color: #dc3545;'>Số điện thoại không được để trống</p>");
            return false;
        }
        if(!password.length){
            $('#message-login').html("<p style='color: #dc3545;'>Mật khẩu không được để trống</p>");
            return false;
        }
        if(password.length < 6){
            console.log(password.length);
            $('#message-login').html("<p style='color: #dc3545;'>Mật khẩu không được dưới 6 ký tự</p>");
            return false;
        }
        if (email.length && password.length && _tokenV.length) {
            $.post('/preLogin', { email: email, password: password, _token: _tokenV, 'g-recaptcha-response': grecaptcha.getResponse() }, function(response) {
                if (response.is_success == 1) {
                    $('#login-form').submit();
                } else {
                    $('#message-login').html("<p style='color: #dc3545;'>Số điện thoại hoặc mật khẩu không đúng</p>");
                }
            });
        }
        return false;
    });
});