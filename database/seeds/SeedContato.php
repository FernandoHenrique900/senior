<?php

use Illuminate\Database\Seeder;

class SeedContato extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contato')->insert(array(
            [ 'telefone' => "+55 11 4331-1761","email"=>"contato@seniorassessoria.com.br"]
        ));
    }
}
