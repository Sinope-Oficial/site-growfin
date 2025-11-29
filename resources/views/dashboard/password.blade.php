<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Senha - GrowFin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --accent-color: #F27920;
            --heading-color: #102a49;
        }
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background: linear-gradient(135deg, var(--accent-color) 0%, #d66a1a 100%);
        }
        .password-card {
            background: white;
            border-radius: 12px;
            padding: 2rem;
            box-shadow: 0 2px 12px rgba(0,0,0,0.08);
            margin-top: 2rem;
            border-top: 4px solid var(--accent-color);
        }
        .password-card h2 {
            color: var(--heading-color);
            font-weight: 700;
            margin-bottom: 1rem;
        }
        .password-card p {
            color: #6c757d;
        }
        .form-label {
            font-weight: 600;
            color: var(--heading-color);
            font-size: 0.9rem;
        }
        .form-control {
            border-radius: 8px;
        }
        .btn-primary-custom {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
            color: white;
            padding: 0.75rem 1.5rem;
            border-radius: 8px;
            font-weight: 600;
        }
        .btn-primary-custom:hover {
            background-color: #d66a1a;
            border-color: #d66a1a;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="{{ route('dashboard') }}">
                <i class="bi bi-arrow-left"></i> Voltar ao Dashboard
            </a>
            <div class="d-flex gap-2">
                <a href="{{ route('dashboard.password.edit') }}" class="btn btn-outline-light">
                    <i class="bi bi-shield-lock"></i> Alterar Senha
                </a>
                <form method="POST" action="{{ route('logout') }}" class="d-inline">
                    @csrf
                    <button type="submit" class="btn btn-outline-light">
                        <i class="bi bi-box-arrow-right"></i> Sair
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show mt-4" role="alert">
                <i class="bi bi-check-circle"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                <i class="bi bi-exclamation-circle"></i> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        @if($errors->any())
            <div class="alert alert-danger alert-dismissible fade show mt-4" role="alert">
                <i class="bi bi-exclamation-circle"></i> Por favor, corrija os erros abaixo.
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                <ul class="mb-0 mt-2">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="password-card">
            <h2><i class="bi bi-shield-lock"></i> Alterar Senha</h2>
            <p class="mb-4">Atualize sua senha de acesso ao painel de forma segura.</p>

            <form method="POST" action="{{ route('dashboard.password.update') }}">
                @csrf
                <div class="mb-3">
                    <label class="form-label">Senha atual</label>
                    <div class="input-group">
                        <input type="password" id="current_password" name="current_password" class="form-control @error('current_password') is-invalid @enderror" required>
                        <button type="button" class="btn btn-outline-secondary" id="toggle-current-password">
                            <i class="bi bi-eye"></i>
                        </button>
                        @error('current_password')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Nova senha</label>
                    <div class="input-group">
                        <input type="password" id="new_password" name="password" class="form-control @error('password') is-invalid @enderror" required>
                        <button type="button" class="btn btn-outline-secondary" id="toggle-new-password">
                            <i class="bi bi-eye"></i>
                        </button>
                        @error('password')
                            <div class="invalid-feedback d-block">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="mb-3">
                    <label class="form-label">Confirme a nova senha</label>
                    <div class="input-group">
                        <input type="password" id="password_confirmation" name="password_confirmation" class="form-control" required>
                        <button type="button" class="btn btn-outline-secondary" id="toggle-password-confirmation">
                            <i class="bi bi-eye"></i>
                        </button>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary-custom">
                    <i class="bi bi-arrow-repeat"></i> Salvar nova senha
                </button>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        function setupToggle(buttonId, inputId) {
            const btn = document.getElementById(buttonId);
            const input = document.getElementById(inputId);
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
        }

        document.addEventListener('DOMContentLoaded', function () {
            setupToggle('toggle-current-password', 'current_password');
            setupToggle('toggle-new-password', 'new_password');
            setupToggle('toggle-password-confirmation', 'password_confirmation');
        });
    </script>
</body>
</html>


