@extends('template.master')


<br/>
<br/>
<br/>
<br/>
@section('contenido_central')

     {!! Form::open(['url'=>'/estados']) !!}
     {!! Form::label ('nombre','Nombre del estado') !!}
       {!! Form::text ('nombre',null,['required','placeholder'=>'ingresa nombre del estado']) !!}
       <br/>
       <br/>             
        {!! Form::label ('paises_id','pais')!!}
        {!! Form::select ('paises_id',
        $paises->pluck('nombre','id')->all(), null,
        ['required','placeholder'=>'Seleccionar ...','class'=>'form-control','required'])!!}
    

   
  
      
        <br/>
        <br/>
 {!! Form::label ('status','Estatus') !!}
 {!! Form::select ('status',array('1'=>'Activo','0'=>'Baja'), null,['required','placeholder'=>'seleccionar...']) !!}
<br/>
   <br/>
{!! Form::submit('Guardar paises') !!}
{!! Form::close() !!}

<a href="{!! asset('estados') !!} " class="botones">Regresar al estados</a>
@endsection()
