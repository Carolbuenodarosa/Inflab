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
