@extends('layout')

@section('conteudo')

<form method="post" action="listaex5">

    @csrf

    <div class="mb-3">
        <label for="valorMes" class="form-label">Digite o valor do mês:</label>
        <input type="number" id="valorMes" min="1" max="12" name="valorMes" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($mes)
        <p>O valor inserido é referente ao mês de {{$mes}}.</p>
    @endisset

@endsection