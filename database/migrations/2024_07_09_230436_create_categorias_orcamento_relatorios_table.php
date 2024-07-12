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
        Schema::create('categorias_orcamento_relatorios', function (Blueprint $table) {
            $table->id();
            $table->string('relatorio_id');
            $table->string('cor_nome');
            $table->float('cor_porc');
            $table->timestamps();
            $table->foreign('relatorio_id')->references('id')->on('relatorios');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categorias_orcamento_relatorios');
    }
};
