<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Agendamento;

class AgendamentoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agendamentos = Agendamento::orderBy('id', 'desc')->get();

        return view('agendamento.index', compact('agendamentos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        // Validação
        $validated = $request->validate([
            'name' => 'required|string|max:150',
            'email' => 'required|email|max:150',
            'phone' => 'required|string|max:20',
            'category' => 'required|string',
            'service' => 'required|string',
            'date' => 'required|date',
            'time' => 'required',
            'project' => 'required|string',
        ]);

        // Criar registro via Model
        Agendamento::create([
            'nome' => $validated['name'],
            'email' => $validated['email'],
            'telefone' => $validated['phone'],
            'categoria' => $validated['category'],
            'servico' => $validated['service'],
            'data_desejada' => $validated['date'],
            'horario_desejado' => $validated['time'],
            'descricao_projeto' => $validated['project'],
        ]);

        // Retorno
        return redirect('/')
            ->with('success', 'Agendamento realizado com sucesso!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
    public function livre(){
        
    }
}
