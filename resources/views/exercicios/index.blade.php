@extends('layouts.app')

@section('content')


    <h1>Exercícios</h1>
    <table class="table"></table>
    @if (Session::has('message'))
        <div class="alert alert-info">{{ Session::get('message') }}</div>
    @endif

    <table class="table">
        <thead>
        <a class="btn btn-primary btn-success float-right" href="exercicios/create">Incluir</a>
        <tr>
            <th scope="col">id</th>
            <th scope="col">Descrição</th>
            <th scope="col">Kit</th>
            <th scope="col"></th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        @foreach($exercicios as $exercicio)
            <tr>
                <td>{{ $exercicio->id }}</td>
                <td>{{ $exercicio->descricao }}</td>
                <td>{{ $exercicio->exercicio_exercicio }}</td>
                <td><a class="btn btn-sm  btn-warning float-right"  href="{{route('exercicios.edit', $exercicio->id)}}">Editar</a>
                </td>
                <td>{!!Form::open(['action' => ['ExercicioController@destroy', $exercicio->id],'method' => 'POST', 'class' => 'float-left', 'onsubmit' => 'return confirm("Você tem certeza?")'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Deletar', ['class' => 'btn btn-danger btn-sm '])}}
                    {!! Form::close() !!}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

@endsection
