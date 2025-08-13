<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/login.css') }}">
    <title>Login - Portfolio Admin</title>
</head>
<body>
    <form action="{{ route('login')}}" method="POST">
        <h2 style="text-align:center; margin-bottom:20px;">Login</h2>
        @csrf
        <input type="email" placeholder="Enter Email" name="email"><br>
        <input type="password" name="password" placeholder="Enter Password"><br>
        <button>Login</button>
        <p style="text-align:center; margin-top:15px;">
            Don't have an account?
            <a href="{{ route('register') }}">Create one</a>
        </p>
    </form>
</body>
</html>
