<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ChatController extends Controller
{
    /**
     * Exibe a lista de mensagens.
     */
    public function index()
    {
        // Mensagens mais antigas primeiro
        $messages = Message::orderBy('created_at', 'asc')->get();
        return view('chat', compact('messages'));
    }

    /**
     * Salva uma nova mensagem.
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
            'merda',
            'corno',
            'burro',
            'idiota',
            'loco',
            'palhaço',
            'retardado',
            'viado',
            'bicha',
            'puta',
            'otário',
            'babaca',
            'estúpido',
            'cabra',
            'foda-se',
            'desgraça',
            'imbecil',
            'arrombado',
            'vagabundo',
            'piranha'
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
}
