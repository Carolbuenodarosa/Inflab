@include('layouts.cabecalho')
<!doctype html>
<html lang="pt-BR">
<head>
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
    <h1 class="page-title">MAQUINAS MANUFATURA DIGITAL</h1>
    <p class="page-subtitle">Infraestrutura tecnológica do IFPR Palmas para inovação, prototipagem e pesquisa aplicada
    </p>
    <div class="machine-box">
        <img
            src="https://institucional.bold.net/wp-content/uploads/2019/10/router_cnc.jpg">
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
            src="https://m.media-amazon.com/images/I/71Up43l1mQL._AC_UF894,1000_QL80_.jpg">
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
            src="https://imagens.3dlab.com.br/wp-content/uploads/2020/06/ender-5-plus-3.png">
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
            src="https://images.tcdn.com.br/img/img_prod/1109186/plotter_de_impressao_jv1600_plus_i3200_eco_solvente_ou_sublimacao_171_1_252a9c9b82ad848c3f2c4fb583c38af7.jpeg">
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
            src="https://images.tcdn.com.br/img/img_prod/196157/plotter_de_recorte_e_contorno_v1380c_5785_1_20240903133640.jpg">
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
            src="https://http2.mlstatic.com/D_NQ_NP_720341-MLB53398241335_012023-O.webp">
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
    @include('layouts.footer')
</body>

</html>