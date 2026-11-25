<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artistas musicales</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Bandas API</a>
            <div>
                <a href="{{ route('bandas') }}" class="btn btn-outline-light btn-sm">Bandas</a>
                <a href="{{ route('artistas') }}" class="btn btn-outline-light btn-sm">Artistas</a>
            </div>
        </div>
    </nav>
    <div class="container mt-4">
        <h1 class="mb-4">Artistas musicales</h1>
        @if($artistas->isEmpty())
            <div class="alert alert-info">
                No hay artistas registrados.
            </div>
        @else
            <div class="table-responsive">
                <table class="table table-striped table-bordered bg-white">
                    <thead class="table-dark">
                        <tr>
                            <th>ID</th>
                            <th>Nombre</th>
                            <th>Rol</th>
                            <th>Edad</th>
                            <th>Nacionalidad</th>
                            <th>Banda</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($artistas as $artista)
                            <tr>
                                <td>{{ $artista->id }}</td>
                                <td>{{ $artista->nombre }}</td>
                                <td>{{ $artista->rol }}</td>
                                <td>{{ $artista->edad ?? 'No especificada' }}</td>
                                <td>{{ $artista->nacionalidad ?? 'No especificada' }}</td>
                                <td>
                                    {{ $artista->banda->nombre ?? 'Sin banda' }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @endif
    </div>
</body>
</html>