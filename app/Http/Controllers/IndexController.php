<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imoveis;
use App\Cidade;

class IndexController extends Controller
{
    public function index()
    {
        $imoveis = Imoveis::paginate(9);

        return view('site.pages.index', ['imoveis' => $imoveis,]);
    }
}
