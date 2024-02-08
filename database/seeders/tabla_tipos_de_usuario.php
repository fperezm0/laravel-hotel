<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class tabla_tipos_de_usuario extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $var[1]= 'Admistrador';
        $var[2]= 'Supervisor';
        $var[3]= 'Vendedor';
        $var[4]= 'Cliente';
        for ($i=1; $i <5 ; $i++) { 
           \DB::table('tipos_de_usuario')->insert([
            'nombre' =>  $var[$i],
             'tipo' => $i, 
            'status' =>  1,
        ]);
          }  
        
    }
}
