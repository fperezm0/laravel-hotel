@extends('template.master')
@section('contenido_central')
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Ejemplo de envío de Correo</h2>
          <ol>
            <li>Nuevo Correo</li>
          </ol>
        </div>

      </div>
    </section>

@endsection()
@section('contenido_central2')
<section id="story-intro" class="story-intro">
      <div class="container">

          <div class="col-lg-6 order-1 order-lg-2" >
          </div>

          {!! Form::open(['url'=>'/enviar_correo','role'=>'form','enctype'=>'multipart/form-data']) !!}
          
              <div class="form-row">
                <div class="col-md-6 form-group">
                {!! Form::label ('destinatario','Para:',['class'=>'control-label']) !!}
				{!! Form::text ('destinatario',null,['placeholder'=>'Ingresa la dirección del Destino','required','class'=>'form-control'])!!}
                </div>
                <div class="col-md-6 form-group">
                {!! Form::label ('asunto','Asunto:',['class'=>'control-label']) !!}
				{!! Form::text ('asunto',null,['placeholder'=>'Asunto','required','class'=>'form-control'])!!}
                </div>
                </div>
              <div class="text-center ">
                {!! Form::label ('contenido_mail','Contenido:',['class'=>'control-label']) !!}
				{!! Form::textarea ('contenido_mail',null,['placeholder'=>'Contenido','required','class'=>'form-control'])!!}
              </div>
              <br />
              <div class="text-center">{!! Form::submit('Enviar Correo',['class'=>'btn btn-success'])!!}
              </div>
            {!! Form::Close()!!}
		<br />
		<br />
		<a class="btn btn-success" href="{!! asset('/') !!}">REGRESAR A home</a>
          

      </div>
    </section>
	
@endsection()