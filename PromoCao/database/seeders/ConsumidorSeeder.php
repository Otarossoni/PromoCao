<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Consumidor;

class ConsumidorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Consumidor::create(['consumidor_nome' => 'Otávio Monteiro Rossoni', 'consumidor_email' => '182744@upf.br']);
        Consumidor::create(['consumidor_nome' => 'Samuel Amarante', 'consumidor_email' => '186218@upf.br']);
        Consumidor::create(['consumidor_nome' => 'Teste', 'consumidor_email' => 'teste@upf.br']);
        Consumidor::create(['consumidor_nome' => 'Administrador', 'consumidor_email' => 'adm@upf.br']);
    }
}
