<?php

error_reporting(0);

if (isset($_GET["fechaInicial"])) {
  $fechaInicial = $_GET["fechaInicial"];
  $fechaFinal = $_GET["fechaFinal"];
} else {
  $fechaInicial = null;
  $fechaFinal = null;
}

$respuesta = ControladorVentas::ctrRangoFechasVentas($fechaInicial, $fechaFinal);

$arrayFechas = array();
$arrayVentas = array();
$sumaPagosMes = array();

foreach ($respuesta as $key => $value) {
  $fecha = substr($value["fecha"], 0, 7);

  array_push($arrayFechas, $fecha);

  $arrayVentas = array($fecha => $value["total"]);

  foreach ($arrayVentas as $key => $value) {
    $sumaPagosMes[$key] += $value;
  }
}

$noRepetirFechas = array_unique($arrayFechas);

// Colores personalizados para cada sección del gráfico
$colores = ['#efefef', '#ff0000', '#00ff00', '#0000ff', '#ffff00', '#00ffff', '#ff00ff'];

?>
<!--=====================================
GRÁFICO DE VENTAS
======================================-->
<div class="box box-solid bg-aqua-gradient">
  <div class="box-header">
    <i class="fa fa-th"></i>
    <h3 class="box-title">Gráfico de Ventas</h3>
  </div>
  <div class="box-body border-radius-none nuevoGraficoVentas">
    <div class="chart" id="donut-chart-ventas" style="height: 250px;"></div>
  </div>
</div>
<script>
  var donut = new Morris.Donut({
    element: 'donut-chart-ventas',
    resize: true,
    data: [
      <?php
      if ($noRepetirFechas != null) {
        $i = 0; // Contador para los colores
        foreach ($noRepetirFechas as $key) {
          echo "{ label: '" . $key . "', value: " . $sumaPagosMes[$key] . ", color: '" . $colores[$i] . "' },";
          $i++;
        }
        echo "{ label: '" . $key . "', value: " . $sumaPagosMes[$key] . ", color: '" . $colores[$i] . "' }";
      } else {
        echo "{ label: '0', value: '0', color: '#efefef' }";
      }
      ?>
    ],
    hideHover: 'auto',
    gridTextColor: '#fff',
    gridStrokeWidth: 0.4,
    gridLineColor: '#efefef',
    gridTextFamily: 'Open Sans',
    formatter: function (x) {
      return 'BOB. ' + x;
    }
  });
</script>
