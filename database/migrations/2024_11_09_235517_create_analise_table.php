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
        Schema::create('analise', function (Blueprint $table) {
            $table->id();
            $table->date('data');
            $table->string('local', 45);
            $table->integer('profundidade');
            $table->decimal('pH', 3, 2);
            $table->decimal('fosforo', 5, 2);
            $table->decimal('potassio', 5, 2);
            $table->decimal('calcio', 5, 2);
            $table->decimal('magnesio', 5, 2);
            $table->decimal('aluminio', 5, 2);
            $table->decimal('soma_bases', 5, 2);
            $table->decimal('acidez_potencial', 5, 2);
            $table->decimal('mat_organica', 5, 2);
            $table->decimal('prem', 5, 2)->nullable();
            $table->decimal('teor_argila', 5, 2);
            $table->unsignedBigInteger('produtor_id');
            $table->unsignedBigInteger('user_id');
            $table->timestamps();

            $table->foreign('produtor_id')->references('id')->on('produtor')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('analise');
    }
};
