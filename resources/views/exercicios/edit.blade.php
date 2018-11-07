
@extends('layouts.app')

@section('content')


    {{ Form::model($exercicio, array('ExerciciosController@edit' => array('exercicios.edit', $exercicio->id), 'method' => 'POST')) }}

    {{ Form::open(}}

    <div class="form-group">
        {{ Form::label('descricao', 'Descricao') }}
        {{ Form::text('descricao', $exercicio->descricao, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('etapa', 'Etapa') }}
        {{ Form::text('etapa', $exercicio->etapa_exercicio, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('kit', 'Kit') }}
        {{ Form::text('kit', $exercicio->kit_exercicio, array('class' => 'form-control'))}}
    </div>

    {{ Form::hidden('_method', 'PUT') }}
    <div>
    {{ Form::submit('Editar exercicio!', array('class' => 'btn btn-primary')) }}
    </div>

    {{ Form::close() }}
