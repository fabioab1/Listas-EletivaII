<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ExerciciosController;

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

Route::get('/ex1', [ExerciciosController::class, 'abrirForm']);
Route::post('/listaex1', [ExerciciosController::class, 'calcularSoma']);

Route::get('/ex2', [ExerciciosController::class, 'abrirForm2']);
Route::post('/listaex2', [ExerciciosController::class, 'respForm2']);

Route::get('/ex3', [ExerciciosController::class, 'abrirForm3']);
Route::post('/listaex3', [ExerciciosController::class, 'respForm3']);

Route::get('/ex4', [ExerciciosController::class, 'abrirForm4']);
Route::post('/listaex4', [ExerciciosController::class, 'respForm4']);