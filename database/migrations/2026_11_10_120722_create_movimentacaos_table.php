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
        Schema::create('movimentacaos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('produto_id')->references('id')->on('produtos');
            $table->string('tipo');
            $table->unsignedBigInteger('fornecedor_id')->references('id')->on('fornecedores');
            $table->integer('quantidade');
            $table->decimal('valor_unitario',10,2);
            $table->date('data');
            $table->unsignedBigInteger('funcionario_id')->references('id')->on('funcionarios');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movimentacaos');
    }
};
