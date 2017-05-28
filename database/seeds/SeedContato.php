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
            ["endereco_1" => "Av. Paulo Afonso n° 460",
                "endereco_2" => "Sala 02 Centro - SBCampo - SP",
                'telefone' => "+55 11 4331-1761",
                "email" => "contato@seniorassessoria.com.br",
                "cep"=>"09770-350",
                "maps"=>"<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.128760802472!2d-46.54898408501952!3d-23.707095484610686!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce4228477851ab%3A0x821920c87d341169!2sAv.+Paulo+Afonso%2C+460+-+Nova+Petr%C3%B3polis%2C+S%C3%A3o+Bernardo+do+Campo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1495986793232\" width=\"550\" height=\"290\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>",
                "facebook"=>"https://www.facebook.com/seniorassessoria/"
                ]
        ]);
    }
}
