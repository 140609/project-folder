<!-- resources/views/register.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">
</head>
<body>
    <div class="container">
        <form id="registrationForm" method="POST" action="{{ route('register.submit') }}">
            @csrf
            <h2>Registration</h2>
            <div class="form-group">
                <input type="text" name="first_name" id="first_name" placeholder="First Name" required>
            </div>
            <div class="form-group">
                <input type="text" name="last_name" id="last_name" placeholder="Last Name" required>
            </div>
            <div class="form-group">
                <input type="email" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Re-enter Password" required>
            </div>
            <div class="form-group">
                <button type="submit">Register</button>
            </div>
            <div id="error" class="error-message"></div>
        </form>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/registration_validation.js') }}"></script>
</body>
</html>
