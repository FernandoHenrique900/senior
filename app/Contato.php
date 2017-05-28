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
        return self::first(['endereco_1','endereco_2','telefone','email']);
    }
}
