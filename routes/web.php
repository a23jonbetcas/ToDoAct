<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\TodoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Ruta para mostrar todas las tareas
Route::get('/tareas', [TodoController::class, 'index'])->name('todos');

// Ruta para crear una nueva tarea
Route::post('/tareas', [TodoController::class, 'store'])->name('todos');

// Ruta para mostrar el formulario de edición de una tarea específica
Route::get('/tareas/{id}', [TodoController::class, 'show'])->name('todos-edit');

// Ruta para actualizar una tarea específica (usando PATCH o PUT)
Route::patch('/tareas/{id}', [TodoController::class, 'update'])->name('todos-update');

// Ruta para eliminar una tarea específica
Route::delete('/tareas/{id}', [TodoController::class, 'destroy'])->name('todos-destroy');


Route::resource('categories',CategoriesController::class);


