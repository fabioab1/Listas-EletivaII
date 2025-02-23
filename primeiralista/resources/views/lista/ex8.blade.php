@extends('layout')

@section('conteudo')

<form method="post" action="listaex8">

    @csrf

    <div class="mb-3">
        <label for="base" class="form-label">Digite o número da base:</label>
        <input type="number" id="base" name="base" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="expoente" class="form-label">Digite o número do expoente:</label>
        <input type="text" id="expoente" name="expoente" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($resultado)
        <p>O resultado da exponenciação é {{ $resultado }}.</p>
    @endisset

@endsection