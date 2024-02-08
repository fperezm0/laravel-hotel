@extends('template.master')
@section('contenido_central')
<section id="about" class="about">
      <div class="container">

        <div class="section-title">
        	<br />
          <h2>Mensaje...</h2>
          <p>Envío de Correo</p>
          <br />
          <h4>{{ $msj }}</h4>
          <br /> 
          <a class="botones" href="{!! $ruta_boton !!}"> {{ $mensaje_boton }} </a>
          
          <br />
		  
        </div>
      </div>
      <div align="right"> <a href="{!! asset('/') !!}" >REGRESAR A LOS home_</a></div>
      
    </section>

@endsection()