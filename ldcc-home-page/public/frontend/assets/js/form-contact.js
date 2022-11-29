jQuery(function($) {
    $('#contact-frm').submit(function() {
        var name = $('#contact-name').val();
        var email = $('#contact-email').val();
        var content = $('#contact-content').val();
        var phone = $('#contact-phone').val();
        if (email.length && name.length && content.length && phone.length) {
            $.post('/send-contact', {
                    email: email,
                    name: name,
                    content: content,
                    phone: phone,
                    _token: $('#_token').val()
                },
                function(response) {
                    if (response.success == 1) {
                        $('.contact-message').html("<p style='color: #28a745;'>" + response.message + "</p>");
                    } else {
                        $('.contact-message').html("<p style='color: #dc3545;'>" + response.message + "</p>");
                    }
                    $('#contact-name').val('');
                    $('#contact-email').val('');
                    $('#contact-content').val('');
                    $('#contact-phone').val('');
                    return false;
                });
        }
        return false;
    });
});