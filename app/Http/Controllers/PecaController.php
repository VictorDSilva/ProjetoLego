<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Peca;


class PecaController extends Controller
{

    public function index()
    {
        $pecas = Peca::all();
        return view('pecas/index')->with('pecas',$pecas);
    }


    public function create()
    {
        return view('pecas.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required',
            'url_imagem' => 'required'
        ]);


        $peca = new Peca();
        $peca->nome = $request->input('nome');
        $peca->url_imagem = $request->input('url_imagem');


        $peca->save();

        return redirect('/pecas')->with('success', 'Criado com sucesso');
    }


    public function show($id)
    {
        $peca = Peca::find($id);
        return view('pecas.show')->with('peca', $peca);
    }


    public function edit($id)
    {
        $peca = Peca::find($id);
        return view('pecas.edit')->with('peca', $peca);
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nome' => 'required',
            'url_imagem' => 'required'
        ]);



        $peca = Peca::find($id);
        $peca->nome = $request->input('nome');
        $peca->url_imagem = $request->input('url_imagem');


        $peca->save();

        return redirect('/pecas')->with('success', 'Editado com sucesso');
    }


    public function destroy($id)
    {
        $peca = Peca::find($id);
        $peca->delete();
        return redirect('/pecas')->with('success', 'Excluído com sucesso');

    }
}
