@include('layouts.cabecalho')
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Treinamento em Arduino para Professores</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            font-family: "Poppins", Arial, sans-serif;
            background: #f5f7fa;
            margin: 0;
            color: #222;
        }

        .hero {
            background: linear-gradient(135deg, #0a2e50, #145285);
            padding: 60px 20px;
            color: #fff;
            text-align: center;
            border-radius: 0 0 25px 25px;
        }

        .hero h1 {
            font-size: 42px;
            font-weight: 800;
            margin-bottom: 12px;
        }

        .hero p {
            font-size: 18px;
            line-height: 1.6;
            max-width: 750px;
            margin: 0 auto;
        }

        .section {
            padding: 50px 20px;
            max-width: 1000px;
            margin: auto;
        }

        .section h2 {
            font-size: 32px;
            color: #0a2e50;
            font-weight: 800;
            margin-bottom: 20px;
            border-left: 6px solid #145285;
            padding-left: 12px;
        }

        .section p {
            font-size: 18px;
            color: #444;
            line-height: 1.7;
            margin-bottom: 25px;
        }

        .info-box {
            background: #fff;
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.08);
            margin-bottom: 40px;
        }

        .info-box ul {
            list-style: none;
            padding: 0;
        }

        .info-box ul li {
            font-size: 18px;
            padding: 10px 0;
            display: flex;
            align-items: center;
            gap: 10px;
            color: #333;
        }

        .gallery {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 25px;
        }

        .gallery img {
            width: 100%;
            border-radius: 15px;
            box-shadow: 0 8px 22px rgba(0,0,0,0.1);
            object-fit: cover;
            height: 260px;
        }

        .cta {
            text-align: center;
            margin-top: 50px;
        }

        .cta a {
            background: #145285;
            color: #fff;
            padding: 14px 26px;
            font-size: 18px;
            font-weight: 700;
            border-radius: 12px;
            text-decoration: none;
            transition: 0.3s;
        }

        .cta a:hover {
            background: #0a2e50;
            transform: scale(1.05);
        }
    </style>
</head>

<body>

    <!-- HERO -->
    <section class="hero">
        <h1>Treinamento em Arduino para Professores</h1>
        <p>Capacitação prática destinada a docentes interessados em aplicar programação, eletrônica básica e prototipagem nas atividades educacionais.</p>
    </section>

    <!-- SOBRE O TREINAMENTO -->
    <section class="section">
        <h2>Sobre o Treinamento</h2>

        <p>O treinamento teve como objetivo apresentar as funcionalidades do Arduino e demonstrar como utilizar a plataforma em projetos pedagógicos. Os professores participaram de atividades práticas envolvendo sensores, atuadores e programação em linguagem C/C++.</p>

        <div class="info-box">
            <h3 style="font-size: 24px; color:#0a2e50; margin-bottom:15px;">Conteúdos Trabalhados</h3>

            <ul>
                <li><i class="fa-solid fa-microchip"></i> Introdução ao Arduino e eletrônica básica</li>
                <li><i class="fa-solid fa-code"></i> Estrutura básica da programação (setup e loop)</li>
                <li><i class="fa-solid fa-lightbulb"></i> Uso de LEDs, resistores e botões</li>
                <li><i class="fa-solid fa-wave-square"></i> Manipulação de sensores (ultrassônico, LDR, temperatura)</li>
                <li><i class="fa-solid fa-gears"></i> Projetos com motores e servo motores</li>
                <li><i class="fa-solid fa-chalkboard-user"></i> Como aplicar Arduino em atividades escolares</li>
            </ul>
        </div>
    </section>

    <!-- GALERIA -->
    <section class="section">
        <h2>Galeria de Fotos</h2>

        <div class="gallery">
            <img src="https://thumbor.novaescola.org.br/dRxtu7Ml6Vl3eoyuxiryxBZoCg4=/nova-escola-producao.s3.amazonaws.com/5Tq5uU3wPxEjv8DN3scYT9NVmyvFpmJ6g5XYzJbUv4gDRp89b3jZEBPUrmYP/placa-de-arduino.jpg" alt="Treinamento Arduino">
            <img src="https://victorvision.com.br/wp-content/uploads/2021/09/projeto-arduino-930x620.jpg" alt="Eletrônica Arduino">
            <img src="https://victorvision.com.br/wp-content/uploads/2021/10/tipos-de-arduino.jpg" alt="Protótipos Arduino">
        </div>
    </section>

</body>

@include('layouts.footer')
</html>
