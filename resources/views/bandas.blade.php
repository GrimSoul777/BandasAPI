<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bandas musicales</title>

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

        <h1 class="mb-4">Bandas musicales</h1>

        @if($bandas->isEmpty())
            <div class="alert alert-info">
                No hay bandas registradas.
            </div>
        @else

            <div class="row">

                @foreach($bandas as $banda)

                    <div class="col-md-4 mb-4">

                        <div class="card shadow-sm h-100">

                            <div class="card-body">

                                <h5 class="card-title">
                                    {{ $banda->nombre }}
                                </h5>

                                <p class="card-text">
                                    <strong>Género:</strong>
                                    {{ $banda->genero }}
                                </p>

                                <p class="card-text">
                                    <strong>Origen:</strong>
                                    {{ $banda->origen ?? 'No especificado' }}
                                </p>

                                <p class="card-text">
                                    {{ $banda->descripcion ?? 'Sin descripción' }}
                                </p>

                                <hr>

                                <h6>Integrantes</h6>

                                @forelse($banda->artistas as $artista)

                                    <p class="mb-1">
                                        {{ $artista->nombre }}
                                        <small class="text-muted">
                                            ({{ $artista->rol }})
                                        </small>
                                    </p>

                                @empty

                                    <p class="text-muted">
                                        No hay integrantes registrados.
                                    </p>

                                @endforelse

                            </div>

                        </div>

                    </div>

                @endforeach

            </div>

        @endif

    </div>

</body>
</html>