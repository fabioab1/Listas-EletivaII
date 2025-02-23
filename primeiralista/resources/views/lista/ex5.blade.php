@extends('layout')

@section('conteudo')

<form method="post" action="listaex5">
    
    @csrf

    <div class="mb-3">
        <label for="raio" class="form-label">Digite o raio do círculo:</label>
        <input type="number" id="raio" step="0.1" name="raio" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($areaCirc)
        <p>A área do círculo é de {{ $areaCirc }} cm².</p>
    @endisset

@endsection