<!-- resources/views/login.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div class="container">
        <form id="loginForm" method="POST" action="{{ route('login.submit') }}">
            @csrf
            <h2>Login</h2>
            <div class="form-group">
                <input type="email" name="email" id="email" placeholder="Email" required>
            </div>
            <div class="form-group">
                <input type="password" name="password" id="password" placeholder="Password" required>
            </div>
            <div class="form-group">
                <button type="submit">Login</button>
            </div>
            <div id="error" class="error-message"></div>
        </form>
    </div>

    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/login_validation.js') }}"></script>
</body>
</html>

