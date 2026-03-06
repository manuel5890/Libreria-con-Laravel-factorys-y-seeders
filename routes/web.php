<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LibroController;
use App\Http\Controllers\CategoriasController;


// estas rutas es la forma profesional de hacerla mas rapido y eficiente ya que redirije todas las rutas a un controlador y este se encarga de manejar cada una de las acciones, como crear, editar, eliminar, etc.

// Route::resource('libros', LibroController::class);
// Route::resource('categorias', CategoriasController::class);


// rutas de las categorias

Route::get('/categorias', [CategoriasController::class, 'index']);
Route::get('/categorias/create', [CategoriasController::class, 'create']);
Route::post('/categorias', [CategoriasController::class, 'store']);
Route::get('/categorias/show/{categorias}', [CategoriasController::class, 'show']);
Route::get('/categorias/edit/{categorias}', [CategoriasController::class, 'edit']);
Route::put('/categorias/update/{categorias}', [CategoriasController::class, 'update']);
Route::delete('/categorias/delete/{categorias}', [CategoriasController::class, 'destroy']);


// rutas de los libros

Route::get('/libros', [LibroController::class, 'index']);
Route::get('/libros/create', [LibroController::class, 'create']);
Route::post('/libros', [LibroController::class, 'store']);
Route::get('/libros/show/{libro}', [LibroController::class, 'show']);
Route::get('/libros/edit/{libro}', [LibroController::class, 'edit']);
Route::put('/libros/update/{libro}', [LibroController::class, 'update']);
Route::delete('/libros/delete/{libro}', [LibroController::class, 'destroy']);
