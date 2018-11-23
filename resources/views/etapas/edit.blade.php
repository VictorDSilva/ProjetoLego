
@extends('layouts.app')

@section('content')


    {{ Form::model($etapa, array('EtapasController@edit' => array('etapas.edit', $etapa->id), 'method' => 'POST')) }}

    {{ Form::open(}}

    <div class="form-group">
        {{ Form::label('descricao', 'Descricao') }}
        {{ Form::text('descricao', $etapa->descricao, array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('peca etapa', 'Peca Etapa') }}
        {{ Form::text('peca_etapa', Input::old('Peca da etapa'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('audio path', 'Audio Path') }}
        {{ Form::text('audio_path', Input::old('Audio da etapa'), array('class' => 'form-control'))}}
    </div>

    {{ Form::hidden('_method', 'PUT') }}
    <div>
        {{ Form::submit('Editar etapa!', array('class' => 'btn btn-primary')) }}
    </div>
    {{ Form::close() }}
