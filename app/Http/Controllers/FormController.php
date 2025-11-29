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
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'type' => 'nullable|string|max:255',
            'message' => 'required|string',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'success' => false,
                'message' => 'Por favor, preencha todos os campos obrigatórios.',
                'errors' => $validator->errors()
            ], 422);
        }

        $form = Form::create($request->all());

        return response()->json([
            'success' => true,
            'message' => 'Sua solicitação de orçamento foi enviada. Obrigado!',
            'data' => $form
        ], 201);
    }
}

