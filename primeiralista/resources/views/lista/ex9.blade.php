@extends('layout')

@section('conteudo')

<form method="post" action="listaex9">

    @csrf

    <div class="mb-3">
        <label for="metros" class="form-label">Digite um valor em metros:</label>
        <input type="number" id="metros" step="0.1" name="metros" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($cm)
        <p>O valor em metros convertido para centímetros é {{ $cm }} cm.</p>
    @endisset

@endsection