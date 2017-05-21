<?php

use Illuminate\Database\Seeder;

class SeedSolucoes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('solucoes')->insert([
            ['titulo' => "Direito Trabalhista",
                "texto" => "<p>Atendemos nossos clientes em consultas trabalhistas com enfoque preventivo, visando evitar contingências, passivos e responsabilidades. Para isso buscamos atualizações constantes repassando aos nossos clientes o que há de mais recente nos entendimentos jurisprudenciais e na legislação aplicada.</p><p>Nos casos contenciosos, trabalhamos em defesa das empresas sempre analisando o beneficio, bem como o impacto sócio/econômico que a demanda possa ter, assegurando o melhor resultado com análises criteriosas de manutenção da demanda.  Com o trabalho preventivo e a melhor defesa nos casos contenciosos, buscamos equalizar as relações do trabalho, assegurando aos profissionais todos os seus direitos e deveres, contudo acompanhando o foco de crescimento e ambições da empresa.</p>"],
            ['titulo' => "Recuperação Judicial",
                "texto" => "<p>Do quanto demanda toda a estrutura organizacional para o cumprimento da Lei 11.101/2005, desde exame de livro, registros de transações, documentos, bem como o plano de recuperação e o rito processual (negociação com os credores, relatórios de viabilidade econômica, assembléias – aprovações tácitas, ordinárias e extraordinárias, dentre outros), atuamos com foco contra o endividamento e reorganização estrutural, com o objetivo de superação da situação de crise econômico-financeira do devedor, promovendo, assim, a preservação da empresa na sua função social e o estímulo à atividade econômica. </p>"],
            ['titulo' => "Recuperação Extrajudicial",
                "texto" => "<p>Com foco no direito bancário e vasto conhecimento no direito do consumidor, assessoramos as empresas nas tratativas junto às instituições financeiras, credores diversos e na reorganização societária (se o caso) gerando a efetiva proteção patrimonial e, por meio de estratégias jurídicas (teses de capitalização, hiposuficiência, endividamentos, dentre outros) com suporte econômico-financeiro (análises e pormenorizações), proporcionamos a viabilidade para que as empresas tenham condições de exercer sua atividade econômica de tal maneira a realocar recursos voltados para a recuperação dos resultados.</p>"],
            ['titulo' => "Direito Tributário",
                "texto" => "<p>Com respostas e providências a tempo, dadas as constantes mudanças e introduções (portarias, convênios, etc...) pertinentes aos tributos, oferecemos aos nossos clientes a possibilidade de ressarcimento de créditos tributários e as informações/sugestões necessárias para adequação nas suas apurações, por meio de teses atuais e inovadoras, sempre ofertando análise SWOT para a tomada de decisão, no intuito de gerar valor por meio do conceito de “cost avoidance” e da aplicação dos próprios fundamentos legais em curso.</p><p>Por meio da parceria com a empresa Sênior ST, no qual disponibiliza a tecnologia aplicada para o ressarcimento do ICMS-ST (Portaria CAT 17/99 e 158/15) através de relatórios específicos (modelo 1 e 3) e arquivos magnéticos (TXT) para validação junto a SEFAZ, bem como monitoramento para agilização dos processos administrativos, a Senior Assessoria muni com expertise jurídica para o devido enquadramento frente as normas e ditames pertinentes à matéria.
</p>"]
        ]);
    }
}
