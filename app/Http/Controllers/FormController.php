<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FormController extends Controller
{
    /**
     * Store a newly created form submission.
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
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
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Por favor, preencha todos os campos obrigatórios.',
                'errors' => $validator->errors()
            ], 422);
        }

        $data = $request->all();
        $data['status'] = 'falta-atender'; // Status padrão para novos formulários
        $form = Form::create($data);

        return response()->json([
            'success' => true,
            'message' => 'Sua solicitação de orçamento foi enviada. Obrigado!',
            'data' => $form
        ], 201);
    }
}

