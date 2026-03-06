@extends('layouts.app')
@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <div class="container py-4">
        <h1>Lista de Libros - SIADEMY</h1>
        <a href="/libros/create" class="btn btn-primary my-4">Crear Libro</a>
    </div>

    <table class="table table-bordered">
        <thead class="table-primary">
            <tr>
                <th>Titulo</th>
                <th>Autor</th>
                <th>Año de publicacion</th>
                <th>ISBN</th>
                <th>Categoria</th>
                <th>Cantidad Disponible</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($libros as $libro)
            <tr>
                <td>{{$libro->titulo}}</td>
                <td>{{$libro->autor}}</td>
                <td>{{$libro->anio_publicacion}}</td>
                <td>{{$libro->isbn}}</td>
                <td>{{$libro->categoria->nombre}}</td>
                <td>{{$libro->cantidad_disponible}}</td>
                <td>
                    <a href="/libros/show/{{$libro->id}}">Ver</a>
                    <a href="/libros/edit/{{$libro->id}}">Editar</a>
                    <form action="/libros/delete/{{$libro->id}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection    
    