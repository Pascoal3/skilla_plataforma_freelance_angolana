<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids; // Importante para UUID
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Provincia extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        'nome',
        'sigla',
    ];

    // Relacionamento: Uma província tem muitos perfis
    public function perfis(): HasMany
    {
        return $this->hasMany(Perfil::class);
    }
}
