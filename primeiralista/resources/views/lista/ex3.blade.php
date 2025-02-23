@extends('layout')

@section('conteudo')

<form method="post" action="listaex3">

    @csrf

    <div class="mb-3">
        <label for="fahrenheit" class="form-label">Insira a temperatura em fahrenheit:</label>
        <input type="number" id="fahrenheit" name="fahrenheit" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($celsius)
        <p>A temperatura inserida em Celsius é {{ $celsius }} ºC.</p>
    @endisset

@endsection