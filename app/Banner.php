<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    public static function homeBanners()
    {
        $banners_db = self::all();
        for($i=0;$i<2;$i++)
            $banners[$i] = $banners_db[$i];
        $banners[2] = new Banner();
        $banners[2]->titulo = "Soluções";
        $banners[2]->texto = $banners_db[2]->texto."<div class=\"barra-divisora bg-black\"></div>".$banners_db[3]->texto;
        return $banners;
    }

    public function getTextoAttribute($value)
    {
        return $value.$this->montaBtnSaibaMais();
    }

    public function montaBtnSaibaMais()
    {
        if($this->link!=null && $this->target!=null)
           return "<div class='text-right'><a href='$this->link' class='btn' target='$this->target'>Saiba Mais</a></div>";
        else
            return "";
    }
}
