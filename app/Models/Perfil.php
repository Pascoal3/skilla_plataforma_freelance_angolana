<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable; // ← MUDOU
use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Str;

class Perfil extends Authenticatable // ← MUDOU (era Model)
{
    use HasFactory, HasUuids;

    protected $table = 'perfis'; // ← ADICIONADO (sem isto usa "perfils")

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

    protected $hidden = [
        'password',
        'remember_token', // ← ADICIONADO
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
        'esta_destacado' => 'boolean',
        'esta_ativo' => 'boolean',
    ];

    public function provincia(): BelongsTo
    {
        return $this->belongsTo(Provincia::class);
    }

    public static function generateUniqueUsername(string $firstName, string $lastName): string
    {
        $baseUsername = Str::slug($firstName . ' ' . $lastName, '.');
        $username = $baseUsername;
        $counter = 1;

        while (self::where('nome_usuario', $username)->exists()) {
            $username = $baseUsername . '.' . rand(100, 999);
            if ($counter > 10) {
                $username = $baseUsername . $counter;
            }
            $counter++;
        }

        return $username;
    }
}