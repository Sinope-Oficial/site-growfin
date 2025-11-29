<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Formulário - GrowFin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .navbar {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
        }
        .detail-card {
            background: white;
            border-radius: 10px;
            padding: 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-top: 2rem;
        }
        .detail-item {
            padding: 1rem 0;
            border-bottom: 1px solid #e9ecef;
        }
        .detail-item:last-child {
            border-bottom: none;
        }
        .detail-label {
            font-weight: 600;
            color: #667eea;
            margin-bottom: 0.5rem;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('dashboard') }}">
                <i class="bi bi-arrow-left"></i> Voltar
            </a>
            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-outline-light">
                    <i class="bi bi-box-arrow-right"></i> Sair
                </button>
            </form>
        </div>
    </nav>

    <div class="container">
        <div class="detail-card">
            <h2 class="mb-4">
                <i class="bi bi-file-earmark-text"></i> Detalhes do Formulário #{{ $form->id }}
            </h2>

            <div class="detail-item">
                <div class="detail-label">Nome</div>
                <div>{{ $form->name }}</div>
            </div>

            <div class="detail-item">
                <div class="detail-label">Email</div>
                <div>
                    <a href="mailto:{{ $form->email }}">{{ $form->email }}</a>
                </div>
            </div>

            @if($form->phone)
            <div class="detail-item">
                <div class="detail-label">Telefone</div>
                <div>
                    <a href="tel:{{ $form->phone }}">{{ $form->phone }}</a>
                </div>
            </div>
            @endif

            @if($form->type)
            <div class="detail-item">
                <div class="detail-label">Tipo de Serviço</div>
                <div>
                    <span class="badge bg-primary">{{ $form->type }}</span>
                </div>
            </div>
            @endif

            <div class="detail-item">
                <div class="detail-label">Mensagem</div>
                <div class="mt-2 p-3 bg-light rounded">
                    {{ $form->message }}
                </div>
            </div>

            <div class="detail-item">
                <div class="detail-label">Data de Envio</div>
                <div>{{ $form->created_at->format('d/m/Y H:i:s') }}</div>
            </div>

            <div class="mt-4">
                <a href="{{ route('dashboard') }}" class="btn btn-secondary">
                    <i class="bi bi-arrow-left"></i> Voltar para Lista
                </a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

