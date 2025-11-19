@include('layouts.cabecalho')
<!doctype html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Workshop de Introdução à Manufatura Digital</title>
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

        /* Responsivo */
        @media (max-width: 600px) {
            .hero h1 {
                font-size: 30px;
            }

            .section h2 {
                font-size: 26px;
            }

            .hero p,
            .section p,
            .info-box ul li {
                font-size: 16px;
            }
        }
    </style>
</head>

<body>

    <!-- HERO -->
    <section class="hero">
        <h1>Visita Técnica</h1>
        <p>Recebemos os estudantes da <b>Escola Estadual Palmas</b> para uma experiência prática e imersiva no
            laboratório de inovação e prototipagem do IFPR – Campus Palmas.</p>
    </section>

    <!-- SOBRE A VISITA -->
    <section class="section">
        <h2>Sobre a Visita</h2>

        <p>A visita técnica teve como objetivo apresentar aos alunos diferentes tecnologias utilizadas em processos de
           fabricação digital, como impressão 3D, corte a laser, marcenaria, CNC e soldagem. Durante o encontro, os
           estudantes puderam conhecer as máquinas, tirar dúvidas e observar demonstrações ao vivo.</p>

        <div class="info-box">
            <h3 style="font-size: 24px; color:#0a2e50; margin-bottom:15px;">Atividades Realizadas</h3>

            <ul>
                <li><i class="fa-solid fa-cube"></i> Demonstração de Impressão 3D FDM e Resina</li>
                <li><i class="fa-solid fa-bolt"></i> Corte e gravação em MDF usando a cortadora a laser</li>
                <li><i class="fa-solid fa-hammer"></i> Apresentação da área de marcenaria e ferramentas</li>
                <li><i class="fa-solid fa-gears"></i> Funcionamento da Router CNC e fresadora</li>
                <li><i class="fa-solid fa-wrench"></i> Demonstração de soldagem MIG/MAG</li>
            </ul>
        </div>
    </section>

    <!-- GALERIA -->
    <section class="section">
        <h2>Galeria de Fotos</h2>

        <div class="gallery">
            <img src="https://ifpr.edu.br/palmas/wp-content/uploads/sites/31/2025/08/WhatsApp-Image-2025-08-22-at-10.39.44-300x200.webp" alt="Visita Técnica 1">
            <img src="https://ifpr.edu.br/palmas/wp-content/uploads/sites/31/2025/08/WhatsApp-Image-2025-08-22-at-10.39.34-1-300x200.webp" alt="Visita Técnica 2">
            <img src="https://ifpr.edu.br/palmas/wp-content/uploads/sites/31/2025/08/maker-1024x682.webp" alt="Visita Técnica 3">
        </div>
    </section>

</body>

@include('layouts.footer')
</html>
