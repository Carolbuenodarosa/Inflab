@include('layouts.cabecalho')

<style>
    body {
        background: #f0f2f5;
        font-family: 'Inter', sans-serif;
    }

    .forum-container {
        max-width: 900px;
        margin: 40px auto;
        padding: 25px;
    }

    /* Título do tópico */
    .topico-titulo {
        font-size: 2.4rem;
        font-weight: 800;
        color: #1d4ed8;
        margin-bottom: 10px;
        position: relative;
        padding-bottom: 8px;
        display: inline-block;
        letter-spacing: -0.5px;
    }

    .topico-titulo::after {
        content: "";
        display: block;
        width: 120px;
        height: 5px;
        margin-top: 6px;
        background: linear-gradient(90deg, #3b82f6, #1d4ed8);
        border-radius: 4px;
        box-shadow: 0 0 8px rgba(29, 78, 216, 0.4);
    }

    .topico-descricao {
        font-size: 1.15rem;
        color: #4b5563;
        margin-bottom: 8px;
    }

    .divider {
        margin: 35px 0;
        border-top: 2px solid #e5e7eb;
    }

    /* Caixa principal das conversas */
    .conversas-box {
        background: #ffffff;
        border-radius: 16px;
        padding: 25px;
        margin-bottom: 40px;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.06);
        border: 1px solid #e5e7eb;

        /* Barra de rolagem */
        max-height: 450px;
        overflow-y: auto;

        scrollbar-width: thin;
        scrollbar-color: #3b82f6 #e5e7eb;
    }

    /* Scrollbar Chrome */
    .conversas-box::-webkit-scrollbar {
        width: 8px;
    }

    .conversas-box::-webkit-scrollbar-track {
        background: #e5e7eb;
        border-radius: 10px;
    }

    .conversas-box::-webkit-scrollbar-thumb {
        background: #3b82f6;
        border-radius: 10px;
    }

    .conversas-box::-webkit-scrollbar-thumb:hover {
        background: #1d4ed8;
    }

    /* Cada card de conversa */
    .conversa-card {
        background: #ffffff;
        border-radius: 14px;
        padding: 18px 22px;
        margin-bottom: 18px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.06);
        border: 1px solid #e5e7eb;
        transition: all .2s ease-in-out;
    }

    .conversa-card:hover {
        transform: translateY(-3px);
        box-shadow: 0 6px 18px rgba(0, 0, 0, 0.08);
    }

    .conversa-meta {
        margin-top: 8px;
        color: #6b7280;
        font-size: .85rem;
    }

    /* Formulário */
    .form-box {
        background: #ffffff;
        border-radius: 18px;
        padding: 30px;
        margin-top: 20px;
        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.07);
        border: 1px solid #e5e7eb;
        position: relative;
    }

    .form-box h4 {
        font-weight: 700;
        color: #1f2937;
        margin-bottom: 15px;
    }

    .input-group {
        margin-bottom: 18px;
    }

    .input-label {
        font-weight: 600;
        margin-bottom: 6px;
        color: #374151;
        display: block;
    }

    .form-control {
        padding: 12px 14px;
        border-radius: 10px;
        border: 1px solid #d1d5db;
        font-size: 1rem;
        width: 100%;
        transition: border-color .2s ease, box-shadow .2s ease;
    }

    .form-control:focus {
        border-color: #2563eb;
        box-shadow: 0 0 0 3px rgba(37, 99, 235, 0.25);
    }

    /* Botão */
    .btn-enviar {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        background: linear-gradient(135deg, #2563eb, #1d4ed8);
        border: none;
        padding: 12px 30px;
        font-size: 1rem;
        font-weight: 600;
        border-radius: 12px;
        color: #fff;
        cursor: pointer;
        transition: .2s ease-in-out;
    }

    .btn-enviar:hover {
        background: linear-gradient(135deg, #1d4ed8, #1e40af);
        transform: translateY(-1px);
    }

    .btn-enviar svg {
        width: 20px;
        height: 20px;
    }
</style>

<div class="forum-container">

    <h1 class="topico-titulo">{{ $topico->titulo }}</h1>
    <p class="topico-descricao">{{ $topico->descricao }}</p>
    <p><small>Criado por <strong>{{ $topico->autor }}</strong> em {{ $topico->created_at->format('d/m/Y') }}</small></p>

    <div class="divider"></div>

    <div class="conversas-box">
        <h3>Conversas</h3>

        @foreach ($conversas as $conversa)
            <div class="conversa-card">
                <p style="font-size:1.05rem; color:#374151;">{{ $conversa->conteudo }}</p>
                <p class="conversa-meta">
                    <strong>{{ $conversa->autor }}</strong> —
                    {{ $conversa->created_at->format('d/m/Y H:i') }}
                </p>
            </div>
        @endforeach
    </div>

    <div class="divider"></div>

    <div class="form-box">
        <h4>Enviar uma nova mensagem</h4>

        <form action="{{ route('forum.responder', $topico->id) }}" method="POST">
            @csrf

            <div class="input-group">
                <label class="input-label" for="autor">Seu nome</label>
                <input type="text" class="form-control" name="autor" id="autor"
                    placeholder="Digite seu nome (opcional)">
            </div>

            <div class="input-group">
                <label class="input-label" for="conteudo">Mensagem</label>
                <textarea name="conteudo" id="conteudo" class="form-control" rows="4" required
                    placeholder="Escreva sua mensagem..."></textarea>
            </div>

            <button type="submit" class="btn-enviar">
                Enviar Mensagem
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            </button>
        </form>
    </div>

</div>

@include('layouts.footer')
