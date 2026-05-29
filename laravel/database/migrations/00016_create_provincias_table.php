<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('provincias', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nome')->unique(); // Ex: Luanda, Benguela
            $table->string('sigla')->unique(); // Ex: LUE, BEN
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('provincias');
    }
};