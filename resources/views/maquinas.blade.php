<!doctype html>
<html lang="pt-BR">

<head>
    @include('layouts.cabecalho')
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Máquinas e Recursos | IFLAB - IFPR Palmas</title>

    <!-- FONTES E ÍCONES -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: "Poppins", sans-serif;
            background: #f5f7fa;
            margin: 0;
        }

        /* ===== TÍTULO PRINCIPAL ===== */
        h1.page-title {
            text-align: center;
            font-weight: 800;
            color: #0a6cc4;
            margin-top: 25px;
            margin-bottom: 5px;
            font-size: 42px;
            letter-spacing: -1px;
        }

        p.page-subtitle {
            text-align: center;
            font-size: 18px;
            color: #4b4b4b;
            margin-top: 0;
            margin-bottom: 45px;
        }

        /* ===== CARD HORIZONTAL ===== */
        .machine-box {
            display: flex;
            align-items: center;
            gap: 20px;
            background: white;
            padding: 25px;
            border-radius: 18px;
            margin: 0 auto 30px auto;
            max-width: 1100px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.08);
            transition: 0.3s;
        }

        .machine-box:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 32px rgba(0, 0, 0, 0.15);
        }

        .machine-box img {
            width: 340px;
            height: 240px;
            object-fit: cover;
            border-radius: 14px;
        }

        /* ===== CAIXA DE TEXTO ===== */
        .box-content {
            flex: 1;
            border: 2px solid #dcdcdc;
            border-radius: 18px;
            overflow: hidden;
            background: #ffffff;
        }

        .box-title {
            background: #0a6cc4;
            color: white;
            padding: 18px;
            font-size: 22px;
            font-weight: 700;
            text-align: center;
            letter-spacing: 1px;
        }

        .box-text {
            padding: 18px;
            font-size: 16px;
            color: #333;
            line-height: 1.7;
            min-height: 120px;
        }

        /* ===== RESPONSIVIDADE ===== */
        @media (max-width: 850px) {
            body {
                padding: 15px;
            }

            .machine-box {
                flex-direction: column;
                text-align: center;
            }

            .machine-box img {
                width: 100%;
                height: auto;
            }

            .box-content {
                width: 100%;
            }
        }
    </style>
</head>

