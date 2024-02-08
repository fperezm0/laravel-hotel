@exte@extends('template.master')


<br/>
<br/>
<br/>
<br/>
@section('contenido_central')
<a href="nueva foto/create" ><button type="button" class="btn btn-primary">Agregar tipo de foto</button></a>
 <h1>Lista de tipos de mascotas</h1>
<table bgcolor="D4E7FE">
	<tr>
    <th>Hatacion</th>	
	<th>titulo</th>
	<th>nombre</th>
	<th>fotos</th>
	</tr>
	@foreach($tipos_mascotas as $tipos_mascotas)
	<tr>
		<td>{!! $tipos_mascotas->id !!}</td>
		<td>{!! $tipos_mascotas->nombre !!}</td>
		<td>{!! $tipos_mascotas->status !!}</td>
		<td>
		<a href="{!! 'tipos_mascotas/'.$tipos_mascotas->id !!}" class="btn btn-success" >Detalle</a>	
        <a href="{!! 'tipos_mascotas/'.$tipos_mascotas->id.'/edit' !!}" class="btn btn-success">Editar</a>
        <a href="" > 
        {!! Form::open (['method'=> 'DELETE', 'url' => '/tipos_mascotas/'.$tipos_mascotas->id])!!}
       {!! Form::submit('Eliminar',['class'=>'btn btn-success']) !!}
        {!! Form::Close() !!} 

        </a>
		</td>
        
	</tr>
 @endforeach
</table>
<br/>
<a href="{!! asset('/') !!} " class="btn btn-primary">Regresar al index</a>

@endsection()