@extends('principal')

@section('corpo')
   
    <table class="table table-borderd table-hover table-scripted">
        <thead class="thead-dark">
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>bairro</th>
                <th>cidade</th>
                <th>estado</th>
                <th>exibir</th>
            </tr>
        </thead>
        @foreach ($entidades as $e)
            <tr>
                <td>{{$e->id}}</td>
                <td>{{$e->nome}}</td>
                <td>{{$e->bairro}}</td>
                <td>{{$e->cidade}}</td>
                <td>{{$e->estado}}</td>
                <td><a href="{{route('entidades.show',[$e->id])}}">exibir</a></td>
            </tr>
        @endforeach
    </table>

    <h3>Área Geral</h3>
<table class="table table-borderd table-hover table-scripted">
        <thead class="thead-dark">
            <th>Entidade</th>
            <th>coletas</th>

        </thead>
        <tbody>
        @foreach ($entidades as $e)
            <tr>
                <td>{{$e->nome}}</td>
                
                @foreach ($e->coletas as $c)
                    <td>{{$c->quantidade}}</td>
                @endforeach
            </tr>
        @endforeach
        </tbody>
        <tfoot>
            <th>total geral</th>
            <th>4444</th>
        </tfoot>
</table>
@endsection