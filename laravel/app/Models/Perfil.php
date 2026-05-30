<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids; // Importante para UUID
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Perfil extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'primeiro_nome',
        'sobrenome',
        'nome_usuario',
        'email',
        'password',
        'funcao',
        'provincia_id',
        'localizacao',
        'url_avatar',
        'bio',
        'telefone',
        'saldo_creditos',
        'esta_destacado',
        'destaque_expira_em',
        'avaliacao_media',
        'total_avaliacoes',
        'total_trabalhos_concluidos',
        'esta_ativo',
    ];

    // Ocultar a senha quando o perfil for convertido para JSON/Array
    protected $hidden = [
        'password',
    ];

    // Relacionamento: Perfil pertence a uma província
    public function provincia(): BelongsTo
    {
        return $this->belongsTo(Provincia::class);
    }

    /**
     * Gera um nome de usuário único baseado no nome e sobrenome.
     * Ex: "João Silva" -> "joao.silva" ou "joao.silva.482"
     */
    public static function generateUniqueUsername(string $firstName, string $lastName): string
    {
        // 1. Limpa o nome: remove acentos, espaços e coloca em minúsculas
        $baseUsername = Str::slug($firstName . ' ' . $lastName, '.');
        
        $username = $baseUsername;
        $counter = 1;

        // 2. Verifica se o username já existe no banco
        while (self::where('nome_usuario', $username)->exists()) {
            // Se existir, adiciona um número aleatório ou sequencial
            $username = $baseUsername . '.' . rand(100, 999);
            
            // Se mesmo com o número aleatório existir, incrementamos o counter
            // (estratégia de segurança para evitar loops infinitos)
            if ($counter > 10) {
                $username = $baseUsername . $counter;
            }
            $counter++;
        }

        return $username;
    }
}
