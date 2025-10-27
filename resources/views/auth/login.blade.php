<div class="login-wrapper">
    <div class="login-card">

        <!-- Botão Voltar -->
        <a href="{{ route('home') }}" class="back-btn">← Voltar</a>

        <h2 class="login-title">Acesso ao Sistema</h2>

        <!-- Mensagem de status -->
        @if (session('status'))
            <p class="login-status">{{ session('status') }}</p>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email -->
            <div class="form-group">
                <label for="email" class="form-label">Email</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus
                    autocomplete="username" class="form-input">
                @error('email')
                    <p class="form-error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Senha -->
            <div class="form-group">
                <label for="password" class="form-label">Senha</label>
                <input id="password" type="password" name="password" required autocomplete="current-password"
                    class="form-input">
                @error('password')
                    <p class="form-error">{{ $message }}</p>
                @enderror
            </div>

            <!-- Lembrar -->
            <div class="form-remember">
                <label for="remember_me" class="remember-label">
                    <input id="remember_me" type="checkbox" name="remember" class="remember-checkbox">
                    <span class="remember-text">Lembrar-me</span>
                </label>
            </div>

            <!-- Ações -->
            <div class="form-actions">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="form-link">Esqueceu sua senha?</a>
                @endif
                <button type="submit" class="form-button">Entrar</button>
            </div>
        </form>

        <div class="form-footer">
            <p>Não tem conta?
                <a href="{{ route('register') }}" class="form-register-link">Registre-se</a>
            </p>
        </div>
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

    .login-wrapper {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 100%;
        padding: 20px;
    }

    .login-card {
        background-color: #fff;
        border-radius: 12px;
        box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        padding: 40px 35px;
        width: 100%;
        max-width: 420px;
        animation: fadeIn 0.6s ease;
        position: relative;
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

    .login-title {
        text-align: center;
        margin-bottom: 25px;
        font-size: 1.6rem;
        color: #333;
    }

    /* ====== Status ====== */
    .login-status {
        background-color: #e8f5e9;
        color: #2e7d32;
        border: 1px solid #c8e6c9;
        padding: 10px;
        border-radius: 6px;
        margin-bottom: 15px;
        font-size: 14px;
        text-align: center;
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

    /* ====== Lembrar-me ====== */
    .form-remember {
        display: flex;
        align-items: center;
        margin-bottom: 20px;
    }

    .remember-label {
        display: flex;
        align-items: center;
        cursor: pointer;
        font-size: 14px;
        color: #555;
    }

    .remember-checkbox {
        margin-right: 8px;
    }

    /* ====== Ações ====== */
    .form-actions {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-top: 10px;
    }

    .form-link {
        font-size: 13px;
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
        padding: 10px 20px;
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

    /* ====== Rodapé ====== */
    .form-footer {
        text-align: center;
        margin-top: 25px;
        font-size: 14px;
        color: #555;
    }

    .form-register-link {
        color: #007bff;
        font-weight: 600;
        text-decoration: none;
        transition: color 0.2s ease;
    }

    .form-register-link:hover {
        color: #0056b3;
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
        .login-card {
            padding: 25px 20px;
        }

        .login-title {
            font-size: 1.4rem;
        }
    }
</style>
