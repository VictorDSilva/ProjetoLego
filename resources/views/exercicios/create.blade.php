@extends('layouts.app')

@section('content')

    {!! Form::open(['action' => 'ExerciciosController@store', 'method' => 'POST']) !!}

    <div class="form-group">
        {{ Form::label('descricao', 'Descricao') }}
        {{ Form::text('descricao', '', ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('etapa', 'Etapa') }}
        {{ Form::text('etapa_exercicio', '', ['class' => 'form-control']) }}
    </div>

    <div class="form-group">
        {{ Form::label('kit', 'Kit') }}
        {{ Form::text('kit_exercicio', '', ['class' => 'form-control']) }}
    </div>

    {{ Form::submit('Criar exercicio!', ['class' => 'btn btn-primary']) }}

    {!! Form::close()  !!}
@endsection