@extends('layouts.app')

@section('content')
    <main role="main" class="container">
        <div class="jumbotron">
            <h1>Criar Kit</h1>
            {!! Form::open(['action' => 'KitController@store', 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
            <div class="form-group col-md-6">
                {{Form::label('Nome', 'Nome do Kit')}}
                {{Form::text('nome', '', ['class' => 'form-control'])}}
            </div>
            <div class="form-group col-md-6">
                {{Form::label('Ano', 'Ano do Kit')}}
                {{Form::text('ano', '', ['class' => 'form-control'])}}
            </div>
            <div class="form-group col-md-6">
                {{Form::label('Quantidade de peças', 'Quantidade de peças')}}
                {{Form::text('quantidade_pecas', '', ['class' => 'form-control'])}}
            </div>
            <div class="form-group col-md-6">
                <label for="url_imagem">Imagem:</label>
                {{Form::file('url_imagem',['onchange'=>"document.getElementById('preview').src = window.URL.createObjectURL(this.files[0])"])}}
            </div>
            <div class="form-group col-md-6">

                <img id="preview" alt="" width="100" height="100" class="rounded" />
            </div>
            <div class="form-group col-md-6">
                {{Form::submit('Criar', ['class'=> 'btn btn-primary'])}}
            </div>
            {!! Form::close() !!}
        </div>
    </main>

@endsection