@extends('layouts.app')

@section('content')

    {!! Form::open(['action' => 'EtapasController@store', 'method' => 'POST']) !!}

    <div class="form-group">
        {{ Form::label('descricao', 'Descricao') }}
        {{ Form::text('descricao', '', ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('peca etapa', 'Peca Etapa') }}
        {{ Form::text('peca_etapa', '', ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('audio path', 'Audio Path') }}
        {{ Form::text('audio_path', '', ['class' => 'form-control']) }}
    </div>

    {{ Form::submit('Criar etapa!', ['class' => 'btn btn-primary']) }}

    {!! Form::close()  !!}
@endsection