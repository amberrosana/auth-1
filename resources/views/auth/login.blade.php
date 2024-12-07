<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG IN</title>
    <style>
       body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #3e4a61;
            text-align: center;
            margin-top: 155px;
        } 
    </style>
</head>
<body>
    <h1>LOG IN</h1>

    <form action="{{ route('login')}}" method="POST">
        @method('POST')
        @csrf
        
        <label for="name">Name: </label>
        <input type="string" name="name" id="name" required value="{{ old('name') }}" placeholder="Your name goes here.">

        <label for="email">Email: </label>
        <input type="email" name="email" id="email" required value="{{ old('email') }}" placeholder="Your email goes here.">

        <label for="password">Password: </label>
        <input type="password" name="password" id="password" required value="{{ old('password') }}" placeholder="Your password goes here.">
    </form>
    
    <p>Don't have an account?</p>
    <a href="{{ route('showRegisterForm') }}">Register Here</a>
</body>
</html>