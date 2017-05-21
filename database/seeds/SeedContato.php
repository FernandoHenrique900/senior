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
        DB::table('contatos')->insert([
            ["endereco_1" => "Avenida Paulo Afonso, 460 Sala 02",
                "endereco_2" => "Centro – São Bernardo do Campo/SP CEP 09770-350",
                'telefone' => "+55 11 4331-1761", "email" => "contato@seniorassessoria.com.br"]
        ]);
    }
}