<body>

    <h1 class="page-title">Marcenaria</h1>
    <p class="page-subtitle">Infraestrutura tecnológica do IFPR Palmas para inovação, prototipagem e pesquisa aplicada
    </p>

    <!-- ROUTER CNC -->
    <div class="machine-box">
        <img
            src="">
        <div class="box-content">
            <div class="box-title">ROUTER CNC</div>
            <div class="box-text">
                Máquina projetada para realizar desbastes a partir da rotação de uma ferramenta (fresa) adequada para
                cada tipo de material a ser usinado. Possui software próprio para edição das imagens (vetoriais ou BMP)
                e para controle das características da usinagem, como velocidade de rotação, avanço da fresa e
                profundidade de corte.
            </div>
        </div>
    </div>

    <!-- IMPRESSORA 3D -->
    <div class="machine-box">
        <img
            src="">
        <div class="box-content">
            <div class="box-title">TORNO COPIADOR</div>
            <div class="box-text">
                Um torno copiador é uma máquina utilizada para usinagem que permite reproduzir peças com o mesmo formato
                a partir de um modelo ou gabarito. Ele funciona seguindo o perfil de uma peça padrão, copiando suas
                formas e dimensões para outra peça bruta. É muito usado para produzir objetos cilíndricos ou com
                contornos complexos, garantindo repetibilidade, precisão e alta produtividade na fabricação de peças em
                série.
            </div>
        </div>
    </div>

    <!-- LASER CO2 -->
    <div class="machine-box">
        <img src="">
        <div class="box-content">
            <div class="box-title">SERRA CIRCULAR DE BANCADA</div>
            <div class="box-text">
                Uma serra circular de bancada é uma máquina estacionária utilizada para cortes retos e precisos em
                madeira, MDF, compensados e outros materiais semelhantes. Possui uma lâmina circular acionada por motor
                fixada em uma mesa plana, permitindo estabilidade e produtividade nos cortes. É amplamente usada em
                marcenarias e oficinas para cortes longitudinais, transversais e ajustes de peças com rapidez e
                segurança.
            </div>
        </div>
    </div>

    <!-- OSCILOSCÓPIO -->
    <div class="machine-box">
        <img src="">
        <div class="box-content">
            <div class="box-title">SERRA ESQUADRIA</div>
            <div class="box-text">
                Uma serra esquadria é uma ferramenta utilizada para realizar cortes precisos em ângulos variados,
                especialmente em madeira, MDF e perfis. Possui uma lâmina circular montada em um braço articulado que
                permite ajustar o ângulo do corte, sendo ideal para molduras, rodapés, batentes e encaixes. É muito
                usada em marcenaria, carpintaria e acabamentos devido à sua precisão e praticidade.
            </div>
        </div>
    </div>

    <div class="machine-box">
        <img src="">
        <div class="box-content">
            <div class="box-title">SERRA TICO-TICO</div>
            <div class="box-text">
                Uma serra tico-tico é uma ferramenta elétrica portátil utilizada para realizar cortes curvos, retos e
                detalhados em madeira, MDF, plástico e outros materiais. Ela usa uma lâmina estreita que se move
                rapidamente para cima e para baixo, permitindo cortes precisos, acabamentos delicados e formas
                complexas. É muito versátil e comum em marcenarias, artesanato e trabalhos de bricolagem.
            </div>
        </div>
    </div>

    <div class="machine-box">
        <img src="">
        <div class="box-content">
            <div class="box-title">LIXADEIRA DE BANCADA</div>
            <div class="box-text">
                Uma lixadeira de bancada é uma máquina estacionária usada para desbaste, nivelamento e acabamento de
                peças em madeira, metal ou plástico. Possui uma lixa instalada em disco ou em cinta, acionada por motor
                fixo na bancada, oferecendo estabilidade e precisão no lixamento. É ideal para modelar bordas, ajustar
                medidas e realizar acabamentos uniformes em oficinas e marcenarias.
            </div>
        </div>
    </div>

    <div class="machine-box">
        <img src="">
        <div class="box-content">
            <div class="box-title">FURADEIRA ELÉTRICA</div>
            <div class="box-text">
                Uma furadeira elétrica é uma ferramenta portátil usada para perfurar madeira, metal, plástico e outros
                materiais. Ela utiliza um motor que gira brocas de diferentes tamanhos, permitindo furos precisos e
                rápidos. Versátil e prática, é amplamente utilizada em oficinas, construções e serviços domésticos para
                montagem, instalações e reparos.
            </div>
        </div>
    </div>

    <div class="machine-box">
        <img src="">
        <div class="box-content">
            <div class="box-title">SERRA CIRULAR MANUAL</div>
            <div class="box-text">
                Uma serra circular manual é uma ferramenta portátil utilizada para realizar cortes retos e rápidos em
                madeira, MDF, compensados e outros materiais. Equipada com uma lâmina circular de alta rotação, permite
                cortes longitudinais e transversais com boa precisão. É amplamente usada em construção civil, marcenaria
                e serviços de manutenção pela sua praticidade e mobilidade.
            </div>
        </div>
    </div>

    <div class="machine-box">
        <img src="">
        <div class="box-content">
            <div class="box-title">DESENGROSSADEIRA MANUAL</div>
            <div class="box-text">
                Uma desengrossadeira manual é uma ferramenta utilizada para desbastar, reduzir a espessura e nivelar
                superfícies de madeira de forma controlada. Funciona por meio de lâminas ajustáveis que retiram pequenas
                camadas do material, permitindo obter peças com espessura uniforme e acabamento mais liso. É indicada
                para carpintaria, marcenaria e ajustes finos em trabalhos manuais com madeira.
            </div>
        </div>
    </div>

     <h1 class="page-title">ELETRÔNICA</h1>
    <p class="page-subtitle">Infraestrutura tecnológica do IFPR Palmas para inovação, prototipagem e pesquisa aplicada
    </p>

    <div class="machine-box">
        <img
            src="">
        <div class="box-content">
            <div class="box-title">Osciloscópio</div>
            <div class="box-text">
                Um osciloscópio é um instrumento de medição usado para visualizar e analisar sinais elétricos em forma
                de ondas. Ele mostra, em uma tela, como a tensão varia ao longo do tempo, permitindo identificar
                frequência, amplitude, ruídos e outras características do sinal. É essencial em eletrônica, manutenção,
                testes e desenvolvimento de circuitos.
            </div>
        </div>
    </div>

    <div class="machine-box">
        <img
            src="">
        <div class="box-content">
            <div class="box-title">Gerador de Funções</div>
            <div class="box-text">
                Um gerador de funções é um instrumento eletrônico que produz sinais periódicos, como ondas senoidais,
                quadradas e triangulares, com frequência e amplitude ajustáveis. É utilizado para testar, calibrar e
                analisar circuitos eletrônicos, permitindo simular diferentes condições de funcionamento. É essencial em
                laboratórios, manutenção e desenvolvimento de equipamentos eletrônicos.
            </div>
        </div>
    </div>

    <div class="machine-box">
        <img
            src="">
        <div class="box-content">
            <div class="box-title">Fonte de Alimentação</div>
            <div class="box-text">
                Uma fonte de alimentação é um equipamento utilizado para fornecer energia elétrica estável e controlada
                a circuitos e dispositivos eletrônicos. Ela converte a tensão da rede para níveis ajustáveis de tensão e
                corrente, garantindo segurança e funcionamento adequado dos componentes. É fundamental em laboratórios,
                testes, manutenção e desenvolvimento de sistemas eletrônicos.
            </div>
        </div>
    </div>

    <div class="machine-box">
        <img
            src="">
        <div class="box-content">
            <div class="box-title">Estação de Solda</div>
            <div class="box-text">
                Uma estação de solda é um equipamento utilizado para realizar soldagem e dessoldagem de componentes
                eletrônicos com precisão. Ela geralmente inclui um ferro de solda com controle de temperatura,
                permitindo ajustes finos para diferentes tipos de solda e componentes sensíveis. É essencial em
                manutenção, montagem e reparo de placas e dispositivos eletrônicos.
            </div>
        </div>
    </div>

    <div class="machine-box">
        <img
            src="">
        <div class="box-content">
            <div class="box-title">Câmera Termográfica</div>
            <div class="box-text">
                Uma câmera termográfica é um equipamento capaz de detectar e visualizar a distribuição de temperatura em
                objetos e ambientes por meio de imagens infravermelhas. Ela transforma o calor emitido pelos materiais
                em mapas de cores, permitindo identificar pontos quentes, falhas elétricas, vazamentos e problemas de
                isolamento. É amplamente usada em manutenção preventiva, inspeções industriais e segurança.
            </div>
        </div>
    </div>

    <h1 class="page-title">Robotica</h1>
    <p class="page-subtitle">Infraestrutura tecnológica do IFPR Palmas para inovação, prototipagem e pesquisa aplicada
    </p>

    <div class="machine-box">
        <img
            src="">
        <div class="box-content">
            <div class="box-title">ROBÔ SEGUIDOR DE LINHA</div>
            <div class="box-text">
                Um robô seguidor de linha é um dispositivo automatizado projetado para detectar e seguir um trajeto
                marcado no chão, geralmente uma linha preta ou branca. Ele utiliza sensores ópticos para identificar o
                caminho e ajustar seus movimentos, mantendo-se sobre a rota. É muito usado em atividades educacionais,
                competições de robótica e estudos de lógica de controle.
            </div>
        </div>
    </div>

    <div class="machine-box">
        <img
            src="">
        <div class="box-content">
            <div class="box-title">SENSORES PARA MICROCONTROLADORES</div>
            <div class="box-text">
                Sensores para microcontroladores são dispositivos que detectam variáveis físicas — como temperatura,
                luz, umidade, distância, movimento ou pressão — e convertem essas informações em sinais elétricos
                compreensíveis pelo microcontrolador. Eles permitem que sistemas eletrônicos percebam o ambiente e tomem
                decisões automatizadas, sendo amplamente utilizados em projetos educacionais, automação, robótica e
                Internet das Coisas (IoT).
            </div>
        </div>
    </div>

    <div class="machine-box">
        <img
            src="">
        <div class="box-content">
            <div class="box-title">MICROCONTROLADORES</div>
            <div class="box-text">
                Microcontroladores são pequenos computadores integrados em um único chip, contendo processador, memória
                e periféricos. Eles são projetados para controlar dispositivos eletrônicos de forma automática,
                executando tarefas específicas em sistemas embarcados. Muito utilizados em automação, robótica,
                eletrodomésticos, IoT e projetos educacionais, permitem criar soluções inteligentes e de baixo consumo
                de energia.
            </div>
        </div>
    </div>

    <div class="machine-box">
        <img
            src="">
        <div class="box-content">
            <div class="box-title">ROBÔ DE SUMÔ</div>
            <div class="box-text">
                Um robô de sumô é um robô autônomo projetado para competir em arenas circulares, onde o objetivo é
                empurrar o oponente para fora do ringue. Ele utiliza sensores para detectar bordas e localizar o
                adversário, além de motores potentes e estrutura reforçada para garantir força e estabilidade. É muito
                usado em competições de robótica, desenvolvendo habilidades de estratégia, eletrônica e programação.
            </div>
        </div>
    </div>

    <div class="machine-box">
        <img
            src="">
        <div class="box-content">
            <div class="box-title">DRONE</div>
            <div class="box-text">
                Um drone é um veículo aéreo não tripulado, controlado remotamente ou de forma autônoma, capaz de
                realizar voos estáveis por meio de múltiplos rotores. Ele é utilizado para captação de imagens,
                inspeções, mapeamentos, lazer e diversas aplicações profissionais. Sua estrutura leve, sensores
                integrados e sistemas de controle permitem manobrabilidade, precisão e segurança durante o voo.
            </div>
        </div>
    </div>

    <div class="machine-box">
        <img
            src="">
        <div class="box-content">
            <div class="box-title">SOFTWARES PARA EDICÇÃO E CONTROLE</div>
            <div class="box-text">
                Softwares para edição e controle são programas utilizados para criar, modificar, organizar e gerenciar
                diferentes tipos de conteúdo ou processos. Eles podem incluir ferramentas de edição de texto, imagem,
                áudio e vídeo, além de sistemas para controle de produção, automação, projetos ou dispositivos. Esses
                softwares facilitam o trabalho, aumentam a precisão e permitem maior eficiência em diversas áreas
                profissionais e educacionais.
            </div>
        </div>
    </div>

    <h1 class="page-title">MAQUINAS MANUFATURA DIGITAL</h1>
    <p class="page-subtitle">Infraestrutura tecnológica do IFPR Palmas para inovação, prototipagem e pesquisa aplicada
    </p>
    <div class="machine-box">
        <img
            src="">
        <div class="box-content">
            <div class="box-title"> ROUTER CNC</div>
            <div class="box-text">
                Máquina projetada para realizar desbastes a partir da rotação de uma ferramenta (fresa) adequada para
                cada tipo de material a ser usinado. Possui software próprio para edição das imagens (vetoriais ou BMP)
                e de controle das características da usinagem, como velocidade de rotação e avanço da fresa e
                profundidade de corte para cada passada.
            </div>
        </div>
    </div>

    <div class="machine-box">
        <img
            src="">
        <div class="box-content">
            <div class="box-title"> GRAVADORA / CORTADORA LASER</div>
            <div class="box-text">
                Uma gravadora/cortadora a laser é uma máquina que utiliza um feixe de laser de alta precisão para gravar
                desenhos, textos e padrões em diversos materiais, além de realizar cortes limpos e detalhados. Pode
                trabalhar com madeira, acrílico, MDF, couro, papel e outros materiais, oferecendo alta qualidade e
                repetibilidade. É amplamente usada em fabricação digital, artesanato, personalização de produtos e
                prototipagem.
            </div>
        </div>
    </div>

    <div class="machine-box">
        <img
            src="">
        <div class="box-content">
            <div class="box-title">IMPRESSORA 3D</div>
            <div class="box-text">
                Uma impressora 3D é um equipamento que cria objetos físicos a partir de modelos digitais, depositando
                material em camadas sucessivas até formar a peça final. Utiliza materiais como plástico, resina ou
                filamentos especiais, permitindo fabricar protótipos, peças funcionais e modelos personalizados com
                precisão. É muito utilizada em engenharia, educação, design e fabricação rápida.
            </div>
        </div>
    </div>

    <div class="machine-box">
        <img
            src="">
        <div class="box-content">
            <div class="box-title"> PLOTTER</div>
            <div class="box-text">
                Um plotter é um equipamento de impressão de grande formato usado para produzir desenhos técnicos,
                plantas, banners, adesivos e outros materiais em alta resolução. Ele trabalha com rolos de papel ou
                vinil e permite impressões precisas e de grandes dimensões, sendo amplamente utilizado em gráficas,
                arquitetura, engenharia e design visual.
            </div>
        </div>
    </div>

    <div class="machine-box">
        <img
            src="">
        <div class="box-content">
            <div class="box-title">PLOTTER DE CORTE</div>
            <div class="box-text">
                Um plotter de corte é um equipamento utilizado para recortar com precisão materiais como vinil,
                adesivos, papel, acetato e tecidos leves. Ele usa uma lâmina controlada eletronicamente para seguir
                desenhos vetoriais, permitindo criar letras, logotipos, etiquetas e detalhes personalizados. É muito
                usado em comunicação visual, artesanato, sinalização e personalização de produtos.
            </div>
        </div>
    </div>

    <div class="machine-box">
        <img
            src="">
        <div class="box-content">
            <div class="box-title">SCANNER 3D</div>
            <div class="box-text">
                Um scanner 3D é um dispositivo capaz de capturar a forma e as dimensões de um objeto físico, gerando um
                modelo digital tridimensional. Ele utiliza luz, laser ou sensores de profundidade para mapear
                superfícies com precisão. É amplamente usado em engenharia, design, impressão 3D, conservação de peças e
                inspeções industriais.
            </div>
        </div>
    </div>

    <h1 class="page-title">USINAGEM E SOLDA</h1>
    <p class="page-subtitle">Infraestrutura tecnológica do IFPR Palmas para inovação, prototipagem e pesquisa aplicada
    </p>

    <div class="machine-box">
        <img
            src="">
        <div class="box-content">
            <div class="box-title">TORNO MECÂNICO</div>
            <div class="box-text">
                Um torno mecânico é uma máquina utilizada para usinar peças cilíndricas por meio da rotação do material
                contra uma ferramenta de corte. Permite realizar operações como desbaste, acabamento, roscas, furos e
                cortes precisos em metais, plásticos e outros materiais. É essencial em oficinas mecânicas, indústrias e
                manutenção para fabricar e ajustar componentes com alta precisão.
            </div>
        </div>
    </div>

    <div class="machine-box">
        <img
            src="">
        <div class="box-content">
            <div class="box-title">FURADEIRA FRESADORA</div>
            <div class="box-text">
                Uma furadeira fresadora é uma máquina versátil que combina as funções de furar e fresar, permitindo
                realizar furos precisos e usinar superfícies, ranhuras e contornos em metais e outros materiais. Possui
                mesa ajustável, cabeçote móvel e controle de velocidade, oferecendo precisão e estabilidade nos
                processos de usinagem leve a média. É muito utilizada em oficinas mecânicas, ferramentarias e
                laboratórios de manufatura.
            </div>
        </div>
    </div>

    <div class="machine-box">
        <img
            src="">
        <div class="box-content">
            <div class="box-title">SERRA FITA DE BANCADA</div>
            <div class="box-text">
                Uma serra fita de bancada é uma máquina estacionária equipada com uma lâmina contínua em forma de fita,
                usada para realizar cortes retos, curvos e irregulares em madeira, plástico e alguns tipos de metal.
                Oferece precisão, estabilidade e capacidade de cortar peças de diferentes espessuras, sendo muito
                utilizada em marcenarias, oficinas e trabalhos de modelagem.
            </div>
        </div>
    </div>

    <div class="machine-box">
        <img
            src="">
        <div class="box-content">
            <div class="box-title">SERRA POLICORTE</div>
            <div class="box-text">
                Uma serra policorte é uma máquina utilizada para realizar cortes retos e rápidos em metais, utilizando
                um disco abrasivo ou de vídea. Possui base fixa, braço articulado e sistema de fixação da peça,
                garantindo estabilidade e segurança durante o corte. É muito usada em metalúrgicas, serralherias e
                construção civil para cortar tubos, barras e perfis metálicos.
            </div>
        </div>
    </div>

    <div class="machine-box">
        <img
            src="">
        <div class="box-content">
            <div class="box-title">ESMERIL DE BANCADA</div>
            <div class="box-text">
                Um esmeril de bancada é uma máquina estacionária equipada com rebolos abrasivos usada para afiar
                ferramentas, desbastar materiais, remover rebarbas e dar acabamento em peças metálicas. Fixado à
                bancada, oferece estabilidade, precisão e segurança nas operações de afiação e retoque, sendo muito
                utilizado em oficinas mecânicas, serralherias e manutenção geral.
            </div>
        </div>
    </div>

    <div class="machine-box">
        <img
            src="">
        <div class="box-content">
            <div class="box-title">SOLDA MULTIPROCESSO</div>
            <div class="box-text">
                A solda multiprocesso é um equipamento de soldagem capaz de operar em diferentes métodos, como MIG/MAG,
                TIG e eletrodo revestido. Essa versatilidade permite trabalhar com diversos materiais e espessuras,
                oferecendo flexibilidade, produtividade e bom acabamento. É amplamente utilizada em manutenção,
                serralheria, fabricação industrial e projetos profissionais.
            </div>
        </div>
    </div>

    <div class="machine-box">
        <img
            src="">
        <div class="box-content">
            <div class="box-title">SOLDA OXIACETILENO</div>
            <div class="box-text">
                A solda oxiacetileno é um processo de soldagem que utiliza a queima controlada de uma mistura de
                oxigênio e acetileno para gerar uma chama de alta temperatura capaz de fundir metais. É muito usada para
                soldar, cortar e aquecer peças metálicas, oferecendo boa mobilidade e versatilidade em reparos,
                manutenção e trabalhos artesanais.
            </div>
        </div>
    </div>

    @include('layouts.footer')

</body>

</html>
