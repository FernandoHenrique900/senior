<?php

namespace App\Http\Controllers;

use App\Contato;
use App\Mail\EmailContato;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    public function pagina()
    {
        $contato = Contato::dadosFaleConosco();
        return view("contato",["contato"=>$contato]);
    }

    public function enviarEmail(Request $request)
    {
        $nome = $request->input('nome');
        $email = $request->input('email');
        $msg = $request->input('mensagem');
        if ($msg != null) {
            Mail::to("luiz.manhani@gmail.com")->send(new EmailContato($nome, $email, $msg));
            if(count(Mail::failures()) > 0) {
                $msg_email = "Não foi possível enviar a mensagem, tente novamente mais tarde.";
                $classe_bootstrap = "danger";
            }else{
                $msg_email = "Mensagem enviada com sucesso.";
                $classe_bootstrap = "success";
            }
        } else
            return redirect()->back()->withInput();

        $contato = Contato::dadosFaleConosco();
        return view("contato",["contato"=>$contato,"classe_bootstrap"=>$classe_bootstrap,"msg_email"=>$msg_email]);
    }
}
