
    <div class="register-container">
        <h2 class="form-title">Register</h2>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div class="form-group">
                <label for="name" class="form-label">{{ __('Name') }}</label>
                <input id="name" type="text" name="name" value="{{ old('name') }}" required autofocus autocomplete="name" class="form-input">
                @if ($errors->has('name'))
                    <p class="form-error">{{ $errors->first('name') }}</p>
                @endif
            </div>

            <!-- Email Address -->
            <div class="form-group">
                <label for="email" class="form-label">{{ __('Email') }}</label>
                <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="username" class="form-input">
                @if ($errors->has('email'))
                    <p class="form-error">{{ $errors->first('email') }}</p>
                @endif
            </div>

            <!-- Password -->
            <div class="form-group">
                <label for="password" class="form-label">{{ __('Password') }}</label>
                <input id="password" type="password" name="password" required autocomplete="new-password" class="form-input">
                @if ($errors->has('password'))
                    <p class="form-error">{{ $errors->first('password') }}</p>
                @endif
            </div>

            <!-- Confirm Password -->
            <div class="form-group">
                <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}</label>
                <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password" class="form-input">
                @if ($errors->has('password_confirmation'))
                    <p class="form-error">{{ $errors->first('password_confirmation') }}</p>
                @endif
            </div>

            <!-- Actions -->
            <div class="form-actions">
                <a href="{{ route('login') }}" class="form-link">{{ __('Already registered?') }}</a>
                <button type="submit" class="form-button">{{ __('Register') }}</button>
            </div>
        </form>
    </div>

    <style>
        /* Container */
        .register-container {
            max-width: 400px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fefefe;
            border-radius: 12px;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            font-family: Arial, sans-serif;
        }

        .form-title {
            text-align: center;
            margin-bottom: 20px;
            font-size: 22px;
            font-weight: bold;
            color: #333;
        }

        /* Form Groups */
        .form-group {
            margin-bottom: 18px;
        }

        .form-label {
            display: block;
            font-weight: 600;
            margin-bottom: 5px;
            color: #444;
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

        /* Actions */
        .form-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
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

