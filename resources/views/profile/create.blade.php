<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE PROFILE</title>
</head>
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
        margin-top: 205px;
    }

    .create{
        margin-top: 20px;
    }
</style>
<body>
        <header>
            Create a Profile
        </header>

<form action="{{ route('profile.store') }}" method="POST">
        @method('POST')
        @csrf
        <div>
            <label for="address">Address</label>
            <input type="integer" name="address" id="address" required value="{{ old('address') }}" placeholder="Your address goes here.">
        </div>
        <div>
            <label for="number">Number</label>
            <input type="string" name="number" id="number" required value="{{ old('number') }}" placeholder="Your contact number goes here.">
        </div>
        <div>
            <label for="bio">Bio</label>
            <input type="text" name="bio" id="bio" required placeholder="Your bio goes here.">
        </div>
        <div>
            <button type="submit" class="create">Create Profile</button>
        </div>
    </form>
</body>
</html>