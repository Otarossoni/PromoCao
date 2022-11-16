<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cupom extends Model
{
    protected $table = "cupons";
    protected $primaryKey = "cupom_id";
    protected $fillable = ['cupom_titulo', 'cupom_aplicavel', 'cupom_url', 'loja_id'];

    public function loja()
    {
        return $this->belongsTo('App\Models\Loja', 'loja_id');
    }
    use HasFactory;
}
