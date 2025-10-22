<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 600px;
            margin: 30px auto;
            display: flex;
            flex-direction: column;
            height: 90vh;
        }

        h1 {
            text-align: center;
        }

        .chat-box {
            flex: 1;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 10px;
            margin-bottom: 10px;
            overflow-y: auto;
            display: flex;
            flex-direction: column-reverse;
            /* mostra novas mensagens em cima */
        }

        .message {
            background: #f1f1f1;
            padding: 8px 12px;
            border-radius: 8px;
            margin: 4px 0;
            max-width: 80%;
        }

        form {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }

        input[type="text"] {
            padding: 8px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[name="user"] {
            width: 30%;
        }

        input[name="message"] {
            flex: 1;
        }

        button {
            padding: 8px 15px;
            border: none;
            background-color: #4CAF50;
            color: white;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background-color: #45a049;
        }
    </style>
</head>

<body>

    <h1>Chat</h1>
    <style>
        .chat-box {
            flex: 1;
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 10px;
            margin-bottom: 10px;
            overflow-y: auto;
            display: flex;
            flex-direction: column-reverse;
            background: #f9f9f9;
        }

        .message {
            max-width: 70%;
            margin: 5px 0;
            padding: 10px 15px;
            border-radius: 15px;
            position: relative;
            display: inline-block;
        }

        .message-header {
            display: flex;
            justify-content: space-between;
            font-size: 0.8em;
            margin-bottom: 5px;
        }

        .message .user {
            font-weight: bold;
        }

        .message .time {
            color: #555;
        }

        .message-text {
            word-wrap: break-word;
        }

        /* Mensagem do usuário logado */
        .my-message {
            background-color: #4CAF50;
            color: white;
            margin-left: auto;
            border-bottom-right-radius: 0;
        }

        /* Mensagem de outros usuários */
        .other-message {
            background-color: #eee;
            color: black;
            margin-right: auto;
            border-bottom-left-radius: 0;
        }
    </style>


    <div class="chat-box" id="chat-box">
        @forelse ($messages as $msg)
            <div class="message {{ auth()->id() === $msg->user_id ? 'my-message' : 'other-message' }}">
                <div class="message-header">
                    <span class="user">{{ $msg->user->name ?? 'Usuário' }}</span>
                    <span class="time">{{ $msg->created_at->format('d/m/Y H:i') }}</span>
                </div>
                <div class="message-text">{{ $msg->message }}</div>
            </div>
        @empty
            <p>Nenhuma mensagem ainda.</p>
        @endforelse
    </div>

    <form action="{{ route('chat.store') }}" method="POST">
        @csrf
        <input type="text" name="message" id="message" placeholder="Digite sua mensagem..." required>
        <button type="submit">Enviar</button>
    </form>

</body>

</html>
