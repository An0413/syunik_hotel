<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            color: #333;
        }

        .content {
            padding: 20px;
            background-color: #f4f4f4;
            border: 1px solid forestgreen;
        }
    </style>
</head>
<body>
<h3>Անուն ։ {{ $data['name'] }}</h3>
<h4>Email : {{ $data['mail'] }}</h4>
<div class="content">
    <p>{{ $data['content'] }}</p>
</div>
</body>
</html>
