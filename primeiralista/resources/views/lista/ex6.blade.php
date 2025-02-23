@extends('layout')

@section('conteudo')

<form method="post" action="listaex6">

    @csrf

    <div class="mb-3">
        <label for="largura" class="form-label">Digite a largura do retângulo em cm:</label>
        <input type="number" id="largura" name="largura" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="altura" class="form-label">Digite a altura do retângulo em cm:</label>
        <input type="number" id="altura" name="altura" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($perimetro)
        <p>O perímetro do retângulo é de {{ $perimetro }} cm.</p>
    @endisset

@endsection