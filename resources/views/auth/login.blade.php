
    <div class="login-container">
        <!-- Session Status -->
        @if (session('status'))
            <p class="login-status">{{ session('status') }}</p>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <!-- Email Address -->
            <div class="form-group">
                <label for="email" class="form-label">{{ __('Email') }}</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="username" class="form-input">
                @if ($errors->has('email'))
                    <p class="form-error">{{ $errors->first('email') }}</p>
                @endif
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" required autocomplete="current-password" class="form-input">
                @if ($errors->has('password'))
                    <p class="form-error">{{ $errors->first('password') }}</p>
                @endif
            </div>

            <!-- Remember Me -->
            <div class="form-remember">
                <label for="remember_me" class="remember-label">
                    <input id="remember_me" type="checkbox" name="remember" class="remember-checkbox">
                    <span class="remember-text">{{ __('Remember me') }}</span>
                </label>
            </div>

            <!-- Actions -->
            <div class="form-actions">
                @if (Route::has('password.request'))
                    <a href="{{ route('password.request') }}" class="form-link">{{ __('Forgot your password?') }}</a>
                @endif
                <button type="submit" class="form-button">{{ __('Log in') }}</button>
            </div>
        </form>
    </div>

    <style>
        /* Container */
        .login-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0,0,0,0.1);
            font-family: Arial, sans-serif;
        }

        /* Session status */
        .login-status {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            padding: 10px;
            border-radius: 6px;
            margin-bottom: 15px;
            font-size: 13px;
        }

        /* Form groups */
        .form-group {
            margin-bottom: 18px;
        }

        .form-label {
            display: block;
            font-weight: 600;
            margin-bottom: 5px;
            color: #333;
        }

        .form-input {
            width: 100%;
            padding: 10px 12px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
            transition: border-color 0.2s, box-shadow 0.2s;
        }

        .form-input:focus {
            border-color: #007bff;
            outline: none;
            box-shadow: 0 0 5px rgba(0,123,255,0.3);
        }

        .form-error {
            color: #e74c3c;
            font-size: 12px;
            margin-top: 5px;
        }

        /* Remember me */
        .form-remember {
            margin-bottom: 20px;
        }

        .remember-label {
            display: flex;
            align-items: center;
            cursor: pointer;
        }

        .remember-checkbox {
            margin-right: 8px;
        }

        .remember-text {
            font-size: 14px;
            color: #555;
        }

        /* Actions */
        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .form-link {
            font-size: 13px;
            color: #007bff;
            text-decoration: underline;
        }

        .form-link:hover {
            color: #0056b3;
        }

        .form-button {
            background-color: #007bff;
            color: #fff;
            padding: 10px 18px;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-size: 14px;
            transition: background-color 0.2s;
        }

        .form-button:hover {
            background-color: #0056b3;
        }
    </style>

