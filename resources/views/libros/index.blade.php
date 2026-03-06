@extends('layouts.app')
@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <div class="container py-4">
        <h1>Lista de Libros</h1>
        <a href="/libros/create" class="btn btn-primary my-4">Crear Libro</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
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
                    <td>{{ $libro->categoria?->nombre ?? 'Sin categoría' }}</td>
                    <td>{{$libro->cantidad_disponible}}</td>
                    <td class="text-center">
                        <a href="/libros/show/{{$libro->id}}" class="btn btn-sm btn-info me-1">Ver</a>
                        <a href="/libros/edit/{{$libro->id}}" class="btn btn-sm btn-warning me-1">Editar</a>
                        <form action="/libros/delete/{{$libro->id}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Eliminar registro?')">Eliminar</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection    
    