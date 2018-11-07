@extends('layouts.app')

@section('content')
    <main role="main" class="container">
        <div class="jumbotron">
            <h1>Criar Peça</h1>
            {!! Form::open(['action' => 'PecaController@store', 'method' => 'POST']) !!}
            <div class="form-group">
            {{Form::label('Nome', 'Nome da peca')}}
            {{Form::text('nome', '', ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
            {{Form::label('URL Imagem', 'URL Imagem')}}
            {{Form::text('url_imagem', '', ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
            {{Form::submit('Criar', ['class'=> 'btn btn-primary'])}}
            </div>
            {!! Form::close() !!}
        </div>
    </main>

@endsection