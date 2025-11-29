<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - GrowFin</title>
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
        h2 {
            color: var(--heading-color);
            font-weight: 700;
        }
        .stat-card {
            background: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 1.5rem;
            border-top: 3px solid var(--accent-color);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }
        .stat-card:hover {
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(242, 121, 32, 0.2);
        }
        .stat-card .icon {
            font-size: 2.5rem;
            color: var(--accent-color);
        }
        .stat-card h3 {
            color: var(--heading-color);
            font-weight: 700;
        }
        .table-card {
            background: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            border-top: 3px solid var(--accent-color);
        }
        .table thead {
            background-color: rgba(242, 121, 32, 0.1);
        }
        .table thead th {
            color: var(--heading-color);
            font-weight: 600;
            border-bottom: 2px solid var(--accent-color);
        }
        .table tbody tr:hover {
            background-color: rgba(242, 121, 32, 0.05);
        }
        .chart-card {
            background: white;
            border-radius: 10px;
            padding: 1.5rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            margin-bottom: 1.5rem;
            border-top: 3px solid var(--accent-color);
        }
        .chart-card h4 {
            margin-bottom: 1rem;
            color: var(--heading-color);
            font-size: 1.25rem;
            font-weight: 600;
        }
        .chart-card h4 i {
            color: var(--accent-color);
            margin-right: 0.5rem;
        }
        .chart-container {
            position: relative;
            height: 300px;
        }
        .badge.bg-info {
            background-color: rgba(242, 121, 32, 0.15) !important;
            color: var(--accent-color) !important;
            border: 1px solid rgba(242, 121, 32, 0.3);
        }
        .badge.bg-secondary {
            background-color: rgba(16, 42, 73, 0.15) !important;
            color: var(--heading-color) !important;
            border: 1px solid rgba(16, 42, 73, 0.3);
        }
        .btn-outline-primary {
            border-color: var(--accent-color);
            color: var(--accent-color);
        }
        .btn-outline-primary:hover {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
            color: white;
        }
        .page-link {
            color: var(--accent-color);
        }
        .page-link:hover {
            color: #d66a1a;
            background-color: rgba(242, 121, 32, 0.1);
        }
        .page-item.active .page-link {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
        }
        .modal-header {
            border-bottom: none;
        }
        .modal-footer {
            border-top: 1px solid #dee2e6;
        }
        .form-check-input:checked {
            background-color: var(--accent-color);
            border-color: var(--accent-color);
        }
        .form-check-input:focus {
            border-color: var(--accent-color);
            box-shadow: 0 0 0 0.25rem rgba(242, 121, 32, 0.25);
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/img/logo.jpeg') }}" alt="GrowFin" height="40" class="me-2">
                GrowFin - Dashboard
            </a>
            <form method="POST" action="{{ route('logout') }}" class="d-inline">
                @csrf
                <button type="submit" class="btn btn-outline-light">
                    <i class="bi bi-box-arrow-right"></i> Sair
                </button>
            </form>
        </div>
    </nav>

    <div class="container mt-4">
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <i class="bi bi-check-circle"></i> {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        @if(session('error'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <i class="bi bi-exclamation-circle"></i> {{ session('error') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            </div>
        @endif
        <h2 class="mb-4">Formulários Enviados</h2>

        <!-- Statistics Cards -->
        <div class="row mb-4">
            <div class="col-md-4">
                <div class="stat-card">
                    <div class="d-flex align-items-center">
                        <div class="icon me-3">
                            <i class="bi bi-file-earmark-text"></i>
                        </div>
                        <div>
                            <h3 class="mb-0">{{ $totalForms }}</h3>
                            <p class="text-muted mb-0">Total de Formulários</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-card">
                    <div class="d-flex align-items-center">
                        <div class="icon me-3">
                            <i class="bi bi-exclamation-circle"></i>
                        </div>
                        <div>
                            <h3 class="mb-0">{{ $unattendedForms }}</h3>
                            <p class="text-muted mb-0">Não Atendidos</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="stat-card">
                    <div class="d-flex align-items-center">
                        <div class="icon me-3">
                            <i class="bi bi-person-check"></i>
                        </div>
                        <div>
                            <h3 class="mb-0">{{ Auth::user()->name }}</h3>
                            <p class="text-muted mb-0">Usuário Logado</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Charts -->
        <div class="row mb-4">
            <div class="col-md-6">
                <div class="chart-card">
                    <h4><i class="bi bi-pie-chart"></i> Distribuição por Setor</h4>
                    <div class="chart-container">
                        <canvas id="sectorChart"></canvas>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="chart-card">
                    <h4><i class="bi bi-graph-up"></i> Evolução de Inscritos (Últimos 30 dias)</h4>
                    <div class="chart-container">
                        <canvas id="evolutionChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <!-- Forms Table -->
        <div class="table-card">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Setor</th>
                            <th>Status</th>
                            <th>Urgência</th>
                            <th>Data</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($forms as $form)
                            <tr>
                                <td>{{ $form->name }} {{ $form->lastname ?? '' }}</td>
                                <td>{{ $form->email }}</td>
                                <td>
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
                                        {{ $formatted }}
                                    @else
                                        -
                                    @endif
                                </td>
                                
                                <td>
                                    @if($form->sector)
                                        <span class="badge bg-secondary">
                                            {{ ucfirst($form->sector) }}
                                        </span>
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>
                                    @php
                                        $statusLabels = [
                                            'falta-atender' => 'Falta Atender',
                                            'em-atendimento' => 'Em Atendimento',
                                            'atendido' => 'Atendido'
                                        ];
                                        $statusColors = [
                                            'falta-atender' => ['bg' => '#dc3545', 'text' => 'white'],
                                            'em-atendimento' => ['bg' => '#F27920', 'text' => 'white'],
                                            'atendido' => ['bg' => '#198754', 'text' => 'white']
                                        ];
                                        $currentStatus = $form->status ?? 'falta-atender';
                                    @endphp
                                    <span class="badge" style="background-color: {{ $statusColors[$currentStatus]['bg'] ?? '#6c757d' }}; color: {{ $statusColors[$currentStatus]['text'] ?? 'white' }};">
                                        {{ $statusLabels[$currentStatus] ?? ucfirst($currentStatus) }}
                                    </span>
                                </td>
                                <td>
                                    @if($form->urgency_level)
                                        @php
                                            $urgencyLabels = [
                                                'urgente' => 'Urgente',
                                                '30-dias' => '30 dias',
                                                'avaliando' => 'Avaliando'
                                            ];
                                        @endphp
                                        @if($form->urgency_level == 'urgente')
                                            <span class="badge" style="background-color: #dc3545; color: white;">
                                                {{ $urgencyLabels[$form->urgency_level] ?? ucfirst($form->urgency_level) }}
                                            </span>
                                        @elseif($form->urgency_level == '30-dias')
                                            <span class="badge" style="background-color: rgba(242, 121, 32, 0.15); color: #F27920; border: 1px solid rgba(242, 121, 32, 0.3);">
                                                {{ $urgencyLabels[$form->urgency_level] ?? ucfirst($form->urgency_level) }}
                                            </span>
                                        @else
                                            <span class="badge" style="background-color: rgba(16, 42, 73, 0.15); color: #102a49; border: 1px solid rgba(16, 42, 73, 0.3);">
                                                {{ $urgencyLabels[$form->urgency_level] ?? ucfirst($form->urgency_level) }}
                                            </span>
                                        @endif
                                    @else
                                        -
                                    @endif
                                </td>
                                <td>{{ $form->created_at->format('d/m/Y H:i') }}</td>
                                <td>
                                    <div class="d-flex gap-2">
                                        <a href="{{ route('dashboard.forms.show', $form) }}" 
                                           class="btn btn-sm btn-outline-primary"
                                           title="Ver detalhes">
                                            <i class="bi bi-eye"></i>
                                        </a>
                                        <a href="{{ route('dashboard.forms.edit', $form) }}"
                                           class="btn btn-sm btn-outline-warning"
                                           title="Editar formulário">
                                            <i class="bi bi-pencil"></i>
                                        </a>
                                        <button type="button" 
                                                class="btn btn-sm btn-outline-danger" 
                                                title="Deletar formulário"
                                                data-bs-toggle="modal" 
                                                data-bs-target="#deleteFormModal"
                                                data-form-id="{{ $form->id }}"
                                                data-form-name="{{ $form->name }} {{ $form->lastname ?? '' }}">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8" class="text-center text-muted py-4">
                                    Nenhum formulário encontrado.
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            <div class="mt-3">
                {{ $forms->links() }}
            </div>
        </div>
    </div>

    <!-- Modal de Edição -->
    <div class="modal fade" id="editFormModal" tabindex="-1" aria-labelledby="editFormModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header" style="background: linear-gradient(135deg, var(--accent-color) 0%, #d66a1a 100%); color: white;">
                    <h5 class="modal-title" id="editFormModalLabel">
                        <i class="bi bi-pencil"></i> Editar Formulário
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form id="editFormForm" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-md-6">
                                <label class="form-label">Nome <span class="text-danger">*</span></label>
                                <input type="text" name="name" id="edit-name" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Sobrenome <span class="text-danger">*</span></label>
                                <input type="text" name="lastname" id="edit-lastname" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Email <span class="text-danger">*</span></label>
                                <input type="email" name="email" id="edit-email" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Telefone <span class="text-danger">*</span></label>
                                <input type="tel" name="phone" id="edit-phone" class="form-control" required>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Tamanho da Empresa <span class="text-danger">*</span></label>
                                <select name="company_size" id="edit-company_size" class="form-control" required>
                                    <option value="">Selecione</option>
                                    <option value="micro">Micro</option>
                                    <option value="pequena">Pequena</option>
                                    <option value="media">Média</option>
                                    <option value="grande">Grande</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Setor <span class="text-danger">*</span></label>
                                <select name="sector" id="edit-sector" class="form-control" required>
                                    <option value="">Selecione</option>
                                    <option value="servicos">Serviços</option>
                                    <option value="comercio">Comércio</option>
                                    <option value="industria">Indústria</option>
                                    <option value="tecnologia">Tecnologia</option>
                                    <option value="outro">Outro</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Maior Dor no Financeiro</label>
                                <div class="row g-2">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="financial_pain[]" value="falta-controle" id="edit-pain-controle">
                                            <label class="form-check-label" for="edit-pain-controle">Falta de controle</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="financial_pain[]" value="falta-tempo" id="edit-pain-tempo">
                                            <label class="form-check-label" for="edit-pain-tempo">Falta de tempo</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="financial_pain[]" value="falta-previsibilidade" id="edit-pain-previsibilidade">
                                            <label class="form-check-label" for="edit-pain-previsibilidade">Falta de previsibilidade</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="financial_pain[]" value="retrabalho-operacional" id="edit-pain-retrabalho">
                                            <label class="form-check-label" for="edit-pain-retrabalho">Retrabalho operacional</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="financial_pain[]" value="inadimplencia" id="edit-pain-inadimplencia">
                                            <label class="form-check-label" for="edit-pain-inadimplencia">Inadimplência</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="financial_pain[]" value="desorganizacao" id="edit-pain-desorganizacao">
                                            <label class="form-check-label" for="edit-pain-desorganizacao">Desorganização</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="financial_pain[]" value="multas-juros" id="edit-pain-multas">
                                            <label class="form-check-label" for="edit-pain-multas">Pagamento de multas e juros por atraso</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Áreas Financeiras que Precisa de Ajuda</label>
                                <div class="row g-2">
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="financial_areas[]" value="contas-pagar" id="edit-area-pagar">
                                            <label class="form-check-label" for="edit-area-pagar">Contas a pagar</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="financial_areas[]" value="contas-receber" id="edit-area-receber">
                                            <label class="form-check-label" for="edit-area-receber">Contas a receber</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="financial_areas[]" value="conciliacao-bancaria" id="edit-area-conciliacao">
                                            <label class="form-check-label" for="edit-area-conciliacao">Conciliação bancária</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="financial_areas[]" value="fluxo-caixa" id="edit-area-fluxo">
                                            <label class="form-check-label" for="edit-area-fluxo">Fluxo de caixa</label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="financial_areas[]" value="previsao-financeira" id="edit-area-previsao">
                                            <label class="form-check-label" for="edit-area-previsao">Previsão financeira</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Previsibilidade de Fluxo de Caixa <span class="text-danger">*</span></label>
                                <select name="cashflow_predictability" id="edit-cashflow" class="form-control" required>
                                    <option value="">Selecione</option>
                                    <option value="sim">Sim</option>
                                    <option value="parcial">Parcial</option>
                                    <option value="nao">Não</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Nível de Urgência <span class="text-danger">*</span></label>
                                <select name="urgency_level" id="edit-urgency" class="form-control" required>
                                    <option value="">Selecione</option>
                                    <option value="urgente">Preciso resolver urgente</option>
                                    <option value="30-dias">Quero resolver nos próximos 30 dias</option>
                                    <option value="avaliando">Estou avaliando opções</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label class="form-label">Status <span class="text-danger">*</span></label>
                                <select name="status" id="edit-status" class="form-control" required>
                                    <option value="">Selecione</option>
                                    <option value="falta-atender">Falta Atender</option>
                                    <option value="em-atendimento">Em Atendimento</option>
                                    <option value="atendido">Atendido</option>
                                </select>
                            </div>
                            <div class="col-12">
                                <label class="form-label">Observação</label>
                                <textarea name="message" id="edit-message" class="form-control" rows="3"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                        <button type="submit" class="btn" style="background-color: var(--accent-color); color: white;">
                            <i class="bi bi-check-circle"></i> Salvar Alterações
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal de Confirmação de Exclusão -->
    <div class="modal fade" id="deleteFormModal" tabindex="-1" aria-labelledby="deleteFormModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #dc3545; color: white;">
                    <h5 class="modal-title" id="deleteFormModalLabel">
                        <i class="bi bi-exclamation-triangle"></i> Confirmar Exclusão
                    </h5>
                    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Tem certeza que deseja deletar o formulário de <strong id="delete-form-name"></strong>?</p>
                    <p class="text-danger mb-0"><small>Esta ação não pode ser desfeita.</small></p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <form id="deleteFormForm" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">
                            <i class="bi bi-trash"></i> Deletar
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.0/dist/chart.umd.min.js"></script>
    <script>
        // Dados para os gráficos
        const sectorData = @json($sectorData);
        const evolutionData = @json($evolutionData);

        // Mapeamento de setores para nomes legíveis
        const sectorLabels = {
            'servicos': 'Serviços',
            'comercio': 'Comércio',
            'industria': 'Indústria',
            'tecnologia': 'Tecnologia',
            'outro': 'Outro'
        };

        // Cores para o gráfico de pizza - usando cores do site
        const pieColors = [
            '#F27920', // Laranja padrão do site
            '#102a49', // Azul escuro (heading color)
            '#d66a1a', // Laranja escuro
            '#e06a1a', // Laranja médio
            '#6c757d', // Cinza Bootstrap
            '#0dcaf0'  // Azul claro Bootstrap
        ];

        // Gráfico de Pizza - Distribuição por Setor
        const sectorCtx = document.getElementById('sectorChart');
        if (sectorCtx) {
            const sectorLabelsArray = Object.keys(sectorData).map(key => sectorLabels[key] || key);
            const sectorValuesArray = Object.values(sectorData);

            new Chart(sectorCtx, {
                type: 'pie',
                data: {
                    labels: sectorLabelsArray,
                    datasets: [{
                        data: sectorValuesArray,
                        backgroundColor: pieColors.slice(0, sectorLabelsArray.length),
                        borderWidth: 2,
                        borderColor: '#fff'
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            position: 'bottom',
                            labels: {
                                padding: 15,
                                font: {
                                    size: 12
                                }
                            }
                        },
                        tooltip: {
                            callbacks: {
                                label: function(context) {
                                    const label = context.label || '';
                                    const value = context.parsed || 0;
                                    const total = context.dataset.data.reduce((a, b) => a + b, 0);
                                    const percentage = ((value / total) * 100).toFixed(1);
                                    return label + ': ' + value + ' (' + percentage + '%)';
                                }
                            }
                        }
                    }
                }
            });
        }

        // Gráfico de Evolução Temporal
        const evolutionCtx = document.getElementById('evolutionChart');
        if (evolutionCtx) {
            const evolutionLabels = evolutionData.map(item => item.date);
            const evolutionValues = evolutionData.map(item => item.count);

            new Chart(evolutionCtx, {
                type: 'line',
                data: {
                    labels: evolutionLabels,
                    datasets: [{
                        label: 'Inscritos',
                        data: evolutionValues,
                        borderColor: '#F27920',
                        backgroundColor: 'rgba(242, 121, 32, 0.1)',
                        borderWidth: 3,
                        fill: true,
                        tension: 0.4,
                        pointRadius: 5,
                        pointHoverRadius: 7,
                        pointBackgroundColor: '#F27920',
                        pointBorderColor: '#fff',
                        pointBorderWidth: 2
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    plugins: {
                        legend: {
                            display: true,
                            position: 'top',
                            labels: {
                                font: {
                                    size: 12
                                }
                            }
                        },
                        tooltip: {
                            mode: 'index',
                            intersect: false,
                            callbacks: {
                                label: function(context) {
                                    return 'Inscritos: ' + context.parsed.y;
                                }
                            }
                        }
                    },
                    scales: {
                        y: {
                            beginAtZero: true,
                            ticks: {
                                stepSize: 1,
                                precision: 0
                            },
                            grid: {
                                color: 'rgba(0,0,0,0.05)'
                            }
                        },
                        x: {
                            grid: {
                                display: false
                            }
                        }
                    }
                }
            });
        }

        // Modal de Edição - Preencher dados quando abrir
        const editFormModal = document.getElementById('editFormModal');
        if (editFormModal) {
            editFormModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const formId = button.getAttribute('data-form-id');
                const form = document.getElementById('editFormForm');
                
                // Atualizar action do form
                form.action = `/dashboard/forms/${formId}`;
                
                // Preencher campos
                document.getElementById('edit-name').value = button.getAttribute('data-form-name') || '';
                document.getElementById('edit-lastname').value = button.getAttribute('data-form-lastname') || '';
                document.getElementById('edit-email').value = button.getAttribute('data-form-email') || '';
                document.getElementById('edit-phone').value = button.getAttribute('data-form-phone') || '';
                document.getElementById('edit-company_size').value = button.getAttribute('data-form-company-size') || '';
                document.getElementById('edit-sector').value = button.getAttribute('data-form-sector') || '';
                document.getElementById('edit-cashflow').value = button.getAttribute('data-form-cashflow') || '';
                document.getElementById('edit-urgency').value = button.getAttribute('data-form-urgency') || '';
                document.getElementById('edit-status').value = button.getAttribute('data-form-status') || 'falta-atender';
                document.getElementById('edit-message').value = button.getAttribute('data-form-observacao') || '';
                
                // Limpar checkboxes
                document.querySelectorAll('#editFormForm input[type="checkbox"]').forEach(cb => {
                    cb.checked = false;
                });
                
                // Preencher financial_pain
                try {
                    const financialPain = JSON.parse(button.getAttribute('data-form-financial-pain') || '[]');
                    financialPain.forEach(value => {
                        const checkbox = document.querySelector(`#editFormForm input[value="${value}"]`);
                        if (checkbox && checkbox.name === 'financial_pain[]') {
                            checkbox.checked = true;
                        }
                    });
                } catch (e) {
                    console.error('Erro ao parsear financial_pain:', e);
                }
                
                // Preencher financial_areas
                try {
                    const financialAreas = JSON.parse(button.getAttribute('data-form-financial-areas') || '[]');
                    financialAreas.forEach(value => {
                        const checkbox = document.querySelector(`#editFormForm input[value="${value}"]`);
                        if (checkbox && checkbox.name === 'financial_areas[]') {
                            checkbox.checked = true;
                        }
                    });
                } catch (e) {
                    console.error('Erro ao parsear financial_areas:', e);
                }
            });
        }

        // Modal de Exclusão - Preencher dados quando abrir
        const deleteFormModal = document.getElementById('deleteFormModal');
        if (deleteFormModal) {
            deleteFormModal.addEventListener('show.bs.modal', function (event) {
                const button = event.relatedTarget;
                const formId = button.getAttribute('data-form-id');
                const formName = button.getAttribute('data-form-name');
                const form = document.getElementById('deleteFormForm');
                
                // Atualizar action do form
                form.action = `/dashboard/forms/${formId}`;
                
                // Preencher nome do formulário
                document.getElementById('delete-form-name').textContent = formName || 'este formulário';
            });
        }
    </script>
</body>
</html>

