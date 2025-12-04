<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class FormResponse extends Model
{
    use HasFactory;

    protected $fillable = [
        'form_id',
        'field_name',
        'field_label',
        'field_value',
        'field_type',
        'order',
    ];

    /**
     * Relacionamento com Form
     */
    public function form(): BelongsTo
    {
        return $this->belongsTo(Form::class);
    }
}
