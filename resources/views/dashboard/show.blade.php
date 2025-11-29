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
                <div class="detail-label">Nome e Sobrenome</div>
                <div>{{ $form->name }} {{ $form->lastname ?? '' }}</div>
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

            @if($form->company_size)
            <div class="detail-item">
                <div class="detail-label">Tamanho da Empresa</div>
                <div>
                    @php
                        $sizes = [
                            'micro' => 'Micro',
                            'pequena' => 'Pequena',
                            'media' => 'Média',
                            'grande' => 'Grande'
                        ];
                    @endphp
                    <span class="badge bg-info">{{ $sizes[$form->company_size] ?? ucfirst($form->company_size) }}</span>
                </div>
            </div>
            @endif

            @if($form->sector)
            <div class="detail-item">
                <div class="detail-label">Setor de Atuação</div>
                <div>
                    @php
                        $sectors = [
                            'servicos' => 'Serviços',
                            'comercio' => 'Comércio',
                            'industria' => 'Indústria',
                            'tecnologia' => 'Tecnologia',
                            'outro' => 'Outro'
                        ];
                    @endphp
                    <span class="badge bg-secondary">{{ $sectors[$form->sector] ?? ucfirst($form->sector) }}</span>
                </div>
            </div>
            @endif

            @if($form->financial_pain && count($form->financial_pain) > 0)
            <div class="detail-item">
                <div class="detail-label">Maior Dor no Financeiro</div>
                <div class="mt-2">
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
                    @foreach($form->financial_pain as $pain)
                        <span class="badge bg-warning text-dark me-1 mb-1">
                            {{ $pains[$pain] ?? $pain }}
                        </span>
                    @endforeach
                </div>
            </div>
            @endif

            @if($form->financial_areas && count($form->financial_areas) > 0)
            <div class="detail-item">
                <div class="detail-label">Áreas Financeiras que Precisa de Ajuda</div>
                <div class="mt-2">
                    @php
                        $areas = [
                            'contas-pagar' => 'Contas a pagar',
                            'contas-receber' => 'Contas a receber',
                            'conciliacao-bancaria' => 'Conciliação bancária',
                            'fluxo-caixa' => 'Fluxo de caixa',
                            'previsao-financeira' => 'Previsão financeira'
                        ];
                    @endphp
                    @foreach($form->financial_areas as $area)
                        <span class="badge bg-success me-1 mb-1">
                            {{ $areas[$area] ?? $area }}
                        </span>
                    @endforeach
                </div>
            </div>
            @endif

            @if($form->cashflow_predictability)
            <div class="detail-item">
                <div class="detail-label">Previsibilidade de Fluxo de Caixa (30 dias)</div>
                <div>
                    @php
                        $predictability = [
                            'sim' => 'Sim',
                            'parcial' => 'Parcial',
                            'nao' => 'Não'
                        ];
                    @endphp
                    <span class="badge bg-primary">{{ $predictability[$form->cashflow_predictability] ?? ucfirst($form->cashflow_predictability) }}</span>
                </div>
            </div>
            @endif

            @if($form->urgency_level)
            <div class="detail-item">
                <div class="detail-label">Nível de Urgência</div>
                <div>
                    @php
                        $urgencyLabels = [
                            'urgente' => 'Preciso resolver urgente',
                            '30-dias' => 'Quero resolver nos próximos 30 dias',
                            'avaliando' => 'Estou avaliando opções'
                        ];
                        $urgencyColors = [
                            'urgente' => 'danger',
                            '30-dias' => 'warning',
                            'avaliando' => 'secondary'
                        ];
                    @endphp
                    <span class="badge bg-{{ $urgencyColors[$form->urgency_level] ?? 'secondary' }}">
                        {{ $urgencyLabels[$form->urgency_level] ?? ucfirst($form->urgency_level) }}
                    </span>
                </div>
            </div>
            @endif

            @if($form->message)
            <div class="detail-item">
                <div class="detail-label">Mensagem</div>
                <div class="mt-2 p-3 bg-light rounded">
                    {{ $form->message }}
                </div>
            </div>
            @endif

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

