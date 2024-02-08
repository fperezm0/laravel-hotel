<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class tabla_habitacion extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     
\DB::table('habitacion')->insert([
            'nombre' =>  'single bed',
            'numero_de_habitacion' => 1,
            'descripcion' => 'Ideal para quienes viajan solos.',
            'status' => 1,
            'tipo_dehabitacion_id' =>  1,
        ]);

\DB::table('habitacion')->insert([
            'nombre' =>  'single bed',
            'numero_de_habitacion' => 2,
            'descripcion' => 'Ideal para quienes viajan solos.',
            'status' => 1,
            'tipo_dehabitacion_id' =>  1,
        ]);
\DB::table('habitacion')->insert([
            'nombre' =>  'single bed',
            'numero_de_habitacion' => 3,
            'descripcion' => 'Ideal para quienes viajan solos. No tienes más espacio del que necesitas.',
            'status' => 1,
            'tipo_dehabitacion_id' =>  1,
        ]);
\DB::table('habitacion')->insert([
            'nombre' =>  'single bed',
            'numero_de_habitacion' => 4,
            'descripcion' => 'Ideal para quienes viajan solos. No tienes más espacio del que necesitas.',
            'status' => 1,
            'tipo_dehabitacion_id' =>  1,
        ]);
\DB::table('habitacion')->insert([
            'nombre' =>  'single bed',
            'numero_de_habitacion' => 5,
            'descripcion' => 'Ideal para quienes viajan solos. No tienes más espacio del que necesitas.',
            'status' => 1,
            'tipo_dehabitacion_id' =>  1,
        ]);

\DB::table('habitacion')->insert([
            'nombre' =>  'single bed',
            'numero_de_habitacion' => 6,
            'descripcion' => 'Ideal para quienes viajan solos. No tienes más espacio del que necesitas.',
            'status' => 1,
            'tipo_dehabitacion_id' =>  1,
        ]);

\DB::table('habitacion')->insert([
            'nombre' =>  'twin bed',
            'numero_de_habitacion' => 7,
            'descripcion' => 'una habitación diseñada para dos personas.',
            'status' => 1,
            'tipo_dehabitacion_id' =>  2,
        ]);

\DB::table('habitacion')->insert([
            'nombre' =>  'twin bed',
            'numero_de_habitacion' => 8,
            'descripcion' => 'una habitación diseñada para dos personas.',
            'status' => 1,
            'tipo_dehabitacion_id' =>  2,
        ]);
\DB::table('habitacion')->insert([
            'nombre' =>  'twin bed',
            'numero_de_habitacion' => 9,
            'descripcion' => 'una habitación diseñada para dos personas.',
            'status' => 1,
            'tipo_dehabitacion_id' =>  2,
        ]);
\DB::table('habitacion')->insert([
            'nombre' =>  'twin bed',
            'numero_de_habitacion' => 10,
            'descripcion' => 'una habitación diseñada para dos personas.',
            'status' => 1,
            'tipo_dehabitacion_id' =>  2,
        ]);
\DB::table('habitacion')->insert([
            'nombre' =>  'twin bed',
            'numero_de_habitacion' => 11,
            'descripcion' => 'una habitación diseñada para dos personas.',
            'status' => 1,
            'tipo_dehabitacion_id' =>  2,
        ]);



\DB::table('habitacion')->insert([
            'nombre' =>  'sized bed',
            'numero_de_habitacion' => 13,
            'descripcion' => 'habitacion son ideales para quienes viajan con algún menor de edad.',
            'status' => 1,
            'tipo_dehabitacion_id' =>  2,
        ]);

\DB::table('habitacion')->insert([
            'nombre' =>  'sized bed',
            'numero_de_habitacion' => 14,
            'descripcion' => 'habitacion son ideales para quienes viajan con algún menor de edad.',
            'status' => 1,
            'tipo_dehabitacion_id' =>  2,
        ]);
\DB::table('habitacion')->insert([
            'nombre' =>  'sized bed',
            'numero_de_habitacion' => 15,
            'descripcion' => 'habitacion son ideales para quienes viajan con algún menor de edad.',
            'status' => 1,
            'tipo_dehabitacion_id' =>  2,
        ]);
\DB::table('habitacion')->insert([
            'nombre' =>  'sized bed',
            'numero_de_habitacion' => 16,
            'descripcion' => 'habitacion son ideales para quienes viajan con algún menor de edad.',
            'status' => 1,
            'tipo_dehabitacion_id' =>  2,
        ]);

\DB::table('habitacion')->insert([
            'nombre' =>  'sized royal',
            'numero_de_habitacion' => 17,
            'descripcion' => 'Conocidas por ser las mejores y más lujosas habitaciones en cualquier hotel.',
            'status' => 1,
            'tipo_dehabitacion_id' =>  2,
        ]);

\DB::table('habitacion')->insert([
            'nombre' =>  'sized royal',
            'numero_de_habitacion' => 18,
            'descripcion' => 'Conocidas por ser las mejores y más lujosas habitaciones en cualquier hotel.',
            'status' => 1,
            'tipo_dehabitacion_id' =>  2,
        ]);

\DB::table('habitacion')->insert([
            'nombre' =>  'sized royal',
            'numero_de_habitacion' => 19,
            'descripcion' => 'Conocidas por ser las mejores y más lujosas habitaciones en cualquier hotel.',
            'status' => 1,
            'tipo_dehabitacion_id' =>  2,
        ]);

\DB::table('habitacion')->insert([
            'nombre' =>  'sized royal',
            'numero_de_habitacion' => 20,
            'descripcion' => 'Conocidas por ser las mejores y más lujosas habitaciones en cualquier hotel.',
            'status' => 1,
            'tipo_dehabitacion_id' =>  2,
        ]);




    }
}
