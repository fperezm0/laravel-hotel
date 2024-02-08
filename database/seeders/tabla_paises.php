<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class tabla_paises extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            \DB::table('paises')->insert([
                  'nombre' => 'Mexico',
                   'clave' => 'MX',
                   'status' => 1,
             ]);
            



    }
}
