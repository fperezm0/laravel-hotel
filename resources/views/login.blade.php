@extends('template.master')
@section('contenido_central')

    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>LOGIN</h2>
          <ol>
            <li>Ingreso</li>
          </ol>
        </div>

      </div>
    </section>

    <section id="story-intro" class="story-intro">
      <div class="container">

          <div class="col-lg-6 order-1 order-lg-2" >
          </div>

                <form action="login1" method="post" role="form" >
                  {{ csrf_field() }}
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="username" class="form-control" id="username" placeholder="Username" data-rule="minlen:4" data-msg="Capturar mas de 4 caracteres"/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password"  data-msg="Capturar password" />
                  <div class="validate"></div>
                </div>
              </div>


              <div class="text-center"><button type="submit" class="botones">Ingresar</button></div>
            </form> 

            </div>
    </section>

@endsection()