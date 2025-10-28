<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bem-vindo ao Chat</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #e0f0ff, #ffffff);
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .apresentacao {
            position: relative;
            background: rgba(255, 255, 255, 0.95);
            padding: 50px 40px;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            text-align: center;
            max-width: 450px;
            width: 90%;
            animation: fadeIn 1s ease forwards;
            z-index: 10;
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

        < !DOCTYPE html><html lang="pt-BR"><head><meta charset="UTF-8"><meta name="viewport" content="width=device-width, initial-scale=1.0"><title>Bem-vindo ao Chat</title><link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet"><link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"><style>* {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html,
        body {
            height: 100%;
            font-family: 'Inter', sans-serif;
            background: linear-gradient(135deg, #e0f0ff, #ffffff);
            display: flex;
            justify-content: center;
            align-items: center;
            overflow: hidden;
        }

        .apresentacao {
            position: relative;
            background: rgba(255, 255, 255, 0.95);
            padding: 50px 40px;
            border-radius: 20px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
            text-align: center;
            max-width: 450px;
            width: 90%;
            animation: fadeIn 1s ease forwards;
            z-index: 10;
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
            100% {
                transform: translateY(0);
            }

            50% {
                transform: translateY(-5px);
            }
        }

        /* Ícones flutuantes de física */
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

        /* Posições variadas e durações */
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

        /* Botão de voltar */
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
    <!-- Botão de voltar -->
    <a href="{{ route('home') }}" class="btn-home"><i class="fas fa-home"></i> Início</a>

    <!-- 15 ícones flutuantes -->
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

    <div class="apresentacao">
        <h2>👋 Olá, {{ auth()->user()?->name ?? 'Usuário' }}!</h2>
        <p>Seu e-mail: <strong>{{ auth()->user()?->email ?? 'não informado' }}</strong></p>
        <p>Seja bem-vindo(a) ao <strong>Chat do Laboratório de Física</strong></p>
        <a href="{{ route('chat.index') }}" class="btn-entrar">Entrar no Chat</a>
    </div>
</body>

</html>
