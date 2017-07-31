<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Solucoes extends Model
{

    public static function textosSolucoes()
    {
        return Cache::remember("senior:solucoes:textos",10, function () {
            $textos = self::all();
            $html = "";
            $i = 0;
            foreach ($textos as $texto) {
                if ($i > 0)
                    $html .= "<div class=\"barra-divisora bg-black\"></div>";
                $html .= "<h2 data-text='$texto->id' class='titulos-vermelhos'>$texto->titulo</h2><div class='text-content'>$texto->texto</div>";
                $i++;
            }
            return $html;
        });
    }
}
