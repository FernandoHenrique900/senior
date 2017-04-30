<?php

use Illuminate\Database\Seeder;

class SeedTextos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('textos')->insert(array(
            [ 'titulos' => "","textos"=>""],
            [ 'titulos' => "","textos"=>""],
            [ 'titulos' => "","textos"=>""],
            [ 'titulos' => "","textos"=>""],
        ));
    }
}
