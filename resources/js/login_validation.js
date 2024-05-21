// public/js/login_validation.js

$(document).ready(function() {
    $('#loginForm').submit(function(event) {
        event.preventDefault();

        var email = $('#email').val();
        var password = $('#password').val();

        // Client-side validation
        if (email.trim() === '' || password.trim() === '') {
            $('#error').html('Please fill in all fields.');
            return;
        }

        // AJAX request to Laravel route
        $.ajax({
            type: 'POST',
            url: $(this).attr('action'),
            data: $(this).serialize(),
            success: function(response) {
                if (response.success) {
                    window.location.href = '{{ route("dashboard") }}';
                } else {
                    $('#error').html(response.message);
                }
            },
            error: function(xhr, textStatus, errorThrown) {
                console.log(xhr.responseText);
            }
        });
    });
});
