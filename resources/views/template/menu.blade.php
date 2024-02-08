<!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="{!! asset('/') !!}">Hotel Palace Versailles</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="{!! asset('/') !!}">Home</a></li>
        

         
          
          @auth
            <li><a href="#">Usuario: 
              {{ $usuario->nombre }}

              </a></li>
        
             <li><a href="{!! asset('cerrarsession') !!}">Logout</a></li>
             <li><a href="{!! asset('contacto') !!}">Contacto</a></li>
          @else
            <li><a href="{!! asset('login1') !!}">Login</a></li>
            <li><a href="{!! asset('register1') !!}">Register</a></li>
             <li><a href="{!! asset('bloc') !!}">Bloc</a></li>
              <li><a href="{!! asset('help') !!}">Help</a></li>
            @endauth
           
          


        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->

