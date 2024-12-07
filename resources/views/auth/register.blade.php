<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #3e4a61;
            text-align: center;
        }
        header{
            background-color: #222831;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }
        form{
            margin-top: 100px;
            text-align: center;
        }
    </style>
</head>
<body>
    <header>
        Register
    </header>
    <form action="{{ route('register') }}" method="POST">
        @method('POST')
        @csrf
        <div>
            <label for="name">Name</label>
            <input type="text" name="name" id="name" required value="{{ old('name') }}" placeholder="Enter your name">
        </div>
        <div>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" required value="{{ old('email') }}" placeholder="Enter your email">
        </div>
        <div>
            <label for="password">Password</label>
            <input type="password" name="password" id="password" required placeholder="Enter your password">
        </div>
        <div>
            <label for="password_confirmation">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" required placeholder="Confirm your password">
        </div>
        <div>
            <button type="submit">Register</button>
        </div>
    </form>
    <p>
        Already have an account?
        <a href="{{ route('showLoginForm') }}">Login here</a>
    </p>
</body>
</html>
