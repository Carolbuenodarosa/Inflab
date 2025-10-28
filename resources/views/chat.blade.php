<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat Laboratório de Física</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        body {
            font-family: 'Segoe UI', Roboto, Arial, sans-serif;
            margin: 0;
            background: url('https://wallup.net/wp-content/uploads/2019/09/903444-physics-equation-mathematics-math-formula-poster-science-text-typography.jpg') no-repeat center center fixed;
            background-size: cover;
            overflow-x: hidden;
            transition: background 0.3s, color 0.3s;
        }

        body.dark-mode {
            background-color: #121212;
            color: #e0e0e0;
        }

        /* BOTÕES FLUTUANTES (celular/tablet) */
        .top-buttons {
            position: fixed;
            top: 5px;
            left: 50%;
            transform: translateX(-50%);
            display: flex;
            gap: 5px;
            z-index: 1200;
        }

        .top-buttons button,
        .top-buttons a {
            background: #007bff;
            color: white;
            border: none;
            border-radius: 10px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 5px;
            padding: 6px 10px;
            font-size: 0.9em;
            text-decoration: none;
        }

        .top-buttons button:hover,
        .top-buttons a:hover {
            background: #0056b3;
        }

        @media(min-width:1025px) {
            .top-buttons {
                display: none;
            }
        }

        .main-wrapper {
            display: flex;
            justify-content: center;
            align-items: flex-start;
            gap: 20px;
            width: 98%;
            margin: 60px auto 0 auto;
            max-width: 1100px;
        }

        .chat-container {
            width: 100%;
            max-width: 700px;
            height: 90vh;
            display: flex;
            flex-direction: column;
            border-radius: 20px;
            box-shadow: 0 0 25px rgba(0, 85, 170, 0.2);
            background-color: #ffffff;
            overflow: hidden;
            position: relative;
        }

        body.dark-mode .chat-container {
            background-color: #1e1e1e;
            color: #e0e0e0;
        }

        /* BOTÃO HOME (desktop) */
        .home-btn {
            position: absolute;
            top: 10px;
            right: 15px;
            /* <-- MOVIDO PARA A DIREITA */
            background: #007bff;
            color: white;
            border: none;
            border-radius: 10px;
            padding: 8px 12px;
            cursor: pointer;
            font-size: 0.9em;
            text-decoration: none;
            display: none;
        }

        .home-btn:hover {
            background: #0056b3;
        }

        @media(min-width:1025px) {
            .home-btn {
                display: inline-flex;
                align-items: center;
                gap: 5px;
            }
        }

        .chat-header {
            display: flex;
            align-items: center;
            gap: 15px;
            padding: 15px 20px;
            border-bottom: 1px solid #d0e0ff;
            background-color: #ffffff;
        }

        body.dark-mode .chat-header {
            background-color: #2c2c2c;
            border-color: #444;
        }

        .chat-logo {
            width: 60px;
            height: 60px;
            border-radius: 20%;
            object-fit: cover;
        }

        .chat-info h2 {
            margin: 0;
            font-size: 1.2em;
            color: #003366;
        }

        body.dark-mode .chat-info h2 {
            color: #aad4ff;
        }

        .chat-info p {
            margin: 3px 0 0;
            color: #666;
            font-size: 0.9em;
        }

        body.dark-mode .chat-info p {
            color: #ccc;
        }

        .chat-box {
            flex-grow: 1;
            overflow-y: auto;
            padding: 15px 20px;
            display: flex;
            flex-direction: column;
            gap: 8px;
            background-color: #ffffff;
        }

        .chat-box::-webkit-scrollbar {
            width: 10px;
        }

        .chat-box::-webkit-scrollbar-thumb {
            background-color: rgba(0, 123, 255, 0.7);
            border-radius: 5px;
        }

        .chat-box::-webkit-scrollbar-track {
            background-color: rgba(0, 0, 0, 0.05);
        }

        body.dark-mode .chat-box {
            background-color: #1a1a1a;
        }

        .message {
            padding: 10px 15px;
            border-radius: 15px;
            max-width: 75%;
            word-wrap: break-word;
            margin-bottom: 8px;
        }

        .my-message {
            background: linear-gradient(135deg, #007bff, #0066cc);
            color: white;
            margin-left: auto;
        }

        .other-message {
            background: #e6f0ff;
            color: #003366;
            margin-right: auto;
        }

        body.dark-mode .other-message {
            background-color: #2c2c2c;
            color: #aad4ff;
        }

        .time {
            font-size: 0.75em;
            color: #999;
            margin-top: 2px;
        }

        form {
            padding: 10px 15px;
            background: #f0f7ff;
            border-top: 1px solid #d0e0ff;
            border-radius: 0 0 20px 20px;
        }

        body.dark-mode form {
            background-color: #2a2a2a;
            border-color: #444;
        }

        .input-group {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .input-group input[type="text"] {
            flex: 1;
            padding: 10px 15px;
            border-radius: 25px;
            border: 1px solid #aac8ff;
            outline: none;
            font-size: 15px;
            background-color: white;
        }

        body.dark-mode .input-group input[type="text"] {
            background-color: #333;
            border-color: #555;
            color: #e0e0e0;
        }

        .input-group button {
            padding: 10px 15px;
            border: none;
            background: linear-gradient(135deg, #007bff, #0056b3);
            color: white;
            border-radius: 25px;
            cursor: pointer;
            transition: transform 0.2s;
        }

        .input-group button:hover {
            transform: scale(1.05);
        }

        /* ABAS LATERAIS */
        .info-panel,
        .sidebar {
            width: 250px;
            height: 100%;
            position: fixed;
            top: 0;
            border-radius: 20px;
            padding: 15px;
            background-color: #e6f0ff;
            box-shadow: 0 0 15px rgba(0, 85, 170, 0.15);
            display: flex;
            flex-direction: column;
            transition: transform 0.5s ease, background 0.3s, color 0.3s;
            z-index: 1100;
            color: #003366;
        }

        body.dark-mode .info-panel,
        body.dark-mode .sidebar {
            background-color: #1f1f1f;
            color: #aad4ff;
        }

        .info-panel h3,
        .sidebar h3 {
            text-align: center;
            margin-bottom: 10px;
        }

        .darkmode-toggle-sidebar {
            margin-top: 10px;
            align-self: center;
            padding: 8px 12px;
            background: #007bff;
            border: none;
            color: white;
            border-radius: 10px;
            cursor: pointer;
            display: none;
        }

        .darkmode-toggle-sidebar:hover {
            background: #0056b3;
        }

        @media(min-width:1025px) {
            .darkmode-toggle-sidebar {
                display: block;
            }
        }

        @media(min-width:1025px) {
            .info-panel {
                left: 0;
                transform: translateX(0);
            }

            .sidebar {
                right: 0;
                transform: translateX(0);
            }
        }

        @media(max-width:1024px) {
            .info-panel {
                left: 0;
                transform: translateX(-100%);
            }

            .sidebar {
                right: 0;
                transform: translateX(100%);
            }
        }

        .info-panel.show {
            transform: translateX(0);
        }

        .sidebar.show {
            transform: translateX(0);
        }
    </style>
</head>

<body>
    <!-- BOTÕES FLUTUANTES (mobile/tablet) -->
    <div class="top-buttons">
        <a href="/" title="Voltar à Home"><i class="fas fa-home"></i></a>
        <button onclick="toggleInfo()"><i class="fas fa-info-circle"></i></button>
        <button onclick="toggleSidebar()"><i class="fas fa-bars"></i></button>
        <button id="darkmode-top" onclick="toggleDarkMode()"><i class="fas fa-moon"></i></button>
    </div>

    <!-- ABA ESQUERDA -->
    <div class="info-panel" id="info-panel">
        <h3>Info Inflab</h3>
        <p>O Inflab é uma plataforma inovadora de aprendizado do Instituto Federal PR.</p>
        <p>Permite interação, envio de mensagens e recursos educacionais.</p>
        <p>Modo claro/escuro disponível.</p>
        <button class="darkmode-toggle-sidebar" id="darkmode-side" onclick="toggleDarkMode()">
            <i class="fas fa-moon"></i>
        </button>
    </div>

    <!-- ABA DIREITA -->
    <div class="sidebar" id="sidebar">
        <h3>Política do Chat</h3>
        <p>1. Seja respeitoso com todos os participantes.</p>
        <p>2. Evite mensagens ofensivas ou spam.</p>
        <p>3. Mantenha o conteúdo relacionado ao laboratório de física.</p>
        <p>4. Não compartilhe informações pessoais sensíveis.</p>
        <p>5. Use o chat de forma construtiva e colaborativa.</p>
    </div>

    <!-- CHAT -->
    <div class="main-wrapper">
        <div class="chat-container">
            <a href="/" class="home-btn"><i class="fas fa-home"></i> Home</a>
            <div class="chat-header">
                <img src="https://tse4.mm.bing.net/th/id/OIP.r-_T9dzFN6S42XXPpoK55AHaHa?pid=Api&P=0&h=180"
                    class="chat-logo">
                <div class="chat-info">
                    <h2>Laboratório de Física</h2>
                    <p>Comunidade • Instituto Federal PR</p>
                </div>
            </div>

            <div class="chat-box" id="chat-box">
                @forelse ($messages as $msg)
                    <div class="message {{ auth()->id() === $msg->user_id ? 'my-message' : 'other-message' }}">
                        <div><strong>{{ $msg->user->name ?? 'Usuário' }}</strong></div>
                        <div>{{ $msg->message }}</div>
                        <div class="time">{{ $msg->created_at->format('d/m/Y H:i') }}</div>
                    </div>
                @empty
                    <p>Nenhuma mensagem ainda.</p>
                @endforelse
            </div>

            <form action="{{ route('chat.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="input-group">
                    <input type="text" name="message" placeholder="Digite sua mensagem..." required>
                    <label for="chat-image-upload" class="image-upload-label"><i class="fas fa-image"></i></label>
                    <input type="file" id="chat-image-upload" name="image" accept="image/*" style="display:none;">
                    <button type="submit"><i class="fas fa-paper-plane"></i></button>
                </div>
            </form>
        </div>
    </div>

    <script>
        const infoPanel = document.getElementById('info-panel');
        const sidebar = document.getElementById('sidebar');
        const chatBox = document.getElementById('chat-box');
        const darkTop = document.getElementById('darkmode-top');
        const darkSide = document.getElementById('darkmode-side');

        function toggleInfo() {
            infoPanel.classList.toggle('show');
        }

        function toggleSidebar() {
            sidebar.classList.toggle('show');
        }

        function toggleDarkMode() {
            document.body.classList.toggle('dark-mode');
            const isDark = document.body.classList.contains('dark-mode');
            localStorage.setItem('darkMode', isDark);
            updateIcons(isDark);
        }

        function updateIcons(isDark) {
            const iconTop = darkTop.querySelector('i');
            const iconSide = darkSide.querySelector('i');
            if (isDark) {
                iconTop.classList.replace('fa-moon', 'fa-sun');
                iconSide.classList.replace('fa-moon', 'fa-sun');
            } else {
                iconTop.classList.replace('fa-sun', 'fa-moon');
                iconSide.classList.replace('fa-sun', 'fa-moon');
            }
        }

        window.addEventListener('load', () => {
            const isDark = localStorage.getItem('darkMode') === 'true';
            if (isDark) document.body.classList.add('dark-mode');
            updateIcons(isDark);
            chatBox.scrollTop = chatBox.scrollHeight;
        });
    </script>
</body>

</html>
