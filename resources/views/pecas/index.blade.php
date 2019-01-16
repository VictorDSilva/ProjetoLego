@extends('layouts.app')

@section('content')
    <main role="main" class="container">
        <div class="jumbotron">
            <h1>Peças</h1>
            <table class="table">
                <thead>
                <a class="btn btn-primary btn-success float-right" href="pecas/create">Incluir</a>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Imagem</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @if(count($pecas)> 0)
            @foreach($pecas as $peca)
                <tr>
                    <td>{{$peca->id}}</td>
                    <td>{{$peca->nome}}</td>
                    <td><img src="{{$peca->url_imagem}}" height="100" width="100" /></td>
                    <td> <a class="btn btn-sm  btn-warning float-right"  href="{{route('pecas.edit', $peca->id)}}">Editar</a>

                    </td>
                    <td>{!!Form::open(['action' => ['PecaController@destroy', $peca->id],'method' => 'POST', 'class' => 'float-left', 'onsubmit' => 'return confirm("Você tem certeza?")'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Deletar', ['class' => 'btn btn-danger btn-sm '])}}
                        {!! Form::close() !!}</td>

                </tr>
            @endforeach

            @endif
                </tbody>
            </table>
        </div>
    </main>

@endsection
