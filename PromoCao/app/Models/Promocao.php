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
}
