<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Formulário - GrowFin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        :root {
            --accent-color: #F27920;
            --heading-color: #102a49;
            --default-color: #333333;
        }
        body {
            background-color: #f8f9fa;
            font-family: 'Roboto', sans-serif;
        }
        .navbar {
            background: linear-gradient(135deg, var(--accent-color) 0%, #d66a1a 100%);
            box-shadow: 0 2px 10px rgba(242, 121, 32, 0.3);
        }
        .edit-card {
            background: white;
            border-radius: 15px;
            padding: 2rem;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            margin-top: 2rem;
            border-top: 4px solid var(--accent-color);
        }
        .edit-header {
            border-bottom: 2px solid #e9ecef;
            margin-bottom: 1.5rem;
            padding-bottom: 0.75rem;
        }
        .edit-header h2 {
            color: var(--heading-color);
            font-weight: 700;
            margin: 0;
        }
        .edit-header h2 i {
            color: var(--accent-color);
            margin-right: 0.5rem;
        }
        .form-label {
            font-weight: 600;
            color: var(--heading-color);
            font-size: 0.9rem;
        }
        .form-control, .form-select {
            border-radius: 8px;
        }
        .btn-primary-custom {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
            color: white;
            padding: 10px 25px;
            border-radius: 8px;
            font-weight: 600;
        }
        .btn-primary-custom:hover {
            background-color: #d66a1a;
            border-color: #d66a1a;
        }
        .btn-secondary-custom {
            background-color: #6c757d;
            border-color: #6c757d;
            color: white;
            padding: 10px 25px;
            border-radius: 8px;
            font-weight: 600;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="{{ route('dashboard') }}">
                <i class="bi bi-arrow-left"></i> Voltar
            </a>
            <div class="d-flex gap-2 align-items-center">
                <span class="navbar-text text-white me-2">
                    Editando formulário #{{ $form->id }}
                </span>
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

        <div class="edit-card">
            <div class="edit-header">
                <h2>
                    <i class="bi bi-pencil-square"></i> Editar Formulário - {{ $form->name }} {{ $form->lastname ?? '' }}
                </h2>
            </div>

            <form method="POST" action="{{ route('dashboard.forms.update', $form) }}">
                @csrf
                @method('PUT')

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Nome <span class="text-danger">*</span></label>
                        <input type="text" name="name" class="form-control" value="{{ old('name', $form->name) }}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Sobrenome <span class="text-danger">*</span></label>
                        <input type="text" name="lastname" class="form-control" value="{{ old('lastname', $form->lastname) }}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email <span class="text-danger">*</span></label>
                        <input type="email" name="email" class="form-control" value="{{ old('email', $form->email) }}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Telefone <span class="text-danger">*</span></label>
                        <input type="tel" name="phone" class="form-control" value="{{ old('phone', $form->phone) }}" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Tamanho da Empresa <span class="text-danger">*</span></label>
                        <select name="company_size" class="form-select" required>
                            <option value="">Selecione</option>
                            <option value="0_30" {{ old('company_size', $form->company_size) == '0_30' ? 'selected' : '' }}>R$ 00,00 a R$ 30 mil</option>
                            <option value="30_50" {{ old('company_size', $form->company_size) == '30_50' ? 'selected' : '' }}>R$ 30 mil a R$ 50 mil</option>
                            <option value="50_100" {{ old('company_size', $form->company_size) == '50_100' ? 'selected' : '' }}>R$ 50 mil a R$ 100 mil</option>
                            <option value="100_500" {{ old('company_size', $form->company_size) == '100_500' ? 'selected' : '' }}>R$ 100 mil a R$ 500 mil</option>
                            <option value="500_plus" {{ old('company_size', $form->company_size) == '500_plus' ? 'selected' : '' }}>Mais de R$ 500 mil</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Setor <span class="text-danger">*</span></label>
                        <select name="sector" class="form-select" required>
                            <option value="">Selecione</option>
                            <option value="servicos" {{ old('sector', $form->sector) == 'servicos' ? 'selected' : '' }}>Serviços</option>
                            <option value="comercio" {{ old('sector', $form->sector) == 'comercio' ? 'selected' : '' }}>Comércio</option>
                            <option value="industria" {{ old('sector', $form->sector) == 'industria' ? 'selected' : '' }}>Indústria</option>
                            <option value="tecnologia" {{ old('sector', $form->sector) == 'tecnologia' ? 'selected' : '' }}>Tecnologia</option>
                            <option value="outro" {{ old('sector', $form->sector) == 'outro' ? 'selected' : '' }}>Outro</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Previsibilidade de Fluxo de Caixa <span class="text-danger">*</span></label>
                        <select name="cashflow_predictability" class="form-select" required>
                            <option value="">Selecione</option>
                            <option value="sim" {{ old('cashflow_predictability', $form->cashflow_predictability) == 'sim' ? 'selected' : '' }}>Sim</option>
                            <option value="parcial" {{ old('cashflow_predictability', $form->cashflow_predictability) == 'parcial' ? 'selected' : '' }}>Parcial</option>
                            <option value="nao" {{ old('cashflow_predictability', $form->cashflow_predictability) == 'nao' ? 'selected' : '' }}>Não</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Nível de Urgência <span class="text-danger">*</span></label>
                        <select name="urgency_level" class="form-select" required>
                            <option value="">Selecione</option>
                            <option value="urgente" {{ old('urgency_level', $form->urgency_level) == 'urgente' ? 'selected' : '' }}>Preciso resolver urgente</option>
                            <option value="30-dias" {{ old('urgency_level', $form->urgency_level) == '30-dias' ? 'selected' : '' }}>Quero resolver nos próximos 30 dias</option>
                            <option value="avaliando" {{ old('urgency_level', $form->urgency_level) == 'avaliando' ? 'selected' : '' }}>Estou avaliando opções</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Status <span class="text-danger">*</span></label>
                        <select name="status" class="form-select" required>
                            <option value="">Selecione</option>
                            <option value="falta-atender" {{ old('status', $form->status) == 'falta-atender' ? 'selected' : '' }}>Falta Atender</option>
                            <option value="em-atendimento" {{ old('status', $form->status) == 'em-atendimento' ? 'selected' : '' }}>Em Atendimento</option>
                            <option value="atendido" {{ old('status', $form->status) == 'atendido' ? 'selected' : '' }}>Atendido</option>
                        </select>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Observação</label>
                        <textarea name="message" class="form-control" rows="3">{{ old('message', $form->message) }}</textarea>
                    </div>
                </div>

                <div class="mt-4 d-flex gap-2">
                    <button type="submit" class="btn btn-primary-custom">
                        <i class="bi bi-check-circle"></i> Salvar Alterações
                    </button>
                    <a href="{{ route('dashboard.forms.show', $form) }}" class="btn btn-secondary-custom">
                        Cancelar
                    </a>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


