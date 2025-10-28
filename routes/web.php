<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rota da Home
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('home');
})->name('home');

/*
|--------------------------------------------------------------------------
| CRUD de Eventos
|--------------------------------------------------------------------------
*/
Route::prefix('eventos')->group(function () {
    Route::get('/', [EventoController::class, 'index'])->name('eventos.index');
    Route::get('/create', [EventoController::class, 'create'])->name('eventos.create');
    Route::post('/', [EventoController::class, 'store'])->name('eventos.store');
    Route::get('/{id}/edit', [EventoController::class, 'edit'])->name('eventos.edit');
    Route::put('/{id}', [EventoController::class, 'update'])->name('eventos.update');
    Route::delete('/{id}', [EventoController::class, 'destroy'])->name('eventos.destroy');
    Route::get('/{id}', [EventoController::class, 'show'])->name('eventos.show');
});

/*
|--------------------------------------------------------------------------
| Autenticação (Guest)
|--------------------------------------------------------------------------
*/
Route::middleware('guest')->group(function () {
    // Registro
    Route::get('/register', [RegisteredUserController::class, 'create'])->name('register');
    Route::post('/register', [RegisteredUserController::class, 'store']);

    // Login
    Route::get('/login', [AuthenticatedSessionController::class, 'create'])->name('login');
    Route::post('/login', [AuthenticatedSessionController::class, 'store']);
});

/*
|--------------------------------------------------------------------------
| Logout + Rotas protegidas (Auth)
|--------------------------------------------------------------------------
*/
Route::middleware('auth')->group(function () {

    // Logout
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])->name('logout');

    // Chat
    Route::get('/apresentacao', [ChatController::class, 'apresentacao'])->name('chat.apresentacao');
    Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');   // Ler mensagens
    Route::post('/chat', [ChatController::class, 'store'])->name('chat.store');  // Gravar nova mensagem
    Route::get('/apresentacao', [ChatController::class, 'apresentacao'])->name('chat.apresentacao');

    // Agendamento
    Route::post('/agendamento', [BookingController::class, 'store'])->name('booking.store');
});
