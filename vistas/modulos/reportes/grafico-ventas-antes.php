<?php

error_reporting(0);

$fechaInicio = "2010-06-01"; // Aquí define la fecha de inicio
$fechaFinal = "2018-06-30"; // Aquí define la fecha final

$respuesta = ControladorVentas::ctrRangoFechasVentas($fechaInicio, $fechaFinal);

$arrayVentas = array();
$sumaVentasMes = array();

foreach ($respuesta as $key => $value) {
  $fecha = substr($value["fecha"], 0, 7);

  if (!isset($arrayVentas[$fecha])) {
    $arrayVentas[$fecha] = 0;
  }

  $arrayVentas[$fecha] += $value["total"];
}

foreach ($arrayVentas as $key => $value) {
  $sumaVentasMes[] = array("y" => $key, "ventas" => $value);
}

$noRepetirFechas = array_unique(array_column($sumaVentasMes, 'y'));
?>

<!--=====================================
GRÁFICO DE VENTAS
======================================-->
<div class="box box-solid bg-teal-gradient">
  <div class="box-header">
    <i class="fa fa-th"></i>
    <h3 class="box-title">ANTES</h3>
  </div>
  <div class="box-body border-radius-none nuevoGraficoVentas">
    <div class="chart" id="line-chart-ventas" style="height: 250px;"></div>
  </div>
</div>

<script>
  var line = new Morris.Line({
    element: 'line-chart-ventas',
    resize: true,
    data: <?php echo json_encode($sumaVentasMes); ?>,
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
  });
</script>
