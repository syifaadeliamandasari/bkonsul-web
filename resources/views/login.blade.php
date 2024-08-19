<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - BKonsul</title>
    <!-- Include Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
    <link href="{{('css/app.css') }}" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            width: 400px;
            padding: 40px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            text-align: center;
        }
        .login-container .title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 30px;
            color: #D02F25;
        }
        .login-container .input-group {
            margin-bottom: 20px;
            text-align: left;
        }
        .login-container .input-group label {
            display: block;
            font-size: 14px;
            color: #666;
            margin-bottom: 8px;
        }
        .login-container .input-group input {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            box-sizing: border-box;
        }
        .login-container .input-group input:focus {
            border-color: #D02F25;
            outline: none;
        }
        .login-container .login-btn {
            width: 100%;
            padding: 12px;
            background-color: #D02F25;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .login-container .login-btn:hover {
            background-color: #bf251f;
        }
        .login-container .forgot-password {
            margin-top: 15px;
            display: block;
            font-size: 14px;
            color: #666;
            text-decoration: none;
        }
        .login-container .forgot-password:hover {
            color: #D02F25;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="title">Login to BKonsul</div>
        <form action="{{ route('login') }}" method="POST">
            @csrf
            <div class="input-group">
                <label for="email"><i class="fas fa-envelope"></i> Email</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password"><i class="fas fa-lock"></i> Password</label>
                <input type="password" id="password" name="password" required>
            </div>
            <button type="submit" class="login-btn">Login</button>
        </form>
        <a href="#" class="forgot-password">Forgot your password?</a>
    </div>
</body>
</html>
