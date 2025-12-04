<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'lastname',
        'email',
        'phone',
        'company_size',
        'sector',
        'financial_pain',
        'financial_areas',
        'cashflow_predictability',
        'urgency_level',
        'status',
        'type',
        'message',
        'submitted_at',
    ];

    protected $casts = [
        'financial_pain' => 'array',
        'financial_areas' => 'array',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
        'submitted_at' => 'datetime',
    ];

    /**
     * Relacionamento com FormResponse
     */
    public function responses()
    {
        return $this->hasMany(FormResponse::class)->orderBy('order');
    }
}

