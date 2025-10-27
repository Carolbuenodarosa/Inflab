<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Laboratório de Física</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Corpo com imagem de fundo escura */
        body {
            font-family: 'Segoe UI', Roboto, Arial, sans-serif;
            margin: 0;
            min-height: 100vh;
            background: linear-gradient(rgba(76, 76, 76, 0.8), rgba(47, 47, 47, 0.6)),
                url('https://assets.realclear.com/images/41/413095.jpg') no-repeat center center fixed;
            background-size: cover;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Sidebar fixa à esquerda */
        .sidebar {
            position: fixed;
            left: 0;
            top: 0;
            width: 220px;
            height: 100vh;
            background: rgba(255, 255, 255, 0.95);
            padding: 20px;
            border-right: 1px solid #ccc;
            overflow-y: auto;
            z-index: 1000;
        }

        .sidebar h3 {
            margin-top: 0;
            color: #003366;
        }

        .sidebar ul {
            list-style: none;
            padding-left: 0;
        }

        .sidebar ul li {
            margin: 10px 0;
            padding: 8px 12px;
            background: #f0f7ff;
            border-radius: 8px;
        }

        /* Chat container centralizado */
        .chat-container {
            width: 100%;
            max-width: 700px;
            height: 90vh;
            display: flex;
            flex-direction: column;
            border-radius: 20px;
            box-shadow: 0 0 25px rgba(0, 85, 170, 0.2);
            background: white;
            overflow: hidden;
            z-index: 10;
            position: relative;
        }

        .chat-header {
            display: flex;
            align-items: center;
            gap: 15px;
            background: white;
            padding: 15px 20px;
            border-bottom: 1px solid #d0e0ff;
        }

        .chat-logo {
            width: 60px;
            height: 60px;
            border-radius: 20%;
            object-fit: cover;
            box-shadow: 0 2px 6px rgba(0, 85, 170, 0.2);
        }

        .chat-info h2 {
            margin: 0;
            font-size: 1.2em;
            color: #003366;
        }

        .chat-info p {
            margin: 3px 0 0;
            color: #666;
            font-size: 0.9em;
        }

        .chat-box {
            flex: 1;
            padding: 15px 20px;
            overflow-y: auto;
            display: flex;
            flex-direction: column;
            background: #f9fbff;
            border-top: 1px solid #d0e0ff;
            border-bottom: 1px solid #d0e0ff;
        }

        .message-wrapper {
            display: flex;
            flex-direction: column;
            margin: 8px 0;
            max-width: 75%;
        }

        .my-message-wrapper {
            align-self: flex-end;
            align-items: flex-end;
        }

        .other-message-wrapper {
            align-self: flex-start;
            align-items: flex-start;
        }

        .message {
            padding: 10px 15px;
            border-radius: 15px;
            word-wrap: break-word;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        }

        .my-message {
            background: linear-gradient(135deg, #007bff, #0066cc);
            color: white;
            border-bottom-right-radius: 0;
        }

        .other-message {
            background: #e6f0ff;
            color: #003366;
            border-bottom-left-radius: 0;
        }

        .time {
            font-size: 0.75em;
            color: #999;
            margin-top: 2px;
        }

        .message img {
            max-width: 200px;
            border-radius: 10px;
            margin-top: 5px;
        }

        form {
            display: flex;
            gap: 10px;
            padding: 15px;
            background: #f0f7ff;
            border-top: 1px solid #d0e0ff;
        }

        input[type="text"] {
            flex: 1;
            padding: 10px 15px;
            border-radius: 25px;
            border: 1px solid #aac8ff;
            outline: none;
            font-size: 15px;
            background-color: white;
        }

        input[type="text"]:focus {
            border-color: #007bff;
            box-shadow: 0 0 5px rgba(0, 123, 255, 0.3);
        }

        button {
            padding: 10px 25px;
            border: none;
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
        }

        button:hover {
            background: linear-gradient(135deg, #415477, #355a7e);
            transform: scale(1.05);
        }

        .chat-box::-webkit-scrollbar {
            width: 8px;
        }

        .chat-box::-webkit-scrollbar-thumb {
            background: #aac8ff;
            border-radius: 10px;
        }

        .chat-box::-webkit-scrollbar-thumb:hover {
            background: #7faeff;
        }

        /* Responsividade */
        @media (max-width: 1024px) {
            .chat-container {
                max-width: 600px;
            }
        }

        @media (max-width: 768px) {
            .sidebar {
                display: none;
            }
            .chat-container {
                width: 90%;
                height: 95vh;
            }
        }

        @media (max-width: 480px) {
            .chat-container {
                width: 95%;
                height: 95vh;
                border-radius: 10px;
            }

            .message-wrapper {
                max-width: 90%;
            }

            .message {
                font-size: 0.9em;
                padding: 8px 12px;
            }

            input[name="message"],
            button {
                font-size: 0.9em;
                padding: 8px 12px;
            }
        }

        /* Tela de introdução */
        #intro-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 50, 0.9);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            flex-direction: column;
            color: #fff;
            animation: fadeIn 1s forwards;
        }

        #intro-message {
            max-width: 600px;
            text-align: center;
            background: rgba(0, 0, 0, 0.6);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.5);
        }

        #intro-message h2 {
            margin-bottom: 20px;
            font-size: 1.8em;
            color: #00bfff;
        }

        #intro-message p {
            font-size: 1.1em;
            margin-bottom: 25px;
            min-height: 50px;
        }

        #intro-message button {
            padding: 10px 25px;
            border: none;
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
            border-radius: 25px;
            font-weight: 600;
            cursor: pointer;
            font-size: 1em;
        }

        #intro-message button:hover {
            background: linear-gradient(135deg, #415477, #355a7e);
            transform: scale(1.05);
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }
    </style>
