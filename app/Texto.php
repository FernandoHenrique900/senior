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
        return self::where('id','>',1)->get(['titulo','texto']);
    }
}
