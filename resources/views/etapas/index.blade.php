@extends('layouts.app')

@section('content')
    <main role="main" class="container">
        <div class="jumbotron">
            <h1>Etapas</h1>
            <table class="table">
                <thead>
                <a class="btn btn-primary btn-success float-right" href="etapa/create">Incluir</a>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Peça Etapa</th>
                    <th scope="col">Número Etapa</th>
                    <th scope="col">Webcam</th>
                    <th scope="col">Concluído</th>
                    <th scope="col">Áudio</th>
                    <th scope="col">Tentativas</th>
                </tr>
                </thead>
                <tbody>
                @if(count($etapas)> 0)
                    @foreach($etapas as $etapa)
                        <tr>
                            <td>{{$etapa->id}}</td>
                            <td>{{$etapa->descricao}}</td>
                            <td>{{$etapa->peca_etapa}}</td>
                            <td>{{$etapa->numero_etapa}}</td>
                            <td>{{$etapa->webcam}}</td>
                            <td>{{$etapa->concluido}}</td>
                            <td><audio src="{{$etapa->audio_path}}"/></td>
                            <td>{{$etapa->concluido}}</td>
                            <td> <a class="btn-sm btn-primary btn-warning float-right"  href="{{route('etapa.edit', $etapa->id)}}">Editar</a>

                            </td>
                            <td>{!!Form::open(['action' => ['EtapasController@destroy', $kit->id],'method' => 'POST', 'class' => 'float-left', 'onsubmit' => 'return confirm("Você tem certeza?")'])!!}
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
