@extends('layouts.app')
@section('content')

<div class="container">
    <h1>Detalles del libro</h1>
</div>
<div class="row">
    <div class="col-md-6">
        <img src="" alt="categoria">
    </div>
    <div class="col-md-6">
        <h2>Nombre: {{$libro->titulo}}</h2>
        <h2>Autor: {{$libro->autor}}</h2>
        <h2>Año de Publicacion: {{$libro->anio_publicacion}}</h2>
        <h2>ISBN: {{$libro->isbn}}</h2>
        <h2>Categoria: {{$libro->categoria->nombre}}</h2>

    </div>
</div>

@endsection