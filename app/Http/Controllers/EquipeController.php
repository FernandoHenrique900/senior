<?php

namespace App\Http\Controllers;

use App\Contato;
use App\Equipe;
use Illuminate\Http\Request;

class EquipeController extends Controller
{
    public function __invoke()
    {
        $texto = Equipe::textosEquipe();
        $contato = Contato::dadosRodape();
        return view("textos",["class_pg"=>"equipe","titulo"=>"Equipe","texto"=>$texto,"contato"=> $contato]);
    }
}
