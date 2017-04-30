<?php

use Illuminate\Database\Seeder;

class SeedBanner extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banner')->insert(array(
            [ 'titulo' => "direito Empresarial","texto"=>"Textos","link"=>"link"],
            [ 'titulo' => "direito Empresarial","texto"=>"Textos","link"=>"link"],
            [ 'titulo' => "direito Empresarial","texto"=>"Textos","link"=>"link"],
        ));
    }
}
