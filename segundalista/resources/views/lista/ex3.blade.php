@extends('layout')

@section('conteudo')

<form method="post" action="listaex3">

    @csrf

    <div class="mb-3">
        <label for="valor" class="form-label">Digite o valor do produto:</label>
        <input type="number" id="valor" step="0.01" name="valor" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($valor)
        <p>O valor do produto é de R$ {{number_format($valor, 2, ",", ".")}}.</p>
    @endisset

@endsection