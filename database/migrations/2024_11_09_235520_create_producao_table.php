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
        Schema::create('producao', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('cultura_id');
            $table->date('data');
            $table->float('area_plantada');
            $table->enum('unidade_area', ['m²', 'ha']);
            $table->float('producao');
            $table->enum('unidade', ['kg', 'dz', 'un', 'saco']);
            $table->decimal('preco_venda', 5, 2);
            $table->float('qtd_vendida');
            $table->float('qtd_adubo_organico');
            $table->decimal('preco_adubo_organico', 5, 2);
            $table->decimal('gastos_npk', 5, 2);
            $table->float('qtd_calcario');
            $table->decimal('preco_calcario', 5, 2);
            $table->unsignedBigInteger('produtor_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('cultura_id')->references('id')->on('cultura')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('produtor_id')->references('id')->on('produtor')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('producao');
    }
};
