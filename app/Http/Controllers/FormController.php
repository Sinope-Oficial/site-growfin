<?php

namespace App\Http\Controllers;

use App\Models\Form;
use App\Models\FormResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class FormController extends Controller
{
    /**
     * Mapeamento de campos do formulário com seus labels legíveis
     */
    private function getFieldLabels(): array
    {
        return [
            'name' => 'Nome',
            'lastname' => 'Sobrenome',
            'email' => 'E-mail',
            'phone' => 'Telefone',
            'company_size' => 'Tamanho da Empresa',
            'sector' => 'Setor de Atuação',
            'financial_pain' => 'Maior Dor no Financeiro',
            'financial_areas' => 'Áreas Financeiras que Precisa de Ajuda',
            'cashflow_predictability' => 'Previsibilidade de Fluxo de Caixa',
            'urgency_level' => 'Nível de Urgência',
        ];
    }

    /**
     * Mapeamento de valores para labels legíveis
     */
    private function getValueLabels(): array
    {
        return [
            'company_size' => [
                '0_30' => 'R$ 00,00 a R$ 30 mil',
                '30_50' => 'R$ 30 mil a R$ 50 mil',
                '50_100' => 'R$ 50 mil a R$ 100 mil',
                '100_500' => 'R$ 100 mil a R$ 500 mil',
                '500_plus' => 'Mais de R$ 500 mil',
            ],
            'sector' => [
                'servicos' => 'Serviços',
                'comercio' => 'Comércio',
                'industria' => 'Indústria',
                'tecnologia' => 'Tecnologia',
                'outro' => 'Outro',
            ],
            'financial_pain' => [
                'falta-controle' => 'Falta de controle',
                'falta-tempo' => 'Falta de tempo',
                'falta-previsibilidade' => 'Falta de previsibilidade',
                'retrabalho-operacional' => 'Retrabalho operacional',
                'inadimplencia' => 'Inadimplência',
                'desorganizacao' => 'Desorganização',
                'multas-juros' => 'Pagamento de multas e juros por atraso',
            ],
            'financial_areas' => [
                'contas-pagar' => 'Contas a pagar',
                'contas-receber' => 'Contas a receber',
                'conciliacao-bancaria' => 'Conciliação bancária',
                'fluxo-caixa' => 'Fluxo de caixa',
                'previsao-financeira' => 'Previsão financeira',
            ],
            'cashflow_predictability' => [
                'sim' => 'Sim',
                'parcial' => 'Parcial',
                'nao' => 'Não',
            ],
            'urgency_level' => [
                'urgente' => 'Preciso resolver urgente',
                '30-dias' => 'Quero resolver nos próximos 30 dias',
                'avaliando' => 'Estou avaliando opções',
            ],
        ];
    }

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
            'company_size' => 'required|string|in:0_30,30_50,50_100,100_500,500_plus',
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

        try {
            DB::beginTransaction();

            $data = $request->all();
            $data['status'] = 'falta-atender'; // Status padrão para novos formulários
            // Registrar data e hora de submissão no horário de Brasília
            $data['submitted_at'] = now('America/Sao_Paulo');
            
            $form = Form::create($data);

            // Salvar cada resposta individual na tabela form_responses
            $fieldLabels = $this->getFieldLabels();
            $valueLabels = $this->getValueLabels();
            $order = 1;

            foreach ($fieldLabels as $fieldName => $fieldLabel) {
                $value = $request->input($fieldName);
                
                if ($value !== null && $value !== '') {
                    // Tratar arrays (checkboxes)
                    if (is_array($value)) {
                        $valueArray = [];
                        foreach ($value as $item) {
                            $label = $valueLabels[$fieldName][$item] ?? $item;
                            $valueArray[] = $label;
                        }
                        $displayValue = implode(', ', $valueArray);
                    } else {
                        // Tratar valores simples
                        $displayValue = $valueLabels[$fieldName][$value] ?? $value;
                    }

                    FormResponse::create([
                        'form_id' => $form->id,
                        'field_name' => $fieldName,
                        'field_label' => $fieldLabel,
                        'field_value' => is_array($value) ? json_encode($value) : $value,
                        'field_type' => is_array($value) ? 'checkbox' : (in_array($fieldName, ['company_size', 'sector', 'cashflow_predictability', 'urgency_level']) ? 'select' : 'text'),
                        'order' => $order++,
                    ]);
                }
            }

            DB::commit();

            $this->enviarEmailNovoFormulario($form);

            return response()->json([
                'success' => true,
                'message' => 'Sua solicitação de orçamento foi enviada. Obrigado!',
                'data' => $form->load('responses')
            ], 201);

        } catch (\Exception $e) {
            DB::rollBack();
            
            return response()->json([
                'success' => false,
                'message' => 'Erro ao processar formulário. Tente novamente.',
                'error' => config('app.debug') ? $e->getMessage() : null
            ], 500);
        }
    }

    /**
     * Envia e-mail nativo (mail) notificando novo formulário.
     * Destinatário, Remetente, Assunto e Corpo configuráveis via .env
     */
    private function enviarEmailNovoFormulario(Form $form): void
    {
        $destinatario = env('MAIL_FORM_TO', 'leonardoafonso1048@gmail.com');
        $remetente = env('MAIL_FORM_FROM_NAME', 'GrowFin') . ' <' . env('MAIL_FORM_FROM', 'noreply@growfin.com') . '>';
        $assunto = env('MAIL_FORM_SUBJECT', 'GrowFin: Novo formulário recebido');

        $valorLabels = $this->getValueLabels();
        $campoLabels = $this->getFieldLabels();

        $linhas = ["Um novo formulário foi enviado no site GrowFin.\n"];
        $linhas[] = "Nome: {$form->name} {$form->lastname}";
        $linhas[] = "E-mail: {$form->email}";
        $linhas[] = "Telefone: {$form->phone}";
        $linhas[] = "Tamanho: " . ($valorLabels['company_size'][$form->company_size] ?? $form->company_size);
        $linhas[] = "Setor: " . ($valorLabels['sector'][$form->sector] ?? $form->sector);
        $linhas[] = "Previsibilidade fluxo: " . ($valorLabels['cashflow_predictability'][$form->cashflow_predictability] ?? $form->cashflow_predictability);
        $linhas[] = "Urgência: " . ($valorLabels['urgency_level'][$form->urgency_level] ?? $form->urgency_level);
        $linhas[] = "Data/hora: " . ($form->submitted_at?->format('d/m/Y H:i') ?? '-');

        $corpo = implode("\n", $linhas);

        $headers = [
            'MIME-Version: 1.0',
            'Content-type: text/plain; charset=UTF-8',
            'From: ' . $remetente,
            'Reply-To: ' . $form->email,
            'X-Mailer: PHP/' . phpversion(),
        ];

        try {
            $enviado = @mail($destinatario, $assunto, $corpo, implode("\r\n", $headers));
            if ($enviado) {
                Log::info('Email formulário enviado com sucesso', [
                    'destinatario' => $destinatario,
                    'form_id' => $form->id,
                    'cliente' => "{$form->name} {$form->lastname}",
                ]);
            } else {
                Log::error('Falha ao enviar email do formulário', [
                    'destinatario' => $destinatario,
                    'form_id' => $form->id,
                ]);
            }
        } catch (\Throwable $e) {
            Log::error('Erro ao enviar email do formulário: ' . $e->getMessage(), [
                'destinatario' => $destinatario,
                'form_id' => $form->id,
                'exception' => $e->getMessage(),
            ]);
        }
    }
}

