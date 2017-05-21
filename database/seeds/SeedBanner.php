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
        DB::table('banners')->insert([
            ['titulo' => "Escritório",
                "texto" => "Em 2003, inicia-se o escritório de advocacia especializado em Direito do Consumidor e Direito Bancário, idealizada pela sócia fundadora Teresa Cristina H. Abreu, no qual exercia a prestação de serviços para empresas que ...",
                "link" => "#escritorio",
                "target"=> "_self"],
            ['titulo' => "Equipe",
                "texto" => "Para atender nossos clientes dentro das premissas de total satisfação, contamos com uma equipe jurídica especializada na área do direito empresarial e tributário, ...",
                "link" => "#equipe",
                "target"=> "_self"],
            ['titulo' => "Soluções Direito Empresarial",
                "texto" => "O Direito Empresarial como um dos segmentos mais estratégicos do direito contemporâneo, o assessoramento empresarial necessita de atuação preventiva, eficaz e experiente para que as empresas passem a ter suas bases alicerçadas para alcançar seus objetivos.",
                "link" => "#solucoes",
                "target"=> "_self"],
            ['titulo' => "Soluções Aspectos Tributários",
                "texto" => "Aspectos Tributários (Tecnologia) por meio da parceria com a empresa Sênior ST para o ressarcimento do ICMS-ST (Portaria CAT 17/99 e 158/15), ICMS Próprio (Portaria ...",
                "link" => "#",
                "target"=> "_blank"],
        ]);
    }
}
