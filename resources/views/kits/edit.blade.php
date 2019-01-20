

@extends('layouts.app')

@section('content')

            <h1>Editar Peça</h1>
            {!! Form::open(['action' => ['KitController@update',$kit->id], 'method' => 'POST', 'enctype' =>'multipart/form-data']) !!}
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
            <div class="form-group col-md-6" >
                <table class="table">
                    <thead>
                    <tr>
                        <th scope="col">Peça</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody id="kits">
                    @if(count($pecas)> 0)
                        @foreach($pecas as $peca)
                            <tr>

                                <td>{{$peca->nome}}</td>
                                <td><img src="{{$peca->url_imagem}}" height="100" width="100" /></td>
                            </tr>
                        @endforeach

                    @endif

                    </tbody>
                </table>
            </div>

            <div class="form-group">
                <label for="url_imagem">Imagem:</label>
                {{Form::file('url_imagem',['onchange'=>"document.getElementById('preview').src = window.URL.createObjectURL(this.files[0])"])}}
            </div>
            <div class="form-group col-md-6">

                <img id="preview" alt="" src={{$kit->url_imagem}} width="100" height="100" class="rounded" />
            </div>
            {{ Form::hidden('_method', 'PUT') }}
            <div class="form-group">
                <a class="btn btn-primary btn-danger"  href="{{ action('KitController@index') }}">Cancelar</a>
                {{Form::submit('Editar', ['class'=> 'btn btn-primary'])}}
            </div>
            {!! Form::close() !!}

@endsection