<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class tabla_tipos_de_pago extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

          \DB::table('tipos_de_pago')->insert([
            'nombre' =>  'Efectivo',
             'tipo' =>  1,
            'status' =>  1,
        ]);


          \DB::table('tipos_de_pago')->insert([
            'nombre' =>  'Cheque',
             'tipo' =>  2,
            'status' =>  1,
        ]);

            \DB::table('tipos_de_pago')->insert([
            'nombre' =>  'Transferencia',
             'tipo' =>  3,
            'status' =>  1,
        ]);

            \DB::table('tipos_de_pago')->insert([
            'nombre' =>  'Deposito',
             'tipo' =>  4,
            'status' =>  1,
        ]);

              \DB::table('tipos_de_pago')->insert([
            'nombre' =>  'Tajeta de credito',
             'tipo' =>  5,
            'status' =>  1,
        ]);
    }
}
