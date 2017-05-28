<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    public static function dadosRodape()
    {
        return self::first(['telefone','email']);
    }

    public static function dadosFaleConosco()
    {
        return self::first(['endereco_1','endereco_2','telefone','email','facebook','maps','cep']);
    }

    public function facebookBtn()
    {
        return "<span class='icon-facebook-official'></span><a href='$this->facebook'>".str_replace("https://www.","",$this->facebook)."</a>";
    }
}
