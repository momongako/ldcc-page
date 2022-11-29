jQuery(function($) {
    $('#register-email-newsletter-from').submit(function() {
        $('#register-email-message').text('');
        var email = $('#email-newsletter').val();
        if (email.length) {
            $.post('/dang-ky-email', { email: email, _token: $('#_token').val() }, function(response) {
                if (response.success == 1) {
                    $('#register-email-message').html("<p style='color: #28a745;'>" + response.message + "</p>");
                } else {
                    $('#register-email-message').html("<p style='color: #dc3545;'>" + response.message + "</p>");
                }

            });
        }
        return false;
    });
});