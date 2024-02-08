@extends('template.master')


<br/>
<br/>
<br/>
<br/>
@section('contenido_central')
<a href="{{!! asset('municipios/create' )!!}}">crear un nuevo municipio.</a>
 
<table bgcolor="">
	<tr>
	<th>ID </th>
	<th>Nombre </th>
	<th>tipo </th>
	<th>precio </th>
	<th>Estado </th>	
	</tr>
	@foreach($tipo_dehabitacion as $tipo)
	<tr>
		<td>{!! $tipo->id !!}</td>
		<td>{!! $tipo->nombre !!}</td>
		<td>{!! $tipo->tipo !!}</td>
		<td>{!! $tipo->precio !!}</td>
		<td>{!! $tipo->status !!}</td>
		
		<td>
		<a href="{!! asset ('estados/'.$tipo->id) !!}"  >Detalle</a>	
        <a href="{!! asset('estados/'.$tipo->id.'/edit') !!}">Editar</a>
        <a href="" >Eliminar</a>
		</td>
          
	</tr>
 @endforeach
</table>
<br/>
<a href="{!! asset('/') !!} ">Regresar al index</a>