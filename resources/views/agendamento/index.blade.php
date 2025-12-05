@include('layouts.cabecalho')

<div class="page-wrapper">

    <h2 class="titulo-pagina">Agendamentos em Aguardo</h2>

    @if ($agendamentos->isEmpty())
        <p class="nenhum">Nenhum agendamento encontrado.</p>
    @else
        <div class="agendamento-container">

            @foreach ($agendamentos as $ag)
                <div class="agendamento-card">

                    <h3 class="agendamento-nome">{{ $ag->nome }}</h3>

                    <div class="agendamento-info">
                        <p><strong>ID:</strong> {{ $ag->id }}</p>
                        <p><strong>E-mail:</strong> {{ $ag->email }}</p>
                        <p><strong>Telefone:</strong> {{ $ag->telefone }}</p>
                        <p><strong>Categoria:</strong> {{ $ag->categoria }}</p>
                        <p><strong>Serviço:</strong> {{ $ag->servico }}</p>
                        <p><strong>Data:</strong> {{ \Carbon\Carbon::parse($ag->data_desejada)->format('d/m/Y') }}</p>
                        <p><strong>Hora:</strong> {{ $ag->horario_desejado }}</p>
                        <p><strong>Projeto:</strong> {{ $ag->descricao_projeto }}</p>
                    </div>

                </div>
            @endforeach

        </div>

    @endif

</div>


<style>
    /* --- Layout Geral --- */
    .page-wrapper {
        max-width: 1100px;
        margin: auto;
        padding: 20px 25px;
        font-family: 'Segoe UI', Tahoma, sans-serif;
    }

    .titulo-pagina {
        color: #004a8f;
        font-size: 28px;
        margin-bottom: 25px;
        letter-spacing: 0.5px;
        font-weight: 600;
    }

    .nenhum {
        font-size: 17px;
        color: #333;
    }

    /* --- Lista de Cards --- */
    .agendamento-container {
        display: flex;
        flex-direction: column;
        gap: 25px;
    }

    /* --- Card Individual --- */
    .agendamento-card {
        background: #ffffff;
        border-radius: 14px;
        padding: 25px;
        border: 1px solid #e0e0e0;
        box-shadow: 0 4px 18px rgba(0, 0, 0, 0.06);
        transition: 0.25s ease-in-out;
        width: 100%;
    }

    .agendamento-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 8px 22px rgba(0, 0, 0, 0.10);
    }

    /* --- Título do Card --- */
    .agendamento-nome {
        margin-bottom: 18px;
        font-size: 22px;
        color: #004a8f;
        font-weight: 600;
    }

    /* --- Conteúdo do Card --- */
    .agendamento-info p {
        margin: 7px 0;
        font-size: 16px;
        color: #444;
    }

    .agendamento-info strong {
        color: #004a8f;
    }

    /* Responsivo */
    @media (max-width: 600px) {
        .agendamento-card {
            padding: 18px;
        }

        .agendamento-nome {
            font-size: 19px;
        }

        .agendamento-info p {
            font-size: 15px;
        }
    }
</style>
