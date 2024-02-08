<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\PaisesController;
use App\Models\Estados;
use App\Models\Paises;

class EstadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $estado= Estados::where('status',1)
       ->orderby('nombre')
       ->orderby('paises_id')->get();
      return view ('Estados.index')->with ('estados',$estado);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
           $paises= Paises::select('clave','nombre')->
    
      orderby('nombre')->get();
      return view  ('Estados.create')
      ->with ('paises',$paises);
        
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
        Estados::create($datos);
        return redirect('/estados'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       
    $estado= estados::find($id);

      return view ('Estados.read')->with ('estados',$estado);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    $estado= Estados::find($id);
      $paises= Paises::select('clave','nombre')->
      where('status',1);
      return view  ('estados.edit')
      ->with  ('estados',$estado)
      ->with ('paises',$paises);
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
         $datos= $request->all();
       $estados = estados::fin($id);
        $estados -> update($datos); 
        return redirect('/estados'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
     $estados = estados::fin($id);
     $estados->status = 0;
     $estados-> save();
     return redirect('/estados'); 
    }
}
