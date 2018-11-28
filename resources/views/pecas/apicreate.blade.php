

@extends('layouts.app')

@section('content')
    <main role="main" class="container">
        <div class="jumbotron">
            <h1>Salvar Peça</h1>
            {!! Form::open(['action' => ['PecaController@storeAPI', $peca->id], 'method' => 'POST']) !!}
            <div class="form-group col-md-6">
                {{Form::label('Identificador', 'Identificador da peca')}}
                {{Form::text('id', $peca->id, ['class' => 'form-control'])}}
            </div>
            <div class="form-group col-md-6">
                {{Form::label('Nome', 'Nome da peca')}}
                {{Form::text('nome', $peca->nome, ['class' => 'form-control'])}}
            </div>
            {{--<div class="form-group">--}}
                {{--<label for="url_imagem">Imagem:</label>--}}
                {{--{{Form::file('url_imagem',['onchange'=>"document.getElementById('preview').src = window.URL.createObjectURL(this.files[0])"])}}--}}
            {{--</div>--}}
            <div class="form-group col-md-6">

                <img id="preview" name="url_imagem" alt="" src={{$peca->url_imagem}} width="100" height="100" />
                {{Form::text('url_imagem', $peca->url_imagem, ['class' => 'form-control ' ,'readonly'])}}
            </div>

            <div class="form-group">
                <a class="btn btn-primary btn-danger"  href="{{ action('PecaController@index') }}">Cancelar</a>
                {{Form::submit('Salvar', ['class'=> 'btn btn-primary'])}}
            </div>
            {!! Form::close() !!}
        </div>
    </main>
@endsection