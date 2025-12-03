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


     <h1 class="page-title">ELETRÔNICA</h1>
    <p class="page-subtitle">Infraestrutura tecnológica do IFPR Palmas para inovação, prototipagem e pesquisa aplicada
    </p>

    <div class="machine-box">
        <img
            src="https://blog.instrusul.com.br/wp-content/uploads/2018/11/oscilosc%C3%B3pio.jpg">
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
            src="https://upload.wikimedia.org/wikipedia/commons/9/9c/NoN_DF1641A_Function_Generator.jpg">
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
            src="https://lojagoldentec.vteximg.com.br/arquivos/ids/158174-600-600/29726-01.jpg?v=637684580111170000">
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
            src="https://www.usinainfo.com.br/1013779/estacao-de-solda-e-retrabalho-yaxun-702b-902-2-em-1-de-uso-industrial-127v.jpg">
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
            src="https://images.tcdn.com.br/img/img_prod/671371/camera_termografica_19_200_pixels_com_nuvem_ignite_flir_e5_pro_3931_1_5825dabde888f0ab21c3d69f467fc1d5.jpeg">
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

    @include('layouts.footer')

</body>

</html>