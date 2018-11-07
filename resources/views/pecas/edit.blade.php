

@extends('layouts.app')

@section('content')
    <main role="main" class="container">
        <div class="jumbotron">
            <h1>Editar Peça</h1>
            {!! Form::open(['action' => ['PecaController@update',$peca->id], 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('Nome', 'Nome da peca')}}
                {{Form::text('nome', $peca->nome, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('URL Imagem', 'URL Imagem')}}
                {{Form::text('url_imagem', $peca->url_imagem, ['class' => 'form-control'])}}
            </div>
            {{ Form::hidden('_method', 'PUT') }}
            <div class="form-group">
                {{Form::submit('Editar', ['class'=> 'btn btn-primary'])}}
            </div>
            {!! Form::close() !!}
        </div>
    </main>
@endsection