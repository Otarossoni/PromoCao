<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Denuncia extends Model
{
    use HasFactory;
    protected $table = 'denuncias';
    protected $primaryKey = "denuncia_id";
    protected $fillable = ['denuncia_titulo', 'denuncia_descricao', 'consumidor_id'];

    public function consumidor()
    {
        return $this->belongsTo('App\Models\Consumidor', 'consumidor_id');
    }
}
