@extends('layout')

@section('conteudo')

<form method="post" action="listaex7">

    @csrf

    <div class="mb-3">
        <label for="numero" class="form-label">Digite um número:</label>
        <input type="number" id="numero" name="numero" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($somatoria)
        <p>O resultado da somatória é {{$somatoria}}.</p>
    @endisset

@endsection