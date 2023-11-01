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
        Schema::create('produtos', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('codigo')->unique();
            $table->text('descricao');
            $table->unsignedSmallInteger('quantidade');
            $table->string('tipo');
            $table->unsignedInteger('valor');
            $table->timestamps();
        });

        DB::statement('ALTER TABLE produtos ADD CONSTRAINT quantidade_maior_ou_igual_a_zero CHECK (quantidade >= 0)');
        DB::statement('ALTER TABLE produtos ADD CONSTRAINT valor_maior_ou_igual_a_zero CHECK (valor >= 0)');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produtos');
    }
};
