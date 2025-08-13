<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/register.css') }}">
    <title>Register - Portfolio Admin</title>
</head>
<body>
    <form action="{{ route('register')}}" method="POST">
        <h2 style="text-align:center; margin-bottom:20px;">Register</h2>
        @csrf
        <input type="text" placeholder="Enter name" name="name">
        <input type="email" placeholder="Enter Email" name="email"><br>
        <input type="password" name="password" placeholder="Enter Password"><br>
        <button type="submit">Register</button>
        <p style="text-align:center; margin-top:15px;">
            Already have an account?
            <a href="{{ route('login') }}">Login</a>
        </p>
    </form>
</body>
</html>
