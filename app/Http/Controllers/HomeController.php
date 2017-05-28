<?php

namespace App\Http\Controllers;

use App\Banner;
use App\Contato;

class HomeController extends Controller
{
    public function homepage()
    {
        $banners = Banner::homeBanners();
        $contato = Contato::dadosRodape();
        return view("home",['banners'=>$banners,"contato"=>$contato]);
    }
}
