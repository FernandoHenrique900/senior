<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Equipe extends Model
{
    public static function textosEquipe()
    {
        return Cache::remember("senior:equipe:textos",10, function () {
            $texto = Texto::equipe();
            $html = "<div class='text-content'>$texto->texto</div>";
            $pessoas = self::all();
            foreach ($pessoas as $pessoa)
                $html .= "<div class=\"barra-divisora bg-black\"></div>
                        <h2 data-text='$pessoa->id' class='titulos-vermelhos'>$pessoa->nome</h2>
                        <div class='text-content'>$pessoa->texto</div>";
            return $html;
        });
    }
}
