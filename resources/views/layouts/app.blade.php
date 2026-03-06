<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Instrument+Sans:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Instrument Sans', system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto,
                "Helvetica Neue", Arial, sans-serif;
            background-color: #f4f6f8;
            color: #333;
        }
        header, footer {
            background-color: #ffffff;
        }
        /* make table cells vertically centered and add subtle shadow */
        .table th, .table td { vertical-align: middle; }
        .table { box-shadow: 0 0 10px rgba(0,0,0,0.05); }
        .table thead { background-color: #0d6efd; color: #fff; }
        .btn-sm { padding: .25rem .5rem; font-size: .875rem; }
        footer p { margin: 0; }
    </style>
    <title>Biblioteca</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary mb-4">
        <div class="container">
            <a class="navbar-brand" href="/">Biblioteca</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNav"
                aria-controls="mainNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="/categorias">Categorías</a></li>
                    <li class="nav-item"><a class="nav-link" href="/libros">Libros</a></li>
                </ul>
            </div>
        </div>
    </nav>

        <div class="container py-4 min-vh-75">
            @yield('content')
        </div>

    <footer class="bg-light text-muted py-3 mt-auto">
        <div class="container">
            <p class="text-center">© 2026 Biblioteca. Todos los derechos reservados.</p>
        </div>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>