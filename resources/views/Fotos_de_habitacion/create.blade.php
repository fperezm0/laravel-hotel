@extends('template.master')


<br/>
<br/>
<br/>
<br/>

<br/>
<br/>
<br/>
<br/>
@section('contenido_central')

     {!! Form::open(['url'=>'/fotos_de_habitacion']) !!}
     {!! Form::label ('titulo','nombre fotos_de_habitacion') !!}
       {!! Form::text ('titulo', null,['required','placeholder'=>'ingresa nombre del cliente']) !!}
       <br/>
       <br/>
{!! Form::label ('fotos','fotos')!!}
    {!! Form::text('fotos',null,['required','placeholder'=>'Ingresa la ruta de la foto','class'=>'form-control'])!!}
<br/>
<br/>
 
 {!! Form::label ('habitacion_id','fotos_de_habitacion')!!}
        {!! Form::select ('habitacion_id',
        $habitacion->pluck('nombre','id')->all(), null,
        ['required','placeholder'=>'Seleccionar ...','class'=>'form-control','required'])!!}
  
      
        <br/>
        <br/>
 {!! Form::label ('status','Estatus') !!}
 {!! Form::select ('status',array('1'=>'Activo','0'=>'Baja'),['required','placeholder'=>'seleccionar...']) !!}
<br/>
   <br/>
{!! Form::submit('Guardar foto de habitacion',['class'=>'btn btn-success']) !!}
{!! Form::close() !!}

<a href="{!! asset('fotos_de_habitacion') !!} " class="btn btn-success">Regresar a Galeria</a>
@endsection()
