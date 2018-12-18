

@extends('layouts.app')

@section('content')
    <main role="main" class="container">
        <div class="jumbotron">
            <h1>Editar Peça</h1>
            {!! Form::open(['action' => ['PecaController@update',$peca->id], 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('Nome', 'Nome da peca')}}
                {{Form::text('nome', $peca->nome, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                <label for="url_imagem">Imagem:</label>
                {{Form::file('url_imagem',['onchange'=>"document.getElementById('preview').src = window.URL.createObjectURL(this.files[0])"])}}
            </div>
            <div class="form-group col-md-6">

                <img id="preview" alt="" src={{$peca->url_imagem}} width="100" height="100" class="rounded" />
            </div>
            {{ Form::hidden('_method', 'PUT') }}
            <div class="form-group">
                <a class="btn btn-primary btn-danger"  href="{{ action('PecaController@index') }}">Cancelar</a>
                {{Form::submit('Editar', ['class'=> 'btn btn-primary'])}}
            </div>
            {!! Form::close() !!}
        </div>
    </main>
@endsection
