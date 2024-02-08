@extends('template.master')


<br/>
<br/>
<br/>
<br/>
@section('contenido_central')

<h1>Detalle </h1>
<h2>Nombre: {!! $pais->nombre !!}</h2>
<h2>Clave: {!! $pais->clave !!}</h2>
<h2>Status: {!! $pais->status !!}</h2>
<h2></h2>

<a href="{!! asset('paises') !!} "class="botones">Regresar al paises</a>
<br/>
@endsection()