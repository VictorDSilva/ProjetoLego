@extends('layouts.app')

@section('content')


        <h1>Etapas</h1>

        <table class="table"></table>
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        <table class="table">
            <thead>
            <a class="btn btn-primary btn-success float-right" href="etapa/create">Incluir</a>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Descrição</th>
                <th scope="col">Peça</th>
                <th scope="col">Audio</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
            </thead>
            <tbody>
            @foreach($etapas as $etapa)
                <tr>
                    <td>{{ $etapa->id }}</td>
                    <td>{{ $etapa->descricao }}</td>
                    <td>{{ $etapa->peca_etapa }}</td>
                    <td><audio src="{{$etapa->audio_path}}"></audio></td>
                    <td><a class="btn btn-sm  btn-warning float-right" href="{{route('etapa.edit', $etapa->id)}}">Editar</a>
                    </td>
                    <td>{!!Form::open(['action' => ['EtapaController@destroy', $etapa->id],'method' => 'POST', 'class' => 'float-left', 'onsubmit' => 'return confirm("Você tem certeza?")'])!!}
                        {{Form::hidden('_method', 'DELETE')}}
                        {{Form::submit('Deletar', ['class' => 'btn btn-danger btn-sm '])}}
                        {!! Form::close() !!}</td>
                </tr>
            @endforeach
            </tbody>
        </table>

@endsection
