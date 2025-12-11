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

    /* Subtítulos */
    .forum-subtitulo {
        font-size: 1.6em;
        font-weight: 800;
        color: #1e40af;
        margin-bottom: 15px;
        padding-left: 2px;
    }

    /* Grid */
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

    /* Formulário */
    .forum-form {
        background: #ffffff;
        border-radius: 10px;
        padding: 18px 20px;
        border: 1px solid #e2e8f0;
        box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.05);
    }

    .forum-form h3 {
        text-align: center;
        color: #1e293b;
        margin-bottom: 12px;
        font-weight: 600;
    }

    .forum-form input,
    .forum-form textarea,
    .forum-form select {
        width: 100%;
        border: 1px solid #cbd5e1;
        border-radius: 8px;
        padding: 10px;
        background: #f8fafc;
        margin-bottom: 10px;
    }

    .forum-form select:focus {
        border-color: #2563eb;
        box-shadow: 0 0 0 2px rgba(37, 99, 235, 0.2);
        outline: none;
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

    /* Tópicos */
    .forum-topic {
        background: #ffffff;
        border-radius: 12px;
        padding: 20px 22px;
        border: 1px solid #e2e8f0;
        margin-bottom: 18px;
        box-shadow: 0px 1px 3px rgba(0, 0, 0, 0.05);
        transition: .18s ease;
    }

    .forum-topic:hover {
        transform: translateY(-3px);
        border-color: #2563eb;
        box-shadow: 0px 6px 16px rgba(0, 0, 0, 0.08);
    }

    .forum-topic a {
        color: #1e40af;
        font-size: 1.25em;
        font-weight: 800;
        text-decoration: none;
    }

    /* Botões */
    .top-buttons {
        display: flex;
        gap: 12px;
        margin-bottom: 20px;
        flex-wrap: wrap;
    }

    .bottom-btn {
        display: inline-flex;
        align-items: center;
        gap: 8px;
        padding: 10px 22px;
        background: #0a6cc4;
        color: white;
        border-radius: 10px;
        font-weight: 700;
        text-decoration: none;
        border: none;
        cursor: pointer;
    }

    .delete-btn {
        background: #ef4444 !important;
    }

    .delete-btn:hover {
        background: #b32727 !important;
    }

    /* ===== Filtro de Categoria ===== */
    .filtro-container {
        display: flex;
        align-items: center;
        gap: 12px;
        margin-bottom: 20px;
    }

    .filtro-container label {
        font-weight: 600;
        color: #1e40af;
    }

    .filtro-container select {
        padding: 8px 12px;
        border-radius: 8px;
        border: 1px solid #cbd5e1;
        background: #f8fafc;
        transition: all 0.2s ease;
        cursor: pointer;
        min-width: 180px;
    }

    .filtro-container select:focus {
        border-color: #2563eb;
        box-shadow: 0 0 0 2px rgba(37, 99, 235, 0.2);
        outline: none;
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

            {{-- FILTRO --}}
            <div class="filtro-container">
                <label for="filtroCategoria">Filtrar por categoria:</label>
                <select id="filtroCategoria">
                    <option value="">Todas</option>
                    <option value="Comversa">Comversa</option>
                    <option value="Fisica">Física</option>
                    <option value="Robotica">Robótica</option>
                    <option value="Dicusao sobre temas">Discussão sobre temas</option>
                </select>
            </div>

            @if ($topicos->isEmpty())
                <p style="text-align:center; color:#64748b;">Nenhum tópico disponível.</p>
            @endif

            @if ($isAdmin)
                <form action="{{ route('forum.destroyMultiple') }}" method="POST">
                    @csrf
                    @method('DELETE')
            @endif

            <div class="top-buttons">
                <a href="{{ route('home') }}" class="bottom-btn">← Voltar</a>
                @if ($isAdmin)
                    <button type="submit" class="bottom-btn delete-btn">Excluir Selecionados</button>
                @endif
            </div>

            @foreach ($topicos as $topico)
                <div class="forum-topic" data-categoria="{{ $topico->categoria }}"
                    onclick="window.location='{{ route('forum.show', $topico->id) }}'">

                    <div style="display:flex; align-items:center; gap:10px;">
                        @if ($isAdmin)
                            <input type="checkbox" name="topicos[]" value="{{ $topico->id }}"
                                onclick="event.stopPropagation();">
                        @endif
                        <a href="{{ route('forum.show', $topico->id) }}">{{ $topico->titulo }}</a>
                    </div>

                    <p>Categoria <strong>{{ $topico->categoria }}</strong></p>
                    <p>Criado por <strong>{{ $topico->autor }}</strong> em {{ $topico->created_at->format('d/m/Y') }}
                    </p>
                    
                </div>
            @endforeach

            @if ($isAdmin)
                </form>
            @endif
        </div>

        {{-- FORMULÁRIO DE CRIAÇÃO --}}
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

            @if ($isAdmin)
                <form action="{{ route('forum.store') }}" method="POST">
                    @csrf
                    <input type="text" name="titulo" placeholder="Título do tópico" required>
                    <textarea name="descricao" rows="3" placeholder="Descrição..." required></textarea>
                    <input type="text" value="{{ $user->name }}" readonly>
                    <select name="categoria" required>
                        <option value="" disabled selected>Selecione a categoria</option>
                        <option value="Comversa">Comversa</option>
                        <option value="Fisica">Física</option>
                        <option value="Robotica">Robótica</option>
                        <option value="Dicusao sobre temas">Dicusao sobre temas</option>
                    </select>
                    <button type="submit">Criar Tópico</button>
                </form>
            @elseif($jaCriou)
                <p style="color:#b91c1c; text-align:center; font-weight:bold;">
                    Você já criou 1 tópico esta semana.
                </p>
            @else
                <form action="{{ route('forum.store') }}" method="POST">
                    @csrf
                    <input type="text" name="titulo" placeholder="Título do tópico" required>
                    <textarea name="descricao" rows="3" placeholder="Descrição..." required></textarea>
                    <input type="text" value="{{ $user->name }}" readonly>
                    <select name="categoria" required>
                        <option value="" disabled selected>Selecione a categoria</option>
                        <option value="Comversa">Comversa</option>
                        <option value="Fisica">Física</option>
                        <option value="Robotica">Robótica</option>
                        <option value="Dicusao sobre temas">Dicusao sobre temas</option>
                    </select>
                    <button type="submit">Criar Tópico</button>
                </form>
            @endif
        </div>

    </div>
</div>

<script>
    const filtro = document.getElementById('filtroCategoria');
    const topicos = document.querySelectorAll('.forum-topic');

    filtro.addEventListener('change', function() {
        const categoriaSelecionada = this.value;
        topicos.forEach(topico => {
            if (!categoriaSelecionada || topico.dataset.categoria === categoriaSelecionada) {
                topico.style.display = 'block';
            } else {
                topico.style.display = 'none';
            }
        });
    });
</script>

@include('layouts.footer')
