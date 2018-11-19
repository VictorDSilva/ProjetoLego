
@extends('layouts.app')

@section('content')
    <main role="main" class="container">
        <div class="jumbotron">
            <h1>Verificar Peça</h1>
            {!! Form::open(['action' => ['PecaController@showPeca', 'id'], 'method' => 'POST']) !!}
            <div class="form-group col-md-4">
                {{Form::label('Identificador', 'Identificador da peca:')}}
                {{Form::text('id', '', ['class' => 'form-control'])}}
            </div>

            <div class="form-group">
                {{Form::submit('Verificar', ['class'=> 'btn btn-primary'])}}
            </div>
            {!! Form::close() !!}
        </div>
    </main>
@endsection