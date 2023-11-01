<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('enderecos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('bairro');
            $table->string('rua');
            $table->unsignedSmallInteger('numero');
            $table->text('complemento')->nullable();
            $table->unsignedSmallInteger('cep');
            $table->timestamps();
        });

        DB::statement('ALTER TABLE enderecos ADD CONSTRAINT numero_maior_ou_igual_a_zero CHECK (numero >= 0)');
        DB::statement('ALTER TABLE enderecos ADD CONSTRAINT cep_maior_ou_igual_a_zero CHECK (cep >= 0)');

//         @todo aqui tambem pode ser adicionada uma constraint que verifica o tamanho do cep
//        DB::statement('ALTER TABLE enderecos ADD CONSTRAINT tamanho_cep CHECK (LENGTH(CAST(cep as TEXT)) >= 7)'); // ou algo assim
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('enderecos');
    }
};
