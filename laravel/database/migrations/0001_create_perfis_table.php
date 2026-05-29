<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('perfis', function (Blueprint $table) {
            // Primary Key UUID
            $table->uuid('id')->primary(); 
            
            // Separação de nomes para melhor filtragem e exibição
            $table->string('primeiro_nome');
            $table->string('sobrenome');
            
            $table->string('nome_usuario')->unique();
            $table->string('email')->unique();
            $table->string('password_hash'); 
            $table->string('funcao'); // cliente | freelancer | admin
            
            // Localização vinculada à tabela de províncias
            // foreignUuid cria a coluna uuid e constrained cria a relação de chave estrangeira
            $table->foreignUuid('provincia_id')
                  ->nullable() 
                  ->constrained('provincias')
                  ->onDelete('set null'); // Se uma província for deletada, o perfil não é deletado

            $table->text('localizacao')->nullable(); // Para Bairro, Rua, etc.
            
            $table->text('url_avatar')->nullable();
            $table->text('bio')->nullable();
            
            $table->string('telefone')->nullable();
            
            // Métricas e Status
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


    public function down(): void
    {
        Schema::dropIfExists('perfis');
    }
};

