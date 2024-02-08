<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Models\Tipo_dehabitacion;

class GraficasController extends Controller
{
   public function graficaServicio()
    {
    	  
	$habitacion = Servicio::
	all();
    
    return view("Graficas.grafica_3d2")
    	->with('servicio',$habitacion);
    	
    }


public function graficaHabitaciones()
    {
    
	$habitacion = Tipo_dehabitacion::where('STATUS',1)
	->orderBy('nombre')->get();
    return view("Graficas.grafica_3d")
    	->with('habitacion',$habitacion);
    	
    }


}
