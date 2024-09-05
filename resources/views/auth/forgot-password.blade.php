<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password - BKonsul</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div class="login-container">
        <div class="title">Forgot Password</div>
        <form action="{{ route('password.email') }}" method="POST">
            @csrf
            <div class="input-group">
                <label for="email"><i class="fas fa-envelope"></i> Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <button type="submit" class="login-btn">Send Password Reset Link</button>
        </form>
        <a href="{{ route('login') }}" class="forgot-password">Back to Login</a>
    </div>
</body>
</html>
