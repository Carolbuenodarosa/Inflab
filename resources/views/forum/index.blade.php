@include('layouts.cabecalho')

<style>
    /* ===== Fonte Global ===== */
    .forum-container,
    .forum-container * {
        font-family: "Inter", "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
    }

    .forum-container {
        max-width: 1250px;
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

    /* ===== Subtítulo ===== */
    .forum-subtitulo {
        font-size: 1.6em;
        font-weight: 800;
        color: #1e40af;
        margin-bottom: 15px;
        padding-left: 2px;
    }

    /* ===== GRID EM 2 COLUNAS ===== */
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

    /* ===== FORMULÁRIO ===== */
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

    .forum-form input,
    .forum-form textarea {
        width: 100%;
        border: 1px solid #cbd5e1;
        border-radius: 8px;
        padding: 10px;
        background: #f8fafc;
        margin-bottom: 10px;
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
    }

    /* ===== TÓPICOS ===== */
    .forum-topic {
        background: #ffffff;
        border-radius: 12px;
        padding: 20px 22px;
        border: 1px solid #e2e8f0;
        box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.04);
        margin-bottom: 18px;
        transition: .18s ease;
        cursor: pointer;
    }

    .forum-topic:hover {
        transform: translateY(-3px);
        border-color: #2563eb;
        box-shadow: 0px 6px 16px rgba(0, 0, 0, 0.07);
    }

    .forum-topic a {
        color: #1e40af;
        font-size: 1.25em;
        font-weight: 800;
        text-decoration: none;
    }

    /* ===== BOTÕES ===== */
    .top-buttons {
        display: flex;
        gap: 12px;
        margin-bottom: 20px;
        align-items: center;
        flex-wrap: wrap;
    }

    .bottom-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 22px;
        background: #0a6cc4;
        color: white;
        font-weight: 700;
        border-radius: 10px;
        text-decoration: none;
        cursor: pointer;
        border: none !important;
        outline: none !important;
    }

    .bottom-btn.delete-btn {
        background: #ef4444 !important;
    }

    .bottom-btn.delete-btn:hover {
        background-color: #8c2828 !important;
        color: #fff !important;
        transition: 0.3s;
    }
</style>

<div class="forum-container">

    <h1>Fórum</h1>

    {{-- MENSAGENS --}}
    @if (session('error'))
        <div style="color:#b91c1c; font-weight:bold; text-align:center; margin-bottom:15px;">
            {{ session('error') }}
        </div>
    @endif

    @if (session('success'))
        <div style="color:#166534; font-weight:bold; text-align:center; margin-bottom:15px;">
            {{ session('success') }}
        </div>
    @endif

    @php
        $admins = ['carolbrm265@gmail.com', 'fernandes.junior@ifpr.edu.br', 'jean.gentilini@ifpr.edu.br'];
        $user = auth()->user();
        $isAdmin = $user && in_array(strtolower($user->email), $admins);
    @endphp

    <div class="forum-grid">

        {{-- LISTA DE TÓPICOS --}}
        <div>
            <h2 class="forum-subtitulo">Tópicos em Aberto</h2>

            @if ($topicos->isEmpty())
                <p style="text-align:center; color:#64748b;">Nenhum tópico disponível.</p>
            @endif

            {{-- FORM DE DELETAR (SÓ ADMIN) --}}
            @if ($isAdmin)
                <form action="{{ route('forum.destroyMultiple') }}" method="POST" id="delete-topicos-form">
                    @csrf
                    @method('DELETE')
            @endif

            <div class="top-buttons">
                <a href="{{ route('home') }}#servicos" class="bottom-btn">← Voltar</a>

                @if ($isAdmin)
                    <button type="submit" class="bottom-btn delete-btn">
                        Excluir Selecionados
                    </button>
                @endif
            </div>

            {{-- LISTAGEM --}}
            @foreach ($topicos as $topico)
                <div class="forum-topic" data-url="{{ route('forum.show', $topico->id) }}">
                    <div style="display:flex; align-items:center; gap:10px;">

                        @if ($isAdmin)
                            <input type="checkbox" name="topicos[]" value="{{ $topico->id }}"
                                onclick="event.stopPropagation();">
                        @endif

                        <a href="{{ route('forum.show', $topico->id) }}">
                            {{ $topico->titulo }}
                        </a>
                    </div>

                    <p>
                        Criado por <strong>{{ $topico->autor }}</strong>
                        em {{ $topico->created_at->format('d/m/Y') }}
                    </p>
                </div>
            @endforeach

            @if ($isAdmin)
                </form>
            @endif
        </div>

        {{-- FORMULÁRIO DE CRIAR TÓPICO --}}
        <div class="forum-form">
            <h3>Criar Novo Tópico</h3>

            @php
                $jaCriou = false;

                if ($user && !$isAdmin) {
                    $jaCriou = \App\Models\Topico::where('autor', $user->name)
                        ->whereBetween('created_at', [now()->startOfWeek(), now()->endOfWeek()])
                        ->exists();
                }
            @endphp

            {{-- ADMIN → pode criar sempre --}}
            @if ($isAdmin)
                <form action="{{ route('forum.store') }}" method="POST">
                    @csrf
                    <input type="text" name="titulo" placeholder="Título do tópico" required>
                    <textarea name="descricao" rows="3" placeholder="Descrição..." required></textarea>
                    <input type="text" value="{{ $user->name }}" readonly>
                    <button type="submit">Criar Tópico</button>
                </form>

                {{-- USUÁRIO NORMAL → já criou --}}
            @elseif($jaCriou)
                <p style="color:#b91c1c; font-weight:bold; text-align:center;">
                    Você já criou 1 tópico esta semana.
                </p>

                {{-- USUÁRIO NORMAL → pode criar --}}
            @else
                <form action="{{ route('forum.store') }}" method="POST">
                    @csrf
                    <input type="text" name="titulo" placeholder="Título do tópico" required>
                    <textarea name="descricao" rows="3" placeholder="Descrição..." required></textarea>
                    <input type="text" value="{{ $user->name }}" readonly>
                    <button type="submit">Criar Tópico</button>
                </form>
            @endif
        </div>

    </div>

</div>

<script>
    document.querySelectorAll('.forum-topic').forEach(div => {
        div.addEventListener('click', () => {
            window.location.href = div.dataset.url;
        });
    });
</script>

@include('layouts.footer')
