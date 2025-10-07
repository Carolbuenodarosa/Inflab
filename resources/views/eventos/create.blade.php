<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Cadastrar Evento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            padding: 30px;
        }

        h2 {
            text-align: center;
            color: #333;
        }

        form {
            background-color: #fff;
            max-width: 500px;
            margin: 20px auto;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 5px;
            color: #555;
        }

        input[type="text"],
        input[type="date"],
        input[type="time"],
        input[type="file"],
        select,
        textarea {
            width: 100%;
            padding: 8px 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
        }

        textarea {
            resize: vertical;
        }

        button {
            background-color: #007bff;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 16px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #0056b3;
        }

        .alert {
            padding: 10px;
            margin-bottom: 15px;
            border-radius: 5px;
        }

        .alert-success {
            background-color: #d4edda;
            color: #155724;
        }

        .alert-error {
            background-color: #f8d7da;
            color: #721c24;
        }

        ul {
            margin: 0;
            padding-left: 20px;
        }
    </style>
</head>

<body>
    <h2>Cadastrar Evento</h2>

    <!-- Exibir mensagens de erro -->
    @if ($errors->any())
    <div class="alert alert-error">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    @if (session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
    @endif

    <form action="{{ route('eventos.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label for="titulo">Título:</label>
        <input type="text" name="titulo" id="titulo" required>

        <label for="categoria">Categoria:</label>
        <select name="categoria" id="categoria" required>
            <option value="">Selecione uma categoria</option>
            <option value="visita">visita</option>
            <option value="workshops">workshops</option>
            <option value="Treinamentos">Treinamentos</option>
            <option value="Exposições">Exposições</option>
        </select>

        <label for="descricao">Descrição:</label>
        <textarea name="descricao" id="descricao" rows="3"></textarea>

        <label for="data_evento">Data do Evento:</label>
        <input type="date" name="data_evento" id="data_evento" required>

        <label for="hora_evento">Hora do Evento:</label>
        <input type="time" name="hora_evento" id="hora_evento">

        <label for="local">Local:</label>
        <input type="text" name="local" id="local">

        <label for="status">Status:</label>
        <select name="status" id="status">
            <option value="ativo">Ativo</option>
            <option value="cancelado">Cancelado</option>
            <option value="concluido">Concluído</option>
        </select>

        <label for="imagem">Imagem do Evento:</label>
        <input type="file" name="imagem" id="imagem">

        <button type="submit">Cadastrar</button>
    </form>
</body>

</html>
