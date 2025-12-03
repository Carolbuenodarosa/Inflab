<div class="register-wrapper">
    <div class="register-card">
        <!-- Botão Voltar -->
        <a href="{{ route('eventos.index') }}" class="back-btn">← Voltar</a>

        <h2 class="form-title">Criar Conta</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Nome -->
            <div class="form-group">
                <label for="name" class="form-label">Nome</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus
                    autocomplete="name" class="form-input">
                @error('name')
                    <p class="form-error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Email -->
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required
                    autocomplete="username" class="form-input">
                @error('email')
                    <p class="form-error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Senha -->
            <div class="form-group">
                <label for="password" class="form-label">Senha</label>
                <input id="password" type="password" name="password" required autocomplete="new-password"
                    class="form-input">
                @error('password')
                    <p class="form-error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Confirmar Senha -->
            <div class="form-group">
                <label for="password_confirmation" class="form-label">Confirmar Senha</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required
                    autocomplete="new-password" class="form-input">
                @error('password_confirmation')
                    <p class="form-error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Ações -->
            <div class="form-actions">
                <a href="{{ route('login') }}" class="form-link">Já tem uma conta? Entrar</a>
                <button type="submit" class="form-button">Registrar</button>
            </div>
        </form>
    </div>
</div>

<style>
    /* ====== Layout geral ====== */
    body {
        background: linear-gradient(135deg, #007bff 0%, #00c6ff 100%);
        font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif;
        margin: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
    }

    .register-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        padding: 20px;
    }

    .register-card {
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        padding: 40px 35px;
        width: 100%;
        max-width: 420px;
        animation: fadeIn 0.6s ease;
    }

    .form-title {
        text-align: center;
        margin-bottom: 25px;
        font-size: 1.6rem;
        font-weight: bold;
        color: #333;
    }

    /* ====== Botão Voltar ====== */
    .back-btn {
        display: inline-block;
        margin-bottom: 15px;
        padding: 5px 10px;
        font-size: 13px;
        color: #007bff;
        background-color: #f1f1f1;
        border: 1px solid #ccc;
        border-radius: 6px;
        text-decoration: none;
        transition: all 0.2s ease;
    }

    .back-btn:hover {
        background-color: #e2e6ea;
        color: #0056b3;
        transform: translateY(-1px);
    }

    /* ====== Campos ====== */
    .form-group {
        margin-bottom: 18px;
    }

    .form-label {
        display: block;
        font-weight: 600;
        margin-bottom: 6px;
        color: #444;
        font-size: 14px;
    }

    .form-input {
        width: 100%;
        padding: 11px 12px;
        border: 1px solid #ccc;
        border-radius: 8px;
        font-size: 14px;
        transition: all 0.25s ease;
    }

    .form-input:focus {
        border-color: #007bff;
        box-shadow: 0 0 6px rgba(0, 123, 255, 0.25);
        outline: none;
    }

    .form-error {
        color: #e74c3c;
        font-size: 12px;
        margin-top: 5px;
    }

    /* ====== Ações ====== */
    .form-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 25px;
    }

    .form-link {
        font-size: 14px;
        color: #007bff;
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .form-link:hover {
        color: #0056b3;
    }

    .form-button {
        background-color: #007bff;
        color: #fff;
        padding: 10px 22px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        font-size: 15px;
        font-weight: 500;
        transition: background-color 0.25s ease;
    }

    .form-button:hover {
        background-color: #0056b3;
    }

    /* ====== Animação ====== */
    @keyframes fadeIn {
        from {
            opacity: 0;
            transform: translateY(15px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    /* ====== Responsivo ====== */
    @media (max-width: 480px) {
        .register-card {
            padding: 25px 20px;
        }

        .form-title {
            font-size: 1.4rem;
        }
    }
</style>
