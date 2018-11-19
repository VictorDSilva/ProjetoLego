<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\ImageRepository;
use App\Peca;
use App\Kit;


class PecaController extends Controller
{

    public function index()
    {
        $pecas = Peca::all();
        return view('pecas/index')->with('pecas',$pecas);
    }


    public function create()
    {


        return view('pecas.create')->with('kits',$kits);
    }


    public function store(Request $request, ImageRepository $repo)
    {
        $this->validate($request, [
            'nome' => 'required',
            'url_imagem' => 'required'
        ]);

        $peca = Peca::create($request->except('url_imagem'));
        //$peca = new Peca();
        //$peca->nome = $request->input('nome');
        //$peca->url_imagem = $request->input('url_imagem');

        if ($request->hasFile('url_imagem')) {
            $peca->url_imagem = $repo->saveImage($request->url_imagem, $peca->id, 'pecas', 250);
        }


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


    public function update(Request $request, $id, ImageRepository $repo)
    {
        $this->validate($request, [
            'nome' => 'required',
            //'url_imagem' => 'required'
        ]);



        $peca = Peca::find($id);
        $peca->nome = $request->input('nome');
        //$peca->url_imagem = $request->input('url_imagem');
        if ($request->hasFile('url_imagem')) {
            $peca->url_imagem = $repo->saveImage($request->url_imagem, $peca->id, 'pecas', 250);
        }


        $peca->save();

        return redirect('/pecas')->with('success', 'Editado com sucesso');
    }


    public function destroy($id)
    {
        $peca = Peca::find($id);
        $peca->delete();
        return redirect('/pecas')->with('success', 'Excluído com sucesso');

    }

    public function showPeca(Request $request)
    {
        $id = $request->input('id');
        $data = json_decode(file_get_contents("https://rebrickable.com/api/v3/lego/parts/".$id."/?key=".env("API_KEY")));



        $peca = new Peca();
        $peca->id = $data->part_num;
        $peca->nome = $data->name;
        $peca->url_imagem = $data->part_img_url;

        return view('pecas.apicreate')->with('peca', $peca);

    }

    public function getPeca()
    {



        return view('pecas.apiget');

    }

    public function storeAPI(Request $request)
    {


       // $data = json_decode(file_get_contents("https://rebrickable.com/api/v3/lego/parts/".$id."/?key=".env("API_KEY")));
        //$peca = Peca::create($request->except('url_imagem'));
        //$peca = new Peca();
        //$peca->id = $data->part_num;
        //$peca->nome = $data->name;
       // $peca->url_imagem = $data->part_img_url;

        //if ($request->hasFile('url_imagem')) {
        //    $peca->url_imagem = $repo->saveImage($request->url_imagem, $peca->id, 'pecas', 250);
        //}
        $peca = new Peca();
        $peca->nome = $request->input('nome');
        $peca->id = $request->input('id');
        $peca->url_imagem = $request->input('url_imagem');

        $peca->save();

        return redirect('/pecas')->with('success', 'Criado com sucesso');
    }
}
