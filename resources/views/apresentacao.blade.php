<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo ao Chat</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* ===================== */
        /* VARIÁVEIS DE COR */
        /* ===================== */
        :root {
            --ifpr-blue: #0056a3;
            --ifpr-light-blue: #0078d4;
            --ifpr-dark-blue: #003d7a;
            --ifpr-gray: #f5f5f5;
            --ifpr-text: #333;
        }

        /* ===================== */
        /* RESET & BODY */
        /* ===================== */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #e0f0ff, #ffffff);
            color: var(--ifpr-text);
            line-height: 1.6;
            min-height: 100vh;
            overflow-x: hidden;
        }

        /* ===================== */
        /* CABEÇALHO */
        /* ===================== */
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
            padding: 15px;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 12px;
        }

        .logo img {
            height: 55px;
            width: auto;
            border-radius: 8px;
        }

        .logo h1 {
            color: var(--ifpr-blue);
            font-size: 1.4rem;
            font-weight: 600;
        }

        nav ul {
            display: flex;
            align-items: center;
            list-style: none;
            gap: 20px;
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

        .btn-blue {
            background-color: var(--ifpr-light-blue);
            color: #fff;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
        }

        .btn-blue:hover {
            background-color: var(--ifpr-blue);
        }

        .nav-logout {
            display: flex;
            align-items: center;
            gap: 12px;
            background: #f9fafc;
            border-radius: 12px;
            padding: 6px 14px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
        }

        .user-name {
            font-weight: 600;
            font-size: 14px;
            color: var(--ifpr-blue);
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .logout-form button {
            background: #fff;
            border: 1px solid var(--ifpr-light-blue);
            color: var(--ifpr-light-blue);
            padding: 6px 10px;
            border-radius: 6px;
            cursor: pointer;
            font-size: 15px;
            font-weight: 500;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logout-form button:hover {
            background: var(--ifpr-light-blue);
            color: #fff;
        }

        /* ===================== */
        /* CHAT CENTRAL */
        /* ===================== */
        .chat-container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: calc(100vh - 100px);
            position: relative;
        }

        .apresentacao {
            background: rgba(255, 255, 255, 0.95);
            padding: 50px 40px;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            text-align: center;
            max-width: 450px;
            width: 90%;
            animation: fadeIn 1s ease forwards;
            z-index: 10;
            position: relative;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .apresentacao h2 {
            font-size: 2.2rem;
            color: #003366;
            margin-bottom: 10px;
        }

        .apresentacao p {
            font-size: 1rem;
            color: #555;
            margin-bottom: 10px;
        }

        .apresentacao p strong {
            color: #007bff;
        }

        .btn-entrar {
            display: inline-block;
            margin-top: 20px;
            padding: 14px 30px;
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: #fff;
            font-weight: 600;
            border: none;
            border-radius: 30px;
            font-size: 1.1rem;
            cursor: pointer;
            text-decoration: none;
            box-shadow: 0 8px 20px rgba(0, 85, 170, 0.3);
            transition: all 0.3s ease;
        }

        .btn-entrar:hover {
            transform: translateY(-3px) scale(1.05);
            box-shadow: 0 12px 25px rgba(0, 85, 170, 0.4);
            background: linear-gradient(135deg, #0056b3, #003366);
        }

        .btn-entrar::after {
            content: '💬';
            margin-left: 10px;
            display: inline-block;
            animation: bounce 1s infinite;
        }

        @keyframes bounce {

            0%,
            100 {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-5px);
            }
        }

        .btn-home {
            position: absolute;
            top: 20px;
            left: 20px;
            background: #f0f0f0;
            color: #003366;
            padding: 10px 15px;
            border-radius: 20px;
            text-decoration: none;
            font-weight: 600;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2);
            transition: all 0.3s ease;
            z-index: 15;
        }

        .btn-home:hover {
            background: #003366;
            color: #fff;
            transform: scale(1.05);
        }

        /* ===================== */
        /* ÍCONES FLUTUANTES */
        /* ===================== */
        .icon {
            position: absolute;
            font-size: 1.5rem;
            color: rgba(0, 123, 255, 0.5);
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {

            0%,
            100% {
                transform: translateY(0) rotate(0deg);
            }

            50% {
                transform: translateY(-15px) rotate(15deg);
            }
        }

        /* Posições aleatórias para ícones */
        .icon:nth-child(1) {
            top: 5%;
            left: 10%;
            animation-duration: 5s;
        }

        .icon:nth-child(2) {
            top: 15%;
            right: 12%;
            animation-duration: 7s;
        }

        .icon:nth-child(3) {
            top: 25%;
            left: 20%;
            animation-duration: 6s;
        }

        .icon:nth-child(4) {
            top: 35%;
            right: 25%;
            animation-duration: 8s;
        }

        .icon:nth-child(5) {
            top: 45%;
            left: 30%;
            animation-duration: 9s;
        }

        .icon:nth-child(6) {
            bottom: 10%;
            left: 15%;
            animation-duration: 7s;
        }

        .icon:nth-child(7) {
            bottom: 15%;
            right: 20%;
            animation-duration: 6s;
        }

        .icon:nth-child(8) {
            bottom: 25%;
            left: 25%;
            animation-duration: 8s;
        }

        .icon:nth-child(9) {
            bottom: 35%;
            right: 30%;
            animation-duration: 9s;
        }

        .icon:nth-child(10) {
            top: 50%;
            left: 50%;
            animation-duration: 10s;
        }

        .icon:nth-child(11) {
            top: 60%;
            right: 40%;
            animation-duration: 7s;
        }

        .icon:nth-child(12) {
            top: 70%;
            left: 60%;
            animation-duration: 8s;
        }

        .icon:nth-child(13) {
            bottom: 50%;
            right: 50%;
            animation-duration: 9s;
        }

        .icon:nth-child(14) {
            bottom: 20%;
            left: 70%;
            animation-duration: 6s;
        }

        .icon:nth-child(15) {
            top: 10%;
            right: 70%;
            animation-duration: 10s;
        }

        /* ===================== */
        /* RESPONSIVO */
        /* ===================== */
        @media (max-width: 768px) {
            .header-container {
                flex-direction: column;
                text-align: center;
                gap: 10px;
            }

            nav ul {
                flex-wrap: wrap;
                justify-content: center;
            }

            .nav-logout {
                flex-direction: column;
                gap: 8px;
                padding: 10px;
            }

            .logout-form button {
                width: 100%;
            }
        }

        @media (max-width: 480px) {
            .apresentacao {
                padding: 40px 20px;
            }

            .apresentacao h2 {
                font-size: 1.8rem;
            }

            .btn-entrar {
                width: 100%;
                padding: 12px 0;
            }

            .btn-home {
                padding: 8px 12px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>

<body>
    <!-- CABEÇALHO -->
    <header>
        <div class="container header-container">
            <div class="logo">
                <img src="{{ asset('images/logo.png') }}" alt="Logo IFLAB">
                <h1>IFLAB - IFPR Campus Palmas</h1>
            </div>

            <nav>
                <ul>
                    <li><a href="{{ route('home') }}">Home</a></li>
                    <li><a href="{{ route('home') }}#sobre">Sobre</a></li>
                    <li><a href="{{ route('home') }}#servicos">Serviços</a></li>
                    <li><a href="{{ route('eventos.index') }}">Eventos</a></li>
                    <li><a href="{{ route('home') }}#agendamento">Agendamento</a></li>
                    <li><a href="{{ route('home') }}#contato">Contato</a></li>

                    @guest
                        <li><a href="{{ route('login') }}" class="btn-blue">Login</a></li>
                    @endguest

                    @auth
                        <li>
                            <div class="nav-logout">
                                <span class="user-name"><i class="fa-solid fa-user"></i> {{ Auth::user()->name }}</span>
                                <form method="POST" action="{{ route('logout') }}" class="logout-form">
                                    @csrf
                                    <button type="submit" title="Sair"><i
                                            class="fa-solid fa-right-from-bracket"></i></button>
                                </form>
                            </div>
                        </li>
                    @endauth
                </ul>
            </nav>
        </div>
    </header>

    <!-- CHAT CENTRAL -->
    <div class="chat-container">
        <!-- ÍCONES FLUTUANTES -->
        <i class="fas fa-atom icon"></i>
        <i class="fas fa-rocket icon"></i>
        <i class="fas fa-bolt icon"></i>
        <i class="fas fa-flask icon"></i>
        <i class="fas fa-magnet icon"></i>
        <i class="fas fa-dna icon"></i>
        <i class="fas fa-microscope icon"></i>
        <i class="fas fa-vial icon"></i>
        <i class="fas fa-lightbulb icon"></i>
        <i class="fas fa-fire icon"></i>
        <i class="fas fa-cube icon"></i>
        <i class="fas fa-wave-square icon"></i>
        <i class="fas fa-globe icon"></i>
        <i class="fas fa-satellite icon"></i>
        <i class="fas fa-ruler icon"></i>

        <!-- CARTÃO DE APRESENTAÇÃO -->
        <div class="apresentacao">
            <h2>👋 Olá, {{ auth()->user()?->name ?? 'Usuário' }}!</h2>
            <p>Seu e-mail: <strong>{{ auth()->user()?->email ?? 'não informado' }}</strong></p>
            <p>Seja bem-vindo(a) ao <strong>Chat do Laboratório de Física</strong></p>
            <a href="{{ route('chat.index') }}" class="btn-entrar">Entrar no Chat</a>
        </div>

        <!-- BOTÃO DE VOLTAR -->
        <a href="{{ route('home') }}" class="btn-home"><i class="fas fa-home"></i> Início</a>
    </div>
</body>

</html>
