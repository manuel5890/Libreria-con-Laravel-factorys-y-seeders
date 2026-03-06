@extends('layouts.app')
@section('content')
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

    <div class="container py-4">
        <h1>Lista de Categorias - SIADEMY</h1>
        <a href="/categorias/create" class="btn btn-primary my-4">Crear Categoria</a>
    </div>

    <table class="table table-bordered">
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
                <td>
                    <a href="/categorias/show/{{$categoria->id}}">Ver</a>
                    <a href="/categorias/edit/{{$categoria->id}}">Editar</a>
                    <form action="/categorias/delete/{{$categoria->id}}" method="POST">
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
    