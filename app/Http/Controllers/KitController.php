<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kit;

class KitController extends Controller
{

    public function index()
    {
        $kits = Kit::all();
        return view('kits.index')->with('kits', $kits);
    }


    public function create()
    {
        return view('kits.create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'nome' => 'required',
            'url_imagem' => 'required'
        ]);


        $kit = new Kit();
        $kit->nome = $request->input('nome');
        $kit->ano = $request->input('ano');
        $kit->quantidade_pecas = $request->input('quantidade_pecas');
        $kit->url_imagem = $request->input('url_imagem');


        $kit->save();

        return redirect('/kits')->with('success', 'Criado com sucesso');
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //TODO
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'nome' => 'required',
            'url_imagem' => 'required'
        ]);



        $kit = Kit::find($id);
        $kit->nome = $request->input('nome');
        $kit->ano = $request->input('ano');
        $kit->quantidade_pecas = $request->input('quantidade_pecas');
        $kit->url_imagem = $request->input('url_imagem');


        $kit->save();

        return redirect('/kits')->with('success', 'Editado com sucesso');
    }


    public function destroy($id)
    {
        //
    }
}
