@extends('layouts.app')

@section('content')
    <main role="main" class="container">
        <div class="jumbotron">
    {!! Form::open(['action' => 'EtapaController', 'method' => 'POST']) !!}

    <div class="form-group col-md-6">
        {{ Form::label('descricao', 'Descricao') }}
        {{ Form::text('descricao', '', ['class' => 'form-control']) }}
    </div>

    <div class="form-group col-md-6">
        {{ Form::label('peca etapa', 'Peca Etapa') }}
        {{ Form::text('peca_etapa', '', ['class' => 'form-control']) }}
        {{--select de peças cadastradas no kit (peças do kit do exercicio)--}}
    </div>

    <div class="form-group col-md-6">
        {{ Form::label('numero_etapa', 'Ordenação etapa') }}
        {{ Form::text('numero_etapa', '', ['class' => 'form-control']) }}
    </div>

    <div class="form-group col-md-6">
        {{ Form::checkbox('webcam', 'webcam', false) }}
        {{ Form::label('webcam', 'Acesso a webcam') }}
    </div>


    {{ Form::submit('Criar etapa!', ['class' => 'btn btn-primary']) }}

    {!! Form::close()  !!}
        </div>
    </main>
@endsection