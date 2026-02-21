<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de pilotos</title>
</head>
<body>
    <h1>Lista de pilotos</h1>
    <ul>
        @foreach ($pilots as $pilot)
            <li>{{ $pilot->name }}</li>
        @endforeach
    </ul>
</body>
</html>