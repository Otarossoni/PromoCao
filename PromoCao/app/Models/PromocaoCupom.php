<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PromocaoCupom extends Model
{
    use HasFactory;
    protected $table = 'promocao_cupoms';
    protected $primaryKey = "promocao_cupom_id";
    protected $fillable = ['promocao_id', 'cupom_id'];

    public function promocao()
    {
        return $this->belongsTo('App\Models\Promocao', 'promocao_id');
    }

    public function cupom()
    {
        return $this->belongsTo('App\Models\Cupom', 'cupom_id');
    }
}
