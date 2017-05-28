<?php

namespace App\Http\Controllers;

use App\Contato;
use App\Texto;

class EscritorioController extends Controller
{
    public function __invoke()
    {
        $texto = Texto::escritorio();
        $contato = Contato::dadosRodape();
        return view("textos",["class_pg"=>"escritorio","titulo"=>"Escritório","texto"=>$texto,"contato"=> $contato]);
    }
}
