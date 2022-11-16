<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Loja;

class LojaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Loja::create(['loja_nomeFantasia' => 'Americanas', 'loja_url' => 'https://www.americanas.com.br/']);
        Loja::create(['loja_nomeFantasia' => 'Submarino', 'loja_url' => 'https://www.submarino.com.br/']);
        Loja::create(['loja_nomeFantasia' => 'Shoptime', 'loja_url' => 'https://www.shoptime.com.br/']);
        Loja::create(['loja_nomeFantasia' => 'Extra', 'loja_url' => 'https://www.extra.com.br/']);
        Loja::create(['loja_nomeFantasia' => 'Casas Bahia', 'loja_url' => 'https://www.casasbahia.com.br/']);
        Loja::create(['loja_nomeFantasia' => 'Magazine Luiza', 'loja_url' => 'https://www.magazineluiza.com.br/']);
        Loja::create(['loja_nomeFantasia' => 'Ponto Frio', 'loja_url' => 'https://www.pontofrio.com.br/']);
        Loja::create(['loja_nomeFantasia' => 'Ricardo Eletro', 'loja_url' => 'https://www.ricardoeletro.com.br/']);
        Loja::create(['loja_nomeFantasia' => 'Saraiva', 'loja_url' => 'https://www.saraiva.com.br/']);
        Loja::create(['loja_nomeFantasia' => 'Walmart', 'loja_url' => 'https://www.walmart.com.br/']);
        Loja::create(['loja_nomeFantasia' => 'Carrefour', 'loja_url' => 'https://www.carrefour.com.br/']);
        Loja::create(['loja_nomeFantasia' => 'Netshoes', 'loja_url' => 'https://www.netshoes.com.br/']);
        Loja::create(['loja_nomeFantasia' => 'Centauro', 'loja_url' => 'https://www.centauro.com.br/']);
        Loja::create(['loja_nomeFantasia' => 'Dafiti', 'loja_url' => 'https://www.dafiti.com.br/']);
        Loja::create(['loja_nomeFantasia' => 'Zattini', 'loja_url' => 'https://www.zattini.com.br/']);
        Loja::create(['loja_nomeFantasia' => 'Kanui', 'loja_url' => 'https://www.kanui.com.br/']);
        Loja::create(['loja_nomeFantasia' => 'C&A', 'loja_url' => 'https://www.cea.com.br/']);
        Loja::create(['loja_nomeFantasia' => 'Renner', 'loja_url' => 'https://www.renner.com.br/']);
        Loja::create(['loja_nomeFantasia' => 'Marisa', 'loja_url' => 'https://www.marisa.com.br/']);
    }
}
