<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png"
        href="https://th.bing.com/th/id/ODF.c23nEdcixdppmcbU_O9GoA?w=32&h=32&qlt=90&pcl=fffffc&o=6&cb=12&pid=1.2">
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
