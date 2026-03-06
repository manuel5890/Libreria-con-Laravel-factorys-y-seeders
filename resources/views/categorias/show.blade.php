@extends('layouts.app')
@section('content')

<div class="container">
    <h1>Detalles del categoria</h1>
</div>
<div class="row">
    <div class="col-md-6">
        <img src="https://m.media-amazon.com/images/I/61HYTlq+hVL.jpg" alt="categoria">
    </div>
    <div class="col-md-6">
        <h2>Nombre: {{$categorias->nombre}}</h2>
        <h3>Descripcion: {{$categorias->descripcion}}</h3>
        <p>Estado:
            <!-- esto es para ponerle una mascara al estado para que no apareza 1 sino "Activo" o "Inactivo" -->
            @if($categorias->estado == 1)
                Activo
            @else
                Inactivo
            @endif
        </p>

    </div>
</div>

@endsection