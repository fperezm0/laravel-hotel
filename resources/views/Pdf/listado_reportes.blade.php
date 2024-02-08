@extends('template.master')
@section('contenido_central')
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Listado de Reportes</h2>
          <ol>
            <li>Generar reporte en PDF</li>
          </ol>
        </div>

      </div>
    </section>

@endsection()
@section('contenido_central2')
  <section id="story-intro" class="story-intro">
      <div class="container">

          <div class="col-lg-6 order-1 order-lg-2"></div>
      <br /><br />
      <table id="tabla1" class="table table-striped table-bordered"
          style="width:100%">
      <thead>
      <tr>

        <th>ID </th>
        <th>REPORTE</th>
        <th>VER</th>
        <th>DESCARGAR</th>
      </tr> 
      </thead>
      <tbody>
      <tr>
        <td>1</td>
        <td>Reporte  habitaciones  </td>
        <td><a href="{!! asset('crear_reporte_nombre/1') !!}">
            <button class="btn btn-success">
            Ver
          </button>
        </a></td>
        <td><a href="{!! asset('crear_reporte_nombre/2') !!}">
            <button class="btn btn-success">
            Descargar
          </button>
        </a></td>
      </tr>
      <tr>
        <td>2</td>
        <td>Reporte  habitaciones ocupadas</td>
        <td><a href="{!! asset('crear_reporte_id/1') !!}">
            <button class="btn btn-success">
            Ver
          </button>
        </a></td>
        <td><a href="{!! asset('crear_reporte_id/2') !!}">
            <button class="btn btn-success" >
            Descargar
          </button>
        </a></td>
      </tr>
            <tr>
        <td>3</td>
        <td>Reporte  de reservaciones </td>
        <td><a href="{!! asset('reportereservacion/1') !!}">
            <button class="btn btn-success">
            Ver
          </button>
        </a></td>
        <td><a href="{!! asset('reportereservacion/2') !!}">
            <button class="btn btn-success" >
            Descargar
          </button>
        </a></td>
      </tr>
      </tbody>
    </table>
    <br />
    <a class="btn btn-success" href="{!! asset('/') !!}">REGRESAR A home</a>
          

      </div>
    </section>
@endsection()
