<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN | LOS POLLOS HERMANOS</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600;800&display=swap" rel="stylesheet">
    
    <style>
        :root {
            --porsche-red: #d5001c;
            --porsche-black: #000000;
            --porsche-grey: #f2f2f2;
            --text-main: #191919;
        }

        body {
            background-color: #ffffff;
            background-image: radial-gradient(circle at center, #ffffff 0%, #f0f0f0 100%);
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            color: var(--text-main);
        }

        .login-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
        }

        .login-card {
            background: #fff;
            width: 100%;
            max-width: 400px;
            padding: 50px 40px;
            border: 1px solid #e5e5e5;
            box-shadow: 0 40px 60px rgba(0,0,0,0.05);
            border-radius: 4px; /* Sesuai gaya boxy Porsche */
        }

        .login-brand {
            text-align: center;
            font-size: 1.2rem;
            font-weight: 800;
            letter-spacing: 3px;
            color: var(--porsche-black);
            margin-bottom: 8px;
            text-transform: uppercase;
        }

        .login-subtitle {
            text-align: center;
            font-size: 11px;
            font-weight: 600;
            letter-spacing: 1.5px;
            color: #888;
            margin-bottom: 40px;
            text-transform: uppercase;
        }

        .form-group {
            margin-bottom: 25px;
        }

        label {
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 1px;
            color: var(--porsche-black);
            display: block;
            text-transform: uppercase;
            margin-bottom: 8px;
        }

        input[type="email"],
        input[type="password"] {
            width: 100%;
            padding: 12px 0;
            border: none;
            border-bottom: 1px solid #ccc;
            border-radius: 0;
            font-size: 14px;
            font-family: 'Inter', sans-serif;
            transition: 0.3s;
            box-sizing: border-box;
            background: transparent;
        }

        input:focus {
            outline: none;
            border-bottom-color: var(--porsche-red);
        }

        .remember-row {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-top: 20px;
        }

        .remember-row label {
            font-size: 10px;
            color: #666;
            margin-bottom: 0;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .login-btn {
            width: 100%;
            margin-top: 40px;
            background: var(--porsche-black);
            color: #fff;
            border: none;
            padding: 15px;
            font-size: 11px;
            font-weight: 700;
            letter-spacing: 2px;
            text-transform: uppercase;
            border-radius: 2px;
            transition: 0.3s;
            cursor: pointer;
        }

        .login-btn:hover {
            background: var(--porsche-red);
        }

        .forgot-link {
            font-size: 10px;
            font-weight: 700;
            color: #888;
            text-decoration: none;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .forgot-link:hover {
            color: var(--porsche-red);
        }

        .error-text {
            font-size: 10px;
            color: var(--porsche-red);
            font-weight: 600;
            margin-top: 5px;
            text-transform: uppercase;
        }

        .status-alert {
            background: var(--porsche-grey);
            color: var(--porsche-black);
            padding: 12px;
            font-size: 11px;
            font-weight: 600;
            text-transform: uppercase;
            margin-bottom: 20px;
            text-align: center;
            border-left: 3px solid var(--porsche-red);
        }
    </style>
</head>
<body>

    <div class="login-wrapper">
        <div class="login-card">

            <div class="login-brand">LOS POLLOS HERMANOS</div>
            <div class="login-subtitle">Heritage & Performance</div>

            @if (session('status'))
                <div class="status-alert">
                    {{ session('status') }}
                </div>
            @endif

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input
                        id="email"
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        placeholder="NAME@DOMAIN.COM"
                        required
                        autofocus
                    >
                    @error('email')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="password">Password</label>
                    <input
                        id="password"
                        type="password"
                        name="password"
                        placeholder="••••••••"
                        required
                    >
                    @error('password')
                        <div class="error-text">{{ $message }}</div>
                    @enderror
                </div>

                <div class="remember-row">
                    <label>
                        <input type="checkbox" name="remember">
                        <span>Keep me signed in</span>
                    </label>

                    @if (Route::has('password.request'))
                        <a class="forgot-link" href="{{ route('password.request') }}">
                            Forgot Password?
                        </a>
                    @endif
                </div>

                <button type="submit" class="login-btn">
                    Sign In
                </button>
            </form>

            <div style="text-align: center; margin-top: 30px;">
                <a href="{{ route('register') }}" class="forgot-link" style="color: var(--porsche-black);">
                    Create Account
                </a>
            </div>

        </div>
    </div>

</body>
</html>