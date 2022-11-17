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
}
