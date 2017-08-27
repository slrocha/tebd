<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class TableNameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	App\Teatro::truncate();
    	App\Endereco::truncate();
    	App\Cliente::truncate();
    	App\Poltrona::truncate();
    	App\Espetaculo::truncate();
    	App\Programacao::truncate();
    	App\Bilhete::truncate();
    	App\ReservaBilhete::truncate();
    	App\TeatroPrograPoltro::truncate();

        factory(App\Teatro::class, 1)->create();
        factory(App\Endereco::class, 500000)->create();
        factory(App\Cliente::class, 500000)->create();
        factory(App\Poltrona::class, 500000)->create();
        factory(App\Espetaculo::class, 500000)->create();
        factory(App\Programacao::class, 500000)->create();
        factory(App\Bilhete::class, 500000)->create();
        factory(App\ReservaBilhete::class, 500000)->create();
        factory(App\TeatroPrograPoltro::class, 500000)->create();

    }
}
