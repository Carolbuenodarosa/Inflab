namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatController extends Controller
{
    public function index()
    {
        $messages = Message::with('user')->orderBy('created_at')->get();
        return view('chat', compact('messages'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:1000',
        ]);

        $text = $request->message;

        // Lista de palavras proibidas
        $palavrasProibidas = ["palavrão1","palavrão2","xingo","ofensa","briga","ódio","idiota","burro","imbecil"];
        $palavrasPermitidas = ["curso","disciplina","professor","aluno","evento","prova","atividade","trabalho","horário","dúvida","matéria","tcc","pesquisa","laboratório","biblioteca","material","notícia","notas","avaliacao"];

        $lower = strtolower($text);

        if (collect($palavrasProibidas)->contains(fn($p)=>str_contains($lower, $p))) {
            return response()->json(['error'=>'Mensagem contém palavrões ou brigas'], 422);
        }

        if (!collect($palavrasPermitidas)->contains(fn($p)=>str_contains($lower, $p))) {
            return response()->json(['error'=>'Mensagem deve estar relacionada ao instituto'], 422);
        }

        $message = Message::create([
            'user_id' => Auth::id(),
            'message' => $text
        ]);

        return response()->json([
            'message' => $message->load('user')
        ]);
    }

    public function destroy(Message $message)
    {
        // Verifica se é admin
        if (strtolower(Auth::user()->email) !== 'carolbrm265@gmail.com') {
            return response()->json(['error'=>'Apenas admin pode apagar mensagens'],403);
        }

        $message->delete();
        return response()->json(['success'=>true]);
    }
}