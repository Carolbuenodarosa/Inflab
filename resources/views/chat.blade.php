@auth
<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Comunitário IF</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #e6f0ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .chat-container {
            width: 450px;
            max-width: 95%;
            height: 650px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.15);
            display: flex;
            flex-direction: column;
            overflow: hidden;
            transition: width 0.3s ease;
        }

        .chat-header {
            background: #1a73e8;
            color: #fff;
            padding: 12px 15px;
            font-size: 18px;
            font-weight: bold;
            display: flex;
            align-items: center;
            justify-content: center;
            position: relative;
        }

        .btn-home {
            position: absolute;
            left: 12px;
            top: 50%;
            transform: translateY(-50%);
            color: #fff;
            font-size: 16px;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            width: 28px;
            height: 28px;
            border-radius: 50%;
            transition: 0.3s;
        }

        .btn-home:hover {
            background: rgba(255, 255, 255, 0.2);
        }

        .chat-header .title {
            flex: 1;
            text-align: center;
        }

        .chat-header i.cog {
            font-size: 18px;
            cursor: pointer;
            position: absolute;
            right: 12px;
            top: 50%;
            transform: translateY(-50%);
        }

        .chat-header i.cog:hover {
            transform: scale(1.2);
        }

        .chat-messages {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 20px;
            overflow-y: auto;
            background: #f1f5ff;
            position: relative;
        }

        .message-wrapper {
            display: flex;
            flex-direction: column;
            max-width: 70%;
        }

        .message-wrapper.sent {
            align-self: flex-end;
        }

        .message {
            padding: 12px 18px;
            border-radius: 20px;
            line-height: 1.5;
            word-wrap: break-word;
            font-size: 15px;
            color: #ffffff;
            background: #273750;
        }

        .message.sent {
            background: #1a73e8;
        }

        .message .username {
            font-weight: 600;
            margin-bottom: 6px;
            font-size: 13px;
            display: block;
        }

        .message-time {
            font-size: 11px;
            color: #555;
            margin-top: 4px;
            align-self: flex-end;
        }

        .chat-input {
            display: flex;
            padding: 12px 15px;
            border-top: 1px solid #ddd;
            background: #fff;
        }

        .chat-input input {
            flex: 1;
            padding: 10px 14px;
            border-radius: 20px;
            border: 1px solid #ccc;
            outline: none;
            font-size: 15px;
        }

        .chat-input button {
            margin-left: 10px;
            background: #1a73e8;
            color: #fff;
            border: none;
            padding: 10px 16px;
            border-radius: 50%;
            cursor: pointer;
        }

        .chat-input button:hover {
            background: #155ab6;
        }

        .alerta {
            color: red;
            text-align: center;
            margin-bottom: 8px;
            font-size: 14px;
        }

        @media (max-width:500px) {
            .chat-container {
                width: 100%;
                height: 100vh;
                border-radius: 0;
            }

            .message-wrapper {
                max-width: 85%;
            }

            .message {
                font-size: 14px;
            }

            .chat-input input {
                font-size: 14px;
            }
        }
    </style>
</head>

<body>

    <div class="chat-container">
        <div class="chat-header">
            <a href="{{ route('home') }}" class="btn-home"><i class="fas fa-arrow-left"></i></a>
            <span class="title">Chat da Comunidade IF</span>
            <i class="fas fa-cog cog"></i>
        </div>

        <div id="alerta" class="alerta"></div>

        <div class="chat-messages" id="chatMessages">
            <div class="message-wrapper">
                <div class="message"><span class="username">@Admin</span>Bem-vindo ao chat da comunidade!  
                    Evite palavrões e discussões agressivas. Converse sobre cursos, eventos e o instituto.
                </div>
                <div class="message-time">09:00</div>
            </div>
        </div>

        <div class="chat-input">
            <input type="text" id="chatInput" placeholder="Digite sua mensagem...">
            <button id="sendBtn"><i class="fas fa-paper-plane"></i></button>
        </div>
    </div>

    <script>
        const input = document.getElementById('chatInput');
        const sendBtn = document.getElementById('sendBtn');
        const chatMessages = document.getElementById('chatMessages');
        const alerta = document.getElementById('alerta');

        // Lista de palavras proibidas
        const palavrasProibidas = [
            "palavrão1","palavrão2","xingo","ofensa","briga","ódio","morte","idiota","burro","imbecil"
        ];

        function verificaMensagem(texto) {
            const lower = texto.toLowerCase();
            if (palavrasProibidas.some(p => lower.includes(p))) {
                alerta.textContent = "⚠️ Mensagem não permitida: contém palavras ofensivas ou brigas.";
                return false;
            }
            alerta.textContent = "";
            return true;
        }

        function addMessage(user, text) {
            const wrapper = document.createElement('div');
            wrapper.classList.add('message-wrapper');
            if (user === 'Você') wrapper.classList.add('sent');

            const messageDiv = document.createElement('div');
            messageDiv.classList.add('message');
            if (user === 'Você') messageDiv.classList.add('sent');
            messageDiv.innerHTML = `<span class="username">@${user}</span>${text}`;

            const timeDiv = document.createElement('div');
            timeDiv.classList.add('message-time');
            const now = new Date();
            timeDiv.textContent = `${now.getHours()}:${String(now.getMinutes()).padStart(2,'0')}`;

            wrapper.appendChild(messageDiv);
            wrapper.appendChild(timeDiv);
            chatMessages.appendChild(wrapper);
            chatMessages.scrollTop = chatMessages.scrollHeight;
        }

        sendBtn.addEventListener('click', () => {
            const text = input.value.trim();
            if (text === '') return;
            if (!verificaMensagem(text)) return;
            addMessage('Você', text);
            input.value = '';
        });

        input.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') sendBtn.click();
        });
    </script>

</body>
</html>
@else
<p style="text-align:center; margin-top:50px;">
    Você precisa estar logado para acessar esta página.  
    <a href="{{ route('login') }}">Entrar</a>
</p>
@endauth
