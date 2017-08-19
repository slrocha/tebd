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

    }