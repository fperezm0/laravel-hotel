@extends('template.master')


<br/>
<br/>
<br/>
<br/>
@section('contenido_central')

	   {!! Form::open ([ 'method'=>'PATCH' 
     , 'url' => '/paises/'.$pais->id])!!}
	   {!! Form::label ('nombre','nombre del pais') !!}
       {!! Form::text ('nombre', $pais->nombre,['placeholder'=>'ingresa nombre del pais']) !!}
       <br/>
       <br/>
 {!! Form::label ('clave','clave del pais') !!}
  {!! Form::text ('clave', $pais->clave,['placeholder'=>'ingresa clave  pais']) !!}
   <br/>
   <br/>
 {!! Form::label ('status','Estatus') !!}
 {!! Form::select ('status',array('1'=>'Activo','0'=>'Baja'),['placeholder'=>'seleccionar...']) !!}
<br/>
   <br/>
{!! Form::submit('Editar pais') !!}
{!! Form::close() !!}
<a href="{!! asset('/') !!} " class="botones">Regresar al index</a>

@endsection()