<!DOCTYPE html>
<html lang="pt-BR">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fórum</title>

    <style>
        /* ======================================================
                    FÓRUM PROFISSIONAL • UI PREMIUM
           ====================================================== */

        :root {
            --bg: #f0f2f5;
            --card: #ffffff;
            --text: #1f2937;
            --text-muted: #6b7280;
            --primary: #2563eb;
            --primary-light: #eff6ff;
            --border: #e5e7eb;
            --shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
            --radius: 16px;
        }

        body {
            margin: 0;
            padding: 35px 15px;
            font-family: "Inter", Arial, sans-serif;
            background: var(--bg);
            display: flex;
            justify-content: center;
        }

        .page-wrapper {
            width: 100%;
            max-width: 880px;
        }

        .container {
            width: 100%;
            animation: fadeIn .4s ease-in-out;
            margin-top: 20px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        h1 {
            text-align: center;
            font-size: 32px;
            font-weight: 800;
            color: var(--text);
            margin-bottom: 25px;
            letter-spacing: -0.5px;
        }

        /* LISTA DE POSTS */
        .chat-box {
            display: flex;
            flex-direction: column-reverse;
            gap: 22px;
            margin-bottom: 30px;
        }

        .message {
            display: flex;
            gap: 18px;
            background: var(--card);
            border-radius: var(--radius);
            padding: 22px;
            border: 1px solid var(--border);
            box-shadow: var(--shadow);
            transition: transform 0.15s ease, box-shadow 0.15s ease;
        }

        .message:hover {
            transform: translateY(-3px);
            box-shadow: 0 12px 28px rgba(0, 0, 0, 0.12);
        }

        .message-avatar {
            min-width: 55px;
            height: 55px;
            border-radius: 50%;
            background: var(--primary-light);
            border: 2px solid var(--primary);
            display: flex;
            justify-content: center;
            align-items: center;
            color: var(--primary);
            font-size: 22px;
            font-weight: 700;
        }

        .message-content {
            flex: 1;
        }

        .message-header {
            display: flex;
            justify-content: space-between;
            margin-bottom: 6px;
        }

        .user {
            font-weight: 700;
            font-size: 1.05rem;
            color: var(--text);
        }

        .time {
            font-size: 0.85rem;
            color: var(--text-muted);
        }

        .message-text {
            font-size: 1rem;
            line-height: 1.6;
            color: var(--text);
            margin-top: 5px;
        }

        /* FORMULÁRIO */
        form {
            background: var(--card);
            border-radius: var(--radius);
            padding: 22px;
            border: 1px solid var(--border);
            box-shadow: var(--shadow);
            display: flex;
            gap: 12px;
            align-items: center;
        }

        form input[type="text"] {
            flex: 1;
            padding: 14px 16px;
            border-radius: var(--radius);
            background: #f8fafc;
            border: 1px solid #d1d5db;
            font-size: 1rem;
            transition: border 0.2s, background 0.2s;
        }

        form input[type="text"]:focus {
            background: #ffffff;
            border-color: var(--primary);
            outline: none;
            box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.15);
        }

        form button {
            padding: 14px 26px;
            border-radius: var(--radius);
            border: none;
            background: var(--primary);
            color: white;
            font-weight: 600;
            font-size: 1rem;
            cursor: pointer;
            transition: background 0.2s, transform 0.2s;
        }

        form button:hover {
            background: #1e40af;
            transform: translateY(-1px);
        }

        /* MOBILE */
        @media (max-width: 600px) {
            .message {
                flex-direction: column;
            }

            .message-avatar {
                margin-bottom: 10px;
            }

            form {
                flex-direction: column;
            }

            form button {
                width: 100%;
            }
        }

        /* ==== BARRA DE MANUTENÇÃO ==== */
        .maintenance-banner {
            background: #f59e0b;
            color: #1f2937;
            padding: 15px;
            text-align: center;
            font-size: 18px;
            font-weight: 600;
            border-radius: 10px;
            margin-bottom: 25px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
        }

        .maintenance-banner a.btn-voltar-eventos {
            display: inline-block;
            margin-left: 12px;
            padding: 7px 15px;
            background: #2563eb;
            color: #fff;
            border-radius: 8px;
            text-decoration: none;
            font-size: 15px;
        }

        .maintenance-banner a.btn-voltar-eventos:hover {
            background: #1e40af;
        }

        .link-home {
            display: inline-block;
            margin: 10px 0 20px 0;
            color: var(--primary);
            font-weight: 600;
            text-decoration: none;
        }

        .link-home:hover {
            text-decoration: underline;
        }
    </style>
</head>

<body>

    <div class="page-wrapper">

        <div class="maintenance-banner">
            🚧 Esta página está em manutenção. <span id="timer"></span>
            <a href="{{ route('eventos.index') }}" class="btn-voltar-eventos">Voltar para Eventos</a>
        </div>
        <div class="container">

            <h1>Fórum de Discussão</h1>

            <div class="chat-box" id="chat-box">
                @forelse ($messages as $msg)
                    <div class="message">
                        <div class="message-avatar">
                            {{ strtoupper(substr($msg->user->name ?? 'U', 0, 1)) }}
                        </div>
                        <div class="message-content">
                            <div class="message-header">
                                <span class="user">{{ $msg->user->name ?? 'Usuário' }}</span>
                                <span class="time">{{ $msg->created_at->format('d/m/Y H:i') }}</span>
                            </div>
                            <div class="message-text">
                                {{ $msg->message }}
                            </div>
                        </div>
                    </div>
                @empty
                    <p style="text-align:center; color:var(--text-muted);">Nenhuma mensagem ainda.</p>
                @endforelse
            </div>

            <form action="{{ route('chat.store') }}" method="POST">
                @csrf
                <input type="text" name="message" id="message" placeholder="Escreva uma mensagem..." required>
                <button type="submit">Postar</button>
            </form>

        </div>

    </div>

    <script>
        let minutes = 5;
        let seconds = 0;

        function updateTimer() {
            let timer = document.getElementById("timer");
            timer.textContent = `Tempo restante: ${minutes}m ${seconds}s`;

            if (minutes === 0 && seconds === 0) return;

            if (seconds === 0) {
                minutes--;
                seconds = 59;
            } else {
                seconds--;
            }
        }

        setInterval(updateTimer, 1000);
        updateTimer();
    </script>

</body>

</html>
