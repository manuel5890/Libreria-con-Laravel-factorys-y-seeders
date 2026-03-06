<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear Categoria') }}
        </h2>
    </x-slot>

    <div class="container py-4">
        <h1>Crear Nueva Categoria</h1>
        <a href="/categorias" class="btn btn-secondary my-4">Volver a Categorias</a>

<!-- formulario de creación de categorías -->
<form action="/categorias" method="POST">
    @csrf
    <div class="mb-3">
        <label for="nombre" class="form-label">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" required>
    </div>
    <div class="mb-3">
        <label for="descripcion" class="form-label">Descripción</label>
        <textarea class="form-control" id="descripcion" name="descripcion"></textarea>
    </div>
    <!-- aqui se quema el estado -->
    <input type="hidden" name="estado" value="1">

    <button type="submit" class="btn btn-primary">Crear Categoría</button>
</form>

</x-app-layout>