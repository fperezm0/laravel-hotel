@extends('template.master')


<br/>
<br/>
<br/>
<br/>
@section('contenido_central')
<a href="estados/create">crear un nuevo estado.</a>
 
<table bgcolor="D4E7FE">
	<tr>
	<th>ID </th>
	<th>Nombre </th>
	<th>Estatus </th>
	<th>Pais </th>
	<th>Acciones </th>	
	</tr>
	@foreach($estados as $estado)
	<tr>
		<td>{!! $estado->id !!}</td>
		<td>{!! $estado->nombre !!}</td>
		<td>{!! $estado->status !!}</td>
		<td>{!! $estado->paises_id !!}</td>
		<td>
		
      	<a href="{!! 'estados/'.$estado->id !!}" class="botones" >Detalle</a>	
        <a href="{!! 'estados/'.$estado->id.'/edit' !!}" class="botones">Editar</a>
        <a href="" > 
        {!! Form::open (['method'=> 'DELETE', 'url' => '/estados/'.$estado->id])!!}
        {!! Form::submit('Eliminar',['class'=>'botones']) !!}
        {!! Form::Close() !!} 

        </a>
	</tr>
 @endforeach
</table>
<br/>
<a href="{!! asset('/') !!} ">Regresar al index</a>

@endsection()