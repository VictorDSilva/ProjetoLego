

@extends('layouts.app')

@section('content')
    <main role="main" class="container">
        <div class="jumbotron">
            <h1>Editar Peça</h1>
            {!! Form::open(['action' => ['KitController@update',$kit->id], 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('Nome', 'Nome da kit')}}
                {{Form::text('nome', $kit->nome, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('Ano', 'Ano do Kit')}}
                {{Form::text('ano',$kit->ano, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('Quantidade de peças', 'Quantidade de peças')}}
                {{Form::text('quantidade_pecas', $kit->quantidade_pecas, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('URL Imagem', 'URL Imagem')}}
                {{Form::text('url_imagem', $kit->url_imagem, ['class' => 'form-control'])}}
            </div>
            {{ Form::hidden('_method', 'PUT') }}
            <div class="form-group">
                {{Form::submit('Editar', ['class'=> 'btn btn-primary'])}}
            </div>
            {!! Form::close() !!}
        </div>
    </main>
@endsection