<?php

use Illuminate\Database\Seeder;

class SeedEquipes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('equipes')->insert([
            ['nome' => 'TERESA CRISTINA HENRIQUES DE ABREU',
                'texto' => '<ul><li>Conselheira na Sênior ST Soluções Tributárias em questões jurídicas;</li><li>Advogada;</li><li>Especializada na área de Direito Empresarial;</li><li>Possui mais de 15 anos na liderança e resoluções de casos envolvendo endividamento empresarial e recuperação </li><li>extrajudicial e judicial, utilizando-se do direito de maneira a proporcionar custo benefício aos clientes.</li>
</ul>'],
            ['nome' => 'ANIELLE KARINE MANHANI FELDMAN',
                'texto' => '<ul><li>Conselheira na Sênior ST Soluções Tributárias em questões de tributos e sua aplicabilidade;</li><li>Advogada;</li><li>Especializada em Direito Tributário;</li><li>Possui mais de 10 anos nas soluções de casos tributários, com experiência profissional na Receita Federal e SEMASA, tendo expertise em ações voltadas para auxílio administrativo e jurídico.</li>
</ul>'],
            ['nome' => 'RENÊ RICARDO DE ABREU',
                'texto' => '<ul><li>Diretor Executivo na Sênior ST Soluções Tributárias;</li><li>Economista e Contabilista com especialização em Economia Internacional e Gestão Industrial;</li><li>Possui mais de 10 anos em atuação como Perito Judicial atuante nas áreas Civis e da Fazenda Pública no Fórum da Comarca de Santo André/SP;</li><li>Com mais de 20 anos de experiência em empresas multinacionais (Philips do Brasil e Reckitt Benckiser do Brasil), atuou como Consultor Internacional para a Empresa Alberto Culver USA, no qual foi responsável pela organização e desenvolvimento da área de Supply Chain para a introdução posterior no Brasil da marca de TRESemme, entre outras. 
</li>
</ul>'],
            ['nome' => 'ANTÔNIO CARLOS RUY',
                'texto' => '<ul><li>Gestor na Sênior ST Soluções Tributárias na área de cálculos e avaliações; </li><li>Contabilista com especialização nas áreas bancária e trabalhista;</li><li>Atua a mais de 15 anos na elaboração pareceres extrajudiciais para a assistência técnica a advogados e análises de endividamento;</li><li>Experiência de mais de 25 na área de suprimentos de multinacionais, como Unilever, agregando valor e expertise aos trabalhos desenvolvidos.</li>
</ul>']
        ]);
    }
}
