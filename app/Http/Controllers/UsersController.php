<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct()
    {
        $this->middleware('usuarioSupervisor');
    }
    
    public function index()
    {
    $user = USERS::where('status',1)
    ->orderBy('nombre')->get();
    

    //$usuarioactual=\Auth::user();
    $usuarioactual = Session::get('usuarioactual');
    return view('users.index')->with('users',$user)
    ->with("usuario",$usuarioactual);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fecha = date("Y-m-d");


        $datos = $request->all();
        $datos['password']=Hash::make($datos['password']);
        $datos['status']=1;
        users::create($datos);
        return redirect('/users');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        //$usuarioactual=\Auth::user();
        $usuarioactual = Session::get('usuarioactual');
        $user=users::find($id);
    return view('users.read')
            ->with('user',$user)
            ->with("usuario",$usuarioactual);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
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
        //encriptar
        $datos = $request->all();
        $datos['password']=Hash::make($datos['password']);
        $user = users::find($id);
        $user->update($datos);
        return redirect('/users');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = users::find($id);
        $user->status =0;
        $user->save();   
    
        return redirect ('/users');  
    }

}
