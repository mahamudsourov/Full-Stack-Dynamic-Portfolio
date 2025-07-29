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
        @csrf
        <input type="text" placeholder="Enter name" name="name">
        <input type="email" placeholder="Enter Email" name="email"><br>
        <input type="password" name="password" placeholder="Enter Password"><br>
        <button type="submit">Register</button>
    </form>
</body>
</html>