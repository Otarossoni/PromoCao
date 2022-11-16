<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Loja extends Model
{
    use HasFactory;
    protected $table = 'lojas';
    protected $primaryKey = "loja_id";
    protected $fillable = ['loja_nomeFantasia', 'loja_url'];

    public function cupons()
    {
        return $this->hasMany('App\Models\Cupom');
    }
}
