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

        /* Botão de login */
        .btn-blue {
            display: inline-block;
            background-color: var(--ifpr-light-blue);
            color: #fff;
            padding: 10px 20px;
            border-radius: 6px;
            text-decoration: none;
            font-weight: 500;
            font-size: 14px;
            transition: background-color 0.25s ease;
        }

        .btn-blue:hover {
            background-color: var(--ifpr-blue);
        }

        /* Área do usuário logado */
        .nav-logout {
            display: flex;
            align-items: center;
            gap: 12px;
            background: #f9fafc;
            border-radius: 12px;
            padding: 6px 14px;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            transition: all 0.3s ease;
        }

        .nav-logout:hover {
            box-shadow: 0 3px 10px rgba(0, 0, 0, 0.15);
            transform: translateY(-1px);
        }

        .user-name {
            font-weight: 600;
            font-size: 14px;
            color: var(--ifpr-blue);
            white-space: nowrap;
            display: flex;
            align-items: center;
            gap: 6px;
        }

        .user-name i {
            color: var(--ifpr-light-blue);
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
            transition: all 0.3s ease;
            min-width: 40px;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .logout-form button:hover {
            background: var(--ifpr-light-blue);
            color: #fff;
            box-shadow: 0 3px 8px rgba(0, 0, 0, 0.2);
            transform: translateY(-1px);
        }

        /* Responsivo */
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
    </style>
</head>

<body>
    <header>
        <div class="container header-container">
            <div class="logo">
                <!-- SUA LOGO NORMAL -->
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
                                    <button type="submit" title="Sair">
                                        <i class="fa-solid fa-right-from-bracket"></i>
                                    </button>
                                </form>
                            </div>
                        </li>
                    @endauth
                </ul>
            </nav>
        </div>
    </header>
</body>

</html>
