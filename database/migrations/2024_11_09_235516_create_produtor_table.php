<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produtor', function (Blueprint $table) {
            $table->id();
            $table->string('nome', 45);
            $table->string('fazenda', 45);
            $table->string('logradouro', 45);
            $table->string('bairro', 45);
            $table->enum('area', ['Urbana', 'Rural']);
            $table->string('cidade', 45);
            $table->string('telefone', 10)->nullable();
            $table->string('celular', 11)->nullable();
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtor');
    }
};