@extends('layout')

@section('conteudo')

<form method="post" action="listaex15">

    @csrf

    <div class="mb-3">
        <label for="dias" class="form-label">Digite a quantidade de dias:</label>
        <input type="number" id="dias" name="dias" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($horas, $minutos, $segundos)
        <p>A quantidade de dias inserida equivale a {{ $horas }} horas, {{ $minutos }} minutos ou {{ $segundos }} segundos.</p>
    @endisset

@endsection