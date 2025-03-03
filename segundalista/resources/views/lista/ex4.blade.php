@extends('layout')

@section('conteudo')

<form method="post" action="listaex4">

    @csrf

    <div class="mb-3">
        <label for="valor" class="form-label">Digite o valor:</label>
        <input type="number" id="valor" name="valor" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($contador)
        <p>A soma dos números primos é {{$contador}}.</p>
    @endisset

@endsection