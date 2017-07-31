<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Texto extends Model
{
    public static function equipe()
    {
        return Cache::remember("senior:texto:equipe",10, function () {
            return self::find(1);
        });
    }

    public static function escritorio()
    {
        return Cache::remember("senior:texto:escritorio",10, function () {
            $textos = self::where('id', '>', 1)->orderBy('id')->get();
            $html = "";
            $i = 0;
            foreach ($textos as $texto) {
                if ($i > 0)
                    $html .= "<div class=\"barra-divisora bg-black\"></div><h2 data-text='$texto->id' class='titulos-vermelhos'>$texto->titulo</h2>";
                $html .= "<div class='text-content'>$texto->texto</div>";
                $i++;
            }
            return $html;
        });
    }
}
