<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - GrowFin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --accent-color: #F27920;
            --heading-color: #102a49;
        }
        body {
            background-color: #f5f7fb;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: "Roboto", sans-serif;
        }
        .login-card {
            background: white;
            border-radius: 16px;
            box-shadow: 0 10px 30px rgba(16, 42, 73, 0.08);
            padding: 2.5rem;
            max-width: 420px;
            width: 100%;
        }
        .login-header {
            text-align: center;
            margin-bottom: 2rem;
        }
        .login-header img {
            max-height: 55px;
            margin-bottom: 1rem;
        }
        .login-header h2 {
            color: var(--heading-color);
            font-weight: 700;
            margin-bottom: 0.25rem;
        }
        .form-label {
            font-weight: 600;
            color: var(--heading-color);
            font-size: 0.9rem;
        }
        .input-group-text {
            background-color: rgba(242, 121, 32, 0.08);
            border-color: rgba(242, 121, 32, 0.25);
            color: var(--accent-color);
        }
        .form-control {
            border-radius: 10px;
            border-color: #e3e8ef;
            padding: 0.75rem;
        }
        .form-check-label {
            color: #6c757d;
        }
        .btn-primary {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
            padding: 0.85rem;
            font-weight: 600;
            border-radius: 10px;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }
        .btn-primary:hover {
            background-color: #d66a1a;
            border-color: #d66a1a;
            transform: translateY(-1px);
            box-shadow: 0 6px 18px rgba(242, 121, 32, 0.25);
        }
        .text-muted {
            color: #7c8aa0 !important;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="login-header">
            <img src="{{ asset('assets/img/logo.jpeg') }}" alt="GrowFin">
            <h2 class="mb-0">Painel de Controle</h2>
            <p class="text-muted">Faça login para continuar</p>
        </div>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="mb-0">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-envelope"></i></span>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" 
                           id="email" name="email" value="{{ old('email') }}" required autofocus>
                </div>
            </div>

            <div class="mb-3">
                <label for="password" class="form-label">Senha</label>
                <div class="input-group">
                    <span class="input-group-text"><i class="bi bi-lock"></i></span>
                    <input type="password" class="form-control @error('password') is-invalid @enderror" 
                           id="password" name="password" required>
                    <button type="button" class="btn btn-outline-secondary" id="toggle-login-password">
                        <i class="bi bi-eye"></i>
                    </button>
                </div>
            </div>


            <button type="submit" class="btn btn-primary w-100">
                <i class="bi bi-box-arrow-in-right"></i> Entrar
            </button>
        </form>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const btn = document.getElementById('toggle-login-password');
            const input = document.getElementById('password');
            if (!btn || !input) return;
            btn.addEventListener('click', function () {
                const isPassword = input.type === 'password';
                input.type = isPassword ? 'text' : 'password';
                const icon = btn.querySelector('i');
                if (icon) {
                    icon.classList.toggle('bi-eye');
                    icon.classList.toggle('bi-eye-slash');
                }
            });
        });
    </script>
</body>
</html>

