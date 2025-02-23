@extends('layout')

@section('conteudo')

<form method="post" action="listaex4">

    @csrf

    <div class="mb-3">
        <label for="largura" class="form-label">Digite a largura do retângulo em cm:</label>
        <input type="number" id="largura" step="0.1" name="largura" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="altura" class="form-label">Digite a altura do retângulo em cm:</label>
        <input type="number" id="altura" step="0.1" name="altura" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($area)
        <p>A área do retângulo é de {{ $area }} cm². </p>
    @endisset

@endsection