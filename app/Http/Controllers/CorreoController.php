<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Storage;
use App\Order;
use App\Mail\OrderShipped;
use App\Mail\Message;
use App\Mail\Welcome;
use Illuminate\Support\Facades\Mail;



class CorreoController extends Controller
{
  

	public function create()
    {
		
	    return view("Correo.form_mail");
    }
    public function enviar(Request $request)
    {
    
	  

		$pathToFile="";
		$containfile=false;

		$destinatario=$request->input("destinatario");
		$asunto=$request->input("asunto");
		$contenido=$request->input("contenido_mail");

		$data = array('contenido' => $contenido);
		$r= Mail::send('Correo.plantilla_correo', $data, function ($message) use
		($asunto,$destinatario, $containfile,$pathToFile) {
		$message->from('blackburnekike@gmail.com','Enrique Perez');
		$message->to($destinatario)->subject($asunto);

		});
		
		if(!$r){
			return view("mensajes.plantillamensaje")
			->with('ruta_boton','enviar_correo')
			->with('mensaje_boton','Nuevo Correo')
			->with('msj','¡Correo Enviado Correctamente!');
		}else{
			return view("mensajes.plantillamensaje")
			->with('ruta_boton','bienvenida')
			->with('mensaje_boton','Ir al Home')
			->with('msj','Error al enviar Correo');
		}
    }
}
