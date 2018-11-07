@extends('layouts.app')

@section('content')
    <main role="main" class="container">
        <div class="jumbotron">
            <h1>Criar Kit</h1>
            {!! Form::open(['action' => 'KitController@store', 'method' => 'POST']) !!}
            <div class="form-group">
                {{Form::label('Nome', 'Nome do Kit')}}
                {{Form::text('nome', '', ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('Ano', 'Ano do Kit')}}
                {{Form::text('ano', '', ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('Quantidade de peças', 'Quantidade de peças')}}
                {{Form::text('quantidade_pecas', '', ['class' => 'form-control'])}}
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