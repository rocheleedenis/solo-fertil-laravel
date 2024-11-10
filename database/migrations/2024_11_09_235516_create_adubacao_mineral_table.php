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
        Schema::create('adubacao_mineral', function (Blueprint $table) {
            $table->id();
            $table->tinyInteger('disponibilidade_nutriente');
            $table->string('p2o5_solo_argiloso')->nullable();
            $table->string('p2o5_solo_medio');
            $table->string('p2o5_solo_arenoso')->nullable();
            $table->string('k2o');
            $table->string('nitrogenio');
            $table->unsignedBigInteger('cultura_id');
            $table->timestamps();

            $table->foreign('cultura_id')->references('id')->on('cultura')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('adubacao_mineral');
    }
};
