<?php

namespace App\Http\Controllers;

use App\Contato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    public function pagina()
    {
        $contato = Contato::dadosFaleConosco();
        return view("contato",["contato"=>$contato]);
    }

    public function enviarEmail()
    {

    }
}
