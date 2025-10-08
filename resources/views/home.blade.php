<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IFLAB - Laboratório de Fabricação, Robótica e Prototipagem | IFPR Palmas</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --ifpr-blue: #0056a3;
            --ifpr-light-blue: #0078d4;
            --ifpr-dark-blue: #003d7a;
            --ifpr-gray: #f5f5f5;
            --ifpr-text: #333;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        body {
            color: var(--ifpr-text);
            line-height: 1.6;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Header */
        header {
            background: white;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .header-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 0;
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo svg {
            height: 50px;
            margin-right: 15px;
        }

        .logo h1 {
            color: var(--ifpr-blue);
            font-size: 1.5rem;
        }

        nav ul {
            display: flex;
            list-style: none;
        }

        nav ul li {
            margin-left: 25px;
        }

        nav ul li a {
            text-decoration: none;
            color: var(--ifpr-text);
            font-weight: 500;
            transition: color 0.3s;
        }

        nav ul li a:hover {
            color: var(--ifpr-light-blue);
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(rgba(0, 86, 163, 0.8), rgba(0, 61, 122, 0.9)), url('https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 100px 0;
            text-align: center;
        }

        .hero h2 {
            font-size: 3rem;
            margin-bottom: 20px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .hero p {
            font-size: 1.2rem;
            max-width: 700px;
            margin: 0 auto 30px;
        }

        .btn-primary {
            display: inline-block;
            background: var(--ifpr-light-blue);
            color: white;
            padding: 12px 30px;
            border-radius: 50px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s;
            border: 2px solid transparent;
        }

        .btn-primary:hover {
            background: white;
            color: var(--ifpr-light-blue);
            border-color: var(--ifpr-light-blue);
        }

        /* Section Styles */
        section {
            padding: 80px 0;
        }

        .section-title {
            text-align: center;
            margin-bottom: 50px;
        }

        .section-title h2 {
            color: var(--ifpr-blue);
            font-size: 2.5rem;
            margin-bottom: 15px;
            position: relative;
            display: inline-block;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 4px;
            background: var(--ifpr-light-blue);
        }

        .section-title p {
            max-width: 700px;
            margin: 0 auto;
            font-size: 1.1rem;
        }

        /* About Section */
        .about {
            background: var(--ifpr-gray);
        }

        .about-content {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
            align-items: center;
        }

        .about-text h3 {
            color: var(--ifpr-blue);
            font-size: 1.8rem;
            margin-bottom: 20px;
        }

        .about-text p {
            margin-bottom: 20px;
        }

        .about-image {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .about-image img {
            width: 100%;
            height: auto;
            display: block;
        }

        /* Services Section */
        .services-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .service-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .service-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .service-icon {
            background: var(--ifpr-light-blue);
            color: white;
            height: 80px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
        }

        .service-content {
            padding: 25px;
        }

        .service-content h3 {
            color: var(--ifpr-blue);
            margin-bottom: 15px;
            font-size: 1.3rem;
        }

        .service-content ul {
            list-style-type: none;
            padding-left: 0;
        }

        .service-content ul li {
            padding: 8px 0;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
        }

        .service-content ul li:last-child {
            border-bottom: none;
        }

        .service-content ul li i {
            color: var(--ifpr-light-blue);
            margin-right: 10px;
        }

        /* Events Section */
        .events {
            background: var(--ifpr-gray);
        }

        .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
        }

        .event-card {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s, box-shadow 0.3s;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .event-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }

        .event-image {
            height: 200px;
            overflow: hidden;
        }

        .event-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.5s;
        }

        .event-card:hover .event-image img {
            transform: scale(1.05);
        }

        .event-content {
            padding: 25px;
            flex-grow: 1;
            display: flex;
            flex-direction: column;
        }

        .event-date {
            display: inline-block;
            background: var(--ifpr-light-blue);
            color: white;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            margin-bottom: 15px;
        }

        .event-content h3 {
            color: var(--ifpr-blue);
            margin-bottom: 15px;
            font-size: 1.3rem;
        }

        .event-content p {
            margin-bottom: 20px;
            flex-grow: 1;
        }

        .event-link {
            color: var(--ifpr-light-blue);
            text-decoration: none;
            font-weight: 600;
            display: flex;
            align-items: center;
            transition: color 0.3s;
        }

        .event-link:hover {
            color: var(--ifpr-dark-blue);
        }

        .event-link i {
            margin-left: 8px;
            transition: transform 0.3s;
        }

        .event-link:hover i {
            transform: translateX(5px);
        }

        .events-cta {
            text-align: center;
            margin-top: 50px;
        }

        /* Booking Section */
        .booking {
            background: var(--ifpr-gray);
        }

        .booking-steps {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            margin-bottom: 50px;
        }

        .step {
            text-align: center;
            padding: 30px 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .step-number {
            background: var(--ifpr-blue);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            font-weight: bold;
            margin: 0 auto 20px;
        }

        .step h3 {
            color: var(--ifpr-blue);
            margin-bottom: 15px;
        }

        .booking-form {
            background: white;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.05);
            max-width: 800px;
            margin: 0 auto;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            margin-bottom: 8px;
            font-weight: 600;
            color: var(--ifpr-dark-blue);
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 5px;
            font-size: 1rem;
        }

        .form-group textarea {
            resize: vertical;
            min-height: 120px;
        }

        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }

        /* Contact Section */
        .contact-info {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
            text-align: center;
        }

        .contact-item {
            padding: 30px 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }

        .contact-item i {
            font-size: 2.5rem;
            color: var(--ifpr-light-blue);
            margin-bottom: 20px;
        }

        .contact-item h3 {
            color: var(--ifpr-blue);
            margin-bottom: 15px;
        }

        /* Footer */
        footer {
            background: var(--ifpr-dark-blue);
            color: white;
            padding: 50px 0 20px;
        }

        .footer-content {
            display: grid;
            grid-template-columns: 2fr 1fr 1fr;
            gap: 40px;
            margin-bottom: 30px;
        }

        .footer-logo {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
        }

        .footer-logo svg {
            height: 40px;
            margin-right: 15px;
        }

        .footer-logo h3 {
            font-size: 1.5rem;
        }

        .footer-links h4 {
            margin-bottom: 20px;
            font-size: 1.2rem;
            position: relative;
            padding-bottom: 10px;
        }

        .footer-links h4::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 50px;
            height: 2px;
            background: var(--ifpr-light-blue);
        }

        .footer-links ul {
            list-style: none;
        }

        .footer-links ul li {
            margin-bottom: 10px;
        }

        .footer-links ul li a {
            color: #ddd;
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-links ul li a:hover {
            color: white;
        }

        .social-links {
            display: flex;
            gap: 15px;
            margin-top: 20px;
        }

        .social-links a {
            display: flex;
            align-items: center;
            justify-content: center;
            width: 40px;
            height: 40px;
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border-radius: 50%;
            transition: all 0.3s;
        }

        .social-links a:hover {
            background: var(--ifpr-light-blue);
            transform: translateY(-3px);
        }

        .copyright {
            text-align: center;
            padding-top: 20px;
            border-top: 1px solid rgba(255, 255, 255, 0.1);
            font-size: 0.9rem;
            color: #aaa;
        }

        /* Responsive */
        @media (max-width: 992px) {
            .about-content {
                grid-template-columns: 1fr;
            }

            .hero h2 {
                font-size: 2.5rem;
            }

            .footer-content {
                grid-template-columns: 1fr;
            }
        }

        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                text-align: center;
            }

            .logo {
                margin-bottom: 15px;
            }

            nav ul {
                flex-wrap: wrap;
                justify-content: center;
            }

            nav ul li {
                margin: 5px 10px;
            }

            .hero {
                padding: 70px 0;
            }

            .hero h2 {
                font-size: 2rem;
            }

            .form-row {
                grid-template-columns: 1fr;
            }
        }

        .btn-blue {
            display: inline-block;
            background-color: #007bff;
            /* Azul */
            color: #fff;
            /* Texto branco */
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            transition: background-color 0.25s ease;
        }

        .btn-blue:hover {
            background-color: #0056b3;
            /* Azul mais escuro ao passar o mouse */
        }

        .chat-float {
            position: fixed;
            right: 20px;
            bottom: 40px;
            width: 60px;
            height: 60px;
            background-color: var(--ifpr-light-blue);
            color: white;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 28px;
            text-decoration: none;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s, background-color 0.3s;
            z-index: 999;
        }

        .chat-float:hover {
            background-color: var(--ifpr-blue);
            transform: translateY(-5px);
        }

        .chat-float i {
            transition: transform 0.3s;
        }

        .chat-float:hover i {
            transform: scale(1.2);
        }
    </style>
