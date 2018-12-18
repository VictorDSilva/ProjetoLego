<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Etapa;

class EtapasController extends Controller
{
    public function index(){
        $etapas = Etapa::all();
        return view('etapas.index')->with('etapas', $etapas);
    }

    public function create(){

        return view('etapas.create');
    }

    public function show(){
        //
    }

    public function edit($id){

        $etapa = Etapa::findOrFail($id);
        return view('etapas.edit')->with('etapa', $etapa);
    }

    public function update(Request $request, $id){

        $request->validate([
            'descricao' => 'required',
            'numero_etapa' => 'required',
            'webcam' => 'required',
            'concluido' => 'required',
            'audio_path'=> 'required',
            'tentativas' => 'required'
        ]);

        Etapa::find($id)->update($request->all());

        return redirect()->route('etapas.index')->with('message', 'Atualizado com Sucesso!');

    }

    public function store(Request $request){

        $request->validate([
            'descricao' => 'required',
            'numero_etapa' => 'required',
            'webcam' => 'required',
            'concluido' => 'required',
            'audio_path'=> 'required',
            'tentativas' => 'required'
        ]);

        Etapa::create($request->all());

        return redirect()->route('etapas.index')->with('message', 'Criado com Sucesso!');

    }

    public function destroy($id){

        $etapa = Etapa::findOrFail($id);
        $etapa->delete();
        return redirect()->route('/etapa')->with('//','Apagado com sucesso!');
    }
}
