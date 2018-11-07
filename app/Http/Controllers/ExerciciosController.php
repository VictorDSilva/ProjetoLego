<?php

namespace App\Http\Controllers;

use App\Exercicio;
use Illuminate\Http\Request;

class ExerciciosController extends Controller
{
    public function index(){
        $exercicios = Product::all();
        return view('exercicios.index')->with('exercicios', $exercicios);
    }

    public function create(){

      return view('exercicios.create');
    }

    public function show(){
        //
    }

    public function update(Request $request, $id){

        $exercicios = exercicios::findOrFail($id);
        $exercicios->descricao = $request->input('descricao');
        $exercicios->etapa_exercicio = $request->input('etapa_exercicio');
        $exercicios->kit_exercicio = $request->input('kit_exercicio');

        $exercicios->save();

        return redirect('/exercicios')->with('message', 'Alterado com sucesso');
    }

    public function store(Resquest $request){

        $exercicio = new Exercicio;

        $exercicio->descricao  = $request->descricao;
        $exercicio->etapa_exercicio  = $request->etapa_exercicio;
        $exercicio->kit_exercicio = $request->kit_exercicio;

        $exercicio->save();

        return redirect()->route('exercicios.index')->with('message', 'Criado com Sucesso!');
    }

    public function destroy(Request $request, $id){
        $exercicios = exercicios::findOrFail($id);

        $exercicios->delete();

        return redirect()->route('exercicios.index')->with('//','Apagado com sucesso!');
    }

}
