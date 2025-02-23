@extends('layout')

@section('conteudo')

<form method="post" action="listaex12">

    @csrf

    <div class="mb-3">
        <label for="preco" class="form-label">Digite o preço:</label>
        <input type="number" id="preco" step="0.01" name="preco" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="desconto" class="form-label">Digite o percentual para desconto:</label>
        <input type="number" id="desconto" name="desconto" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($promocao)
        <p>O preço após o desconto é de R$ {{ number_format($promocao, 2, ",", ".") }}.</p>
    @endisset

@endsection