// public/js/registration_validation.js

$(document).ready(function() {
    $('#registrationForm').submit(function(event) {
        event.preventDefault();

        var first_name = $('#first_name').val();
        var last_name = $('#last_name').val();
        var email = $('#email').val();
        var password = $('#password').val();
        var password_confirmation = $('#password_confirmation').val();

        // Client-side validation
        if (first_name.trim() === '' || last_name.trim() === '' || email.trim() === '' || password.trim() === '' || password_confirmation.trim() === '') {
            $('#error').html('Please fill in all fields.');
            return;
        }

        if (password !== password_confirmation) {
            $('#error').html('Passwords do not match.');
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
