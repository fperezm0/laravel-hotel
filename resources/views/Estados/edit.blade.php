@extends('template.master')


<br/>
<br/>
<br/>
<br/>
@section('contenido_central')

	   {!! Form::open ([ 'method'=>'PATCH' 
     , 'url' => '/estados/'.$estados->id])!!}
	      {!! Form::label ('nombre','Nombre del estado') !!}
       {!! Form::text ('nombre',estados->nombre,['required','placeholder'=>'ingresa nombre del mascota']) !!}
       <br/>
       <br/>
 
{!! Form::label ('paises_id','pais')!!}
        {!! Form::select ('paises_id',
        $paises->pluck('nombre','id')->all(), estados->paises_id,
        ['required','placeholder'=>'Seleccionar ...','class'=>'form-control','required'])!!}
    

   <br/>
   <br/>

 {!! Form::label ('status','Estatus') !!}
 {!! Form::select ('status',array('1'=>'Activo','0'=>'Baja'), null,['placeholder'=>'seleccionar...']) !!}
<br/>
   <br/>
{!! Form::submit('Editar Mascota',['class'=>'btn btn-success']) !!}
{!! Form::close() !!}

<a href="{!! asset('mascotas') !!} " class="btn btn-primary">Regresar al mascota</a>

@endsection()