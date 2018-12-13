@extends('layouts.app')

@section('content')

    <div class="container">


        <h1>Etapas</h1>

        <table class="table"></table>
        @if (Session::has('message'))
            <div class="alert alert-info">{{ Session::get('message') }}</div>
        @endif

        <table class="table table-striped table-bordered">
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
@endsection
