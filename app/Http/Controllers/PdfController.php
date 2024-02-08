<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicio;
use App\Models\Tipo_dehabitacion;
use App\Models\Habitacion;
use Illuminate\Support\Facades\DB;

class PdfController extends Controller
{


    public function genera_pdf()
    {
	

	        return view("Pdf.listado_reportes");
    }



    	public function crearPDF($datos,$vistaurl,$tipo)
    {
		$data = $datos;
		$date = date('Y-m-d');
		$view = \View::make($vistaurl, compact('data','date'))->render();
		$pdf = \App::make('dompdf.wrapper');
		$pdf->loadHTML($view);
		if($tipo==1){return $pdf->stream('reporte');}
		if($tipo==2){return $pdf->download('reporte.pdf');}
    }

   

    public function crear_reporte_nombre($tipo)
    {
		$vistaurl = "Pdf.reporte_de_habitacion";
		$habitacion =  \DB::table('tipo_dehabitacion')
            ->join('habitacion', 'tipo_dehabitacion.id', '=', 'habitacion.tipo_dehabitacion_id')
            ->select('habitacion.id','habitacion.numero_de_habitacion','tipo_dehabitacion.nombre','tipo_dehabitacion.precio')->get();
		return $this->crearPDF($habitacion, $vistaurl, $tipo);
    }

	public function crear_reporte_id($tipo)
    {
		$vistaurl = "Pdf.reporte_de_habitacion";
		$habitacion =  \DB::table('tipo_dehabitacion')
            ->join('habitacion', 'tipo_dehabitacion.id', '=', 'habitacion.tipo_dehabitacion_id')
            ->join('detalle_reservacion', 'habitacion.id', '=', 'detalle_reservacion.habitacion_id')
             ->join('reservacion', 'reservacion.id', '=', 'detalle_reservacion.reservacion_id')
            ->select('habitacion.id','habitacion.numero_de_habitacion','tipo_dehabitacion.nombre','tipo_dehabitacion.precio')->get();
		return $this->crearPDF($habitacion, $vistaurl, $tipo);
    }

	public function crear_reporte_reservacion($tipo)
    {
		$vistaurl = "Pdf.reportereservacion";
		$habitacion =  \DB::table('tipo_dehabitacion')
            ->join('habitacion', 'tipo_dehabitacion.id', '=', 'habitacion.tipo_dehabitacion_id')
            ->join('detalle_reservacion', 'habitacion.id', '=', 'detalle_reservacion.habitacion_id')
             ->join('reservacion', 'reservacion.id', '=', 'detalle_reservacion.reservacion_id')
              ->join('users', 'users.id', '=', 'reservacion.cliente_id')
            ->select('habitacion.id','habitacion.numero_de_habitacion','tipo_dehabitacion.nombre','tipo_dehabitacion.precio','reservacion.iva','reservacion.total','reservacion.fechaReserva','users.nombre','users.apellido'
        )->get();
		return $this->crearPDF($habitacion, $vistaurl, $tipo);
    }



}
