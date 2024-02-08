<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Fotos_de_habitacion;
use App\Models\Habitacion;

class Fotos_de_habitacionController extends Controller
{  

    public function index()
    {
  $fotos_de_habitacion= Fotos_de_habitacion::where('status',1)
   ->orderBy('titulo')->get(); 
   return view ('Fotos_de_habitacion.index')->with ('fotos_de_habitacion', $fotos_de_habitacion);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {        $habitacion=Habitacion::select ('id','nombre')
                ->orderBy('nombre')->get();
        return view('Fotos_de_habitacion.create')
                ->with('habitacion',$habitacion);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
   
         $datos = $request->all();
        Fotos_de_habitacion::create($datos);
        return redirect('/fotos_de_habitacion'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

       }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $fotos_de_habitacion =Fotos_de_habitacion::find($id);
       return view('Fotos_de_habitacion.edit')->with('fotos_de_habitacion',$fotos_de_habitacion);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $datos =$request->all();
      $fotos_de_habitacion =Fotos_de_habitacion::find($id);
      $fotos_de_habitacion->update($datos);
      return redirect('/fotos_de_habitacion');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $fotos_de_habitacion = Fotos_de_habitacion::find($id);
       $fotos_de_habitacion->status=0;
       $fotos_de_habitacion->save();
        return redirect('/fotos_de_habitacion');
       
    }

     public function subir_foto()
    {
        $fotos_de_habitacion= Fotos_de_habitacion::select('id','titulo')
        -> where('status',1)
   ->orderBy('titulo')->get(); 
       return view('Fotos.subir_foto')->with(
     'fotos_de_habitacion',$fotos_de_habitacion);
       }

    public function guardar_foto(Request $request)
    {
     $datos = $request->all();
     $rutaarchivo ="../storage/fotos/";
     $hora =  date("h:i:s");
   $fecha = date("d-m-Y");
    $archivo = $request->file('foto');
        $input = array('file' => $archivo);
        $reglas = array('file' => 'required|mimes:jpeg,png,gif|max:50000');

        $validacion = Validator::make($input, $reglas);
        if ($validacion->fails())
        { $ruta = $prefijo .'_'.$archivo->getClientOriginalName();
            return view("mensajes.error_acceso")
            ->with('msj','El archivo no es una imagen o es demasiado 
                grande para almacenar: '.$ruta);
        }
        else
        {
            $ruta = $prefijo .'_'.$archivo->getClientOriginalName();
            $r1   = Storage::disk ('user')->put($ruta, \File::get($archivo) );
        
            if($r1)
            {
            $datos['RUTA'] =$ruta;
            IMG_USR::create($datos);
                 return redirect('/img_usr');
            }
            else
            {
            return view("mensajes.error_acceso")
            ->with("usuario",$usuarioactual)
            ->with('msj','El archivo no se guardó, favor de consultar con el administrador');
            }



    }


}


}