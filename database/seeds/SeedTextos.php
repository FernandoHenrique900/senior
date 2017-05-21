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
        DB::table('textos')->insert([
            [ 'id'=>1,
               'titulo' => "EQUIPE",
                "texto"=>"<p>Para atender nossos clientes dentro das premissas de total satisfação, contamos com uma equipe jurídica especializada na área do direito empresarial e tributário, bem como, equipe de consultores econômico-financeiro, proporcionando assim, um completo suporte ao empresário.</p>"],
            [ 'id'=>2,
                'titulo' => "ESCRITÓRIO",
                "texto"=>"<p>Em 2003, inicia-se o escritório de advocacia especializado em Direito do Consumidor e Direito Bancário, idealizada pela sócia fundadora Teresa Cristina H. Abreu, no qual exercia a prestação de serviços para empresas que tinham tais demandas.</p><p>Tão logo, em 2006, diante da oportunidade de ampliar seu ramo de atuação, direcionou-se para questões empresariais, tais como contencioso e trabalhista, sem deixar de aprofundar-se nas questões extrajudiciais e judiciais quanto ao auxilio as empresas em termos de soluções com endividamentos, promovendo assim, a recuperação extrajudicial das empresas em dificuldades econômico-financeira.</p><p>Em 2010, já consolidado o Direito Empresarial como área atuante do escritório, firmou parceria com a empresa Sênior ST - especializada em análises e pormenorizações (cálculos judiciais) voltadas para as instruções processuais, bem como análises de cunho econômico-financeiro e contábil.</p> <p>Hoje, dado a estrutura alcançada, a Sociedade de Advogados oferece a segurança quanto às questões jurídicas empresariais e as técnicas inerentes (análises e cálculos judiciais) de maneira integrada e autônoma, complementando-se em si, para a excelência dos serviços prestados aos clientes.</p>"],
            [ 'id'=>3,
                'titulo' => "Missão",
                "texto"=>"<p>Proporcionar soluções em âmbito jurídico, com acuracidade à matéria de direito aplicada, visando a excelência em prestação de serviços.</p>"],
            [ 'id'=>4,
                'titulo' => "Visão",
                "texto"=>"<p>Ser uma das principais Sociedades de Advogados, sendo referência no mercado atuante, tendo como foco o Direito Empresarial.</p>"],
            [ 'id'=>5,
                'titulo' => "Valores",
                "texto"=>"<p>Fundamentado em princípios de transparência e ética na condução dos trabalhos, proporcionando na prestação de serviços a segurança, qualidade, eficácia e o máximo respeito às partes.</p>"]
        ]);
    }
}
