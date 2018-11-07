@extends('layouts.app')

@section('content')

    {{ Form::open(['action' => ['ExerciciosController@store', '$exercicio->id'], 'method' => 'POST'])}}

    <div class="form-group">
        {{ Form::label('descricao', 'Descricao') }}
        {{ Form::text('descricao', Input::old('Descricao do exercicio'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('etapa', 'Etapa') }}
        {{ Form::text('etapa', Input::old('Etapa do exercicio'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('kit', 'Kit') }}
        {{ Form::text('kit', Input::old('Kit do exercicio'), array('class' => 'form-control'))}}
    </div>

    {{ Form::submit('Criar exercicio!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
