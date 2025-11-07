@include('layouts.cabecalho')
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos - IFLAB | IFPR Palmas</title>
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
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
        }

        /* Page Header */
        .page-header {
            background: linear-gradient(rgba(0, 86, 163, 0.8), rgba(0, 61, 122, 0.9)), url('https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80');
            background-size: cover;
            background-position: center;
            color: white;
            padding: 80px 0;
            text-align: center;
        }

        .page-header h2 {
            font-size: 3rem;
            margin-bottom: 20px;
            text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        }

        .breadcrumb {
            display: flex;
            justify-content: center;
            list-style: none;
            margin-top: 20px;
        }

        .breadcrumb li {
            margin: 0 10px;
        }

        .breadcrumb li a {
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            transition: color 0.3s;
        }

        .breadcrumb li a:hover {
            color: white;
        }

        .breadcrumb li:not(:last-child)::after {
            content: '/';
            margin-left: 15px;
            color: rgba(255, 255, 255, 0.6);
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

        /* Filter */
        .filter-container {
            display: flex;
            justify-content: center;
            margin-bottom: 40px;
            flex-wrap: wrap;
            gap: 15px;
        }

        .filter-btn {
            background: white;
            border: 2px solid var(--ifpr-light-blue);
            color: var(--ifpr-light-blue);
            padding: 8px 20px;
            border-radius: 50px;
            cursor: pointer;
            transition: all 0.3s;
            font-weight: 600;
        }

        .filter-btn.active,
        .filter-btn:hover {
            background: var(--ifpr-light-blue);
            color: white;
        }

        /* Events Grid */
        .events-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(350px, 1fr));
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

        /* Event Detail */
        .event-detail {
            background: var(--ifpr-gray);
            padding: 60px 0;
        }

        .event-detail-container {
            background: white;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }

        .event-detail-image {
            height: 100%;
            min-height: 400px;
        }

        .event-detail-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .event-detail-content {
            padding: 40px;
            display: flex;
            flex-direction: column;
        }

        .event-detail-date {
            display: inline-block;
            background: var(--ifpr-light-blue);
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 600;
            margin-bottom: 20px;
            align-self: flex-start;
        }

        .event-detail-content h2 {
            color: var(--ifpr-blue);
            font-size: 2rem;
            margin-bottom: 20px;
        }

        .event-detail-content p {
            margin-bottom: 20px;
        }

        .event-detail-content h3 {
            color: var(--ifpr-blue);
            margin: 25px 0 15px;
            font-size: 1.3rem;
        }

        .event-detail-content ul {
            list-style-type: none;
            margin-bottom: 20px;
        }

        .event-detail-content ul li {
            padding: 8px 0;
            border-bottom: 1px solid #eee;
            display: flex;
            align-items: center;
        }

        .event-detail-content ul li:last-child {
            border-bottom: none;
        }

        .event-detail-content ul li i {
            color: var(--ifpr-light-blue);
            margin-right: 10px;
        }

        .event-detail-gallery {
            margin-top: 30px;
        }

        .event-detail-gallery h3 {
            color: var(--ifpr-blue);
            margin-bottom: 20px;
            font-size: 1.3rem;
        }

        .gallery-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
            gap: 15px;
        }

        .gallery-item {
            border-radius: 8px;
            overflow: hidden;
            height: 150px;
        }

        .gallery-item img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            transition: transform 0.3s;
        }

        .gallery-item:hover img {
            transform: scale(1.05);
        }

        .back-to-events {
            display: inline-flex;
            align-items: center;
            color: var(--ifpr-light-blue);
            text-decoration: none;
            font-weight: 600;
            margin-bottom: 30px;
            transition: color 0.3s;
        }

        .back-to-events:hover {
            color: var(--ifpr-dark-blue);
        }

        .back-to-events i {
            margin-right: 8px;
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
            .event-detail-container {
                grid-template-columns: 1fr;
            }

            .event-detail-image {
                min-height: 300px;
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

            .page-header h2 {
                font-size: 2rem;
            }

            .events-grid {
                grid-template-columns: 1fr;
            }
        }

        .Eventos-btn-componente {
            background-color: #0056a3;
            color: white;
            padding: 15px;
            width: 230px;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 18px;
            text-decoration: none;
            border-radius: 15px;
        }

        .Eventos-btn-componente:hover {
            background-color: #47708f;
            transition: 0.5s:
        }
    </style>
</head>

<body>


    <!-- Page Header -->
    <div class="page-header">
        <h2>Eventos e Atividades</h2>
        <ul class="breadcrumb">
            <li><a href="inflab.html">Início</a></li>
            <li>Eventos</li>
        </ul>
    </div>

    <!-- Events Section -->
    <section class="events">
        <div class="container">
            <div class="section-title">
                <h2>Nossos Eventos</h2>
                <p>Confira todos os eventos, treinamentos e visitas realizados no IFLAB</p>
            </div>

            <div class="filter-container">
                <button class="filter-btn active" data-filter="all">Todos</button>
                <button class="filter-btn" data-filter="visita">Visitas</button>
                <button class="filter-btn" data-filter="workshop">Workshops</button>
                <button class="filter-btn" data-filter="treinamento">Treinamentos</button>
                <button class="filter-btn" data-filter="exposicao">Exposições</button>
                @auth
                <-- verificação de usuario para adicionar evento-->
                    @if (strtolower(Auth::user()->email) === 'carolbrm265@gmail.com')
                        <a href="{{ route('eventos.create') }}" class="Eventos-btn-componente">
                            Cadastrar Novo Evento
                        </a>
                    @endif
                @endauth

            </div>
            <!--Eventos-->
            <div class="events-grid">
                @foreach ($eventos as $evento)
                    <div class="event-card" data-category="{{ $evento->categoria }}">
                        <div class="event-image">
                            @if ($evento->imagem && Storage::disk('public')->exists($evento->imagem))
                                <img src="{{ Storage::url($evento->imagem) }}" alt="{{ $evento->titulo }}">
                            @else
                                <div class="placeholder">Sem imagem</div>
                            @endif
                        </div>

                        <div class="event-content">
                            <span class="event-date">
                                {{ \Carbon\Carbon::parse($evento->data_evento)->format('d/m/Y') }}
                                às {{ \Carbon\Carbon::parse($evento->hora_evento)->format('H:i') }}
                            </span>
                            <h3>{{ $evento->titulo }}</h3>
                            <p>{{ $evento->descricao }}</p>
                            <p><strong>Local:</strong> {{ $evento->local }}</p>
                            <a href="{{ route('eventos.show', $evento->id) }}" class="event-link">
                                Ver detalhes <i class="fas fa-arrow-right"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>


        </div>
    </section>

    <!-- Event Detail Section -->
    <section id="visita-15-10-2023" class="event-detail">
        <div class="container">
            <a href="#events" class="back-to-events"><i class="fas fa-arrow-left"></i> Voltar para eventos</a>

            <div class="event-detail-container">
                <div class="event-detail-image">
                    <img src="https://images.unsplash.com/photo-1523240795612-9a054b0db644?ixlib=rb-4.0.3&auto=format&fit=crop&w=1950&q=80"
                        alt="Visita Técnica">
                </div>
                <div class="event-detail-content">
                    <span class="event-detail-date">15 de Outubro de 2023</span>
                    <h2>Visita Técnica - Escola Estadual Palmas</h2>
                    <p>No dia 15 de outubro, recebemos 40 alunos e 2 professores da Escola Estadual Palmas para uma
                        visita técnica ao IFLAB. O objetivo foi apresentar aos estudantes as possibilidades oferecidas
                        pela tecnologia e estimular o interesse por carreiras na área de tecnologia e fabricação
                        digital.</p>
                    <p>Durante a visita, os alunos tiveram a oportunidade de conhecer todos os equipamentos do
                        laboratório, com demonstrações práticas de impressão 3D, robótica educacional e usinagem CNC.
                    </p>

                    <h3>Atividades Realizadas</h3>
                    <ul>
                        <li><i class="fas fa-check-circle"></i> Apresentação sobre o IFLAB e seus recursos</li>
                        <li><i class="fas fa-check-circle"></i> Demonstração de impressão 3D com modelos educacionais
                        </li>
                        <li><i class="fas fa-check-circle"></i> Atividade prática com robôs educacionais</li>
                        <li><i class="fas fa-check-circle"></i> Tour pelos equipamentos de usinagem e marcenaria</li>
                        <li><i class="fas fa-check-circle"></i> Sessão de perguntas e respostas com os monitores do
                            laboratório</li>
                    </ul>

                    <h3>Galeria de Imagens</h3>
                    <div class="event-detail-gallery">
                        <div class="gallery-grid">
                            <div class="gallery-item">
                                <img src="https://images.unsplash.com/photo-1581092918056-0c4c3acd3789?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                                    alt="Visita Técnica">
                            </div>
                            <div class="gallery-item">
                                <img src="https://images.unsplash.com/photo-1581094271901-8022df4466f9?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                                    alt="Visita Técnica">
                            </div>
                            <div class="gallery-item">
                                <img src="https://images.unsplash.com/photo-1581094794329-c8112a89af12?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                                    alt="Visita Técnica">
                            </div>
                            <div class="gallery-item">
                                <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=500&q=80"
                                    alt="Visita Técnica">
                            </div>
                        </div>
                    </div>
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
                            <path fill="#ffffff"
                                d="M37.4 36.4c0 0.6-0.5 1.1-1 1.1h-8.7c-0.6 0-1.1-0.5-1.1-1.1v-8.7c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V36.4z">
                            </path>
                            <path fill="#ffffff"
                                d="M24.4 10.3c0 0.6-0.5 1.1-1.1 1.1h-8.7c-0.6 0-1.1-0.5-1.1-1.1V1.6c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V10.3z">
                            </path>
                            <path fill="#ffffff"
                                d="M37.4 10.3c0 0.6-0.5 1.1-1 1.1h-8.7c-0.6 0-1.1-0.5-1.1-1.1V1.6c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V10.3z">
                            </path>
                            <path fill="#ffffff"
                                d="M11.4 23.3c0 0.6-0.5 1.1-1.1 1.1H1.6c-0.6 0-1-0.5-1-1v-8.7c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V23.3z">
                            </path>
                            <path fill="#ffffff"
                                d="M24.4 23.3c0 0.6-0.5 1.1-1.1 1.1h-8.7c-0.6 0-1.1-0.5-1.1-1v-8.7c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V23.3z">
                            </path>
                            <path fill="#ffffff"
                                d="M11.4 36.4c0 0.6-0.5 1.1-1.1 1.1H1.6c-0.6 0-1-0.5-1-1.1v-8.7c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V36.4z">
                            </path>
                            <path fill="#ffffff"
                                d="M24.4 36.4c0 0.6-0.5 1.1-1.1 1.1h-8.7c-0.6 0-1.1-0.5-1.1-1.1v-8.7c0-0.6 0.5-1.1 1.1-1.1h8.7c0.6 0 1.1 0.5 1.1 1.1V36.4z">
                            </path>
                            <path fill="#ffffff"
                                d="M11.4 49.4c0 0.6-0.5 1.1-1.1 1.1H1.6c-0.6 0-1-0.5-1-1.1v-8.7c0-0.6 0.5-1 1.1-1h8.7c0.6 0 1.1 0.5 1.1 1.1V49.4z">
                            </path>
                            <path fill="#ffffff"
                                d="M24.4 49.4c0 0.6-0.5 1.1-1.1 1.1h-8.7c-0.6 0-1.1-0.5-1.1-1.1v-8.7c0-0.6 0.5-1 1.1-1h8.7c0.6 0 1.1 0.5 1.1 1.1V49.4z">
                            </path>
                            <path fill="#0056a3"
                                d="M11.9 6c0 3.3-2.7 6-6 6C2.7 11.9 0 9.3 0 6S2.7 0 6 0C9.3 0 11.9 2.7 11.9 6"></path>
                            <text transform="matrix(1.0017 0 0 1 43.6553 24.1582)" fill="#ffffff"
                                font-family="Arial, sans-serif" font-size="14" font-weight="bold">INSTITUTO
                                FEDERAL</text>
                            <text transform="matrix(1.0017 0 0 1 43.9331 37.5249)" fill="#ffffff"
                                font-family="Arial, sans-serif" font-size="18" font-weight="bold">Paraná</text>
                            <text transform="matrix(1.0017 0 0 1 43.9326 50.5059)" fill="#ffffff"
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
                        <li><a href="index.html#sobre">Sobre o IFLAB</a></li>
                        <li><a href="index.html#servicos">Serviços</a></li>
                        <li><a href="index.html#eventos">Eventos</a></li>
                        <li><a href="index.html#agendamento">Agendamento</a></li>
                        <li><a href="index.html#contato">Contato</a></li>
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
        // Filter functionality
        const filterBtns = document.querySelectorAll('.filter-btn');
        const eventCards = document.querySelectorAll('.event-card');

        filterBtns.forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons
                filterBtns.forEach(b => b.classList.remove('active'));
                // Add active class to clicked button
                btn.classList.add('active');

                const filter = btn.getAttribute('data-filter');

                eventCards.forEach(card => {
                    if (filter === 'all' || card.getAttribute('data-category') === filter) {
                        card.style.display = 'flex';
                    } else {
                        card.style.display = 'none';
                    }
                });
            });
        });

        // Smooth scrolling for anchor links
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
