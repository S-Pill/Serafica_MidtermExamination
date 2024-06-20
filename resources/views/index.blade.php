
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach ($anime as $anime)
    <li>
        <h3>{{ $anime['title'] }}</h3>
        <p>Genre: {{ $anime['genre'] }}</p>
        <p>Episodes: {{ $anime['episodes'] }}</p>
    </li>
@endforeach
</body>
</html>

