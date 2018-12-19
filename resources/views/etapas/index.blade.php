@extends('layouts.app')

@section('content')

    <main role="main" class="container">

        <div class="jumbotron">
        <h1>Etapas</h1>

        <table class="table"></table>
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        <table class="table">
            <thead>
            <tr>
                <td>ID</td>
                <td>Descrição</td>
                <td>Peça</td>
                <td>Audio</td>
            </tr>
            </thead>
            <tbody>
            @foreach($etapas as $etapa => $value)
                <tr>
                    <td>{{ $value->id }}</td>
                    <td>{{ $value->descricao }}</td>
                    <td>{{ $value->peca_etapa }}</td>
                    <td><audio src="{{$value->audio_path}}"></audio></td>
                    <td><a class="btn btn-small btn-success" href="{{ URL::to('etapas.edit' . $value->id) }}">Editar</a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </main>
@endsection
