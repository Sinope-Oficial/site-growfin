<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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
        // Usar submitted_at se disponível, senão usar created_at
        $evolutionData = Form::selectRaw('DATE(COALESCE(submitted_at, created_at)) as date, COUNT(*) as count')
            ->where(function($query) {
                $query->where('submitted_at', '>=', now()->subDays(30))
                      ->orWhere(function($q) {
                          $q->whereNull('submitted_at')
                            ->where('created_at', '>=', now()->subDays(30));
                      });
            })
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
        $form->load('responses'); // Carregar respostas detalhadas
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
     * Show password edit page.
     */
    public function editPassword()
    {
        return view('dashboard.password');
    }

    /**
     * Update password for authenticated user.
     */
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'confirmed', 'min:8'],
        ]);

        /** @var \App\Models\User $user */
        $user = Auth::user();

        if (!Hash::check($request->current_password, $user->password)) {
            return back()->with('error', 'A senha atual está incorreta.')->withInput();
        }

        $user->password = Hash::make($request->password);
        $user->save();

        return back()->with('success', 'Senha atualizada com sucesso!');
    }

    /**
     * Update a form.
     */
    public function update(Request $request, Form $form)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'lastname' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'company_size' => 'required|string|in:0_30,30_50,50_100,100_500,500_plus',
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

    /**
     * Export all forms as CSV.
     */
    public function exportCsv()
    {
        $forms = Form::orderByDesc('created_at')->get();

        $headers = [
            'Content-Type' => 'text/csv; charset=UTF-8',
            'Content-Disposition' => 'attachment; filename="formularios.csv"',
        ];

        $callback = function () use ($forms) {
            $output = fopen('php://output', 'w');
            // Cabeçalho
            fputcsv($output, [
                'ID',
                'Nome',
                'Sobrenome',
                'Email',
                'Telefone',
                'Tamanho Empresa',
                'Setor',
                'Status',
                'Urgência',
                'Previsibilidade Fluxo de Caixa',
                'Dores Financeiras',
                'Áreas Financeiras',
                'Observação',
                'Data/Hora Submissão',
                'Criado em',
            ], ';');

            foreach ($forms as $form) {
                $financialPain = is_array($form->financial_pain) ? implode(' | ', $form->financial_pain) : $form->financial_pain;
                $financialAreas = is_array($form->financial_areas) ? implode(' | ', $form->financial_areas) : $form->financial_areas;

                fputcsv($output, [
                    $form->id,
                    $form->name,
                    $form->lastname,
                    $form->email,
                    $form->phone,
                    $form->company_size,
                    $form->sector,
                    $form->status,
                    $form->urgency_level,
                    $form->cashflow_predictability,
                    $financialPain,
                    $financialAreas,
                    $form->message,
                    optional($form->submitted_at)->format('d/m/Y H:i:s') ?: optional($form->created_at)->format('d/m/Y H:i:s'),
                    optional($form->created_at)->format('d/m/Y H:i'),
                ], ';');
            }

            fclose($output);
        };

        return response()->stream($callback, 200, $headers);
    }

    /**
     * Export all forms as printable HTML (for PDF).
     */
    public function exportPdf()
    {
        $forms = Form::orderByDesc('created_at')->get();
        return view('dashboard.export_pdf', compact('forms'));
    }
}

