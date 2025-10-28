<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    /**
     * Página de apresentação antes do chat
     */
    public function apresentacao()
    {
        return view('apresentacao'); // resources/views/apresentacao.blade.php
    }

    /**
     * Exibe a lista de mensagens do chat
     */
    public function index()
    {
        // Busca todas as mensagens, da mais antiga para a mais recente
        $messages = Message::orderBy('created_at', 'asc')->get();

        return view('chat', compact('messages'));
    }

    /**
     * Salva uma nova mensagem
     */
    public function store(Request $request)
    {
        // Validação básica
        $request->validate([
            'message' => 'required|string|max:1000',
            'image' => 'nullable|image|max:2048',
        ]);

        // Lista de palavras proibidas
        $palavrasProibidas = [
            'burro',
            'corno',
            'tongo',
            'canalha',
            'idiota'
        ];

        $mensagem = mb_strtolower($request->message, 'UTF-8');

        foreach ($palavrasProibidas as $proibida) {
            if (str_contains($mensagem, mb_strtolower($proibida, 'UTF-8'))) {
                return redirect()->back()
                    ->withErrors(['message' => 'A mensagem contém palavras não permitidas.'])
                    ->withInput();
            }
        }

        // Monta os dados
        $data = [
            'user_id' => auth()->id(),
            'message' => $request->message,
        ];

        // Upload da imagem, se houver
        if ($request->hasFile('image')) {
            $imagemPath = $request->file('image')->store('chat_image', 'public');
            $data['image'] = $imagemPath;
        }

        Message::create($data);

        return redirect()->back();
    }

    /**
     * Métodos reservados para CRUD (não implementados ainda)
     */
    public function show($id)
    {
        //
    }

    public function create()
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
