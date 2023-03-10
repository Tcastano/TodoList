<?php

use App\Http\Controllers\TareaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lista', [TareaController::class, 'listado_de_tareas'])->name('listarTareas');
Route::post('/lista', [TareaController::class, 'nuevaTarea'])->name('añadirTareas');
Route::delete('/lista/{id}', [TareaController::class, 'completarTarea'])->name('tareaCompletada');
