@extends('layout')

@section('conteudo')

<form method="post" action="listaex9">

    @csrf

    <div class="mb-3">
        <label for="numero" class="form-label">Digite um número para o cálculo do fatorial:</label>
        <input type="number" id="numero" name="numero" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($fatorial)
        <p>O resultado do fatorial é {{$fatorial}}.</p>
    @endisset

@endsection