@extends('layouts.app')

@section('content')

    {{ Form::open(['action' => ['EtapasController@store', '$etapa->id'], 'method' => 'POST'])}}

    <div class="form-group">
        {{ Form::label('descricao', 'Descricao') }}
        {{ Form::text('descricao', Input::old('Descricao da etapa'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('peca etapa', 'Peca Etapa') }}
        {{ Form::text('peca_etapa', Input::old('Peca da etapa'), array('class' => 'form-control')) }}
    </div>

    <div class="form-group">
        {{ Form::label('audio path', 'Audio Path') }}
        {{ Form::text('audio_path', Input::old('Audio da etapa'), array('class' => 'form-control'))}}
    </div>

    {{ Form::submit('Criar etapa!', array('class' => 'btn btn-primary')) }}

    {{ Form::close() }}
