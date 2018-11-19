@extends('layouts.app')

@section('content')
    <main role="main" class="container">

        <div class="jumbotron">
            <h1>Criar Peça</h1>
            <a class="btn btn-primary btn-success float-right"  href="{{ action('PecaController@getPeca') }}">Incluir da API</a>
            {!! Form::open(['action' => 'PecaController@store', 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
            <div class="form-group col-md-6">
            {{Form::label('Nome', 'Nome da peca')}}
            {{Form::text('nome', '', ['class' => 'form-control'])}}
            </div>
            <div class="form-group col-md-6">
                <label for="url_imagem">Imagem:</label>
                {{Form::file('url_imagem',['onchange'=>"document.getElementById('preview').src = window.URL.createObjectURL(this.files[0])"])}}
            </div>
            <div class="form-group col-md-6">

                <img id="preview" alt="" width="100" height="100" class="rounded" />
            </div>
            <div class="form-group">
            {{Form::submit('Criar', ['class'=> 'btn btn-primary'])}}
            </div>
            {!! Form::close() !!}
        </div>

    </main>

@endsection