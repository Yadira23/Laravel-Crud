<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/481518f77d.js" crossorigin="anonymous"></script>
</head>

<body>
    
    <h1 class="text-center">Vista creada en blade y llamada desde controlador</h1>
    <p class="text-center"><a href="{{ route('gamesCreate')}}">Nuevo videojuego</a></p>
    <h2>Listado de juegos</h2>

    <table class="table table-striped table-hover">
        <thead class="bg-info">
            <tr>
                <th class="px-2">ID</th>
                <th class="px-2">NOMBRE</th>
                <th class="px-2">CATEGORIA ID</th>
                <th class="px-2">CREADO</th>
                <th class="px-2">ESTADO</th>
                <th class="px-2">ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @forelse($games as $game)
            <tr>
                <td class="px-2">{{ $game->id}}</td>
                <td class="px-2"><a href="{{ route('viewGame', $game->id)}}">{{$game->name}}</a></td>
                <td class="px-2">{{$game->category_id}}</td>
                <td class="px-2">{{$game->created_at}}</td>
                <td class="px-2">
                    @if($game->active)
                    <span class="text-success">Activo</span>
                    @else
                    <span class="text-danger">Inactivo</span>
                    @endif
                </td>
                <td class="px-2">
                    <a href="{{route('deleteGame', $game->id )}}">Eliminar
                    </a>
                </td>
            </tr>
            @empty
            <tr>
                <td class="px-2" colspan="6">Sin videojuegos</td>
            </tr>
            @endforelse
        </tbody>
    </table>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>

</html>