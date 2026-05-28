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
        Schema::create('perfis', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('nome_completo');
            $table->string('nome_usuario')->unique();
            $table->string('email')->unique();
            $table->string('password_hash');
            $table->enum('funcao', ['cliente', 'freelancer', 'admin']);
            $table->text('url_avatar')->nullable();
            $table->text('bio')->nullable();
            $table->string('localizacao')->nullable();
            $table->string('telefone')->nullable();
            $table->integer('saldo_creditos')->default(10);
            $table->boolean('esta_destacado')->default(false);
            $table->timestamp('destaque_expira_em')->nullable();
            $table->float('avaliacao_media')->default(0);
            $table->integer('total_avaliacoes')->default(0);
            $table->integer('total_trabalhos_concluidos')->default(0);
            $table->boolean('esta_ativo')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perfis');
    }
};