</head>

<body>
    <!-- Header -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <svg id="marca-ifpr" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 235 54" role="img"
                    aria-label="Instituto Federal do Paraná">
                    <title>Instituto Federal do Paraná</title>
                    <desc>Marca do IFPR</desc>
                    <path fill="#2f9e41"
                        d="M37.4 36.4c0 0.6-0.5 1.1-1 1.1h-8.7c-0.6 0-1.1-0.5-1.1-1.1v-8.7c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V36.4z">
                    </path>
                    <path fill="#2f9e41"
                        d="M24.4 10.3c0 0.6-0.5 1.1-1.1 1.1h-8.7c-0.6 0-1.1-0.5-1.1-1.1V1.6c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V10.3z">
                    </path>
                    <path fill="#2f9e41"
                        d="M37.4 10.3c0 0.6-0.5 1.1-1 1.1h-8.7c-0.6 0-1.1-0.5-1.1-1.1V1.6c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V10.3z">
                    </path>
                    <path fill="#2f9e41"
                        d="M11.4 23.3c0 0.6-0.5 1.1-1.1 1.1H1.6c-0.6 0-1-0.5-1-1v-8.7c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V23.3z">
                    </path>
                    <path fill="#2f9e41"
                        d="M24.4 23.3c0 0.6-0.5 1.1-1.1 1.1h-8.7c-0.6 0-1.1-0.5-1.1-1v-8.7c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V23.3z">
                    </path>
                    <path fill="#2f9e41"
                        d="M11.4 36.4c0 0.6-0.5 1.1-1.1 1.1H1.6c-0.6 0-1-0.5-1-1.1v-8.7c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V36.4z">
                    </path>
                    <path fill="#2f9e41"
                        d="M24.4 36.4c0 0.6-0.5 1.1-1.1 1.1h-8.7c-0.6 0-1.1-0.5-1.1-1.1v-8.7c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V36.4z">
                    </path>
                    <path fill="#2f9e41"
                        d="M11.4 49.4c0 0.6-0.5 1.1-1.1 1.1H1.6c-0.6 0-1-0.5-1-1.1v-8.7c0-0.6 0.5-1 1.1-1h8.7c0.6 0 1.1 0.5 1.1 1.1V49.4z">
                    </path>
                    <path fill="#2f9e41"
                        d="M24.4 49.4c0 0.6-0.5 1.1-1.1 1.1h-8.7c-0.6 0-1.1-0.5-1.1-1.1v-8.7c0-0.6 0.5-1 1.1-1h8.7c0.6 0 1.1 0.5 1.1 1.1V49.4z">
                    </path>
                    <path fill="#ce181e" d="M11.9 6c0 3.3-2.7 6-6 6C2.7 11.9 0 9.3 0 6S2.7 0 6 0C9.3 0 11.9 2.7 11.9 6">
                    </path>
                    <text transform="matrix(1.0017 0 0 1 43.6553 24.1582)" fill="#black"
                        font-family="Arial, sans-serif" font-size="14" font-weight="bold">INSTITUTO FEDERAL</text>
                    <text transform="matrix(1.0017 0 0 1 43.9331 37.5249)" fill="#black"
                        font-family="Arial, sans-serif" font-size="12" font-weight="bold">Paraná</text>
                    <text transform="matrix(1.0017 0 0 1 43.9326 50.5059)" fill="#black"
                        font-family="Arial, sans-serif" font-size="12">Campus Palmas</text>
                </svg>
                <h1>IFPR Campus Palmas</h1>
            </div>
            <nav>
                <ul>
                    <li><a href="#sobre">Sobre</a></li>
                    <li><a href="#servicos">Serviços</a></li>
                    <li><a href="{{ route('eventos.index') }}">Eventos</a></li>
                    <li><a href="#agendamento">Agendamento</a></li>
                    <li><a href="#contato">Contato</a></li>

                    @guest
                        <a href="{{ route('login') }}" class="btn-blue">Login</a>
                    @endguest

                    @auth
                        <div class="nav-logout">
                            <span class="user-name">{{ Auth::user()->name }}</span>
                            <form method="POST" action="{{ route('logout') }}" class="logout-form">
                                @csrf
                                <button type="submit">Log out</button>
                            </form>
                        </div>

                        <style>
                            .nav-logout {
                                display: flex;
                                align-items: center;
                                gap: 14px;
                                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                                font-size: 14px;
                                color: #333;
                                padding: 6px 10px;
                                background: #f8f9fa;
                                /* leve fundo para separar do menu */
                                border-radius: 8px;
                                box-shadow: 0 1px 4px rgba(0, 0, 0, 0.08);
                                transition: all 0.3s ease;
                            }

                            .nav-logout:hover {
                                box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
                            }

                            .user-name {
                                font-weight: 600;
                                color: #1a73e8;
                                white-space: nowrap;
                            }

                            .logout-form button {
                                background: #fff;
                                border: 1px solid #1a73e8;
                                color: #1a73e8;
                                padding: 6px 14px;
                                border-radius: 6px;
                                cursor: pointer;
                                font-size: 13px;
                                font-weight: 500;
                                transition: all 0.3s ease;
                                min-width: 70px;
                            }

                            .logout-form button:hover {
                                background: #1a73e8;
                                color: #fff;
                                box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2);
                                transform: translateY(-1px);
                            }
                        </style>

                    @endauth

                    </li>
                </ul>
            </nav>

            <style>
                nav ul {
                    list-style: none;
                    display: flex;
                    gap: 15px;
                    align-items: center;
                }

                nav ul li {
                    position: relative;
                }

                .nav-logout {
                    display: flex;
                    gap: 5px;
                    align-items: center;
                }

                .nav-logout span {
                    font-weight: 600;
                }
            </style>

        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="container">
            <h2>IFLAB - Laboratório de Fabricação, Robótica e Prototipagem</h2>
            <p>Um espaço inovador para desenvolvimento de projetos, experimentação e aprendizado prático em tecnologias
                de fabricação digital, robótica e eletrônica.</p>
            <a href="{{ route('chat') }}" class="chat-float" title="Abrir Chat">
                <i class="fas fa-comment-dots"></i>
            </a>
            <a href="#agendamento" class="btn-primary">Agende seu uso</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="sobre" class="about">
        <div class="container">
            <div class="section-title">
                <h2>Sobre o IFLAB</h2>
                <p>Conheça nossa história, propósito e infraestrutura</p>
            </div>
            <div class="about-content">
                <div class="about-text">
                    <h3>Inovação e Tecnologia ao seu alcance</h3>
                    <p>O IFLAB foi construído em 2016 como um ambiente multidisciplinar destinado a apoiar projetos de
                        Ensino, Pesquisa e Extensão do IFPR Campus Palmas.</p>
                    <p>Nosso laboratório integra as áreas de robótica, Tecnologias da Informação e Comunicação (TICs), e
                        a Cultura Maker e DIY (Do It Yourself), proporcionando um espaço para experimentação,
                        prototipagem e desenvolvimento de soluções tecnológicas.</p>
                    <p>Com equipamentos de última geração, o IFLAB atende tanto a comunidade acadêmica interna quanto a
                        comunidade externa, fomentando a inovação e o empreendedorismo na região.</p>
                </div>
                <div class="about-image">
                    <img src="https://integra.ifrr.edu.br/api/portfolio/infraestrutura/foto/jpg/47"
                        alt="Laboratório IFLAB">
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="servicos" class="services">
        <div class="container">
            <div class="section-title">
                <h2>Serviços e Recursos</h2>
                <p>Conheça nossos equipamentos e áreas de atuação</p>
            </div>
            <div class="services-grid">
                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-cogs"></i>
                    </div>
                    <div class="service-content">
                        <h3>Manufatura Digital</h3>
                        <ul>
                            <li><i class="fas fa-check-circle"></i> Router CNC</li>
                            <li><i class="fas fa-check-circle"></i> Impressoras 3D (FDM e Resina)</li>
                            <li><i class="fas fa-check-circle"></i> Cortadora a Laser</li>
                            <li><i class="fas fa-check-circle"></i> Plotter de Recorte</li>
                        </ul>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-microchip"></i>
                    </div>
                    <div class="service-content">
                        <h3>Eletrônica</h3>
                        <ul>
                            <li><i class="fas fa-check-circle"></i> Eletrônica Analógica</li>
                            <li><i class="fas fa-check-circle"></i> Eletrônica Digital</li>
                            <li><i class="fas fa-check-circle"></i> Plataformas Arduino e Raspberry</li>
                            <li><i class="fas fa-check-circle"></i> Instrumentos de Medição</li>
                        </ul>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-robot"></i>
                    </div>
                    <div class="service-content">
                        <h3>Robótica</h3>
                        <ul>
                            <li><i class="fas fa-check-circle"></i> Robôs Educacionais</li>
                            <li><i class="fas fa-check-circle"></i> Kits de Robótica</li>
                            <li><i class="fas fa-check-circle"></i> Sensores e Atuadores</li>
                            <li><i class="fas fa-check-circle"></i> Programação e Controle</li>
                        </ul>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-hammer"></i>
                    </div>
                    <div class="service-content">
                        <h3>Marcenaria</h3>
                        <ul>
                            <li><i class="fas fa-check-circle"></i> Serras de Mesa e Fita</li>
                            <li><i class="fas fa-check-circle"></i> Furadeira de Coluna</li>
                            <li><i class="fas fa-check-circle"></i> Lixadeira</li>
                            <li><i class="fas fa-check-circle"></i> Plaina Desengrossadeira</li>
                        </ul>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-fire-alt"></i>
                    </div>
                    <div class="service-content">
                        <h3>Usinagem e Solda</h3>
                        <ul>
                            <li><i class="fas fa-check-circle"></i> Torno Mecânico</li>
                            <li><i class="fas fa-check-circle"></i> Fresadora</li>
                            <li><i class="fas fa-check-circle"></i> Solda Elétrica</li>
                            <li><i class="fas fa-check-circle"></i> Solda MIG/MAG</li>
                        </ul>
                    </div>
                </div>

                <div class="service-card">
                    <div class="service-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <div class="service-content">
                        <h3>Atendimento à Comunidade</h3>
                        <ul>
                            <li><i class="fas fa-check-circle"></i> Projetos Acadêmicos</li>
                            <li><i class="fas fa-check-circle"></i> Projetos de Pesquisa</li>
                            <li><i class="fas fa-check-circle"></i> Projetos de Extensão</li>
                            <li><i class="fas fa-check-circle"></i> Parcerias Externas</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section id="eventos" class="events">
        <div class="container">
            <div class="section-title">
                <h2>Eventos e Atividades</h2>
                <p>Confira nossos eventos, treinamentos e visitas recentes</p>
            </div>

            <div class="events-grid">
                <div class="event-card">
                    <div class="event-image">
                        <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80"
                            alt="Visita Técnica">
                    </div>
                    <div class="event-content">
                        <span class="event-date">15/10/2023</span>
                        <h3>Visita Técnica - Escola Estadual Palmas</h3>
                        <p>Recebemos 40 alunos da Escola Estadual Palmas para uma visita técnica ao laboratório, com
                            demonstrações de impressão 3D e robótica educacional.</p>
                        <a href="eventos.html#visita-15-10-2023" class="event-link">Ver detalhes <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="event-card">
                    <div class="event-image">
                        <img src="https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80"
                            alt="Workshop">
                    </div>
                    <div class="event-content">
                        <span class="event-date">05/10/2023</span>
                        <h3>Workshop de Introdução à Manufatura Digital</h3>
                        <p>Ministramos um workshop sobre os conceitos básicos de manufatura digital, com foco em
                            modelagem 3D e impressão para iniciantes.</p>
                        <a href="eventos.html#workshop-05-10-2023" class="event-link">Ver detalhes <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>

                <div class="event-card">
                    <div class="event-image">
                        <img src="https://images.unsplash.com/photo-1581094271901-8022df4466f9?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80"
                            alt="Treinamento">
                    </div>
                    <div class="event-content">
                        <span class="event-date">28/09/2023</span>
                        <h3>Treinamento em Arduino para Professores</h3>
                        <p>Capacitamos 15 professores da rede pública no uso de plataformas Arduino para aplicações
                            educacionais em sala de aula.</p>
                        <a href="eventos.html#treinamento-28-09-2023" class="event-link">Ver detalhes <i
                                class="fas fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>

            <div class="events-cta">
                <a href="{{ route('eventos.index') }}" class="btn-primary">Ver Todos os Eventos</a>
            </div>
        </div>
    </section>

    <!-- Booking Section -->
    <section id="agendamento" class="booking">
        <div class="container">
            <div class="section-title">
                <h2>Como Agendar</h2>
                <p>Siga os passos abaixo para reservar nossos equipamentos e serviços</p>
            </div>

            <div class="booking-steps">
                <div class="step">
                    <div class="step-number">1</div>
                    <h3>Escolha o Serviço</h3>
                    <p>Selecione o equipamento ou área que você deseja utilizar para seu projeto.</p>
                </div>

                <div class="step">
                    <div class="step-number">2</div>
                    <h3>Preencha o Formulário</h3>
                    <p>Forneça informações sobre seu projeto, datas desejadas e objetivos.</p>
                </div>

                <div class="step">
                    <div class="step-number">3</div>
                    <h3>Aguarda Confirmação</h3>
                    <p>Nossa equipe analisará sua solicitação e entrará em contato para confirmar.</p>
                </div>

                <div class="step">
                    <div class="step-number">4</div>
                    <h3>Utilize o Laboratório</h3>
                    <p>Após confirmação, compareça no horário agendado com seu projeto em mãos.</p>
                </div>
            </div>

            <div class="booking-form">
                <h3 style="text-align: center; color: var(--ifpr-blue); margin-bottom: 30px;">Formulário de Agendamento
                </h3>
                <form id="bookingForm">
                    <div class="form-row">
                        <div class="form-group">
                            <label for="name">Nome Completo</label>
                            <input type="text" id="name" name="name" required>
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" id="email" name="email" required>
                        </div>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="phone">Telefone</label>
                            <input type="tel" id="phone" name="phone" required>
                        </div>
                        <div class="form-group">
                            <label for="category">Categoria</label>
                            <select id="category" name="category" required>
                                <option value="">Selecione</option>
                                <option value="student">Estudante IFPR</option>
                                <option value="teacher">Professor IFPR</option>
                                <option value="external">Comunidade Externa</option>
                                <option value="research">Projeto de Pesquisa</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="service">Serviço Desejado</label>
                        <select id="service" name="service" required>
                            <option value="">Selecione o serviço</option>
                            <option value="cnc">Router CNC</option>
                            <option value="3d">Impressão 3D</option>
                            <option value="laser">Corte a Laser</option>
                            <option value="eletronics">Eletrônica</option>
                            <option value="robotics">Robótica</option>
                            <option value="woodwork">Marcenaria</option>
                            <option value="machining">Usinagem</option>
                            <option value="welding">Solda</option>
                            <option value="other">Outro</option>
                        </select>
                    </div>

                    <div class="form-row">
                        <div class="form-group">
                            <label for="date">Data Desejada</label>
                            <input type="date" id="date" name="date" required>
                        </div>
                        <div class="form-group">
                            <label for="time">Horário Desejado</label>
                            <input type="time" id="time" name="time" required>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="project">Descrição do Projeto</label>
                        <textarea id="project" name="project"
                            placeholder="Descreva brevemente seu projeto, objetivos e o que você pretende produzir no laboratório..." required></textarea>
                    </div>

                    <div style="text-align: center;">
                        <button type="submit" class="btn-primary">Enviar Solicitação</button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contato" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contato</h2>
                <p>Entre em contato conosco para mais informações</p>
            </div>

            <div class="contact-info">
                <div class="contact-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <h3>Endereço</h3>
                    <p>IFPR Campus Palmas<br>
                        Rua Pioneiro, 2153 - Jardim Dallas<br>
                        Palmas - PR, 85555-000</p>
                </div>

                <div class="contact-item">
                    <i class="fas fa-phone-alt"></i>
                    <h3>Telefone</h3>
                    <p>(46) 3265-4300<br>
                        Ramal: 4305 (IFLAB)</p>
                </div>

                <div class="contact-item">
                    <i class="fas fa-envelope"></i>
                    <h3>E-mail</h3>
                    <p>infolab.palmas@ifpr.edu.br<br>
                        iflab.palmas@ifpr.edu.br</p>
                </div>

                <div class="contact-item">
                    <i class="fas fa-clock"></i>
                    <h3>Horário de Funcionamento</h3>
                    <p>Segunda a Sexta: 08h00 às 22h00<br>
                        Sábado: 08h00 às 12h00</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="footer-content">
                <div class="footer-about">
                    <div class="footer-logo">
                        <svg id="marca-ifpr" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 235 54" role="img"
                            aria-label="Instituto Federal do Paraná">
                            <title>Instituto Federal do Paraná</title>
                            <desc>Marca do IFPR</desc>
                            <path fill="#2f9e41"
                                d="M37.4 36.4c0 0.6-0.5 1.1-1 1.1h-8.7c-0.6 0-1.1-0.5-1.1-1.1v-8.7c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V36.4z">
                            </path>
                            <path fill="#2f9e41"
                                d="M24.4 10.3c0 0.6-0.5 1.1-1.1 1.1h-8.7c-0.6 0-1.1-0.5-1.1-1.1V1.6c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V10.3z">
                            </path>
                            <path fill="#2f9e41"
                                d="M37.4 10.3c0 0.6-0.5 1.1-1 1.1h-8.7c-0.6 0-1.1-0.5-1.1-1.1V1.6c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V10.3z">
                            </path>
                            <path fill="#2f9e41"
                                d="M11.4 23.3c0 0.6-0.5 1.1-1.1 1.1H1.6c-0.6 0-1-0.5-1-1v-8.7c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V23.3z">
                            </path>
                            <path fill="#2f9e41"
                                d="M24.4 23.3c0 0.6-0.5 1.1-1.1 1.1h-8.7c-0.6 0-1.1-0.5-1.1-1v-8.7c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V23.3z">
                            </path>
                            <path fill="#2f9e41"
                                d="M11.4 36.4c0 0.6-0.5 1.1-1.1 1.1H1.6c-0.6 0-1-0.5-1-1.1v-8.7c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V36.4z">
                            </path>
                            <path fill="#2f9e41"
                                d="M24.4 36.4c0 0.6-0.5 1.1-1.1 1.1h-8.7c-0.6 0-1.1-0.5-1.1-1.1v-8.7c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V36.4z">
                            </path>
                            <path fill="#2f9e41"
                                d="M11.4 49.4c0 0.6-0.5 1.1-1.1 1.1H1.6c-0.6 0-1-0.5-1-1.1v-8.7c0-0.6 0.5-1 1.1-1h8.7c0.6 0 1.1 0.5 1.1 1.1V49.4z">
                            </path>
                            <path fill="#2f9e41"
                                d="M24.4 49.4c0 0.6-0.5 1.1-1.1 1.1h-8.7c-0.6 0-1.1-0.5-1.1-1.1v-8.7c0-0.6 0.5-1 1.1-1h8.7c0.6 0 1.1 0.5 1.1 1.1V49.4z">
                            </path>
                            <path fill="#ce181e"
                                d="M11.9 6c0 3.3-2.7 6-6 6C2.7 11.9 0 9.3 0 6S2.7 0 6 0C9.3 0 11.9 2.7 11.9 6"></path>
                            <text transform="matrix(1.0017 0 0 1 43.6553 24.1582)" fill="#black"
                                font-family="Arial, sans-serif" font-size="14" font-weight="bold">INSTITUTO
                                FEDERAL</text>
                            <text transform="matrix(1.0017 0 0 1 43.9331 37.5249)" fill="#black"
                                font-family="Arial, sans-serif" font-size="12" font-weight="bold">Paraná</text>
                            <text transform="matrix(1.0017 0 0 1 43.9326 50.5059)" fill="#black"
                                font-family="Arial, sans-serif" font-size="12">Campus Palmas</text>
                        </svg>
                        <h3>IFPR Campus Palmas</h3>
                    </div>
                    <p>O IFLAB é um laboratório de fabricação digital e prototipagem do Instituto Federal do Paraná,
                        Campus Palmas, dedicado a apoiar projetos de inovação e tecnologia.</p>
                    <div class="social-links">
                        <a href="#"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"><i class="fab fa-youtube"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>

                <div class="footer-links">
                    <h4>Links Rápidos</h4>
                    <ul>
                        <li><a href="#sobre">Sobre o IFLAB</a></li>
                        <li><a href="#servicos">Serviços</a></li>
                        <li><a href="#eventos">Eventos</a></li>
                        <li><a href="#agendamento">Agendamento</a></li>
                        <li><a href="#contato">Contato</a></li>
                        <li><a href="#">Regulamento de Uso</a></li>
                    </ul>
                </div>

                <div class="footer-links">
                    <h4>Institucional</h4>
                    <ul>
                        <li><a href="#">IFPR Campus Palmas</a></li>
                        <li><a href="#">Biblioteca</a></li>
                        <li><a href="#">Editais</a></li>
                        <li><a href="#">Eventos</a></li>
                        <li><a href="#">Ouvidoria</a></li>
                    </ul>
                </div>
            </div>

            <div class="copyright">
                <p>&copy; 2023 IFPR Campus Palmas - IFLAB. Todos os direitos reservados.</p>
            </div>
        </div>
    </footer>

    <script>
        // Form submission
        document.getElementById('bookingForm').addEventListener('submit', function(e) {
            e.preventDefault();

            // Get form values
            const formData = new FormData(this);
            const data = Object.fromEntries(formData);

            // Here you would normally send the data to a server
            console.log('Form submitted:', data);

            // Show success message
            const formContainer = this.parentElement;
            const successMessage = document.createElement('div');
            successMessage.style.background = '#4CAF50';
            successMessage.style.color = 'white';
            successMessage.style.padding = '15px';
            successMessage.style.borderRadius = '5px';
            successMessage.style.marginTop = '20px';
            successMessage.style.textAlign = 'center';
            successMessage.innerHTML =
                '<i class="fas fa-check-circle"></i> Solicitação enviada com sucesso! Entraremos em contato em breve.';

            formContainer.appendChild(successMessage);
            this.reset();

            // Remove message after 5 seconds
            setTimeout(() => {
                successMessage.remove();
            }, 5000);
        });

        // Smooth scrolling for navigation links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();

                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    window.scrollTo({
                        top: target.offsetTop - 80,
                        behavior: 'smooth'
                    });
                }
            });
        });
    </script>
</body>

</html>
inflab.html
Exibindo inflab.html.
