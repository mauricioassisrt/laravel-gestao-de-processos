<?php

use Illuminate\Database\Seeder;

class ContractTermsTableSeeder extends Seeder
{
    public function run()
    {
        foreach ($this->getData() as $item) {
            \App\Models\Term::create($item);
        }
    }

    private function getData()
    {
        return [
            [
                'content' => "
                <p style=\"text-align: center;\">“REGIMENTO INTERNO”<br><br>LOOK SEA CONSULTORIA E INVESTIMENTOS AUTOFINANCIAMENTO LTDA.</p>
                <p style=\"text-align: left;\"><br>CAPÍTULO I – DAS ATRIBUIÇÕES REGIMENTAIS.<br>- Art. 1º – Este Regimento Interno estabelece processos e procedimentos necessários ao funcionamento e administração da<br>LOOK SEA e regula-se pelas disposições legais e decisões tomadas pelos órgãos que
                    a compõem, de acordo com o seu<br>Regimento Interno.<br>CAPÍTULO II – ADMISSÃO DE SÓCIOS.<br>- Art. 2º –&nbsp;O processo de filiação à LOOK SEA se efetivará da seguinte forma:<br>&nbsp;I -&nbsp;o&nbsp;candidato preenche a Proposta, para ser selecionado;<br>II
                    -&nbsp;ser&nbsp;aprovado pela Diretoria;<br>III - subscrever as do Capital Social<br>Para associar-se, o interessado deverá ter capacidade plena e preencher a respectiva proposta de adesão fornecida pela<br>LOOK SEA, devendo providenciar os seguintes
                    documentos: Carteira de Identidade, CPF, Comprovante de residência<br>(cópias recentes e legíveis).<br>Parágrafo único – Pode filiar-se à LOOK SEA, além dos seus fundadores, as pessoas que:<br>I - Estejam no pleno gozo dos seus direitos civis;<br>II
                    - Residam em qualquer parte do Território Nacional;<br>III - concordem e satisfaça as exigências do presente Regimento Interno;<br>- Art. 3º – Cabe à Diretoria decidir sobre o ingresso do candidato, examinando sua ficha cadastral, inclusive quanto
                    à
                    <br>quantidade e as condições de pagamento das quotas do capital social da LOOK SEA que o candidato pretenda subscrever.<br>Tendo subscrito as quotas do capital, na forma aprovada pela Diretoria Executiva, o candidato assinará, juntamente com o<br>representante
                    legal da LOOK SEA, o termo e a ficha de adesão. Cumpridas essas formalidades, o sócio admitido na LOOK<br>SEA, adquire todos os direitos e assume todos os deveres e obrigações decorrentes da Lei 5764/71, do Regimento Interno<br>vigente, do Regimento
                    Interno e das deliberações das Assembléias Gerais e da Diretoria Executiva. Caso o interessado seja<br>membro de&nbsp;outras redes de autofinanciamento, deverá apresentar carta de referências por ela(s) expedida(s).<br>Parágrafo Primeiro – O sócio
                    autoriza expressamente a LOOK SEA, assim como também autoriza (n) o(s) Interveniente(S)<br>AVALISTA(S), se for o caso, em caráter irrevogável e irretratável, a informar e consultar informações referentes ao(s)<br>mesmo(s) ao/no Sistema de Central
                    de Risco — SCR, do Banco Central do Brasil — BACEN, ainda que em momento<br>anterior à celebração desta associação, aos/nos Bancos de Dados de proteção ao crédito e Câmaras de<br>Liquidação/Intermediação do Mercado Financeiro, bem como levá-la a registro,
                    incluindo seus eventuais anexos, em<br>quaisquer registros públicos e instituições auxiliares do Mercado Financeiro, inclusive a Câmaras de Custódia e Liquidação.<br>Parágrafo segundo – Sendo o caso, o(s) INTERVENIENTE(S) AVALISTA(S), e se for (em)
                    casado(s), seu(s) cônjuge(s),<br>qualificado(s) no QUADRO, comparece(m) neste ato, para anuir expressamente com todos os termos acordados entre o(a)<br>SÓCIO/ASSOCIADO e a LOOK SEA AUTOFINANCIAMENTO e, responsabiliza(m)-se solidariamente e de forma<br>incondicional
                    por todas as obrigações assumidas pelo(a) SÓCIO/ASSOCIADO, inclusive pelo pagamento do principal,<br>encargos, cominações legais, multas e eventuais despesas decorrentes deste instrumento.<br>Parágrafo Terceiro – Declaram, ainda,&nbsp;o(s) INTERVENIENTE(S)
                    AVALISTA(S), que renuncia(m) a qualquer beneficio de<br>ordem ou divisão, especialmente os que tratam os artigos 333, parágrafo único, 827, 829, 830, 835, 837, 838 e 839 do<br>Código Civil Brasileiro, não comportando exoneração em nenhuma hipótese,
                    perdurando até a liquidação de todas as<br>obrigações do (a) SÓCIO/ASSOCIADO.<br>- Art. 4º – A LOOK SEA, tem por objetivo a sociedade de pessoas que reciprocamente se obriguem a contribuir para propiciar<br>a aquisição de Veículos Automotores novos
                    ou usados a partir do ano de 2010 em diante para uso dos seus sócios, através<br>dos programas definidos neste Regimento Interno, e outros de interesse dos associados, quer sejam governamentais ou<br>privados;<br>- Art. 5º – O sócio receberá periodicamente
                    informativos sobre futuros projetos, resultados de apuração e novidades da LOOK<br>SEA Autofinanciamento.<br>- Art. 6º – É vedado ao sócio utilizar-se do nome da LOOK SEA para mercantilizar em benefício próprio ou de terceiros; levar<br>qualquer cliente
                    a se desinteressar pelos serviços da LOOK SEA; falar em nome da LOOK SEA, ou ainda, interferir junto aos<br>sócios, com a finalidade de obter vantagens pessoais; denegrir a imagem da LOOK SEA ou de quaisquer de seus membros.<br>CAPÍTULO III – DA SELEÇÃO.<br>-
                    Art. 7º –&nbsp;Respeitadas as condições estabelecidas, a seleção consiste na identificação dos Associados classificados e que<br>terão preferência para indicar a compra pela LOOK SEA, quando for o caso, de bem automotor (carro, moto, lancha,&nbsp;jet&nbsp;sky,<br>maquinais
                    rurais e agrícolas dentre outros) de sua livre escolha, por preço igual ou inferior ao Capital por cada um subscrito,<br>com as variações previstas no parágrafo único do Artigo 30 deste Atual Regimento Interno, para preliminar constituição de<br>garantia
                    em favor da LOOK SEA em regime de instrumento de alienação fiduciária, até a integralização do Capital Subscrito.<br>&nbsp;- Art. 8° –&nbsp;A seleção será processada com base nos dados financeiros apurados a partir do 5º (quinto) dia útil subsequente<br>ao
                    vencimento da cota do mês, pela Diretoria, devendo ser destinados ao processo os recursos disponíveis da LOOK SEA<br>proveniente da integralização do capital de cada Associado inscrito após cumprimento do estabelecido no Artigo 3º, quando<br>for o
                    caso.
                    <br>Parágrafo Único - Todas as despesas com aquisição de bens automotores, juntos ao órgão fiscalizador, (DETRAN,<br>CONTRAN E DENATRAN) é de responsabilidade do associado, além as taxas tais como Impostos de Transferência de<br>Titularidade Documental,
                    Avaliação, Inclusão de rastreador, seguro prestamista e outras que venham a ser devidas,&nbsp;ou<br>qualquer outro ônus fiscal que incida ou venha a incidir nas operações de crédito ora realizadas,&nbsp;serão de responsabilidade<br>do Associado. Se
                    pagas, pela LOOK SEA, serão deduzidas do Capital Subscrito, significando nessa hipótese, debitado em<br>conta corrente do associado para pagamento juntamente com a amortização das cotas partes, estendendo o prazo do<br>autofinanciamento veicular,
                    respeitando as normas do Regimento Interno.<br>- Art. 11° – Somente poderão ser selecionados, os sócios que estiverem em dia com as mensalidades que integralizam seu<br>Capital Subscrito;<br>Parágrafo único – Concluído o processo de seleção a cada
                    mês, os sócios não classificados serão submetidos a novo<br>processo de seleção no mês seguinte, observado os mesmos critérios.<br>- Art. 12° – O resultado da seleção será proclamado, listado e afixado em cópias nos lugares comumente freqüentados
                    pelos
                    <br>sócios na sede da LOOK SEA, suas filiais, representantes e ainda editado no site&nbsp;<strong>www.lookthesea.com</strong>, até o 5º dia útil da<br>apuração mensal;<br>Parágrafo único – Os sócios selecionados serão comunicados do resultado da classificação
                    e solicitado o comparecimento à<br>LOOK SEA,para análise documental do veículo automotor escolhido pelo mesmo.<br>CAPÍTULO IV – DA CONTAGEM DE PONTOS (%).<br>- Art. 13° -&nbsp;Respeitadas as condições estabelecidas nas Seccionais, os Associados, enquanto
                    se encontrarem na fase<br>anterior a seleção, contarão pontos segundo os critérios definidos nesta seção.<br>- Art.13.1 – A “Oferta de Antecipação de Parcelas”, deverá ser formalizada diretamente no aplicativo, que só poderá ser
                    <br>solicitada após aquisição do bem.<br><strong>- Art. 14º – Estarão participando da seleção mensal, os sócios que tiverem acumulado com a soma das mensalidades<br>pagas, no mínimo o equivalente em prestações a 40% (quarenta por cento) do valor do Capital Subscrito escolhido,<br>acrescidos das Taxas Contratuais.</strong><br>Parágrafo
                    Primeiro –&nbsp;A contagem de pontos para fins de seleção é feita pelo maior percentual de amortização do valor do<br>capital liquido subscrito.<br>Parágrafo Segundo - Se houver empate na contagem de pontos, adotar-se-á, o seguinte critério de desempate:<br>1º
                    Maior percentual atingido com a soma das mensalidades já pagas e a Oferta de dentro de cada Faixa de Pontuação;<br>2º Menor&nbsp;valor de Capital Subscrito;<br>3º Matrícula do sócio mais antigo.<br>Parágrafo Terceiro – Numa eventual opção por compra
                    de veículo automotor usado somente será liberado o Capital<br>Subscrito para compra de veículos automotores quitados e totalmente documentados, devidamente aprovados pelo<br>Departamento Jurídico da LOOK SEA, possibilitando assim a Alienação Fiduciária
                    junto a LOOK SEA.<br>- Art. 15° – Os sócios selecionados em cada mês pelo processo de classificação previsto nesta seção passarão para a fase<br>de atendimento.<br>&nbsp;<strong>- Art. 16° –&nbsp;O sócio poupador que completar em parcelas mensais o equivalente a 40% (quarenta por cento) do<br>Capital Subscrito, acrescido dos encargos contratuais correspondentes, em dia com suas mensalidades, num prazo<br>não inferior a 6 (seis) meses, será selecionado automaticamente para a etapa de atendimento para liberação do bem<br>automotor. OBS: lembrando que de hipótese alguma não aceitamos adiamento de parcelas, sem antes pegar o bem.</strong><br>&nbsp;Parágrafo
                    Único - Em função das disponibilidades, e em havendo mais de um Associado selecionado na forma do “caput”<br>deste artigo, será adotado o critério de preferência estabelecido no parágrafo segundo do Artigo 14.<br>&nbsp;CAPÍTULO V – DO ATENDIMENTO.<br>-
                    Art. 17° – Respeitadas as condições estabelecidas nas Seccionais, a LOOK SEA atribuirá, para atender aos sócios<br>selecionados em cada mês, o valor máximo de suas disponibilidades correspondentes ao Capital Subscrito e integralizado<br>pelos sócios.<br>-
                    Art. 18° – O valor total do investimento, escolhido pelo sócio, com concordância da LOOK SEA, ficará limitado ao valor<br>máximo do capital subscrito, com as variações previstas neste Regimento Interno, subordinado, porém ao valor da avaliação<br>procedida
                    pela LOOK SEA de forma a preservar a garantia da aplicação.<br>Parágrafo Primeiro – Quando a avaliação do veículo automotor for inferior, o valor excedente servirá para abater tantas<br>parcelas for possível, do final do plano escolhido;<br>Parágrafo
                    Segundo&nbsp;– Se o valor do investimento escolhido for superior ao valor do capital subscrito, o sócio, querendo,<br>poderá subscrever e imediatamente integralizar a diferença.<br>- Art. 19° – O investimento a ser feito por escolha do sócio selecionado
                    em nome da LOOK SEA, será dado&nbsp;em Alienação<br>Fiduciária&nbsp;ao sócio, nas condições a seguir estabelecidas pelo restante do prazo que, adicionado a quantidade de meses já<br>decorridos a partir da admissão ao quadro de sócios, resulte na soma
                    do número de meses escolhido para integralização do<br>capital.<br>CAPÍTULO VI – DA ALIENAÇÃO FIDUCIÁRIA.<br>- Art. 20° –&nbsp;Ao indicar o bem automotor de sua livre escolha, e estando o mesmo livre e desembaraçado para tanto, o<br>Associado autorizará
                    sua aquisição pela LOOK SEA, através de Instrumento de Alienação Fiduciária, imitindo-o, no mesmo<br>ato, na posse do bem automotor. Na qual o Associado deverá respeitar as parcelas de integralização do Capital Social,<br>liquidando-as pontualmente,
                    acrescidas dos encargos previstos neste regimento interno.<br>- Art. 21° - O sócio será imitido no ato da posse direta do veículo automotor, no ato da assinatura do documento de compra e<br>venda com a garantia da Alienação Fiduciária, seja por instrumento
                    Público ou Particular e não estará eximido de forma<br>alguma, das obrigações estatutárias, além do pagamento da Taxa de Suporte Administrativo contratada pela LOOK SEA,<br>bem como os Impostos, Taxas e serviços relativos à aquisição do veículo automotor,
                    obrigando-se ainda a instituir um seguro<br>total contra danos que possam vir a alcançar o bem automotor em sua posse.<br>Parágrafo primeiro – É dever do associado, pagar pontualmente todas as parcelas na sua ordem cronológica de vencimento;<br>assumir
                    a guarda e a manutenção do(s) BEM(s), conservando-o(s); pagar todos os tributos , municipais, estaduais e federais<br>inclusive eventuais taxas de licenciamento /DPVAT / Registros /&nbsp;<strong>MULTAS</strong>&nbsp;e quaisquer outros encargos ou
                    despesas que<br>venham a incidir sobre o(s) BEM(s); registrar a garantia de alienação fiduciária junto ao Órgão Competente (ex:DETRAN), no<br>prazo de até 15(quinze) dias a contar da entrega efetiva do veículo automotor ao associado, sob pena de eventualmente<br>sofrer
                    bloqueio na documentação do(s) BEM(s) e ser obrigado(a) arcar com os ônus decorrentes e; ocorrendo atraso no<br>pagamento das parcelas, pagar conforme previsto no Regimento Interno e Termo de Declaração.<br>Parágrafo segundo – O Sócio/Associado Constitui
                    fiduciariamente em favor de LOOK SEA, a título de garantia, o (s)&nbsp;BEM(S)<br>objeto que for apresentado, nos termos da legislação aplicável, transmitindo á LOOK SEA AUTOFINANCIAMENTO o domínio<br>e a posse indireta desse(s) BEM(S) e permanecendo
                    com a posse direta do(s) mesmo(s), declarando ainda estar ciente de<br>que não poderá dispor do(s) BEM(S) sob qualquer forma, sem a expressa anuência da LOOK SEA.<br>Parágrafo terceiro – Reconhece ainda o sócio/associado que a presente negociação
                    e a aquisição&nbsp;do(s) BEN(S) são<br>negócios jurídicos autônomos, portanto, a LOOK SEA não se responsabiliza por vícios ou defeitos no(s) BEN(S) ou pela<br>qualidade dos serviços prestados relacionados ao(s) BEN(S).<br>Parágrafo quarto – No caso
                    de descumprimento de qualquer obrigação assumida nesta, e uma vez constituído(a) em mora<br>de três parcelas, durante o período de alienação, após a entrega do bem,&nbsp;&nbsp;fica ciente o sócio/associado que deverá entregar<br>a posse direta do(s)
                    BEN(S) a LOOK SEA&nbsp; e desta forma, consolidar-&nbsp;se-á&nbsp;em nome da LOOK SEA a propriedade fiduciária<br>sobre o(s) BEN(S) viabilizando, assim, a venda extrajudicial do(s) mesmo(s), a fim de buscar liquidar ou amortizar o saldo<br>devedor
                    desta negociação.<br>Parágrafo quinto – Fica estabelecido para os devidos fins e efeitos de direito, inclusive criminais, que a responsabilidade<br>decorrente do depósito (FIEL DEPOSITARIO)&nbsp;do(s) BEN(S) descrito e apresentado fruto do objeto
                    desta negociação é, neste<br>ato, assumida integralmente pelo (a) SÓCIO/ASSOCIADO.<br>Parágrafo sexto – É facultado á LOOK SEA a anotação do respectivo gravame de alienação fiduciária referente a modalidade<br>de crédito aqui pactuada realizada perante
                    o Sistema Nacional de Gravame, em conformidade com Departamento de<br>Trânsito do estado em que ocorrer a aquisição do veículo, sob a ótica da Portaria 4387 de 13 de dezembro de 2013 do<br>DETRAN-RJ, em respeitando o artigo 1.361, §1º da Lei Federal
                    10.406/2002 – Código Civil, e do artigo 6º, §1º e § º da Lei<br>Federal 11.882/2008 e alterações, juntamente com a Resolução nº 320/2009 do Conselho Nacional de Trânsito, como Venda<br>com reserva de Domínio, ou outra denominação que venha a caracterizar
                    a alienação fiduciária com garantia real.<br>- Art. 22° – A falta de pagamento das quotas de Capital a integralizar e demais encargos implicará na eliminação do sócio,<br>nos termos e condições previstos no artigo 31° e seus incisos, ensejando a LOOK
                    SEA o direito de retomada do veículo<br>automotor, autorizando expressamente desde já a venda extrajudicial do mesmo, a fim de buscar liquidar ou amortizar o<br>saldo devedor desta negociação e ainda que a venda não atinja o patamar total do saldo
                    devedor, fica obrigado o<br>sócio/associado a pagar o restante da dívida sob pena de cobrança judicial nos termos da lei.<br>Parágrafo Primeiro – O Sócio renuncia à faculdade de realizar depósitos, identificados ou não, na conta corrente da LOOK<br>SEA,
                    sem que este tenha expressamente autorizado e entenda que qualquer depósito feito em desacordo com o ora<br>estipulado não constituirá quitação e poderá ser a ele devolvido quando identificado.<br>CAPÍTULO VII – DA ENTREGA AMIGÁVEL.<br>- Art. 23º
                    - Em caso de impossibilidade de adimplir o contrato por parte do associado, o mesmo caso queira, apresentará o<br>bem automotor veículo objeto, para vistoria e avaliação da LOOK SEA, ficando facultado a aceitação deste por parte da<br>LOOK SEA, visando
                    a efetivação da entrega amigável, assinando o respectivo TERMO DE ENTREGA AMIGÁVEL SEM<br>QUITAÇÃO para venda em leilão, ou outra forma julgada conveniente, visando a quitação do saldo devedor do aludido<br>contrato a fim de buscar liquidar ou amortizar
                    o saldo devedor desta negociação.<br>Parágrafo Primeiro –&nbsp;Ainda que a venda ou leilão do mesmo não atinja o patamar total do saldo devedor apurado no ato da<br>devolução amigável do bem estipulado em planilha apresentada pela LOOK SEA, fica obrigado
                    o sócio/associado a pagar o<br>restante da dívida sob pena de cobrança judicial nos termos da lei.<br>Parágrafo Segundo – O associado nomeia e constitui o Credor seu bastante procurador, para representá-lo perante o<br>DETRAN - Departamento Estadual
                    de Trânsito e demais órgãos públicos federais, estaduais e municipais, para providenciar<br>a transferência de propriedade do aludido veículo a terceiros, podendo para tanto, assinar o competente recibo de venda,<br>firmar, retirar ou juntar requerimentos
                    e documentos, inclusive substabelecer, receber e dar quitação. O pagamento das<br>multas de trânsito, de licenciamento, IPVA e demais ônus fiscais ou&nbsp;extra fiscais&nbsp;em atraso que possam recair sobre o veículo<br>ora entregue, serão de única
                    e exclusiva responsabilidade do associado.<br>Parágrafo Terceiro – Fica facultado a LOOK SEA, receber, após análise da situação fiscal, administrativa e tributária pelo<br>departamento jurídico, o bem veículo automotor em situação irregular, ciente
                    o associado que o custo de regularização do<br>mesmo bem recebido pela LOOK SEA, será integralmente repassado ao associado, ficando o respectivo valor acrescido ao<br>saldo devedor desta negociação, estipulado em planilha apresentada pela LOOK SEA,
                    estando obrigado o sócio/associado a<br>pagar o restante da dívida, incluindo os custos de regularização do bem automotor, sob pena de cobrança judicial nos termos<br>da lei.<br>- Art. 24º – Pagas todas as parcelas de integralização do capital, com
                    os encargos estatutários, implicam, conseqüentemente,<br>na completa integralização do Capital Subscrito.<br>- Art. 25° – Detentor do número de quotas integralizadas que corresponda ao Capital Subscrito e ao valor do investimento,<br>compulsoriamente,
                    o sócio adquirirá e a LOOK SEA transferirá a propriedade do veículo automotor, usando como moeda de<br>pagamento do seu preço a totalidade do capital das quotas que possuir que serão baixadas do passivo da LOOK SEA, na<br>redução do capital e conseqüentemente
                    do ativo, na rubrica relativa ao investimento.<br>Parágrafo Primeiro – Durante o período da Alienação Fiduciária, o sócio poderá, a qualquer tempo, antecipar a integralização<br>do Capital Subscrito, adquirindo a propriedade do veículo automotor nos
                    termos do “caput” deste Artigo.<br>Parágrafo Segundo&nbsp;– Declara ainda o associado estar ciente de que o presente negócio jurídico aqui celebrado consiste em<br>título executivo extrajudicial e representativo de dívida em dinheiro, certa, líquida
                    e exigível, seja pela soma indicada, seja<br>pelo saldo devedor demonstrado em planilha de cálculo emitida pela LOOK SEA, na forma da legislação aplicável, cuja<br>apresentação pela LOOK SEA&nbsp; será suficiente para a exigibilidade de seu crédito.<br>CAPÍTULO
                    VIII – DOS SEGUROS.<br>- Art. 26° – A LOOK SEA poderá contratar seguros por morte ou invalidez permanente&nbsp;e/ou desemprego&nbsp;de crédito e<br>obrigações contratuais do sócio, condicionando à aprovação, aceitação e inclusão na relação dos garantidos
                    pela
                    <br>Seguradora, para cobertura do valor correspondente ao saldo do capital por capitalizar, cuja eventual necessidade de<br>cobertura, terá o seu valor aplicado na finalidade prevista, pelo que, embora de encargo do sócio, responsável pelo<br>pagamento
                    em dia, respeitado as condições das apólices, e terão a LOOK SEA como beneficiária.<br>Parágrafo Único – Coberto o capital a realizar pela Seguradora, a LOOK SEA, transferirá ao sócio, seu beneficiário ou aos<br>seus herdeiros ou sucessores, a propriedade
                    do bem automotor e / ou a quitação de ônus existentes.<br>- Art. 27° – Os veículos automotores da LOOK SEA, em poder dos sócios, serão objeto de seguro contra danos físicos nas<br>condições da apólice a ser contratada com Seguradora aprovada pela
                    Diretoria da LOOK SEA, cabendo ao sócio à liquidação<br>dos prêmios respectivos, sob pena de se responsabilizar pelos danos sofridos pelo bem, mesmo que derivado de caso<br>fortuito ou de força maior.<br>Parágrafo Primeiro – Após a entrega do BEM
                    (s) e até a efetiva liquidação e integralização do capital subscrito,&nbsp;o(a)<br>sócio/associado se obriga a contratar e manter seguro para o(s) BEM(S) descrito(s) nessa operação, especificadamente,<br>para prevenir roubo, furto, incêndio, danos
                    materiais e responsabilidade civil perante terceiros.<br>Parágrafo Segundo –&nbsp;O(a) sócio/associado confere, neste ato, á LOOK SEA, todos os poderes necessários para representá-<br>lo perante a seguradora escolhida para segurar o(s) BEM(S), podendo
                    receber a indenização por sinistro, dar e receber<br>quitação, enfim, praticar todos os atos necessários para o recebimento do seguro. O valor recebido por meio de seguro<br>deverá ser única e exclusivamente utilizado para liquidação do saldo devedor
                    da presente negociação e, caso o valor da<br>referida indenização seja insuficiente,&nbsp;o(a) sócio/associado se compromete a pagar eventual saldo devedor á LOOK SEA.<br>Parágrafo Terceiro –&nbsp;O(a) sócio/associado confere, neste ato, á LOOK SEA,
                    todos os poderes necessários para representá-<br>lo(a) perante a seguradora responsável pela proteção financeira, podendo receber a indenização por sinistro, dar e receber<br>quitação, enfim, praticar todos os atos necessários para o recebimento do
                    seguro. O valor recebido por meio de seguro<br>deverá ser única e exclusivamente utilizado para liquidação do saldo devedor da presente negociação e, caso o valor da<br>referida indenização seja insuficiente,&nbsp;o(a) EMITENTE se compromete a pagar
                    eventual saldo devedor á LOOK SEA<br>AUTOFINANCIAMENTO.<br>CAPÍTULO IX – DAS SUB-ROGAÇÕES DE COTAS PARTES.<br>- Art. 28 – Os sócios poderão sub-rogar a terceiros as suas quotas-parte, desde que em dia com os seus pagamentos,<br>integralizados no mínimo
                    o percentual de 20% em parcelas pagas e que os sub-rogados preencham as condições e demais<br>exigências do presente Regimento Interno, observados os seguintes critérios:<br>I – Se o sócio sub-rogado estiver sendo admitido exclusivamente para assumir
                    o Plano do sócio sub-rogador, assume os<br>direitos e obrigações deste, contando o tempo decorrido desde a admissão deste último, os valores das cotas integralizadas<br>e as obrigações das quotas-parte por integralizar, podendo inclusive assumir a
                    posição de Comodatário se o alienante estiver<br>nessa fase de atendimento;<br>II – Se o sub-rogado for sócio, com outro plano em desenvolvimento, com prazos e valores definidos, acumulará as quotas-<br>parte integralizadas que se somarão as já por
                    ele integralizadas, podendo optar pelo tempo decorrido do plano sub-rogado<br>desde a admissão desprezando-se as quotas-parte do capital a integralizar do plano sub-rogado.<br>Parágrafo Primeiro – As sub-rogações para terem validade perante a LOOK
                    SEA, deverão obrigatoriamente contar coma<br>interveniência e anuência de sua administração.<br>Parágrafo Segundo – A LOOK SEA cobrará Taxa de sub-rogação de 5% do valor do capital subscrito atual pelos serviços<br>administrativos prestados, antes
                    da aquisição do bem, que ficarão a cargo do sub-rogatário apresentado pelo associado sub-<br>rogador. Caso a sub-rogação se der após ao associado já tiver sido classificado para a liberação do capital subscrito e/ou ter<br>a posse direta do bem, a
                    Taxa de sub-rogação passa a ser de 10% do valor do capital subscrito atual.<br>Parágrafo Terceiro – Os custos relativos a operação de sub-rogação referentes a despesas inerentes a operação e todos os<br>tributos, municipais, estaduais e federais inclusive
                    eventuais taxas de licenciamento /DPVAT / Registros /&nbsp;MULTAS&nbsp;e<br>quaisquer outros encargos ou despesas que venham a incidir sobre o (s)&nbsp;BEM(s); registrar a garantia de alienação fiduciária<br>junto ao Órgão Competente (ex:DETRAN),
                    ficarão a cargo de inteira responsabilidade do sub-rogatário.<br>CAPÍTULO X – DA LOCAÇÃO DA SEDE E FILIAIS<br>- Art. 29° – A LOOK SEA poderá alocar imóveis para estabelecimento de sua Sede e Filiais, dentro dos padrões de<br>funcionalidade e melhor
                    conforto para seus sócios, com autonomia total por parte de seu Presidente.<br>CAPÍTULO XI – DAS ATUALIZAÇÕES MONETÁRIAS.<br>Art. 30º –&nbsp;Todas as obrigações assumidas pelo Associado sofrerão atualização monetária anual com periodicidades legais
                    a
                    <br>partir da data da sua admissão, observado a&nbsp;prioridade de utilização IGP-M (Índice Geral de Preços do Mercado). A condição<br>aqui prevista será automaticamente adaptada a qualquer nova norma fixada pelo governo.<br>CAPÍTULO XII – DA REMUNERAÇÃO
                    DA RESICAR POR QUEBRA DE CONTRATO.<br>- Art. 31° – Ao retirar-se o sócio da LOOK SEA, por solicitação própria de cancelamento, demissão, eliminação ou exclusão, o<br>valor correspondente as suas quotas-parte integralizadas do capital ficará sujeito
                    as seguintes condições:<br>I. No caso de solicitação própria de cancelamento, demissão ou eliminação:<br>a. Se o sócio estiver na fase de integralização do capital social, antes da fase de atendimento, o saldo do valor das cotas-<br>parte do capital
                    subscrito, não terá liquidez por parte da LOOK SEA.&nbsp;<strong>O sócio demissionário, pela ordem cronológica de<br>solicitação, deverá aguardar, num prazo não inferior a 180 (sento e oitenta) dias, após a entrega por escrito de seu<br>pedido de exclusão para cálculo do valor devido a receber, e que a LOOK SEA tenha suficiência de recursos para<br>resgatar o saldo do valor das quotas. Em caso de resgate será deduzida do valor das cotas pagas, suporte<br>administrativo, seguros, tarifa bancária, taxa de adesão e uma multa rescisória equivalente a 50% (quarenta por<br>cento) sobre a soma das parcelas líquidas e o saldo restante serão devolvidas em tantas prestações mensais e<br>sucessivas quantas as utilizadas para integralização do capital liquidado, de forma alguma devolveremos o valor de<br>entrada.</strong><br>-
                    Art. 32°- A responsabilidade de cada sócio pela obrigação social é subsidiária e limitado ao valor de suas quotas-parte do<br>capital. O direito do ex-associado e liquidação de seus haveres prescreve em 2 (dois) anos, a partir da data de cessação
                    da
                    <br>qualidade de sócio.<br>- Art. 33 – A falta de pagamento de 03(três) mensalidades consecutivas, e demais encargos implicará na eliminação<br>automática do sócio, ensejando a LOOK SEA o direito de retomada do bem automotor, obedecidas às condições
                    do Artigo 31<br>inciso I.<br>Parágrafo Único- O sócio, deverá procurar a LOOK SEA afim de regularizar suas pendências e/ou formalizar seu pedido de<br>cancelamento para cálculo e devolução do que lhe for de direito de acordo com o regimento interno.<br>-
                    Art. 34 – A eventual tolerância ou omissão por parte da LOOK SEA AUTOFINANCIAMENTO no exercício de qualquer<br>direito que lhe for conferido não importará em alteração ou novação, nem os impedirá de exercer, a qualquer momento, todos<br>os direitos
                    que lhe são assegurados neste&nbsp;Regimento Interno&nbsp;ou pela lei.&nbsp;<br>- Art. 35 – Fica garantido e facultado á LOOK SEA a possibilidade de estabelecer normas administrativas específicas através<br>de aditivos contratuais previamente estabelecidos,
                    em consonância a lei 5764/71.<br>- Art. 35 - As PARTES elegem o Foro do local para dirimir quaisquer dúvidas ou questões dela oriundas, com renúncia<br>expressa a qualquer outro, por mais privilegiado que seja.<br>- Art.36 – A LOOK SEA, não se responsabilizará
                    e não aceitará pagamentos que não forem realizados pelas formas legais da<br>empresa, que são esses; Cartão de Crédito ou Débito e boleto bancário.<br>Art.37 - O bem, deverá ser retirado na nossa cede administrativa, onde o mesmo autoriza gravar o
                    vídeo dessa entrega e<br>divulgar em qualquer plataforma de comunicação enquanto o bem tiver alienado a empresa. Poderá ser divulgado no Brasil e<br>no Exterior.<br>Art.38 – A Empresa sente-se no direito em processar todo e qualquer cliente, que venha
                    difamar sua imagem em qualquer<br>meio de comunicação.<br>Art.39 – a Empresa não aceita adiantamento de parcelas, essas deverão ser pagas em prazos combinados. Êxito, Art 13.1.<br>Art.41 – A geração da boleta bancária deverá ser feita através do aplicativo
                    da <strong>ASAAS GESTÃO FINANCEIRA SA</strong>, ao qual<br>porta o <strong>CNPJ 19.540.550/0001-21</strong> e tem sua sede administrativa situada na <strong>Av. Rolf Wiest, 277, Sl. 820 - Bom Retiro,<br>Joinville - SC,89223-005, CEP: 89227-971</strong>,
                    e também poderá ser adquirida a boleta junto ao site <strong>www.lookthesea.com</strong><br>Art.40 – Toda alienação, será através da empresa <strong>RESICAR COMÉRCIO VAREJISTA DE CARROS E PEÇAS E<br>EMPREENDIMENTOS IMOBILIÁRIOS EIRELI</strong>, que
                    porta o <strong>CNPJ 33.008.542/0001-17</strong> e tem sua sede administrativa na <strong>Rua<br>Visconde de Inhaúma, n°83,17° andar/ Centro-Rio de Janeiro.</strong></p>
                "
            ]
        ];
    }
}
