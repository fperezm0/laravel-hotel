@extends('template.master')


<br/>
<br/>
<br/>
<br/>
@section('contenido_central')

<h1>Detalle </h1>
<h2>Nombre: {!! $estado->nombre !!}</h2>
<h2>Clave: {!! $estado->paises_id !!}</h2>
<h2>Status: {!! $estado->status !!}</h2>
<h2></h2>

<a href="{!! asset('estados') !!} "class="botones">Regresar al paises</a>
<br/>
@endsection()