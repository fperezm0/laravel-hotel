@extends('template.master')
@section('contenido_central')
<section id="about" class="about">
      <div class="container">

        <div class="section-title">
        	<br />
          <h2>Mensaje...</h2>
          <p>Acceso Denegado</p>
          <br /><br /><br />
          <h4>{{ $msj }}</h4>
          <br />
		  
        </div>
      </div>
    </section>

@endsection()