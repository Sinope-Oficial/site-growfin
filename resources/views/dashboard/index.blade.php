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
                            <i class="bi bi-calendar-day"></i>
                        </div>
                        <div>
                            <h3 class="mb-0">{{ $todayForms }}</h3>
                            <p class="text-muted mb-0">Hoje</p>
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
                            <th>ID</th>
                            <th>Nome e Sobrenome</th>
                            <th>Email</th>
                            <th>Telefone</th>
                            <th>Tamanho Empresa</th>
                            <th>Setor</th>
                            <th>Urgência</th>
                            <th>Data</th>
                            <th>Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($forms as $form)
                            <tr>
                                <td>{{ $form->id }}</td>
                                <td>{{ $form->name }} {{ $form->lastname ?? '' }}</td>
                                <td>{{ $form->email }}</td>
                                <td>{{ $form->phone ?? '-' }}</td>
                                <td>
                                    @if($form->company_size)
                                        <span class="badge bg-info">
                                            {{ ucfirst($form->company_size) }}
                                        </span>
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
                                    <a href="{{ route('dashboard.forms.show', $form) }}" 
                                       class="btn btn-sm btn-outline-primary">
                                        <i class="bi bi-eye"></i> Ver
                                    </a>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9" class="text-center text-muted py-4">
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
    </script>
</body>
</html>

