@extends('layouts.app')

@section('content')
    <main role="main" class="container">
        <div class="jumbotron">
            <h1>Editar Exercícios</h1>
            {!! Form::open(['action' => ['ExercicioController@update',$peca->id], 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('Descricao', 'Descricao do exercicio')}}
                {{Form::text('descricao', $exercicios->descricao, ['class' => 'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('Etapa', 'Etapa do exercicio')}}
                {{Form::text('etapa_exercicio', $exercicios->descricao, ['class' => 'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::label('Kit', 'Kit do exercicio')}}
                {{Form::text('kit_exercicio', $exercicios->descricao, ['class' => 'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::submit('Editar', ['class'=> 'btn btn-primary'])}}
            </div>
            {!! Form::close() !!}
        </div>
    </main>
@endsection