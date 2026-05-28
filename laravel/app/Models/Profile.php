<?php

namespace App\Models;
use App\Traits\HasUuid;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model {
    use HasUuid;
    protected $table = 'perfis';
    protected $fillable = [
        'nome_completo', 'nome_usuario', 'email', 'password_hash', 'funcao', 
        'url_avatar', 'bio', 'localizacao', 'telefone', 'saldo_creditos', 
        'esta_destacado', 'destaque_expira_em', 'avaliacao_media', 
        'total_avaliacoes', 'total_trabalhos_concluidos', 'esta_ativo'
    ];

    public function skills() {
        return $this->belongsToMany(Skill::class, 'perfil_habilidades', 'perfil_id', 'habilidade_id');
    }

    public function portfolio() {
        return $this->hasMany(PortfolioItem::class, 'freelancer_id');
    }
}
