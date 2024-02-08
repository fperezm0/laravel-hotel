@extends('template.master')
@section('contenido_central')
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Gráfica de Barras de precios de Servicios</h2>
          <ol>
            <li>Gráfica de Barras de Servicios</li>
          </ol>
        </div>

      </div>
    </section>

@endsection()
@section('contenido_central2')
  <script src="{!! asset('code/highcharts.js') !!}"></script>
  <script src="{!! asset('code/modules/exporting.js') !!}"></script>
  <script src="{!! asset('code/modules/export-data.js') !!}"></script>

  <?php
  $campos = "";
  foreach($servicio as $habitacion){
  $campos = $campos."[ '".$habitacion->nombre ."' , ".$habitacion->precio ."],";
  }

  ?>  
  <div id="container" style="min-width: 300px; height: 500px; margin: 1 auto"></div>

  <script type="text/javascript">

  Highcharts.chart('container', {
      chart: {
          type: 'column'
      },
      title: {
          text: 'nombre'
      },
      subtitle: {
          text: 'Fuente: Hote Palace Versaillesl '
      },
      xAxis: {
          type: 'category',
          labels: {
              rotation: -45,
              style: {
                  fontSize: '13px',
                  fontFamily: 'Verdan, Arial'
              }
          }
      },
      yAxis: {
          min: 0,
          title: {
              text: 'precio'
          }
      },
      legend: {
          enabled: false
      },
      tooltip: {
          pointFormat: '$ <b>{point.y:.1f} pesos</b>'
      },
      series: [{
          name: 'Population',
          data: [
              <?= $campos ?>
          ],
          dataLabels: {
              enabled: true,
              rotation: -90,
              color: '#RED',
              align: 'right',
              format: '{point.y:.1f}', // one decimal
              y: 10, // 10 pixels down from the top
              style: {
                  fontSize: '13px',
                  fontFamily: 'Verdana, Arial'
              }
          }
      }]
  });
  </script>

@endsection()

