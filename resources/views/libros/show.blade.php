@extends('layouts.app')
@section('content')

<div class="container py-4">
    <h1 class="mb-3">Detalles del libro</h1>

    <div class="card shadow-sm">
        <div class="row g-0">
            <div class="col-md-4 bg-light d-flex align-items-center justify-content-center">
                <img src="https://www.lucushost.com/blog/wp-content/uploads/2019/06/a%C3%B1adir-categor%C3%ADas-en-WordPress.png" class="img-fluid p-3" alt="portada">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$libro->titulo}}</h5>
                    <p class="card-text mb-1"><strong>Autor:</strong> {{$libro->autor}}</p>
                    <p class="card-text mb-1"><strong>Año de publicación:</strong> {{$libro->anio_publicacion}}</p>
                    <p class="card-text mb-1"><strong>ISBN:</strong> {{$libro->isbn}}</p>
                    <p class="card-text mb-1"><strong>Categoría:</strong> {{$libro->categoria->nombre}}</p>
                    <a href="/libros" class="btn btn-primary btn-sm mt-2">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection