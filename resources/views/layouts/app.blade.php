<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous"> 
       
    <title>Gestion de Empleados</title>
</head>
<body>

    <header class="bg-primary text-white py-3 text-center">

        <nav>
            <h1>CRUD CON TABLAS RELACIONALES CON LARAVEL</h1>
            <ul class="nav justify-content-center">
                <li class="nav-item">
                    <a class="nav-link text-white" href="/categorias">Categorías</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="/libros">Libros</a>
                </li>
            </ul>
        </nav>

    </header>

        <div class="container" style="min-height: 75vh;">
            @yield('content')
        </div>

    <footer>
        <div class="container">
            <p class="text-center mt-4">© 2026 Gestion de Libros. All rights reserved.</p>
    </footer>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>