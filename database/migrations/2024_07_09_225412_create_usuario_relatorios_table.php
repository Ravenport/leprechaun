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
        Schema::create('usuario_relatorios', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('relatorio_id');
            $table->bigInteger('user_id');
            $table->string('ur_cod_relatorio');
            $table->timestamps();
            $table->foreign('relatorio_id')->references('id')->on('relatorios');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuario_relatorios');
    }
};
