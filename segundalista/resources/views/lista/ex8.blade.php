@extends('layout')

@section('conteudo')

<form method="post" action="listaex8">

    @csrf

    <div class="mb-3">
        <label for="numero" class="form-label">Digite um número:</label>
        <input type="number" id="numero" name="numero" class="form-control" required="">
    </div>

    <button type="submit" class="btn btn-primary">Enviar</button>
</form>

    @isset($numero)
        @php
            $i = $numero;
            do {
                echo "<p>$i</p>";
                $i--;
            } while ($i >= 1);
        @endphp
    @endisset

@endsection