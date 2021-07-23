<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('produtos')->insert([
            [

            'codigo' => '4000',
            'nome' => 'mouse',
            'precoUnitario' => '50'
        ],
            [
                'codigo' => '4001',
                'nome' => 'teclado',
                'precoUnitario' => '80'
            ],[
                'codigo' => '4002',
                'nome' => 'monitor',
                'precoUnitario' => '349.99'
            ],

        ]);
    }
}
