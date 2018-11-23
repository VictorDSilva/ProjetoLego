@extends('layouts.app')

@section('content')

<div class="container">


    <h1>Exercícios</h1>

    <table class="table"></table>
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <td>ID</td>
            <td>Descrição</td>
            <td>Etapa</td>
            <td>Kit</td>
        </tr>
        </thead>
        <tbody>
        @foreach($exercicios as $exercicio => $value)
            <tr>
                <td>{{ $value->id }}</td>
                <td>{{ $value->descricao }}</td>
                <td>{{ $value->etapa_exercicio }}</td>
                <td>{{ $value->exercicio_exercicio }}</td>
                <td><a class="btn btn-small btn-success" href="{{ URL::to('exercicios.edit' . $value->id) }}">Editar</a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
