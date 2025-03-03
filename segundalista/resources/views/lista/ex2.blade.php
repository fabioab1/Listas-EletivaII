@extends('layout')

@section('conteudo')


<form method="post" action="listaex2">

    @csrf

    <div class="mb-3">
        <label for="a" class="form-label">Digite o valor A:</label>
        <input type="number" id="a" name="a" class="form-control" required="">
    </div>

    <div class="mb-3">
        <label for="b" class="form-label">Digite o valor B:</label>
        <input type="number" id="b" name="b" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($msg)
        <p>{{$msg}}</p>
    @endisset

@endsection