@extends('template.master')
@section('contenido_central')

    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>REGISTRATE</h2>
          <ol>
            <li>Registro de Usurios</li>
          </ol>
        </div>

      </div>
    </section>


    <section id="story-intro" class="story-intro">
      <div class="container">

          <div class="col-lg-6 order-1 order-lg-2" >
          </div>

                <form action="register" method="post" role="form" >
                  {{ csrf_field() }}
              <div class="form-row">

                <div class="col-md-6 form-group">
                  <input type="text" name="nombre" class="form-control" id="nombre" placeholder="Nombre" data-rule="minlen:4" data-msg="Capturar mas de 4 caracteres" required="" maxlength="30" />
                  <div class="validate"></div>
                </div>
                    </br>
                     
                     
                    </div></br>
                          <div class="col-md-6 form-group">
                  <input type="text" name="Direccion" class="form-control" id="Direccion" placeholder="Direccion" data-rule="minlen:4" data-msg="Capturar mas de 4 caracteres" required="" maxlength="20" />
                  <div class="validate"></div>     
                  </br>
                <div class="col-md-6 form-group">
                  <input type="number" name="telefono" class="form-control" id="telefono" placeholder="Telefono" data-rule="minlen:4" data-msg="Capturar mas de 4 caracteres" required="" min="0" max="7299999999" />
                  <div class="validate"></div>
                </div>
                   </br>

                          <div class="col-md-6 form-group">
                  <input type="date" name="Fechanac" class="form-control" id="FechaNac" placeholder="Fecha Nacimiento" data-rule="minlen:4" data-msg="Capturar mas de 4 caracteres" required="" maxlength="20" />
                  <div class="validate"></div>     
                        </br>
                <div class="col-md-6 form-group">
                  <input type="Email" name="correo" class="form-control" id="email" placeholder="Email" data-rule="minlen:4" data-msg="Capturar mas de 4 caracteres" required="" />
                  <div class="validate"></div>
                </div>
                  
                        </br>
                <div class="col-md-6 form-group">
                  <input type="text" name="username" class="form-control" id="username" placeholder="Username" data-rule="minlen:4" data-msg="Capturar mas de 4 caracteres" required="" maxlength="25"/>
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="password" class="form-control" name="password" id="password" placeholder="Password"  data-msg="Capturar password" required="" maxlength="255" />
                  <div class="validate" ></div>
                </div>
                   
                        </br>    
                <div class="col-md-6 form-group">
                  <select name="tipos_de_usuario_id" id="tipos_de_usuario_id" >
                    <option value="1">Administrador</option>
                    <option value="2">Recepcionista</option>
                    <option value="3">cliente</option>

                  </select>
                </div>
                
              </div>

              <div class="text-center">
                <input  type="submit" value="Registrar1"></input>
              </div>
            </form> 

            </div>
    </section>

@endsection()