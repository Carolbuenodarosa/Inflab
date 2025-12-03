@include('layouts.cabecalho')

<div class="evento-container">
    <h2>{{ $evento->titulo }}</h2>

    @if ($evento->imagem && Storage::disk('public')->exists($evento->imagem))
        <img src="{{ Storage::url($evento->imagem) }}" alt="Imagem do Evento" class="evento-imagem">
    @else
        <div class="evento-imagem sem-imagem">
            Sem imagem
        </div>
    @endif

    <div class="evento-info">
        <p><span class="label">Descrição:</span> {{ $evento->descricao ?? 'Não informada' }}</p>
        <p><span class="label">Data:</span> {{ $evento->data_evento }}</p>
        <p><span class="label">Hora:</span> {{ $evento->hora_evento ?? 'Não informada' }}</p>
        <p><span class="label">Local:</span> {{ $evento->local ?? 'Não informado' }}</p>
        <p><span class="label">Status:</span> {{ ucfirst($evento->status) }}</p>
    </div>

    <div class="botoes">
        <a href="{{ route('home') }}" class="btn-voltar">Voltar para Lista</a>
        @auth
            @if (in_array(strtolower(Auth::user()->email), [
                    'carolbrm265@gmail.com',
                    'fernandes.junior@ifpr.edu.br',
                    'jean.gentilini@ifpr.edu.br',
                ]))
                <a href="{{ route('eventos.edit', $evento->id) }}" class="btn-editar">Editar evento</a>
            @endif
        @endauth
    </div>
</div>

<style>
    .evento-container {
        max-width: 700px;
        margin: 50px auto;
        background-color: #fff;
        padding: 30px;
        border-radius: 10px;
        box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
        font-family: Arial, sans-serif;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
        color: #333;
    }

    .evento-imagem {
        width: 100%;
        height: 300px;
        object-fit: cover;
        border-radius: 8px;
        margin-bottom: 20px;
    }

    .sem-imagem {
        background-color: #ddd;
        display: flex;
        align-items: center;
        justify-content: center;
        color: #666;
        font-size: 18px;
    }

    .evento-info p {
        margin: 10px 0;
        color: #555;
    }

    .evento-info .label {
        font-weight: bold;
        color: #333;
    }

    .botoes a {
        display: inline-block;
        margin-top: 20px;
        margin-right: 10px;
        padding: 10px 20px;
        color: white;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .btn-voltar {
        background-color: #007bff;
    }

    .btn-voltar:hover {
        background-color: #0056b3;
    }

    .btn-editar {
        background-color: #28a745;
    }

    .btn-editar:hover {
        background-color: #1e7e34;
    }
</style>

@include('layouts.footer')
