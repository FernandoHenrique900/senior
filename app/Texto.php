<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Texto extends Model
{
    public static function equipe()
    {
        return self::find(1);
    }

    public static function escritorio()
    {
        $textos = self::where('id','>',1)->orderBy('id')->get();

        $html ="";
        $i=0;
        foreach ($textos as $texto)
        {
            if($i>0)
                $html .= "<div class=\"barra-divisora bg-black\"></div><h2 data-text='$texto->id' class='titulos-vermelhos'>$texto->titulo</h2>";
            $html .="<div class='text-content'>$texto->texto</div>";
            $i++;
        }
        return $html;
    }
}
