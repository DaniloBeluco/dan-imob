<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imoveis;
use App\Cidade;

class ImovelController extends Controller
{
    public function index()
    {

        $dados_imoveis = Imoveis::paginate(6);



        return view('admin.pages.imoveis', ['imoveis' => $dados_imoveis,]);
    }

    public function create()
    {

        return view('admin.pages.cadastrar-imovel');
    }


    public function store(Request $request)
    {

        if ($request->file('foto')->isValid()) {

            $nameFile = random_int(1, 99999) . '.' . $request->foto->extension();

            $request->file('foto')->storeAs('imoveis', $nameFile);

            $data = $request->all();

            $imovel = new Imoveis();

            $imovel->nome = $data['nome'];
            $imovel->descricao = $data['descricao'];
            $imovel->tipo = $data['tipo'];
            $imovel->negocio = $data['negocio'];
            $imovel->cidade_id = $data['cidade'];
            $imovel->bairro = $data['bairro'];
            $imovel->cep = $data['cep'];
            $imovel->rua = $data['rua'];
            $imovel->complemento = $data['complemento'];
            $imovel->valor = $data['valor'];
            $imovel->tamanho = $data['tamanho'];
            $imovel->dormitorios = $data['dormitorios'];
            $imovel->garagens = $data['garagens'];
            $imovel->banheiros = $data['banheiros'];
            $imovel->foto_url = $nameFile;

            $imovel->save();

            return redirect()->route('admin.imoveis');
        }


        dd($request->all());
    }

    public function delete($id)
    {
        $imovel = new Imoveis();
        $imov = $imovel->where('id', $id)->first();

        /* Se não encontrou */
        if (!$imov) {
            return redirect()->back();
        }

        $imov->delete();

        return redirect()->route('admin.imoveis');
    }



    public function edit($id)
    {
        $cidade = new Cidade();
        $cidades = $cidade->all();

        $imovel = new Imoveis();
        $imov = $imovel->where('id', $id)->first();


        /* Se não encontrou */
        if (!$imov) {
            return redirect()->back();
        }




        return view('admin.pages.editar-imovel', ['imoveis' => $imov], ['cidades' => $cidades]);
    }


    public function storeEdit(Request $request)
    {



        if ($request->file('foto')->isValid()) {

            $nameFile = random_int(1, 99999) . '.' . $request->foto->extension();

            $request->file('foto')->store('imoveis');

            $data = $request->all();

            $i = new Imoveis();

            $imovel = $i->where('id', $data['id'])->first();

            $imovel->nome = $data['nome'];
            $imovel->descricao = $data['descricao'];
            $imovel->tipo = $data['tipo'];
            $imovel->negocio = $data['negocio'];
            $imovel->cidade_id = $data['cidade'];
            $imovel->bairro = $data['bairro'];
            $imovel->cep = $data['cep'];
            $imovel->rua = $data['rua'];
            $imovel->complemento = $data['complemento'];
            $imovel->valor = $data['valor'];
            $imovel->tamanho = $data['tamanho'];
            $imovel->dormitorios = $data['dormitorios'];
            $imovel->garagens = $data['garagens'];
            $imovel->banheiros = $data['banheiros'];
            $imovel->foto_url = $nameFile;

            $imovel->update();

            return redirect()->route('admin.imoveis');
        }



        dd($request->all());
    }

    public function show($id)
    {

        $imovel = Imoveis::where('id', $id)->first();


        return view('site.pages.imovel-detalhes', ['imovel' => $imovel ]);
    }
}
