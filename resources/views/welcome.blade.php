@extends('template.master')
@section('contenido_central')

   <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" class="carousel slide carousel-fade" data-ride="carousel">

      <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url({!! asset('estilo/assets/img/slide/vista3.jpg') !!})">
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url({!! asset('estilo/assets/img/slide/vista4.jpg') !!})">
        </div>

       
  <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url({!! asset('estilo/assets/img/slide/vista5.jpg') !!})">
        </div>

        <!-- Slide 4 -->
        <div class="carousel-item" style="background-image: url({!! asset('estilo/assets/img/slide/vista7.jpg') !!})">
        </div>

         <!-- Slide 5 -->
        <div class="carousel-item" style="background-image: url({!! asset('estilo/assets/img/slide/vista8.jpg') !!})">
        </div>

         <!-- Slide 6 -->
        <div class="carousel-item" style="background-image: url({!! asset('estilo/assets/img/slide/vista9.jpg') !!})">
        </div>


    </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon icofont-simple-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-slide="next">
        <span class="carousel-control-next-icon icofont-simple-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>

    </div>





  </section><!-- End Hero -->

@endsection()

@section('contenido_central2')

<!--======= Features Section ======= -->
    <section id="features" class="features">

        <div class="row content">
          <div align="right" class="col-lg-6">
            <img src="{!! asset('estilo/assets/img/slide/vista00.jpg') !!}"  width="80%" class="img-fluid"a alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
            <p>
               ofrece servicios y comodidades impecables en un entorno enriquecedor y auténtico. Tres sofisticados restaurantes y dos salones invitan a los huéspedes a darse un capricho, mientras que los grandes salones de baile y espacios para eventos ofrecen ambientes elegantes para albergar ocasiones memorables. Para un verdadero mimo, una piscina cubierta, un gimnasio y un spa son opciones alternativas.
            </p>
            <ul>
             



              <li><i class="ri-check-double-line"></i> 
Estacionamiento gratis <br/>
               </li>
                 <li><i class="ri-check-double-line"></i> Wifi</li>
              <li><i class="ri-check-double-line"></i> Gimnasio con gimnasio / sala de ejercicios</li>
                  <li><i class="ri-check-double-line"></i> Bar / salón</li>
                    <li><i class="ri-check-double-line"></i> Estacionamiento gratis</li>
              <li><i class="ri-check-double-line"></i> Transporte aeropuerto</li>
                <li><i class="ri-check-double-line"></i> Piscina</li>
                  <li><i class="ri-check-double-line"></i> Instalaciones para conferencias</li>
            </ul>
            <p>
              Las habitaciones están insonorizadas y disponen de aire acondicionado, ordenador, TV de pantalla plana por cable y vía satélite, zona de estar con sofá, bañera de hidromasaje y baño privado. También ofrecen vistas al mar y al jardín. Se proporcionan albornoces suaves y artículos de aseo gratuitos.
            </p>
            <a href="our-story.html" class="btn-learn-more">Learn More</a>
          </div>
        </div>

      <div class="container">

        <div class="row">
          <a href="{!! asset('contacto') !!}">
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-search-document"></i></div>
            <h4 class="title"><a href="">Contactanos</a></h4>
            <p class="description">Tél : +33 1 30 84 50 18<br/>
                  Fax : +33 1 30 84 50 01</p>
          </div>
          </a>
         <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-tasks-alt"></i></div>
            <h4 class="title"><a href="">Reservaciones</a></h4>
            <p class="description">Reseva ahora y  aprovecha nuestras ofertas y nuestras fechas disponibiles</p>
          </div>
          </a>
          
        

       
          <div class="col-lg-4 col-md-6 icon-box">
             <a href="{{ asset('paises') }}">
            <div class="icon"><i class="icofont-earth"></i></div>
            <h4 class="title"><a href="">Paises</a></h4>
            <p class="description">busca en que paises y estados estamos ubicados</p>

          </div>
          <a href="{!! asset('estados') !!}">
          <div class="col-lg-4 col-md-6 icon-box">
            <div class="icon"><i class="icofont-earth"></i></div>
            <h4 class="title"><a href="">Estados</a></h4>
            <p class="description"></p>

          </div>

         
          <div class="col-lg-4 col-md-6 icon-box">
             <a href="{!! asset('municipios') !!}">
            <div class="icon"><i class="icofont-earth"></i></div>
            <h4 class="title"><a href="">Municipios</a></h4>
            <p class="description"></p>

          </div>

        </a>
          <div class="col-lg-4 col-md-6 icon-box">
              <a href="{!! asset('fotos_de_habitacion') !!}">
            <div class="icon"><i class="icofont-image"></i></div>
            <h4 class="title"><a href="">Galeria hotel</a></h4>
            <p class="description"></p>
          </div>

          <div class="col-lg-4 col-md-6 icon-box">
            <a href="{!! asset('grafica_3d') !!}">
            <div class="icon"><i class="icofont-settings"></i></div>
            <h4 class="title"><a href="">Precios habitaciones</a></h4>
            <p class="description"></p>
          </div>

          <div class="col-lg-4 col-md-6 icon-box">
             <a href="{!! asset('grafica_3d2') !!}">
            <div class="icon"><i class="icofont-settings"></i></div>
            <h4 class="title"><a href="">Precios servicios</a></h4>
            <p class="description"></p>
          </div>
         
        </div>

      </div>
    </section> 

@endsection()