<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class tabla_tipo_dehabitacion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      \DB::table('tipo_dehabitacion')->insert([
            'nombre' =>  'Individual',
            'tipo' => 1,
            'precio' => 1000,
            'status' =>  1,
        ]);


   \DB::table('tipo_dehabitacion')->insert([
            'nombre' =>  'Doble',
            'tipo' => 1,
            'precio' => 1000,
            'status' =>  1,
        ]);



   \DB::table('tipo_dehabitacion')->insert([
            'nombre' =>  'Queen',
            'tipo' => 2,
            'precio' => 1000,
            'status' =>  1,
        ]);

  
 \DB::table('tipo_dehabitacion')->insert([
            'nombre' =>  'Suite presidencial',
            'tipo' => 3,
            'precio' => 1000,
            'status' =>  1,
        ]);



    }
}
