<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the dashboard.
     */
    public function index()
    {
        $forms = Form::latest()->paginate(15);
        $totalForms = Form::count();
        $todayForms = Form::whereDate('created_at', today())->count();

        // Dados para gráfico de pizza (por setor)
        $sectorData = Form::selectRaw('sector, COUNT(*) as count')
            ->whereNotNull('sector')
            ->groupBy('sector')
            ->get()
            ->pluck('count', 'sector')
            ->toArray();

        // Dados para gráfico de evolução temporal (últimos 30 dias)
        $evolutionData = Form::selectRaw('DATE(created_at) as date, COUNT(*) as count')
            ->where('created_at', '>=', now()->subDays(30))
            ->groupBy('date')
            ->orderBy('date', 'asc')
            ->get()
            ->map(function ($item) {
                return [
                    'date' => \Carbon\Carbon::parse($item->date)->format('d/m'),
                    'count' => $item->count
                ];
            });

        return view('dashboard.index', compact('forms', 'totalForms', 'todayForms', 'sectorData', 'evolutionData'));
    }

    /**
     * Show a specific form.
     */
    public function show(Form $form)
    {
        return view('dashboard.show', compact('form'));
    }
}

