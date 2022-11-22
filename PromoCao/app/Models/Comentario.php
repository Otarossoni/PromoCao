<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    use HasFactory;
    protected $table = 'comentarios';
    protected $primaryKey = "comentario_id";
    protected $fillable = ['comentario_titulo', 'comentario_descricao', 'consumidor_id', 'promocao_id'];

    public function promocao()
    {
        return $this->belongsTo('App\Models\Promocao', 'promocao_id');
    }

    public function consumidor()
    {
        return $this->belongsTo('App\Models\Consumidor', 'consumidor_id');
    }
}
