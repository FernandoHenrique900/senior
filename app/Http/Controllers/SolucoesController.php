<?php

namespace App\Http\Controllers;

use App\Contato;
use App\Solucoes;
use Illuminate\Http\Request;

class SolucoesController extends Controller
{
    public function __invoke()
    {
        $texto = Solucoes::textosSolucoes();
        $contato = Contato::dadosRodape();
        return view("textos",["class_pg"=>"solucoes","titulo"=>"Soluções","texto"=>$texto,"contato"=> $contato]);
    }
}
