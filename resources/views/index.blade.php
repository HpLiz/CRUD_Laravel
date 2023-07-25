<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
    <h1 class="p-3">Vista creada con blade y llamada desde el controlador</h1>
    <p class="p-3"><a href="{{ route('gamesCreate') }}">Nuevo videojuego</a></p>
    <h2 class="p-3">Listado de juegos</h2>
    <div class="col-6 p-4">
    <table class="table table-success table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>CATEGORIA ID</th>
                <th>CREADO</th>
                <th>ESTADO</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($games as $game)
            <tr>
                <td>{{ $game->id}}</td>
                <td><a href="{{ route('viewGame',$game->id) }}">{{ $game->name }}</a></td>
                <td>{{ $game->category_id}}</td>
                <td>{{ $game->created_at}}</td>
                <td>
                    @if($game->active)
                    <span style="color: green">Activo</span>
                    @else
                    <span style="color: gray">Inactivo</span>
                    @endif
                </td>
                <td>
                    <a href="{{route('deleteGame',$game->id)}}">Eliminar</a>
                </td>
            </tr>
            @empty
            <tr>
                <th>Sin videojuegos</th>
            </tr>
            @endforelse
            
        </tbody>
    </table>
    </div>
</body>
</html>