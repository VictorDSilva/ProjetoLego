<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EtapasController extends Controller
{
    public function index(){
        $exercicios = Product::all();
        return view('exercicios/index')->with('exercicios', $exercicios);
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

        $exercicios->save();

        return redirect('/exercicios')->with('message', 'Alterado com sucesso');
    }

    public function store(Resquest $request){

        $exercicio = new Exercicio;

        $exercicio->descricao  = $request->descricao;

        $exercicio->save();

        return redirect()->route('exercicio/index')->with('message', 'Criado com Sucesso!');
    }

    public function destroy(Request $request, $id){

        $exercicios = exercicios::findOrFail($id);

        $exercicios->delete();

        return redirect()->route('exercicios/index')->with('//','Apagado com sucesso!');
    }
}
