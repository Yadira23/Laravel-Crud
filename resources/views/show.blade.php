<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    @if($categoryGame)
    <h1>El nombre de videojuego es: {{ $nameVideogame }} y la categoria es: {{ $categoryGame }}</h1>
    @else
    <h1>El nombre de videojuego es: {{ $nameVideogame }}</h1>
    @endif

    
    <h3>{{ $fecha}}</h3>
</body>

</html>