<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Evento;
use Illuminate\Support\Facades\Storage;

class EventoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $eventos = Evento::where('status', 'ativo')->get(); // busca todos os eventos
        //return view('eventos.index', compact('eventos'));
        return view('eventos.index', ['eventos' => $eventos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('eventos.create'); // a view simples que criamos
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        // Validação simples
        $request->validate([
            'titulo' => 'required|string|max:255',
            'descricao' => 'nullable|string',
            'data_evento' => 'required|date',
            'hora_evento' => 'nullable',
            'local' => 'nullable|string|max:255',
            'status' => 'required|in:ativo,cancelado,concluido',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif,heic,webp|max:5120',
        ]);

        // Upload da imagem, se houver
        $imagemPath = null;
        if ($request->hasFile('imagem')) {
            $imagemPath = $request->file('imagem')->store('eventos', 'public');
        }

        // Criar registro no banco
        Evento::create([
            'titulo' => $request->titulo,
            'descricao' => $request->descricao,
            'data_evento' => $request->data_evento,
            'hora_evento' => $request->hora_evento,
            'local' => $request->local,
            'status' => $request->status,
            'imagem' => $imagemPath,
            'categoria' => $request->categoria,
        ]);

        return redirect()->route('eventos.create')->with('success', 'Evento cadastrado com sucesso!');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // Buscar o evento pelo ID
        $evento = Evento::findOrFail($id);

        // Retornar a view show.blade.php com os dados do evento
        return view('eventos.show', compact('evento'));
    }

    /**
     * Show the form for editing the specified resource.
     */

    public function edit(string $id)
    {
        // Busca o evento pelo ID ou retorna 404
        $evento = Evento::findOrFail($id);

        // Retorna a view de edição passando o evento
        return view('eventos.edit', compact('evento'));
    }


    /**
     * Update the specified resource in storage.
     */

    public function update(Request $request, string $id)
    {
        // 1️⃣ Buscar o evento
        $evento = Evento::findOrFail($id);

        // 2️⃣ Validar os dados
        $validatedData = $request->validate([
            'titulo' => 'required|string|max:255',
            'categoria' => 'required|string|max:50',
            'descricao' => 'nullable|string',
            'data_evento' => 'required|date',
            'hora_evento' => 'nullable',
            'local' => 'nullable|string|max:255',
            'status' => 'required|string|in:ativo,cancelado,concluido',
            'imagem' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // 3️⃣ Atualizar os campos do evento
        $evento->titulo = $validatedData['titulo'];
        $evento->categoria = $validatedData['categoria'];
        $evento->descricao = $validatedData['descricao'] ?? null;
        $evento->data_evento = $validatedData['data_evento'];
        $evento->hora_evento = $validatedData['hora_evento'] ?? null;
        $evento->local = $validatedData['local'] ?? null;
        $evento->status = $validatedData['status'];

        // 4️⃣ Tratar upload de imagem
        if ($request->hasFile('imagem')) {
            // Excluir a imagem antiga, se existir
            if ($evento->imagem && Storage::disk('public')->exists($evento->imagem)) {
                Storage::disk('public')->delete($evento->imagem);
            }

            // Salvar a nova imagem
            $path = $request->file('imagem')->store('eventos', 'public');
            $evento->imagem = $path;
        }

        // 5️⃣ Salvar alterações
        $evento->save();

        // 6️⃣ Redirecionar com mensagem de sucesso
        return redirect()->route('eventos.edit', $evento->id)
            ->with('success', 'Evento atualizado com sucesso!');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
