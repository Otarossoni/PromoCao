<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Consumidor extends Model
{
    use HasFactory;
    protected $table = 'consumidores';
    protected $primaryKey = "consumidor_id";
    protected $fillable = ['consumidor_nome', 'consumidor_email'];
}
