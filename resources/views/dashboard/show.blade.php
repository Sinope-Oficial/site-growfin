<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalhes do Formulário - GrowFin</title>
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
        .detail-card {
            background: white;
            border-radius: 15px;
            padding: 2.5rem;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
            margin-top: 2rem;
            border-top: 4px solid var(--accent-color);
        }
        .form-header-custom {
            border-bottom: 2px solid var(--accent-color);
            padding-bottom: 1rem;
            margin-bottom: 2rem;
        }
        .form-header-custom h2 {
            color: var(--heading-color);
            font-weight: 700;
            margin: 0;
        }
        .form-header-custom h2 i {
            color: var(--accent-color);
            margin-right: 0.5rem;
        }
        .form-group-custom {
            margin-bottom: 1.5rem;
        }
        .form-label-custom {
            font-weight: 600;
            color: var(--heading-color);
            margin-bottom: 0.5rem;
            font-size: 0.9rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }
        .form-control-custom {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #e9ecef;
            border-radius: 8px;
            font-size: 1rem;
            transition: all 0.3s ease;
            background-color: #f8f9fa;
            color: var(--default-color);
        }
        .form-control-custom:focus {
            outline: none;
            border-color: var(--accent-color);
            box-shadow: 0 0 0 3px rgba(242, 121, 32, 0.1);
            background-color: #fff;
        }
        .form-control-custom:disabled {
            background-color: #f8f9fa;
            cursor: not-allowed;
        }
        .badge-custom {
            padding: 8px 12px;
            border-radius: 6px;
            font-weight: 500;
            font-size: 0.875rem;
            display: inline-block;
            margin: 0.25rem;
        }
        .badge-orange {
            background-color: var(--accent-color);
            color: white;
        }
        .badge-info-custom {
            background-color: rgba(242, 121, 32, 0.1);
            color: var(--accent-color);
            border: 1px solid rgba(242, 121, 32, 0.3);
        }
        .badge-warning-custom {
            background-color: rgba(255, 193, 7, 0.15);
            color: #856404;
            border: 1px solid rgba(255, 193, 7, 0.3);
        }
        .badge-success-custom {
            background-color: rgba(25, 135, 84, 0.1);
            color: #0f5132;
            border: 1px solid rgba(25, 135, 84, 0.3);
        }
        .badge-danger-custom {
            background-color: rgba(220, 53, 69, 0.1);
            color: #842029;
            border: 1px solid rgba(220, 53, 69, 0.3);
        }
        .badge-secondary-custom {
            background-color: rgba(108, 117, 125, 0.1);
            color: #495057;
            border: 1px solid rgba(108, 117, 125, 0.3);
        }
        .btn-primary-custom {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
            color: white;
            padding: 10px 25px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        .btn-primary-custom:hover {
            background-color: #d66a1a;
            border-color: #d66a1a;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(242, 121, 32, 0.3);
            color: white;
        }
        .btn-secondary-custom {
            background-color: #6c757d;
            border-color: #6c757d;
            color: white;
            padding: 10px 25px;
            border-radius: 8px;
            font-weight: 600;
        }
        .btn-secondary-custom:hover {
            background-color: #5a6268;
            border-color: #5a6268;
            color: white;
        }
        .checkbox-list {
            display: flex;
            flex-wrap: wrap;
            gap: 0.5rem;
            margin-top: 0.5rem;
        }
        .checkbox-item {
            display: flex;
            align-items: center;
            padding: 8px 12px;
            background-color: #f8f9fa;
            border: 2px solid #e9ecef;
            border-radius: 6px;
        }
        .checkbox-item input[type="checkbox"] {
            margin-right: 8px;
            accent-color: var(--accent-color);
            width: 18px;
            height: 18px;
            cursor: pointer;
        }
        .checkbox-item input[type="checkbox"]:checked {
            accent-color: var(--accent-color);
            background-color: var(--accent-color);
            border-color: var(--accent-color);
        }
        .checkbox-item input[type="checkbox"]:checked::before {
            background-color: var(--accent-color);
        }
        .checkbox-item:has(input[type="checkbox"]:checked) {
            background-color: rgba(242, 121, 32, 0.1);
            border-color: var(--accent-color);
        }
        .checkbox-item label {
            margin: 0;
            cursor: pointer;
            font-size: 0.9rem;
        }
        .btn-whatsapp {
            background-color: #25D366 !important;
            border-color: #25D366 !important;
            color: white !important;
            padding: 10px 25px;
            border-radius: 8px;
            font-weight: 600;
            transition: all 0.3s ease;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 8px;
        }
        .btn-whatsapp:hover {
            background-color: #20BA5A !important;
            border-color: #20BA5A !important;
            color: white !important;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(37, 211, 102, 0.3);
        }
        .btn-whatsapp i {
            font-size: 1.2rem;
        }
        .status-highlight {
            background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
            border-radius: 12px;
            padding: 1.5rem;
            margin-bottom: 2rem;
            border-left: 5px solid;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        .status-highlight.status-falta-atender {
            border-left-color: #dc3545;
        }
        .status-highlight.status-em-atendimento {
            border-left-color: #F27920;
        }
        .status-highlight.status-atendido {
            border-left-color: #198754;
        }
        .status-badge-large {
            font-size: 1.1rem;
            padding: 8px 16px;
            border-radius: 6px;
            font-weight: 600;
            display: inline-block;
        }
        .status-label {
            font-size: 0.9rem;
            color: #6c757d;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }
        .action-buttons-top {
            margin-bottom: 2rem;
            padding-bottom: 1.5rem;
            border-bottom: 2px solid #e9ecef;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark">
        <div class="container-fluid d-flex justify-content-between align-items-center">
            <a class="navbar-brand" href="{{ route('dashboard') }}">
                <i class="bi bi-arrow-left"></i> Voltar
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
        <div class="detail-card">
            <div class="form-header-custom">
                <h2>
                    <i class="bi bi-person"></i> {{ $form->name }} {{ $form->lastname ?? '' }}
                </h2>
                <p class="text-muted mb-0 mt-2">
                    <small>Formulário #{{ $form->id }}</small>
                </p>
            </div>

            <!-- Status em Destaque -->
            @php
                $statusLabels = [
                    'falta-atender' => 'Falta Atender',
                    'em-atendimento' => 'Em Atendimento',
                    'atendido' => 'Atendido'
                ];
                $statusColors = [
                    'falta-atender' => '#dc3545',
                    'em-atendimento' => '#F27920',
                    'atendido' => '#198754'
                ];
                $currentStatus = $form->status ?? 'falta-atender';
            @endphp
            <div class="status-highlight status-{{ $currentStatus }}">
                <div class="status-label">Status do Atendimento</div>
                <span class="status-badge-large" style="background-color: {{ $statusColors[$currentStatus] ?? '#6c757d' }}; color: white;">
                    <i class="bi bi-{{ $currentStatus == 'atendido' ? 'check-circle' : ($currentStatus == 'em-atendimento' ? 'clock-history' : 'exclamation-triangle') }}"></i>
                    {{ $statusLabels[$currentStatus] ?? ucfirst($currentStatus) }}
                </span>
            </div>

            <!-- Botões de Ação no Topo -->
            <div class="action-buttons-top d-flex gap-2 flex-wrap">
                <a href="{{ route('dashboard') }}" class="btn btn-secondary-custom">
                    <i class="bi bi-arrow-left"></i> Voltar para Lista
                </a>
                <a href="mailto:{{ $form->email }}?subject=Contato%20GrowFin%20-%20Formulário%20#{{ $form->id }}" class="btn btn-primary-custom">
                    <i class="bi bi-envelope"></i> Enviar Email
                </a>
                @if($form->phone)
                @php
                    $phoneNumber = preg_replace('/\D/', '', $form->phone);
                    $whatsappMessage = urlencode("Olá! Entrei em contato através do formulário do site GrowFin (Formulário #{$form->id})");
                    $whatsappUrl = "https://wa.me/55{$phoneNumber}?text={$whatsappMessage}";
                @endphp
                <a href="{{ $whatsappUrl }}" target="_blank" class="btn btn-whatsapp">
                    <i class="bi bi-whatsapp"></i> WhatsApp
                </a>
                @endif
                <a href="{{ route('dashboard.forms.edit', $form) }}" class="btn btn-primary-custom">
                    <i class="bi bi-pencil"></i> Editar Formulário
                </a>
            </div>

            <form>

                <div class="row g-3">
                    <!-- Nome -->
                    <div class="col-md-6">
                        <div class="form-group-custom">
                            <label class="form-label-custom">Nome</label>
                            <input type="text" class="form-control-custom" value="{{ $form->name }}" disabled>
                        </div>
                    </div>
                    <!-- Sobrenome -->
                    <div class="col-md-6">
                        <div class="form-group-custom">
                            <label class="form-label-custom">Sobrenome</label>
                            <input type="text" class="form-control-custom" value="{{ $form->lastname ?? '' }}" disabled>
                        </div>
                    </div>
                    <!-- Email -->
                    <div class="col-md-6">
                        <div class="form-group-custom">
                            <label class="form-label-custom">Email</label>
                            <input type="email" class="form-control-custom" value="{{ $form->email }}" disabled>
                            <small class="text-muted mt-1 d-block">
                                <a href="mailto:{{ $form->email }}" style="color: var(--accent-color);">
                                    <i class="bi bi-envelope"></i> Enviar email
                                </a>
                            </small>
                        </div>
                    </div>
                    <!-- Telefone -->
                    <div class="col-md-6">
                        <div class="form-group-custom">
                            <label class="form-label-custom">Telefone</label>
                            @if($form->phone)
                                @php
                                    $phone = preg_replace('/\D/', '', $form->phone);
                                    if(strlen($phone) == 11) {
                                        $formatted = '(' . substr($phone, 0, 2) . ') ' . substr($phone, 2, 5) . '-' . substr($phone, 7);
                                    } elseif(strlen($phone) == 10) {
                                        $formatted = '(' . substr($phone, 0, 2) . ') ' . substr($phone, 2, 4) . '-' . substr($phone, 6);
                                    } else {
                                        $formatted = $form->phone;
                                    }
                                @endphp
                                <input type="tel" class="form-control-custom" value="{{ $formatted }}" disabled>
                                <small class="text-muted mt-1 d-block">
                                    <a href="tel:{{ $phone }}" style="color: var(--accent-color);">
                                        <i class="bi bi-telephone"></i> Ligar
                                    </a>
                                </small>
                            @else
                                <input type="tel" class="form-control-custom" value="" disabled>
                            @endif
                        </div>
                    </div>
                    <!-- Tamanho da Empresa -->
                    <div class="col-md-6">
                        <div class="form-group-custom">
                            <label class="form-label-custom">Tamanho da Empresa</label>
                            @php
                                $sizes = [
                                    'micro' => 'Micro',
                                    'pequena' => 'Pequena',
                                    'media' => 'Média',
                                    'grande' => 'Grande'
                                ];
                            @endphp
                            <input type="text" class="form-control-custom" value="{{ $sizes[$form->company_size] ?? ucfirst($form->company_size ?? 'Não informado') }}" disabled>
                        </div>
                    </div>
                    <!-- Setor de Atuação -->
                    <div class="col-md-6">
                        <div class="form-group-custom">
                            <label class="form-label-custom">Setor de Atuação</label>
                            @php
                                $sectors = [
                                    'servicos' => 'Serviços',
                                    'comercio' => 'Comércio',
                                    'industria' => 'Indústria',
                                    'tecnologia' => 'Tecnologia',
                                    'outro' => 'Outro'
                                ];
                            @endphp
                            <input type="text" class="form-control-custom" value="{{ $sectors[$form->sector] ?? ucfirst($form->sector ?? 'Não informado') }}" disabled>
                        </div>
                    </div>
                    <!-- Maior Dor no Financeiro -->
                    <div class="col-12">
                        <div class="form-group-custom">
                            <label class="form-label-custom">Maior Dor no Financeiro</label>
                            <div class="checkbox-list">
                                @php
                                    $pains = [
                                        'falta-controle' => 'Falta de controle',
                                        'falta-tempo' => 'Falta de tempo',
                                        'falta-previsibilidade' => 'Falta de previsibilidade',
                                        'retrabalho-operacional' => 'Retrabalho operacional',
                                        'inadimplencia' => 'Inadimplência',
                                        'desorganizacao' => 'Desorganização',
                                        'multas-juros' => 'Pagamento de multas e juros por atraso'
                                    ];
                                @endphp
                                @foreach($pains as $key => $label)
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="pain-{{ $key }}" 
                                               {{ ($form->financial_pain && in_array($key, $form->financial_pain)) ? 'checked' : '' }} 
                                               disabled>
                                        <label for="pain-{{ $key }}">{{ $label }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Áreas Financeiras que Precisa de Ajuda -->
                    <div class="col-12">
                        <div class="form-group-custom">
                            <label class="form-label-custom">Áreas Financeiras que Precisa de Ajuda</label>
                            <div class="checkbox-list">
                                @php
                                    $areas = [
                                        'contas-pagar' => 'Contas a pagar',
                                        'contas-receber' => 'Contas a receber',
                                        'conciliacao-bancaria' => 'Conciliação bancária',
                                        'fluxo-caixa' => 'Fluxo de caixa',
                                        'previsao-financeira' => 'Previsão financeira'
                                    ];
                                @endphp
                                @foreach($areas as $key => $label)
                                    <div class="checkbox-item">
                                        <input type="checkbox" id="area-{{ $key }}" 
                                               {{ ($form->financial_areas && in_array($key, $form->financial_areas)) ? 'checked' : '' }} 
                                               disabled>
                                        <label for="area-{{ $key }}">{{ $label }}</label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <!-- Previsibilidade de Fluxo de Caixa -->
                    <div class="col-md-6">
                        <div class="form-group-custom">
                            <label class="form-label-custom">Previsibilidade de Fluxo de Caixa (30 dias)</label>
                            @php
                                $predictability = [
                                    'sim' => 'Sim',
                                    'parcial' => 'Parcial',
                                    'nao' => 'Não'
                                ];
                            @endphp
                            <input type="text" class="form-control-custom" value="{{ $predictability[$form->cashflow_predictability] ?? ucfirst($form->cashflow_predictability ?? 'Não informado') }}" disabled>
                        </div>
                    </div>
                    <!-- Nível de Urgência -->
                    <div class="col-md-6">
                        <div class="form-group-custom">
                            <label class="form-label-custom">Nível de Urgência</label>
                            @php
                                $urgencyLabels = [
                                    'urgente' => 'Preciso resolver urgente',
                                    '30-dias' => 'Quero resolver nos próximos 30 dias',
                                    'avaliando' => 'Estou avaliando opções'
                                ];
                            @endphp
                            <input type="text" class="form-control-custom" value="{{ $urgencyLabels[$form->urgency_level] ?? ucfirst($form->urgency_level ?? 'Não informado') }}" disabled>
                        </div>
                    </div>
                    <!-- Observação -->
                    @if($form->message)
                    <div class="col-12">
                        <div class="form-group-custom">
                            <label class="form-label-custom">Observação</label>
                            <textarea class="form-control-custom" rows="4" disabled>{{ $form->message }}</textarea>
                        </div>
                    </div>
                    @endif
                    <!-- Data de Envio -->
                    <div class="col-12">
                        <div class="form-group-custom">
                            <label class="form-label-custom">Data de Envio</label>
                            <input type="text" class="form-control-custom" value="{{ $form->created_at->format('d/m/Y H:i:s') }}" disabled>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

