@include('layouts.cabecalho')

<div style="max-width:1100px; margin:auto; padding:20px;">

    <h2 style="margin-bottom:20px; color:#0056a3;">Lista de Agendamentos</h2>

    @if($agendamentos->isEmpty())
        <p>Nenhum agendamento encontrado.</p>
    @else
        <table border="1" cellspacing="0" cellpadding="8" style="width:100%; border-collapse: collapse;">
            <thead style="background:#0056a3; color:white;">
                <tr>
                    <th>ID</th>
                    <th>Nome</th>
                    <th>E-mail</th>
                    <th>Telefone</th>
                    <th>Categoria</th>
                    <th>Serviço</th>
                    <th>Data</th>
                    <th>Hora</th>
                    <th>Projeto</th>
                </tr>
            </thead>
            <tbody>
                @foreach($agendamentos as $ag)
                    <tr>
                        <td>{{ $ag->id }}</td>
                        <td>{{ $ag->nome }}</td>
                        <td>{{ $ag->email }}</td>
                        <td>{{ $ag->telefone }}</td>
                        <td>{{ $ag->categoria }}</td>
                        <td>{{ $ag->servico }}</td>
                        <td>{{ \Carbon\Carbon::parse($ag->data_desejada)->format('d/m/Y') }}</td>
                        <td>{{ $ag->horario_desejado }}</td>
                        <td>{{ $ag->descricao_projeto }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif

</div>

