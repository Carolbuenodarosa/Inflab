@include('layouts.cabecalho')

<div class="evento-container">
    <h2>{{ $evento->titulo }}</h2>

    @if ($evento->imagem && Storage::disk('public')->exists($evento->imagem))
        <img src="{{ Storage::url($evento->imagem) }}" alt="Imagem do Evento" class="evento-imagem">
    @else
        <div class="evento-imagem sem-imagem">Sem imagem</div>
    @endif

    <div class="evento-info">
        <p><span class="label">Descrição:</span> {{ $evento->descricao ?? 'Não informada' }}</p>
        <p><span class="label">Data:</span> {{ $evento->data_evento }}</p>
        <p><span class="label">Hora:</span> {{ $evento->hora_evento ?? 'Não informada' }}</p>
        <p><span class="label">Local:</span> {{ $evento->local ?? 'Não informado' }}</p>
        <p><span class="label">Status:</span> {{ ucfirst($evento->status) }}</p>
    </div>

    <div class="linha-voltar">
        <a href="/#eventos" class="btn btn-voltar">Voltar</a>
    </div>

    <div class="botoes">
        @auth
            @if (in_array(strtolower(Auth::user()->email), [
                    'carolbrm265@gmail.com',
                    'fernandes.junior@ifpr.edu.br',
                    'jean.gentilini@ifpr.edu.br',
                ]))
                <a href="{{ route('eventos.edit', $evento->id) }}" class="btn btn-editar">Editar</a>

                <form action="{{ route('eventos.destroy', $evento->id) }}" method="POST"
                    onsubmit="return confirm('Excluir evento?');">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-excluir">Excluir</button>
                </form>
            @endif
        @endauth
    </div>
</div>

<style>
    /* ===== CONTAINER ===== */
    .evento-container {
        max-width: 800px;
        margin: 40px auto;
        background: #fff;
        padding: 28px 32px;
        border-radius: 16px;
        font-family: "Inter", Arial, sans-serif;
        box-shadow: 0 8px 22px rgba(0, 0, 0, 0.10);
        animation: fadeIn 0.35s ease;
    }

    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(8px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* ===== TÍTULO ===== */
    h2 {
        text-align: center;
        margin-bottom: 25px;
        font-size: 26px;
        font-weight: 700;
    }

    /* ===== IMAGEM ===== */
    .evento-imagem {
        width: 100%;
        height: 300px;
        object-fit: cover;
        border-radius: 14px;
        margin-bottom: 22px;
        border: 2px solid #e9e9e9;
        box-shadow: 0 5px 18px rgba(0, 0, 0, 0.10);
    }

    .sem-imagem {
        background: #e8e8e8;
        color: #666;
        display: flex;
        align-items: center;
        justify-content: center;
        height: 220px;
        border-radius: 14px;
        font-size: 18px;
    }

    /* ===== INFO ===== */
    .evento-info p {
        font-size: 17px;
        margin: 10px 0;
    }

    .label {
        font-weight: 700;
    }

    /* ======================================
            BOTÃO VOLTAR À ESQUERDA
====================================== */
    .linha-voltar {
        width: 100%;
        display: flex;
        justify-content: flex-start;
        /* ⬅⬅⬅ ISSO COLOCA O VOLTAR NA ESQUERDA */
        margin-bottom: 18px;
    }

    /* ===== BOTÕES ===== */
    .botoes {
        display: flex;
        flex-wrap: wrap;
        gap: 12px;
        justify-content: center;
        /* editar/excluir continuam centralizados */
    }

    .btn {
        padding: 10px 26px;
        font-size: 15px;
        border-radius: 10px;
        transition: 0.2s ease;
        color: #fff;
        border: none;
        text-decoration: none;
    }

    /* cores */
    .btn-voltar {
        background: #006be6;
    }

    .btn-editar {
        background: #1fa85b;
    }

    .btn-excluir {
        background: #e53939;
    }

    .btn:hover {
        transform: translateY(-3px);
        filter: brightness(1.1);
    }

    /* ===== RESPONSIVO ===== */
    @media (max-width: 650px) {
        .evento-container {
            padding: 20px;
        }

        h2 {
            font-size: 22px;
        }

        .evento-imagem {
            height: 190px;
        }

        .btn {
            width: 100%;
            text-align: center;
        }

        .linha-voltar {
            justify-content: center;
        }

        /* no celular fica centralizado */
    }
</style>

@include('layouts.footer')
