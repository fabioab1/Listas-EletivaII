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

    public function abrirForm4(){
        return view('lista.ex4');
    }

    public function respForm4(Request $request){
        $valor = intval($request->input('valor'));
        $contador = 0;
        for ($i = 1; $i <= $valor; $i++)
        {
            $divisoes = 0;
            for ($j = 1; $j <= $i; $j++)
                if ($i % $j == 0)
                    $divisoes++;
            if ($divisoes == 2)
                $contador += $i;
        }
        return view('lista.ex4', compact('contador'));
    }

    public function abrirForm5(){
        return view('lista.ex5');
    }

    public function respForm5(Request $request){
        $valorMes = intval($request->input('valorMes'));
        $mes = "";
        switch ($valorMes) {
            case 1:
                $mes = "Janeiro";
                break;
            case 2:
                $mes = "Fevereiro";
                break;
            case 3:
                $mes = "Março";
                break;
            case 4:
                $mes = "Abril";
                break;
            case 5:
                $mes = "Maio";
                break;
            case 6:
                $mes = "Junho";
                break;
            case 7:
                $mes = "Julho";
                break;
            case 8:
                $mes = "Agosto";
                break;
            case 9:
                $mes = "Setembro";
                break;
            case 10:
                $mes = "Outubro";
                break;
            case 11:
                $mes = "Novembro";
                break;
            case 12:
                $mes = "Dezembro";
                break;
            default:
                $mes = "Digite um valor válido";
        }
        return view('lista.ex5', compact('mes'));
    }

    public function abrirForm6(){
        return view('lista.ex6');
    }

    public function respForm6(Request $request){
        $numero = intval($request->input('numero'));
        return view('lista.ex6', compact('numero'));
    }

    public function abrirForm7(){
        return view('lista.ex7');
    }

    public function respForm7(Request $request){
        $numero = intval($request->input('numero'));
        $somatoria = 0;
        $i = 1;
        while ($i <= $numero)
        {
            $somatoria += $i;
            $i++;
        }
        return view('lista.ex7', compact('somatoria'));
    }

    public function abrirForm8(){
        return view('lista.ex8');
    }

    public function respForm8(Request $request){
        $numero = intval($request->input('numero'));
        return view('lista.ex8', compact('numero'));
    }

    public function abrirForm9(){
        return view('lista.ex9');
    }

    public function respForm9(Request $request){
        $numero = intval($request->input('numero'));
        $fatorial = 1;
        for ($i = $numero; $i >= 1; $i--)
            $fatorial *= $i;
        return view('lista.ex9', compact('fatorial'));
    }

    public function abrirForm10(){
        return view('lista.ex10');
    }

    public function respForm10(Request $request){
        $numero = intval($request->input('numero'));
        return view('lista.ex10', compact('numero'));
    }
}
