@extends('template.master')


<br/>
<br/>
<br/>
<br/>
@section('contenido_central')
<a href="{{!! asset('municipios/create' )!!}}">crear un nuevo municipio.</a>
 
<table bgcolor="D4E7FE">
	<tr>
	<th>ID </th>
	<th>Nombre </th>
	<th>Estatus </th>
	<th>municipios </th>
	<th>Acciones </th>	
	</tr>
	@foreach($municipios as $municipio)
	<tr>
		<td>{!! $municipio->id !!}</td>
		<td>{!! $municipio->nombre !!}</td>
		<td>{!! $municipio->status !!}</td>
		<td>{!! $municipio->estados_id !!}</td>
		<td>
		<a href="{!! asset ('estados/'.$municipio->id) !!}" class="botones" >cargar foto</a>	
       
        <a href="" class="botones">Eliminar</a>
		</td>
          
	</tr>
 @endforeach
</table>
<br/>
<a href="{!! asset('paises') !!} ">Regresar a paises</a>

@endsection()