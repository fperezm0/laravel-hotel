@extends('template.master')


<br/>
<br/>
<br/>
<br/>
@section('contenido_central')
<a href="fotos_de_habitacion/create" ><button type="button" class="btn btn-primary">Agregar Fotografia de habitacion</button></a>
 <h1>Galeria de habitaciones</h1>
<table bgcolor="white">
	<tr>
	<th>Habitacion</th>

	<th>Foto </th>
	</tr>
	@foreach($fotos_de_habitacion as $fotos_de_habitacion)
	<tr>
		
		<td>{!! $fotos_de_habitacion->titulo !!}</td>
		
		<td><img src="{{ asset('../storage/fotos') }}/{!! $fotos_de_habitacion->habitacion_id !!}" alt="" width="400px"></td>
		<td>
		<a href="{!! 'subir_foto/'.$fotos_de_habitacion->id !!}" class="btn btn-success">Cargar foto</a>	
        
        <a href="" > 
        {!! Form::open (['method'=> 'DELETE', 'url' => '/fotos_de_habitacion/'.$fotos_de_habitacion->id])!!}
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