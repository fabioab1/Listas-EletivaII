@extends('layout')

@section('conteudo')

<form method="post" action="listaex10">

    @csrf

    <div class="mb-3">
        <label for="km" class="form-label">Digite um valor em quilômetros:</label>
        <input type="number" id="km" step="0.1" name="km" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($milhas)
        <p>O valor em quilômetros convertido para milhas é de {{ $milhas }} milhas.</p>
    @endisset

@endsection