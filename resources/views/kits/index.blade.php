@extends('layouts.app')

@section('content')
    <main role="main" class="container">
        <div class="jumbotron">
            <h1>Kits</h1>
            <table class="table">
                <thead>
                <a class="btn btn-primary btn-success float-right" href="kits/create">Incluir</a>
                <tr>
                    <th scope="col">id</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Ano</th>
                    <th scope="col">Quantidade Peças</th>
                    <th scope="col">Imagem</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                </tr>
                </thead>
                <tbody>
                @if(count($kits)> 0)
                    @foreach($kits as $kit)
                        <tr>
                            <td>{{$kit->id}}</td>
                            <td>{{$kit->nome}}</td>
                            <td>{{$kit->ano}}</td>
                            <td>{{$kit->quantidade_pecas}}</td>
                            <td><img src="{{$kit->url_imagem}}"  /></td>
                            <td> <a class="btn-sm btn-primary btn-warning float-right"  href="{{route('kits.edit', $kit->id)}}">Editar</a>

                            </td>
                            <td>{!!Form::open(['action' => ['KitController@destroy', $kit->id],'method' => 'POST', 'class' => 'float-left', 'onsubmit' => 'return confirm("Você tem certeza?")'])!!}
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
