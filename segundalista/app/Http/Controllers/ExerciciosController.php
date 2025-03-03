<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


class ExerciciosController extends Controller
{
    public function abrirForm(){
        return view('lista.ex1');
    }

    public function calcularSoma(Request $request){
        $valor1 = intval($request->input('valor1'));
        $valor2 = intval($request->input('valor2'));
        $soma = $valor1 + $valor2;
        if ($valor1 == $valor2)
            $soma *= 3;
        return view('lista.ex1', compact('soma'));
    }

    public function abrirForm2(){
        return view('lista.ex2');
    }

    public function respForm2(Request $request){
        $a = intval($request->input('a'));
        $b = intval($request->input('b'));
        $msg = "";
        if ($a > $b)
            $msg = $b." ".$a;
        else if ($a < $b)
            $msg = $a." ".$b;
        else
            $msg = "Números iguais: ".$a;
        return view('lista.ex2', compact('msg'));
    }

    public function abrirForm3(){
        return view('lista.ex3');
    }

    public function respForm3(Request $request){
        $valor = floatval($request->input('valor'));
        if ($valor > 100)
            $valor = $valor - ($valor * 15/100);
        return view('lista.ex3', compact('valor'));
    }
}
