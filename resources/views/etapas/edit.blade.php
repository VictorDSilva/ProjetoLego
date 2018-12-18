@extends('layouts.app')

@section('content')
    <main role="main" class="container">
        <div class="jumbotron">
            <h1>Editar Etapas</h1>
            {!! Form::open(['action' => ['EtapasController@update',$etapas->id], 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
            <div class="form-group">
                {{Form::label('Descricao', 'Descricao da etapa')}}
                {{Form::text('descricao', $etapas->descricao, ['class' => 'form-control'])}}
            </div>
            <div class="form-group">
                {{Form::label('Peca', 'Peca da etapa')}}
                {{Form::text('peca_etapa', $etapas->peca_etapa, ['class' => 'form-control'])}}
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
            <div class="form-group">
                <label for="audio_path">Audio:</label>
                {{Form::file('audio_path',['onchange'=>"document.getElementById('preview').src = window.URL.createObjectURL(this.files[0])"])}}
            </div>
            <div class="form-group col-md-6">
                {{ Form::label('tentativas', 'Número de tentativas') }}
                {{ Form::text('tentativas', '', ['class' => 'form-control']) }}
            </div>
            <div class="form-group col-md-6">
                <audio controls>
                    <source id = "preview" alt="" src="{{$etapas->audio_path}}" type="audio/mp3">
                    <source src="horse.mp3" type="audio/mpeg">
                </audio>
            </div>
            {{ Form::hidden('_method', 'PUT') }}
            <div class="form-group">
                {{Form::submit('Editar', ['class'=> 'btn btn-primary'])}}
            </div>
            {!! Form::close() !!}
        </div>
    </main>
@endsection
