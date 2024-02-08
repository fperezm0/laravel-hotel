
<!DOCTYPE html>
<html>
<head>
	<title>Reporte de habitacion</title>
  <style>
    .col-md-12{
      width: 100%;
    }

    .box {
    position: :relative;
    border-radius: 3px;
    background:  #ffffff;
    border-top: 3px solid #316158;
    margin-bottom: 20px;
    width: 100%;
    box-shadow: 0 1px 1px rgba(0,0,0,0.1);
    background-color: #ECF0F5;
    }
    .box-header {
    color: #444;
    display: block;
    padding: 10px;
    position: :relative;
    }
    .box-header.with-border {
    border-bottom: 1px solid #266067;
    text-align: center;
    }
    .box-header.box-title {
    display: inline-block;
    font-size: 20px;
    margin: 0;
    line-height: 1;
    font-family: "arial";
    }
    .box-body {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    padding: 10px;

    }
    .box-footer {
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-bottom-right-radius: 3px;
    border-bottom-left-radius: 3px;
    border-top: 1px solid #f4f4f4;
    padding: 10px;
    background-color: #fff;
    }
    .table-bordered{
      border: 1px solid #f4f4f4;
    }
    .table{
      width: 100%;
      max-width: 100%;
      margin-bottom: 20px;
    }
    table{
      background-color: transparent;
    }
    .table-bordered>tbody>tr>th, .table-bordered>tfoot>tr>th,
    .table-bordered>thead>tr>td, .table-bordered>tbody>tr>td,
    .table-bordered>tfoot>tr>td {
      border: 1px solid #f4f4f4;
    }
    .badge{
    display: inline-block;
    min-width: 10px;
    padding: 3px 7px;
    font-size: 15px;
    font-weight: 700;
    line-height: 1;
    color: #blue;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    background-color: #777;
    border-radius: 4px;
    }
    .bg-red{
      background-color: #378C9A !important;
    }
  </style>

</head>
<body>
	<div class="col-md-12">
      <div class="box">
        <div class="box-header with-border">
          <h3 class="box-title">Reporte de Habitaciones <br />-<?= $date; ?></h3>
          
        </div>
        <div class="box-body">
          <table class="table table-bordered">
              <thead>
              <tr bgcolor="#DBF4C4">

                <th style="width: 40px">id</th>
                <th>numero_de_habitacion </th>
                <th>tipo </th>
              
                <th>precio </th>
                <th style="width: 40px">tipo de habitacion</th>
              </tr> 
              </thead>
              <tbody>
                <?php foreach($data as $habitacion){ ?>
              
                <tr bgcolor="#93D1B6">
                  <td style="width: 10px"><?= $habitacion->id; ?></td>
                  <td ><?= $habitacion->numero_de_habitacion; ?></td>
                   <td ><?= $habitacion->nombre; ?></td>
                 
                     <td ><?= $habitacion->precio; ?></td>
                  <td>
                    <span class="badge bg-red"><?= $habitacion->precio; ?></span> 
                  </td>
                </tr>
                <?php } ?>
              </tbody>
          </table>
        </div>
        <div class="box-footer"></div>
      </div>
  </div>
    <div align="center"> <img src="{!! asset('estilo/assets/img/vista10.jpg') !!}" width="300px" align="center"></div>
</body>
</html>


