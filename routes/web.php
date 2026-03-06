<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\LibroController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

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


// las rutas estan encapsuladas en un grupo de middleware 'auth' para asegurar que solo los usuarios autenticados puedan acceder a ellas
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


});

require __DIR__.'/auth.php';
