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
        Schema::create('funcionarios', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('nome');
            $table->string('mae');
            $table->string('cpf');
            $table->string('rg');
            $table->string('email');
            $table->string('cep');
            $table->string('endereco');
            $table->string('n');
            $table->string('complemento');
            $table->string('cpts');
            $table->string('reservista');   
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('funcionarios');
    }
};
