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
        $unattendedForms = Form::where('status', 'falta-atender')->count();

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

        return view('dashboard.index', compact('forms', 'totalForms', 'unattendedForms', 'sectorData', 'evolutionData'));
    }

    /**
     * Show a specific form.
     */
    public function show(Form $form)
    {
        return view('dashboard.show', compact('form'));
    }

    /**
     * Show the edit page for a form.
     */
    public function edit(Form $form)
    {
        return view('dashboard.edit', compact('form'));
    }

    /**
     * Update a form.
     */
    public function update(Request $request, Form $form)
    {
        $validator = \Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'company_size' => 'required|string|in:micro,pequena,media,grande',
            'sector' => 'required|string|in:servicos,comercio,industria,tecnologia,outro',
            'financial_pain' => 'nullable|array',
            'financial_pain.*' => 'string|in:falta-controle,falta-tempo,falta-previsibilidade,retrabalho-operacional,inadimplencia,desorganizacao,multas-juros',
            'financial_areas' => 'nullable|array',
            'financial_areas.*' => 'string|in:contas-pagar,contas-receber,conciliacao-bancaria,fluxo-caixa,previsao-financeira',
            'cashflow_predictability' => 'required|string|in:sim,parcial,nao',
            'urgency_level' => 'required|string|in:urgente,30-dias,avaliando',
            'status' => 'required|string|in:falta-atender,em-atendimento,atendido',
            'message' => 'nullable|string',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        $form->update($request->all());

        return redirect()->route('dashboard.forms.show', $form)
            ->with('success', 'Formulário atualizado com sucesso!');
    }

    /**
     * Delete a form.
     */
    public function destroy(Form $form)
    {
        $form->delete();

        return redirect()->route('dashboard')
            ->with('success', 'Formulário deletado com sucesso!');
    }
}

