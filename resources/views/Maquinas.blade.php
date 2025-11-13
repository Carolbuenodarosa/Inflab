@include('layouts.cabecalho')
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Máquinas e Recursos | IFLAB - IFPR Palmas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: "Poppins", Arial, sans-serif;
            background: #f5f7fa;
            margin: 0;
            color: #222;
        }

        .gallery-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .gallery-header h2 {
            color: #145285;
            font-size: 40px;
            font-weight: 800;
            letter-spacing: 0.8px;
        }

        .gallery-header p {
            font-size: 20px;
            color: #555;
            margin-top: 14px;
        }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
            gap: 35px;
            padding: 0 20px;
        }

        .card {
            background: #fff;
            border-radius: 18px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .card:hover {
            transform: translateY(-8px);
            box-shadow: 0 14px 30px rgba(0, 0, 0, 0.18);
        }

        .thumb {
            width: 100%;
            height: 280px;
            object-fit: cover;
            transition: opacity 0.3s ease;
        }

        .card:hover .thumb {
            opacity: 0.9;
        }

        .card-body {
            padding: 26px 28px;
        }

        .title {
            font-size: 22px;
            font-weight: 800;
            color: #0a2e50;
            margin-bottom: 14px;
            border-left: 5px solid #004d79;
            padding-left: 12px;
        }

        .desc {
            font-size: 17px;
            color: #444;
            line-height: 1.7;
            margin-bottom: 10px;
        }

        .short {
            font-size: 16px;
            color: #1e71a8;
            font-weight: 600;
        }

        @media (max-width: 600px) {
            .gallery-header h2 {
                font-size: 30px;
            }

            .desc {
                font-size: 15px;
            }

            .short {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>
    <main class="container">
        <section id="maquinas">
            <div class="gallery-header">
                <h2>Máquinas</h2>
                <p>Conheça os principais equipamentos utilizados nos processos de prototipagem e fabricação do IFLAB</p>
            </div>

            <section class="grid" aria-label="Galeria de Máquinas e Recursos">

                <!-- Router CNC -->
                <article class="card">
                    <img class="thumb" src="https://institucional.bold.net/wp-content/uploads/2019/10/router_cnc.jpg"
                        alt="Router CNC">
                    <div class="card-body">
                        <h3 class="title">Router CNC</h3>
                        <p class="desc">Equipamento de corte automatizado controlado por computador, ideal para
                            usinagem de peças em madeira, plásticos e metais leves com alta precisão.</p>
                        <div class="short">Amplamente utilizado em projetos de manufatura digital e prototipagem
                            avançada.</div>
                    </div>
                </article>

                <!-- Impressora 3D -->
                <article class="card">
                    <img class="thumb"
                        src="https://i.all3dp.com/workers/images/fit=scale-down,w=1200,quality=79,gravity=0.5x0.5,format=auto/wp-content/uploads/2023/05/12140259/neptune-3-pro.jpg"
                        alt="Impressora 3D">
                    <div class="card-body">
                        <h3 class="title">Impressora 3D (FDM e Resina)</h3>
                        <p class="desc">Tecnologia de fabricação aditiva que permite criar modelos tridimensionais com
                            grande precisão, utilizando filamentos termoplásticos ou resina líquida.</p>
                        <div class="short">Ideal para design de produto, engenharia reversa e educação tecnológica.
                        </div>
                    </div>
                </article>

                <!-- Laser -->
                <article class="card">
                    <img class="thumb" src="https://etlaser.com/pt/upload/2015-06-19/20150619152532170.jpg"
                        alt="Cortadora a Laser">
                    <div class="card-body">
                        <h3 class="title">Cortadora a Laser</h3>
                        <p class="desc">Sistema de corte e gravação de alta precisão que utiliza feixe de laser para
                            modelar MDF, acrílico, couro e outros materiais com acabamento limpo e detalhado.</p>
                        <div class="short">Ferramenta essencial para projetos de design e personalização.</div>
                    </div>
                </article>

                <!-- Plotter -->
                <article class="card">
                    <img class="thumb" src="https://rymo.agilecdn.com.br/16949_1.jpg" alt="Plotter de Recorte">
                    <div class="card-body">
                        <h3 class="title">Plotter de Recorte</h3>
                        <p class="desc">Máquina destinada ao corte preciso de vinil, adesivos e papéis especiais,
                            permitindo a criação de sinalizações, etiquetas e decorações visuais.</p>
                        <div class="short">Usada para design gráfico, comunicação visual e personalização de produtos.
                        </div>
                    </div>
                </article>

                <!-- Marcenaria -->
                <article class="card">
                    <img class="thumb"
                        src="https://anhangueraferramentas.fbitsstatic.net/img/p/kit-marceneiro-com-lixadeira-orbital-serra-tico-tico-plaina-furadeira-parafusadeira-acessori-138047/327842-11.jpg?w=650&h=650&v=202509120959"
                        alt="Marcenaria">
                    <div class="card-body">
                        <h3 class="title">Marcenaria</h3>
                        <p class="desc">Ambiente equipado com ferramentas elétricas e manuais para corte, furação e
                            acabamento em madeira, permitindo a criação de estruturas e protótipos funcionais.</p>
                        <div class="short">Espaço voltado à experimentação prática e construção criativa.</div>
                    </div>
                </article>

                <!-- Torno -->
                <article class="card">
                    <img class="thumb"
                        src="https://www.hfmultiferramentas.com.br/media/catalog/product/cache/90dbb86a669057d15fdb380e69490e5a/m/l/ml300-1_2.png"
                        alt="Torno Mecânico">
                    <div class="card-body">
                        <h3 class="title">Torno Mecânico</h3>
                        <p class="desc">Equipamento de usinagem utilizado para modelar peças cilíndricas em metais e
                            plásticos, garantindo precisão e acabamento técnico de alta qualidade.</p>
                        <div class="short">Fundamental em processos de manufatura e manutenção mecânica.</div>
                    </div>
                </article>

                <!-- Fresadora -->
                <article class="card">
                    <img class="thumb"
                        src="https://images.tcdn.com.br/img/img_prod/762235/fresadora_ferramenteira_2_2_kw_trifasica_mr_9400_manrod_1457_1_59030b6aa28784e7ab4fa02f4ab59ac7.jpg"
                        alt="Fresadora">
                    <div class="card-body">
                        <h3 class="title">Fresadora</h3>
                        <p class="desc">Máquina de corte rotativo para usinagem de superfícies planas ou curvas em
                            diversos materiais, oferecendo precisão e versatilidade em processos industriais.</p>
                        <div class="short">Usada para fabricação de componentes metálicos e moldes técnicos.</div>
                    </div>
                </article>

                <!-- Solda -->
                <article class="card">
                    <img class="thumb"
                        src="https://images.tcdn.com.br/img/img_prod/196157/maquina_transformador_de_solda_eletrica_portatil_bx1_150b_da_brutatec_para_soldar_metais_por_arco_3565_2_20240903134213.jpg"
                        alt="Solda Elétrica">
                    <div class="card-body">
                        <h3 class="title">Solda Elétrica</h3>
                        <p class="desc">Equipamento de fusão metálica que permite a união de materiais por arco
                            elétrico, proporcionando resistência e durabilidade nas junções.</p>
                        <div class="short">Utilizada em reparos, fabricação e desenvolvimento de estruturas metálicas.
                        </div>
                    </div>
                </article>

                <!-- Solda MIG/MAG -->
                <article class="card">
                    <img class="thumb"
                        src="https://www.fronius.com/-/media/international/pw/pw-j-z/pw-tpsi-400-water-remote-87.webp"
                        alt="Solda MIG/MAG">
                    <div class="card-body">
                        <h3 class="title">Solda MIG/MAG</h3>
                        <p class="desc">Sistema moderno de soldagem com alimentação contínua de arame e proteção
                            gasosa, garantindo soldas limpas e uniformes com maior eficiência.</p>
                        <div class="short">Aplicada em indústrias e laboratórios de prototipagem metálica.</div>
                    </div>
                </article>

            </section>
        </section>
    </main>
</body>
@include('layouts.footer')

</html>
