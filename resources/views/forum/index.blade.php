@include('layouts.cabecalho')

<style>
    /* ===== Fonte Global ===== */
    .forum-container,
    .forum-container * {
        font-family: "Inter", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    .forum-container {
        max-width: 1100px;
        margin: 55px auto;
        padding: 0 20px;
        animation: fadeIn .35s ease-out;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(15px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* ===== Título ===== */
    .forum-container h1 {
        text-align: center;
        font-size: 2.8em;
        font-weight: 900;
        color: #1e40af;
        margin-bottom: 40px;
        letter-spacing: -1px;
    }

    .forum-container h1::after {
        content: "";
        width: 140px;
        height: 4px;
        background: #1e40af;
        margin: 10px auto 0;
        display: block;
        border-radius: 2px;
        opacity: .8;
    }

    /* ===== Subtítulo "Tópicos em Aberto" ===== */
    .forum-subtitulo {
        font-size: 1.6em;
        font-weight: 800;
        color: #1e40af;
        margin-bottom: 15px;
        padding-left: 2px;
    }

    /* ============================
       GRID EM 2 COLUNAS
       ============================ */
    .forum-grid {
        display: grid;
        grid-template-columns: 1fr 350px;
        gap: 30px;
    }

    @media(max-width: 900px) {
        .forum-grid {
            grid-template-columns: 1fr;
        }
    }

    /* ==========================================================
       FORMULÁRIO (COLUNA DIREITA)
       ========================================================== */
    .forum-form {
        background: #ffffff;
        border-radius: 10px;
        padding: 18px 20px;
        border: 1px solid #e2e8f0;
        box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.05);
    }

    .forum-form h3 {
        color: #1e293b;
        font-size: 1.15em;
        font-weight: 600;
        margin-bottom: 12px;
        text-align: center;
    }

    .forum-form label {
        font-size: 0.9em;
        margin-bottom: 4px;
        display: block;
    }

    .forum-form input[type="text"],
    .forum-form textarea {
        width: 100%;
        border: 1px solid #cbd5e1;
        border-radius: 8px;
        padding: 10px;
        font-size: 0.9em;
        background: #f8fafc;
        margin-bottom: 10px;
        transition: .25s;
    }

    .forum-form button {
        width: 100%;
        padding: 10px;
        border-radius: 8px;
        font-size: 0.95em;
        font-weight: 700;
        background: linear-gradient(90deg, #2563eb, #1e40af);
        color: white;
        border: none;
        cursor: pointer;
        transition: .25s;
    }

    .forum-form button:hover {
        background: linear-gradient(90deg, #1e40af, #2563eb);
    }

    /* ==========================================================
       TÓPICOS (COLUNA ESQUERDA)
       ========================================================== */

    .forum-topic {
        background: #ffffff;
        border-radius: 12px;
        padding: 20px 22px;
        border: 1px solid #e2e8f0;
        box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.04);
        margin-bottom: 18px;
        transition: .18s ease;
        cursor: pointer;
        /* ← TÓPICO CLICÁVEL */
    }

    .forum-topic:hover {
        transform: translateY(-3px);
        border-color: #2563eb;
        box-shadow: 0px 6px 16px rgba(0, 0, 0, 0.07);
    }

    /* Link ocupando toda a div */
    .forum-topic a {
        color: #1e40af;
        font-size: 1.28em;
        font-weight: 800;
        text-decoration: none;
        display: block;
        /* ← Link cobre toda a área */
        width: 100%;
        height: 100%;
    }

    .forum-topic p {
        color: #475569;
        font-size: 0.9em;
        margin-top: 8px;
    }
</style>

<div class="forum-container">

    <h1>Fórum</h1>

    <!-- GRID EM DUAS COLUNAS -->
    <div class="forum-grid">

        <!-- LISTA DE TÓPICOS (COLUNA ESQUERDA) -->
        <div>
            <h2 class="forum-subtitulo">Tópicos em Aberto</h2>

            @if ($topicos->isEmpty())
                <p style="text-align:center; color:#64748b;">Nenhum tópico disponível.</p>
            @else
                @foreach ($topicos as $topico)
                    <div class="forum-topic" data-url="{{ route('forum.show', $topico->id) }}">
                        <a href="{{ route('forum.show', $topico->id) }}">
                            {{ $topico->titulo }}
                        </a>
                        <p>
                            Criado por <strong>{{ $topico->autor }}</strong>
                            em {{ $topico->created_at->format('d/m/Y') }}
                        </p>
                    </div>
                @endforeach
            @endif
        </div>

        <!-- FORMULÁRIO (COLUNA DIREITA) -->
        <div class="forum-form">
            <h3>Criar Novo Tópico</h3>

            <form action="{{ route('forum.store') }}" method="POST">
                @csrf

                <label for="titulo">Título:</label>
                <input type="text" name="titulo" id="titulo" required>

                <label for="descricao">Descrição:</label>
                <textarea name="descricao" id="descricao" rows="3" required></textarea>

                <label for="autor">Seu nome:</label>
                <input type="text" name="autor" id="autor" placeholder="Anônimo">

                <button type="submit">Criar Tópico</button>
            </form>
        </div>

    </div>

</div>

<script>
    /* Torna toda a div clicável */
    document.querySelectorAll('.forum-topic').forEach(div => {
        div.addEventListener('click', () => {
            const url = div.getAttribute('data-url');
            window.location.href = url;
        });
    });
</script>

@include('layouts.footer')
