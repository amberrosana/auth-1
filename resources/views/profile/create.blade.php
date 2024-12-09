<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE PROFILE</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background-color: #3e4a61;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        header {
            background-color: #222831;
            color: white;
            padding: 15px 20px;
            text-align: center;
            font-size: 24px;
        }

        form {
            margin-top: 50px;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        div {
            width: 100%;
            max-width: 500px;
            margin: 0 auto;
        }

        label {
            display: block;
            margin-bottom: 8px;
            text-align: left;
            font-size: 16px;
            color: #f1f1f1;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            background-color: #f9f9f9;
        }

        button {
            width: 100%;
            padding: 12px;
            background-color: #3498db;
            border: none;
            border-radius: 5px;
            color: white;
            font-size: 16px;
            cursor: pointer;
        }

        button:hover {
            background-color: #2980b9;
        }

        @media (max-width: 600px) {
            header {
                font-size: 20px;
                padding: 10px 15px;
            }

            form {
                margin-top: 20px;
                width: 80%;
            }

            input {
                font-size: 14px;
            }

            button {
                font-size: 14px;
                padding: 10px;
            }
        }
    </style>
</head>
<body>
    <header>
        Create a Profile
    </header>

    <form action="{{ route('profile.store') }}" method="POST">
        @method('POST')
        @csrf
        <div>
            <label for="address">Address</label>
            <input type="text" name="address" id="address" required value="{{ old('address') }}" placeholder="Your address goes here.">
        </div>
        <div>
            <label for="number">Number</label>
            <input type="tel" name="number" id="number" required value="{{ old('number') }}" placeholder="Your contact number goes here.">
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