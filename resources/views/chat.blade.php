<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Comunitário</title>
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
            width: 400px;
            max-width: 95%;
            height: 600px;
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
            transition: 0.3s;
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
            gap: 24px;
            overflow-y: auto;
            background: #c2c2c2;
            position: relative;
        }

        .message-date {
            text-align: center;
            font-size: 12px;
            color: #464646;
            margin-bottom: 0;
            position: sticky;
            top: 0;
            background: #f0f6ff;
            padding: 10px;
            z-index: 1;
            border-radius: 12px;
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
            padding: 14px 18px;
            border-radius: 20px;
            line-height: 1.6;
            word-wrap: break-word;
            font-size: 15px;
            color: #ffffff;
            background: #273750;
        }

        .message.sent {
            background: #1a73e8;
            color: #fff;
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

        /* ===== Input ===== */
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
            transition: 0.3s;
        }

        .chat-input button:hover {
            background: #155ab6;
        }

        .chat-float {
            position: fixed;
            bottom: 25px;
            right: 25px;
            width: 60px;
            height: 60px;
            background: #1a73e8;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-size: 28px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.25);
            transition: all 0.3s ease;
            cursor: pointer;
            z-index: 999;
        }

        .chat-float:hover {
            transform: translateY(-5px) scale(1.1);
            background: #155ab6;
        }

        @media (max-width:500px) {
            .chat-container {
                width: 100%;
                height: 100vh;
                border-radius: 0;
            }

            .chat-messages {
                padding: 20px 15px;
                gap: 26px;
            }

            .message-wrapper {
                max-width: 85%;
            }

            .message {
                font-size: 14px;
                padding: 16px 18px;
                border-radius: 18px;
            }

            .message .username {
                font-size: 12px;
            }

            .message-time {
                font-size: 10px;
            }

            .chat-input {
                padding: 15px 12px;
                gap: 8px;
            }

            .chat-input input {
                font-size: 14px;
                padding: 12px 14px;
            }

            .chat-input button {
                padding: 10px 14px;
                font-size: 16px;
            }

            .chat-header {
                font-size: 17px;
                padding: 12px 15px;
            }

            .btn-home {
                width: 26px;
                height: 26px;
                font-size: 15px;
            }
        }
    </style>
</head>

<body>

    <a href="{{ route('chat') }}" class="chat-float" title="Abrir Chat">
        <i class="fas fa-comment-dots"></i>
    </a>

    <div class="chat-container">
        <div class="chat-header">
            <a href="/" class="btn-home" title="Voltar para Home"><i class="fas fa-arrow-left"></i></a>
            <span class="title">Chat da Comunidade</span>
            <i class="fas fa-cog cog"></i>
        </div>

        <div class="chat-messages" id="chatMessages">

            <div class="message-date" id="currentDate">Hoje</div>

            <div class="message-wrapper">
                <div class="message"><span class="username">@João</span>Olá, pessoal! Como estão hoje?</div>
                <div class="message-time">10:00</div>
            </div>

            <div class="message-wrapper sent">
                <div class="message sent"><span class="username">@Você</span>Tudo ótimo, e você?</div>
                <div class="message-time">10:01</div>
            </div>

            <div class="message-wrapper">
                <div class="message"><span class="username">@Maria</span>Alguém viu o novo tutorial de Laravel?</div>
                <div class="message-time">10:02</div>
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
            addMessage('Você', text);
            input.value = '';
        });

        input.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') sendBtn.click();
        });
    </script>
</body>

</html>
