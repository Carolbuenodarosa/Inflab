<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     * Exibe a lista de registros.
     */
    public function index()
    {
        //
        $messages = Message::orderBy('created_at', 'desc')->get(); // mensagens mais novas primeiro
        return view('chat', compact('messages'));
    }

    /**
     * Mostra o formulário de criação.
     */
    public function create()
    {
        //
    }

    /**
     * Salva um novo registro.
     */
    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        Message::create([
            'user_id' => auth()->id(), // pega o usuário logado
            'message' => $request->message,
        ]);

        return redirect()->back();
    }
    /**
     * Exibe um registro específico.
     */
    public function show($id)
    {
        //
    }

    /**
     * Mostra o formulário de edição.
     */
    public function edit($id)
    {
        //
    }

    /**
     * Atualiza um registro existente.
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove um registro.
     */
    public function destroy($id)
    {
        //
    }
}
