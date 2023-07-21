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
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
//            $table->uuid('common_congregation_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone_number')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();

//            $table->foreign('common_congregation_id')->references('id')->on('common_congregations');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
