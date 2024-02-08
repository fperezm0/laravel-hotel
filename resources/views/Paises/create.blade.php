@extends('template.master')


<br/>
<br/>
<br/>
<br/>
@section('contenido_central')

	   {!! Form::open(['url'=>'/paises']) !!}
	   {!! Form::label ('nombre','Nombre del pais') !!}
       {!! Form::text ('nombre',null,['placeholder'=>'ingresa nombre del pais']) !!}
       <br/>
       <br/>
  {!! Form::label ('clave','clave del pais') !!}
  {!! Form::text ('clave',null,['placeholder'=>'ingresa clave pais']) !!}
   <br/>
   <br/>
 {!! Form::label ('status','Estatus') !!}
 {!! Form::select ('status',array('1'=>'Activo','0'=>'Baja'), null,['placeholder'=>'seleccionar...']) !!}
<br/>
   <br/>
{!! Form::submit('Guardar pais') !!}
{!! Form::close() !!}

<a href="{!! asset('paises') !!} " class="botones">Regresar al paises</a>
@endsection()
