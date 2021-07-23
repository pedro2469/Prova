<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class PessoasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pessoas')->insert([[

                'nome' => 'Jeff',
                'cpf' => '964.611.150-56',
                'dataNascimento' => '1990-10-03'
            ],
            [
                'nome' => 'Lucas',
                'cpf' => '518.310.990-71',
                'dataNascimento' => '1995-11-12'
            ],[
                'nome' => 'Yasmin',
                'cpf' => '520.514.690-75',
                'dataNascimento' => '1980-10-08'
            ],[
                'nome' => 'Fabio',
                'cpf' => '702.782.140-02',
                'dataNascimento' => '1977-07-09'
            ],[
                'nome' => 'Victor',
                'cpf' => '571.707.250-37',
                'dataNascimento' => '2002-09-12'
            ],

       ]);
    }
}
