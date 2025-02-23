@extends('layout')

@section('conteudo')

<form method="post" action="listaex11">

    @csrf

    <div class="mb-3">
        <label for="peso" class="form-label">Digite o peso em kg:</label>
        <input type="number" id="peso" step="0.1" name="peso" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="altura" class="form-label">Digite a altura em metros:</label>
        <input type="number" id="altura" step="0.01" name="altura" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($imc)
        <p>O IMC calculado é {{ number_format($imc, 1, ",", ".") }}.</p>
    @endisset

@endsection