</head>

<body>
    <!-- Sidebar fixa -->
    <div class="sidebar">
        <h3>Assuntos Permitidos</h3>
        <ul>
            <li>Física Experimental</li>
            <li>Leis da Termodinâmica</li>
            <li>Eletricidade e Magnetismo</li>
            <li>Óptica e Luz</li>
            <li>Laboratório de Materiais</li>
            <li>Segurança no Laboratório</li>
        </ul>
    </div>

    <!-- Chat container central -->
    <div class="chat-container">
        <div class="chat-header">
            <img src="https://tse4.mm.bing.net/th/id/OIP.r-_T9dzFN6S42XXPpoK55AHaHa?pid=Api&P=0&h=180"
                class="chat-logo">
            <div class="chat-info">
                <h2>Laboratório de Física</h2>
                <p>Comunidade • Instituto Federal PR</p>
            </div>
        </div>

        <div class="chat-box" id="chat-box">
            @forelse ($messages->sortBy('created_at') as $msg)
            <div
                class="message-wrapper {{ auth()->id() === $msg->user_id ? 'my-message-wrapper' : 'other-message-wrapper' }}">
                <div class="message {{ auth()->id() === $msg->user_id ? 'my-message' : 'other-message' }}">
                    @if ($msg->message)
                    <div class="message-text">{{ $msg->message }}</div>
                    @endif
                    @if ($msg->image)
                    <img src="{{ Storage::url($msg->image) }}" alt="Imagem" class="evento-imagem">
                    @endif
                </div>
                <span class="time">{{ $msg->created_at->format('d/m/Y H:i') }}</span>
            </div>
            @empty
            <p>Nenhuma mensagem ainda.</p>
            @endforelse
        </div>

        <form action="{{ route('chat.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="text" name="message" placeholder="Digite sua mensagem...">
            <input type="file" name="image" accept="image/*">
            <button type="submit">Enviar</button>
        </form>
    </div>

   
</body>

</html>
