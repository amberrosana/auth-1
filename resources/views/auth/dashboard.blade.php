<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DASHBOARD</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            background-color: #3e4a61;
            text-align: center;
            color: white;
        }

        a{
            color:black;
        }

        header{
            background-color: #222831;
            color: white;
            padding: 10px 20px;
            text-align: center;
        }

        div{
            margin-top: 120px;
        }
    </style>
</head>
<body>
        <header>
    @if (Auth::user()->profile)
        <h1>Hello {{ Auth::user()->name }}! Welcome to your dashboard.</h1>
        </header>

        <div>
        <p>{{ Auth::user()->name }}</p>
        <p>{{ Auth::user()->email }}</p>
        <p>{{ Auth::user()->profile->address }}</p>
        <p>{{ Auth::user()->profile->number}}</p>
        <p>{{ Auth::user()->profile->bio }}</p>
    
    @else
        <form action="{{ route('profile.create') }}" method="GET">
            <button type="submit">Create Profile</button>
        </form>
    @endif

    <form action="{{ route('logout') }}" method="POST">
            @method('POST')
            @csrf
            <button type="submit">Logout</button>
    </form>
        </div>

</body>
</html>