<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BandasAPI</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">
    <nav class="navbar navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="/">Bandas API</a>
        </div>
    </nav>
    <div class="container text-center mt-5">
        <h1 class="display-4 fw-bold">
            Bienvenido a Bandas API
        </h1>
        <p class="lead text-muted mt-3">
            Sistema de consulta de bandas musicales y sus integrantes.
        </p>
        <div class="row justify-content-center mt-5">
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h3 class="card-title">
                            Bandas
                        </h3>

                        <p class="card-text">
                            Consulta las bandas musicales registradas,
                            su género, origen e integrantes.
                        </p>

                        <a href="{{ route('bandas') }}" class="btn btn-primary">
                            Ver bandas
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-3">
                <div class="card shadow-sm h-100">
                    <div class="card-body">
                        <h3 class="card-title">
                            Artistas
                        </h3>

                        <p class="card-text">
                            Consulta los artistas registrados,
                            sus roles y las bandas a las que pertenecen.
                        </p>

                        <a href="{{ route('artistas') }}" class="btn btn-success">
                            Ver artistas
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>