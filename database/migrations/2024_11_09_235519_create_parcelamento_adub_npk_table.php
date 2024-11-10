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
        Schema::create('parcelamento_adub_npk', function (Blueprint $table) {
            $table->id();
            $table->char('nutriente', 1);
            $table->tinyInteger('ciclo');
            $table->tinyInteger('porcentagem');
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
        Schema::dropIfExists('parcelamento_adub_npk');
    }
};
