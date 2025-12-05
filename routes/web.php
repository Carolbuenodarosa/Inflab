<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\BookingController;
use App\Models\Evento;

// -----------------------------------------------------
// 🔹 HOME — Envia $eventos para a página home.blade.php
// -----------------------------------------------------
Route::get('/', function () {
    $eventos = Evento::orderBy('data_evento', 'asc')->get();
    return view('home', compact('eventos')); // 👈 CORRETO
})->name('home');


// -----------------------------------------------------
// 🔹 CRUD DE EVENTOS
// -----------------------------------------------------
Route::get('/eventos', [EventoController::class, 'index'])->name('eventos.index');
Route::get('/eventos/create', [EventoController::class, 'create'])->name('eventos.create');
Route::post('/eventos', [EventoController::class, 'store'])->name('eventos.store');
Route::get('/eventos/{id}/edit', [EventoController::class, 'edit'])->name('eventos.edit');
Route::put('/eventos/{id}', [EventoController::class, 'update'])->name('eventos.update');
Route::delete('/eventos/{id}', [EventoController::class, 'destroy'])->name('eventos.destroy');
Route::get('/eventos/{id}', [EventoController::class, 'show'])->name('eventos.show');


// -----------------------------------------------------
// 🔹 AUTENTICAÇÃO
// -----------------------------------------------------
Route::get('/register', [RegisteredUserController::class, 'create'])
    ->middleware('guest')
    ->name('register');

Route::post('/register', [RegisteredUserController::class, 'store'])
    ->middleware('guest');

Route::get('/login', [AuthenticatedSessionController::class, 'create'])
    ->middleware('guest')
    ->name('login');

Route::post('/login', [AuthenticatedSessionController::class, 'store'])
    ->middleware('guest');

Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
    ->middleware('auth')
    ->name('logout');


// -----------------------------------------------------
// 🔹 CHAT
// -----------------------------------------------------
Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
Route::post('/chat', [ChatController::class, 'store'])->name('chat.store');
Route::get('/chat/messages', [ChatController::class, 'getMessages'])->name('chat.messages');


// -----------------------------------------------------
// 🔹 AGENDAMENTO
// -----------------------------------------------------
use App\Http\Controllers\AgendamentoController;

Route::get('/agendamentos', [AgendamentoController::class, 'index'])->name('agendamentos.index');
Route::middleware('auth')->group(function () {
    Route::post('/agendamento/salvar', [AgendamentoController::class, 'store'])->name('agendamento.store');
});
// -----------------------------------------------------
// 🔹 PÁGINAS SIMPLES
// -----------------------------------------------------
Route::view('/maquinas', 'maquinas')->name('maquinas');
Route::view('/visitas', 'visitas')->name('visitas');
Route::view('/workshop', 'workshop')->name('workshop');
Route::view('/treinamentos', 'treinamentos')->name('treinamentos');
Route::view('/eletronica', 'eletronica')->name('eletronica');
Route::view('/robotica', 'robotica')->name('robotica');
Route::view('/marcenaria', 'marcenaria')->name('marcenaria');
Route::view('/usinagem', 'usinagem')->name('usinagem');
Route::view('/comunidade', 'comunidade')->name('comunidade');

Route::get('/bem-vindo', function () {
    return view('bem'); // Aponta para resources/views/bem.blade.php
})->middleware('auth')->name('bem');
//=====================================
//   Forum
//=====================================

use App\Http\Controllers\ForumController;

Route::middleware('auth')->group(function () {

    // Lista todos os tópicos
    Route::get('/forum', [ForumController::class, 'index'])
        ->name('forum.index');

    // Visualiza um tópico específico e suas conversas
    Route::get('/forum/{id}', [ForumController::class, 'show'])
        ->name('forum.show');

    // Inserir uma nova conversa em um tópico
    Route::post('/forum/{id}/responder', [ForumController::class, 'responder'])
        ->name('forum.responder');

    // Criar novo tópico diretamente da index
    Route::post('/forum', [ForumController::class, 'store'])
        ->name('forum.store');
});
