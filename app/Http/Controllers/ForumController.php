<?php

namespace App\Http\Controllers;

use App\Models\Topico;
use App\Models\Conversa;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    // Lista todos os tópicos
    public function index()
    {
        $topicos = Topico::all(); // ou paginate(10) se quiser paginação
        return view('forum.index', compact('topicos'));
    }

    // Mostra o tópico e suas conversas
    public function show($id)
    {
        $topico = Topico::findOrFail($id);
        $conversas = $topico->conversas()->orderBy('created_at', 'asc')->get(); // conversas do tópico
        return view('forum.show', compact('topico', 'conversas'));
    }

    // Inserir nova conversa em um tópico
    public function responder(Request $request, $id)
    {
        $request->validate([
            'conteudo' => 'required'
        ]);

        $topico = Topico::findOrFail($id);

        $conversa = new Conversa();
        $conversa->topico_id = $topico->id;
        $conversa->autor = $request->autor ?? 'Anônimo';
        $conversa->conteudo = $request->conteudo;
        $conversa->save();

        return redirect()->route('forum.show', $id);
    }

    // Criar um novo tópico diretamente na index
    public function store(Request $request)
    {
        $request->validate([
            'titulo' => 'required',
            'descricao' => 'required',
            'autor' => 'nullable'
        ]);

        $topico = new Topico();
        $topico->titulo = $request->titulo;
        $topico->descricao = $request->descricao;
        $topico->autor = $request->autor ?? 'Anônimo';
        $topico->save();

        return redirect()->route('forum.index');
    }
    
}
