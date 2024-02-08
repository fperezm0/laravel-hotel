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

     {!! Form::open(['url'=>'/subir_foto','enctype'=>'multipart/form-data']) !!}
    

     <br/>
   <br/>  
{!! Form::label ('foto','Seleccione foto',['class'=>'control-label']) !!}
    {!! Form::file('foto',null,['class'=>'form-control']) !!}

<br/>
   <br/>
{!! Form::submit('Guardar foto de habitacion',['class'=>'btn btn-success']) !!}
{!! Form::close() !!}

<a href="{!! asset('fotos_de_habitacion') !!} " class="btn btn-success">Regresar a Galeria</a>
@endsection()
