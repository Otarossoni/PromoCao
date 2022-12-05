<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Promocao extends Model
{
    use HasFactory;
    protected $table = 'promocoes';
    protected $primaryKey = "promocao_id";
    protected $fillable = ['promocao_titulo', 'promocao_descricao', 'promocao_preco', 'promocao_url', 'loja_id', 'consumidor_id'];

    public function loja()
    {
        return $this->belongsTo('App\Models\Loja', 'loja_id');
    }

    public function consumidor()
    {
        return $this->belongsTo('App\Models\Consumidor', 'consumidor_id');
    }

    public function comentarios()
    {
        return $this->hasMany('App\Models\Comentario', 'comentario_id');
    }

    public function cupons()
    {
        return $this->hasMany('App\Models\Cupom', 'cupom_id');
    }
}
