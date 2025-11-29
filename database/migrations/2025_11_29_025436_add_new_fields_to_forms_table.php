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
        Schema::table('forms', function (Blueprint $table) {
            $table->string('lastname')->nullable()->after('name');
            $table->string('company_size')->nullable()->after('phone');
            $table->string('sector')->nullable()->after('company_size');
            $table->json('financial_pain')->nullable()->after('sector');
            $table->json('financial_areas')->nullable()->after('financial_pain');
            $table->string('cashflow_predictability')->nullable()->after('financial_areas');
            $table->string('urgency_level')->nullable()->after('cashflow_predictability');
            // Campos antigos que podem não ser mais usados
            $table->string('type')->nullable()->change();
            $table->text('message')->nullable()->change();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('forms', function (Blueprint $table) {
            $table->dropColumn([
                'lastname',
                'company_size',
                'sector',
                'financial_pain',
                'financial_areas',
                'cashflow_predictability',
                'urgency_level'
            ]);
        });
    }
};
