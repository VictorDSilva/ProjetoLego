@extends('layouts.app')

@section('content')
    <main role="main" class="container">

        <div class="jumbotron">
            <h1>Criar Peça</h1>

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
            <div>
            <div id="kits" class="form-group col-md-4">
                {{Form::label('Kit', 'Nome do kit')}}

                {!! Form::select('kit',$kits,  null, ['class' => 'form-control']) !!}
                {{--<button type="button" class="btn btn-primary  col-md-2 form-control">+</button>--}}

                </div>

            <div class="form-group">
                <a class="btn btn-primary btn-danger"  href="{{ action('PecaController@index') }}">Cancelar</a>
                <a class="btn btn-primary btn-success"  href="{{ action('PecaController@getPeca') }}">Incluir da API</a>
            {{Form::submit('Criar', ['class'=> 'btn btn-primary'])}}
            </div>
            {!! Form::close() !!}
        </div>

        <script>
           // var element4 = document.createElement("select");
        </script>

    </main>

@endsection