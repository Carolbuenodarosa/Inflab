<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use Illuminate\Support\Facades\Route;

// Rota da Home
Route::get('/', function () {
    return view('home');
})->name('home');

// CRUD de eventos
Route::get('/eventos', [EventoController::class, 'index'])->name('eventos.index');
Route::get('/eventos/create', [EventoController::class, 'create'])->name('eventos.create');
Route::post('/eventos', [EventoController::class, 'store'])->name('eventos.store');
Route::get('/eventos/{id}/edit', [EventoController::class, 'edit'])->name('eventos.edit');
Route::put('/eventos/{id}', [EventoController::class, 'update'])->name('eventos.update');
Route::delete('/eventos/{id}', [EventoController::class, 'destroy'])->name('eventos.destroy');
Route::get('/eventos/{id}', [EventoController::class, 'show'])->name('eventos.show');

// Autenticação
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

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

use App\Http\Controllers\ChatController;
// Apenas usuários autenticados podem acessar

Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');   // 🔹 Ler mensagens
Route::post('/chat', [ChatController::class, 'store'])->name('chat.store'); // 🔹 Gravar nova mensagem
Route::get('/chat/messages', [ChatController::class, 'getMessages'])->name('chat.messages');


use App\Http\Controllers\BookingController;

Route::post('/agendamento', [BookingController::class, 'store'])->name('booking.store');

Route::get('/maquinas', function () {
    return view('maquinas');
})->name('maquinas');



