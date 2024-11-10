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
        Schema::create('cultura', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 20);
            $table->string('familia', 20);
            $table->tinyInteger('saturacao_al');
            $table->decimal('indice_x', 2, 1);
            $table->tinyInteger('saturacao_bases');
            $table->mediumText('producao_esperada');
            $table->mediumText('espacamento');
            $table->mediumText('calagem');
            $table->mediumText('adubacao_org');
            $table->string('observacoes', 45)->nullable();
            $table->mediumText('parcelamento_npk')->nullable();
            $table->mediumText('obs_quadro_npk')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cultura');
    }
};
