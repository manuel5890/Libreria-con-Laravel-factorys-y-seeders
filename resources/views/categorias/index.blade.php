@extends('layouts.app')
@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <div class="container py-4">
        <h1>Lista de Categorias</h1>
        <a href="/categorias/create" class="btn btn-primary my-4">Crear Categoria</a>
    </div>

    <div class="table-responsive">
        <table class="table table-bordered table-striped table-hover">
            <thead class="table-primary">
                <tr>
                    <th>Nombre</th>
                    <th>Descripcion</th>
                    <th>Estado</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($categorias as $categoria)
                <tr>
                    <td>{{$categoria->nombre}}</td>
                    <td>{{$categoria->descripcion}}</td>
                    <td>{{$categoria->estado ? 'Activo' : 'Inactivo'}}</td>
                    <td class="text-center">
                        <a href="/categorias/show/{{$categoria->id}}" class="btn btn-sm btn-info me-1">Ver</a>
                        <a href="/categorias/edit/{{$categoria->id}}" class="btn btn-sm btn-warning me-1">Editar</a>
                        <form action="/categorias/delete/{{$categoria->id}}" method="POST" class="d-inline">
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
    