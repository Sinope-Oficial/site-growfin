<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('form_responses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('form_id')->constrained('forms')->onDelete('cascade');
            $table->string('field_name'); // Nome do campo (ex: 'name', 'email', 'financial_pain', etc.)
            $table->string('field_label')->nullable(); // Label legível do campo
            $table->text('field_value')->nullable(); // Valor da resposta
            $table->string('field_type')->nullable(); // Tipo do campo (text, select, checkbox, etc.)
            $table->integer('order')->default(0); // Ordem de exibição
            $table->timestamps();
            
            $table->index('form_id');
            $table->index('field_name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('form_responses');
    }
};
