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
        Schema::create('igrejas', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->uuid('endereco_id');
            $table->string('apelido');
            $table->string('codigo');
            $table->timestamps();

            $table->foreign('endereco_id')->references('id')->on('enderecos');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('igrejas');
    }
};
