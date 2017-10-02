<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InformacaoController extends Controller
{
   
    public function index()
    {
        return view ('informacao.homeTebd');
    }

    public function atividades()
    {
        return view ('informacao.atividades');
    }

    public function documentacao()
    {
        return view ('informacao.documentacao');
    }

    public function estrategias()
    {
        return view ('informacao.estrategias');
    }

    public function documentacao_p1()
    {
        return view ('informacao.documentacaop1');
    }

    public function estrategia_p1()
    {
        return view ('informacao.estrategiap1');
    }
}