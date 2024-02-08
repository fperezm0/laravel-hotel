@extends('template.master')


<br/>
<br/>
<br/>
<br/>
@section('contenido_central')
<a href="paises/create" class="botones">crear un nuevo pais.</a>
 <h1>Lista de paises</h1>
<table bgcolor="D4E7FE">
	<tr>
	<th>ID </th>
	<th>Nombre </th>
	<th>Clave </th>
	<th>Estatus </th>
	<th>Acciones </th>	
	</tr>
	@foreach($paises as $pais)
	<tr>
		<td>{!! $pais->id !!}</td>
		<td>{!! $pais->nombre !!}</td>
		<td>{!! $pais->clave !!}</td>
		<td>{!! $pais->status !!}</td>
		<td>
		<a href="{!! 'paises/'.$pais->id !!}" class="botones" >Detalle</a>	
        <a href="{!! 'paises/'.$pais->id.'/edit' !!}" class="botones">Editar</a>
        <a href="" > 
        {!! Form::open (['method'=> 'DELETE', 'url' => '/paises/'.$pais->id])!!}
        {!! Form::submit('Eliminar',['class'=>'botones']) !!}
        {!! Form::Close() !!} 

        </a>
		</td>
          
	</tr>
 @endforeach
</table>
<br/>
<a href="{!! asset('/') !!} " class="botones">Regresar al index</a>

@endsection()