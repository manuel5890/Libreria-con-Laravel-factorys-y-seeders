@extends('layouts.app')
@section('content')

<div class="container py-4">
    <h1 class="mb-3">Detalles de la categoría</h1>

    <div class="card shadow-sm">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="https://www.lucushost.com/blog/wp-content/uploads/2019/06/a%C3%B1adir-categor%C3%ADas-en-WordPress.png" class="img-fluid rounded-start" alt="categoria">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{$categorias->nombre}}</h5>
                    <p class="card-text">{{$categorias->descripcion}}</p>
                    <p class="card-text"><small class="text-muted">Estado: {{$categorias->estado ? 'Activo' : 'Inactivo'}}</small></p>
                    <a href="/categorias" class="btn btn-primary btn-sm">Volver</a>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection