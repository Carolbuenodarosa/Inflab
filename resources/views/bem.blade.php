@include('layouts.cabecalho')
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Bem-vindo</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-pO7l4X2R3XcXfKgN6pD9QW9f1MlQ+7sy9aZ5R1X4cR1A0bFyGqV6K5vDyrSZjxkzQwH/5c0fLxjG0ZTS50z9dQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        .welcome-page {
            font-family: 'Inter', Arial, sans-serif;
            background: linear-gradient(135deg, #f5f7fa, #c3cfe2);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            padding: 20px;
        }

        .welcome-container {
            background-color: #fff;
            padding: 40px 30px;
            border-radius: 20px;
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
            max-width: 550px;
            text-align: center;
            position: relative;
        }

        .welcome-container h1 {
            font-size: 2rem;
            margin-bottom: 15px;
            color: #333;
        }

        .welcome-container p {
            font-size: 1rem;
            color: #555;
            margin-bottom: 25px;
        }

        .welcome-container .btn {
            display: inline-block;
            padding: 12px 25px;
            font-size: 16px;
            background-color: #007bff;
            color: #fff;
            text-decoration: none;
            border-radius: 10px;
            transition: background-color 0.3s, transform 0.2s;
        }

        .welcome-container .btn:hover {
            background-color: #0056b3;
            transform: translateY(-2px);
        }

        /* Engrenagens animadas */
        .gear {
            font-size: 50px;
            color: #007bff;
            position: absolute;
            animation: spin 4s linear infinite;
        }

        .gear.top-left {
            top: -25px;
            left: -25px;
        }

        .gear.bottom-right {
            bottom: -25px;
            right: -25px;
            animation-duration: 6s;
        }

        @keyframes spin {
            from {
                transform: rotate(0deg);
            }

            to {
                transform: rotate(360deg);
            }
        }

        @media (max-width: 480px) {
            .welcome-container {
                padding: 30px 20px;
            }

            .gear {
                font-size: 35px;
            }
        }
    </style>
</head>

<body>
    <div class="welcome-page">
        <div class="welcome-container">
            <!-- Engrenagens animadas -->
            <i class="fas fa-cog gear top-left"></i>
            <i class="fas fa-cog gear bottom-right"></i>

            <h1>Bem-vindo(a)!</h1>
            <p>Olá, <strong>{{ Auth::user()->email }}</strong>.</p>
            <p>Infelizmente, esta página ainda está em andamento. Em breve teremos novidades!</p>
            <a href="{{ route('home') }}" class="btn">Ir para a Home</a>
        </div>
    </div>
</body>

@include('layouts.footer')

</html>
