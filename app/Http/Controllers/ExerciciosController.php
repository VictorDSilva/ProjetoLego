<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Exercicio;

class ExerciciosController extends Controller
{
    public function index(){
        $exercicios = Exercicio::all();
        return view('exercicios.index')->with('exercicios', $exercicios);
    }

    public function create(){

      return view('exercicios.create');
    }

    public function show(){
        //
    }

    public function edit($id){

        $exercicio = Exercicio::findOrFail($id);
        return view('exercicios.edit')->with('exercicio', $exercicio);
    }

    public function update(Request $request, $id){

        $this->validate($request, [
            'descricao' => 'required',
        ]);

        $exercicios = exercicios::findOrFail($id);
        $exercicios->descricao = $request->input('descricao');
        $exercicios->etapa_exercicio = $request->input('etapa_exercicio');
        $exercicios->kit_exercicio = $request->input('kit_exercicio');

        $exercicios->save();

        return redirect('/exercicios')->with('message', 'Alterado com sucesso');
    }

    public function store(Request $request){

        $this->validate($request, [
            'descricao' => 'required',
        ]);

        $exercicio = new Exercicio;
        $exercicio->descricao  = $request->input('descricao');
        //$exercicio->etapa_exercicio  = $request->input('etapa_exercicio');
        //$exercicio->kit_exercicio = $request->input('kit_exercicio');

        $exercicio->save();

        return redirect()->route('/exercicios')->with('message', 'Criado com Sucesso!');
    }

    public function destroy($id){

        $exercicios = exercicios::findOrFail($id);
        $exercicios->delete();
        return redirect()->route('/exercicios')->with('//','Apagado com sucesso!');
    }
}
