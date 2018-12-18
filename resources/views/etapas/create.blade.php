@extends('layouts.app')

@section('content')
    <main role="main" class="container">
        <div class="jumbotron">
            <h1>Criar Etapa</h1>
            {!! Form::open(['action' => 'EtapasController@store', 'method' => 'POST']) !!}
            <div class="form-group col-md-6">
                {{Form::label('descricao', 'Descricao') }}
                {{Form::text('descricao', '', ['class' => 'form-control']) }}
            </div>
            <div class="form-group col-md-6">
                {{Form::label('etapa_exercicio', 'Etapa do Exercício') }}
                {{Form::text('etapa_exercicio', '', ['class' => 'form-control']) }}
                {{--select de etapas cadastradas no exercicio (etapas do exercicio)--}}
            </div>
            <div class="form-group col-md-6">
                {{Form::label('peca_etapa', 'Peça Etapa') }}
                {{Form::text('peca_etapa', '', ['class' => 'form-control']) }}
                {{--select de peças cadastradas no kit (peças do kit do exercicio)--}}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('numero_etapa', 'Ordenação etapa') }}
                {{ Form::text('numero_etapa', '', ['class' => 'form-control']) }}
            </div>
            <div class="form-group col-md-6">
                {{Form::checkbox('webcam', 'Webcam', false) }}
                {{Form::label('webcam', 'Acesso a webcam') }}
            </div>
            <div class="form-group col-md-6">
                {{Form::checkbox('concluido', 'concluido', false) }}
                {{Form::label('concluido', 'Etapa concluida') }}
            </div>
            <div class="form-group col-md-6">
                <label for="audio_path">Áudio:</label>
                {{Form::file('audio_path', ['onchange'=>"document.getElementById('preview').src = window.URL.createObjectURL(this.files[0])"])}}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('tentativas', 'Número de tentativas') }}
                {{ Form::text('tentativas', '', ['class' => 'form-control']) }}
            </div>
            <div class="form-group col-md-6">
                <a class="btn btn-primary btn-danger"  href="{{ action('EtapasController@index') }}">Cancelar</a>
                {{Form::submit('Criar', ['class'=> 'btn btn-primary'])}}
            </div>
            {!! Form::close()  !!}
        </div>
    </main>

@endsection
