@extends('layout')

@section('conteudo')

<form method="post" action="listaex14">

    @csrf

    <div class="mb-3">
        <label for="capital" class="form-label">Digite o valor do capital:</label>
        <input type="number" id="capital" step="0.01" name="capital" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="juros" class="form-label">Digite a taxa de juros (use a mesma medida de tempo para o período):</label>
        <input type="number" id="juros" step="0.1" name="juros" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="periodo" class="form-label">Digite o período:</label>
        <input type="number" id="periodo" name="periodo" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($montante)
        <p>O montante calculado é igual a R$ {{ number_format($montante, 2, ",", ".") }}.</p>
    @endisset

@endsection