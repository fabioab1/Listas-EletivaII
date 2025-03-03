@extends('layout')

@section('conteudo')

<form method="post" action="listaex6">

    @csrf

    <div class="mb-3">
        <label for="numero" class="form-label">Digite um número:</label>
        <input type="number" id="numero" name="numero" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($numero)
        @for ($i = 1; $i <= $numero; $i++)
            <p>{{$i}}</p>
        @endfor
    @endisset

@endsection