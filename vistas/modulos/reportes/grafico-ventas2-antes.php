<?php

error_reporting(0);

$fechaInicial = "2000-06-01";
$fechaFinal = "2000-12-30";

$respuesta = ControladorVentas::ctrRangoFechasVentas($fechaInicial, $fechaFinal);

$arrayFechas = array();
$arrayVentas = array();
$sumaPagosMes = array();

foreach ($respuesta as $key => $value) {

  #Capturamos sólo el año y el mes
  $fecha = substr($value["fecha"], 0, 7);

  #Introducir las fechas en arrayFechas
  array_push($arrayFechas, $fecha);

  #Capturamos las ventas
  $arrayVentas = array($fecha => $value["total"]);

  #Sumamos los pagos que ocurrieron el mismo mes
  foreach ($arrayVentas as $key => $value) {

    $sumaPagosMes[$key] += $value;
  }
}

$noRepetirFechas = array_unique($arrayFechas);
?>
<!--=====================================
GRÁFICO DE VENTAS
======================================-->
<div class="box box-solid bg-green-gradient">
  <div class="box-header">
    <i class="fa fa-th"></i>
    <h3 class="box-title">Gráfico de Ventas</h3>
  </div>
  <div class="box-body border-radius-none nuevoGraficoVentas">
    <div class="chart" id="area-chart-ventas" style="height: 250px;"></div>
  </div>
</div>
<script>
  var area = new Morris.Area({
    element: 'area-chart-ventas',
    resize: true,
    data: [
      <?php
      if ($noRepetirFechas != null) {
        foreach ($noRepetirFechas as $key) {
          echo "{ y: '" . $key . "', ventas: " . $sumaPagosMes[$key] . " },";
        }
        echo "{y: '" . $key . "', ventas: " . $sumaPagosMes[$key] . " }";
      } else {
        echo "{ y: '0', ventas: '0' }";
      }
      ?>
    ],
    xkey: 'y',
    ykeys: ['ventas'],
    labels: ['ventas'],
    lineColors: ['#efefef'],
    lineWidth: 2,
    hideHover: 'auto',
    gridTextColor: '#fff',
    gridStrokeWidth: 0.4,
    pointSize: 4,
    pointStrokeColors: ['#efefef'],
    gridLineColor: '#efefef',
    gridTextFamily: 'Open Sans',
    preUnits: 'BOB. ',
    gridTextSize: 10,
    fillOpacity: 0.5
  });
</script>