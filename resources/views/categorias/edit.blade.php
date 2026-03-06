<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Editar Categoria') }}
        </h2>
    </x-slot>

    <div class="container py-4">
        <h1>Editar Categoria</h1>
        <a href="/categorias" class="btn btn-secondary my-4">Volver a Categorias</a>

<!-- formulario de creación de categorías -->
<form action="/categorias/update/{{ $categorias->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="{{ $categorias->nombre }}" required>
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea class="form-control" id="descripcion" name="descripcion">{{ $categorias->descripcion }}</textarea>
    </div>
    <div class="mb-3">
        <label for="estado" class="form-label">Estado</label>
        <select class="form-control" id="estado" name="estado">
            <option value="1" {{ $categorias->estado ? 'selected' : '' }}>Activo</option>
            <option value="0" {{ !$categorias->estado ? 'selected' : '' }}>Inactivo</option>
        </select>
    </div>

    <button type="submit" class="btn btn-primary">Actualizar Categoría</button>
</form>

</x-app-layout>