<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Detalhes do Evento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 30px;
        }

        .evento-container {
            max-width: 700px;
            margin: 0 auto;
            background-color: #fff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
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

        .evento-info p {
            margin: 10px 0;
            color: #555;
        }

        .evento-info .label {
            font-weight: bold;
            color: #333;
        }

        .btn-voltar {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
        }

        .btn-voltar:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <div class="evento-container">
        <h2>{{ $evento->titulo }}</h2>

        @if($evento->imagem && Storage::disk('public')->exists($evento->imagem))
            <img src="{{ Storage::url($evento->imagem) }}" alt="Imagem do Evento" class="evento-imagem">
        @else
            <div class="evento-imagem" style="background-color: #ddd; display:flex; align-items:center; justify-content:center;">
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

        <a href="{{ route('eventos.index') }}" class="btn-voltar">Voltar para Lista</a>
     <a href="{{ route('eventos.edit', $evento->id) }}" class="btn-voltar">Editar evento</a>
    </div>
</body>

</html>
