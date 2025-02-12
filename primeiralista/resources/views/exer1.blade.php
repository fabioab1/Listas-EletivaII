@extends('layout')

@section('conteudo')
<form method="post">
    <div class="mb-3">
        <label for="valor1" class="form-label">Informe o valor 1:</label>
        <input type="number" id="valor1" name="valor1" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="valor2" class="form-label">Informe o valor 2:</label>
        <input type="number" id="valor2" name="valor2" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection