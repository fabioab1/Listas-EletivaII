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

Route::get('/ex5', [ExerciciosController::class, 'abrirForm5']);
Route::post('/listaex5', [ExerciciosController::class, 'respForm5']);

Route::get('/ex6', [ExerciciosController::class, 'abrirForm6']);
Route::post('/listaex6', [ExerciciosController::class, 'respForm6']);

Route::get('/ex7', [ExerciciosController::class, 'abrirForm7']);
Route::post('/listaex7', [ExerciciosController::class, 'respForm7']);

Route::get('/ex8', [ExerciciosController::class, 'abrirForm8']);
Route::post('/listaex8', [ExerciciosController::class, 'respForm8']);

Route::get('/ex9', [ExerciciosController::class, 'abrirForm9']);
Route::post('/listaex9', [ExerciciosController::class, 'respForm9']);

Route::get('/ex10', [ExerciciosController::class, 'abrirForm10']);
Route::post('/listaex10', [ExerciciosController::class, 'respForm10']);