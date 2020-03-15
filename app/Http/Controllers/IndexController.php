<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imoveis;
use App\Cidade;

class IndexController extends Controller
{
    public function index()
    {
        $imoveis = Imoveis::join('cidade', 'imoveis.cidade_id', '=', 'cidade.id')->select('imoveis.*', 'cidade.nome as cidade')->paginate(12);

        $cidades = Cidade::all();

        return view('site.pages.index', ['imoveis' => $imoveis, 'cidades' => $cidades,]);
    }

    public function imoveisPage()
    {

        if (!empty($_GET['dormitorios']) && empty($_GET['banheiros']) && empty($_GET['banheiros'])) {

            $imoveis = Imoveis::join('cidade', 'imoveis.cidade_id', '=', 'cidade.id')->select('imoveis.*', 'cidade.nome as cidade')->where('dormitorios', '=', $_GET['dormitorios'])->paginate(12);
        } else if (!empty($_GET['banheiros'])) {

            $imoveis = Imoveis::join('cidade', 'imoveis.cidade_id', '=', 'cidade.id')->select('imoveis.*', 'cidade.nome as cidade')->where('banheiros', '=', $_GET['banheiros'])->paginate(12);
        } else {

            $imoveis = Imoveis::join('cidade', 'imoveis.cidade_id', '=', 'cidade.id')->select('imoveis.*', 'cidade.nome as cidade')->paginate(12);
        }

        $cidades = Cidade::all();

        return view('site.pages.imoveis-page', ['imoveis' => $imoveis, 'cidades' => $cidades,]);
    }
}
