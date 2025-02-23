<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

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

Route::get('/bem-vindo', function () {
    return "Seja bem-vindo!";
});

Route::get('/exer1', function(){
    return view('exer1');
});

Route::post('/exer1resp', function(Request $request){
    $valor1 = intval($request->input('valor1'));
    $valor2 = intval($request->input('valor2'));
    $soma = $valor1 + $valor2;
    return view('exer1', compact('soma'));
});

Route::get('/ex1', function(){
    return view('lista.ex1');
});

Route::post('/listaex1', function(Request $request){
    $nota1 = floatval($request->input('nota1'));
    $nota2 = floatval($request->input('nota2'));
    $nota3 = floatval($request->input('nota3'));
    $media = ($nota1 + $nota2 + $nota3)/3;
    return view('lista.ex1', compact('media'));
});

Route::get('/ex2', function(){
    return view('lista.ex2');
});

Route::post('/listaex2', function(Request $request){
    $celsius = intval($request->input('celsius'));
    $fahrenheit = $celsius * 9/5 + 32;
    return view('lista.ex2', compact('fahrenheit'));
});

Route::get('/ex3', function(){
    return view('lista.ex3');
});

Route::post('/listaex3', function(Request $request){
    $fahrenheit = intval($request->input('fahrenheit'));
    $celsius = ($fahrenheit - 32) * 5/9;
    return view('lista.ex3', compact('celsius'));
});

Route::get('/ex4', function(){
    return view('lista.ex4');
});

Route::post('/listaex4', function(Request $request){
    $largura = floatval($request->input('largura'));
    $altura = floatval($request->input('altura'));
    $area = $largura * $altura;
    return view('lista.ex4', compact('area'));
});

Route::get('/ex5', function(){
    return view('lista.ex5');
});

Route::post('/listaex5', function(Request $request){
    $raio = floatval($request->input('raio'));
    $areaCirc = pi() * $raio ** 2;
    return view('lista.ex5', compact('areaCirc'));
});

Route::get('/ex6', function(){
    return view('lista.ex6');
});

Route::post('/listaex6', function(Request $request){
    $largura = floatval($request->input('largura'));
    $altura = floatval($request->input('altura'));
    $perimetro = $largura + $altura;
    return view('lista.ex6', compact('perimetro'));
});

Route::get('/ex7', function(){
    return view('lista.ex7');
});

Route::post('/listaex7', function(Request $request){
    $raio = floatval($request->input('raio'));
    $perimetroCirc = 2 * pi() * $raio;
    return view('lista.ex7', compact('perimetroCirc'));
});

Route::get('/ex8', function(){
    return view('lista.ex8');
});

Route::post('/listaex8', function(Request $request){
    $base = intval($request->input('base'));
    $expoente = intval($request->input('expoente'));
    $resultado = $base ** $expoente;
    return view('lista.ex8', compact('resultado'));
});

Route::get('/ex9', function(){
    return view('lista.ex9');
});

Route::post('/listaex9', function(Request $request){
    $metros = floatval($request->input('metros'));
    $cm = $metros * 100;
    return view('lista.ex9', compact('cm'));
});

Route::get('/ex10', function(){
    return view('lista.ex10');
});

Route::post('/listaex10', function(Request $request){
    $km = floatval($request->input('km'));
    $milhas = $km * 0.621371;
    return view('lista.ex10', compact('milhas'));
});

Route::get('/ex11', function(){
    return view('lista.ex11');
});

Route::post('/listaex11', function(Request $request){
    $peso = floatval($request->input('peso'));
    $altura = floatval($request->input('altura'));
    $imc = $peso / $altura ** 2;
    return view('lista.ex11', compact('imc'));
});

Route::get('/ex12', function(){
    return view('lista.ex12');
});

Route::post('/listaex12', function(Request $request){
    $preco = floatval($request->input('preco'));
    $desconto = intval($request->input('desconto'));
    $promocao = $preco - $desconto * $preco / 100;
    return view('lista.ex12', compact('promocao'));
});

Route::get('/ex13', function(){
    return view('lista.ex13');
});

Route::post('/listaex13', function(Request $request){
    $capital = floatval($request->input('capital'));
    $juros = floatval($request->input('juros'));
    $periodo = intval($request->input('periodo'));
    $rjuros = $capital * ($juros / 100) * $periodo;
    return view('lista.ex13', compact('rjuros'));
});