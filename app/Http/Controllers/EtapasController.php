<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Etapa;

class EtapasController extends Controller
{
    public function index(){
        $etapas = Etapa::all();
        return view('etapas.index/index')->with('etapas', $etapas);
    }

    public function create(){

        return view('etapas.create');
    }

    public function show(){
        //
    }

    public function edit($id){

        $etapa = Etapa::findOrFail($id);
        return view('etapas.edit/index')->with('etapa', $etapa);
    }

    public function update(Request $request, $id){

        $this->validate($request, [
            'descricao' => 'required',
            'audioPath' => 'required'
        ]);

        $etapa = Etapa::findOrFail($id);
        $etapa->descricao = $request->input('descricao');
        $etapa->audioPath = $request->input('audioPath');
        $etapa->peca_etapa= $request->input('peca_etapa');
        $etapa->concluido = $request->input('concluido');


        $etapa->save();

        return redirect('/etapas')->with('message', 'Alterado com sucesso');
    }

    public function store(Resquest $request){

        $this->validate($request, [
            'descricao' => 'required',
            'audioPath' => 'required'
        ]);

        $etapa = new Etapa;
        $etapa->descricao  = $request->input('descricao');
        $etapa->audioPath  = $request->input('audioPath');
        $etapa->peca_etapa  = $request->input('peca_etapa');
        $etapa->concluido  = $request->input('concluido');

        $etapa->save();

        return redirect()->route('etapa/index')->with('message', 'Criado com Sucesso!');
    }

    public function destroy($id){

        $etapa = Etapa::findOrFail($id);
        $etapa->delete();
        return redirect()->route('exercicios/index')->with('//','Apagado com sucesso!');
    }
}
